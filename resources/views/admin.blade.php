@extends('master')
@section('content')
         <div class="page-content d-flex align-items-stretch">
            <!-- Side Navbar -->
            <nav class="side-navbar">
               <!-- Sidebar Header-->
               <div class="sidebar-header d-flex align-items-center">

                  <div class="avatar"><img src="image/{{Auth::user()->url}}" width="55px" height="55px" alt="..." class="image-fluid rounded-circle"></div>
                  <div class="title">
                     <h1 class="h4">Dr/{{Auth::user()->name}}</h1>
                     <p>The Admin</p>
                  </div>
               </div>
               <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
               <ul class="list-unstyled">
                  <li class="active"> <a href="/"><i class="icon-home"></i>Home</a></li>
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
               </ul>
               <ul class="list-unstyled">
               <li>
                  <a href="#dashvariants2" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-users"></i>Users </a>
                  <ul id="dashvariants2" class="collapse list-unstyled">

                     @foreach($users as $user)
                        <li style="overflow: auto;" >
                           <div style="display: flex">
                              <a href="/showCV/{{$user->id}}"> <img src="image/{{$user->url}}" alt="..." height="30px" width="30px" class="image-fluid rounded-circle">&nbsp; Dr/{{$user->name}}</a>

                                 <a href="/deletuser/{{$user->id}}"> <i class="fa fa-trash-o" aria-hidden="true"></i> </a>

                           </div>

                        </li>
                     @endforeach

                  </ul>
               </li>
               </ul>

            </nav>
            <div class="content-inner">
               <!-- Page Header-->
               <header class="page-header">

                  <div class="container-fluid" >

                     <ul class="nav nav-fill justify-content-center " style="font-weight: bold;">

                        <li class="nav-item">
                           <a class="nav-link active" href="#event">Event</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#med">Medications</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#gallery">Gallery </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#objective">Objective</a>
                        </li>



                     </ul>


                  </div>
               </header>
               <!-- Dashboard Counts Section-->
               <section class="dashboard-counts no-padding-bottom">
                  <div class="container-fluid">
                     <div class="row bg-white has-shadow">
                        <!-- Item -->
                        <div class="col-xl-3 col-sm-6">
                           <div class="item d-flex align-items-center">
                              <div class="icon bg-violet"><i class="icon-user"></i></div>
                              <div class="title">

                                 <a style="color: #777;"  href="/dailyReportMorningShow"><span>Daily<br>Reports</span></a>

                                 <div class="progress">
                                    <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                                 </div>
                              </div>
                              <div class="number"><strong>{{$dailyReport_count}}</strong></div>
                           </div>
                        </div>
                        <!-- Item -->
                        <div class="col-xl-3 col-sm-6">
                           <div class="item d-flex align-items-center">
                              <div class="icon bg-red"><i class="icon-padnote"></i></div>
                              <div class="title">
                                <a style="color: #777;"  href="/monthlyReportShow"><span>monthly<br>Reports</span></a>
                                 <div class="progress">
                                    <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                                 </div>
                              </div>
                              <div class="number"><strong>{{$monthlyReport_count}}</strong></div>
                           </div>
                        </div>
                        <!-- Item -->
                        <div class="col-xl-3 col-sm-6">
                           <div class="item d-flex align-items-center">
                              <div class="icon bg-green"><i class="icon-bill"></i></div>
                              <div class="title">
                                 <a style="color: #777;" href="/weeklyPlanShow"><span>weekly<br>Plan</span></a>
                                 <div class="progress">
                                    <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                                 </div>
                              </div>
                              <div class="number"><strong>{{$weeklyPlan_count/5}}</strong></div>
                           </div>
                        </div>
                        <!-- Item -->
                        <div class="col-xl-3 col-sm-6">
                           <div class="item d-flex align-items-center">
                              <div class="icon bg-orange"><i class="icon-check"></i></div>
                              <div class="title">
                                <a class="list-c" href="/monthlyPlanShow"><span>Monthly<br>Plan</span></a>
                                 <div class="progress">
                                    <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                                 </div>
                              </div>
                              <div class="number"><strong>{{$monthlyPlan_count}}</strong></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <section class="dashboard-counts no-padding-bottom">
                  <div class="container-fluid">
                     <div class="row bg-white has-shadow">
                        <!-- Item -->
                        <div class="col-xl-4 col-sm-6">
                           <div class="item d-flex align-items-center">
                              <div class="icon bg-violet"><i class="icon-user"></i></div>
                              <div class="title">

                                 <a class="list-c" href="#" role="button" aria-haspopup="true" aria-expanded="false"  data-toggle="dropdown" target="_blank"><span>promotion<br>plan</span></a>
                                 <div id="pro-drop"  class="dropdown-menu">
                                    <a style="color: black !important;"  class="dropdown-item" href="#promotion">Store</a>
                                    <a style="color: black !important;" class="dropdown-item" href="/promotionPlanShow">Show</a>

                                 </div>
                                 <div class="progress">
                                    <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                                 </div>
                              </div>
                              <div class="number"><strong>{{$promotion_count}}</strong></div>
                           </div>
                        </div>
                        <!-- Item -->
                        <div class="col-xl-4 col-sm-6">
                           <div class="item d-flex align-items-center">
                              <div class="icon bg-red"><i class="icon-padnote"></i></div>
                              <div class="title">
                                <a style="color: #777;" href="/Comparison"><span>Comparison of the sale<br> by sector</span></a>
                                 <div class="progress">
                                    <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                                 </div>
                              </div>
                              <div class="number"><strong>{{$comp_count}}</strong></div>
                           </div>
                        </div>

                        <!-- Item -->
                        <div class="col-xl-4 col-sm-6">
                           <div class="item d-flex align-items-center">
                              <div class="icon bg-green"><i class="icon-bill"></i></div>
                              <div class="title">

                                 <a style="color: #777" class="list-c2" href="#" role="button" aria-haspopup="true" aria-expanded="false"  data-toggle="dropdown" target="_blank"><span>Vacation</span></a>
                                 <div id="pro-drop2"  class="dropdown-menu">
                                    <a style="color: black !important;"  class="dropdown-item" href="/vaction">Store</a>
                                    <a style="color: black !important;" class="dropdown-item" href="/vactionShow">Show</a>

                                 </div>
                                 <div class="progress">
                                    <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                                 </div>
                              </div>
                              <div class="number"><strong>{{$vac_count}}</strong></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>



               <!-- Dashboard Header Section    -->
               <section class="dashboard-header">
                  <div class="container-fluid">
                     <div class="row">
                        <!-- Medication -->
                        <div class="statistics col-lg-6 col-12">
                           <div class="statistic  align-items-center bg-white has-shadow" id="med">
                              <h3>Add A New Medications</h3>
                              <form method="post" action="/medecin" enctype="multipart/form-data">
                                 {{csrf_field()}}
                                 <div class="form-group">
                                    <label for="formGroupExampleInput">Title</label>
                                    <input class="form-control <?php if ($errors->has('MTitle')){echo 'is-invalid';} ?>" type="text" name="MTitle" placeholder="title input">
                                    <div class="invalid-feedback">
                                       @foreach ($errors->get('MTitle') as $message)
                                          {{$message}}
                                       @endforeach
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleFormControlTextarea1">description</label>
                                    <textarea class="form-control <?php if ($errors->has('MDesc')){echo 'is-invalid';} ?>" name="MDesc" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    <div class="invalid-feedback">
                                       @foreach ($errors->get('MDesc') as $message)
                                          {{$message}}
                                       @endforeach
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleFormControlFile1">Medication picture</label>
                                    <input type="file" accept="image/*" class="form-control-file <?php if ($errors->has('MUrl')){echo 'is-invalid';} ?>" name="MUrl" id="exampleFormControlFile1" required>
                                    <div class="invalid-feedback">
                                       @foreach ($errors->get('MUrl') as $message)
                                          {{$message}}
                                       @endforeach
                                    </div>
                                 </div>
                                 <button type="submit" class="btn btn-primary">Add</button>
                              </form>
                           </div>
                           <div class="statistic  align-items-center bg-white has-shadow" id="gallery">
                              <h3>Add Gallery Picture</h3>
                              <form method="post" action="/img" enctype="multipart/form-data">
                                 {{csrf_field()}}
                                 <div class="form-group">
                                    <label for="exampleFormControlFile1">choose picture</label>
                                    <input type="file" class="form-control-file <?php if ($errors->has('MUrl')){echo 'is-invalid';} ?>" name="MUrl" id="exampleFormControlFile1" required>
                                    <div class="invalid-feedback">
                                       @foreach ($errors->get('MUrl') as $message)
                                          {{$message}}
                                       @endforeach
                                    </div>
                                 </div>
                                 <button type="submit" class="btn btn-primary">Add</button>
                              </form>
                           </div>

                           <div class="statistic  align-items-center bg-white has-shadow">
                              <h3>Comparison of the sale by sector</h3>

                              <form method="post" action="/Comparison" enctype="multipart/form-data">
                                 {{csrf_field()}}
                                 <div class="form-group">
                                    <label for="exampleFormControlFile1">choose picture</label>
                                    <input type="file" class="form-control-file  <?php if ($errors->has('url')){echo 'is-invalid';} ?>" name="url" id="exampleFormControlFile1" required>
                                    <div class="invalid-feedback">
                                       @foreach ($errors->get('url') as $message)
                                          {{$message}}
                                       @endforeach
                                    </div>
                                 </div>
                                 <button type="submit" class="btn btn-primary">Add</button>
                              </form>

                           </div>


                           <div class="statistic  align-items-center bg-white has-shadow">
                              <h3>Performance</h3>
                              <form method="post" action="/performance" enctype="multipart/form-data">
                                 {{csrf_field()}}
                                 <div class="form-group">
                                    <label for="exampleFormControlTextarea1">performance date</label>
                                    <input type="date" class="form-control <?php if ($errors->has('pdate')){echo 'is-invalid';} ?>" name="pdate" >
                                    <div class="invalid-feedback">
                                       @foreach ($errors->get('pdate') as $message)
                                          {{$message}}
                                       @endforeach
                                    </div>

                                 </div>
                                 <div class="form-group">
                                    <label for="exampleFormControlFile1">performance file</label>
                                    <input type="file" class="form-control-file <?php if ($errors->has('url')){echo 'is-invalid';} ?>" name="url" id="exampleFormControlFile1" required>
                                    <div class="invalid-feedback">
                                       @foreach ($errors->get('url') as $message)
                                          {{$message}}
                                       @endforeach
                                    </div>

                                 </div>

                                 <label class="mr-sm-2" for="inlineFormCustomSelectPref">Member</label>

                                 <select name='select_name' class="custom-select mb-2 mr-sm-2 mb-sm-0 " id="inlineFormCustomSelectPref">
                                    @foreach($users as $user)
                                       <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach

                                 </select>
                                 <br>

                                 <button type="submit" class="btn btn-primary">Add</button>
                              </form>
                              <br>

                           </div>

                        </div>
                        <!--event-->
                        <div class="statistics col-lg-6 col-12">
                           <div class="statistic  align-items-center bg-white has-shadow" id="event">
                              <h3>Add A New event</h3>
                              <form method="post" action="/event" enctype="multipart/form-data">
                                 {{csrf_field()}}
                                 <div class="form-group">
                                    <label for="formGroupExampleInput">Title</label>
                                    <input class="form-control <?php if ($errors->has('title')){echo 'is-invalid';} ?>" type="text" name="title" placeholder="title input">
                                    <div class="invalid-feedback">
                                       @foreach ($errors->get('title') as $message)
                                          {{$message}}
                                       @endforeach
                                    </div>

                                 </div>
                                 <div class="form-group">
                                    <label for="formGroupExampleInput">Date</label>
                                    <input class="form-control <?php if ($errors->has('edate')){echo 'is-invalid';} ?>" name="edate" type="date">
                                    <div class="invalid-feedback">
                                       @foreach ($errors->get('edate') as $message)
                                          {{$message}}
                                       @endforeach
                                    </div>

                                 </div>
                                 <div class="form-group">
                                    <label for="formGroupExampleInput">Time</label>
                                    <input class="form-control <?php if ($errors->has('time')){echo 'is-invalid';} ?>" type="time" name="time" placeholder="title input">
                                    <div class="invalid-feedback">
                                       @foreach ($errors->get('time') as $message)
                                          {{$message}}
                                       @endforeach
                                    </div>

                                 </div>
                                 <div class="form-group">
                                    <label for="exampleFormControlTextarea1">description</label>
                                    <textarea class="form-control <?php if ($errors->has('desc')){echo 'is-invalid';} ?>" name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    <div class="invalid-feedback">
                                       @foreach ($errors->get('desc') as $message)
                                          {{$message}}
                                       @endforeach
                                    </div>

                                 </div>
                                 <div class="form-group">
                                    <label for="exampleFormControlFile1">Event picture</label>
                                    <input type="file" accept="image/*" class="form-control-file <?php if ($errors->has('url')){echo 'is-invalid';} ?>" name="url" id="exampleFormControlFile1" required>
                                    <div class="invalid-feedback">
                                       @foreach ($errors->get('url') as $message)
                                          {{$message}}
                                       @endforeach
                                    </div>
                                 </div>
                                 <button type="submit" id="spt" class="btn btn-primary">Add</button>
                              </form>
                           </div>
                           <div class="statistic  align-items-center bg-white has-shadow">
                              <h3>private instruction</h3>
                              <form method="post" action="/inst" enctype="multipart/form-data">
                                 {{csrf_field()}}
                                 <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Message content</label>
                                    <textarea class="form-control <?php if ($errors->has('body')){echo 'is-invalid';} ?>" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    <div class="invalid-feedback">
                                       @foreach ($errors->get('body') as $message)
                                          {{$message}}
                                       @endforeach
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleFormControlFile1">Medication picture</label>
                                    <input type="file" class="form-control-file <?php if ($errors->has('url')){echo 'is-invalid';} ?>" name="url" id="exampleFormControlFile1">
                                    <div class="invalid-feedback">
                                       @foreach ($errors->get('url') as $message)
                                          {{$message}}
                                       @endforeach
                                    </div>
                                 </div>

                                 <label class="mr-sm-2" for="inlineFormCustomSelectPref">Member</label>

                                 <select name='select_name' class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelectPref">
                                    @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach

                                 </select>
                                 <button type="submit" class="btn btn-primary">Add</button>
                              </form>
                           </div>
                           <div class="statistic  align-items-center bg-white has-shadow">
                              <h3>Anthor Files</h3>

                              <form method="post" action="/Anthor" enctype="multipart/form-data">
                                 {{csrf_field()}}
                                 <div class="form-group">
                                    <label for="exampleFormControlFile1">choose picture</label>
                                    <input type="file" class="form-control-file <?php if ($errors->has('url')){echo 'is-invalid';} ?>" name="url" id="exampleFormControlFile1" required>
                                    <div class="invalid-feedback">
                                       @foreach ($errors->get('url') as $message)
                                          {{$message}}
                                       @endforeach
                                    </div>
                                 </div>
                                 <button type="submit" class="btn btn-primary">Add</button>
                              </form>
                           </div>

                           <div class="statistic  align-items-center bg-white has-shadow" id="promotion">
                              <h3>Promotion Plan</h3>

                              <form method="post" action="/promotionPlan" enctype="multipart/form-data">

                              {{csrf_field()}}
                                 <div class="form-group">
                                    <label for="exampleFormControlFile1">Date</label>
                                    <input type="date" class="form-control <?php if ($errors->has('date')){echo 'is-invalid';} ?>" name="date" id="exampleFormControlFile1">
                                    <div class="invalid-feedback">
                                       @foreach ($errors->get('date') as $message)
                                          {{$message}}
                                       @endforeach
                                    </div>
                                 </div>

                                 <div class="form-group">
                                    <label for="exampleFormControlFile1">choose file</label>
                                    <input type="file" class="form-control-file <?php if ($errors->has('url')){echo 'is-invalid';} ?>" name="url" id="exampleFormControlFile1" required>
                                    <div class="invalid-feedback">
                                       @foreach ($errors->get('url') as $message)
                                          {{$message}}
                                       @endforeach
                                    </div>
                                 </div>
                                 <button type="submit" class="btn btn-primary">Add</button>
                              </form>
                           </div>


                        </div>

                     </div>
                  </div>
               </section>

               <!-- Page Footer-->
               <footer class="main-footer">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-sm-6">
                           <p>Your company &copy; 2017-2019</p>
                        </div>
                       
                     </div>
                  </div>
               </footer>
            </div>
         </div>
      
    @stop