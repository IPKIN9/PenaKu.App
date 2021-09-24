<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('assets/img/logo/logo2.png') }}">
        </div>
        <div class="sidebar-brand-text mx-3">PenaKu.app</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item {{ Route::is('dashboard.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('dashboard.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Kelolah Data
    </div>
    <li class="nav-item {{ Route::is('news.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('news.index')}}">
            <i class="far fa-newspaper"></i>
            <span>Berita</span></a>
    </li>
    <li class="nav-item 
    {{ Route::is('question.index') ? 'active' : '' }}
    {{ Route::is('new_member.index') ? 'active' : '' }}
    {{ Route::is('resultreq.index') ? 'active' : '' }}
    ">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePerekrutan"
            aria-expanded="true" aria-controls="collapsePerekrutan">
            <i class="fas fa-user-plus"></i>
            <span>Perekrutan</span>
        </a>
        <div id="collapsePerekrutan" class="collapse 
        {{ Route::is('question.index') ? 'show' : '' }}
        {{ Route::is('new_member.index') ? 'show' : '' }}
        {{ Route::is('resultreq.index') ? 'show' : '' }}
        " aria-labelledby="headingForm" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Calon Anggota</h6>
                <a class="collapse-item {{ Route::is('question.index') ? 'active' : '' }}"
                    href="{{route('question.index')}}">Wawancara</a>
                <a class="collapse-item {{ Route::is('new_member.index') ? 'active' : '' }}"
                    href="{{route('new_member.index')}}">Anggota Baru</a>
                <a class="collapse-item {{ Route::is('resultreq.index') ? 'active' : '' }}"
                    href="{{route('resultreq.index')}}">Hasil Jawaban</a>
            </div>
        </div>
    </li>
    <li class="nav-item
    {{ Route::is('departement.index') ? 'active' : '' }}
    {{ Route::is('position.index') ? 'active' : '' }}
    {{ Route::is('generation.index') ? 'active' : '' }}
    ">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKelengkapan"
            aria-expanded="true" aria-controls="collapseKelengkapan">
            <i class="fas fa-th-list"></i>
            <span>Kelengkapan Data</span>
        </a>
        <div id="collapseKelengkapan" class="collapse
        {{ Route::is('departement.index') ? 'show' : '' }}
        {{ Route::is('position.index') ? 'show' : '' }}
        {{ Route::is('generation.index') ? 'show' : '' }}
        " aria-labelledby="headingForm" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Semua Data</h6>
                <a class="collapse-item {{ Route::is('departement.index') ? 'active' : '' }}"
                    href="{{route('departement.index')}}">Jurusan</a>
                <a class="collapse-item {{ Route::is('position.index') ? 'active' : '' }}"
                    href="{{route('position.index')}}">Jabatan</a>
                <a class="collapse-item {{ Route::is('generation.index') ? 'active' : '' }}"
                    href="{{route('generation.index')}}">Generasi</a>
            </div>
        </div>
    </li>
    <li class="nav-item {{ Route::is('member.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('member.index')}}">
            <i class="far fa-id-card"></i>
            <span>Anggota</span></a>
    <li class="nav-item {{ Route::is('event.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('event.index')}}">
            <i class="fas fa-calendar-day"></i>
            <span>Event</span></a>
    </li>
</ul>