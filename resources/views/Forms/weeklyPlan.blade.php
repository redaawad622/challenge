<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1200">


    <title>weekly Plan</title>
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
        .mar-t
        {
            margin-top: 33px;
        }

    </style>

</head>
<body>
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
<section class="bod container-fluid">
    <div class="row">
        <div class="col-md-2">
            <img src="../image/LogoImageMasterPage.jpg">
        </div>
        <div class="col-md-6">
            <h4 class="padding-r-xl m">الشركة المصرية الدولية للصناعات الدوائية (ايبكو) </h4>

        </div>
        <div class="col-md-2">
            <h4 class="padding-r-xl m">القطاع التجاري </h4>

        </div>
        <div class="col-md-2">
            <h4 class="padding-r-xl m">فرع المنصورة</h4>

        </div>
    </div>

    <br>
    <form action="/weekly" method="post">
        {{csrf_field()}}
        <table class="table  table-responsive">


            <tbody>
            <tr>

                <td>
                    <div class="form-inline">
                        <div class="form-group">
                            <label class="bold" for="inputPassword6">اسم المندوب </label>
                            <input type="text" id="inputPassword6" class="form-control mx-sm-3 " value="{{Auth::user()->name}}" readonly>

                        </div>
                    </div>
                </td>

                <td>
                    <div class="form-inline">
                        <div class="form-group">
                            <label class="bold" for="inputPassword6">  الفترة من  </label>
                            <input type="text"  value="<?php echo date('Y-m-d',strtotime('last Sunday')); ?>"  class="form-control  mx-sm-3" required readonly>

                        </div>
                    </div>

                </td>

                <td>
                    <div class="form-inline ">
                        <div class="form-group">
                            <label class="bold" for="inputPassword6"> الي </label>
                            <input type="text"  value="<?php echo date('Y-m-d',strtotime('last Sunday')+4*24*60*60); ?>"  class="form-control  mx-sm-3" required readonly>

                        </div>
                    </div>
                </td>

                <td>
                    <div class="form-inline">
                        <div class="form-group">
                            <label class="bold" for="inputPassword6">المشرف د/ </label>
                            <input type="text" name="leader" value="{{old('leader')}}" id="inputPassword6" class="form-control mx-sm-3 " required>

                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-inline ">
                        <div class="form-group">
                            <label class="bold p" for="inputPassword6">الاسبوع </label>
                            <input type="text" name="week_number" id="inputPassword6" class="form-control mx-sm-3 " value="<?php
                            function weekOfMonth($date) {
                                $firstOfMonth = date("Y-m-01", strtotime($date));
                                return intval(date("W", strtotime($date))) - intval(date("W", strtotime($firstOfMonth)));
                            }
                            echo weekOfMonth(date('Y-m-d',time()));
                            ?>" required>
                        </div>
                    </div>
                </td>

            </tr>
            </tbody>
        </table>
        <table class="table">
            <thead>
            <th colspan="2"> <h4 class="center">اليوم</h4> </th>
            <th colspan="3">  <h4 class="center">{{Auth::user()->name}}</h4> </th>
            <th colspan="3">  <h4 class="center">  STARTING POINT</h4> </th>
            <th colspan="3">  <h4 class="center">  Time</h4> </th>

            </thead>

            <tbody>
            @for($i=1;$i<=5;$i++)
                <tr>

                    <td colspan="2">
                        <div class="form-group mar-t">
                            <input type="text" name="day{{$i}}" value="{{\App\Helper\AppHelper::instance()->dayInArbic( date( 'l', strtotime('Saturday')+$i*24*60*60))}}" class="form-control"  readonly required  >
                        </div>
                    </td>
                    <td colspan="3">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="center"> AM </h4>

                                <div class="form-group">
                                    <input type="text" name="name_am{{$i}}" value="{{old('name_am'.$i)}}" class="form-control " >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="center"> PM </h4>
                                <div class="form-group">
                                    <input type="text" name="name_pm{{$i}}" value="{{old('name_pm'.$i)}}" class="form-control " >
                                </div>

                            </div>

                        </div>
                    </td>
                    <td colspan="3">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="center"> AM </h4>

                                <div class="form-group">
                                    <input type="text" name="starting_point_am{{$i}}" value="{{old('starting_point_am'.$i)}}" class="form-control " >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="center"> PM </h4>
                                <div class="form-group">
                                    <input type="text" name="starting_point_pm{{$i}}" value="{{old('starting_point_pm'.$i)}}" class="form-control " >
                                </div>

                            </div>

                        </div>
                    </td>
                    <td colspan="3">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="center"> AM </h4>

                                <div class="form-group">
                                    <input type="text" name="time_am{{$i}}" value="{{old('time_am'.$i)}}" class="form-control " >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="center"> PM </h4>
                                <div class="form-group">
                                    <input type="text" name="time_pm{{$i}}" value="{{old('time_pm'.$i)}}" class="form-control " >
                                </div>

                            </div>

                        </div>
                    </td>

                </tr>
            @endfor
            <tr>
                <td colspan="4">
                    <input type="submit" class="btn btn-primary mr-3" value="ارسال">

                </td>
            </tr>



            </tbody>
        </table>

    </form>

    @if (!$errors->any())
        @if(Session::has('message'))
            <div class="alert alert-success" role="alert">
                <strong>{{ Session::get('type') }} </strong> {{ Session::get('message') }}
            </div>
        @endif
    @else
        <div class="alert alert-danger" role="alert">
            <strong> Warning! </strong> please Check the error and  try submitting again.
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</section>
<script src="{{asset('js/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="{{asset('js/popper.min.js')}}" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src='{{asset('js/jquery-2.2.2.min.js')}}'></script>
<script src="{{asset('js/bootstrap.min.js')}}" integrity="" crossorigin="anonymous"></script>
<script src="../js/jquery.nicescroll.min.js"></script>
<script  src="../js/myjs.js" type="text/javascript">  </script>
</body>
</html>