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
<section class="option-box">
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
    </div>
    <i class="fa fa-gear fa-3x gear-ch"></i>
</section>
<section class="bod">
        <div class="container-fluid">
            <form style="width: 100%; text-align: center;" id="search"  action="/searchVacation" method="post">
                {{csrf_field()}}
                <h5 class="center padding-t-lg"> الاسم </h5>
                <div class="form-group">
                    <select class="custom-select" name="user_id" style="width: 100%;">
                        <option value='' selected>--Select name--</option>
                        @foreach($users as $user)
                            <option  value='{{$user->id}}'>{{$user->name}}</option>
                        @endforeach

                    </select>
                </div>

                <button style="position: relative;" type="submit" class="btn btn-primary">Get User <i class="fa fa-search"></i></button>

            </form>
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
</script>

</body>
</html>