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
   </head>
   <body>

      <section class="bod">
         <form action="vaction" method="post">
          {{csrf_field()}}
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-1">
                     <h5 class="center  padding-t-lg"> م </h5>
                     <div class=" center padding-lg-s">
                        <span class=" bold">1</span>
                     </div>

                  </div>
                  <div class="col-md-3">
                     <h5 class="center padding-t-lg"> الاسم </h5>
                     <div class="form-group">
                        <select class="custom-select" name="name" style="width: 100%;">
                           <option value='' selected>--Select name--</option>
                           @foreach($users as $user)
                           <option  value='{{$user->id}}'>{{$user->name}}</option>
                              @endforeach

                        </select>
                     </div>
                  </div>

                     <div class="col-md-2">
                        <h5 class="center padding-t-lg"> الوظيفة </h5>
                        <div class="form-group">
                           <input type="text" name="job" value="{{old('job')}}" class="form-control ">
                        </div>

                     </div>
                     <div class="col-md-3">
                        <h5 class="center padding-t-lg"> الشهر </h5>

                        <select class="custom-select" name="month" style="width: 100%;">
                           <option value='' selected>--Select Month--</option>
                           <option  value='1'>Janaury</option>
                           <option value='2'>February</option>
                           <option value='3'>March</option>
                           <option value='4'>April</option>
                           <option value='5'>May</option>
                           <option value='6'>June</option>
                           <option value='7'>July</option>
                           <option value='8'>August</option>
                           <option value='9'>September</option>
                           <option value='10'>October</option>
                           <option value='11'>November</option>
                           <option value='12'>December</option>
                        </select>
                     </div>



                     <div class="col-md-1">
                        <h4 class="center padding-t-lg"> السنوية </h4>
                        <div class="form-group">
                           <input type="text" name="annual" value="{{old('annual')}}" id="annual" class="form-control ">
                        </div>
                     </div>


                     <div class="col-md-1">
                        <h4 class="center padding-t-lg"> المتصلة </h4>
                        <div class="form-group">
                           <input type="text" name="connected" value="{{old('connected')}}" id="connected" class="form-control ">
                        </div>
                     </div>

                     <div class="col-md-1">
                        <h4 class="center padding-t-lg"> العارضة </h4>
                        <div class="form-group">
                           <input type="text" name="objection" value="{{old('objection')}}" id="objection" class="form-control ">
                        </div>
                     </div>

                  </div>
               </div>


               <hr>
            </div>
            <input type="submit"  class="btn btn-primary mr-3" id="sent" value="ارسال">
         </form>
         @if (!$errors->any())
            @if(Session::has('message'))
               <div class="alert alert-success" role="alert" style="margin-top: 20px;">
                  <strong>{{ Session::get('type') }} </strong> {{ Session::get('message') }}
               </div>
            @endif
         @else
            <div class="alert alert-danger" role="alert" style="margin-top: 20px;">
               <strong> Warning! </strong> please Check the error and  try submitting again.
               <ul>
                  @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                  @endforeach
               </ul>
            </div>
         @endif

      </section>
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/tether.min.js"></script>

      <script src="js/bootstrap.js"></script>
      <script src="js/popper.min.js"></script>
   <script>
      $('#sent').click(function () {
         if($('#annual').val()=='')
         {
             $('#annual').val('0');
         }
         if($('#connected').val()=='')
         {
             $('#connected').val('0');
         }
         if($('#objection').val()=='')
         {
             $('#objection').val('0');
         }
      });
   </script>
   </body>
</html>