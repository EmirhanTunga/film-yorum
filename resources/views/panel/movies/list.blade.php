@extends($masterpage ?? 'panel.master')

@section('breadcrumb')
<ol class="breadcrumb page-breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('panel.movies.index') }}">Ana Sayfa.</a></li>
    @foreach($container->view->breadcrumb as $title => $href)
    <li class="breadcrumb-item"><a href="{{ $href }}">{{ $title }}</a></li>
    @endforeach
    <li class="breadcrumb-item active">Liste</li>

    <li class="position-absolute pos-top pos-right d-none d-sm-block">
        <a href="javascript:void(0);" excel-export class="btn btn-info btn-icon waves-effect waves-themed mr-2" style="margin-top: -8px;">
            <i class="fal fa-file-excel"></i>
        </a>


        <a href="{{ route('panel.movies.create') }}" class="btn btn-success btn-icon waves-effect waves-themed" style="margin-top: -8px;">
            <i class="fal fa-plus"></i>
        </a>
    </li>
</ol>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>{{ $container->title }} Listesi</h2>
            </div>
            <div class="panel-container show">
                <div class="panel-content">

                    <table datatable class="table table-bordered table-hover table-striped w-100">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Afiş</th>
                                <th class="text-center">Film Adı</th>
                                <th class="text-center">Yönetmen</th>
                                <th class="text-center">Yayın Tarihi</th>
                                <th class="text-center wd-80"></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra_script')
<script>
    $(document).ready(function() {
        BaseCRUD.selector = "[datatable]";
        BaseCRUD.ajaxtable({
            ajax: {
                url: "{{ route('panel.movies.index') }}?datatable=true",
                type: 'GET',
                data: function(d) {
                    return $.extend({}, d, {
                        "cfilter": {}
                    });
                }
            },
            columns: [{
                    data: 'id',
                    name: 'id',
                    className: 'text-center'
                },
                {
                    render: function(data, type, row) {
                        return '<img src="/upload/movies/' + row.image + '" style="width:50px;">';
                    },
                    data: 'image',
                    name: 'image',
                    className: 'text-center'
                },
                {
                    data: 'title',
                    name: 'title',
                    className: 'text-center'
                },
                {
                    data: 'director',
                    name: 'director',
                    className: 'text-center'
                },
                {
                    data: 'release_date',
                    name: 'release_date',
                    className: 'text-center'
                },
                {
                    render: function(data, type, row) {
                        var html = '';

                        html += '<a href="{{ route("panel.movies.create") }}/' + row.id + '" class="btn btn-info btn-sm btn-icon waves-effect waves-themed mr-1" data-toggle="tooltip" data-placement="auto" data-original-title="Düzenle">';
                        html += '   <i class="fal fa-edit"></i>';
                        html += '</a>';

                        html += '<a href="javascript:void(0);" row-delete="' + row.id + '" class="btn btn-danger btn-sm btn-icon waves-effect waves-themed" data-toggle="tooltip" data-placement="auto" data-original-title="Sil">';
                        html += '   <i class="fal fa-trash"></i>';
                        html += '</a>';

                        return html;
                    },
                    data: null,
                    orderable: false,
                    searchable: false,
                    className: 'text-center act-col',
                },
            ],
            dom: "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'l>><'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>><'disabled-none'B>",
            buttons: [{
                extend: 'csv',
                charset: 'UTF-8',
                fieldSeparator: ';',
                bom: true,
                filename: 'FilmListesi',
                title: 'Film Listesi'
            }],
            order: [
                [0, 'DESC']
            ],
            pageLength: 50,
        });

        $('[excel-export]').click(function() {
            $('.dt-buttons .buttons-csv').trigger('click');
        });


        BaseCRUD.delete("{{ route('panel.movies.delete', ['id' => 'PLACEHOLDER']) }}".replace('PLACEHOLDER', ''));
    });
</script>
@endsection