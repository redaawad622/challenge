<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=650">
    <title>WeeKly Plan</title>
    <link href="https://fonts.googleapis.com/css?family=Mirza" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/forms.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/form/blackStyle-them.css">
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <style>
        @media print {
            .option-box,.pri,#printPage {
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

    <form class="f-form-search"  action="/searchWeek" method="post">
        {{csrf_field()}}
        <input type="hidden" value="{{date('Y-m'),time()}}" name="date" class="form-control">

        <select name='week_number'>

            <option value="1">Week1</option>
            <option value="2">Week2</option>
            <option value="3">Week3</option>
            <option value="4">Week4</option>


        </select>

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
    <form class="s-form-search"    action="/AdsearchWeek" method="post">
        {{csrf_field()}}
<<<<<<< HEAD
=======
        <div class="row">
            <div class="col-sm-2">
                <h5 id="sear-up"><i class="fa fa-caret-up "></i> Less Search </h5>
            </div>
            <div class="col-sm-2">
                <button style="float: left;position: relative;" type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </div>
            <div class="col-sm-2">
                <input type="month"   name="date" value="{{old('date')}}" class="form-control">
            </div>
            <div class="col-sm-3">
                <select name='week_number' class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelectPref">
>>>>>>> 37a290a816d60d62738e20c2c83295d2c4585c93

        <select name='week_number'>

            <option value="1">Week1</option>
            <option value="2">Week2</option>
            <option value="3">Week3</option>
            <option value="4">Week4</option>


        </select>


        <select name='select_name'>
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach

        </select>

        <input type="month"   name="date" class="form-control">
        <div>
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>




    </form>
</section>



<table class="table text-center table-striped ">

    @if(isset($reports))

        <thead class="tab">
        <th>  <a href="javascript:void(0);" id="printPage">Print</a> </th>
        <th>Week number {{$reports[0]->week_number}}</th>
        <th colspan="2"><?php echo date('F',strtotime($reports[0]->created_at)); ?></th>

        <th colspan="2">{{"With Dr/ ".$reports[0]->leader}}</th>

        <th colspan="2">Weekly Plan from {{$user_name->name}}</th>
        </thead>


        <thead class=" table-nh table-he">
        <tr>
            <th>#</th>
            <th >  <p style="bottom: 22px;
    position: relative;">اليوم</p></th>
            <th colspan="2">
                {{$user_name->name}}
                <div class="row">
                    <div class="col-sm-6">
                        <p styl='font-size=18;' class="center"> AM </p>

                    </div>
                    <div class="col-sm-6">
                        <p styl='font-size=18;' class="center"> PM </p>

                    </div>
                </div>
            </th>
            <th colspan="2"> starting_point  <div class="row">
                    <div class="col-sm-6">
                        <p styl='font-size=18;' class="center"> AM </p>

                    </div>
                    <div class="col-sm-6">
                        <p styl='font-size=18;' class="center"> PM </p>

                    </div>
                </div> </th>
            <th colspan="2"> Time   <div class="row">
                    <div class="col-sm-6">
                        <p styl='font-size=18;' class="center"> AM </p>

                    </div>
                    <div class="col-sm-6">
                        <p styl='font-size=18;' class="center"> PM </p>

                    </div>
                </div></th>

        </tr>
        </thead>

        <tbody class=" table-nb table-bd">
        @foreach($reports as $i=>$report)

            <tr>
                <th scope="row">{{$i+1}}</th>
                <td>{{$report->day}}</td>
                <td colspan="2">
                    <div class="row">
                        <div class="col-sm-6">

                            {{$report->name_am}}
                        </div>
                        <div class="col-sm-6">

                            {{$report->name_pm}}
                        </div>
                    </div>
                </td>
                <td colspan="2">
                    <div class="row">
                        <div class="col-sm-6">

                            {{$report->starting_point_am}}
                        </div>
                        <div class="col-sm-6">

                            {{$report->starting_point_pm}}
                        </div>
                    </div>
                </td>
                <td colspan="2">
                    <div class="row">
                        <div class="col-sm-6">

                            {{$report->time_am}}
                        </div>
                        <div class="col-sm-6">

                            {{$report->time_pm}}
                        </div>
                    </div>
                </td>


            </tr>

        @endforeach

        </tbody>
    @else
        <div class="alert alert-warning" style="text-align: center;" role="alert">
            No Result
        </div>

    @endif
</table>




<script src="{{asset('js/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="{{asset('js/popper.min.js')}}" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src='{{asset('js/jquery-2.2.2.min.js')}}'></script>
<script src="{{asset('js/bootstrap.min.js')}}" integrity="" crossorigin="anonymous"></script>
<script src="../js/jquery.nicescroll.min.js"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script>
    new WOW().init();
</script>
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