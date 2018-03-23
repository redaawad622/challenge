@extends('profile.profileLayout')
@section('profile')
   <!-- model feedback-->


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
                       <button type="submit" class="fill">Send message</button>

                   </div>

               </div>
           </form>


       </div>
   </div>

   <!-- model feedback-->






   <section id="all">
      <!--start section header-->
      <section class="he">
<div class="inner">




    <nav class="cd-stretchy-nav">
        <a class="cd-nav-trigger" href="#0">
            <span aria-hidden="true"></span>
        </a>

        <ul>
            <li><a href="/home" class="active"><span>Home</span></a></li>
            <li><a href="/profile/changeInfo"><span>Setting</span></a></li>
            <li><a href="/profile/updateCv"><span>Update Cv </span></a></li>
            <li><a href="/profile/cv"><span>Show Cv</span></a></li>
            <li><a href="/logout"><span>Logout</span></a></li>
        </ul>

        <span aria-hidden="true" class="stretchy-nav-bg"></span>
    </nav>

    <div class="feed">
        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
    </div>

         <div class="container">
            <div class="row">
               <div class="as">
                  <div class="col-xs-12">
                     <div class="he-img">
                        <img style="border-radius:50%;" src="image/@if(Auth::user()->url){{Auth::user()->url}} @else{{'user-placeholder.png'}} @endif" alt="personal">
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

               <div class="col-sm-12">
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

                         <img style="border-radius: 50%;" src="image/@if(Auth::user()->url){{Auth::user()->url}} @else{{'user-placeholder.png'}} @endif" alt="personal">
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

            </div>
         </div>


      </section>
   </section>

   <!--section loading-->
   <section class="overlay">
       <img src="image/303.gif">
   </section>
@endsection
@push('styles')
    <link href="{{asset('css/profile.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

@endpush
@push('scripts')
    <script src="{{asset('js/wow.min.js')}}"></script>

    <script type="text/javascript">



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




    </script>




@endpush