@extends('panel.master')

@section('subheader')
<div class="subheader">
    <h1 class="subheader-title">
        <i class='subheader-icon fal fa-tags'></i> Kategoriler
    </h1>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-4">
        <div class="panel">
            <div class="panel-hdr">
                <h2>Kategori Ekle</h2>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <form action="{{ route('panel.categories.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Kategori Adı</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Kaydet</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-8">
        <div class="panel">
            <div class="panel-hdr">
                <h2>Kategori Listesi</h2>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Kategori Adı</th>
                                <th>URL (Slug)</th>
                                <th class="text-center">İşlem</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td class="text-center">
                                    <form action="{{ route('panel.categories.delete', $category->id) }}" method="POST">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Silinsin mi?')">Sil</button>
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