@extends('master')
@section('content')

    <div class="container">
        <div class="statistic  align-items-center bg-white has-shadow">
            <h3 style="margin: 9px 0 31px 0px;">Control Users</h3>

            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-search"></i></div>
                    <input type="text" class="form-control" id="search" placeholder="Search By User Name">
                </div>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>File Number</th>
                    <th>Admin Type</th>
                    <th>User Type</th>
                    <th>Remove</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Reda</td>
                    <td>redaawad622@gmail.com</td>
                    <td>123456</td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><a style="border-radius: 0;" href="#" class="btn btn-warning"><i class="fa fa-remove"></i></a></td>
                </tr>
                </tbody>

            </table>
        </div>


@stop
