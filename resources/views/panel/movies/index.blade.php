@extends('panel.master')

@section('subheader')
<div class="subheader">
    <h1 class="subheader-title">
        <i class='subheader-icon fal fa-list'></i> Film Listesi
    </h1>
    <div class="subheader-block">
        <a href="{{ route('panel.movies.create') }}" class="btn btn-primary">Yeni Film Ekle</a>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>Eklenen Filmler</h2>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <table class="table table-bordered table-hover table-striped w-100">
                        <thead>
                            <tr>
                                <th>Afiş</th>
                                <th>Film Adı</th>
                                <th>Yönetmen</th>
                                <th>Kategori</th>
                                <th class="text-center">İşlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($movies as $movie)
                            <tr>
                                <td>
                                    <img src="{{ asset('upload/movies/'.$movie->image) }}" style="width:50px; height:auto;" alt="">
                                </td>
                                <td>{{ $movie->title }}</td>
                                <td>{{ $movie->director }}</td>
                                <td>{{ $movie->category_id }}</td>
                                <td class="text-center">
                                    <a href="{{ route('panel.movies.edit', $movie->id) }}" class="btn btn-sm btn-info">
                                        <i class="fal fa-edit"></i> Düzenle
                                    </a>
                                    <form action="{{ route('panel.movies.delete', $movie->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            class="fal fa-trash"></i> Sil
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection