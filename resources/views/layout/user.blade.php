<!DOCTYPE html>
<html lang="en" class="h-100"> <!-- Primary Language of Document = English "en" -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Samuel Emmanuel, Numan Nazir">
        <title>Dashboard - Polio Vaccination System</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset('css/admin.css')}}" rel="stylesheet" />
        <link href="{{asset('toastr/toastr.min.css')}}" rel="stylesheet" />
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <style>
            .design{
                background-color: rgb(49, 50, 139)!important;
            }
        </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="{{ route('user.dashboard') }}">DPVS</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
z            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-50 me-3 me-lg-12">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('user.profile.index') }}">Account Setting</a></li>
                        <li><a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="{{ route('user.dashboard') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsecampaign" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-bullhorn"></i></div>
                                Complaint
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsecampaign" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('user.complain.create') }}">Create Complaint</a>
                                    <a class="nav-link" href="{{ route('user.complain.index') }}">Complaints Status</a>
								
                                </nav>
                            </div>
							
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseteams" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Vaccination Campaigns
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseteams" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('user.campaign.index') }}">Active Campaign</a>
                                    <a class="nav-link" href="{{ route('user.upcoming') }}">Upcoming Campaign</a>
								
                                </nav>
                            </div>
                            
                            <a class="nav-link" href="{{ route('user.volunteer.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-hands-helping"></i></div>
                                Apply for Volunteer
                            </a>

							<a class="nav-link" href="{{ route('user.news') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-qrcode"></i></div>
                                News/Updates                            
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small"><b>Logged in as:</b></div>
                        <b>Name:</b> {{ Auth::user()->name }}
                        <br>
                        <b>Email:</b> {{ Auth::user()->email }}
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    @yield('content')
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Polio Vaccination System 2021</div>
                            <div>
                                <p>A Project Of <a href="https://www.fccollege.edu.pk/faculty-of-computer-science/">FCCU</a>
                                &middot;
                                by <a href="https://linktr.ee/dpvs">Numan, Rabeet & Samuel</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{asset('js/admin-scripts.js')}}"></script>
        <script src="{{asset('toastr/toastr.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('js/chart-area-demo.js')}}"></script>
        <script src="{{asset('js/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset('js/datatables-simple-demo.js')}}"></script>
        @toastr_render
        @yield('user_scripts')
    </body>
</html>
