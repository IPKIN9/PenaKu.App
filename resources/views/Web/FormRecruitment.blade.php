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
    <link rel="icon" type="image/png" href="{{ asset('assets/web/imgs/icon_title.png') }}">
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

        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">

                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/web/imgs/penaku_logo.png') }}" style="width: 200px;;" alt="">
                </a>
                <a href="{{route('home.index')}}" class="btn btn-secondary">Kembali</a>
            </div>
        </nav>

        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="caption">
                            <h1>PENA</h1>
                            <p class="sub">Programming Engineering & Networking Adhiguna</p>
                            <p class="sub" style="font-size: 50px;;">Formulir Pendaftaran</p>
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
            <div class="row text-center">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <form action="">
                        <h5 class="" style="margin-bottom:100px;">Cek status pendaftaran</h5>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Nomor Registrasi</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="" placeholder="-- Click Here --">
                                <small id="" class="form-text text-left text-muted">Masukan nomor registrasi pendaftaran
                                    kamu.</small>
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-sm btn-primary">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </section>

    <section id="prices">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-offset-2 col-md-offset-3 text-center mx-auto">
                    @if (session('status'))
                    <div class="alert alert-success mb-4">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h2 class="section-title">Formulir</h2>
                    <p>Masukan data diri kamu dibawah ini.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".2s"
                    style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.2s; animation-name: fadeInLeft;">
                    <div class="">
                        <nav class="bg-light">
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link btn-primary active" id="nav-home-tab" data-toggle="tab"
                                    href="#nav-home" role="tab" aria-controls="nav-home"
                                    aria-selected="true">Formulir</a>
                                <a class="nav-item nav-link btn-primary" id="nav-profile-tab" data-toggle="tab"
                                    href="#nav-profile" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">Selanjutnya</a>
                            </div>
                        </nav>
                        <form action="{{route('form.insert')}}" enctype="multipart/form-data" method="POST"
                            id="form_recruit">
                            @csrf
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div class="price-table">
                                        <div class="header">
                                            <div class="price">Biodata</div>
                                            <h4>Wajib di isi semua sebelum menekan tombol selanjutnya</h4>
                                        </div>
                                        <div class="row text-left" style="margin-top: 100px;">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Nama Lengkap</label>
                                                    <input required name="name" type="text" class="form-control" id=""
                                                        placeholder="Masukan nama lengkap">
                                                    <small id="" class="form-text text-muted">Wajib
                                                        diisi.</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Tanggal Lahir</label>
                                                    <input required name="born" type="date" class="form-control" id="">
                                                    <small id="" class="form-text text-muted">Tanggal harus
                                                        sesuai
                                                        dengan
                                                        ijazah/data mahasiswa.</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row text-left" style="margin-top: 20px;">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Jenis Kelamin</label>
                                                    <select required name="sex" class="form-control" id="">
                                                        <option selected disabled>-- Pilih --</option>
                                                        <option value="laki-laki">Laki-Laki</option>
                                                        <option value="perempuan">Perempuan</option>
                                                    </select>
                                                    <small id="" class="form-text text-muted">Wajib
                                                        diisi.</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Jurusan</label>
                                                    <select required name="departemen_id" class="form-control" id="">
                                                        <option selected disabled>-- Pilih --</option>
                                                        @foreach ($data['departement'] as $d)
                                                        <option value="{{$d->id}}">{{$d->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    <small id="" class="form-text text-muted">Jurusan/Fakultas.</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row text-left" style="margin-top: 20px;">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Semester</label>
                                                    <select required name="semester" class="form-control" id="">
                                                        <option selected disabled>-- Pilih --</option>
                                                        <option value="1">I (Satu)</option>
                                                        <option value="3">III (Tiga)</option>
                                                    </select>
                                                    <small id="" class="form-text text-muted">Semester saat
                                                        ini.</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Pilih Gambar</label>
                                                    <div class="custom-file">
                                                        <input name="pic" required type="file" class="custom-file-input"
                                                            id="">
                                                        <label class="custom-file-label" for="">click</label>
                                                    </div>
                                                    <small id="" class="form-text text-muted">Gambar bebas
                                                        rapi.</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Nomor Hp (Whatsapp)</label>
                                                    <input required name="hp" type="text" class="form-control" id=""
                                                        placeholder="Masukan nomor hp">
                                                    <small id="" class="form-text text-muted">Wajib
                                                        diisi.</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: 50px;">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Jelaskan alasan kalian kenapa memiliih pena?</label>
                                                    <textarea name="cause"
                                                        aria-placeholder="Masukan alasan kalian disini" required
                                                        class="form-control" id="" rows="8"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col-md-12">
                                                <p class="text-danger">Klik selanjutnya pada navigasi diatas <i
                                                        class="fas fa-long-arrow-alt-up"></i></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <div class="price-table">
                                        <div class="header">
                                            <div class="price">Pertanyaan</div>
                                            <h4>Wajib di isi semua sebelum menekan tombol kirim</h4>
                                        </div>
                                        <div class="row" style="margin-top: 50px;">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10">
                                                <div class="row">
                                                    @foreach ($data['question'] as $d)
                                                    <div class="col-sm-12 mt-4">
                                                        <div class="form-group">
                                                            <label for="">{{$d->questions}}</label>
                                                            <input type="hidden" value="{{$d->id}}"
                                                                name="question_id[]">
                                                            <textarea required name="answer[]" class="form-control"
                                                                id="" rows="4"></textarea>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="col-md-1 mt-4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="text-light">Harap menyelesaikan seluruh tahap untuk dapat mengakhiri
                                        pendaftaran, Jika tombol dibawah ini tidak dapat
                                        ditekan coba periksa seluruh formulir sekali lagi.
                                    </p>
                                    <button id="finish" class="btn btn-success">Selesaikan
                                        Pendaftaran</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
        $(document).ready(function()
        {
            $('#form_recruit input').blur(function()
{
                if( !$(this).val() ) {
                    $(this).parents('p').addClass('warning');
                }
            });
        });
    </script>

</body>

</html>