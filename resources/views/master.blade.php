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
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <!-- Google fonts - Roboto -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
      <!-- theme stylesheet-->
      <link rel="stylesheet" href="{{asset('css/style.default.css')}}" id="theme-stylesheet">
      <!-- Custom stylesheet - for your changes-->
      <link rel="stylesheet" href="{{asset('css/custom.css')}}">
      <!-- Favicon-->
      <link rel="shortcut icon" href="{{asset('image/favicon.ico')}}">
      <!-- Font Awesome CDN-->

      <!-- Font Icons CSS-->
      <link rel="stylesheet" href="{{asset('css/icons.css')}}">
      <link rel="stylesheet" href="{{asset('css/animate.css')}}">

      <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
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
                           <a id="color" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-cog"></i></a>
                           <ul aria-labelledby="color" class="dropdown-menu">
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
                           <a  id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link no_notify"><i class="fa fa-bell-o"></i><span id="N_count" class="badge bg-red num">{{count(auth()->user()->unreadNotifications)}}</span></a>
                           <ul aria-labelledby="notifications" class="dropdown-menu all_notifay ">

                              @foreach (auth()->user()->notifications as $notification)
                                 <li>
                                    <a rel="nofollow" href="#" class="dropdown-item {{$notification->read_at==null ?'unRead':''}} ">
                                       <div class="notification">
                                          <div class="notification-content"><i class="fa fa-envelope bg-green"></i>{{$notification->data['data']}}</div>
                                          <div class="notification-time "><small>{{$notification->created_at}}</small></div>'

                                       </div>
                                    </a>
                                 </li>
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
                                    <div class="msg-profile"> <img src="{{asset('image/'.$email->url)}}" alt="..." width="45px" height="45px" class="image-fluid rounded-circle"></div>
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
         <div class="page-content d-flex align-items-stretch">
            <!-- Side Navbar -->
            <nav class="side-navbar">
               <!-- Sidebar Header-->
               <div class="sidebar-header d-flex align-items-center">

                  <div class="avatar"><img src="{{asset('image/'.Auth::user()->url)}}" width="55px" height="55px" alt="..." class="image-fluid rounded-circle"></div>
                  <div class="title">
                     <h1 class="h4">Dr/{{Auth::user()->name}}</h1>
                     <p>The Admin</p>
                  </div>
               </div>
               <!-- Sidebar Navidation Menus-->
               <span class="heading">Main</span>
               <ul class="list-unstyled">
                  <li > <a href="/"><i class="icon-home"></i>Home</a></li>
                  <li class="active"> <a href="/admin"><i class="fa fa-wpforms" aria-hidden="true"></i> Forms</a></li>


               </ul>


               <!--forms list-->

               <ul class="list-unstyled">
                  <span class="heading">Home page control</span>
                  <li> <a  href="/admin/AddEvent"><i class="fa fa-calendar" aria-hidden="true"></i> Add A New Event</a></li>
                  <li> <a  href="/admin/AddMedications"><i class="fa fa-medkit" aria-hidden="true"></i> Add A New Medications</a></li>
                  <li> <a  href="/admin/AddGalleryPic"><i class="fa fa-file-image-o" aria-hidden="true"></i> Add Gallery Picture</a></li>
                  <span class="heading">Files control</span>

                  <li> <a  href="/admin/AddComparison"><i class="fa fa-compress" aria-hidden="true"></i> Add Comparison of the sale by sector file</a></li>
                  <li> <a  href="/admin/AddPerformanceFile"><i class="fa fa-star-o" aria-hidden="true"></i> Add Performance file</a></li>
                  <li> <a  href="/admin/AddPromotionPlanFile"><i class="fa fa-globe" aria-hidden="true"></i> Add Promotion Plan file</a></li>
                  <li>
                     <a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Managment Tamplet </a>
                     <ul id="dashvariants" class="collapse list-unstyled">
                        <li><a href="/checkShow" target="_blank">Delegate receipt of checks</a></li>


                        <li class="nav-item dropdown  hvr-shrink" style="list-style-type: none;" >
                           <a  class="nav-link " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Show Prices </a>
                           <div  class="dropdown-menu">
                              <a style="color: black !important;"  class="dropdown-item" href="/priceShow">Store</a>
                              <a style="color: black !important;" class="dropdown-item" href="/priceShowShow">Show <small>{{$price_count}}</small></a>

                           </div>
                        </li>
                        <li><a href="/Anthor" target="_blank">Anther file</a></li>

                     </ul>
                  </li>
                  <span class="heading">Users control</span>


                  <li> <a  href="/admin/SendPrivateInstruction"><i class="fa fa-commenting" aria-hidden="true"></i> Send private instruction</a></li>
                  <li>
                     <a href="/admin/UsersManager"> <i class="fa fa-users"></i>Users </a>

                  </li>

                  <span class="heading">Developer Control</span>

                  <li>
                     <a href="#developer" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Developer Option </a>
                     <ul id="developer" class="collapse list-unstyled">
                        <li><a href="/admin/BackUp" >Back Up</a></li>



                        <li><a href="/admin/Truncate">Truncate Tables</a></li>

                     </ul>
                  </li>



               </ul>

            </nav>


            <div class="content-inner">
               <!-- Page Header-->
               <header class="page-header">

                  <div class="container-fluid" >

                     <ul class="nav nav-fill justify-content-center " style="font-weight: bold;">



                     </ul>


                  </div>
               </header>


               @yield('content')
            </div>
         </div>
         
      </div>


      <!-- Javascript files-->
      
      <script language="JavaScript" type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
       <script language="JavaScript" type="text/javascript" src="{{asset('js/popper.min.js')}}" integrity="" crossorigin="anonymous"></script>
      <script language="JavaScript" type="text/javascript" src="{{asset('js/jquery.cookie.js')}}"></script>
      <script language="JavaScript" type="text/javascript" src="{{asset('js/jquery.validate.min.js')}}"></script>
      <script src="{{asset('js/tether.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.js')}}"></script>
      <script src="{{asset('js/wow.min.js')}}"></script>

      <script src="{{asset('js/front.js')}}"></script>
      <script src="{{asset('StreamLab/StreamLab.js')}}"></script>



      <script>



         $(document).ready(function () {
             var sln = new StreamLabNotification();
             sln.browserNotification = true;
             var count=$('#N_count');
             if(parseInt(count.html())==0)
             {
                 count.hide();
             }

         });


          new WOW().init();
         /*color*/
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


         /*end color*/

         $('.list-c').click(function () {
            $('#pro-drop').fadeToggle();
         });
         $('.list-c2').click(function () {
            $('#pro-drop2').fadeToggle();
         });



         /*Search in table*/
         $("#search").on("keyup", function() {
             var value = $(this).val().toLowerCase();

             $("table tr").each(function(index) {
                 if (index !== 0) {

                     $row = $(this);

                     var id = $row.find("td:nth-child(2)").text().toLowerCase();

                     if (id.indexOf(value) !== 0) {
                         $row.hide();
                     }
                     else {
                         $row.show();
                     }
                 }
             });
         });
      /*end search*/

         /*real time notification*/


          var message,notify=$('.all_notifay'),count=$('#N_count'),c;
          var sls = new StreamLabSocket({
              appId:"{{ config('stream_lab.app_id') }}",
              channelName:"challenge",
              event:"*",
          });

          var slh = new StreamLabHtml()
          sls.socket.onmessage = function(res){

              slh.setData(res);
              if(slh.getSource()=== 'messages')
              {
                  count.show();
                  c=parseInt(count.html());
                  count.html(c+1);

                  message=slh.getMessage();
                  notify.prepend('<li>' +
                      '<a rel="nofollow" href="#" class="dropdown-item unRead">' +
                      '<div class="notification">\n' +
                      '<div class="notification-content"><i class="fa fa-envelope bg-green"></i>'+message+'</div>\n' +
                      '<div class="notification-time "><small>{{date('Y-m-d h:i:s')}}</small></div>\'\n' +

                      '</div>\n' +
                      '</a>\n' +
                      '</li>');
                  var sln = new StreamLabNotification();
                  sln.icon = "/StreamLab/fb-pro.png";
                  sln.time = 1000
                  sln.makeNotification('challeng team notification' , message);

              }



          }
          $('#notifications').click(function () {

              $.get('/allSeen',function () {

                  setTimeout(function () {

                      count.html('0');
                      $('.unRead').each(function () {
                          $(this).removeClass('unRead');
                      });

                  },10000);

              });

          });



      </script>

   </body>
</html>