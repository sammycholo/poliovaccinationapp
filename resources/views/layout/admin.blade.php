<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Samuel Emmanuel, Numan Nazir">
        <title>Dashboard - Polio Vaccination System</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset('css/admin.css')}}" rel="stylesheet" />
        <link href="{{asset('toastr/toastr.min.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
            .design{
                background-color: rgb(49, 50, 139)!important;
            }
        </style>

        <style>
            html {
  position: relative;
  min-height: 100%;
}

body {
  overflow-x: hidden;
  background-color: #EEEEEE;
}

.textside {
  margin-left: 25px;
}

.navlogo img {
  margin-bottom: 10px;
  margin-top: 10px;
  width: 60%;
}

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
  background: #FFFFFF;
  height: 60px;
  color: white;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 6px 10px;
  margin: 5px 0px 0;
  font-size: 1rem;
  color: #212529;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0,0,0,.15);
  border-radius: .25rem;
}

a {
  color: #7D7D7D;
  text-decoration: none;
  background-color: transparent;
  -webkit-text-decoration-skip: objects;
}

a:hover {
  color: #7D7D7D;
  text-decoration: none;
  background-color: transparent;
  -webkit-text-decoration-skip: objects;
}

.inforide {
  box-shadow: 1px 2px 8px 0px #f1f1f1;
  background-color: white;
  border-radius: 8px;
  height: 125px;
}

.rideone img {
  width: 70%;
}

.ridetwo img {
  width: 60%;
}

.ridethree img {
  width: 50%;
}

.rideone {
  background-color: #6CC785;
  padding-top: 25px;
  border-radius: 8px 0px 0px 8px;
  text-align: center;
  height: 125px;
  margin-left: 15px;
}

.ridetwo {
  background-color: #9A75FE;
  padding-top: 30px;
  border-radius: 8px 0px 0px 8px;
  text-align: center;
  height: 125px;
  margin-left: 15px;
}

.ridethree {
  background-color: #4EBCE5;
  padding-top: 35px;
  border-radius: 8px 0px 0px 8px;
  text-align: center;
  height: 125px;
  margin-left: 15px;
}

.fontsty {
  margin-right: -15px;
}

.fontsty h2{
  color: #6E6E6E;
  font-size: 35px;
  margin-top: 15px;
  text-align: right;
  margin-right: 30px;
}

.fontsty h4{
  color: #6E6E6E;
  font-size: 25px;
  margin-top: 20px;
  text-align: right;
  margin-right: 30px;
}
.fontsty h6{
  color: #6E6E6E;
  font-size: 25px;
  margin-top: 10px;
  text-align: right;
  margin-right: 30px;
}

.content-wrapper {
  min-height: calc(100vh - 56px);
  padding-top: 4rem;
  overflow-x: hidden;
  background: transparent;
}

#mainNav .navbar-collapse {
  overflow: auto;
  max-height: 75vh;
}

#mainNav .navbar-collapse .navbar-sidenav li:hover{
 
}

#mainNav .navbar-collapse .navbar-nav .nav-item .nav-link {
  cursor: pointer;
}

#mainNav .navbar-collapse .navbar-sidenav .nav-link-collapse:after {
  float: right;
  content: '\f107';
  font-family: 'FontAwesome';
}

#mainNav .navbar-collapse .navbar-sidenav .nav-link-collapse.collapsed:after {
  content: '\f105';
}

#mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link{
  position: relative;
  min-width: 45px;
}

#mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link:after {
  float: right;
  width: auto;
  content: '\f105';
  border: none;
  font-family: 'FontAwesome';
}

#mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown.show > .nav-link:after {
  content: '\f107';
}

#mainNav.navbar-dark .navbar-collapse .navbar-sidenav .nav-link-collapse:after {
  color: #868e96;
}

#mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item > .nav-link {
  color: white;
}

#mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item > .nav-link:hover {
  color: #D04153;
  border-radius: 30px;
  background-color: white;
}

#mainNav.navbar-dark .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link:after {
  color: #D04153;
}

#mainNav.navbar-light .navbar-collapse .navbar-sidenav .nav-link-collapse:after {
  color: rgba(0, 0, 0, 0.5);
}

#mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item > .nav-link {
  color: rgba(0, 0, 0, 0.5);
}

#mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item > .nav-link:hover {
  color: rgba(0, 0, 0, 0.7);
}

#mainNav.navbar-light .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link:after {
  color: rgba(0, 0, 0, 0.5);
}

body.sidenav-toggled .navbar-sidenav {
  width: 55px;
}

body.sidenav-toggled .navbar-sidenav .nav-link-text {
  display: none;
}

body.sidenav-toggled .navbar-sidenav .nav-item,
body.sidenav-toggled .navbar-sidenav .nav-link {
  width: 55px !important;
}

body.sidenav-toggled .navbar-sidenav .nav-item:after,
body.sidenav-toggled .navbar-sidenav .nav-link:after {
  display: none;
}

body.sidenav-toggled .navbar-sidenav .nav-item {
  white-space: nowrap;
}


@media (min-width: 992px) {

#mainNav .navbar-brand {
  width: 220px;
}

#mainNav .navbar-collapse {
  overflow: visible;
  max-height: none;
}

#mainNav .navbar-collapse .navbar-sidenav {
  position: absolute;
  top: 0;
  left: 0;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  margin-top: 0px;
}

#mainNav .navbar-collapse .navbar-sidenav > .nav-item {
   width: 230px;
   padding: 5px 15px;
   border-bottom: none;
}

#mainNav .navbar-collapse .navbar-sidenav > .nav-item > .nav-link {
   padding: 1em;
}

#mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link {
  min-width: 0;
}

#mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link:after {
  width: 24px;
  text-align: center;
}

#mainNav.fixed-top .navbar-sidenav {
  height: calc(120vh - 150px);
  width: 230px;
}

#mainNav.navbar-dark .navbar-collapse .navbar-sidenav {
  background: #262625;
}

#mainNav.navbar-dark .navbar-collapse .navbar-sidenav li.active a {
  color: white !important;
  background-color: #495057;
}

#mainNav.navbar-dark .navbar-collapse .navbar-sidenav li.active a:focus, #mainNav.navbar-dark .navbar-collapse .navbar-sidenav li.active a:hover {
  color: white;
}

#mainNav.navbar-light .navbar-collapse .navbar-sidenav {
    background: #f8f9fa;
}

#mainNav.navbar-light .navbar-collapse .navbar-sidenav li.active a {
  color: #000 !important;
  background-color: #e9ecef;
}

#mainNav.navbar-light .navbar-collapse .navbar-sidenav li.active a:focus, #mainNav.navbar-light .navbar-collapse .navbar-sidenav li.active a:hover {
  color: #000;
}

.content-wrapper {
  margin-left: 250px;
  margin-right: 20px;
}

}

@media screen and (max-device-width: 640px) { 

.navbar-dark .navbar-toggler {
  color: rgba(255,255,255,.5);
  border-color: #E84A5F;
  background: #E84A5F;
}

.navbar-nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
  background: #262625;
  height: 80vh;
}

.navbar-nav2 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
  background: #262625;
  height: 18vh;
}

}
        </style>
    </head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="{{ route('admin.dashboard') }}">DPVS</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-50 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route('admin.profile.index') }}">Account Setting</a></li>
                    <li><a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>


                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapsecampaign" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Campaign
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsecampaign" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('admin.campaign.create') }}">Create Campaign</a>
                                <a class="nav-link" href="{{ route('admin.campaign.index')}}">Edit/Delete Campaign</a>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseteams"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                            Team
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseteams" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('admin.team.create') }}">Create Team</a>
                                <a class="nav-link" href="{{ route('admin.team.index') }}">Edit/Delete Team</a>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseworker" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Worker
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseworker" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('admin.worker.create')}}">Create Worker</a>
                                <a class="nav-link" href="{{route('admin.worker.index')}}">Edit/Delete Worker</a>

                            </nav>
                        </div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsenews"
                            aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-rss"></i></div>
                            News
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsenews" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('admin.news.create') }}">Add News</a>
                                <a class="nav-link" href="{{ route('admin.news.index') }}">Edit/Delete News</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapsevolunteer" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"> <i class="fas fa-hands-helping"></i></div>
                            Volunteer Oppurtunities
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsevolunteer" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('admin.volunteer.create') }}">Add Oppurtunity</a>
                                <a class="nav-link" href="{{ route('admin.volunteer.index') }}">Edit/Delete Oppurtunities</a>
                            </nav>
                        </div>

                        <div class="sb-sidenav-menu-heading">Other Functions</div>
                        <a class="nav-link" href="{{route('admin.complain.index')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-bullhorn"></i></div>
                            Complaints
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapsereport" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-rss"></i></div>
                            Report
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsereport" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('admin.vaccinated') }}">Vaccinated Status</a>
                                <a class="nav-link" href="{{ route('admin.nonVaccinated') }}"> Non Vaccinated Status</a>
                                <a class="nav-link" href="{{ route('admin.activeComp') }}"> Active Compaigns</a>
                                <a class="nav-link" href="{{ route('admin.unActiveComp') }}"> Unactive Compaigns</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapsemaps" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-map-marked-alt"></i></div>
                            Maps
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsemaps" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('admin.heatMapLocations') }}">Vaccinated Areas</a>
                                <a class="nav-link" href="{{ route('admin.vacLocation') }}"> Worker Locations</a>
                            </nav>
                        </div>
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
                                by <a href="https://linktr.ee/dpvs">Numan, Rabeet &
                                    Samuel</a>
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
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{asset('js/datatables-simple-demo.js')}}"></script>
    @toastr_render
    @yield('scripts')
</body>

</html>