<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('assets/img/logo/logo2.png') }}">
        </div>
        <div class="sidebar-brand-text mx-3">PenaKu.app</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item {{ Route::is('ds.index') ? 'active' : '' }}">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Kelolah Data
    </div>
    <li class="nav-item {{ Route::is('contoh.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('contoh.index')}}">
            <i class="fas fa-paperclip"></i>
            <span>Contoh</span></a>
    </li>
    <li class="nav-item {{ Route::is('news.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('news.index')}}">
            <i class="fas fa-paperclip"></i>
            <span>News</span></a>
    </li>
    <li class="nav-item {{ Route::is('departement.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('departement.index')}}">
            <i class="fas fa-paperclip"></i>
            <span>Departement</span></a>
    </li>
    <li class="nav-item {{ Route::is('position.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('position.index')}}">
            <i class="fas fa-paperclip"></i>
            <span>Position</span></a>
    </li>
    <li class="nav-item {{ Route::is('generation.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('generation.index')}}">
            <i class="fas fa-paperclip"></i>
            <span>Generation</span></a>
    </li>
    <li class="nav-item {{ Route::is('member.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('member.index')}}">
            <i class="fas fa-paperclip"></i>
            <span>Member</span></a>
    <li class="nav-item {{ Route::is('new_member.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('new_member.index')}}">
            <i class="fas fa-paperclip"></i>
            <span>New Member</span></a>
    <li class="nav-item {{ Route::is('event.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('event.index')}}">
            <i class="fas fa-paperclip"></i>
            <span>Event</span></a>
    </li>
    <li class="nav-item {{ Route::is('question.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('question.index')}}">
            <i class="fas fa-paperclip"></i>
            <span>Question</span></a>
    </li>
</ul>