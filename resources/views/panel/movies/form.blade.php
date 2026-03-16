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

            <form method="POST" action="{{ route('panel.movies.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="panel-container show">
                    <div class="panel-content">

                        <div class="tab-content p-1">

                            <div class="tab-pane fade show active" id="tab_set1" role="tabpanel">
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="form-group mb-2">
                                            <label class="form-label">Film Adı</label>
                                            <input type="text" class="form-control" name="title"
                                                value="{{ old('title') ? old('title') : $item->title }}" required>
                                            @error('title')
                                            <span class="badge badge-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="form-group mb-2">
                                            <label class="form-label">Film Özeti</label>
                                            <textarea name="description" class="js-summernote">{{ old('description') ? old('description') : $item->description }}</textarea>
                                            @error('description')
                                            <span class="badge badge-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label class="form-label">Yönetmen</label>
                                            <input type="text" class="form-control" name="director"
                                                value="{{ old('director') ? old('director') : $item->director }}">
                                            @error('director')
                                            <span class="badge badge-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label class="form-label">Yayın Tarihi</label>
                                            <input type="text" class="form-control" name="release_date"
                                                value="{{ old('release_date') ? old('release_date') : $item->release_date }}"
                                                datepicker>
                                            @error('release_date')
                                            <span class="badge badge-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label class="form-label">Film Afişi</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image" id="customFile">
                                                <label class="custom-file-label" for="customFile">Afiş Seçin...</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel-content border-faded border-left-0 border-right-0 border-bottom-0 ">
                            <button class="btn btn-primary ml-auto waves-effect waves-themed wd-100"
                                type="submit">Kaydet</button>
                            <a class="btn btn-warning ml-auto waves-effect waves-themed wd-100 color-white"
                                href="{{ route('panel.movies.index') }}">İptal</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection