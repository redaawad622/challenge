<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Control Panel</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=600">
      <meta name="robots" content="all,follow">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- Bootstrap CSS-->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Google fonts - Roboto -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
      <!-- theme stylesheet-->
      <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
      <!-- Custom stylesheet - for your changes-->
      <link rel="stylesheet" href="css/custom.css">
      <!-- Favicon-->
      <link rel="shortcut icon" href="image/favicon.ico">
      <!-- Font Awesome CDN-->
      <!-- you can replace it by local Font Awesome-->
      <script src="js/front.js"></script>
      <!-- Font Icons CSS-->
      <link rel="stylesheet" href="{{asset('css/icons.css')}}">
      <link rel="stylesheet" href="css/animate.css">

      <link rel="stylesheet" href="css/font-awesome.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <style>
      body
      {
      overflow:auto;
      }
      </style>
   </head>
   <body>
      <div class="page home-page">
         <!-- Main Navbar-->
         <header class="header">
            <nav class="navbar">

               <div class="container-fluid">
                  <div class="navbar-holder d-flex align-items-center justify-content-between">
                     <!-- Navbar Header-->
                     <div class="navbar-header">
                        <!-- Navbar Brand -->
                        <a href="login.blade.php" class="navbar-brand">
                           <div class="brand-text brand-big hidden-lg-down"><span>My </span><strong>Admin</strong></div>
                           <div class="brand-text brand-small"><strong>AD</strong></div>
                        </a>
                        <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
                     </div>
                     <!-- Navbar Menu -->
                     <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center custom-ul">
                        <li class="nav-item dropdown">
                           <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-cog"></i></a>
                           <ul aria-labelledby="notifications" class="dropdown-menu">
                              <li id="d">
                                 <a rel="nofollow" href="#" class="dropdown-item">
                                    <div class="notification">
                                       <div class="notification-content"><i class="fa fa-circle" id="default" aria-hidden="true"></i> default </div>
                                       <div class="notification-time"></div>
                                    </div>
                                 </a>
                              </li>
                              <li id="b">
                                 <a rel="nofollow" href="#" class="dropdown-item">
                                    <div class="notification">
                                       <div class="notification-content"><i class="fa fa-circle" id="blue" aria-hidden="true"></i> Blue </div>
                                       <div class="notification-time"></div>
                                    </div>
                                 </a>
                              </li>
                              <li id="g">
                                 <a rel="nofollow" href="#" class="dropdown-item">
                                    <div class="notification">
                                       <div class="notification-content"><i class="fa fa-circle" id="green" aria-hidden="true"></i> Green</div>
                                       <div class="notification-time"></div>
                                    </div>
                                 </a>
                              </li>
                              <li id="p">
                                 <a rel="nofollow" href="#" class="dropdown-item">
                                    <div class="notification">
                                       <div class="notification-content"><i class="fa fa-circle" id="pink" aria-hidden="true"></i>Pink </div>
                                       <div class="notification-time"></div>
                                    </div>
                                 </a>
                              </li>
                              <li id="r">
                                 <a rel="nofollow" href="#" class="dropdown-item">
                                    <div class="notification">
                                       <div class="notification-content"><i class="fa fa-circle" id="red" aria-hidden="true"></i> Red </div>
                                       <div class="notification-time"></div>
                                    </div>
                                 </a>
                              </li>
                              <li id="s">
                                 <a rel="nofollow" href="#" class="dropdown-item">
                                    <div class="notification">
                                       <div class="notification-content"><i class="fa fa-circle" id="sea" aria-hidden="true"></i> sea </div>
                                       <div class="notification-time"></div>
                                    </div>
                                 </a>
                              </li>
                              <li id="v">
                                 <a rel="nofollow" href="#" class="dropdown-item">
                                    <div class="notification">
                                       <div class="notification-content"><i class="fa fa-circle" id="violet" aria-hidden="true"></i> Violet </div>
                                       <div class="notification-time"></div>
                                    </div>
                                 </a>
                              </li>
                           </ul>
                        </li>

                        <!-- Notifications-->
                        <li class="nav-item dropdown push_notifay">
                           <a  id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link no_notify"><i class="fa fa-bell-o"></i><span class="badge bg-red num"></span></a>
                           <ul aria-labelledby="notifications" class="dropdown-menu ">

                              @foreach($notifies as $notf)
                                 <li>
                                    <a rel="nofollow" href="#" class="dropdown-item ">
                                       <div class="notification">
                                          <div class="notification-content"><i class="fa fa-envelope bg-green"></i>{{$notf->content}}</div>
                                           <div class="notification-time "><small>{{$notf->created_at}}</small></div>'

                                          </div></a></li>
                                 @endforeach

                              <li>
                                 <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications                                            </strong></a>
                              </li>

                           </ul>
                        </li>
                        <!-- Messages   -->
                        <li class="nav-item dropdown push_notifayE">
                           <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link no_notify2"><i class="fa fa-envelope-o"></i><span class="badge bg-orange num2"></span></a>
                           <ul aria-labelledby="notifications" class="dropdown-menu">
                              @foreach($emails as $email)
                              <li>
                                 <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-profile"> <img src="image/{{$email->url}}" alt="..." width="45px" height="45px" class="image-fluid rounded-circle"></div>
                                    <div class="msg-body">
                                       <h3 class="h5">{{$email->name}}    <span style="font-size: 10px;padding-left: 88px;">{{$email->created_at}}</span></h3>

                                       <span>Sent You Message Check Your Gmail</span>
                                    </div>
                                 </a>
                              </li>
                              @endforeach


                              <li>
                                 <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages    </strong></a>
                              </li>
                           </ul>
                        </li>
                        <!-- Logout    -->
                        <li class="nav-item"><a href="/logout" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>

                     </ul>
                  </div>
               </div>
            </nav>
         </header>
         <a id="pop_notify" href="#"  data-toggle="popover" title="Notification" data-content=""><i class="fa fa-bell-o hide_notify"></i></a>


         @yield('content')


         
      </div>
      <!--section loading
      <section class="overlay">
         <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
         </div>
      </section>-->
      <!-- Javascript files-->
      
      <script language="JavaScript" type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
       <script language="JavaScript" type="text/javascript" src="{{asset('js/popper.min.js')}}" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script language="JavaScript" type="text/javascript" src="js/jquery.cookie.js"></script>
      <script language="JavaScript" type="text/javascript" src="js/jquery.validate.min.js"></script>
      <script src="js/tether.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/wow.min.js"></script>
      <script>
         new WOW().init();
      </script>
      <script src="js/front.js"></script>

      
      <script>

         $(function() {
             $("#d").click(function() {
                 $('#theme-stylesheet').attr("href", "css/style.default.css");
             });
         });
         $(function() {
             $("#b").click(function() {
                 $('#theme-stylesheet').attr("href", "css/style.blue.css");
             });
         });
         $(function() {
             $("#g").click(function() {
                 $('#theme-stylesheet').attr("href", "css/style.green.css");
             });
         });
         $(function() {
             $("#p").click(function() {
                 $('#theme-stylesheet').attr("href", "css/style.pink.css");
             });
         });
         $(function() {
             $("#r").click(function() {
                 $('#theme-stylesheet').attr("href", "css/style.red.css");
             });
         });
         $(function() {
             $("#s").click(function() {
                 $('#theme-stylesheet').attr("href", "css/style.sea.css");
             });
         });
         $(function() {
             $("#v").click(function() {
                 $('#theme-stylesheet').attr("href", "css/style.violet.css");
             });
         });
         $('.list-c').click(function () {
            $('#pro-drop').fadeToggle();
         });
         $('.list-c2').click(function () {
            $('#pro-drop2').fadeToggle();
         });

         $('.no_notify').click(function () {
             $.ajax({
                 headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },

                 type:'get',
                 url:'/changeReading',

                 dataType:'json',

                 success:function (data) {

                     if(data.success==true)
                     {
                         $('.num').html('');

                     }

                 }

             });



         });


         $('.no_notify2').click(function () {
             $.ajax({
                 headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },

                 type:'get',
                 url:'/changeReadingEmail',

                 dataType:'json',

                 success:function (data) {

                     if(data.success==true)
                     {
                         $('.num2').html('');

                     }

                 }

             });



         });

         function getNotify () {
             $.ajax({
                 headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },

                 type:'get',
                 url:'/getNotify',

                 dataType:'json',

                 success:function (data) {

                     if(data.success==true)
                     {
                         $('.num').html(data.notifies_count);
                         $.each(data.notifies,function (index,notify) {
                             $('.push_notifay').find('ul').prepend('<li>' +
                                 '<a rel="nofollow" href="#" class="dropdown-item ">' +
                                 ' <div class="notification">' +
                                 ' <div class="notification-content"><i class="fa fa-envelope bg-green"></i>'+notify["content"]+'</div>'+
                                  ' <div class="notification-time "><small>'+notify["created_at"]+'</small></div>'

                                 +' </div></a></li>');

                             $('#pop_notify').attr('data-content',notify["content"]);
                             $('#pop_notify').show();
                             $('.hide_notify').show();
                             $('#pop_notify').click();


                         });


                     }

                 }

             });


         }
         function getNotifyE () {
             $.ajax({
                 headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },

                 type:'get',
                 url:'/getNotifyE',

                 dataType:'json',

                 success:function (data) {

                     if(data.success==true)
                     {
                         $('.num2').html(data.notifies_count);
                         $.each(data.notifies,function (index,email) {
                             $('.push_notifayE').find('ul').prepend('<li>' +
                                 '<a rel="nofollow" href="#" class="dropdown-item d-flex">' +
                                 '<div class="msg-profile"> <img src="image/'+email['url']+'"'+' alt="..." width="45px" height="45px" class="image-fluid rounded-circle"></div>' +
                                 ' <div class="msg-body">'+
                                  ' <h3 class="h5">'+email['name']+'<span style="font-size: 10px;padding-left: 88px;">'+email['created_at']+'</span></h3>'+
                                    '<span>Sent You Message Check Your Gmail</span>'

                                 +' </div></a></li>');


                         });



                     }

                 }

             });


         }



         $(document).ready(function () {
             $('.heading').click(function () {
                $('.heading-ul').fadeToggle();
             });

             getNotify();
             getNotifyE();
             $('[data-toggle="popover"]').popover();




         });
         $('.hide_notify').click(function () {
             $('.hide_notify').hide();
         });


         setInterval(getNotify, 10000);
         setInterval(getNotifyE, 30000);
         
       

    


      </script>

   </body>
</html>