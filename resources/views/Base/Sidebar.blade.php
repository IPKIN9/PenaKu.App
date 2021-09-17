<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('assets/img/logo/logo2.png') }}">
        </div>
        <div class="sidebar-brand-text mx-3">PenaKu.app</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Kelolah Data
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{route('contoh.index')}}">
            <i class="fas fa-paperclip"></i>
            <span>Contoh</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('news.index')}}">
            <i class="fas fa-paperclip"></i>
            <span>News</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('departement.index')}}">
            <i class="fas fa-paperclip"></i>
            <span>Departement</span></a>
    </li>
</ul>