<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1200">


    <title>Monthly Plan</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/forms.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/form/blackStyle-them.css">
    <link href="../css/font-awesome.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <style>
        @media print {
            .option-box,.pri,#printPage {
                display:none
            }



        }


        p{
            text-align: center;
        }

        #dash
        {
            border: none;
            border-bottom: 2px dashed #cfd1d4;
        }
        .remove-border td
        {
            border-top: 0;
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

    <form class="f-form-search"  action="/searchMonthPlan" method="post">
        {{csrf_field()}}

        <input type="hidden" value="{{date('Y-m'),time()}}" name="date" class="form-control">

        @if(Auth::user()->hasRole('admin'))
            <select name='select_name'>
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach

            </select>
        @else
            <input type="hidden" name="select_name" value="{{Auth::user()->id}}">
        @endif
        <div>
            <button  type="submit" class=""><i class="fa fa-search"></i></button>

        </div>

    </form>
    <form class="s-form-search"  action="/AdsearchMonthPlan"  method="post">
        {{csrf_field()}}

        @if(Auth::user()->hasRole('admin'))
            <select name='select_name'>
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach

            </select>
        @else
            <input type="hidden" name="select_name" value="{{Auth::user()->id}}">
        @endif
        <input type="month"   name="date" class="form-control">
        <div>
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>




    </form>
</section>




<section class="bod container-fluid">
    @if(isset($reports))

        <div class="row">
            <div class="col-md-2">
                <img src="../image/LogoImageMasterPage.jpg">
            </div>
            <div class="col-md-10">
                <h3 class="padding-r-xl m">الشركة المصرية الدولية للصناعات الدوائية (ايبكو) </h3>
                <h3>القطاع التجاري-المكتب العلمي</h3>
            </div>
        </div>
        <br>
        <h3 class="center">برنامج عمل مندوب دعاية </h3>
    <br>

        <table class="table tab">


            <tbody>
            <tr class="remove-border">
                <th>
                    <div class="form-inline">
                        <div class="form-group">
                            <label class="bold " > الاسم </label>
                            <input type="text" id="dash"  name="name" value="{{$user_name->name}}" class="form-control mx-sm-3">


                        </div>
                    </div>
                </th>
                <th>
                    <div class="form-inline">
                        <div class="form-group">
                            <label class="bold " > المحافظة </label>
                            <input type="text" id="dash"  name="city"   class="form-control mx-sm-3 " value="{{$infos[0]->city}}">


                        </div>
                    </div>
                </th>
                <th>
                    <div class="form-inline">
                        <div class="form-group">
                            <label class="bold " > المنطقة </label>
                            <input type="text" id="dash"  name="area"  class="form-control mx-sm-3 " value="{{$infos[0]->area}}">

                        </div>
                    </div>
                </th>
                <th>
                    <div class="form-inline">
                        <div class="form-group">
                            <label class="bold " > شهر </label>
                            <input type="text"  id="dash"  value="<?php echo date('F',strtotime($reports[0]->date))?>" class="form-control mx-sm-3">

                        </div>
                    </div>
                </th>
                <th>
                    <div class="form-inline">
                        <div class="form-group">
                            <label class="bold " > سنة </label>
                            <input type="text"  id="dash"  value="<?php echo date('Y',strtotime($reports[0]->date))?>"  class="form-control mx-sm-3">

                        </div>
                    </div>
                </th>

            </tr>
            </tbody>
        </table>



        <table class="table table-bordered">


            <thead class="table-nh table-he">
                <th> <h4  class="center "> التاريخ </h4></th>
                <th> <h4 class="center">اليوم</h4> </th>
                <th colspan="3">
                    <h4 class="center"> البرنامج الصباحي</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="center"> المنطقة </h4>


                        </div>
                        <div class="col-md-3">
                            <h4 class="center"> Starting Point </h4>

                        </div>
                        <div class="col-md-3">
                            <h4 class="center"> Starting Time </h4>


                        </div>
                    </div>
                </th>
                <th colspan="3">
                    <h4 class="center"> البرنامج المسائي</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="center"> المنطقة </h4>


                        </div>
                        <div class="col-md-3">
                            <h4 class="center"> Starting Point </h4>

                        </div>
                        <div class="col-md-3">
                            <h4 class="center"> Starting Time </h4>


                        </div>
                    </div>
                </th>
                <th> <h4 class="center">ملاحظات</h4></th>

                </thead>

            <tbody class="table-nb  table-bd">
                @foreach($reports as $report)
                    <tr>
                        <td><div class="form-group mar-t">
                                <p>{{$report->date_num}}</p>
                            </div>
                        </td>
                        <td>
                            <div class="form-group mar-t">
                                <p>{{$report->day}}</p>
                            </div>
                        </td>
                        <td colspan="3">
                            <div class="row">
                                <div class="col-md-6">


                                    <div class="form-group">
                                        <p>{{$report->location}}</p>
                                    </div>
                                </div>
                                <div class="col-md-3">

                                    <div class="form-group">
                                        <p>{{$report->pharm}}</p>
                                    </div>

                                </div>
                                <div class="col-md-3">

                                    <div class="form-group">
                                        <p>{{$report->time}}</p>

                                    </div>

                                </div>
                            </div>
                        </td>
                        <td colspan="3">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <p>{{$report->locationPm}}</p>

                                    </div>

                                </div>
                                <div class="col-md-3">

                                    <div class="form-group">
                                        <p>{{$report->pharmPm}}</p>

                                    </div>

                                </div>
                                <div class="col-md-3">


                                    <div class="form-group">
                                        <p>{{$report->timePm}}</p>

                                    </div>

                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group mar-t">
                                <p>{{$report->note}}</p>

                            </div>
                        </td>
                    </tr>
                @endforeach





                </tbody>


        </table>
    <div class="container-fluid" style="margin-top: 15px; margin-bottom: 10px;  font-weight:bold;">
        <div class="row">
            <div class="col-sm-3"><h3>مندوب</h3></div>
            <div class="col-sm-3"><h3>مشرف</h3></div>
            <div class="col-sm-3"><h3>مدير دعاية</h3></div>
            <div class="col-sm-3"><h3>مدير فرع</h3></div>
        </div>

    </div>



    @else
        <div class="alert alert-warning" style="text-align: center;" role="alert">
            No Result
        </div>

    @endif



</section>
<script src="{{asset('js/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="{{asset('js/popper.min.js')}}" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src='{{asset('js/jquery-2.2.2.min.js')}}'></script>
<script src="{{asset('js/bootstrap.min.js')}}" integrity="" crossorigin="anonymous"></script>
<script src="../js/jquery.nicescroll.min.js"></script>
<script  src="../js/myjs.js" type="text/javascript">  </script>
<script>





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
        $('th,h4,th label').css('font-size',$('#font-table-head').val()+'px');
    });


    $('#change-family').change(function () {
        $('h3,h3 span').css('font-family',$('#change-family').val());

    });
    $('#change-family-th').change(function () {
        $('th,h4,th label').css('font-family',$('#change-family-th').val());

    });
    $('#change-family-td').change(function () {
        $('td,input').css('font-family',$('#change-family-td').val());

    });

    $('#change-bold').change(function () {
        $('h3,h3 span').css('font-weight',$('#change-bold').val());

    });


    $('#change-bold-th').change(function () {
        $('th,h4,th label').css('font-weight',$('#change-bold-th').val());

    });


    $('#change-bold-tb').change(function () {
        $('td,input').css('font-weight',$('#change-bold-tb').val());

    });



</script>


</body>
</html>
