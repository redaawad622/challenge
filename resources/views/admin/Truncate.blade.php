@extends('master')
@section('content')

    <div class="container">
        @if(Session::has('message'))
            <div class="alert alert-success" role="alert">
                <strong>{{ Session::get('type') }} </strong> {{ Session::get('message') }}
            </div>
        @endif
        <div class="statistic  align-items-center bg-white has-shadow" id="med">
            <h3 style="margin: 9px 0 31px 0px;">Control Database Table</h3>

            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-search"></i></div>
                    <input type="text" class="form-control" id="search" placeholder="Search By Table Name">
                </div>
            </div>

        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Table Name</th>
                <th>Truncate</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tables as $key=>$table)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$table}}</td>
                <td>
                    <form action="/admin/Truncate" method="post">
                        {{csrf_field()}}
                        <input type="hidden" value="{{$table}}" name="table_name">
                        <input type="submit" value="Truncate" class="btn btn-warning">

                    </form>
                </td>
            </tr>
                @endforeach
            </tbody>
        </table>

        </div>

    </div>

@stop
