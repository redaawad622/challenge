<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->

       <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{Auth::user()->name}}</title>
       <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
      <link href="css/bootstrap.min.css" rel="stylesheet" integrity="">
      <link href="css/profile.css" rel="stylesheet">
       <link rel="stylesheet" href="{{asset('css/cv.css')}}">

       <link rel="stylesheet" href="css/hover.css">
      <link rel="stylesheet" href="css/animate.css">
      <link href="css/font-awesome.css" rel="stylesheet">
      <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
       <style>
           @media print {
               body
               {
                   font-family: sans-serif;
                   padding-top:0;
               }
               .navbar
               {
                  visibility: hidden;
               }


           }
       </style>
   </head>
   <body>

   <nav class="navbar navbar-expand-sm navbar-light bg-faded fixed-top">
       <div class="container">
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>

           <!-- Brand -->

           <a class="navbar-brand" href="#">CHALLENGE TEAM</a>

           <!-- Links -->
           <div class="collapse navbar-collapse justify-content-end" id="nav-content">
               <ul class="navbar-nav">
                   <li class="nav-item" id="profile-home">
                       <a href="/home" class="nav-link"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a>
                   </li>
                   <li class="nav-item ">
                       <a class="nav-link" href="/dailyReportMorning"> Daily Report </a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link"href="/monthReport">Monthly Report</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="/monthPlan">Monthly Plan</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="/weeklyPlan">Weekly Plan</a>
                   </li>
                    <li class="nav-item">
                       <a class="nav-link" href="/performance">Performance</a>
                   </li>
                   <div class="he-icon2">
                       <li class="nav-item">
                           <a class="nav-link storeCv" href="#">Update Cv</a>
                       </li>

                       <li class="nav-item">
                           <a  style="position: relative;bottom: 7px" href="/logout" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a>
                       </li>

                   </div>



               </ul>
           </div>
       </div>
   </nav>

   !-- model feedback-->


   <div class="mod-feed wow fadeInLeftBig" data-wow-duration="2s"  style="display: none">
       <div>
           <button type="button" class="close" >
               <span aria-hidden="true">&times;</span>
           </button>
           <h2>New Feedback</h2>

       </div>

       <div class="container-fluid">


           <form action='/sandmail' method='post' enctype="multipart/form-data">
               {{ csrf_field() }}
               <div class="mod-body">

                   <div class="form-group">
                       <input class="form-control  <?php if ($errors->has('name')) {echo 'is-invalid';} ?>" name="name" type="text" placeholder="Name" required>
                       <div class="invalid-feedback">
                           @foreach ($errors->get('name') as $message)
                               {{$message}}
                           @endforeach
                       </div>
                   </div>
                   <div class="form-group">
                       <input class="form-control  <?php if ($errors->has('subject')) {echo 'is-invalid';} ?>" name="subject" type="text" placeholder="subjct" required> </div> <div class="form-group">
                       <div class="invalid-feedback">
                           @foreach ($errors->get('subject') as $message)
                               {{$message}}
                           @endforeach
                       </div>
                       <br>

                       <textarea placeholder="Message" class="form-control <?php if ($errors->has('body')) {echo 'is-invalid';} ?>" name="body" id="exampleFormControlTextarea1" rows="3" required></textarea>
                       <div class="invalid-feedback">
                           @foreach ($errors->get('body') as $message)
                               {{$message}}
                           @endforeach
                       </div>
                       <div class="invalid-feedback">
                           @foreach ($errors->get('url') as $message)
                               {{$message}}
                           @endforeach
                       </div>
                       <div class="invalid-feedback">
                           @foreach ($errors->get('file') as $message)
                               {{$message}}
                           @endforeach
                       </div>
                   </div>
                   <input type="file" class="up3" name="url" accept="image/*" style="display: none" >
                   <input type="file" name="file" class="up4" style="display: none" >

               </div>
               <div class="footer">
                   <div class="send-icon">
                       <div class="fa fa-folder-open fa-2x i4" id="i" aria-hidden="true"></div>
                       <div class="fa fa-camera fa-2x i3" id="ic" aria-hidden="true">


                       </div>
                   </div>
                   <div class="bt">
                       <button type="submit" class="btn primary">Send message</button>

                   </div>

               </div>
           </form>


       </div>
   </div>

   <!-- model feedback-->






   <!--form cv-->
   <section id="store-cv" style="display: none;">
       <button style="text-align: center;border-top-left-radius:0px;border-bottom-left-radius:0px;" id="cv_finish" class="btn btn-danger"><i class="fa fa-close"></i> </button>
       <h2 style="text-align: center; font-family: 'Arimo', sans-serif;padding-top: 10px;">Update Your Cv </h2>

       <form class="container" id="perd" action="/profile/storeCv" method="post">
           {{csrf_field()}}
           <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">

           <div class="form-row">
               <div class="form-group col-md-12">
                   <label class="col-form-label"> Job Title</label>

                   <input type="text" name="job_title" value="{{old('job_title')}}" id="job_title" class="form-control"  placeholder="your job title" required>
               </div>

           </div>
           <h4>Personal Data</h4>
           <div class="form-row">

               <div class="form-group col-md-6">
                   <label class="col-form-label">Email </label>

                   <input type="email" name="" value="{{old('pr_email')}}" id="pr_email" class="form-control"  placeholder="like example@gmail.com">
               </div>
               <div class="form-group col-md-6">
                   <label class="col-form-label"> Address </label>

                   <input type="text" name="pr_adress" value="{{old('pr_adress')}}" id="pr_adress" class="form-control"  placeholder="">
               </div>

               <div class="form-group col-md-6">
                   <label class="col-form-label">Contact number </label>

                   <input type="text" name="pr_contact" value="{{old('pr_contact')}}" id="pr_contact" class="form-control"  placeholder="">
               </div>
               <div class="form-group col-md-6">
                   <label class="col-form-label">Date of birth </label>

                   <input type="date" name="pr_date_birth" value="{{old('pr_date_birth')}}" id="pr_date_birth" class="form-control"  placeholder="other">
               </div>

               <div class="form-group col-md-6">
                   <label class="col-form-label">Marital Status </label>

                   <input type="text" name="pr_marital_status" value="{{old('pr_marital_status')}}" id="pr_marital_status" class="form-control"  placeholder="">
               </div>

               <div class="form-group col-md-6">
                   <label class="col-form-label">File Number </label>

                   <input type="text" name="pr_file_number" value="{{old('pr_file_number')}}" id="pr_file_number" class="form-control"  placeholder="">
               </div>


           </div>
           <hr>

           <div class="form-group">
               <label for="exampleFormControlTextarea1">Career Objective </label>
               <textarea class="form-control <?php if ($errors->has('summary')){echo 'is-invalid';} ?>" name="summary" id="summary" rows="4" placeholder="I aspire to work in the position of a sales specialist with a reputed organization doing business in ________________ [type of industry] where I can apply my knowledge in the field of sales and make best use of my marketing skills" required></textarea>


           </div>
           <button id="addprson" style="float: left;margin-bottom: 10px; position: relative;" type="submit" class="btn btn-primary">add</button><br><br>
           <div class="alert alert-success" style="display: none;" id="alert_person" role="alert">


           </div>
           <div class="alert alert-danger" style="display: none;" id="alert_person_f" role="alert">
               <ul style="list-style-type: none;">

               </ul>

           </div>
       </form>
       <form class="container" id="sandSkill" action="/profile/storeCv" method="post">
           {{csrf_field()}}
           <hr>
           <h4>Professional Skills</h4>
           <div id="allSkills">

               <div class="form-row" id="skillDiv">


                   <div class="form-group col-md-6">
                       <label class="col-form-label">name of skill </label>

                       <input id="sk_name" type="text" name="sk_name" value="{{old('sk_name')}}" class="form-control"  placeholder="like course" required>
                   </div>

               </div>


           </div>
           <button id="addSkill" style="float: left;margin-bottom: 10px; position: relative;" type="submit" class="btn btn-primary">add anther skill</button><br><br>
           <div class="alert alert-success" style="display: none;" id="alert_skill" role="alert">

           </div>
           <div class="alert alert-danger" style="display: none;" id="alert_skill_f" role="alert">
               <ul style="list-style-type: none;">

               </ul>

           </div>
       </form>
           <hr>
       <form class="container" id="sandExperience" action="/profile/storeCv" method="post">
           {{csrf_field()}}
           <h4>Work Experience and career pathway</h4>
           <div id="allSExperience">

               <div class="form-row" id="ExperienceDiv">


                   <div class="form-group col-md-6">
                       <label class="col-form-label">name of Experience </label>

                       <input type="text" name="ex_name" value="{{old('ex_name')}}" id="ex_name" class="form-control" required>
                   </div>
                   <div class="form-group col-md-6">
                       <label class="col-form-label">From </label>

                       <input type="text" name="ex_place" value="{{old('ex_place')}}" id="ex_place" class="form-control" placeholder="place" required>
                   </div>
                   <div class="form-group col-md-6">
                       <label class="col-form-label">start date </label>

                       <input type="date" name="ex_date" value="{{old('date')}}" id="ex_date" class="form-control" required>
                   </div>
                   <div class="form-group col-md-6">
                       <label class="col-form-label">end date </label>

                       <input type="date" name="ex_end" value="{{old('ex_end')}}"id="ex_end" class="form-control" required>
                   </div>

               </div>


           </div>
           <button id="addSExperience" style="float: left;margin-bottom: 10px; position: relative;" type="submit" class="btn btn-primary">add anther Experience</button><br><br>
           <div class="alert alert-success" style="display: none;" id="alert_Experience" role="alert">

           </div>
           <div class="alert alert-danger" style="display: none;" id="alert_Experience_f" role="alert">
               <ul style="list-style-type: none;">

               </ul>

           </div>
       </form>
           <hr>
       <form class="container" id="sendResponsibilities" action="/profile/storeCv" method="post">
           {{csrf_field()}}
           <h4>Responsibilities</h4>
           <div id="allResponsibilities">

               <div class="form-row" id="ResponsibilitiesDiv">


                   <div class="form-group col-md-12">
                       <label class="col-form-label">Responsibilities </label>

                       <input type="text" name="respons" value="{{old('respons')}}"id="respons" class="form-control"  placeholder="Example:Trained 3 interns on customer service and office procedures" required>
                   </div>

               </div>


           </div>
           <button id="addResponsibilities" style="float: left;margin-bottom: 10px; position: relative;" type="submit" class="btn btn-primary">add anther Responsibilities</button><br><br>
           <div class="alert alert-success" style="display: none;" id="alert_Responsibilities" role="alert">

           </div>
           <div class="alert alert-danger" style="display: none;" id="alert_Responsibilities_f" role="alert">
               <ul style="list-style-type: none;">

               </ul>

           </div>
       </form>
           <hr>

       <form class="container" id="sandEducation" action="/profile/storeCv" method="post">
           {{csrf_field()}}

           <h4>Educational QUALIFICATIONS and courses</h4>
           <div id="allEducation">

               <div class="form-row" id="EducationDiv">


                   <div class="form-group col-md-6">
                       <label class="col-form-label">Course name of certificate name  </label>

                       <input type="text" class="form-control" name="ed_name" value="{{old('ed_name')}}"id="ed_name"  placeholder="Example:start  University of Mansoura at Computer & Information (IT)" required>

                   </div>
                   <div class="form-group col-md-6">
                       <label class="col-form-label">The center name  </label>

                       <input type="text" name="ed_place"value="{{old('ed_place')}}" id="ed_place" class="form-control" required>
                   </div>
                   <div class="form-group col-md-6">
                       <label class="col-form-label">start date </label>

                       <input type="date" name="ed_date" value="{{old('ed_date')}}"id="ed_date" class="form-control" required>
                   </div>
                   <div class="form-group col-md-6">
                       <label class="col-form-label">end date </label>

                       <input type="date" name="ed_end"value="{{old('ed_end')}}" id="ed_end" class="form-control" required>
                   </div>

               </div>


           </div>
           <button id="addEducation" style="float: left;margin-bottom: 10px; position: relative;" type="submit" class="btn btn-primary">add anther Education</button><br><br>
           <div class="alert alert-success" style="display: none;" id="alert_Education" role="alert">

           </div>
           <div class="alert alert-danger" style="display: none;" id="alert_Education_f" role="alert">
               <ul style="list-style-type: none;">

               </ul>

           </div>
       </form>
           <hr>


   </section>

   <!--cv-->

   <section id="cv" style="display: none">
       <a  style="float: left;font-size: 25px;padding-top: 2px; position: absolute;z-index: 10;" href="#" class="menu-btn active cv"><span style="background-color: #fff;"></span ><span  style="background-color: #fff;  transform: rotate(180deg);"></span><span  style="background-color: #fff;"></span></a>
       <div>
           <div class="row">


               <div class="col-sm-4">
                   <div class="pref">
                       <div class="content">
                           <div class="name">

                               <h1>{{Auth::user()->name}}</h1>
                               @foreach($cvs as $cv)
                                   @if(!empty($cv->job_title))
                               <h2> {{$cv->job_title}}</h2>
                                   @endif
                               @endforeach
                           </div>

                       </div>
                       <div class="info">
                           <div class="info-h">
                               <h2>Personal Data</h2>

                           </div>
                           <div class="email">
                               <h4>E-mail</h4>
                               @foreach($cvs as $cv)
                                   @if(!empty($cv->pr_email))
                               <p>{{$cv->pr_email}}</p>
                                   @endif
                               @endforeach
                               <h4>Adress</h4>
                               @foreach($cvs as $cv)
                                   @if(!empty($cv->pr_adress))
                                       <p>{{$cv->pr_adress}}</p>
                                   @endif
                               @endforeach

                               <h4>Contact</h4>
                               @foreach($cvs as $cv)
                                   @if(!empty($cv->pr_contact))
                                       <p>{{$cv->pr_contact}}</p>
                                   @endif
                               @endforeach

                               <h4>Date Of Birth</h4>
                               @foreach($cvs as $cv)
                                   @if(!empty($cv->pr_date_birth))
                                       <p>{{$cv->pr_date_birth}}</p>
                                   @endif
                               @endforeach
                               <h4>Marital Status</h4>
                               @foreach($cvs as $cv)
                                   @if(!empty($cv->pr_marital_status))
                                       <p>{{$cv->pr_marital_status}}</p>
                                   @endif
                               @endforeach
                               <h4>File Num</h4>
                               @foreach($cvs as $cv)
                                   @if(!empty($cv->pr_file_number))
                                       <p>{{$cv->pr_file_number}}</p>
                                   @endif
                               @endforeach

                           </div>

                       </div>


                       <div class="skill">

                           <div class="skill-h">
                               <h2>Professional Skills</h2>

                           </div>
                           <div class="skill-o">
                               @foreach($cvs as $i=>$cv)
                                   @if(!empty($cv->sk_name))
                               <h4>{{$cv->sk_name}}</h4>

                                   @endif
                               @endforeach

                           </div>

                       </div>

                   </div>

               </div>
               <div class="col-sm-8">
                   <div class="content-2">
                       <div class="prg">
                           <h2> Career Objective</h2>

                       @foreach($cvs as $i=>$cv)
                               @if(!empty($cv->summary))

                                   <p class="p">
                                       {{$cv->summary}}

                                   </p>
                               @endif
                           @endforeach


                       </div>
                       <div class="prg">
                           <h2>
                               Work Experience and career pathway
                           </h2>
                       </div>
                       <div class="experience">
                           @foreach($cvs as $i=>$cv)
                               @if(!empty($cv->ex_name))
                                   <div class="expr">
                                    <span>
                                       from {{date('m-Y',strtotime($cv->ex_date))}}  &nbsp; &nbsp; &nbsp; &nbsp; to {{date('m-Y',strtotime($cv->ex_end))}}
                                    </span>
                                       <p class="p1">{{$cv->ex_name}} <br> from {{$cv->ex_place}} </p>

                                   </div>

                               @endif
                           @endforeach

                           <div class="expr-s">

                               <p style="font-weight: bold;">Responsibilities:</p>
                               <ul style="list-style-type: circle;">
                                   @foreach($cvs as $i=>$cv)
                                       @if(!empty($cv->respons))

                                   <li>{{$cv->respons}}</li>

                                       @endif
                                   @endforeach
                               </ul>

                           </div>
                       </div>


                       <div class="prg">
                           <h2>
                               Educational QUALIFICATIONS  And Courses
                           </h2>
                       </div>
                       <div class="education">
                           @foreach($cvs as $i=>$cv)
                               @if(!empty($cv->ed_name))
                                   <div class="expr">
                                    <span>
                                        from {{date('m-Y',strtotime($cv->ed_date))}} &nbsp; &nbsp; &nbsp; &nbsp; to {{date('m-Y',strtotime($cv->ed_end))}}
                                    </span>
                                       <p class="p1">{{$cv->ed_name}}<br> from {{$cv->ed_place}} </p>

                                   </div>

                               @endif
                           @endforeach


                       </div>

                   </div>

               </div>

           </div>
       </div>

   </section>



   <section id="all">
      <!--start section header-->
      <section class="he">
<div class="inner">



          <a  style="color: #fafdff;" href="#" id="active-cv" class="menu-btn active cv"><span></span><span></span><span></span></a>
         <div class="he-icon">
             <a style="position: relative;left: 20px" href="#" class="storeCv">Update Cv</a>&nbsp;&nbsp;

            <a style="position: relative;left: 20px" href="/home"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a>&nbsp;&nbsp;
            <a  style="position: relative;bottom: 7px" href="/logout" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a>
         </div>

    <div class="feed">
        <span>feedback </span>
    </div>

         <div class="container">
            <div class="row">
               <div class="as">
                  <div class="col-xs-12">
                     <div class="he-img">
                        <img style="border-radius:50%;" src="image/{{Auth::user()->url}}" alt="personal">
                     </div>
                     <div class="peso">
                        <small><?php $email=explode('@',Auth::user()->email);echo '@'.$email[0];?></small>
                        <h2>{{Auth::user()->name}}</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>

</div>
      </section>
      <!--end section header-->
      <!--start section body-->
      <section class="bod">
         <div class="container">
            <div class="row">
               <div class="col-sm-0 col-md-1 ">
               </div>
               <div class="col-sm-12 col-md-10">
                  <div class="posts">
                     <!--Start nav-->
                     <ul class="nav">

                         <li class="nav-item">
                             <a class="nav-link hvr-shrink" href="/dailyReportMorning" target="_blank">Daily Report  <i class="fa fa-caret-down  fa-lg" id="ic" aria-hidden="true"></i></a>
                         </li>
                        <li class="nav-item">
                           <a class="nav-link hvr-shrink" href="/monthReport" target="_blank">Month Report  <i class="fa fa-caret-down  fa-lg" id="ic" aria-hidden="true"></i></a>
                        </li>


                        <li class="nav-item">
                           <a class="nav-link hvr-shrink" href="/weeklyPlan" target="_blank">Weekly Plan  <i class="fa fa-caret-down  fa-lg" id="ic" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item" target="_blank">
                           <a class="nav-link hvr-shrink" href="/monthPlan">  Monthly Plan <i class="fa fa-caret-down  fa-lg" id="ic" aria-hidden="true"></i></a>
                        </li>
                         <li class="nav-item" target="_blank">
                           <a class="nav-link hvr-shrink" href="/performance"> Performance <i class="fa fa-caret-down  fa-lg" id="ic" aria-hidden="true"></i></a>
                        </li>
                     </ul>
                     <!-- end nav-->
                     @foreach($instructions as $kay=> $instruction)
                     <div class="rpost" id="p{{ $kay}}">
                         <a class="hide{{$kay}}"  href="#"><i id="icon-hover" class="fa fa-minus-circle" aria-hidden="true"></i>
                         </a>
                         @if(Auth::check()&&Auth::user()->hasRole('admin'))
                             <a  href="/removepost/{{$post->id}}"><i id="icon-hover" class="fa fa-trash" aria-hidden="true"></i> </a>
                         @endif

                         <img style="border-radius: 50%;" src="image/{{Auth::user()->url}}" alt="personal">
                        <h2>Dr/{{Auth::user()->name}} <small><?php echo date('d.M.Y',strtotime($instruction->created_at));?></small>  </h2>
                        <small class="h"><?php
                            $now = time(); // or your date as well
                            $your_date = strtotime($instruction->created_at);
                            $datediff = $now - $your_date;

                            if(floor($datediff/60/60 )<24)
                            {

                                echo floor($datediff/60/60 ).' H '.floor(($datediff/60)-(floor($datediff/60/60 )*60)).' min'  ;
                            }
                            ?></small>
                        @if(isset($instruction->body))
                           <p id="re2{{$kay}}"><?php
                               $po=ucwords($instruction->body);
                               $words = explode(' ',$po);
                               $words2 = explode(' ',$po);
                               echo implode(' ', array_slice($words, 0, 30));
                               if(count($words2)>30)
                               {

                                   echo '<span id="read" '.'class="readMore'.$kay.'"' .'>'. " Read More.........".'</span>' ;

                               }

                               ?></p>
                           <p id="re{{$kay}}" style="display: none;">{{ucwords($instruction->body)}} <span id="read" class="readLess{{$kay}}"> Read Less</span></p>
                        @endif

                         @if(isset($instruction->url))
                             <div  class="url">
                                 <i class="fa <?php $extin=explode('.',$instruction->url);echo $extin[1];
                                 if($extin[1]=='pdf' ||$extin[1]=='PDF'){echo' fa-file-pdf-o';}
                                 elseif ($extin[1]=='doc' ||$extin[1]=='DOC'||$extin[1]=='DOCX'||$extin[1]=='docx'){echo' fa-file-word-o';}
                                 elseif ($extin[1]=='xls' ||$extin[1]=='XLS'||$extin[1]=='XLSX'||$extin[1]=='xlsx'){echo' fa-file-excel-o';}
                                 elseif ($extin[1]=='ppt' ||$extin[1]=='PPT'){echo' fa-file-powerpoint-o';}
                                 elseif ($extin[1]=='jpg' ||$extin[1]=='JPG'){echo' fa-file-image-o';}
                                 elseif ($extin[1]=='png' ||$extin[1]=='PNG'){echo' fa-file-image-o';}
                                 else {echo ' fa-file-text-o';}
                                 ?>" style="
                                           float: none;
                                           font-size: 80px;
                                           margin-bottom: 20px;
                                           position: relative;
                                           bottom: inherit;
                                           padding-left: 43px;
                                  "></i>
                                 <h4 style="position: relative;
                                                    bottom: 120px;
                                                    left: 140px;
                                  ">{{$instruction->url}}</h4><br>
                                 <small style="color:#90949c;"><?php $extin=explode('.',$instruction->url);echo $extin[1];?></small><br>

                                 <a <?php $extin=explode('.',$instruction->url); if($extin[1]=='jpg' ||$extin[1]=='JPG'){echo 'download="'.$instruction->url.'"';}
                                 elseif ($extin[1]=='png' ||$extin[1]=='PNG'){echo'download="'.$instruction->url.'.png"';}
                                    ?>  href="image/{{$instruction->url}}" id="down"><button class="btn-primary" style="background: #6495d7; ">Download</button></a>

                             </div>
                         @endif




                        <hr class="hr">
                        <div class="logo">
                           <img src="image/rsz_preview.jpg" style="height: 30px; width: 30px;" alt="logo">
                        </div>
                     </div>
                     @endforeach

                  </div>
               </div>
               <div class="col-sm-0 col-md-1 ">
               </div>
            </div>
         </div>


      </section>
   </section>

   <!--section loading-->
   <section class="overlay">
       <img src="image/303.gif">
   </section>

   <script src="js/tether.min.js"></script>

   <script src="js/jquery-3.2.1.min.js"></script>
   <script src="js/tether.min.js"></script>

   <script src="{{asset('js/popper.min.js')}}"></script>
   <script src="{{asset('js/bootstrap.js')}}"></script>
      
      <script src="js/wow.min.js"></script>
      <script>
         new WOW().init();
      </script>

   <script type="text/javascript">
       $('.cv').click(function () {

           $('#all').slideToggle();
           $('#cv').slideToggle();

       });
       $('.storeCv').click(function () {
           $('#all').slideToggle();
           $('#store-cv').slideToggle();
       });

       $('#i').click(function () {
           $('.up').click();
       })
       $('.i2').click(function () {
           $('.up2').click();
       });

 $('#ic').click(function () {
           $('.up3').click();
       })
       $('#i').click(function () {
           $('.up4').click();
       });



      @foreach($instructions as $kay=> $instruction)
      $('.readMore{{$kay}}').click(function () {
          $('#re{{$kay}}').show();
          $('#re2{{$kay}}').hide();
      });
      $('.readLess{{$kay}}').click(function () {
          $('#re{{$kay}}').hide();
          $('#re2{{$kay}}').show();
      });


      $('.hide{{$kay}}').click(function () {

          $('#p{{$kay}}').hide();
      });
      @endforeach

       //loading screen
       $(window).on('load', function() {

           $(".overlay").fadeOut(1000, function() {

               $(this).remove();

               $('body').css("overflow", "auto");
           });

       });


   </script>

   <script>
       $(document).ready(function () {
           $('#cv_finish').click(function () {
              $('#store-cv').slideToggle();
               $('#all').slideToggle();
           });
           $('#perd').on('submit',function(e){
               $('#alert_person').hide();
               $('#alert_person_f').hide();

               e.preventDefault(e);



               var job_title = $('#job_title').val();
               var pr_email = $('#pr_email').val();
               var pr_adress = $('#pr_adress').val();
               var pr_contact = $('#pr_contact').val();
               var pr_date_birth = $('#pr_date_birth').val();
               var pr_marital_status = $('#pr_marital_status').val();
               var pr_file_number = $('#pr_file_number').val();
               var summary = $('#summary').val();
               var user_id = $('#user_id').val();

               $.ajax({
                   headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },

                   type:'POST',
                   url:'/profile/storeCv',

                   dataType:'json',
                   data: {job_title:job_title, pr_email:pr_email, pr_adress:pr_adress,pr_contact:pr_contact, pr_date_birth:pr_date_birth,  pr_marital_status:pr_marital_status, pr_file_number:pr_file_number, summary:summary,user_id:user_id},
                   success:function (data) {

                    if(data.success==true)
               {
                   $('#alert_person').show();
                   $('#alert_person').html('success!');
                   $('#job_title').val('');
                   $('#pr_email').val('');
                   $('#pr_adress').val('');
                   $('#pr_contact').val('');
                   $('#pr_date_birth').val('');
                   $('#pr_marital_status').val('');
                   $('#pr_file_number').val('');
                   $('#summary').val('');
                   $('#user_id').val('');
               }
                       if(!data.success)
                       {
                           $('#alert_person_f').find('li').hide();
                           $('#alert_person_f').show();

                           $.each(data.errors,function (index,error) {
                               $('#alert_person_f').find('ul').append('<li>'+error+'</li>');


                           });

                       }
                   }



               });


               return false;
           });

           $('#sandSkill').on('submit',function(e){
               $('#alert_skill').hide();
               $('#alert_skill_f').hide();

               e.preventDefault(e);



               var sk_name = $('#sk_name').val();

               $.ajax({
                   headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },

                   type:'POST',
                   url:'/profile/storeCv',

                   dataType:'json',
                   data: {sk_name:sk_name},
                   success:function (data) {

                       if(data.success==true)
                       {
                           $('#alert_skill').show();
                           $('#alert_skill').html('success!');
                           $('#sk_name').val('');

                       }
                       if(!data.success)
                       {
                           $('#alert_skill_f').find('li').hide();
                           $('#alert_skill_f').show();

                           $.each(data.errors,function (index,error) {
                               $('#alert_skill_f').find('ul').append('<li>'+error+'</li>');


                           });

                       }
                   }

               });
               return false;
           });

           $('#sandExperience').on('submit',function(e){
               $('#alert_Experience').hide();
               $('#alert_Experience_f').hide();

               e.preventDefault(e);



               var ex_name = $('#ex_name').val();
               var ex_date = $('#ex_date').val();
               var ex_end = $('#ex_end').val();
               var ex_place = $('#ex_place').val();

               $.ajax({
                   headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },

                   type:'POST',
                   url:'/profile/storeCv',

                   dataType:'json',
                   data: {ex_name:ex_name, ex_date:ex_date, ex_end:ex_end, ex_place:ex_place},

                   success:function (data) {

                       if(data.success==true)
                       {
                           $('#alert_Experience').show();
                           $('#alert_Experience').html('success!');
                           $('#ex_name').val('');
                           $('#ex_date').val('');
                           $('#ex_end').val('');
                           $('#ex_place').val('');

                       }
                       if(!data.success)
                       {
                           $('#alert_Experience_f').find('li').hide();
                           $('#alert_Experience_f').show();

                           $.each(data.errors,function (index,error) {
                               $('#alert_Experience_f').find('ul').append('<li>'+error+'</li>');


                           });

                       }
                   }
               });
               return false;
           });

           $('#sendResponsibilities').on('submit',function(e){
               $('#alert_Responsibilities').hide();
               $('#alert_Responsibilities_f').hide();

               e.preventDefault(e);



               var respons = $('#respons').val();


               $.ajax({
                   headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },

                   type:'POST',
                   url:'/profile/storeCv',

                   dataType:'json',
                   data: {respons:respons},

                   success:function (data) {

                       if(data.success==true)
                       {
                           $('#alert_Responsibilities').show();
                           $('#alert_Responsibilities').html('success!');
                           $('#respons').val('');
                       }
                       if(!data.success)
                       {
                           $('#alert_Responsibilities_f').find('li').hide();
                           $('#alert_Responsibilities_f').show();

                           $.each(data.errors,function (index,error) {
                               $('#alert_Responsibilities_f').find('ul').append('<li>'+error+'</li>');


                           });

                       }
                   }
               });
               return false;
           });

           $('#sandEducation').on('submit',function(e){
               $('#alert_Education').hide();
               $('#alert_Education_f').hide();

               e.preventDefault(e);



               var ed_name = $('#ed_name').val();
               var ed_date = $('#ed_date').val();
               var ed_end = $('#ed_end').val();
               var ed_place = $('#ed_place').val();

               $.ajax({
                   headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },

                   type:'POST',
                   url:'/profile/storeCv',

                   dataType:'json',
                   data: {ed_name:ed_name, ed_date:ed_date, ed_end:ed_end, ed_place:ed_place},

                   success:function (data) {

                       if(data.success==true)
                       {
                           $('#alert_Education').show();
                           $('#alert_Education').html('success!');
                           $('#ed_name').val('');
                           $('#ed_date').val('');
                           $('#ed_end').val('');
                           $('#ed_place').val('');
                       }
                       if(!data.success)
                       {
                           $('#alert_Education_f').find('li').hide();
                           $('#alert_Education_f').show();

                           $.each(data.errors,function (index,error) {
                               $('#alert_Education_f').find('ul').append('<li>'+error+'</li>');


                           });

                       }
                   }
               });
               return false;
           });
       });

       $('.close').click(function () {
           $('.mod-feed') .hide();
       });
       $('.feed').click(function () {
           $('.mod-feed') .show();

       });
   </script>
   </body>
</html>