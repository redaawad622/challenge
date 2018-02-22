<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->
      <title>Home</title>
      <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

      <link href="css/bootstrap.min.css" rel="stylesheet">

      <link rel="stylesheet" href="css/hover.css">
      <link href="css/home.css" rel="stylesheet">

      <link rel="stylesheet" href="css/animate.css">
      <link href="css/font-awesome.css" rel="stylesheet">
      <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
      <style>
         .dropdown-menus
         {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;

            float: left;
            min-width: 10rem;
            padding: .5rem 0;
            margin: .125rem 0 0;
            font-size: 1rem;
            color: #212529;
            text-align: left;
            list-style: none;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0,0,0,.15);
            border-radius: .25rem;
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

         </ul>
      </div>
      </div>
   </nav>

   <!-- model feedback-->

<div class="outer-mod">


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
</div>

   <!-- model feedback-->


   <!--start section header-->
      <section class="he">

         @if(!Auth::user()->hasRole('admin'))
         <div class="feed">
            <span>feedback </span>
         </div>

         @endif
         <div class="inner">
         <div class="container">
            <div class="row">
               <div class="col-sm-4 col-md-3 col-lg-2">
                  <div class="he-img">
                     <img src="image/{{Auth::user()->url}}" alt="personal">
                  </div>
               </div>
               <div class="col-sm-4 col-md-3 col-lg-2">
                  <div class="peso">
                     <small><?php $email=explode('@',Auth::user()->email);echo '@'.$email[0];?></small>
                     <h2>{{Auth::user()->name}}</h2>
                  </div>
               </div>
               <div class="na">
                  <ul>
                     <li> <a href="/"><i class="fa fa-home fa-lg"  aria-hidden="true"></i> Home</a></li>
                    @if(Auth::check() && Auth::user()->hasRole('user'))

                        <li> <a href="/profile"><i class="fa fa-user fa-lg" aria-hidden="true"></i> profile</a></li>
                        <li><a  style="font-size: 20px;font-weight: 800;" href="/logout" class="logout">Logout<i class="fa fa-sign-out"></i></a></li>


                     @else

                        <li> <a href="/admin"><i class="fa fa-user fa-lg" aria-hidden="true"></i> Admin</a></li>
                       <li><a  style="" href="/logout" class="logout">Logout<i class="fa fa-sign-out"></i></a></li>


                     @endif


                  </ul>
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
               <div class="col-sm-0 col-lg-1">
               </div>
               <div class="col-sm-12 col-lg-10">
                  <div class="posts">
                     @if(Auth::check()&&Auth::user()->hasRole('admin'))
                     <form action="/post" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                     <div class="inst">
                        <img src="image/{{Auth::user()->url}}" alt="personal">

                        <input type="text" name="instruction" style="color:black" class="form-control hvr-rectangle-out" placeholder="What Are The Instruction......?">
                        <input type="file" id="file" name="file" class="up-file" style="display: none">

                        <input type="file" name="url"  accept="image/*" class="up2" style="display: none">
                        <input type="text" name="file_name" style="display: none;" value="" id="select_file">
                        <div class="bod-icon ">
                         <i class="fa fa-folder-open fa-2x hvr-grow " id="i-file" aria-hidden="true"> </i>
                           <i class="fa fa-camera fa-2x hvr-grow i2 " id="ic" aria-hidden="true"></i>
                           <input type="submit" value="Post" id="sub"  class="btn btn-primary  hvr-round-corners">
                        </div>

                     </div>
                     </form>
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


                     @foreach($posts as $kay=> $post)
                     <div class="rpost" id="p{{$kay}}">


                        <a class="hide{{$kay}}"  href="#"><i id="icon-hover" class="fa fa-minus-circle" aria-hidden="true"></i>
                        </a>
                          @if(Auth::check()&&Auth::user()->hasRole('admin'))
                                 <a  href="/removepost/{{$post->id}}"><i id="icon-hover" class="fa fa-trash" aria-hidden="true"></i> </a>
                              @endif

                        <img src="image/{{Auth::user()->url}}" class="img" alt="personal">
                        <h2>Dr/Eslam <small><?php echo date('d.M.Y',strtotime($post->created_at));?></small>  </h2>
                        <small class="h"><?php
                            $now = time(); // or your date as well
                            $your_date = strtotime($post->created_at);
                            $datediff = $now - $your_date;

                            if(floor($datediff/60/60 )<24)
                                {

                            echo floor($datediff/60/60 ).' H '.floor(($datediff/60)-(floor($datediff/60/60 )*60)).' min'  ;
                            }
                        ?></small>
                        @if(isset($post->instruction))
                        <p id="re2{{$kay}}"><?php
                                $po=ucwords($post->instruction);
                            $words = explode(' ',$po);
                            $words2 = explode(' ',$po);
                            echo implode(' ', array_slice($words, 0, 30));
                            if(count($words2)>30)
                                {

                                    echo '<span id="read" '.'class="readMore'.$kay.'"' .'>'. " Read More.........".'</span>' ;

                                }

                            ?></p>
                        <p id="re{{$kay}}" style="display: none;">{{ucwords($post->instruction)}} <span id="read" class="readLess{{$kay}}"> Read Less</span></p>
                        @endif

                        @if(isset($post->file))
                           <div class="file">
                                 <i class="fa <?php $extin=explode('.',$post->file);echo $extin[1];
                                 if($extin[1]=='pdf' ||$extin[1]=='PDF'){echo' fa-file-pdf-o';}
                                 elseif ($extin[1]=='doc' ||$extin[1]=='DOC'||$extin[1]=='DOCX'||$extin[1]=='docx'){echo' fa-file-word-o';}
                                 elseif ($extin[1]=='xls' ||$extin[1]=='XLS'||$extin[1]=='XLSX'||$extin[1]=='xlsx'){echo' fa-file-excel-o';}
                                 elseif ($extin[1]=='ppt' ||$extin[1]=='PPT'){echo' fa-file-powerpoint-o';}
                                 else {echo ' fa-file-text-o';}
                                 ?>" style="
                                           float: none;
                                           font-size: 80px;
                                           margin-bottom: 20px;
                                           position: relative;
                                           bottom: inherit;
                                           padding-top: 36px;
                                  "></i>
                           <h4>{{$post->real_name}}</h4><br>
                           <small style="position: relative;right: 110%;color: #90949c"><?php $extin=explode('.',$post->file);echo $extin[1];?></small><br>

                           <a style="position: relative;right: 110%;" href="image/{{$post->file}}"><button class="btn-primary" style="background: #6495d7; ">Download</button></a>

                        </div>
                        @endif
                        @if(isset($post->url))

                        <div class="text-center">
                           <img src="image/{{$post->url}}" class="img-fluid rounded post-img" alt="post-img">
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
               <div class="col-sm-0 col-lg-1">
               </div>
            </div>

         </div>


      </section>

   <!--section loading
      <section class="overlay">
         <img src="image/303.gif">
      </section>
      -->
      
   <script src="js/jquery-3.2.1.min.js"></script>
   <script src="js/tether.min.js"></script>

   <script src="{{asset('js/popper.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.js')}}"></script>
      <script src="js/wow.min.js"></script>
      <script>
         new WOW().init();
      </script>
      <script src="js/jquery.nicescroll.min.js"></script>
   <script src="js/myjs.js" type="text/javascript"></script>
   <script type="text/javascript">


       $('.i3').click(function () {
           $('.up3').click();
       })
       $('.i4').click(function () {
           $('.up4').click();
       });

       $('#i-file').click(function () {
          $('.up-file').click();
       })
       $('.i2').click(function () {
           $('.up2').click();
       });


       @foreach($posts as $kay=> $post)
       $('.readMore{{$kay}}').click(function () {
           $('#re{{$kay}}').show();
           $('#re2{{$kay}}').hide();
       });
       $('.readLess{{$kay}}').click(function () {
           $('#re{{$kay}}').hide();
           $('#re2{{$kay}}').show();
       });


       @endforeach

       $('#file').change(function () {
          var fi=$('#file').val();
          $('#select_file').attr('value',fi);
       });
       @foreach($posts as $kay=> $post)
       $('.hide{{$kay}}').click(function () {

          $('#p{{$kay}}').hide();
          return false;
       });

       @endforeach
      $('.close').click(function () {
          $('.mod-feed') .hide();
       });
      $('.feed').click(function () {
          $('.mod-feed') .show();

      });


   </script>


   </body>
</html>