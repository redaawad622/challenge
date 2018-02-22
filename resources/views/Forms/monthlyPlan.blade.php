<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=1400">


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
      <div class="col-md-10">
         <h4 class="padding-r-xl m">الشركة المصرية الدولية للصناعات الدوائية (ايبكو) </h4>
         <h4>القطاع التجاري-المكتب العلمي</h4>
      </div>
   </div>
   <br>
   <h2 class="center">برنامج عمل مندوب دعاية </h2>
   <br>
   <form action="/monthlyPlan" method="post">
      {{csrf_field()}}
      <table class="table">


         <tbody>
         <tr>
            <td>
               <div class="form-inline">
                  <div class="form-group">
                     <label class="bold" > الاسم </label>
                     <input type="text"  name="name" value="{{Auth::user()->name}}" class="form-control mx-sm-3 <?php if ($errors->has('name')) {echo 'is-invalid';} ?>" readonly>
                     <div class="invalid-feedback">
                        @foreach ($errors->get('name') as $message)
                           {{$message}}
                        @endforeach
                     </div>

                  </div>
               </div>
            </td>
            <td>
               <div class="form-inline">
                  <div class="form-group">
                     <label class="bold " > المحافظة </label>
                     <input type="text" name="city"   class="form-control mx-sm-3 <?php if ($errors->has('city')) {echo 'is-invalid';} ?>" required>
                     <div class="invalid-feedback">
                        @foreach ($errors->get('city') as $message)
                           {{$message}}
                        @endforeach
                     </div>

                  </div>
               </div>
            </td>
            <td>
               <div class="form-inline">
                  <div class="form-group">
                     <label class="bold " > المنطقة </label>
                     <input type="text" name="area"  class="form-control mx-sm-3 <?php if ($errors->has('area')) {echo 'is-invalid';} ?>" required>
                     <div class="invalid-feedback">
                        @foreach ($errors->get('area') as $message)
                           {{$message}}
                        @endforeach
                     </div>


                  </div>
               </div>
            </td>
            <td>
               <div class="form-inline">
                  <div class="form-group">
                     <label class="bold " > شهر </label>
                     <input type="month" name="date"  class="form-control mx-sm-3 <?php if ($errors->has('date')) {echo 'is-invalid';} ?>" required>
                
  
                  </div>
               </div>
            </td>
            <td>
               <div class="form-inline">
                  <div class="form-group">
                     <label class="bold " > سنة </label>
                     <input type="text"  value="<?php echo date('Y',time())?>"  class="form-control mx-sm-3" readonly>

                  </div>
               </div>
            </td>

         </tr>
         </tbody>
      </table>
      <table class="table">
         <thead>
         <th> <h4 class="center "> التاريخ </h4></th>
         <th> <h4 class="center">اليوم</h4> </th>
         <th colspan="3">  <h4 class="center"> البرنامج الصباحي</h4> </th>
         <th colspan="3">  <h4 class="center"> البرنامج المسائي</h4> </th>
         <th> <h4 class="center">ملاحظات</h4></th>

         </thead>

         <tbody>
         @for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN,date('m',time()+24*60*60) , date('Y',time()));$i++)
            <tr>
               <td><div class="form-group mar-t">
                     <input type="text" name="date_num{{$i}}" class="form-control " value="{{$i}}" readonly>
                  </div>
               </td>
               <td>
                  <div class="form-group mar-t">
                     <input type="text" name="day{{$i}}" value="{{ \App\Helper\AppHelper::instance()->dayInArbic(date( 'l', strtotime( date( 'n',time()+30*24*60*60 ) . '/' . $i ) ))}}" class="form-control" readonly>
                  </div>
               </td>
               <td colspan="3">
                  <div class="row">
                     <div class="col-md-6">
                        <h4 class="center"> المنطقة </h4>

                        <div class="form-group">
                           <input type="text" name="location{{$i}}" class="form-control " required>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <h4 class="center" style="font-size: 13px"> STARTING POINT </h4>
                        <div class="form-group">
                           <input type="text" name="pharm{{$i}}" class="form-control " required>
                        </div>

                     </div>
                     <div class="col-md-3">
                        <h4 style="font-size:13px" class="center"> STARTING TIME </h4>
                        <div class="form-group">
                           <input type="text" name="time{{$i}}" class="form-control " required>
                        </div>

                     </div>
                  </div>
               </td>
               <td colspan="3">
                  <div class="row">
                     <div class="col-md-6">
                        <h4 class="center"> المنطقة </h4>
                        <div class="form-group">
                           <input type="text" name="locationPm{{$i}}" class="form-control " required>
                        </div>

                     </div>
                     <div class="col-md-3">
                        <h4 class="center" style="font-size:13px"> STARTING POINT </h4>
                        <div class="form-group">
                           <input type="text" name="pharmPm{{$i}}" class="form-control " required>
                        </div>

                     </div>
                     <div class="col-md-3">
                        <h4 style="font-size:13px" class="center"> STARTING TIME </h4>

                        <div class="form-group">
                           <input type="text" name="timePm{{$i}}" class="form-control " required>
                        </div>

                     </div>
                  </div>
               </td>
               <td>
                  <div class="form-group mar-t">
                     <input type="text" name="note{{$i}}" class="form-control ">
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
</section>
<script src="{{asset('js/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="{{asset('js/popper.min.js')}}" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src='{{asset('js/jquery-2.2.2.min.js')}}'></script>
<script src="{{asset('js/bootstrap.min.js')}}" integrity="" crossorigin="anonymous"></script>
<script src="../js/jquery.nicescroll.min.js"></script>
<script  src="../js/myjs.js" type="text/javascript">  </script>
</body>
</html>