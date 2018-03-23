<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1200">
    <title>Vactions</title>
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
        @media print  {
        .option-box,#search
        {
            display: none;
        }

        }
    </style>

</head>
<body>
<!--section setting option-->
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

    <form class="f-form-search"  action="/searchVacation" method="post">
        {{csrf_field()}}



        <select  name="user_id">
            <option value='' selected>--Select name--</option>
            @foreach($users as $user)
                <option  value='{{$user->id}}'>{{$user->name}}</option>
            @endforeach

        </select>
        <div>
            <button  type="submit" class=""><i class="fa fa-search"></i></button>

        </div>



    </form>

</section>

<section class="bod">
        <div class="container-fluid">



            <br>

            <hr>
            @if(isset($reports))
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td>م</td>
                    <td colspan="2">الاسم</td>
                    <td colspan="2">الوظيفة</td>

                    <td colspan="12">
                        <h4 class="center"> الأجازات</h4>
                        <div class="row">
                            <div class="col-md-1">
                                <p class="center bold"> ديسمبر </p>

                            </div>
                            <div class="col-md-1">
                                <p class="center bold"> نوفمبر </p>

                            </div>
                            <div class="col-md-1">
                                <p class="center bold"> اكتوبر </p>

                            </div>
                            <div class="col-md-1">
                                <p class="center bold"> سبتمبر </p>

                            </div>


                            <div class="col-md-1">
                                <p class="center bold"> أغسطس </p>

                            </div>

                            <div class="col-md-1">
                                <p class="center bold"> يوليو </p>

                            </div>
                            <div class="col-md-1">
                                <p class="center bold"> يونيو </p>

                            </div>
                            <div class="col-md-1">
                                <p class="center bold"> مايو </p>

                            </div>

                            <div class="col-md-1">
                                <p class="center bold"> ابريل </p>

                            </div>
                            <div class="col-md-1">
                                <p class="center bold"> مارس </p>

                            </div>

                            <div class="col-md-1">
                                <p class="center bold"> فبراير </p>

                            </div>

                            <div class="col-md-1">
                                <p class="center bold"> يناير </p>

                            </div>


                        </div>
                    </td>

                    <td colspan="3">
                        <h4 class="center">الرصيد</h4>
                        <div class="row">


                            <div class="col-md-4">
                                <h4 class="center"> المتصلة </h4>

                            </div>
                            <div class="col-md-4">
                                <h4 class="center"> السنوية </h4>

                            </div>
                            <div class="col-md-4">
                                <h4 class="center"> العارضة </h4>

                            </div>

                        </div>
                    </td>

                </tr>

                </thead>
                <tbody>


                <tr>
                    <td>1</td>
                    <td colspan="2">{{$user_name[0]->name}}</td>
                    <td colspan="2">{{$reports[0]->job}}</td>

                    <td colspan="12">

                        <div class="row">
                            <div class="col-md-1">
                                <p class="center bold">{{$innerReport[11][0][0]->tot}}</p>

                            </div>
                            <div class="col-md-1">
                                <p class="center bold"> {{$innerReport[10][0][0]->tot}}</p>

                            </div>
                            <div class="col-md-1">
                                <p class="center bold"> {{$innerReport[9][0][0]->tot}} </p>

                            </div>
                            <div class="col-md-1">
                                <p class="center bold"> {{$innerReport[8][0][0]->tot}} </p>

                            </div>


                            <div class="col-md-1">
                                <p class="center bold">{{$innerReport[7][0][0]->tot}} </p>

                            </div>

                            <div class="col-md-1">
                                <p class="center bold"> {{$innerReport[6][0][0]->tot}} </p>

                            </div>
                            <div class="col-md-1">
                                <p class="center bold"> {{$innerReport[5][0][0]->tot}}</p>

                            </div>
                            <div class="col-md-1">
                                <p class="center bold">{{$innerReport[4][0][0]->tot}}</p>

                            </div>

                            <div class="col-md-1">
                                <p class="center bold"> {{$innerReport[3][0][0]->tot}} </p>

                            </div>
                            <div class="col-md-1">
                                <p class="center bold">{{$innerReport[2][0][0]->tot}}</p>

                            </div>

                            <div class="col-md-1">
                                <p class="center bold"> {{$innerReport[1][0][0]->tot}}</p>

                            </div>

                            <div class="col-md-1">
                                <p class="center bold">{{$innerReport[0][0][0]->tot}}</p>

                            </div>


                        </div>
                    </td>

                    <td colspan="3">

                        <div class="row">


                            <div class="col-md-4">
                                <h4 class="center"> <?php $s1=0; foreach($reports as $report){$s1+=$report->Connected;} echo $s1;?> </h4>

                            </div>
                            <div class="col-md-4">
                                <h4 class="center">  <?php $s2=0;  foreach($reports as $report){$s2+=$report->Annual;} echo $s2;?> </h4>

                            </div>
                            <div class="col-md-4">
                                <h4 class="center">  <?php  $s3=0;  foreach($reports as $report){$s3+=$report->Objection;} echo $s3;?></h4>

                            </div>

                        </div>
                    </td>

                </tr>



                </tbody>
            </table>
            @else
                <div class="alert alert-warning" style="text-align: center;" role="alert">
                    No Result
                </div>

            @endif



            <hr>
        </div>
</section>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/tether.min.js"></script>

<script src="js/bootstrap.js"></script>
<script src="js/popper.min.js"></script>
<script>
    /*show box tool*/

    $('.gear-ch').click(function() {

        $(".color-option").toggle();

    });
    /*change color*/

    var colorLi = $('.color-option ul li');

    colorLi
        .eq(0).css("backgroundColor", "rgb(241, 104, 118)").end()
        .eq(1).css("backgroundColor", "#ef5285").end()
        .eq(2).css("backgroundColor", "#2b90d9").end()

        .eq(3).css("backgroundColor", "#379392").end()
        .eq(4).css("backgroundColor", "#33b35a").end()
        .eq(5).css("backgroundColor", "#796AEE");

    colorLi.click(function() {

        $("link[href*='them']").attr("href", $(this).attr('data-value'));
        //console.log($(this).attr("data-value"));
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