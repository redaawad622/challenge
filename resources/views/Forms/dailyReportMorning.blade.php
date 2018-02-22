<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=1200">
   <meta name="csrf-token" content="{{ csrf_token() }}">



   <title>daily Report</title>
   <link href="../css/bootstrap.min.css" rel="stylesheet">
   <link href="../css/forms.css" rel="stylesheet">
   <link rel="stylesheet" href="../css/form/blackStyle-them.css">
   <!--[if lt IE 9]>
   <script src="js/html5shiv.min.js"></script>
   <script src="js/respond.min.js"></script>
   <![endif]-->
   <style>
      html
      {
         direction: ltr;

      }
      .bod
      {
         text-align: left;
      }
      form
      {
         margin-bottom:40px ;
      }

   </style>

</head>
<body>

<section class="bod container-fluid">
   <h3 class="center bold">  Daily Report </h3>
   <h3><img src="../image/LogoImageMasterPage.jpg"> Scientific Office</h3>


   <br>
   <!--header-->
   @if(!$count__headers>=1)
   <form  action="/header" id="morning_Header_form" method="post">
      {{csrf_field()}}
      <table class="table">

         <tbody>
         <tr>
            <td>
               <div class="form-inline padding-t-xl">
                  <div class="form-group">
                     <label class="bold padding-r" for="inputPassword6"> File No </label>

                     <input type="text" value="{{Auth::user()->file_num}}"  class="form-control mx-sm-3" readonly>
                  </div>
               </div>
            </td>
            <td>
               <div class="form-inline padding-t-xl">
                  <div class="form-group">
                     <label class="bold padding-r" for="inputPassword6"> Name </label>

                     <input type="text"  value="{{Auth::user()->name}}" class="form-control mx-sm-3" readonly>
                  </div>
               </div>
            </td>
            <td>
               <div class="form-inline padding-t-xl">
                  <div class="form-group">
                     <label class="bold padding-r" for="inputPassword6"> Date </label>

                     <input type="text" value="{{date('Y/m/d',time())}}" class="form-control mx-sm-3" readonly>
                  </div>
               </div>
            </td>
            <td>
               <div class="form-inline">
                  <div class="form-group">
                     <label class="bold padding-r" for="inputPassword6"> Area </label>

                     <input type="text" name="area" id="area" class="form-control mx-sm-3" required>
                  </div>
               </div>

               <div class="form-inline padding-t">
                  <div class="form-group">
                     <label class="bold padding-r " for="inputPassword6"> Line </label>

                     <input type="text" name="line" id="line" class="form-control mx-sm-3 line" required>
                  </div>
               </div>
            </td>
         </tr>

         </tbody>
      </table>
      <input type="submit" value="Add" class="btn btn-primary tops" style="display: none;margin-left: 11px;">
   </form>
   @endif
   <div class="alert alert-success" style="display: none;" id="alert_header" role="alert">


   </div>
   <div class="alert alert-danger" style="display: none;" id="alert_header_f" role="alert">
      <ul style="list-style-type: none;">

      </ul>

   </div>



<!--morning-->
   <form  action="/dailyReportMorning" id="morning_form" method="post">
      {{csrf_field()}}
      <table class="table table-bordered center">
         <thead>
         <tr>

            <td> <h4 class="center"> Code No </h4></td>
            <td colspan="3"> <h4 class="center">hospital or institute name</h4></td>
            <td colspan="3"> <h4 class="center">Doctor name </h4></td>
            <td colspan="3"> <h4 class="center"> Specialty</h4></td>
            <td colspan="3">
               <h4 class="center"> Products</h4>
               <div class="row">
                  <div class="col-md-4">
                     F1
                  </div>

                  <div class="col-md-4">
                     F2
                  </div>
                  <div class="col-md-4">
                     R
                  </div>
               </div>
            </td>
         </tr>
         </thead>

         <tbody>

         <tr>

            <td> <input type="text" name="code_no" id="code_no" class="form-control"></td>
            <td colspan="3"> <input type="text" id="hosp_name" name="hosp_name" class="form-control" required></td>
            <td colspan="3"> <input type="text" id="doctor_name" name="doctor_name" class="form-control" required></td>
            <td colspan="3"><input type="text" name="specialty" id="specialty" class="form-control spe" required></td>
            <td colspan="3">

               <div class="row">
                  <div class="col-md-4">
                     <input type="text" name="pro_f1" id="pro_f1" class="form-control">
                  </div>

                  <div class="col-md-4">
                     <input type="text" name="pro_f2" id="pro_f2" class="form-control">
                  </div>
                  <div class="col-md-4">
                     <input type="text"  name="pro_r" id="pro_r" class="form-control">
                  </div>
               </div>
            </td>
         </tr>

         </tbody>
      </table>
      <input type="submit" value="Add" class="btn btn-primary spc" style="display: none; margin-left: 11px;">

   </form>
   <div class="alert alert-success" style="display: none;" id="alert_person" role="alert">


   </div>
   <div class="alert alert-danger" style="display: none;" id="alert_person_f" role="alert">
      <ul style="list-style-type: none;">

      </ul>

   </div>




   <form  action="/DailyReportEvening" method="post" id="evening_form">
      {{csrf_field()}}
      <table class="table table-bordered center">
         <thead>
         <tr>

            <td colspan="2"> <h4 class="center"> Code </h4></td>
            <td colspan="4"> <h4 class="center">Doctor's Name </h4></td>
            <td colspan="2"> <h4 class="center"> Specialty</h4></td>
            <td colspan="1"> <h4 class="center"> Class</h4></td>
            <td colspan="3"> <h4 class="center"> Clinic Address</h4></td>
            <td colspan="4">
               <h4 class="center"> Products Detailed </h4>
               <div class="row">
                  <div class="col-md-3">
                     F1
                  </div>

                  <div class="col-md-3">
                     F2
                  </div>
                  <div class="col-md-3">
                     R
                  </div>
                  <div class="col-md-3">
                     D
                  </div>

               </div>
            </td>
         </tr>
         </thead>

         <tbody>

         <tr>

            <td colspan="2"> <input type="text" name="code_m" id="code_m"  class="form-control"></td>
            <td colspan="4"> <input type="text"  name="doctors_name" id="doctors_name" class="form-control" required></td>
            <td colspan="2"><input type="text"  name="specialty_m" id="specialty_m" class="form-control" required></td>
            <td colspan="1">
               <select  name="class_m" class="custom-select"  id="class_m">
                  <option value="Aa">Aa</option>
                  <option value="Ab">Ab</option>
                  <option value="Ac">Ac</option>
                  <option value="Ba">Ba</option>
                  <option value="Bb">Bb</option>
                  <option value="Bc">Bc</option>
                  <option value="Ca">Ca</option>
                  <option value="Cb">Cb</option>
                  <option value="Cc">Cc</option>
               </select>
            </td>
            <td colspan="3"><input type="text" name="clinic_address" id="clinic_address" class="form-control nit" required></td>
            <td colspan="4">

               <div class="row">
                  <div class="col-md-3">
                     <input type="text" name="prd_f1" id="prd_f1" class="form-control">
                  </div>

                  <div class="col-md-3">
                     <input type="text" name="prd_f2" id="prd_f2" class="form-control">
                  </div>
                  <div class="col-md-3">
                     <input type="text" name="prd_r"  id="prd_r" class="form-control">
                  </div>
                  <div class="col-md-3">
                     <input type="text" name="prd_d" id="prd_d" class="form-control">
                  </div>
               </div>
            </td>
         </tr>

         </tbody>
      </table>
      <input type="submit" value="Add" class="btn btn-primary ni" style="display: none; margin-left: 11px;">

   </form>

   <div class="alert alert-success" style="display: none;" id="alert_evening" role="alert">


   </div>
   <div class="alert alert-danger" style="display: none;" id="alert_evening_f" role="alert">
      <ul style="list-style-type: none;">

      </ul>

   </div>





   <form  action="/Pharmacy" method="post" id="Pharmacy">
      {{csrf_field()}}
      <table class="table table-bordered center">
         <thead>
         <tr>

            <td colspan=""> <h4 class="center"> Code </h4></td>
            <td colspan="4"> <h4 class="center"> Pharmacy Name </h4></td>
            <td colspan=""> <h4 class="center"> Address</h4></td>

         </tr>
         </thead>

         <tbody>

         <tr>

            <td> <input type="text" name="code_p" id="code_p" class="form-control"></td>
            <td colspan="4"> <input type="text"  name="pharmacy"  id="pharmacy" class="form-control" required></td>
            <td><input type="text" name="address" id="address" class="form-control si" required></td>


         </tr>

         </tbody>
      </table>
      <input type="submit" value="Add" class="btn btn-primary di" style="display: none; margin-left: 11px;">
   </form>

   <div class="alert alert-success" style="display: none;" id="alert_Pharmacy" role="alert">


   </div>
   <div class="alert alert-danger" style="display: none;" id="alert_Pharmacy_f" role="alert">
      <ul style="list-style-type: none;">

      </ul>

   </div>

   <form  action="/notes" method="post" id="notes">
      {{csrf_field()}}
      <table class="table  center ">
         <tbody>

         <tr>
            <td colspan="4"> <h4 style="text-align: left;" >Comments and Feedback</h4></td>
         </tr>
         <tr>
            <td colspan="4">
               <div class="form-group">
                  <textarea class="form-control gt <?php if ($errors->has('publicNote')) {echo 'is-invalid';} ?>" name="publicNote"  id="publicNote" rows="3"></textarea>

                  <div class="invalid-feedback">
                     @foreach ($errors->get('publicNote') as $message)
                        {{$message}}
                     @endforeach
                  </div>
               </div>
            </td>
         </tr>


         </tbody>
      </table>
      <input type="submit"   class="btn btn-primary gi" value="Add" style="display: none; margin-left: 11px;">

   </form>

   <div class="alert alert-success" style="display: none;" id="alert_notes" role="alert">


   </div>
   <div class="alert alert-danger" style="display: none;" id="alert_notes_f" role="alert">
      <ul style="list-style-type: none;">

      </ul>

   </div>
      @if(!$count__footers>=1)


   <form  action="/footer" method="post" id="footer">
   
      {{csrf_field()}}
       
      <table class="table">
         <tr>
            <td style="width: 50%;">
               <table class="table table-bordered center">
                  <tbody>
                  <tr>
                     <td>Hospital</td>
                     <td><input type="text" name="hospital" id="hospital" class="form-control"></td>
                     <td>Hospital Doctors</td>
                     <td><input type="text" name="hospital_doctor" id="hospital_doctor" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>Medical Centers</td>
                     <td><input type="text" name="medical_center" id="medical_center" class="form-control"></td>
                     <td>Medical Centers Doctors</td>
                     <td><input type="text" name="medical_center_doctor" id="medical_center_doctor" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>Clinic Doctors</td>
                     <td><input type="text" name="clinic_doctor" id="clinic_doctor" class="form-control"></td>
                     <td>Pharmacies</td>
                     <td><input type="text" name="pharmacies" id="pharmacies" class="form-control"></td>
                  </tr>
                  </tbody>
               </table>

            </td>
            <td>
               <table class="table table-bordered center" style="height: 207px;">
                  <tbody>
                  <tr>
                     <td colspan="9">Clinic Doctors Visited</td>

                  </tr>
                  <tr>
                     <td>Aa</td>
                     <td>Ab</td>
                     <td>Ac</td>
                     <td>Ba</td>
                     <td>Bb</td>
                     <td>Bc</td>
                     <td>Ca</td>
                     <td>Cb</td>
                     <td>Cc</td>


                  </tr>
                  <tr>
                     <td><input type="text" name="aa" id="aa" class="form-control"></td>
                     <td><input type="text" name="ab" id="ab" class="form-control"></td>
                     <td><input type="text" name="ac" id="ac" class="form-control"></td>
                     <td><input type="text"  name="ba" id="ba" class="form-control"></td>
                     <td><input type="text" name="bb" id="bb" class="form-control"></td>
                     <td><input type="text" name="bc" id="bc" class="form-control"></td>
                     <td><input type="text" name="ca" id="ca"  class="form-control"></td>
                     <td><input type="text" name="cb" id="cb"  class="form-control"></td>
                     <td><input type="text" name="cc" id="cc"  class="form-control"></td>

                  </tr>
                  </tbody>
               </table>

            </td>
         </tr>
      </table>
            <input type="text" name="cm_all" class="form-control" id="cm_all" style="margin:10px;width:200px;" placeholder="كم">
      
              <input type="submit"  class="btn btn-primary" value="Add" style="margin-left: 11px;">
      
   </form>
   @endif
   <div class="alert alert-success" style="display: none;" id="alert_footer" role="alert">


   </div>
   <div class="alert alert-danger" style="display: none;" id="alert_footer_f" role="alert">
      <ul style="list-style-type: none;">

      </ul>

   </div>


</section>
<div class="cssload-container">
   <div class="cssload-whirlpool"></div>
</div>
<script src="{{asset('js/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="{{asset('js/popper.min.js')}}" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src='{{asset('js/jquery-2.2.2.min.js')}}'></script>
<script src="{{asset('js/bootstrap.min.js')}}" integrity="" crossorigin="anonymous"></script>
<script>

       $('.line').change(function () {
           $('.tops').show();
       });
       $('.spe').change(function () {
           $('.spc').show();
       });
       $('.nit').change(function () {
           $('.ni').show();
       });
       $('.gt').change(function () {
           $('.gi').show();
       });

       $('.si').change(function () {
           $('.di').show();
       });


       //store daily report Morning
       $('#morning_form').on('submit',function(e){
           $('#alert_person').hide();

           $('#alert_person_f').hide();
           e.preventDefault(e);



           var code_no = $('#code_no').val();
           var hosp_name = $('#hosp_name').val();
           var doctor_name = $('#doctor_name').val();
           var specialty = $('#specialty').val();
           var pro_f1 = $('#pro_f1').val();
           var pro_f2 = $('#pro_f2').val();
           var pro_r = $('#pro_r').val();

           $('.cssload-container').show();


           $.ajax({
               headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },

               type:'POST',
               url:'/dailyReportMorning',

               dataType:'json',
               data: {code_no:code_no, hosp_name:hosp_name, doctor_name:doctor_name, specialty:specialty,pro_f1:pro_f1, pro_f2:pro_f2,  pro_r:pro_r},
               success:function (data) {

                   if(data.success==true)
                   {
                       $('#alert_person').show();
                       $('#alert_person').html('success!');
                       $('#code_no').val('');
                       $('#hosp_name').val('');
                       $('#doctor_name').val('');
                       $('#specialty').val('');
                       $('#pro_f1').val('');
                       $('#pro_f2').val('');
                       $('#pro_r').val('');
                       $('.cssload-container').hide();

                   }
                   if(!data.success)
                   {
                       $('#alert_person_f').find('li').hide();
                       $('#alert_person_f').show();
                       $('.cssload-container').hide();

                       $.each(data.errors,function (index,error) {
                           $('#alert_person_f').find('ul').append('<li>'+error+'</li>');

                       });

                   }
               }



           });


           return false;
       });
       //store daily report Evening
       $('#evening_form').on('submit',function(e){
           $('#alert_evening').hide();

           $('#alert_evening_f').hide();
           e.preventDefault(e);



           var code_m = $('#code_m').val();
           var doctors_name = $('#doctors_name').val();
           var specialty_m = $('#specialty_m').val();
           var class_m = $('#class_m').val();
           var clinic_address = $('#clinic_address').val();
           var prd_f1 = $('#prd_f1').val();
           var prd_f2 = $('#prd_f2').val();
           var prd_r = $('#prd_r').val();
           var prd_d = $('#prd_d').val();
           $('.cssload-container').show();

           $.ajax({
               headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },

               type:'POST',
               url:'/DailyReportEvening',

               dataType:'json',
               data: {code_m:code_m, doctors_name:doctors_name, specialty_m:specialty_m,class_m:class_m,clinic_address:clinic_address,prd_f1:prd_f1, prd_f2:prd_f2,  prd_r:prd_r,prd_d:prd_d},
               success:function (data) {

                   if(data.success==true)
                   {
                       $('#alert_evening').show();
                       $('#alert_evening').html('success!');
                       $('#code_m').val('');
                       $('#doctors_name').val('');
                       $('#specialty_m').val('');
                       $('#class_m').val('');
                       $('#clinic_address').val('');
                       $('#prd_f1').val('');
                       $('#prd_f2').val('');
                       $('#prd_r').val('');
                       $('#prd_d').val('');
                       $('.cssload-container').hide();

                   }
                   if(!data.success)
                   {
                       $('#alert_evening_f').find('li').hide();
                       $('#alert_evening_f').show();
                       $('.cssload-container').hide();

                       $.each(data.errors,function (index,error) {
                           $('#alert_evening_f').find('ul').append('<li>'+error+'</li>');

                       });

                   }
               }



           });


           return false;
       });
 //store daily report Morning Header
       $('#morning_Header_form').on('submit',function(e){
           $('#alert_header').hide();

           $('#alert_header_f').hide();
           e.preventDefault(e);



           var area = $('#area').val();
           var line = $('#line').val();
           $('.cssload-container').show();



           $.ajax({
               headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },

               type:'POST',
               url:'/header',

               dataType:'json',
               data: {area:area, line:line},
               success:function (data) {

                   if(data.success==true)
                   {
                       $('#alert_header').show();
                       $('#alert_header').html('success!');
                       $('#area').val('');
                       $('#line').val('');
                       $('.cssload-container').hide();


                   }
                   if(!data.success)
                   {
                       $('#alert_header_f').find('li').hide();
                       $('#alert_header_f').show();
                       $('.cssload-container').hide();

                       $.each(data.errors,function (index,error) {
                           $('#alert_header_f').find('ul').append('<li>'+error+'</li>');

                       });

                   }
               }



           });


           return false;
       });



//store daily report pharmacy
       $('#Pharmacy').on('submit',function(e){
           $('#alert_pharmacy').hide();

           $('#alert_pharmacy_f').hide();
           e.preventDefault(e);



           var code_p = $('#code_p').val();
           var pharmacy = $('#pharmacy').val();
           var address = $('#address').val();
           $('.cssload-container').show();



           $.ajax({
               headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },

               type:'POST',
               url:'/Pharmacy',

               dataType:'json',
               data: {code_p:code_p, pharmacy:pharmacy , address:address},
               success:function (data) {

                   if(data.success==true)
                   {
                       $('#alert_Pharmacy').show();
                       $('#alert_Pharmacy').html('success!');
                       $('#code_p').val('');
                       $('#pharmacy').val('');
                       $('#address').val('');
                       $('.cssload-container').hide();


                   }
                   if(!data.success)
                   {
                       $('#alert_pharmacy_f').find('li').hide();
                       $('#alert_pharmacy_f').show();
                       $('.cssload-container').hide();

                       $.each(data.errors,function (index,error) {
                           $('#alert_pharmacy_f').find('ul').append('<li>'+error+'</li>');

                       });

                   }
               }



           });


           return false;
       });


//store daily report notes
       $('#notes').on('submit',function(e){
           $('#alert_notes').hide();

           $('#alert_notes_f').hide();
           e.preventDefault(e);



           var publicNote = $('#publicNote').val();
           $('.cssload-container').show();




           $.ajax({
               headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },

               type:'POST',
               url:'/notes',

               dataType:'json',
               data: {publicNote:publicNote},
               success:function (data) {

                   if(data.success==true)
                   {
                       $('#alert_notes').show();
                       $('#alert_notes').html('success!');
                       $('#publicNote').val('');
                       $('.cssload-container').hide();

                   }
                   if(!data.success)
                   {
                       $('#alert_notes_f').find('li').hide();
                       $('#alert_notes_f').show();
                       $('.cssload-container').hide();

                       $.each(data.errors,function (index,error) {
                           $('#alert_notes_f').find('ul').append('<li>'+error+'</li>');

                       });

                   }
               }



           });


           return false;
       });
       //store daily report footer
       $('#footer').on('submit',function(e){
           $('#alert_footer').hide();

           $('#alert_footer_f').hide();
           e.preventDefault(e);



           var hospital = $('#hospital').val();
           var hospital_doctor = $('#hospital_doctor').val();
           var medical_center = $('#medical_center').val();
           var medical_center_doctor = $('#medical_center_doctor').val();
           var clinic_doctor = $('#clinic_doctor').val();
           var pharmacies = $('#pharmacies').val();
           var aa = $('#aa').val();
           var ab = $('#ab').val();
           var ac = $('#ac').val();
           var ba = $('#ba').val();
           var bb = $('#bb').val();
           var bc = $('#bc').val();
           var ca = $('#ca').val();
           var cb = $('#cb').val();
           var cc = $('#cc').val();
           var cm_all=$('#cm_all').val();
           
           $('.cssload-container').show();




           $.ajax({
               headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },

               type:'POST',
               url:'/footer',

               dataType:'json',
               data: {hospital:hospital,hospital_doctor:hospital_doctor,medical_center:medical_center,medical_center_doctor:medical_center_doctor,clinic_doctor:clinic_doctor,pharmacies:pharmacies,aa:aa,ab:ab,ac:ac,ba:ba,bb:bb,bc:bc,ca:ca,cb:cb,cc:cc,cm_all:cm_all},
               success:function (data) {

                   if(data.success==true)
                   {
                       $('#alert_footer').show();
                       $('#alert_footer').html('success!');
                       $('#hospital').val('');
                       $('#hospital_doctor').val('');
                       $('#medical_center').val('');
                       $('#medical_center_doctor').val('');
                       $('#clinic_doctor').val('');
                       $('#pharmacies').val('');
                       $('#aa').val('');
                       $('#ab').val('');
                       $('#ac').val('');
                       $('#ba').val('');
                       $('#bb').val('');
                       $('#bc').val('');
                       $('#ca').val('');
                       $('#cb').val('');
                       $('#cc').val('');
                       $('#cm_all').val('');
                       $('.cssload-container').hide();

                   }
                   if(!data.success)
                   {
                       $('#alert_footer_f').find('li').hide();
                       $('#alert_footer_f').show();
                       $('.cssload-container').hide();

                       $.each(data.errors,function (index,error) {
                           $('#alert_footer_f').find('ul').append('<li>'+error+'</li>');

                       });

                   }
               }



           });


           return false;
       });


</script>

</body>
</html>