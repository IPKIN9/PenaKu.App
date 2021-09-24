<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">

        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/web/imgs/penaku_logo.png') }}" style="width: 200px;;" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><i
                class="material-icons">menu</i></button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- / NavLinks / -->

            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#features">PENA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#prices">Daftar</a>
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link page-scroll" href="#team">Team</a> -->
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{route('form.index')}}">Formulir</a>
                </li>
            </ul>

        </div>
    </div>
</nav>