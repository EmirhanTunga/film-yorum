@extends($masterpage ?? 'panel.master')

@section('breadcrumb')
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('panel.index') }}">Ana Sayfa</a></li>
        @foreach ($container->view->breadcrumb as $title => $href)
            <li class="breadcrumb-item"><a href="{{ $href }}">{{ $title }}</a></li>
        @endforeach
        <li class="breadcrumb-item active">{{ is_null($item->id) ? 'Ekle' : 'Düzenle' }}</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12">

            <ul class="nav nav-tabs nav-fill" role="tablist">
                <li class="nav-item">
                    <a class="nav-link fs-lg px-4 active" data-toggle="tab" href="#tab_set1" role="tab">Genel</a>
                </li>
            </ul>

            <div id="panel-1" class="panel" style="border-top: none;">
                <form ajax-form method="POST"
                    action="{{ route('panel.' . $container->page . '_save', ['unique' => $item->id]) }}"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="panel-container show">
                        <div class="panel-content">

                            <div class="tab-content p-1">

                                <div class="tab-pane fade show active" id="tab_set1" role="tabpanel">
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <div class="form-group mb-2">
                                                <label class="form-label">Ad</label>
                                                <input type="text" class="form-control" name="name"
                                                    value="{{ old('name') ? old('name') : $item->name }}" required>
                                                @error('name')
                                                    <span class="badge badge-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label class="form-label">Kimlik Numarası</label>
                                                <input type="number" class="form-control" name="tc"
                                                    value="{{ old('tc') ? old('tc') : $item->tc }}" required
                                                    mask="tckimlik">
                                                @error('tc')
                                                    <span class="badge badge-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label class="form-label">Doğum Tarihi</label>
                                                <input type="date" class="form-control" name="birthday"
                                                    value="{{ !is_null($item->birthday) ? $item->birthday->format('Y-m-d') : old('birthday') }}"
                                                    required>
                                                @error('birthday')
                                                    <span class="badge badge-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label class="form-label">Telefon</label>
                                                <input type="text" class="form-control" name="phone"
                                                    value="{{ old('phone') ? old('phone') : $item->phone }}" required
                                                    autocomplete="off" mask="phone">
                                                @error('phone')
                                                    <span class="badge badge-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label class="form-label">E-Posta Adresi</label>
                                                <input type="email" class="form-control" name="email"
                                                    value="{{ old('email') ? old('email') : $item->email }}" required
                                                    autocomplete="off">
                                                @error('email')
                                                    <span class="badge badge-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label class="form-label">Şifre</label>
                                                <input type="password" class="form-control" name="password"
                                                    {{ is_null($item->id) ? 'required' : '' }} autocomplete="off">
                                                @error('password')
                                                    <span class="badge badge-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label class="form-label">Ünvan</label>
                                                <input type="text" class="form-control" name="title"
                                                    value="{{ old('title') ? old('title') : $item->title }}" required>
                                                @error('title')
                                                    <span class="badge badge-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-content border-faded border-left-0 border-right-0 border-bottom-0 ">
                                <button class="btn btn-primary ml-auto waves-effect waves-themed wd-100"
                                    type="submit">Kaydet</button>
                                <a class="btn btn-warning ml-auto waves-effect waves-themed wd-100 color-white"
                                    href="{{ route('panel.' . $container->page . '_list') }}">İptal</a>
                            </div>
                        </div>
                </form>
            </div>

        </div>
    </div>
@endsection


@section('extra_script')
    <script>
        $('[mask="phone"]').mask('0(000)000 00 00', {
            pattern: /[0-9*]/
        });
        $('[mask="tckimlik"]').mask('00000000000', {
            pattern: /[0-9*]/
        });
    </script>
@endsection
