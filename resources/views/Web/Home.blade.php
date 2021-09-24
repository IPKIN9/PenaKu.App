<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('assets/web/bootstrap-4.1.1-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/icon.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/web/js/plugins/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/js/plugins/owl-carousel/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/js/plugins/owl-carousel/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/js/plugins/YouTube_PopUp-master/YouTubePopUp.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/preloader.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/web/imgs/icon.png') }}">
    <title>Penaku.App Website pintar untuk mengurus keperluan PENA mu</title>
</head>

<body data-spy="scroll" data-target=".navbar">

    <div class="preloader-holder">
        <div class="loading">
            <div class="finger finger-1">
                <div class="finger-item">
                    <span></span><i></i>
                </div>
            </div>
            <div class="finger finger-2">
                <div class="finger-item">
                    <span></span><i></i>
                </div>
            </div>
            <div class="finger finger-3">
                <div class="finger-item">
                    <span></span><i></i>
                </div>
            </div>
            <div class="finger finger-4">
                <div class="finger-item">
                    <span></span><i></i>
                </div>
            </div>
            <div class="last-finger">
                <div class="last-finger-item"><i></i></div>
            </div>
        </div>
    </div>

    <!-- ==============================================
    HEADER
    =============================================== -->

    <header id="home">

        @include('Web.NavBar')

        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="caption">
                            <h1>PENA</h1>
                            <p class="sub">Programming Engineering & Networking Adhiguna</p>
                            <p class="sub" style="font-size: 50px;;">Pendaftaran Dibuka Dalam</p>
                            <a class="btn btn-primary" id="" href="{{route('form.index')}}">Daftar Sekarang</a>
                            <img class="img-fluid mx-auto wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"
                                src="{{ asset('assets/web/imgs/macbook1.png') }}" alt="macbook">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-4 wow bounceIn" data-wow-duration=".5s" data-wow-delay=".2s">
                    <img style="width: 90px; margin-bottom: 12px;" src="{{ asset('assets/web/imgs/programming.png') }}"
                        alt="">
                    <h4>Programming</h4>
                    <p>Devisi pembuatan program, Belajar segala macam bahasa pemograman untuk membuat sebuah aplikasi.
                    </p>
                </div>
                <div class="col-md-4 wow bounceIn" data-wow-duration=".5s" data-wow-delay=".4s">
                    <img style="width: 90px; margin-bottom: 12px;" src="{{ asset('assets/web/imgs/engine.png') }}"
                        alt="">
                    <h4>Engineering</h4>
                    <p>Devisi ini berfokus pada pengolahan hardware komputer.</p>
                </div>
                <div class="col-md-4 wow bounceIn" data-wow-duration=".5s" data-wow-delay=".6s">
                    <img style="width: 90px; margin-bottom: 12px;" src="{{ asset('assets/web/imgs/network.png') }}"
                        alt="">
                    <h4>Networking</h4>
                    <p>Penguji dan mengembangkan pengetahuan yang berkaitan dengan jaringan internet.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-7 wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".2s">
                    <img src="{{ asset('assets/web/imgs/updates.jpg') }}" class="img-fluid" alt="update">
                </div>
                <div class="col-md-5 wow fadeInRight" data-wow-duration=".5s" data-wow-delay=".5s">
                    <div class="caption">
                        <h3>Event</h3>
                        <p>Segera Hadir</p>
                        <button class="btn btn-secondary" disabled type="button">Lebih Lanjut</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-offset-2 text-center mx-auto">
                    <h2 class="section-title">Apa itu PENA ?</h2>
                    <p>Pena adalah sebuah organisasi internal kampus STMIK ADHI GUNA PALU yang bergerak dibidang IT</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 feature wow bounceIn" data-wow-duration=".5s" data-wow-delay=".2s">
                    <div class="feature-icon">
                        <img src="{{ asset('assets/web/imgs/ui-design.png') }}" style="width: 40px; margin-top: 45px;"
                            alt="">
                    </div>
                    <h4>UI/UX Design</h4>
                    <p>Mendesain sebuah tampilan aplikasi yang nantinya akan digunakan.</p>
                </div>
                <div class="col-md-4 feature wow bounceIn" data-wow-duration=".5s" data-wow-delay=".4s">
                    <div class="feature-icon">
                        <img src="{{ asset('assets/web/imgs/backend.png') }}" style="width: 40px; margin-top: 45px;"
                            alt="">
                    </div>
                    <h4>Beckend</h4>
                    <p>Menganalisis dan mengimplementasikan UI/UX kedalam code.</p>
                </div>
                <div class="col-md-4 feature wow bounceIn" data-wow-duration=".5s" data-wow-delay=".6s">
                    <div class="feature-icon">
                        <img src="{{ asset('assets/web/imgs/fullstack.png') }}" style="width: 40px; margin-top: 45px;"
                            alt="">
                    </div>
                    <h4>Fullstack</h4>
                    <p>Mendesain sekaligus mengimplementasikan UI/UX kedalam code.</p>
                </div>
                <div class="col-md-4 feature wow bounceIn" data-wow-duration=".5s" data-wow-delay=".8s">
                    <div class="feature-icon">
                        <img src="{{ asset('assets/web/imgs/video-editing.png') }}"
                            style="width: 40px; margin-top: 45px;" alt="">
                    </div>
                    <h4>Video Editing</h4>
                    <p>Pengembangan skill dalam dunia fotografi dan video editing.</p>
                </div>
                <div class="col-md-4 feature wow bounceIn" data-wow-duration=".5s" data-wow-delay="1s">
                    <div class="feature-icon">
                        <img src="{{ asset('assets/web/imgs/leadership.png') }}" style="width: 40px; margin-top: 45px;"
                            alt="">
                    </div>
                    <h4>Leadership</h4>
                    <p>Membangun jiwa kepemimpinan serta meningkatkan percaya diri.</p>
                </div>
                <div class="col-md-4 feature wow bounceIn" data-wow-duration=".5s" data-wow-delay="1.2s">
                    <div class="feature-icon">
                        <img src="{{ asset('assets/web/imgs/family.png') }}" style="width: 40px; margin-top: 45px;"
                            alt="">
                    </div>
                    <h4>Family</h4>
                    <p>Memiliki keluarga baru.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="prices">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-offset-2 col-md-offset-3 text-center mx-auto">
                    <h2 class="section-title">Cara Masuk Pena</h2>
                    <p>Gimana sih cara masuk pena?.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".2s">
                    <div class="price-table">
                        <div class="header">
                            <h5 class="title">Pendaftaran</h5>
                            <div class="price">0 Rp</div>
                            <h4>Free</h4>
                            <span>Pendaftaran berakhir dalam</span>
                            <small>
                                <p style="margin-bottom: -60px;" class="text-danger" id="demo"></p>
                                <br>
                            </small>
                        </div>
                        <a href="{{route('form.index')}}" style="margin-bottom: -25px;" class="btn btn-primary"
                            type="button">Daftar</a>
                    </div>
                </div>
                <div class="col-lg-4 wow bounceIn" data-wow-duration=".5s" data-wow-delay=".4s">
                    <div class="price-table">
                        <div class="header">
                            <h5 class="title">Seleksi</h5>
                            <div class="price" style="font-size: 40px; margin-bottom: 38px;">Peminatan</div>
                            <h4>3 Bulan</h4>
                        </div>
                        <button disabled class="btn btn-primary" type="button">Check</button>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInRight" data-wow-duration=".5s" data-wow-delay=".2s">
                    <div class="price-table">
                        <div class="header">
                            <h5 class="title">Peresmian</h5>
                            <div>
                                <img src="{{ asset('assets/web/imgs/medal.png') }}"
                                    style="width: 70px; margin-top: 25px; margin-bottom: 10px" alt="">
                            </div>
                            <h4>Pengkaderan</h4>
                        </div>
                        <button disabled class="btn btn-primary" type="button">Check</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="screenshots">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-offset-2 col-md-offset-3 text-center title-container">
                    <h2 class="section-title">Galery</h2>
                    <p>Dokumentasi kegiatan.</p>
                </div>
            </div>
            <div class="row">
                <div id="owl-screenshots">
                    <div class="item"><img src="{{ asset('assets/web/imgs/screenshots/1.jpg') }}" class="img-fluid"
                            alt="screen-1"></div>
                    <div class="item"><img src="{{ asset('assets/web/imgs/screenshots/2.jpg') }}" class="img-fluid"
                            alt="screen-2"></div>
                    <div class="item"><img src="{{ asset('assets/web/imgs/screenshots/3.jpg') }}" class="img-fluid"
                            alt="screen-3"></div>
                    <div class="item"><img src="{{ asset('assets/web/imgs/screenshots/1.jpg') }}"" class=" img-fluid"
                            alt="screen-1"></div>
                    <div class="item"><img src="{{ asset('assets/web/imgs/screenshots/2.jpg') }}" class="img-fluid"
                            alt="screen-2"></div>
                    <div class="item"><img src="{{ asset('assets/web/imgs/screenshots/3.jpg') }}" class="img-fluid"
                            alt="screen-3"></div>
                    <div class="item"><img src="{{ asset('assets/web/imgs/screenshots/1.jpg') }}"" class=" img-fluid"
                            alt="screen-1"></div>
                    <div class="item"><img src="{{ asset('assets/web/imgs/screenshots/2.jpg') }}" class="img-fluid"
                            alt="screen-2"></div>
                </div>
            </div>
        </div>
    </section>

    <div id="video-popup">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 video-box">
                    <img src="{{ asset('assets/web/imgs/video-bg.png') }}" class="img-fluid wow rotateIn"
                        data-wow-duration=".5s" data-wow-delay=".2s" alt="popup">
                    <div class="play-button">
                        <a class="bla-2 wow flipInY" data-wow-duration=".5s" data-wow-delay=".4s"
                            href="https://www.instagram.com/p/CSbvXpsHshT/?utm_source=ig_web_copy_link"><i
                                class="material-icons">play_arrow</i></a>
                        <div class="waves-block">
                            <div class="waves wave-1"></div>
                            <div class="waves wave-2"></div>
                            <div class="waves wave-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="contact">
        <div class="container">
            <p>&copy; Programming Enginering & Networking Adhiguna</p>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/web/bootstrap-4.1.1-dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/vivid-icons.js') }}"></script>
    <script src="{{ asset('assets/web/js/vivid-icons.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/plugins/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/web/js/plugins/YouTube_PopUp-master/YouTubePopUp.jquery.js') }}"></script>
    <script src="{{ asset('assets/web/js/plugins/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/plugins/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/main.js') }}"></script>
    <script>
        var countDownDate = new Date("Oct 01, 2021 00:00:00").getTime();
    
    var x = setInterval(function() {
    
        var now = new Date().getTime();
        
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("demo").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
        
        if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
    </script>

</body>

</html>