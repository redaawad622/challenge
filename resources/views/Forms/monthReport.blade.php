<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=1200">


   <title>Monthly Report</title>
   <link href="../css/bootstrap.min.css" rel="stylesheet">
   <link href="../css/forms.css" rel="stylesheet">
   <link rel="stylesheet" href="../css/form/blackStyle-them.css">
   <link href="../css/font-awesome.css" rel="stylesheet">
   <!--[if lt IE 9]>
   <script src="js/html5shiv.min.js"></script>
   <script src="js/respond.min.js"></script>
   <![endif]-->

   <style>
      .sp_input
      {
         border: none;
         border-bottom: 2px dotted;
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
   <form action="/monthlyReport" method="post">
      {{csrf_field()}}
   <table class="table">
      <tbody>
      <tr>
         <td style="width: 37%;">
            <h3><img style="width: 111px;" src="../image/LogoImageMasterPage.jpg">  الشركة المصرية الدولية للصناعات الدوائية - ايبيكو </h3>
            <h3 class="center">القطاع التجاري<br> المكتب العلمي</h3>
         </td>
         <td>
            <div class="form-inline left">
            <div class="form-group">
               <label class="bold p" >تقرير  شهر  </label>
               <input type="text"  class="form-control mx-sm-3 " value="<?php use App\Helper\AppHelper;echo date('F',time())?>" readonly>
            </div>
            </div>
         </td>
      </tr>
      <tr>
         <td>
            <div class="form-inline">
               <div class="form-group">
                  <label style="width: 86px;"   class="bold p" >  فرع:  </label>
                  <input type="text" name="pranch" value="{{old('pranch')}}" class="form-control mx-sm-3 sp_input" required>
               </div>
            </div>

         </td>
         <td  rowspan="3">
            <table class="table table-bordered">
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
                  <td><input style="margin-top: 33px;" name="work_days_pa" type="text" class="form-control"></td>
                  <td><input style="margin-top: 33px;" type="text" name="doctors_clinic_pa"value="{{old('doctors_clinic_pa')}}" class="form-control"></td>
                  <td><input style="margin-top: 33px;" type="text" name="pharmacy_pa" value="{{old('pharmacy_pa')}}"class="form-control"></td>


                  <td>

                     <div class="row">
                        <div class="col-md-4">
                           <!--left-->
                           <h4 class="center"> هيئات </h4>
                           <div class="form-group">
                              <input type="text" name="station_h_pa" value="{{old('station_h_pa')}}"class="form-control <?php if ($errors->has('station_h_pa')) {echo 'is-invalid';} ?>">

                              <div class="invalid-feedback">
                                 @foreach ($errors->get('station_h_pa') as $message)
                                    {{$message}}
                                 @endforeach
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <h4 class="center"> مدارس </h4>
                           <div class="form-group">
                              <input type="text" name="station_m_pa"value="{{old('station_m_pa')}}" class="form-control  <?php if ($errors->has('station_m_pa')) {echo 'is-invalid';} ?>">

                              <div class="invalid-feedback">
                                 @foreach ($errors->get('station_m_pa') as $message)
                                    {{$message}}
                                 @endforeach
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <h4 class="center"> وحدات </h4>
                           <div class="form-group">
                              <input type="text" name="station_w_pa" value="{{old('station_w_pa')}}" class="form-control  <?php if ($errors->has('station_w_pa')) {echo 'is-invalid';} ?>">

                              <div class="invalid-feedback">
                                 @foreach ($errors->get('station_w_pa') as $message)
                                    {{$message}}
                                 @endforeach
                              </div>
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
                              <input type="text" name="doctors_num_h_pa" value="{{old('doctors_num_h_pa')}}"class="form-control <?php if ($errors->has('doctors_num_h_pa')) {echo 'is-invalid';} ?>">

                              <div class="invalid-feedback">
                                 @foreach ($errors->get('doctors_num_h_pa') as $message)
                                    {{$message}}
                                 @endforeach
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <h4 class="center"> مدارس </h4>
                           <div class="form-group">
                              <input type="text" name="doctors_num_m_pa" value="{{old('doctors_num_m_pa')}}"class="form-control  <?php if ($errors->has('doctors_num_m_pa')) {echo 'is-invalid';} ?>">

                              <div class="invalid-feedback">
                                 @foreach ($errors->get('doctors_num_m_pa') as $message)
                                    {{$message}}
                                 @endforeach
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <h4 class="center"> وحدات </h4>
                           <div class="form-group">
                              <input type="text" name="doctors_num_w_pa" value="{{old('doctors_num_w_pa')}}"class="form-control  <?php if ($errors->has('doctors_num_w_pa')) {echo 'is-invalid';} ?>">

                              <div class="invalid-feedback">
                                 @foreach ($errors->get('doctors_num_w_pa') as $message)
                                    {{$message}}
                                 @endforeach
                              </div>
                           </div>
                        </div>
                     </div>

                  </td>
                  </td>
                  <td><input  style="margin-top: 33px;" name="eg_pranch_pa"value="{{old('eg_pranch_pa')}}" type="text" class="form-control"></td>


               </tr>
               <tr>

               </tr>

               <tr>
                  <td style="padding-top: 46px;font-weight: bold;"><span >الفعلي</span></td>
                  <td><input style="margin-top: 33px;" name="work_days_ac" value="{{old('work_days_ac')}}"id="work_days_ac" type="text" class="form-control"></td>
                  <td><input style="margin-top: 33px;" type="text" name="doctors_clinic_ac" value="{{old('doctors_clinic_ac')}}"id="doctors_clinic_ac" class="form-control"></td>
                  <td><input style="margin-top: 33px;" type="text" name="pharmacy_ac" value="{{old('pharmacy_ac')}}" id="pharmacy_ac" class="form-control"></td>


                  <td>

                     <div class="row">
                        <div class="col-md-4">
                           <!--left-->
                           <h4 class="center"> هيئات </h4>
                           <div class="form-group">
                              <input type="text" name="station_h_ac" value="{{old('station_h_ac')}}" id="station_h_ac" class="form-control <?php if ($errors->has('station_h_ac')) {echo 'is-invalid';} ?>">

                              <div class="invalid-feedback">
                                 @foreach ($errors->get('station_h_ac') as $message)
                                    {{$message}}
                                 @endforeach
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <h4 class="center"> مدارس </h4>
                           <div class="form-group">
                              <input type="text" name="station_m_ac" value="{{old('station_m_ac')}}"id="station_m_ac" class="form-control  <?php if ($errors->has('station_m_ac')) {echo 'is-invalid';} ?>">

                              <div class="invalid-feedback">
                                 @foreach ($errors->get('station_m_ac') as $message)
                                    {{$message}}
                                 @endforeach
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <h4 class="center"> وحدات </h4>
                           <div class="form-group">
                              <input type="text" name="station_w_ac"value="{{old('station_w_ac')}}" id="station_w_ac" class="form-control  <?php if ($errors->has('station_w_ac')) {echo 'is-invalid';} ?>">

                              <div class="invalid-feedback">
                                 @foreach ($errors->get('station_w_ac') as $message)
                                    {{$message}}
                                 @endforeach
                              </div>
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
                              <input type="text" name="doctors_num_h_ac" value="{{old('doctors_num_h_ac')}}"id="doctors_num_h_ac" class="form-control <?php if ($errors->has('doctors_num_h_ac')) {echo 'is-invalid';} ?>">

                              <div class="invalid-feedback">
                                 @foreach ($errors->get('doctors_num_h_ac') as $message)
                                    {{$message}}
                                 @endforeach
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <h4 class="center"> مدارس </h4>
                           <div class="form-group">
                              <input type="text" name="doctors_num_m_ac"  value="{{old('doctors_num_m_ac')}}"id="doctors_num_m_ac" class="form-control  <?php if ($errors->has('doctors_num_m_ac')) {echo 'is-invalid';} ?>">

                              <div class="invalid-feedback">
                                 @foreach ($errors->get('doctors_num_m_ac') as $message)
                                    {{$message}}
                                 @endforeach
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <h4 class="center"> وحدات </h4>
                           <div class="form-group">
                              <input type="text" name="doctors_num_w_ac"value="{{old('doctors_num_w_ac')}}" id="doctors_num_w_ac" class="form-control  <?php if ($errors->has('doctors_num_w_ac')) {echo 'is-invalid';} ?>">

                              <div class="invalid-feedback">
                                 @foreach ($errors->get('doctors_num_w_ac') as $message)
                                    {{$message}}
                                 @endforeach
                              </div>
                           </div>
                        </div>
                     </div>

                  </td>
                  </td>
                  <td><input  style="margin-top: 33px;" name="eg_pranch_ac" value="{{old('eg_pranch_ac')}}" id="eg_pranch_ac" type="text" class="form-control"></td>


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
                  <label  class="bold p" >  اسم المندوب:  </label>
                  <input type="text" name="name" value="{{old('name')}}"  class="form-control mx-sm-3 sp_input" required>
               </div>
            </div>

         </td>

      </tr>
      <tr>
         <td>
            <div class="form-inline">
               <div class="form-group">
                  <label style="width: 86px;"   class="bold p" >  مقر السكن:  </label>
                  <input type="text"  name="place" value="{{old('place')}}" class="form-control mx-sm-3 sp_input" required>
               </div>
            </div>

         </td>
      </tr>
      <tr>
         <td>
            <div class="form-inline">
               <div class="form-group">
                  <label style="width: 86px;" class="bold p" >  المنطقة:  </label>
                  <input type="text" name="area"value="{{old('area')}}"  class="form-control mx-sm-3 sp_input" required>
               </div>
            </div>

         </td>
         <td rowspan="">
            <table class="table table-bordered">
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
                  <td><input  type="text" id="km_start" name="km_start"value="{{old('km_start')}}" class="form-control" required></td>
                  <td><input type="text" id="km_end" name="km_end" value="{{old('km_end')}}"class="form-control" required></td>
                  <td><input type="text" id="km_consum" name="km_consum" value="{{old('km_consum')}}"class="form-control" required></td>
                  <td><input type="text" name="km_paid" value="{{old('km_paid')}}"class="form-control" required></td>
               </tr>

               </tbody>
            </table>
         </td>
      </tr>
      </tbody>
   </table>


   <br>




      <table class="table table-bordered">
         <thead>
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
         <tbody>
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

         @for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN,date('m',time()) , date('Y',time()));$i++)

         <tr>

            <td><input type="text" name="date_num{{$i}}"  value="{{$i}}" class="form-control" readonly></td>
            <td><input type="text" name="day_name{{$i}}" value="<?php

                echo  AppHelper::instance()->dayInArbic(date( 'l', strtotime( date( 'n' ) . '/' . $i ) )) ;?>" class="form-control" readonly></td>

            <td colspan="4">
               <div class="row">
                  <div class="col-md-4">
                     <input name="route_pm{{$i}}" value="{{old('route_pm'.$i)}}"id="route_pm{{$i}}" type="text" class="form-control" required>
                  </div>
                  <div class="col-md-4">
                     <input type="text" id="doctors_pm{{$i}}" name="doctors_pm{{$i}}"value="{{old('doctors_pm'.$i)}}" class="form-control">
                  </div>
                  <div class="col-md-4">
                     <input type="text"  name="pharma_pm{{$i}}"value="{{old('pharma_pm'.$i)}}" id="pharma_pm{{$i}}" class="form-control">
                  </div>

               </div>

            </td>
            <td colspan="6">

               <div class="row">
                  <div class="col-md-4">
                     <input type="text" name="route_am{{$i}}" value="{{old('route_am'.$i)}}"id="route_am{{$i}}" class="form-control" required>

                  </div>
                  <div class="col-md-4">
                     <div class="row">
                        <div class="col-md-4">
                           <input type="text" name="station_h_am{{$i}}"value="{{old('station_h_am'.$i)}}" id="station_h_am{{$i}}" class="form-control">
                        </div>
                        <div class="col-md-4">
                           <input type="text" name="station_m_am{{$i}}" value="{{old('station_m_am'.$i)}}"id="station_m_am{{$i}}" class="form-control">
                        </div>
                        <div class="col-md-4">
                           <input type="text" name="station_w_am{{$i}}"value="{{old('station_w_am'.$i)}}" id="station_w_am{{$i}}" class="form-control">
                        </div>
                     </div>


                  </div>
                  <div class="col-md-4">
                     <div class="row">
                        <div class="col-md-4">
                           <input type="text" name="doctors_num_h_am{{$i}}"value="{{old('doctors_num_h_am'.$i)}}" id="doctors_num_h_am{{$i}}" class="form-control">
                        </div>
                        <div class="col-md-4">
                           <input type="text" name="doctors_num_m_am{{$i}}" value="{{old('doctors_num_m_am'.$i)}}" id="doctors_num_m_am{{$i}}" class="form-control">
                        </div>
                        <div class="col-md-4">
                           <input type="text" name="doctors_num_w_am{{$i}}"value="{{old('doctors_num_w_am'.$i)}}" id="doctors_num_w_am{{$i}}" class="form-control">
                        </div>
                     </div>

                  </div>
               </div>

            </td>


            <td> <input type="text" name="egption_pranch{{$i}}" value="{{old('egption_pranch'.$i)}}"id="egption_pranch{{$i}}" class="form-control"></td>
            <td> <input type="text" name="actual_paid{{$i}}" value="{{old('actual_paid'.$i)}}"id="actual_paid{{$i}}" class="form-control" required></td>


         </tr>
         @endfor

         <tr>

            <td colspan="2">المجموع</td>

            <td colspan="4">
               <div class="row">
                  <div class="col-md-4">
                  nothing
                  </div>
                  <div class="col-md-4">
                     <input type="text" id="doc" name="doc" value="{{old('doc')}}"class="form-control" required>
                  </div>
                  <div class="col-md-4">
                     <input type="text" id="ph" name="ph" value="{{old('ph')}}"class="form-control" required>
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
                           <input type="text" id="station_h" name="station_h" value="{{old('station_h')}}"class="form-control" required>
                        </div>
                        <div class="col-md-4">
                           <input type="text" id="station_m" name="station_m"value="{{old('station_m')}}" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                           <input type="text" id="station_w" name="station_w" value="{{old('station_w')}}"class="form-control" required>
                        </div>
                     </div>


                  </div>
                  <div class="col-md-4">
                     <div class="row">
                        <div class="col-md-4">
                           <input type="text" id="num_h" name="num_h"value="{{old('num_h')}}" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                           <input type="text" id="num_m" name="num_m"value="{{old('num_m')}}" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                           <input type="text" id="num_w" name="num_w" value="{{old('num_w')}}"class="form-control" required>
                        </div>
                     </div>

                  </div>
               </div>

            </td>


            <td> <input type="text" id="pr" name="pr"value="{{old('pr')}}" class="form-control" required></td>
            <td> <input type="text" id="actual" name="actual"value="{{old('actual')}}" class="form-control" required></td>


         </tr>

         </tbody>
      </table>

      <table style="margin-top: 50px;" class="table table-bordered">
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

            <td><input type="text" name="total_samples"value="{{old('')}}" class="form-control"></td>
            <td><input type="text" name="paid_samples"value="{{old('')}}" class="form-control"></td>
            <td><input type="text" name="back_samples" class="form-control"></td>
            <td><input type="text" name="average_samples" class="form-control"></td>
         </tr>

         </tbody>
      </table>

      <input type="submit" class="btn btn-primary" style="width: 250px; margin-bottom: 50px;">


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
<script>
   $('#doc').click(function () {
       function myFunction() {
           var today = new Date();
           var month = today.getMonth();

           return (daysInMonth(month + 1, today.getFullYear()));
       }

       function daysInMonth(month,year) {
           return new Date(year, month, 0).getDate();
       }
       var sum=0;
      for(var i=1;i<=myFunction();i++)
      {
          if($('#doctors_pm'+i).val()!='')
          {
              sum += parseFloat($('#doctors_pm'+i).val());

          }


      }
       $('#doc').val(sum);
       $('#doctors_clinic_ac').click(function () {
           $('#doctors_clinic_ac').val(sum);
       });


   });


   $('#ph').click(function () {
       function myFunction() {
           var today = new Date();
           var month = today.getMonth();

           return (daysInMonth(month + 1, today.getFullYear()));
       }

       function daysInMonth(month,year) {
           return new Date(year, month, 0).getDate();
       }
       var sum=0;
       for(var i=1;i<=myFunction();i++)
       {
           if($('#pharma_pm'+i).val()!='')
           {
               sum += parseFloat($('#pharma_pm'+i).val());

           }


       }
       $('#ph').val(sum);
       $('#pharmacy_ac').click(function () {
           $('#pharmacy_ac').val(sum);
       });
   });

   $('#station_h').click(function () {
       function myFunction() {
           var today = new Date();
           var month = today.getMonth();

           return (daysInMonth(month + 1, today.getFullYear()));
       }

       function daysInMonth(month,year) {
           return new Date(year, month, 0).getDate();
       }
       var sum=0;
       for(var i=1;i<=myFunction();i++)
       {
           if($('#station_h_am'+i).val()!='')
           {
               sum += parseFloat($('#station_h_am'+i).val());

           }


       }
       $('#station_h').val(sum);
       $('#station_h_ac').click(function () {
           $('#station_h_ac').val(sum);
       });
   });

   $('#station_m').click(function () {
       function myFunction() {
           var today = new Date();
           var month = today.getMonth();

           return (daysInMonth(month + 1, today.getFullYear()));
       }

       function daysInMonth(month,year) {
           return new Date(year, month, 0).getDate();
       }
       var sum=0;
       for(var i=1;i<=myFunction();i++)
       {
           if($('#station_m_am'+i).val()!='')
           {
               sum += parseFloat($('#station_m_am'+i).val());

           }


       }
       $('#station_m').val(sum);
       $('#station_m_ac').click(function () {
           $('#station_m_ac').val(sum);
       });

   });

   $('#station_w').click(function () {
       function myFunction() {
           var today = new Date();
           var month = today.getMonth();

           return (daysInMonth(month + 1, today.getFullYear()));
       }

       function daysInMonth(month,year) {
           return new Date(year, month, 0).getDate();
       }
       var sum=0;
       for(var i=1;i<=myFunction();i++)
       {
           if($('#station_w_am'+i).val()!='')
           {
               sum += parseFloat($('#station_w_am'+i).val());

           }


       }
       $('#station_w').val(sum);
       $('#station_w_ac').click(function () {
           $('#station_w_ac').val(sum);
       });

   });


   $('#num_h').click(function () {
       function myFunction() {
           var today = new Date();
           var month = today.getMonth();

           return (daysInMonth(month + 1, today.getFullYear()));
       }

       function daysInMonth(month,year) {
           return new Date(year, month, 0).getDate();
       }
       var sum=0;
       for(var i=1;i<=myFunction();i++)
       {
           if($('#doctors_num_h_am'+i).val()!='')
           {
               sum += parseFloat($('#doctors_num_h_am'+i).val());

           }


       }
       $('#num_h').val(sum);
       $('#doctors_num_h_ac').click(function () {
           $('#doctors_num_h_ac').val(sum);
       });
   });

   $('#num_m').click(function () {
       function myFunction() {
           var today = new Date();
           var month = today.getMonth();

           return (daysInMonth(month + 1, today.getFullYear()));
       }

       function daysInMonth(month,year) {
           return new Date(year, month, 0).getDate();
       }
       var sum=0;
       for(var i=1;i<=myFunction();i++)
       {
           if($('#doctors_num_m_am'+i).val()!='')
           {
               sum += parseFloat($('#doctors_num_m_am'+i).val());

           }


       }
       $('#num_m').val(sum);
       $('#doctors_num_m_ac').click(function () {
           $('#doctors_num_m_ac').val(sum);
       });
   });


   $('#num_w').click(function () {
       function myFunction() {
           var today = new Date();
           var month = today.getMonth();

           return (daysInMonth(month + 1, today.getFullYear()));
       }

       function daysInMonth(month,year) {
           return new Date(year, month, 0).getDate();
       }
       var sum=0;
       for(var i=1;i<=myFunction();i++)
       {
           if($('#doctors_num_w_am'+i).val()!='')
           {
               sum += parseFloat($('#doctors_num_w_am'+i).val());

           }


       }
       $('#num_w').val(sum);
       $('#doctors_num_w_ac').click(function () {
           $('#doctors_num_w_ac').val(sum);
       });
   });


   $('#pr').click(function () {
       function myFunction() {
           var today = new Date();
           var month = today.getMonth();

           return (daysInMonth(month + 1, today.getFullYear()));
       }

       function daysInMonth(month,year) {
           return new Date(year, month, 0).getDate();
       }
       var sum=0;
       for(var i=1;i<=myFunction();i++)
       {
           if($('#egption_pranch'+i).val()!='')
           {
               sum += parseFloat($('#egption_pranch'+i).val());

           }


       }
       $('#pr').val(sum);
       $('#eg_pranch_ac').click(function () {
           $('#eg_pranch_ac').val(sum);
       });
   });


   $('#actual').click(function () {
       function myFunction() {
           var today = new Date();
           var month = today.getMonth();

           return (daysInMonth(month + 1, today.getFullYear()));
       }

       function daysInMonth(month,year) {
           return new Date(year, month, 0).getDate();
       }
       var sum=0;
       for(var i=1;i<=myFunction();i++)
       {
           if($('#actual_paid'+i).val()!='')
           {
               sum += parseFloat($('#actual_paid'+i).val());

           }


       }
       $('#actual').val(sum);
       $('#km_consum').click(function () {
           $('#km_consum').val(sum);
       });
   });


   $('#km_end').click(function () {
       if($('#km_consum').val()=='' ||$('#km_start').val()=='')
       {
           alert('please fill Km Start field or Km consume field');
       }
       else
       {
           $('#km_end').val(parseFloat($('#km_consum').val())+parseFloat($('#km_start').val())) ;

       }
   });












</script>

</body>
</html>