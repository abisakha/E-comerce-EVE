{{-- <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
      <div class="me-3">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
      </div>
      <div>
        <a class="navbar-brand brand-logo" href="index.html">
          <img src="img/logo.png" alt="logo" /> <h4 class="d-inline ms-2">Kick Korner</h4>
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
          <img src="img/logo.png" alt="logo" />
        </a>
      </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-top">
      <ul class="navbar-nav">
        <li class="nav-item fw-semibold d-none d-lg-block ms-0">
          <h1 class="welcome-text">Welcome, <span class="text-black fw-bold">{{ auth()->user()->name }}</span></h1>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item d-none d-lg-block">
          <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
            <span class="input-group-addon input-group-prepend border-right">
              <span class="icon-calendar input-group-text calendar-icon"></span>
            </span>
            <input type="text" class="form-control">
          </div>
        </li>
        <li class="nav-item dropdown d-none d-lg-block user-dropdown">
          <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="Profile image"> </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
            <div class="dropdown-header text-center">
              <img class="img-md rounded-circle" src="assets/images/faces/face8.jpg" alt="Profile image">
              <p class="mb-1 mt-3 fw-semibold">Allen Moreno</p>
              <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
            </div>
            <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
            <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
            <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
            <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
            <form action="/logout" method="post">
                @csrf
                <button class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i> Sign out</button>
              </form>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
</nav> --}}


<nav class="navbar navbar-light  p-3" style="background-color:rgb(233, 231, 197);">
    <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
        <a class="navbar-brand" href="/dashboard">
            <img src="img/icon.png" alt="" width="100px"> <h3 class="d-inline ms-3">Eve</h3>
        </a>
        <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    {{-- <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
            </button>
            <ul class="dropdown-menu">
                <form action="/logout" method="post">
                  @csrf
                  <button class="dropdown-item">Sign out</button>
                </form>
            </ul>
        </div>
    </div> --}}
    <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
    <form action="/logout" method="post">
        @csrf
        <button class="btn btn-secondary">
            {{ auth()->user()->name }} - Sign out
        </button>
    </form>
</div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color:rgb(233, 231, 197);">
  <div class="container">
    {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                <span class="ms-3 fs-5">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('category*') ? 'active' : '' }}" href="/category">
                <span class="ms-3 fs-5">Category</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('shoes*') ? 'active' : '' }}" href="/shoes">
                <span class="ms-3 fs-5">Clots</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('transaction*') ? 'active' : '' }}" href="/transaction">
                <span class="ms-3 fs-5">Transactions</span>
            </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
