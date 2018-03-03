<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{Auth::user()->name}}</title>
    <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="">
    @stack('styles')


    <link rel="stylesheet" href="{{asset('css/hover.css')}}">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('js/html5shiv.min.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->
    <style>
        @media print {
            body
            {
                font-family: sans-serif;
                padding-top:0;
            }
            .navbar
            {
                visibility: hidden;
            }


        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-light bg-faded fixed-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->

        <a class="navbar-brand" href="#">CHALLENGE TEAM</a>

        <!-- Links -->
        <div class="collapse navbar-collapse justify-content-end" id="nav-content">
            <ul class="navbar-nav">
                <li class="nav-item" id="profile-home">
                    <a href="/home" class="nav-link"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/dailyReportMorning"> Daily Report </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"href="/monthReport">Monthly Report</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/monthPlan">Monthly Plan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/weeklyPlan">Weekly Plan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/performance">Performance</a>
                </li>
                @auth
                <div class="he-icon2">

                    <li class="nav-item">
                        <a  href="/logout" class="nav-link logout"> Logout <i class="fa fa-sign-out"></i></a>
                    </li>

                </div>
                @endauth


            </ul>
        </div>
    </div>
</nav>
@yield('profile')


<script src="{{asset('js/tether.min.js')}}"></script>

<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/tether.min.js')}}"></script>

<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>

<script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
@stack('scripts')

<script src="{{asset('js/myjs.js')}}" type="text/javascript"></script>

</body>
</html>