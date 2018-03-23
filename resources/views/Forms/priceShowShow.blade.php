<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Price Show</title>
    <link href="https://fonts.googleapis.com/css?family=Mirza" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/forms.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/form/blackStyle-them.css">
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <style>
        @media print {
            .option-box,.pri,#printPage,.tab {
                display:none
            }

        }
    </style>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
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

    <form class="f-form-search" action="/searchPrice" method="post">
        {{csrf_field()}}

        <input type="hidden" value="{{date('Y-m'),time()}}" name="date" class="form-control">

        <div>
            <button  type="submit" class=""><i class="fa fa-search"></i></button>

        </div>

    </form>
    <form class="s-form-search"   action="/AdsearchPrice" method="post">
        {{csrf_field()}}
<<<<<<< HEAD

        <input type="month" name="date" class="form-control">
        <div>
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
=======
        <div class="row">
            <div class="col-sm-3">
                <h5 id="sear-up"><i class="fa fa-caret-up "></i> Less Search </h5>
            </div>
            <div class="col-sm-2">
                <button style="float: left;position: relative;" type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </div>
            <div class="col-sm-3">
                <input type="month" name="date" value="{{old('date')}}" class="form-control">
            </div>
>>>>>>> 37a290a816d60d62738e20c2c83295d2c4585c93




    </form>
</section>



<section>
    @if(isset($reports))
    <div class="container-fluid">
        <div class="row">

            <div class=" col-xs-8  col-lg-10">
                <h4 >الشركة المصرية الدولية للصناعات الدوائية (ايبكو) </h4>
                <h4>القطاع التجاري-المكتب العلمي</h4>
            </div>
            <div class="col-xs-4  col-lg-2">
                <img src="../image/LogoImageMasterPage.jpg">
            </div>

        </div>

        <br>




        <table class="table text-center table-striped table-bordered">

                <thead class="tab  table-h wow flipInX" data-wow-delay="1s">
                <tr>
                <th>  <a href="javascript:void(0);" id="printPage">Print</a> </th>

                <th colspan="3"><?php echo date('F',strtotime($reports[0]->created_at)); ?></th>
                <th colspan="3"><?php echo date('Y-m',strtotime($reports[0]->created_at)); ?></th>

                <th>Price Show</th>
                </tr>
                </thead>

            <thead class=" table-nh table-he">
            <tr>
                <th>م</th>
                <th> اسم الصنف </th>
                <th>  مستحضر الشركة </th>
                <th> العبوة </th>
                <th> سعر الوحدة </th>
                <th> الكمية </th>
                <th> اجمالي السعر </th>
                <th> ملاحظات </th>




            </tr>
            </thead>
            <tbody class=" table-nb table-bd">
            @foreach($reports as $i=>$report)

            <tr>
                <th scope="row">{{$i+1}}</th>
                <td>{{$report->categoryName}}</td>
                <td>{{$report->companyMedecin}}</td>
                <td>{{$report->refill}}</td>
                <td>{{$report->unitPrice}}</td>
                <td>{{$report->quantity}}</td>
                <td>{{$report->total}}</td>
                <td>{{$report->note}}</td>
            </tr>
                @endforeach

            </tbody>


        </table>
    <hr>
    <h4 class="padding-r-md"> 1) الشركة هي المنتجة الوحيدة للأصناف داخل جمهورية مصر العربية </h4>
    <h4 class="padding-r-md"> 2) الشركة معفاة من الضريبة النسبية علي الصرفيات الحكومية طبقا لنص المادة 81 من قانون التمغة النسبية حيث ان الاسعار  جبرية</h4>
    <h4 class="padding-r-md"> 3) العرض ساري حتي شهر من تاريخه </h4>
    <h4 class="padding-r-md">4) التوريد خلال شهر من استلام أمر التوريد</h4>
    <hr>
    @else
        <div class="alert alert-warning" style="text-align: center;" role="alert">
            No Result
        </div>

    @endif

    </div>
</section>

<script src="{{asset('js/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="{{asset('js/popper.min.js')}}" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src='{{asset('js/jquery-2.2.2.min.js')}}'></script>
<script src="{{asset('js/bootstrap.min.js')}}" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="../js/jquery.nicescroll.min.js"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script>
    new WOW().init();
</script>
<script  src="../js/myjs.js" type="text/javascript">  </script>

<script>
    $(document).ready(function () {
        $('.table-nh,.table-nb').fadeOut();
    });


</script>
<script>



    $('.tab').click(function () {
        $('.table-nh,.table-nb').slideToggle();
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