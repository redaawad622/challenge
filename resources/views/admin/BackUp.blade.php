@extends('master')
@section('content')
    <div class="container">

        <div class="statistic  align-items-center bg-white has-shadow" id="promotion">


        <h3>Administer Database Backups</h3>

         <a id="create-new-backup-button" href="{{ url('/admin/BackUp/create') }}" class="btn btn-primary pull-right"
               style="margin-bottom:2em;"><i
                        class="fa fa-plus"></i> Create New Backup
            </a>
            @if (count($backups))

                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>File</th>
                        <th>Size</th>
                        <th>Date</th>
                        <th>Age</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($backups as $backup)
                        <tr>
                            <td>{{ $backup['file_name'] }}</td>
                            <td>{{ App\Helper\AppHelper::instance()->human_filesize($backup['file_size']) }}</td>
                            <td>
                                {{ date('F jS, Y, g:ia (T)',$backup['last_modified']) }}
                            </td>
                            <td>
                                {{App\Helper\AppHelper::instance()->diff_time($backup['last_modified'],time()) }}
                            </td>
                            <td class="text-right">
                                <a class="btn btn-xs btn-default"href="/admin/BackUp/download/{{$backup['file_name']}}">

                                    <i class="fa fa-cloud-download"></i> Download
                                </a>
                                <a class="btn btn-xs btn-danger" data-button-type="delete" href="/admin/BackUp/delete/{{$backup['file_name']}}">
                                   <i class="fa fa-trash-o"></i>
                                    Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <div class="well" style="text-align: center ; padding: 50px;">
                    <h4>There are no backups</h4>
                </div>
            @endif
    </div>
        </div>

@stop
