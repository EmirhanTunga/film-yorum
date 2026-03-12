@extends($masterpage ?? 'panel.master')

@section('breadcrumb')
<ol class="breadcrumb page-breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('panel.index') }}">Ana Sayfa</a></li>
    @foreach($container->view->breadcrumb as $title => $href)
    <li class="breadcrumb-item"><a href="{{ $href }}" href="javascript:void(0)">{{ $title }}</a></li>
    @endforeach
    <li class="breadcrumb-item active">Liste</li>

    <li class="position-absolute pos-top pos-right d-none d-sm-block">
        <a href="javascript:void(0);" excel-export class="btn btn-info btn-icon waves-effect waves-themed mr-2" style="margin-top: -8px;">
            <i class="fal fa-file-excel"></i>
        </a> 
        <a href="{{ route('panel.' . $container->page . '_form') }}" class="btn btn-success btn-icon waves-effect waves-themed" style="margin-top: -8px;" hidden>
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
                                <th class="text-center">Kimlik No</th>
                                <th class="text-center">#</th>
                                <th class="text-center">Ad</th>
                                <th class="text-center">Ünvan</th>
                                <th class="text-center">Email</th> 
                                <th class="text-center wd-80">Telefon</th>  
                                <th class="text-center wd-100">Son Giriş</th> 
                                <th class="text-center wd-100">Durum</th> 
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
    $('[filter-name]').each(function(){  
        var val = localStorage.getItem('usrfilter_' + $(this).attr('filter-name'));
 
        if($('[filter-name="' + $(this).attr('filter-name') + '"]').attr('type') == 'text') 
        {
            $('[filter-name="' + $(this).attr('filter-name') + '"]').val(val); 
        } else {
            $('[filter-name="' + $(this).attr('filter-name') + '"]').val(val).select2();  
        } 
    });

    $(document).ready(function()
    {
        BaseCRUD.selector = "[datatable]";
        BaseCRUD.ajaxtable({
            ajax: {
                url: "{{ route('panel.' . $container->page . '_list') }}?datatable=true",
                type: 'GET', 
                data: function(d) { 
                    var cfilter = { 
                        department: $('[filter-name="department"]').val(), 
                        branch: $('[filter-name="branch"]').val(), 
                    };
                    
                    return $.extend({}, d, {
                        "cfilter": cfilter
                    }); 
                } 
            },  
            columns: [
                { data: 'tc', name: 'tc', visible: false },
                { data: 'id', name: 'id', className: 'text-center' },
                { data: 'name', name: 'name', className: 'text-center'  },
                { data: 'title', name: 'title', className: 'text-center' },
                { data: 'email', name: 'email', className: 'text-center' }, 
                { data: 'phone', name: 'phone', className: 'text-center' },   
                { data: 'last_login', name: 'last_login', className: 'text-center' }, 
                {
                    render : function (data, type, row)
                    {
                        var html = ''; 
                        if(row.is_active == "Aktif"){
                            html = '<b class="text-success"> Aktif </b>';
                        }else{
                            html = '<b class="text-danger"> Pasif </b>'; 
                        } 
                        return html;
                    },
                    data: null, orderable: false, searchable: false, className: 'text-center act-col',
                },
                {
                    render : function (data, type, row)
                    {
                        var html = ''; 
                        html += '<a href="{{ route('panel.' . $container->page . '_form') }}/' + row.id + '" class="btn btn-info btn-sm btn-icon waves-effect waves-themed mr-1" data-toggle="tooltip" data-placement="auto" data-original-title="Düzenle">';
                        html += '   <i class="fal fa-edit"></i>';
                        html += '</a>'; 
                        if(row.is_active == "Aktif"){
                            html += '<a href="javascript:void(0);" row-delete="' + row.id + '" class="btn btn-danger btn-sm btn-icon waves-effect waves-themed" data-toggle="tooltip" data-placement="auto" data-original-title="Sil">';
                            html += '   <i class="fal fa-trash"></i>';
                            html += '</a>'; 
                        }
                        return html;
                    },
                    data: null, orderable: false, searchable: false, className: 'text-center act-col',
                },
            ],  
            dom: "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'l>><'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>><'disabled-none'B>",
            buttons: [
                {
                   extend: 'csv',
                   charset: 'UTF-8',
                   fieldSeparator: ';',
                   bom: true,
                   filename: 'PersonelListesi',
                   title: 'Personel Listesi'
                },
                'pdfHtml5'
            ],
            order: [[1, 'DESC']],
            pageLength: 50,
        });
 
        $('[excel-export]').click(function(){
            $('.dt-buttons .buttons-csv').trigger('click');
        });

        BaseCRUD.delete("{{ route('panel.' . $container->page . '_delete') }}");

        $('[filter-name]').change(function(){
            localStorage.setItem('usrfilter_' + $(this).attr('filter-name'), $(this).val());

            $("[datatable]").DataTable().ajax.reload();   
        });
    });
</script>
@endsection
