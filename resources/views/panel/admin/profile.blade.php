@extends($masterpage ?? 'panel.master')

@section('breadcrumb')
<ol class="breadcrumb page-breadcrumb">
  <li class="breadcrumb-item"><a ajax-href="{{ route('panel.index') }}" href="javascript:void(0)">Ana Sayfa</a></li>
  <li class="breadcrumb-item active">Profilim</li>
</ol>
@endsection

@section('content')
<div class="row">
  <div class="col-xl-12">

	<div id="panel-1" class="panel">
	  <div class="panel-hdr">
		<h2>Profilim</h2>
	  </div>
	  <form ajax-form method="POST" action="{{ route('panel.profile_save') }}" autocomplete="off"> 
		@csrf 
		<div class="panel-container show">
		  <div class="panel-content">

			<div class="row">
				<div class="col-12">
					<div class="form-group mb-2">
						<label class="form-label">Ad</label>
						<input type="text" class="form-control" name="name" value="{{ $item->name ?? '' }}" readonly>
                        @error('name')
                            <span class="badge badge-danger">{{ $message}}</span>
                        @enderror
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-6">
					<div class="form-group mb-2">
					  <label class="form-label">E-Posta</label>
					  <input type="text" class="form-control" name="email" value="{{ $item->email ?? '' }}" readonly autocomplete="off">
                      @error('email')
                            <span class="badge badge-danger">{{ $message}}</span>
                        @enderror
					</div>
				</div>
				<div class="col-6">
					<div class="form-group mb-2">
					  <label class="form-label">Telefon</label>
					  <input type="text" class="form-control" name="phone" value="{{ $item->phone ?? '' }}" readonly autocomplete="off" mask="phone"  >
                      @error('phone')
                            <span class="badge badge-danger">{{ $message}}</span>
                        @enderror
					</div>
				</div>
			</div>


			<hr>

			<div class="row">
				<div class="col-6">
					<div class="form-group mb-2">
						<label class="form-label">Yeni Şifre</label>
						<input type="password" class="form-control" name="new_password" autocomplete="new-password">
						@error('new_password')
							<span class="badge badge-danger">{{ $message}}</span>
						@enderror
					</div>
				</div>
				<div class="col-6">
					<div class="form-group mb-2">
						<label class="form-label">Yeni Şifre (Tekrar)</label>
						<input type="password" class="form-control" name="new_password2" autocomplete="new-password">
                        @error('new_password2')
                            <span class="badge badge-danger">{{ $message}}</span>
                        @enderror
					</div>
				</div>
			</div>

		  </div>
		  <div class="panel-content border-faded border-left-0 border-right-0 border-bottom-0 ">
			<button class="btn btn-primary ml-auto waves-effect waves-themed wd-100" type="submit">Kaydet</button>
			<a class="btn btn-warning ml-auto waves-effect waves-themed wd-100 color-white" ajax-href="{{ route('panel.index') }}" href="{{ route('panel.index') }}">İptal</a>
		  </div>
		</div>
	  </form>
	</div>
  </div>
</div>
@endsection


@section('extra_script')

    <script>
         $('[mask="phone"]').mask('(000) 000 00 00', {pattern: /[0-9*]/});
    </script>

@endsection
