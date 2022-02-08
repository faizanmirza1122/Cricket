@extends('admin.layouts.app')
@section('content')
<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <div class="d-flex justify-content-center">
                <a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
            </div>
        </div>
    </div>

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                <span class="breadcrumb-item active">Dashboard</span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
                <a href="#" class="breadcrumb-elements-item">
                    <i class="icon-comment-discussion mr-2"></i>
                    Support
                </a>

                <div class="breadcrumb-elements-item dropdown p-0">
                    <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-gear mr-2"></i>
                        Settings
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                        <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                        <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content">

    <div class="col-xl-12">
        <!-- Quick stats boxes -->
        <div class="row">
            <div class="col-lg-4">

                <!-- Members online -->
                <div class="card bg-teal-400">
                    <div class="card-body">
                        <div class="d-flex">
                            <h3 class="font-weight-semibold mb-0">3,450</h3>
                            <span class="badge bg-teal-800 badge-pill align-self-center ml-auto">+53,6%</span>
                        </div>

                        <div>
                            Members online
                            <div class="font-size-sm opacity-75">489 avg</div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div id="members-online"></div>
                    </div>
                </div>
                <!-- /members online -->

            </div>

            <div class="col-lg-4">

                <!-- Current server load -->
                <div class="card bg-pink-400">
                    <div class="card-body">
                        <div class="d-flex">
                            <h3 class="font-weight-semibold mb-0">49.4%</h3>
                            <div class="list-icons ml-auto">
                                <div class="list-icons-item dropdown">
                                    <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
                                        <a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
                                        <a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
                                        <a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            Current server load
                            <div class="font-size-sm opacity-75">34.6% avg</div>
                        </div>
                    </div>

                    <div id="server-load"></div>
                </div>
                <!-- /current server load -->

            </div>

            <div class="col-lg-4">

                <!-- Today's revenue -->
                <div class="card bg-blue-400">
                    <div class="card-body">
                        <div class="d-flex">
                            <h3 class="font-weight-semibold mb-0">$18,390</h3>
                            <div class="list-icons ml-auto">
                                <a class="list-icons-item" data-action="reload"></a>
                            </div>
                        </div>

                        <div>
                            Today's revenue
                            <div class="font-size-sm opacity-75">$37,578 avg</div>
                        </div>
                    </div>

                    <div id="today-revenue"></div>
                </div>
                <!-- /today's revenue -->

            </div>
        </div>

    </div>
    <!-- Main charts -->
    <div class="row">
        <div class="col-xl-7">

            <!-- Traffic sources -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title">Traffic sources</h6>
                    <div class="header-elements">
                        <div class="form-check form-check-right form-check-switchery form-check-switchery-sm">
                            <label class="form-check-label">
                                Live update:
                                <input type="checkbox" class="form-input-switchery" checked data-fouc>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card-body py-0">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="d-flex align-items-center justify-content-center mb-2">
                                <a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon mr-3">
                                    <i class="icon-plus3"></i>
                                </a>
                                <div>
                                    <div class="font-weight-semibold">New visitors</div>
                                    <span class="text-muted">2,349 avg</span>
                                </div>
                            </div>
                            <div class="w-75 mx-auto mb-3" id="new-visitors"></div>
                        </div>

                        <div class="col-sm-4">
                            <div class="d-flex align-items-center justify-content-center mb-2">
                                <a href="#" class="btn bg-transparent border-warning-400 text-warning-400 rounded-round border-2 btn-icon mr-3">
                                    <i class="icon-watch2"></i>
                                </a>
                                <div>
                                    <div class="font-weight-semibold">New sessions</div>
                                    <span class="text-muted">08:20 avg</span>
                                </div>
                            </div>
                            <div class="w-75 mx-auto mb-3" id="new-sessions"></div>
                        </div>

                        <div class="col-sm-4">
                            <div class="d-flex align-items-center justify-content-center mb-2">
                                <a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon mr-3">
                                    <i class="icon-people"></i>
                                </a>
                                <div>
                                    <div class="font-weight-semibold">Total online</div>
                                    <span class="text-muted"><span class="badge badge-mark border-success mr-2"></span> 5,378 avg</span>
                                </div>
                            </div>
                            <div class="w-75 mx-auto mb-3" id="total-online"></div>
                        </div>
                    </div>
                </div>

                <div class="chart position-relative" id="traffic-sources"></div>
            </div>
            <!-- /traffic sources -->

        </div>

        <div class="col-xl-5">

            <!-- Sales stats -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title">Sales statistics</h6>
                    <div class="header-elements">
                        <select class="form-control" id="select_date" data-fouc>
                            <option value="val1">June, 29 - July, 5</option>
                            <option value="val2">June, 22 - June 28</option>
                            <option value="val3" selected>June, 15 - June, 21</option>
                            <option value="val4">June, 8 - June, 14</option>
                        </select>
                    </div>
                </div>

                <div class="card-body py-0">
                    <div class="row text-center">
                        <div class="col-4">
                            <div class="mb-3">
                                <h5 class="font-weight-semibold mb-0">5,689</h5>
                                <span class="text-muted font-size-sm">new orders</span>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="mb-3">
                                <h5 class="font-weight-semibold mb-0">32,568</h5>
                                <span class="text-muted font-size-sm">this month</span>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="mb-3">
                                <h5 class="font-weight-semibold mb-0">$23,464</h5>
                                <span class="text-muted font-size-sm">expected profit</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="chart mb-2" id="app_sales"></div>
                <div class="chart" id="monthly-sales-stats"></div>
            </div>
            <!-- /sales stats -->

        </div>
    </div>
    <!-- /main charts -->



</div>
<!-- /content area -->
@endsection
