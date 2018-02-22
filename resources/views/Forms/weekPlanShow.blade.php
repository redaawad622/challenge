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
<body style="padding-top: 70px">
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
    </div>
    <i class="fa fa-gear fa-3x gear-ch" style="padding: 6px"></i>
</section>
<section class="pri">



    <form id="h" style="margin-bottom: 30px;" class="container" action="/searchWeek" method="post">
        {{csrf_field()}}
        <div class="row">
            <div class="col-sm-3">
                <h5 id="sear"><i class="fa fa-caret-down "></i> More Search </h5>
            </div>
            <div class="col-sm-2">

                <button style="float: left;position: relative;" type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </div>
            <div class="col-sm-3">
                <select name='week_number' class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelectPref">

                        <option value="1">Week1</option>
                        <option value="2">Week2</option>
                        <option value="3">Week3</option>
                        <option value="4">Week4</option>


                </select>
                <label class="mr-sm-2" for="inlineFormCustomSelectPref">The Week</label>
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
    <form id="form-sear" style="display: none;margin-bottom: 30px;" class="container" action="/AdsearchWeek" method="post">
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
                <select name='week_number' class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelectPref">

                    <option value="1">Week1</option>
                    <option value="2">Week2</option>
                    <option value="3">Week3</option>
                    <option value="4">Week4</option>


                </select>
                <label class="mr-sm-2" for="inlineFormCustomSelectPref">The Week</label>
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



<table   class="table text-center table-striped ">

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


</script>
</body>
</html>