@extends('backend.layout.master')
@section('content')

      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h4 class="page-title">Dashboard</h4>
              </div>
              
          </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="box">
                  <div class="box-header with-border">
                    <h4 class="box-title">Overview</h4>
                  </div>
                  <div class="box-body">
                    <div id="bookingstatus"></div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-xl-6">
                <div class="box">
                  <div class="box-header with-border">
                    <h4 class="box-title">Revenue</h4>
                  </div>
                  <div class="box-body">
                    <div id="revenue2"></div>
                  </div>
                </div>
              </div>
            <div class="col-xl-6 col-12">
                <div class="box">
                    <div class="box-header no-border">
                        <h4 class="box-title">Users</h4>
                        <div class="box-controls pull-right">
                            <div class="inline-block dropdown">
                                <a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body min-h-xl-350">
                        <div id="chart-4"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-12">
                <div class="box">
                    <div class="box-header no-border">
                        <h4 class="box-title">Visits by Days</h4>
                        <div class="box-controls pull-right">
                            <div class="inline-block dropdown">
                                <a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body min-h-xl-350">
                        <div id="chart-5"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-12">
                <div class="box">
                    <div class="box-header no-border">
                        <h4 class="box-title">Total Sales</h4>
                        <div class="box-controls pull-right">
                            <div class="inline-block dropdown">
                                <a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body pb-0">
                        <div class="d-flex align-items-center justify-content-between mb-5">
                            <div class="font-size-30 text-dark">$40,630k</div>
                            <div class="font-size-16 text-success font-weight-500">
                                <i class="mdi mdi-arrow-up mr-5"></i>
                                <span>5.12%</span>
                            </div>
                        </div>
                    </div>	
                    <div class="box-body p-0">
                        <div id="chart-6"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Email Subscribers</h4>
                        <div class="box-controls pull-right">
                            <div class="inline-block dropdown">
                                <a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div id="e_chart_1" class="echart" style="height: 240px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Users by Generation</h4>
                        <div class="box-controls pull-right">
                            <div class="inline-block dropdown">
                                <a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div id="e_chart_2" class="echart" style="height:195px;"></div>
                        <div class="d-flex mt-20 justify-content-center align-items-center gap-items-3">
                            <div>
                                <span class="badge badge-dot mr-10 badge-primary"></span><span>18-24</span>
                            </div>
                            <div>
                                <span class="badge badge-dot mr-10 badge-info"></span><span>25-34</span>
                            </div>
                            <div>
                                <span class="badge badge-dot mr-10 badge-danger"></span><span>35-44</span>
                            </div>
                            <div>
                                <span class="badge badge-dot mr-10 badge-warning"></span><span>45-54</span>
                            </div>
                            <div>
                                <span class="badge badge-dot mr-10 badge-success"></span><span>55-64</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title align-items-start flex-column">
                            Agents Stats
                            <small class="subtitle">More than 400+ new members</small>
                        </h4>
                    </div>
                    <div class="box-body py-0">
                        <div class="table-responsive">
                            <table class="table no-border">
                                <thead>
                                    <tr class="text-left">
                                        <th style="width: 50px">Authors</th>
                                        <th style="min-width: 200px"></th>
                                        <th style="min-width: 150px">Company</th>
                                        <th style="min-width: 150px">Progress</th>
                                        <th class="text-right" style="min-width: 150px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>										
                                        <td>
                                            <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                <img src="../images/avatar/avatar-1.png" class="h-50 align-self-end" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark font-weight-600 hover-primary font-size-16">Vivamus consectetur</a>
                                            <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                        </td>
                                        <td>
                                            <span class="text-dark font-weight-600 d-block font-size-16">
                                                Intertico
                                            </span>
                                            <span class="text-fade d-block">
                                                Web, UI/UX Design
                                            </span>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column w-p100">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <span class="text-fade">
                                                        65%
                                                    </span>
                                                    <span class="text-fade">
                                                        Progress
                                                    </span>
                                                </div>
                                                <div class="progress progress-xs w-p100">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Settings-1 font-size-18"><span class="path1"></span><span class="path2"></span></span></a>
                                            <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
                                            <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Trash1 font-size-18"><span class="path1"></span><span class="path2"></span></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                <img src="../images/avatar/avatar-2.png" class="h-50 align-self-end" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark font-weight-600 hover-primary font-size-16">Vivamus consectetur</a>
                                            <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                        </td>
                                        <td>
                                            <span class="text-dark font-weight-600 d-block font-size-16">
                                                Intertico
                                            </span>
                                            <span class="text-fade d-block">
                                                Web, UI/UX Design
                                            </span>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column w-p100">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <span class="text-fade">
                                                        83%
                                                    </span>
                                                    <span class="text-fade">
                                                        Progress
                                                    </span>
                                                </div>
                                                <div class="progress progress-xs w-p100">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 83%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Settings-1 font-size-18"><span class="path1"></span><span class="path2"></span></span></a>
                                            <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
                                            <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Trash1 font-size-18"><span class="path1"></span><span class="path2"></span></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                <img src="../images/avatar/avatar-3.png" class="h-50 align-self-end" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark font-weight-600 hover-primary font-size-16">Vivamus consectetur</a>
                                            <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                        </td>
                                        <td>
                                            <span class="text-dark font-weight-600 d-block font-size-16">
                                                Intertico
                                            </span>
                                            <span class="text-fade d-block">
                                                Web, UI/UX Design
                                            </span>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column w-p100">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <span class="text-fade">
                                                        47%
                                                    </span>
                                                    <span class="text-fade">
                                                        Progress
                                                    </span>
                                                </div>
                                                <div class="progress progress-xs w-p100">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 83%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Settings-1 font-size-18"><span class="path1"></span><span class="path2"></span></span></a>
                                            <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
                                            <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Trash1 font-size-18"><span class="path1"></span><span class="path2"></span></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                <img src="../images/avatar/avatar-4.png" class="h-50 align-self-end" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark font-weight-600 hover-primary font-size-16">Vivamus consectetur</a>
                                            <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                        </td>
                                        <td>
                                            <span class="text-dark font-weight-600 d-block font-size-16">
                                                Intertico
                                            </span>
                                            <span class="text-fade d-block">
                                                Web, UI/UX Design
                                            </span>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column w-p100">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <span class="text-fade">
                                                        71%
                                                    </span>
                                                    <span class="text-fade">
                                                        Progress
                                                    </span>
                                                </div>
                                                <div class="progress progress-xs w-p100">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 71%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Settings-1 font-size-18"><span class="path1"></span><span class="path2"></span></span></a>

                                            <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
                                            <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Trash1 font-size-18"><span class="path1"></span><span class="path2"></span></span></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>
      <!-- /.content -->
@endsection