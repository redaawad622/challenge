@extends('master')
@section('content')

               <!-- start reports show  section-->
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

               <!--end reports show section-->



    @stop