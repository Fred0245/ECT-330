@extends('Base')

{{-- menu --}}
@section('menu')

<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li>
                    <!-- User Profile-->
                    <div class="user-profile d-flex no-block dropdown m-t-20">
                        <div class="user-pic"><img src="../../assets/images/users/1.jpg" alt="users"
                                class="rounded-circle" width="40" /></div>
                        <div class="user-content hide-menu m-l-10">
                            <a href="#" class="" id="Userdd" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h5 class="m-b-0 user-name font-medium">{{ Auth::user()->name }}<i
                                        class="fa fa-angle-down m-2"></i></h5>
                                <span class="op-5 user-email">{{ Auth::user()->email }}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="Userdd">
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <a class="dropdown-item" href="/admin"><i
                                        class="ti-wallet m-r-5 m-l-5"></i>je suis Admin</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                    <!-- End User Profile-->

                </li>
                <li class="p-15"><a href="javascript:void(0)"
                    class="btn d-block  create-btn text-white no-block d-flex align-items-center"><i
                    class="fa fa-home m-2" aria-hidden="true"></i> <span class="hide-menu">Tableau de bord</span> </a>
            </li>

                <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="dashboard" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                        class="hide-menu">Tableau de bord</span></a></li> -->

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="/newEntreprise" aria-expanded="false"><i class="fa fa-plus-circle m-lg-1" aria-hidden="true"></i><span
                                class="hide-menu">Créer une entreprise</span></a></li>


                <!-- User Profile-->

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="#" aria-expanded="false"><i class="fa fa-user m-2" aria-hidden="true"></i><span class="hide-menu">Accéder à mon entreprise</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="#" aria-expanded="false"><i class="mdi mdi-border-all"></i><span
                            class="hide-menu">Historique</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="#" aria-expanded="false"><i class="mdi mdi-face"></i><span
                            class="hide-menu">Icon</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span
                            class="hide-menu">Aide</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="#" aria-expanded="false"><i class="mdi mdi-alert-outline"></i><span
                            class="hide-menu">404</span></a></li>
                <li class="text-center p-40 upgrade-btn">
                    <a href="https://www.wrappixel.com/templates/xtremeadmin/"
                        class="btn d-block w-100 btn-danger text-white" target="_blank">Upgrade to Pro</a>
                </li>
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>

@endsection

{{-- contenu --}}

@section('contenu')

{{-- <div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-5">
                <h4 class="page-title">Dashboard</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-7">
                <div class="text-end upgrade-btn">
                    <a href="https://www.wrappixel.com/templates/xtremeadmin/" class="btn btn-danger text-white"
                        target="_blank">Upgrade to Pro</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h4 class="card-title">Sales Summary</h4>
                                <h5 class="card-subtitle">Overview of Latest Month</h5>
                            </div>
                            <div class="ms-auto d-flex no-block align-items-center">
                                <ul class="list-inline font-12 dl m-r-15 m-b-0">
                                    <li class="list-inline-item text-info"><i class="fa fa-circle"></i> Iphone
                                    </li>
                                    <li class="list-inline-item text-primary"><i class="fa fa-circle"></i> Ipad
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <!-- column -->
                            <div class="col-lg-12">
                                <div class="campaign ct-charts"></div>
                            </div>
                            <!-- column -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Feeds</h4>
                        <div class="feed-widget">
                            <ul class="list-style-none feed-body m-0 p-b-20">
                                <li class="feed-item">
                                    <div class="feed-icon bg-info"><i class="far fa-bell"></i></div> You have 4
                                    pending tasks. <span class="ms-auto font-12 text-muted">Just Now</span>
                                </li>
                                <li class="feed-item">
                                    <div class="feed-icon bg-success"><i class="ti-server"></i></div> Server #1
                                    overloaded.<span class="ms-auto font-12 text-muted">2 Hours ago</span>
                                </li>
                                <li class="feed-item">
                                    <div class="feed-icon bg-warning"><i class="ti-shopping-cart"></i></div> New
                                    order received.<span class="ms-auto font-12 text-muted">31 May</span>
                                </li>
                                <li class="feed-item">
                                    <div class="feed-icon bg-danger"><i class="ti-user"></i></div> New user
                                    registered.<span class="ms-auto font-12 text-muted">30 May</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!-- title -->
                        <div class="d-md-flex">
                            <div>
                                <h4 class="card-title">Top Selling Products</h4>
                                <h5 class="card-subtitle">Overview of Top Selling Items</h5>
                            </div>
                            <div class="ms-auto">
                                <div class="dl">
                                    <select class="form-select shadow-none">
                                        <option value="0" selected>Monthly</option>
                                        <option value="1">Daily</option>
                                        <option value="2">Weekly</option>
                                        <option value="3">Yearly</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- title -->
                    </div>
                    <div class="table-responsive">
                        <table class="table v-middle">
                            <thead>
                                <tr class="bg-light">
                                    <th class="border-top-0">Products</th>
                                    <th class="border-top-0">License</th>
                                    <th class="border-top-0">Support Agent</th>
                                    <th class="border-top-0">Technology</th>
                                    <th class="border-top-0">Tickets</th>
                                    <th class="border-top-0">Sales</th>
                                    <th class="border-top-0">Earnings</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="m-r-10"><a
                                                    class="btn btn-circle d-flex btn-info text-white">EA</a>
                                            </div>
                                            <div class="">
                                                <h4 class="m-b-0 font-16">Elite Admin</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Single Use</td>
                                    <td>John Doe</td>
                                    <td>
                                        <label class="label label-danger">Angular</label>
                                    </td>
                                    <td>46</td>
                                    <td>356</td>
                                    <td>
                                        <h5 class="m-b-0">$2850.06</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="m-r-10"><a
                                                    class="btn btn-circle d-flex btn-orange text-white">MA</a>
                                            </div>
                                            <div class="">
                                                <h4 class="m-b-0 font-16">Monster Admin</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Single Use</td>
                                    <td>Venessa Fern</td>
                                    <td>
                                        <label class="label label-info">Vue Js</label>
                                    </td>
                                    <td>46</td>
                                    <td>356</td>
                                    <td>
                                        <h5 class="m-b-0">$2850.06</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="m-r-10"><a
                                                    class="btn btn-circle d-flex btn-success text-white">MP</a>
                                            </div>
                                            <div class="">
                                                <h4 class="m-b-0 font-16">Material Pro Admin</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Single Use</td>
                                    <td>John Doe</td>
                                    <td>
                                        <label class="label label-success">Bootstrap</label>
                                    </td>
                                    <td>46</td>
                                    <td>356</td>
                                    <td>
                                        <h5 class="m-b-0">$2850.06</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="m-r-10"><a
                                                    class="btn btn-circle d-flex btn-purple text-white">AA</a>
                                            </div>
                                            <div class="">
                                                <h4 class="m-b-0 font-16">Ample Admin</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Single Use</td>
                                    <td>John Doe</td>
                                    <td>
                                        <label class="label label-purple">React</label>
                                    </td>
                                    <td>46</td>
                                    <td>356</td>
                                    <td>
                                        <h5 class="m-b-0">$2850.06</h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Recent comment and chats -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Recent comment and chats -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center">
        All Rights Reserved by Xtreme Admin. Designed and Developed by <a
            href="https://www.wrappixel.com">WrapPixel</a>.
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div> --}}

@endsection
