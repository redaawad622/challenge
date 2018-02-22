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

        body
        {
            padding-top: 90px;
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
        <h4>Color option</h4>
        <ul class="list-unstyled">
            <li style="background:#000" data-value="../css/form/blackStyle-them.css"></li>
            <li data-value="../css/form/pinkStyle-them.css"></li>
            <li data-value="../css/form/blueStyle-them.css"></li>
            <li data-value="../css/form/seaStyle-them.css"></li>
            <li data-value="../css/form/greenStyle-them.css"></li>
            <li data-value="../css/form/violetStyle-them.css"></li>
        </ul>
         <hr>
        <div class="tool-box" style="text-align: left;">
            <h5>text option</h5>

                <h6>Font size</h6>
            <input type="text" class="form-control" id="font">
            <hr>





            <h6>Font family</h6>
            <select class="custom-select" id="change-family">
                <option value="sans-serif">sans-serif</option>

                <option value="serif">serif</option>
                <option value="cursive">cursive</option>
                <option value="fantasy">fantasy</option>
                <option value="initial">initial</option>
                <option value="monospace">monospace</option>
                <option value="-webkit-pictograph">-webkit-pictograph</option>

            </select>
            <hr>

            <h6 style="padding-top: 5px;">bold option</h6>
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
        </div>
    </div>
    <i class="fa fa-gear fa-3x gear-ch" style="padding: 6px"></i>
</section>
<section class="pri">

    <form id="h" style="margin-bottom: 30px;" class="container" action="/searchMonthPlan" method="post">
        {{csrf_field()}}
        <div class="row">
            <div class="col-sm-3">
                <h5 id="sear"><i class="fa fa-caret-down "></i> More Search </h5>
            </div>
            <div class="col-sm-2">

                <button style="float: left;position: relative;" type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </div>


            <div class="col-sm-3">
                <select name='select_name' class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelectPref">
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach

                </select>
                <label class="mr-sm-2" for="inlineFormCustomSelectPref">Member</label>
            </div>


        </div>


        <input type="hidden" value="{{date('Y-m'),time()}}" name="date" class="form-control">

    </form>
    <form id="form-sear" style="display: none;margin-bottom: 30px;" class="container" action="/AdsearchMonthPlan" method="post">
        {{csrf_field()}}
        <div class="row">
            <div class="col-sm-2">
                <h5 id="sear-up"><i class="fa fa-caret-up "></i> Less Search </h5>
            </div>
            <div class="col-sm-2">
                <button style="float: left;position: relative;" type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </div>
            <div class="col-sm-2">
                <input type="month"  name="date" class="form-control">
            </div>

            <div class="col-sm-3">
                <select name='select_name' class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelectPref">
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach

                </select>
                <label class="mr-sm-2" for="inlineFormCustomSelectPref">Member</label>
            </div>


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
                <h4 class="padding-r-xl m">الشركة المصرية الدولية للصناعات الدوائية (ايبكو) </h4>
                <h4>القطاع التجاري-المكتب العلمي</h4>
            </div>
        </div>
        <br>
        <h2 class="center">برنامج عمل مندوب دعاية </h2>
    <br>

        <table class="table tab">


            <tbody>
            <tr class="remove-border">
                <td>
                    <div class="form-inline">
                        <div class="form-group">
                            <label class="bold " > الاسم </label>
                            <input type="text" id="dash"  name="name" value="{{$user_name->name}}" class="form-control mx-sm-3">


                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-inline">
                        <div class="form-group">
                            <label class="bold " > المحافظة </label>
                            <input type="text" id="dash"  name="city"   class="form-control mx-sm-3 " value="{{$infos[0]->city}}">


                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-inline">
                        <div class="form-group">
                            <label class="bold " > المنطقة </label>
                            <input type="text" id="dash"  name="area"  class="form-control mx-sm-3 " value="{{$infos[0]->area}}">

                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-inline">
                        <div class="form-group">
                            <label class="bold " > شهر </label>
                            <input type="text"  id="dash"  value="<?php echo date('F',strtotime($reports[0]->date))?>" class="form-control mx-sm-3">

                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-inline">
                        <div class="form-group">
                            <label class="bold " > سنة </label>
                            <input type="text"  id="dash"  value="<?php echo date('Y',strtotime($reports[0]->date))?>"  class="form-control mx-sm-3">

                        </div>
                    </div>
                </td>

            </tr>
            </tbody>
        </table>



        <table class="table table-bordered">


            <thead class="table-nh table-he">
                <th> <h4 style='font-size=30px;' class="center "> التاريخ </h4></th>
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
    <div class="container-fluid" style="margin-top: 15px; margin-bottom: 10px; font-size:35px; font-weight:bold;">
        <div class="row">
            <div class="col-sm-3">مندوب</div>
            <div class="col-sm-3">مشرف</div>
            <div class="col-sm-3">مدير دعاية</div>
            <div class="col-sm-3">مدير فرع</div>
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



    $('#sear').click(function () {
        $('#h').slideToggle();
        $('#form-sear').slideToggle();

    });
    $('#sear-up').click(function () {
        $('#form-sear').slideToggle();
        $('#h').slideToggle();

    });
    $(document).ready(function () {
        $('.table-nh,.table-nb').fadeOut();
    });
    $('.tab').click(function () {
        $('.table-nh,.table-nb').fadeToggle();
    });

    $("#printPage").click(function () {
        print()
    });
    
      /*option box*/

    $('#font').change(function () {
    var a= parseInt($('#font').val())+5;
        $('td,input').css('font-size',$('#font').val()+'px');
        $('h4').css('font-size',a+'px');
        
    });
    $('#change-family').change(function () {
        $('td,input').css('font-family',$('#change-family').val());

    });

$('#change-bold').change(function () {
        $('td,input,h4').css('font-weight',$('#change-bold').val());

    });


</script>


</body>
</html>
