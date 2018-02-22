<!DOCTYPE html>
<html lang="en">
<head>
    <title>CHALLENGE TEAM</title>

<meta charset="utf-8">
<meta name="Description" content="this website Related to Epico website and belong to epico company." />

     <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="keywords" content="epico,eipico,epicoph,eipicoph,challeng team,challenge,team">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
    
    

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap1.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/hover-min.css">
   
    <link rel="stylesheet" href="css/demo-page.css">
    <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/style.css">

    <style>
    	 .invalid-feedback
        {
            color: #721c24 !important;

            font-size: 14px !important;

        }
        .is-invalid
        {
            border:2px solid #d72020 !important;
        }
        .navbar-inverse .navbar-nav > li > a:hover
        {
        color:#2098D1 !important;
        }


    </style>
   

</head>
<body>


 <!-- end nav section --> 

<div class="color visible-lg  visible-md"></div>
    
    
<!--first nav-->
<section class="fnav visible-lg  visible-md">
    <div class="container">
        <div class="row">
            <div class="n1 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <a href="https://www.facebook.com/Epico-411742395909139/"> <i class="fa fa-facebook"></i></a>

                <i class="fa fa-linkedin"></i>
                <a href="http://www.eipico.com.eg/"><i class="fa fa-edge"></i></a>
            </div>
            <div class="n2 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <i class="fa fa-map-marker"></i> <span>www.eipico.com.eg</span>
                <i class="fa fa-phone"></i> <span>(050)2326211</span>
                <i class="fa fa-envelope"></i> <span>islamsalah1971@gmail.com</span>
            </div>
        </div>
    </div>
</section>   
    
    
<!--first nav-->
   
    
    
    
<!-- start nav section -->
    <nav class="navbar navbar-inverse">
  <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
      
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#phonescreen">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="font-family:cursive;"><img src="image/md1.jpg" alt="image"><h5>
       CHALLENGE TEAM</h5></a>
       
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="phonescreen">
        
<!-- For Large And Medium Screen -->
      <ul class="nav navbar-nav navbar-right hidden-xs hidden-ms">
          @if(Auth::check())
        <li><a href="/home"> <i class="fa fa-home fa-lg"></i> <span class="sr-only">(current)</span></a></li>
          @endif
        <li id="events"><a href="#"> Events </a></li>
        <li id="medication"><a href="#">Medications</a></li>
        <li id="objective"><a href="#">Objective</a></li>
        <li id="gal"><a href="#">Gallery</a></li>
        <li id="abou"><a href="#">About</a></li>
         <li id="cont"><a href="#con">Contact</a></li>
         
          @if(Auth::check())
              <li ><a href="/profile">{{Auth::user()->name}}</a></li>
              <li ><a href="/logout">Logout</a></li>
          @else

              <li id="reg"><a href="#rege">Register</a></li>
               <li><a href="#"><button onclick="document.getElementById('id01').style.display='block'">Login</button></a></li>

		
          @endif
          
          @if(Auth::check()&&Auth::user()->hasRole('admin'))
              <li><a href="/admin">Admin</a></li>
          @endif

      </ul>
<!-- For Phone Screen -->
      <ul class="nav navbar-nav navbar-right visible-xs visible-ms v-nav">
          @if(Auth::check())
              <li><a href="/home"> <i class="fa fa-home fa-lg"></i> <span class="sr-only">(current)</span></a></li>
          @endif
        <li id="events1"><a href="#"> Events</a></li>
        <li id="medication1"><a href="#">Medications</a></li>
        <li id="objective1"><a href="#">Objective</a></li>
        <li id="gal1"><a href="#">Gallery</a></li>
        <li id="abou1"><a href="#">About</a></li>
         <li id="cont1"><a href="#con">Contact</a></li>
          @if(Auth::check())
              <li ><a href="/profile">{{Auth::user()->name}}</a></li>
              <li ><a href="/logout">Logout</a></li>
          @else

              <li id="reg"><a href="#rege">Register</a></li>
              <li><a href="#"><button onclick="document.getElementById('id01').style.display='block'">Login</button></a></li>

          @endif
          @if(Auth::check()&&Auth::user()->hasRole('admin'))
              <li ><a href="/admin">Admin</a></li>
          @endif
      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>    
    

    
  <!--event-->
  <section class="ssl text-center">  
    
 <div class="slideshow-container">
  <div class="mySlides fade">

    <img src="image/s4.jpg" style="width:100%" alt="image">
    <div class="text">
                <a href="https://www.facebook.com/Epico-411742395909139/"> <i class="fa fa-facebook  hidden-xs  wow flipInX"  data-wow-duration="1.5s" data-wow-offset="100" data-wow-dely="1.5s"></i></a>
                <i class="fa fa-linkedin  hidden-xs  wow flipInX"  data-wow-duration="1.5s" data-wow-offset="100" data-wow-dely="1.5s"></i>
                <a href="http://www.eipico.com.eg/"> <i class="fa fa-edge  hidden-xs  wow flipInX"  data-wow-duration="1.5s" data-wow-offset="100" data-wow-dely="1.5s"></i></a>
        <h2 style="font-size:60px;font-weight:bold;margin-top:0;font-family: 'Roboto', sans-serif;" class="  wow fadeInRightBig"  data-wow-duration="1.5s" data-wow-offset="100" data-wow-dely="1.5s">Welcome in our website</h2> <p class="lead wow fadeInLeftBig"  data-wow-duration="1.5s" data-wow-offset="100" data-wow-dely="1.5s" style="color:#000;">This is The Event Section Here You Can Show Our Event And Details About Each It<br>  I Hope You Enjoy in our wonderful website.</p>
      </div>
  </div>
     @foreach($events as $event)

  <div class="mySlides fade">


    <img src="{{asset('image/'.$event->url)}}" style="width:100%" alt="image">
    <div class="text">
        @if(Auth::check()&&Auth::user()->hasRole('admin'))
            <a href="/removeEvent/{{$event->id}}"> <i class="fa fa-times fa-2x" aria-hidden="true" style="z-index: 9999;position: absolute;float: right; left: 80%"></i></a>
        @endif
            <a href="https://www.facebook.com/Epico-411742395909139/"> <i class="fa fa-facebook  hidden-xs  wow flipInX"  data-wow-duration="1.5s" data-wow-offset="100" data-wow-dely="1.5s"></i></a>
            <i class="fa fa-linkedin  hidden-xs  wow flipInX"  data-wow-duration="1.5s" data-wow-offset="100" data-wow-dely="1.5s"></i>
            <a href="http://www.eipico.com.eg/"> <i class="fa fa-edge  hidden-xs  wow flipInX"  data-wow-duration="1.5s" data-wow-offset="100" data-wow-dely="1.5s"></i></a>
        <h2 style="font-size:60px;font-weight:bold;margin-top:0;font-family: 'Roboto', sans-serif;" class="  wow fadeInRightBig"  data-wow-duration="1.5s" data-wow-offset="100" data-wow-dely="1.5s">{{$event->title}}</h2> <p class="lead wow fadeInLeftBig"  data-wow-duration="1.5s" data-wow-offset="100" data-wow-dely="1.5s" style="color:#000;">{{$event->description}}</p></div>
  </div>
     @endforeach


  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div class="sp_cars" style="text-align:center;position:relative;bottom:120px;">
        <span class="dot" onclick="currentSlide(1)"><h5>00</h5> <h5>Month <i class="fa fa-star"></i></h5> <h5 class="o1">00:00pm</h5> </span>

    @foreach($events as $key => $event)

        <span class="dot" onclick="currentSlide({{$key+2}})"><h5><?php echo date('d',strtotime($event->date));?></h5> <h5><?php echo date('F',strtotime($event->date));?> <i class="fa fa-star"></i></h5> <h5 class="o1"><?php echo date('H:i a',strtotime($event->time));?></h5> </span>
    @endforeach

</div>
</section>

<!------------------------------------------->
    
<!-- end owl carousel -->  
    
    <!--medication-->
<!-- start owl carousel -->    
<div class="owwl text-center">
    <div class="container-fluid">
        <h2 style="margin-top: 20px;" class="h1 wow bounce"  data-wow-duration="1.5s" data-wow-offset="100" data-wow-dely="1.5s" >Medications</h2>
        <hr style="width:200px;height:2px;background:#22b6e9;margin-top:15px;">
        <p class="lead">This Is The Medication Section Here You Can See Our Medication And By Click On The Image You Can See The Details About It</p>
        <div class="owl-carousel owl-loaded owl-drag owl-theme owl-center">

            @foreach($medications as $key=>$medication)
                <div class="item">

                    <div class="images images{{$key+1}}">
                        @if(Auth::check()&&Auth::user()->hasRole('admin'))
                            <a href="/removeMedication/{{$medication->id}}"> <i class="fa fa-times fa-2x" aria-hidden="true" style="position: absolute;"></i></a>
                        @endif
                        <div class="hidd{{$key+1}} hidd">
                            <p class="pp">{{$medication->created_at->toFormattedDateString()}}</p><br>
                            <h3>{{$medication->title}}</h3>
                            <p class="lead">{{$medication->description}}</p>
                            <i class="fa fa-plus-square"></i>
                            <i class="fa fa-medkit"></i>
                        </div>
                        <img src="image/{{$medication->url}}" class="img-responsive" alt="image">
                    </div>
                </div>
            @endforeach
            <div class="item">
                <div class="images imagesA">
                  <div class="hiddA hidd">
                        <p class="pp">Dec 13, 2017</p><br>
                        <h3>This sildin </h3>
                        <p class="lead">Be confident in you power </p>
                        <i class="fa fa-plus-square"></i>
                        <i class="fa fa-medkit"></i>
                    </div>
                    <img src="image/1513203718.jpg" class="img-responsive " alt="image">
                </div>
            </div>
            
            <div class="item">
                <div class="images imagesB">
                    <div class="hiddB hidd">
                        <p class="pp">Dec 13, 2017</p><br>
                        <h3>Vastaflam</h3>
                        <p class="lead">potent analgesic / potent anti-inflammatory </p>
                        <i class="fa fa-plus-square"></i>
                        <i class="fa fa-medkit"></i>
                    </div>
                    <img src="image/1513203901.jpg" class="img-responsive" alt="image">
                </div>
            </div>
            
              <div class="item">
                <div class="images imagesC">
                    <div class="hiddC hidd">
                        <p class="pp">Dec 13, 2017</p><br>
                        <h3>Flumox cap. </h3>
                        <p class="lead">broad spectrum anti-biotic </p>
                        <i class="fa fa-plus-square"></i>
                        <i class="fa fa-medkit"></i>
                    </div>
                    <img src="image/1513203370.jpg" class="img-responsive" alt="image" >
                  </div>
            </div>
            
              <div class="item">
                <div class="images imagesD">
                    <div class="hiddD hidd">
                        <p class="pp">Dec 8, 2017</p><br>
                        <h3> FLUMOX  FAMILY </h3>
                        <p class="lead"> Amoxycillin + flucloxacillin</p>
                        <i class="fa fa-plus-square"></i>
                        <i class="fa fa-medkit"></i>
                    </div>
                    <img src="image/1512766983.jpg" class="img-responsive" alt="image">
                  </div>
            </div>


            
            </div>
    </div>
</div>
    
<!--------------------------------------------->
    <section class="eight text-center">
<div class="container">

<div class="client col-lg-2 col-md-2 col-sm-2 col-xs-12">
<img src="image/client-5.png" alt="image">
</div>
<div class="client col-lg-2 col-md-2 col-sm-2 col-xs-12">
<img src="image/client-1.png" alt="image">
</div>
<div class="client col-lg-2 col-md-2 col-sm-2 col-xs-12">
<img src="image/client-2.png" alt="image">
</div>
<div class="client col-lg-2 col-md-2 col-sm-2 col-xs-12">
<img src="image/client-3.png" alt="image">
</div>
<div class="client col-lg-2 col-md-2 col-sm-2 col-xs-12">
<img src="image/client-4.png" alt="image">
</div>
<div class="client col-lg-2 col-md-2 col-sm-2 col-xs-12">
<img src="image/client-5.png" alt="image">
</div>


</div>
</section>
<!--------------------------------------------->

<section class="obj">
    <div class="back">
    <div class="container">
        <div class="row">
            <div class="obj-main">
                <div class="ob1 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <img src="image/ra.png" class="img-responsive wow pulse" alt="image"  data-wow-duration="1s" data-wow-offset="100" data-wow-dely="1s">
                </div>
                <div class="ob2 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <h2 class="h1">Objective</h2>
                    <p class="lead ll1">"Coming together is a beginning, staying
                        together is progress, <br>and working together is
                        success" <strong>Henry ford</strong></p>
                    <p class="lead">Our slogan one for all and all for one so
                        We Do all our best to be the best
                        We are not different but we know the value of success</p>
                    <div class="row">
                        @if(count($objectives)>=4)
                        <div class="f1 col-lg-6 col-md-6 col-sm-6 col-xs-12" id="obj-item1">
                            <i class="fa fa-hospital-o fa-2x"></i><br>
                            <span>{{$objectives[0]->body}} </span>

                            <br>
                            <i class="fa fa-group fa-2x"></i><br>
                            <span>{{$objectives[1]->body}}</span>
                        </div>
                        <div class="f1 col-lg-6 col-md-6 col-sm-6 col-xs-12" id="obj-item2">
                            <i class="fa fa-life-ring fa-2x"></i><br>
                            <span>{{$objectives[2]->body}}</span>
                            <br>
                            <i class="fa fa-clipboard fa-2x"></i><br>
                            <span>{{$objectives[3]->body}}</span>
                        </div>
                            @if(Auth::check() && Auth::user()->hasRole('admin'))<button type="button" class="btn btn-primary" id="obj-hide">edit</button> @endif
                            @endif
                            <div class="f1 col-lg-6 col-md-6 col-sm-6 col-xs-12" id="obj-item-edit1" style="display: none;">


                                <i class="fa fa-hospital-o fa-2x"></i><br>
                                    <form  role="form" class="form-inline obj-form-edit"  action="/editObjective" method="post" style="margin-left: 120px;">
                                        {{csrf_field()}}

                                        <div class="form-group mx-sm-3">
                                            <input type="text" class="form-control" name="body" value="{{old('body',$objectives[0]->body)}}">


                                        </div>
                                        <input type="hidden" name="id" value="{{$objectives[0]->id}}">
                                        <input type="submit" value="edit" style="height: 34px;" class="btn btn-primary obj-submit">
                                    </form>




                                <i class="fa fa-group fa-2x"></i><br>
                                <form role="form"  class="form-inline obj-form-edit"  action="/editObjective" method="post" style="margin-left: 120px;">
                                    {{csrf_field()}}

                                    <div class="form-group mx-sm-3">
                                        <input type="text" class="form-control" name="body" value="{{old('body',$objectives[1]->body)}}">


                                    </div>
                                    <input type="hidden" name="id" value="{{$objectives[1]->id}}">
                                    <input type="submit" value="edit" style="height: 34px;" class="btn btn-primary obj-submit">
                                </form>

                            </div>
                            <div class="f1 col-lg-6 col-md-6 col-sm-6 col-xs-12" id="obj-item-edit2" style="display: none;">
                                <i class="fa fa-life-ring fa-2x"></i><br>
                                <form  role="form" class="form-inline obj-form-edit"  action="/editObjective" method="post" style="margin-left: 120px;">
                                    {{csrf_field()}}

                                    <div class="form-group mx-sm-3">
                                        <input type="text" class="form-control" name="body" value="{{old('body',$objectives[2]->body)}}">


                                    </div>
                                    <input type="hidden" name="id" value="{{$objectives[2]->id}}">
                                    <input type="submit" value="edit" style="height: 34px;" class="btn btn-primary obj-submit">
                                </form>


                                <i class="fa fa-clipboard fa-2x"></i><br>
                                <form role="form" class="form-inline obj-form-edit"  action="/editObjective" method="post" style="margin-left: 120px;">
                                    {{csrf_field()}}

                                    <div class="form-group mx-sm-3">
                                        <input type="text" class="form-control" name="body" value="{{old('body',$objectives[3]->body)}}">


                                    </div>
                                    <input type="hidden" name="id" value="{{$objectives[3]->id}}">
                                    <input type="submit" value="edit" style="height: 34px;" class="btn btn-primary obj-submit">
                                </form>
                            </div>
                        <button class="btn btn-danger" id="obj-cancel" style="display: none;">cancel</button>



                    </div>  
                </div>
            </div>
        </div>  
    </div>
    </div>
</section>
    
    
 <!----------------------------------------------->   
    <section class="about-us">
        <div class="gg1">
    <div class="container">
        <h2 class="h1 text-center wow bounce"  data-wow-duration="1.5s" data-wow-offset="100" data-wow-dely="1.5s">About Us</h2>
        <hr style="width:180px;height:2px;background:#22b6e9;margin-top:-45px;">
        <div class="row">
            <div class="ab-us">
                <div class="us1 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h3>Our Strategy</h3>
                    <p class="lead">Our Strategic capability is concerned with the unique high capacity resources and competences that deliver value to our customers through high quality drugs with competitive price.</p>
                </div>
                <div class="us1 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h3>Our Purpose</h3>
                    <p class="lead">We will provide pharmaceutical generic drug products and its services of superior quality and value that improve the lives of the world’s consumers, now and for generations to come. As a result, consumers will reward us with leadership sales, profit and value creation, allowing our people, our shareholders, and the communities in which we live and work to prosper</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!----------------------------------------------->
    
    
    <!--Register-->
 @if(!Auth::check())
<div class="contact" id="rege">
   <div class="contact-bg">
	<div class="container">
        
		<div class="contact-main">
			 <div class="contact-top">
			 	<h3 class=" wow bounce"  data-wow-duration="1.5s" data-wow-offset="100" data-wow-dely="1.5s">Register</h3>
			 </div>
			 <div class="contact-bottom">
                 <form role="form" action="/" method="post"  enctype="multipart/form-data" >
                    {{csrf_field()}}
                    <div class="row">
                        
                      <div class="co1 col-lg-6 col-md-6 col-sm-6"> 
			 		<input type="text" class="<?php if ($errors->has('name')) {echo 'is-invalid';} ?>"  name="name"  placeholder='Your Name that will appear in reports' required>
                          <div class="invalid-feedback">
                              @foreach ($errors->get('name') as $message)
                                  {{$message}}
                              @endforeach
                          </div>
			 		<input type="password" name="password"  class="<?php if ($errors->has('password')) {echo 'is-invalid';} ?>" value="Your Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Password';}" required>
                          <div class="invalid-feedback">
                              @foreach ($errors->get('password') as $message)
                                  {{$message}}
                              @endforeach
                          </div>
			 		<input type="password" name="password_confirmation" class="<?php if ($errors->has('password_confirmation')) {echo 'is-invalid';}?>" value="Confirm password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required>
                          <div class="invalid-feedback">
                              @foreach ($errors->get('password_confirmation') as $message)
                                  {{$message}}
                              @endforeach
                          </div>
                    </div> 
                        
                     <div class="co1 col-lg-6 col-md-6 col-sm-6">   
			 		<input type="text" name="email"  class="<?php if ($errors->has('email')){echo'is-invalid';} ?>"  placeholder='Your E-mail' required>
                         <div class="invalid-feedback">
                             @foreach ($errors->get('email') as $message)
                                 {{$message}}
                             @endforeach
                         </div>
			 		<input type="text" class="no-mar <?php if ($errors->has('file_num')) {echo'is-invalid';} ?>" name="file_num"  placeholder='file num' required>
                         <div class="invalid-feedback">
                             @foreach ($errors->get('file_num') as $message)
                                 {{$message}}
                             @endforeach
                         </div>
			 		<input type="file" accept="image/*" name="url" class="no-mar <?php if ($errors->has('url')) {echo 'is-invalid';} ?>">
                         <div class="invalid-feedback">
                             @foreach ($errors->get('url') as $message)
                                 {{$message}}
                             @endforeach
                         </div>
                    </div>
                        
                    </div>
			 		<div class="con-send">
                    </div>  
			 		<input type="submit" id="sub-register"  value="Register"/>
			 	</form>
			 </div>
		  <div class="clearfix"> </div>
		</div>
	</div>
   </div>
</div>
@endif
<!--contact end here-->
    
    
 <!-----------------------------------------------> 
    

    
    
    <div class="owwll text-center">
    <div class="container-fluid">
        <h2 class="h1 wow bounce"  data-wow-duration="1.5s" data-wow-offset="100" data-wow-dely="1.5s">Gallery</h2>
        <hr style="width:150px;height:2px;background:#22b6e9;margin-top:-10px;">
        <p class="lead">This Is A Gellary Section Here You Can See Our Website Gallery Enjoy </p>
        <div class="owl-carousel owl-loaded owl-drag owl-theme owl-center ">
            @foreach($galleries as $gallery)
            <div class="items">
                @if(Auth::check()&&Auth::user()->hasRole('admin'))
                    <a href="/removegallery/{{$gallery->id}}"> <i class="fa fa-times fa-2x" aria-hidden="true" style="position: absolute;right:20px;z-index:555;float: right;"></i></a>
                @endif
                <div class="imagess">
                    <img src="image/{{$gallery->url}}" class="img-responsive" alt="image">
                </div>
            </div>
            @endforeach
            
            <div class="items">
                <div class="imagess">
                    <img src="image/1513204010.png" class="img-responsive" alt="image">
                </div>
            </div>
            
              <div class="items">
                <div class="imagess">
                    <img src="image/1513204353.jpg" class="img-responsive" alt="image">
                  </div>
            </div>
            
              <div class="items">
                <div class="imagess">
                    <img src="image/1512895358.jpg" class="img-responsive" alt="image">
                  </div>
            </div>
            
              <div class="items">
                <div class="imagess">
                    <img src="image/dr5.jpg" class="img-responsive" alt="image">
                  </div>
  
            </div>
            

            
            </div>
    </div>
</div>

<!----------------------------------------------------->
    
<!-- start footer -->    
    
<section class="foot" id='con'>
    <div class="dd">
    <div class="container">
        <h2 class="h1 text-center wow bounce"  data-wow-duration="1.5s" data-wow-offset="100" data-wow-dely="1.5s">Contact Us</h2>
        <hr style="width:250px;height:2px;background:#22b6e9;margin-top:-5px;">
        <div class="row">
            <div class="footer">
                <div class="fot col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    
                    <ul id="admin-c">
                        <h3>Contact Admin</h3>
                        <li> <i class="fa fa-envelope"></i>{{$contacts[0]->A_mail1}}</li>
                        <li> <i class="fa fa-envelope"></i>{{$contacts[0]->A_mail2}}</li>
                        <li><i class="fa fa-phone"></i>{{$contacts[0]->A_num}}</li><br>
                       @if(Auth::check() && Auth::user()->hasRole('admin')) <li> <button class="btn btn-danger" id="admin-hide"  type="button">edit</button></li>@endif
                    </ul>
                    <ul id="admin-c-e" style="display: none;">
                        <h3>Contact Admin</h3>
                        <form role="form" action="/editAdmin" method="post">
                            {{csrf_field()}}
                            <div class="form-inline">
                                <div class="form-group">
                                    <i class="fa fa-envelope" style="background-color:#f5f5f5;"></i> <input type="text" name="A_mail1" class="form-control"  value="{{ old( 'A_mail1', $contacts[0]->A_mail1)}}" />

                                </div>

                            </div>
                            <div class="form-inline">
                                <div class="form-group">
                                    <i class="fa fa-envelope" style="background-color:#f5f5f5;"></i><input type="text" name="A_mail2" class="form-control"  value="{{ old( 'A_mail2', $contacts[0]->A_mail2)}}" />

                                </div>

                            </div> <div class="form-inline">
                                <div class="form-group">
                                    <i class="fa fa-phone" style="background-color:#f5f5f5; margin-left:8px; "></i><input type="text" name="A_num" class="form-control"  value="{{ old( 'A_num', $contacts[0]->A_num)}}" />

                                </div>

                            </div>
                            <br>
                            <input type="hidden" name="id" value="{{$contacts[0]->id}}">

                                <button style="display: none;"  class="btn btn-primary admin-submit"  type="submit">edit</button>




                        </form>
                        <br>
                        <div style="display: flex;">
                            <button  style="margin-left: 18px;" class="btn btn-primary"   id="admin-submit" type="bottom">edit</button>
                            <button style="margin-left: 10px;"  class="btn btn-danger"  id="admin-cancel" type="bottom">cancel</button>


                        </div>

                    </ul>

                </div>
                <div class="fot col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    
                    <ul id="company-c">
                        <h3>Contact Company</h3>
                        <li> <i class="fa fa-envelope"></i>{{$contacts[0]->c_mail1}}</li>
                        <li> <i class="fa fa-envelope"></i> {{$contacts[0]->c_mail2}}</li>
                        <li><i class="fa fa-phone"></i>{{$contacts[0]->c_num}}</li><br>
                        @if(Auth::check() && Auth::user()->hasRole('admin')) <li> <button class="btn btn-danger" id="company-hide"  type="button">edit</button></li>@endif

                    </ul>
                    <ul id="company-c-e" style="display: none;">
                        <h3>Contact Company</h3>
                        <form role="form" action="/editCompany" method="post">
                            {{csrf_field()}}
                            <div class="form-inline">
                                <div class="form-group">
                                    <i class="fa fa-envelope" style="background-color:#f5f5f5;"></i> <input type="text" name="c_mail1" class="form-control"  value="{{ old( 'c_mail1', $contacts[0]->c_mail1)}}" />

                                </div>

                            </div>
                            <div class="form-inline">
                                <div class="form-group">
                                    <i class="fa fa-envelope" style="background-color:#f5f5f5;"></i><input type="text" name="c_mail2" class="form-control"  value="{{ old( 'c_mail2', $contacts[0]->c_mail2)}}" />

                                </div>

                            </div> <div class="form-inline">
                                <div class="form-group">
                                    <i class="fa fa-phone" style="background-color:#f5f5f5; margin-left:8px; "></i><input type="text" name="c_num" class="form-control"  value="{{ old( 'c_num', $contacts[0]->c_num)}}" />

                                </div>

                            </div>
                            <br>
                            <input type="hidden" name="id" value="{{$contacts[0]->id}}">

                            <button style="display: none;"  class="btn btn-primary company-submit"  type="submit">edit</button>




                        </form>
                        <br>
                        <div style="display: flex;">
                            <button  style="margin-left: 18px;" class="btn btn-primary"   id="company-submit" type="bottom">edit</button>
                            <button style="margin-left: 10px;"  class="btn btn-danger"  id="company-cancel" type="bottom">cancel</button>

                        </div>

                    </ul>
                </div>
                <div class="fot col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    
                    <ul id="public-c">
                        <h3>Public Contact</h3>
                        <li> <i class="fa fa-envelope"></i>{{$contacts[0]->p_mail1}}</li>
                        <li> <i class="fa fa-envelope"></i>{{$contacts[0]->p_mail2}}</li>
                        <li> <i class="fa fa-phone"></i> {{$contacts[0]->p_num}}</li><br>
                        @if(Auth::check() && Auth::user()->hasRole('admin')) <li> <button class="btn btn-danger" id="public-hide"  type="button">edit</button></li>@endif

                    </ul>

                    <ul id="public-c-e" style="display: none;">
                        <h3>Public Contact</h3>
                        <form role="form" action="/editPublic" method="post">
                            {{csrf_field()}}
                            <div class="form-inline">
                                <div class="form-group">
                                    <i class="fa fa-envelope" style="background-color:#f5f5f5;"></i> <input type="text" name="p_mail1" class="form-control"  value="{{ old( 'p_mail1', $contacts[0]->p_mail1)}}" />

                                </div>

                            </div>
                            <div class="form-inline">
                                <div class="form-group">
                                    <i class="fa fa-envelope" style="background-color:#f5f5f5;"></i><input type="text" name="p_mail2" class="form-control"  value="{{ old( 'p_mail2', $contacts[0]->p_mail2)}}" />

                                </div>

                            </div> <div class="form-inline">
                                <div class="form-group">
                                    <i class="fa fa-phone" style="background-color:#f5f5f5; margin-left:8px; "></i><input type="text" name="p_num" class="form-control"  value="{{ old( 'p_num', $contacts[0]->p_num)}}" />

                                </div>

                            </div>
                            <br>
                            <input type="hidden" name="id" value="{{$contacts[0]->id}}">

                            <button style="display: none;"  class="btn btn-primary public-submit"  type="submit">edit</button>




                        </form>
                        <br>
                        <div style="display: flex;">
                            <button  style="margin-left: 18px;" class="btn btn-primary"   id="public-submit" type="bottom">edit</button>
                            <button style="margin-left: 10px;"  class="btn btn-danger"  id="public-cancel" type="bottom">cancel</button>

                        </div>

                    </ul>
                </div>
                <div class="fot col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <ul>
                        <h3>Developer Contact</h3>
                        <li> <i class="fa fa-envelope"></i>redaawad622@gmail.com</li>
                        <li> <i class="fa fa-envelope"></i>onlyelhefny@gmail.com</li>
                        <li> <i class="fa fa-phone"></i>+2 01091258609</li>
                    </ul>
                </div>
                <div  style="text-align: center;" class="fot  col-xs-12">
                    
                    <ul>
                        <h3>Follow Us</h3>
                        <a href="https://www.facebook.com/Epico-411742395909139/"><i class="fa fa-facebook"></i></a>

                        <i class="fa fa-linkedin"></i>
                        <a href="http://www.eipico.com.eg/"><i class="fa fa-edge"></i></a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
    
<!-- end footer --> 

    
    
    
<!----------------------------------------------------->   
    
<div class="log text-center">
    <div class="container">
        <div class="loog">
            <img src="image/md1.jpg" class=" wow rubberBand" alt="image"  data-wow-duration="1.5s" data-wow-offset="100" data-wow-dely="1.5s">
            <h1 class="h1">CHALLENGE TEAM</h1>
            <div class="copy">
                <div class="copy1 text-center">copyrights © <strong>Challenge Team</strong> Resources          Trading, All rights reserved.</div>
                <div class="copy2 text-center">designed & developed by <strong>rowStars team</strong></div>
            </div>
        </div>
    </div>  
</div>   
    
<!----------------------------------------------------->    
    <section class="h1h text-center">

    <div class="container">
        
    <!-- Button to open the modal login form -->


<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" 
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form  role="form" class="modal-content animate" method="post" action="/login">
      {{ csrf_field() }}
    <div class="imgcontainer">
      <img src="image/md1.jpg" alt="Avatar" class="avatar">
    </div>

      <label style="font-size:16px;margin-top:5px;"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" class="<?php  if($errors->any()) {echo 'is-invalid';}?>" name="email" required>

      <label style="font-size:16px;margin-top:5px;"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" class="<?php if($errors->any()) {echo 'is-invalid';}?>" required>
      <div class="invalid-feedback">
          @if($errors->any())
              {{$errors->first()}}
          @endif
      </div>

      <button type="submit">Login</button><br>
      <input type="checkbox" checked="checked" name="checked"> <strong>Remember me</strong><br>


      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="background:#003a5a;width:100px;margin:auto;margin-bottom:20px;">Cancel</button>
 
  </form>
</div>    
        </div>     
 </section>



 <!--section loading-->
 <section class="overlay">
     <img src="image/303.gif" alt="loading....">
 </section>

 <script src="js/jquery-3.2.1.min.js"></script>
 <script src="js/tether.min.js"></script>

 <script src="js/bootstrap.js"></script>
       <script src="js/respond.min.js"></script>

    <script src="js/popper.min.js"></script>

    <script src="js/plugins.js"></script>

    <script src="js/wow.min.js"></script> 
    <script>new WOW().init();</script>  
    <script src="js/jquery.nicescroll.min.js"></script>   
    <script src="js/owl.carousel.min.js"></script>
<script>
        @foreach($medications as $i=>$medication)
        $(".owwl .images{{$i+1}}").hover(function(){
            $(".owwl .images .hidd{{$i+1}}").toggle(600);
        });

        @endforeach

           $('#sub-register').click(function () {
               $('.invalid-feedback').css('padding-top','10px','padding-bottom','10px');
           });

        $(document).ready(function () {
            //loading screen


                $(".overlay").fadeOut(1000, function() {

                    $(this).remove();
                    $('body').css("overflow", "auto");
                });


                $('#admin-hide').click(function () {
                   $('#admin-c').hide();
                   $('#admin-c-e').show();

                });


                $('#admin-cancel').click(function () {
                   $('#admin-c').show();
                   $('#admin-c-e').hide();

                });


            $('#admin-submit').click(function () {
                   $('.admin-submit').click();


                });

$('#company-hide').click(function () {
                   $('#company-c').hide();
                   $('#company-c-e').show();

                });


                $('#company-cancel').click(function () {
                   $('#company-c').show();
                   $('#company-c-e').hide();

                });


            $('#company-submit').click(function () {
                   $('.company-submit').click();


                });


$('#public-hide').click(function () {
                   $('#public-c').hide();
                   $('#public-c-e').show();

                });


                $('#public-cancel').click(function () {
                   $('#public-c').show();
                   $('#public-c-e').hide();

                });


            $('#public-submit').click(function () {
                   $('.public-submit').click();


                });

            /*objective*/

            $('#obj-hide').click(function () {
               $('#obj-item1').hide();
               $('#obj-item2').hide();
               $('#obj-item-edit1').show();
               $('#obj-item-edit2').show();
               $('#obj-cancel').toggle();
                $('#obj-hide').toggle();

            });

$('#obj-cancel').click(function () {
               $('#obj-item1').show();
               $('#obj-item2').show();
               $('#obj-item-edit1').hide();
               $('#obj-item-edit2').hide();
               $('#obj-hide').toggle();
               $('#obj-cancel').toggle();
            });



        });
        
        
       
        
        var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n){
  showSlides(slideIndex += n);
}

function currentSlide(n){
  showSlides(slideIndex = n);
}

function showSlides(n){
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}


</script>
</body>
</html>