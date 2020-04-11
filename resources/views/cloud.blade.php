@extends('template')

@section('title')Dashboard @endsection

@section('css')
<link rel="stylesheet" href="https://allyoucan.cloud/cdn/datatable/1.10.13/css/dataTables.css">
<link rel="stylesheet" href="https://allyoucan.cloud/cdn/datatable/1.10.13/css/reponsive.css">

@endsection

@section('content')
<div class="col-xs-12">
    <div class="row">
        <div class="col-xs-10">
            <h4><i class="fas fa-cloud"></i> cloud</h4>
        </div>
        <div class="col-xs-2 text-right">
            <h3><i class="fas fa-plus-circle"></i></h3>
        </div>
    </div>
    <div class="space"></div>
    <div class="row">
        <div class="col-xs-12">
            <table id="clouds" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center">Server</th>
                        <th class="text-center" data-priority="1">IP</th>
                        <th class="text-center">Apps</th>
                        <th class="text-center">Provider</th>
                        <th class="text-center">Location</th>
                        <th class="text-center" data-priority="2">Actions</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection



@section('modals')

@endsection


@section('js')
<script src="https://allyoucan.cloud/cdn/datatable/1.10.13/js/dataTables.js" defer></script>
<script src="https://allyoucan.cloud/cdn/datatable/1.10.13/js/responsive.js" defer></script>

<script>
$(document).ready(function() {
    if($('#clouds').length ) {
        $('#clouds').DataTable( {
            "responsive": true,
            "ajax": {
                "url": '/cloud/api/list',
                "dataSrc": ""
            },
            'columns': [
                { data: 'name' },
                { data: 'ip' },
                { data: 'apps' },
                { data: 'provider' },
                { data: 'location' },
                { data: 'code' }
            ],
            'columnDefs': [
                {
                    'targets': 1,
                    'render': function ( data, type, row, meta ) {
                        return '<div class="text-center">'+data+'</div>';
                    }
                },
                {
                    'targets': 2,
                    'render': function ( data, type, row, meta ) {
                        return '<div class="text-center">'+data+'</div>';
                    }
                },
                {
                    'targets': 3,
                    'render': function ( data, type, row, meta ) {
                        return '<div class="text-center">'+data+'</div>';
                    }
                },
                {
                    'targets': 4,
                    'render': function ( data, type, row, meta ) {
                        return '<div class="text-center">'+data+'</div>';
                    }
                },
                {
                    'targets': 5,
                    'render': function ( data, type, row, meta ) {
                        return '<div class="text-center"><a href="/apps/'+data+'"><i class="fas fa-laptop-code fa-fw spacex"></i></a><a href="/cloud/'+data+'"><i class="fas fa-edit fa-fw"></i></a></div>';
                    }
                }
            ],
        });
    }
});
</script>
@endsection
