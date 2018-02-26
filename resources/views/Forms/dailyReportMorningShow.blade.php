<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1024">
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>daily Report</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('../css/forms.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="../css/form/blackStyle-them.css">
    <link href="../css/font-awesome.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <style>
        @media print {
            .option-box,.pri,#printPage,#hc {
                display:none
            }

        }

        html
        {
            direction: ltr;
        }

        table
        {
            margin-bottom:40px ;
        }
        table
        {
            text-align: center;
        }

        .padding-t-xl
        {
            padding-top: 60px;
        }
        .padding-t
        {
            padding-top: 16px;
        }
        .padding-r
        {
            margin-right: 16px;
        }
        #lin
        {
            border: none;
            border-bottom: 1px dashed black;
        }
        input
        {
            text-align: left;
        }
        #hed td
        {
            border-top:none ;
        }
    </style>


</head>
<body>
<section class="option-box" style="top: 0">
    <div class="color-option">

        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-option">

                <h4>Color option</h4>

                <ul class="list-unstyled">
                    <li style="background:#000" data-value="../css/form/blackStyle-them.css"></li>
                    <li data-value="../css/form/pinkStyle-them.css"></li>
                    <li data-value="../css/form/blueStyle-them.css"></li>
                    <li data-value="../css/form/seaStyle-them.css"></li>
                    <li data-value="../css/form/greenStyle-them.css"></li>
                    <li data-value="../css/form/violetStyle-them.css"></li>
                </ul>
                </div>
            </div>


                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-option">
                        <label>heading & footer font size</label>
                        <input type="text" class="form-control" id="font-head">

                        <label>table head Font size</label>
                        <input type="text" class="form-control" id="font-table-head">

                        <label>table body Font size</label>
                        <input type="text" class="form-control" id="font">



                    </div>


                </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-option">


                    <label>heading & footer bold option</label>
                    <select class="custom-select" id="change-bold">
                        <option value="100">100</option>
                        <option value="200">200</option>
                        <option value="300">300</option>
                        <option value="400">400</option>
                        <option value="500">500</option>
                        <option value="600">600</option>
                        <option value="700">700</option>
                        <option value="800">800</option>
                        <option value="900">900</option>


                    </select>


                    <label>table head bold option</label>
                    <select class="custom-select" id="change-bold-th">
                        <option value="100">100</option>
                        <option value="200">200</option>
                        <option value="300">300</option>
                        <option value="400">400</option>
                        <option value="500">500</option>
                        <option value="600">600</option>
                        <option value="700">700</option>
                        <option value="800">800</option>
                        <option value="900">900</option>


                    </select>

                    <label>table body bold option</label>
                    <select class="custom-select" id="change-bold-tb">
                        <option value="100">100</option>
                        <option value="200">200</option>
                        <option value="300">300</option>
                        <option value="400">400</option>
                        <option value="500">500</option>
                        <option value="600">600</option>
                        <option value="700">700</option>
                        <option value="800">800</option>
                        <option value="900">900</option>


                    </select>
                </div>
            </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-option">

                    <label>heading & footer Font family</label>
                    <select class="custom-select" id="change-family">
                        <option value="sans-serif">sans-serif</option>

                        <option value="serif">serif</option>
                        <option value="cursive">cursive</option>
                        <option value="fantasy">fantasy</option>
                        <option value="initial">initial</option>
                        <option value="monospace">monospace</option>
                        <option value="-webkit-pictograph">-webkit-pictograph</option>

                    </select>
                        <label>table head Font family</label>
                    <select class="custom-select" id="change-family-th">
                        <option value="sans-serif">sans-serif</option>

                        <option value="serif">serif</option>
                        <option value="cursive">cursive</option>
                        <option value="fantasy">fantasy</option>
                        <option value="initial">initial</option>
                        <option value="monospace">monospace</option>
                        <option value="-webkit-pictograph">-webkit-pictograph</option>

                    </select>
                        <label>table body Font family</label>
                    <select class="custom-select" id="change-family-td">
                        <option value="sans-serif">sans-serif</option>

                        <option value="serif">serif</option>
                        <option value="cursive">cursive</option>
                        <option value="fantasy">fantasy</option>
                        <option value="initial">initial</option>
                        <option value="monospace">monospace</option>
                        <option value="-webkit-pictograph">-webkit-pictograph</option>

                    </select>
                    </div>
                </div>






    </div>
    </div>
    <i class="fa fa-pencil-square-o fa-3x gear-ch"></i>
</section>
<section class="pri">
<div class="icon-search">
    <div class="search-f-div active-search">
      <i  class="fa fa-search"></i> Basic

    </div>
    <div class="search-s-div">
        <i  class="fa fa-search"></i> More Search

    </div>
</div>

    <form class="f-form-search"  action="/search" method="post">
        {{csrf_field()}}



                <select name='select_name'>
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach

                </select>
        <div>
            <button  type="submit" class=""><i class="fa fa-search"></i></button>

        </div>





        <input type="hidden" value="{{date('Y-m-d'),time()}}" name="date" class="form-control">

    </form>
    <form class="s-form-search"   action="/Adsearch" method="post">
        {{csrf_field()}}




            <select name='select_name'>
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach

            </select>
            <input type="date"   name="date" class="form-control">
        <div>
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>




    </form>
</section>



<section class="container-fluid">
    @if(isset($reports_mornings))

    <h3 class="bold" style="text-align: center; margin-top: 50px;">  Daily Report </h3>
    <h3><img src="../image/LogoImageMasterPage.jpg"> Scientific Office</h3>




        <table class="table" id="hed">

            <tbody>
            <tr>
                <th>
                    <div class="form-inline padding-t-xl">
                        <div class="form-group">
                            <label class="padding-r" for="inputPassword6"> File No: </label>

                            <input type="text" value="{{$user_name->file_num}}" id="lin"  class="form-control mx-sm-3" >
                        </div>
                    </div>
                </th>
                <th>
                    <div class="form-inline padding-t-xl">
                        <div class="form-group">
                            <label class="padding-r" for="inputPassword6"> Name: </label>

                            <input type="text"  value="{{$user_name->name}}" id="lin" class="form-control mx-sm-3" >
                        </div>
                    </div>
                </th>
                <th>
                    <div class="form-inline padding-t-xl">
                        <div class="form-group">
                            <label class="padding-r" for="inputPassword6"> Date: </label>

                            <input type="text" id="lin" value="@if($count__headers>=1){{date('Y/m/d , l',strtotime($reports_headers[0]->created_at))}}@endif" class="form-control mx-sm-3" >
                        </div>
                    </div>
                </th>
                <th>
                    <div class="form-inline">
                        <div class="form-group">
                            <label class="padding-r" for="inputPassword6"> Area: </label>

                            <input type="text" id="lin" name="area" value="@if($count__headers>=1){{$reports_headers[0]->area}}@endif"  class="form-control mx-sm-3" >
                        </div>
                    </div>

                    <div class="form-inline padding-t">
                        <div class="form-group">
                            <label class="padding-r " for="inputPassword6"> Line: </label>

                            <input type="text" id="lin" name="line" value="@if($count__headers>=1){{$reports_headers[0]->line}}@endif" class="form-control mx-sm-3 line" >
                        </div>
                    </div>
                </th>
            </tr>

            </tbody>
        </table>



        <table class="table table-bordered center">
            <thead>
            <tr>

                <th> <h4 class="center"> Code No </h4></th>
                <th colspan="3"> <h4 class="center">hospital or institute name</h4></th>
                <th colspan="2"> <h4 class="center">Doctor name </h4></th>
                <th colspan="3"> <h4 class="center"> Specialty</h4></th>
                <th colspan="4">
                    <h4 class="center"> Products</h4>
                    <div class="row">
                        <div class="col-md-4">
                            F1
                        </div>

                        <div class="col-md-4">
                            F2
                        </div>
                        <div class="col-md-4">
                            R
                        </div>
                    </div>
                </th>
                <th id="hc">Remove</th>
            </tr>

            </thead>

            <tbody>
            @foreach($reports_mornings as $c=>$reports_morning)

            <tr>

                <td> {{$reports_morning->code_no}} </td>
                <td colspan="3"> {{$reports_morning->hosp_name}} </td>
                <td colspan="2"> {{$reports_morning->doctor_name}} </td>
                <td colspan="3"> {{$reports_morning->specialty}} </td>
                <td colspan="4">

                    <div class="row">
                        <div class="col-md-4">
                            {{$reports_morning->pro_f1}}
                        </div>

                        <div class="col-md-4">
                            {{$reports_morning->pro_f2}}

                        </div>
                        <div class="col-md-4">
                            {{$reports_morning->pro_r}}
                        </div>
                    </div>
                </td>
                <td id="hc">
                    <form  method="get" action="/removeRow/{{$reports_morning->id}}">
                        <span hidden>{{csrf_token()}}</span>

                        <button type="submit" ><i class="fa fa-close"></i></button>
                    </form>

                </td>
            </tr>
                @endforeach

            </tbody>
        </table>



        <table class="table table-bordered center">
            <thead>
            <tr>
                <th scope="col">#</th>
                <td colspan="2"> <h4 class="center"> Code </h4></td>
                <td colspan="4"> <h4 class="center">Doctor's Name </h4></td>
                <td colspan="2"> <h4 class="center"> Specialty</h4></td>
                <td colspan="1"> <h4 class="center"> Class</h4></td>
                <td colspan="3"> <h4 class="center"> Clinic Address</h4></td>
                <td colspan="4">
                    <h4 class="center"> Products Detailed </h4>
                    <div class="row">
                        <div class="col-md-3">
                            F1
                        </div>

                        <div class="col-md-3">
                            F2
                        </div>
                        <div class="col-md-3">
                            R
                        </div>
                        <div class="col-md-3">
                            D
                        </div>

                    </div>
                </td>
                <td id="hc">Remove</td>

            </tr>
            </thead>

            <tbody>
            @foreach($reports_evenings as $key=>$reports_evening)

                <tr>
                <th scope="row">{{$key+1}}</th>
                <td colspan="2"> {{$reports_evening->code_m}} </td>
                <td colspan="4">{{$reports_evening->doctors_name}}</td>
                <td colspan="2">{{$reports_evening->specialty_m}}</td>
                <td colspan="1">{{$reports_evening->class_m}}</td>
                <td colspan="3">{{$reports_evening->clinic_address}}</td>
                <td colspan="4">

                    <div class="row">
                        <div class="col-md-3">
                            {{$reports_evening->prd_f1}}
                        </div>

                        <div class="col-md-3">
                            {{$reports_evening->prd_f2}}

                        </div>
                        <div class="col-md-3">
                            {{$reports_evening->prd_r}}

                        </div>
                        <div class="col-md-3">
                            {{$reports_evening->prd_d}}

                        </div>
                    </div>
                </td>
                    <td id="hc">
                        <form  method="get" action="/removeRowM/{{$reports_evening->id}}">
                            <span hidden>{{csrf_token()}}</span>

                            <button type="submit" ><i class="fa fa-close"></i></button>
                        </form>

                    </td>
            </tr>
                @endforeach

            </tbody>
        </table>

        <table class="table table-bordered center">
            <thead>
            <tr>

                <td colspan=""> <h4 class="center"> Code </h4></td>
                <td colspan="4"> <h4 class="center"> Pharmacy Name </h4></td>
                <td colspan=""> <h4 class="center"> Address</h4></td>
                <td id="hc">Remove</td>


            </tr>
            </thead>

            <tbody>
            @foreach($reports_pharmacies as $reports_pharmacy)

                <tr>

                <td>{{$reports_pharmacy->code_p}}</td>
                <td colspan="4"> {{$reports_pharmacy->pharmacy}}</td>
                <td>{{$reports_pharmacy->address}}</td>
                    <td id="hc">
                        <form  method="get" action="/removeRowP/{{$reports_pharmacy->id}}">
                            <span hidden>{{csrf_token()}}</span>

                            <button type="submit" ><i class="fa fa-close"></i></button>
                        </form>

                    </td>


            </tr>
            @endforeach

            </tbody>
        </table>



        <table class="table table-bordered  center ">
            <tbody>

            <tr>
                <td colspan="4"> <h4 style="text-align: left;" >Comments and Feedback</h4></td>
            </tr>
            @foreach($reports_notes as $key=>$reports_note)
            <tr>

                <td colspan="4" style="text-align: left;">

                  {{$reports_note->publicNote}}

                </td>

            </tr>
            @endforeach


            </tbody>
        </table>


        <table class="table">
            <tr>
                <td style="width: 50%;">
                    <table class="table table-bordered center" style="height: 207px;">
                        <tbody>
                        <tr>
                            <td>Hospital</td>
                            <td>
                                @if($count__footers>=1)
                                    {{$reports_footers[0]->hospital}}

                                @endif
                            </td>
                            <td>Hospital Doctors</td>
                            <td>
                                @if($count__footers>=1)
                                    {{$reports_footers[0]->hospital_doctor}}

                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Medical Centers</td>
                            <td>
                                @if($count__footers>=1)
                                    {{$reports_footers[0]->medical_center}}

                                @endif
                            </td>
                            <td>Medical Centers Doctors</td>
                            <td>
                                @if($count__footers>=1)
                                    {{$reports_footers[0]->medical_center_doctor}}

                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Clinic Doctors</td>
                            <td>
                                @if($count__footers>=1)
                                    {{$reports_footers[0]->clinic_doctor}}

                                @endif
                            </td>
                            <td>Pharmacies</td>
                            <td>
                                @if($count__footers>=1)
                                    {{$reports_footers[0]->pharmacies}}

                                @endif
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </td>
                <td>
                    <table class="table table-bordered center" style="height: 207px;">
                        <tbody>
                        <tr>
                            <td colspan="9">Clinic Doctors Visited</td>

                        </tr>
                        <tr>
                            <td>Aa</td>
                            <td>Ab</td>
                            <td>Ac</td>
                            <td>Ba</td>
                            <td>Bb</td>
                            <td>Bc</td>
                            <td>Ca</td>
                            <td>Cb</td>
                            <td>Cc</td>


                        </tr>
                        <tr>
                            <td>
                                @if($count__footers>=1)
                                    {{$reports_footers[0]->aa}}

                                @endif
                            </td>
                            <td>
                                @if($count__footers>=1)
                                    {{$reports_footers[0]->ab}}

                                @endif
                            </td>
                            <td>
                                @if($count__footers>=1)
                                    {{$reports_footers[0]->ac}}

                                @endif
                            </td>
                            <td>
                                @if($count__footers>=1)
                                    {{$reports_footers[0]->ba}}

                                @endif
                            </td>
                            <td>
                                @if($count__footers>=1)
                                    {{$reports_footers[0]->bb}}

                                @endif
                            </td>
                            <td>
                                @if($count__footers>=1)
                                    {{$reports_footers[0]->bc}}

                                @endif
                            </td>
                            <td>
                                @if($count__footers>=1)
                                    {{$reports_footers[0]->ca}}

                                @endif
                            </td>
                            <td>
                                @if($count__footers>=1)
                                    {{$reports_footers[0]->cb}}

                                @endif
                            </td>
                            <td>
                                @if($count__footers>=1)
                                    {{$reports_footers[0]->cc}}

                                @endif
                            </td>

                        </tr>
                        </tbody>
                    </table>

                </td>
            </tr>
        </table>
        
        <h3 style="font-size:30px;margin-left: 30px;">  كم السيارة: <span style="border-bottom:2px dashed black;font-size:23px;padding:5px;
    border-radius: 5px;"> @if($count__footers>=1) {{$reports_footers[0]->cm_all}}   @endif كم</span>    </h3>
 

        <h3><span style="margin-left: 30px;font-size:30px;">Signature :</span> <span style="float:right; margin-right:280px;font-size:30px;">Checked by :</span></h3>


    @else
        <div class="alert alert-warning" style="text-align: center; margin-top: 100px;" role="alert">
            No Result
        </div>

    @endif


</section>








<script src="{{asset('js/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="{{asset('js/popper.min.js')}}" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src='{{asset('js/jquery-2.2.2.min.js')}}'></script>
<script src="{{asset('js/bootstrap.min.js')}}" integrity="" crossorigin="anonymous"></script>
<script src="../js/jquery.nicescroll.min.js"></script>
<script src="{{asset('js/wow.min.js')}}"></script>

<script  src="../js/myjs.js" type="text/javascript">  </script>

<script>
    new WOW().init();




    $('.tab').click(function () {
        $('.table-nh,.table-nb').fadeToggle();
    });

    $("#printPage").click(function () {
        print()
    });


    $('.search-f-div').click(function () {
        $('.search-s-div').removeClass('active-search');
        $('.search-f-div').addClass('active-search');
        $('.f-form-search').show();
        $('.s-form-search').hide();


    });

    $('.search-s-div').click(function () {
        $('.search-f-div').removeClass("active-search");
        $('.search-s-div').addClass("active-search");
        $('.s-form-search').show();
        $('.f-form-search').hide();

    });


    /*option box*/

    $('#font').change(function () {
        $('td,input').css('font-size',$('#font').val()+'px');
    });
    $('#font-head').change(function () {
        $('h3,h3 span').css('font-size',$('#font-head').val()+'px');
    });
    $('#font-table-head').change(function () {
        $('th,h4').css('font-size',$('#font-table-head').val()+'px');
    });


    $('#change-family').change(function () {
        $('h3,h3 span').css('font-family',$('#change-family').val());

    });
$('#change-family-th').change(function () {
        $('th,h4').css('font-family',$('#change-family-th').val());

    });
$('#change-family-td').change(function () {
        $('td,input').css('font-family',$('#change-family-td').val());

    });

$('#change-bold').change(function () {
        $('h3,h3 span').css('font-weight',$('#change-bold').val());

    });


$('#change-bold-th').change(function () {
        $('th,h4').css('font-weight',$('#change-bold-th').val());

    });


$('#change-bold-td').change(function () {
        $('td,input').css('font-weight',$('#change-bold-td').val());

    });



</script>

</body>
</html>