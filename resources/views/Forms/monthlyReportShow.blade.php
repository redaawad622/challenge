<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1200">


    <title>Monthly Report</title>
    <link href="https://fonts.googleapis.com/css?family=Mirza" rel="stylesheet">
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
            .option-box,.pri,#printPage,.tab {
                display:none
            }

          

        }
        .sp_input
        {
            border: none;
            border-bottom: 2px dotted;
        }
        body
        {
            padding-top: 90px;
        }

        p{
            text-align: center;
        }
        .remove-b td
        {
            border: none;

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





    <form id="h" style="margin-bottom: 30px;" class="container" action="/searchMonth" method="post">
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
    <form id="form-sear" style="display: none;margin-bottom: 30px;" class="container" action="/AdsearchMonth" method="post">
        {{csrf_field()}}
        <div class="row">
            <div class="col-sm-2">
                <h5 id="sear-up"><i class="fa fa-caret-up "></i> Less Search </h5>
            </div>
            <div class="col-sm-2">
                <button style="float: left;position: relative;" type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </div>
            <div class="col-sm-2">
                <input type="month"   name="date" class="form-control">
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
    <table class="table table-nb ">



        <tbody>
        <tr class="remove-b">
            <td style="width: 37%;">
                <h3><img style="width: 111px;" src="../image/LogoImageMasterPage.jpg">  الشركة المصرية الدولية للصناعات الدوائية - ايبيكو </h3>
                <h3 class="center">القطاع التجاري<br> المكتب العلمي</h3>
            </td>
            <td>
                <div class="form-inline left">
                    <div class="form-group">
                        <label class="bold p" for="inputPassword6">تقرير  شهر  </label>
                        <input type="text" id="" class="form-control mx-sm-3 " value="{{date('F',strtotime($infos[0]->created_at))}}">
                    </div>
                </div>
            </td>
        </tr>

            <tr>
                <td style="padding-left: 100px;">
                    <div class="form-inline">
                        <div class="form-group">
                            <label style="width: 86px;"   class="bold p" for="inputPassword6">  فرع:  </label>
                            <input type="text"  value="{{$infos[0]->pranch}}" class="form-control mx-sm-3 sp_input">
                        </div>
                    </div>

                </td>
                <td  rowspan="3">
                    <table class="table table-bordered ac">
                        <thead>
                        <tr>
                            <th>البيان</th>
                            <th>أيام العمل</th>
                            <th>أطباء عيادات</th>
                            <th>صيدليات</th>
                            <th>مراكز طبية</th>
                            <th>عدد الأطباء</th>

                            <th>فروع المصرية</th>
                        </tr>
                        <tr>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td style="padding-top: 46px;font-weight: bold;"><span >المستهدف</span></td>
                            <td><p style="margin-top: 33px;" >{{$statments[0]->work_days_pa}}</p></td>
                            <td><p style="margin-top: 33px;" >{{$statments[0]->doctors_clinic_pa}}</p></td>
                            <td><p style="margin-top: 33px;" >{{$statments[0]->pharmacy_pa}}</p></td>


                            <td>

                                <div class="row">
                                    <div class="col-md-4">
                                        <!--left-->
                                        <h4 class="center"> هيئات </h4>
                                        <div class="form-group">
                                         <p>{{$statments[0]->station_h_pa}}</p>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h4 class="center"> مدارس </h4>
                                        <div class="form-group">
                                            <p>{{$statments[0]->station_m_pa}}</p>

                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <h4 class="center"> وحدات </h4>
                                        <div class="form-group">
                                            <p>{{$statments[0]->station_w_pa}}</p>

                                        </div>
                                    </div>
                                </div>

                            </td>
                            <td>

                                <div class="row">
                                    <div class="col-md-4">
                                        <!--left-->
                                        <h4 class="center"> هيئات </h4>
                                        <div class="form-group">
                                            <p>{{$statments[0]->doctors_num_h_pa}}</p>

                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <h4 class="center"> مدارس </h4>
                                        <div class="form-group">
                                            <p>{{$statments[0]->doctors_num_m_pa}}</p>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h4 class="center"> وحدات </h4>
                                        <div class="form-group">
                                            <p>{{$statments[0]->doctors_num_w_pa}}</p>

                                        </div>
                                    </div>
                                </div>

                            </td>
                            </td>
                            <td><p  style="margin-top: 33px;">{{$statments[0]->eg_pranch_pa}}</p></td>


                        </tr>
                        <tr>

                        </tr>

                        <tr>
                            <td style="padding-top: 46px;font-weight: bold;"><span >الفعلي</span></td>
                            <td><p style="margin-top: 33px;" >{{$statments[0]->work_days_ac}}</p></td>
                            <td><p style="margin-top: 33px;" >{{$statments[0]->doctors_clinic_ac}}</p></td>
                            <td><p style="margin-top: 33px;" >{{$statments[0]->pharmacy_ac}}</p></td>


                            <td>

                                <div class="row">
                                    <div class="col-md-4">
                                        <!--left-->
                                        <h4 class="center"> هيئات </h4>
                                        <div class="form-group">
                                            <p>{{$statments[0]->station_h_ac}}</p>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h4 class="center"> مدارس </h4>
                                        <div class="form-group">
                                            <p>{{$statments[0]->station_m_ac}}</p>

                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <h4 class="center"> وحدات </h4>
                                        <div class="form-group">
                                            <p>{{$statments[0]->station_w_ac}}</p>

                                        </div>
                                    </div>
                                </div>

                            </td>
                            <td>

                                <div class="row">
                                    <div class="col-md-4">
                                        <!--left-->
                                        <h4 class="center"> هيئات </h4>
                                        <div class="form-group">
                                            <p>{{$statments[0]->doctors_num_h_ac}}</p>

                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <h4 class="center"> مدارس </h4>
                                        <div class="form-group">
                                            <p>{{$statments[0]->doctors_num_m_ac}}</p>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h4 class="center"> وحدات </h4>
                                        <div class="form-group">
                                            <p>{{$statments[0]->doctors_num_w_ac}}</p>

                                        </div>
                                    </div>
                                </div>

                            </td>
                            </td>
                            <td><p  style="margin-top: 33px;">{{$statments[0]->eg_pranch_ac}}</p></td>


                        </tr>
                        <tr>

                        </tr>


                        </tbody>
                    </table>
                </td>

            </tr>
            <tr>
                <td>
                    <div class="form-inline">
                        <div class="form-group">
                            <label  class="bold p" for="inputPassword6">  اسم المندوب:  </label>
                            <input type="text"  value="{{$infos[0]->name}}" class="form-control mx-sm-3 sp_input">
                        </div>
                    </div>

                </td>

            </tr>
            <tr>
                <td>
                    <div class="form-inline">
                        <div class="form-group">
                            <label style="width: 86px;"   class="bold p" for="inputPassword6">  مقر السكن:  </label>
                            <input type="text"  value="{{$infos[0]->place}}" class="form-control mx-sm-3 sp_input">  </div>
                    </div>

                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-inline">
                        <div class="form-group">
                            <label style="width: 86px;" class="bold p" for="inputPassword6">  المنطقة:  </label>
                            <input type="text"  value="{{$infos[0]->area}}" class="form-control mx-sm-3 sp_input"> </div>
                    </div>

                </td>
                <td >
                    <table class="table table-bordered ac">
                        <thead>
                        <tr>
                            <th>كيلو متر السيارة</th>
                            <th>بداية الشهر</th>
                            <th>نهاية الشهر</th>
                            <th> الاستهلاك</th>
                            <th> المحاسبة علي</th>

                        </tr>

                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td><p>{{$infos[0]->km_start}}</p></td>
                            <td><p>{{$infos[0]->km_end}}</p></td>
                            <td><p>{{$infos[0]->km_consum}}</p></td>
                            <td><p>{{$infos[0]->km_paid}}</p></td>

                        </tr>

                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>


        <br>




        <table class="table table-bordered ac ">
            <thead class="tab">
            <th colspan="2">  <a href="javascript:void(0);" id="printPage">Print</a> </th>

            <th colspan="4"><?php echo date('F',strtotime($reports[0]->created_at)); ?></th>
            <th colspan="4"><?php echo date('Y-m',strtotime($reports[0]->date)); ?></th>


            <th colspan="4">Monthly Report from {{$user_name->name}}</th>
            </thead>

            <thead class="table-nh table-he">
            <tr>
                <th>التاريخ</th>
                <th> اليوم</th>
                <th colspan="4"> العمل المسائي</th>
                <th colspan="6">العمل الصباحي</th>
                <th style="font-size: 13px;"> فروع الشركة المصرية</th>
                <th  style="font-size: 13px;"> الاستهلاك الفعلي</th>


            </tr>
            <tr>

            </tr>
            </thead>
            <tbody class="table-nb  table-bd">
            <tr>

                <td></td>
                <td></td>



                <td colspan="4">

                    <div class="row">
                        <div class="col-md-4">
                            <!--left-->
                            <h4 class="center"> خط السير </h4>


                        </div>
                        <div class="col-md-4">
                            <h4 class="center"> الأطباء </h4>

                        </div>
                        <div class="col-md-4">
                            <h4 class="center"> صيدليات </h4>

                        </div>
                    </div>

                </td>
                <td colspan="6">

                    <div class="row">
                        <div class="col-md-4">
                            <!--left-->
                            <h4 class="center"> خط السير </h4>

                        </div>
                        <div class="col-md-4">
                            <h4 class="center"> مراكز طبية </h4>

                        </div>
                        <div class="col-md-4">
                            <h4 class="center"> عدد الأطباء </h4>

                        </div>
                    </div>

                </td>


                <td></td>
                <td></td>


            </tr>

            <tr>

                <td></td>
                <td></td>

                <td colspan="4">

                </td>
                <td colspan="6">

                    <div class="row">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <h6 class="center">ه</h6>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="center">م</h6>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="center">و</h6>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <h6 class="center">هيئات</h6>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="center">مدارس</h6>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="center">وحدات</h6>
                                </div>
                            </div>

                        </div>
                    </div>

                </td>


                <td></td>
                <td></td>


            </tr>




        @foreach($reports as $report)
                <tr>

                    <td><p>{{$report->date_num}}</p></td>
                    <td><p>{{$report->day_name}}</p></td>

                    <td colspan="4">
                        <div class="row">
                            <div class="col-md-4">
                            <p>{{$report->rou_pm}}</p>

                            </div>
                            <div class="col-md-4">
                                <p>{{$report->doctors_pm}}</p>
                            </div>
                            <div class="col-md-4">
                                <p>{{$report->pharma_pm}}</p>

                            </div>

                        </div>

                    </td>
                    <td colspan="6">

                        <div class="row">
                            <div class="col-md-4">
                                <p>{{$report->rou_am}}</p>

                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>{{$report->station_h_am}}</p>

                                    </div>
                                    <div class="col-md-4">
                                        <p>{{$report->station_m_am}}</p>

                                    </div>
                                    <div class="col-md-4">
                                        <p>{{$report->station_w_am}}</p>

                                    </div>
                                </div>


                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>{{$report->doctors_num_h_am}}</p>

                                    </div>
                                    <div class="col-md-4">
                                        <p>{{$report->doctors_num_m_am}}</p>

                                    </div>
                                    <div class="col-md-4">
                                        <p>{{$report->doctors_num_w_am}}</p>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </td>


                    <td><p>{{$report->egption_pranch}}</p></td>
                    <td><p>{{$report->actual_paid}}</p></td>


                </tr>
            @endforeach

            <tr class="table-nb">

                <td colspan="2">المجموع</td>

                <td colspan="4">
                    <div class="row">
                        <div class="col-md-4">
                            nothing
                        </div>
                        <div class="col-md-4">
                            <p>{{$sums[0]->doc}}</p>

                        </div>
                        <div class="col-md-4">
                            <p>{{$sums[0]->ph}}</p>
                        </div>

                    </div>

                </td>
                <td colspan="6">

                    <div class="row">
                        <div class="col-md-4">
                            nothing

                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <p>{{$sums[0]->station_h}}</p>

                                </div>
                                <div class="col-md-4">
                                    <p>{{$sums[0]->station_m}}</p>

                                </div>
                                <div class="col-md-4">
                                    <p>{{$sums[0]->station_w}}</p>

                                </div>
                            </div>


                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <p>{{$sums[0]->num_h}}</p>

                                </div>
                                <div class="col-md-4">
                                    <p>{{$sums[0]->num_m}}</p>

                                </div>
                                <div class="col-md-4">
                                    <p>{{$sums[0]->num_w}}</p>

                                </div>
                            </div>

                        </div>
                    </div>

                </td>


                <td> <p>{{$sums[0]->pr}}</p></td>
                <td> <p>{{$sums[0]->actual}}</p></td>


            </tr>

            </tbody>
        </table>

        <table style="margin-top: 50px;" class="table ac table-nb">
            <thead>
            <tr>
                <th>اجمالي عينات الشهر</th>
                <th> عينات متصرفة</th>
                <th> عينات مرتجعة</th>
                <th> متوسط عينات الزيارة</th>


            </tr>

            </thead>
            <tbody>
            <tr>

                <td><p>{{$infos[0]->total_samples}}</p></td>
                <td><p>{{$infos[0]->paid_samples}}</p></td>
                <td><p>{{$infos[0]->back_samples}}</p></td>
                <td><p>{{$infos[0]->average_samples}}</p></td>

            </tr>

            </tbody>
        </table>


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
        $('td,input').css('font-size',$('#font').val()+'px');
    });
    $('#change-family').change(function () {
        $('td,input').css('font-family',$('#change-family').val());

    });

$('#change-bold').change(function () {
        $('td,input').css('font-weight',$('#change-bold').val());

    });



</script>


</body>
</html>
