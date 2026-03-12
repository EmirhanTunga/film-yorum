@extends('panel.master')

@section('subheader')
<div class="subheader">
    <h1 class="subheader-title">
        <i class='subheader-icon fal fa-film'></i> Yeni Film Ekle
    </h1>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>Film Bilgileri</h2>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <form action="{{ route('panel.movies.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="form-label" for="title">Film Adı</label>
                                    <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" placeholder="Filmin tam adını yazınız" required>
                                    @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="description">Film Özeti / Konusu</label>
                                    <textarea name="description" id="description" class="js-summernote">{{ old('description') }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="category_id">Kategori</label>
                                    <select class="select2 form-control" name="category_id" id="category_id">
                                        <option value="">Seçiniz</option>
                                        <option value="1">Aksiyon</option>
                                        <option value="2">Bilim Kurgu</option>
                                        <option value="3">Dram</option>
                                        <option value="4">Komedi</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="director">Yönetmen</label>
                                    <input type="text" name="director" id="director" class="form-control" value="{{ old('director') }}">
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="release_date">Yayın Tarihi</label>
                                    <div class="input-group">
                                        <input type="text" name="release_date" class="form-control" datepicker placeholder="Tarih seçin">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fal fa-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="image">Film Afişi</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Afiş Seçin...</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel-content border-faded border-left-0 border-right-0 border-bottom-0 d-flex flex-row align-items-center mt-3">
                            <button class="btn btn-primary ml-auto" type="submit">
                                <i class="fal fa-save"></i> Filmi Sisteme Kaydet
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection