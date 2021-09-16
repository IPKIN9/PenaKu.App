<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/img/logo/logo.png') }}" rel="icon">
    <title>RuangAdmin - Dashboard</title>
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css">
    <link href="{{ asset('assets/css/ruang-admin.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.css">
</head>

<body id="page-top">
    <div id="wrapper">
        @include('Base.Sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('Base.Header')
                <div class="container-fluid" id="container-wrapper">
                    @yield('content')
                </div>
            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>PenaKu.app X Pena Develop by team <strong>MassoGis</strong>
                        </span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="univModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form id="edit_form" method="POST" autocomplete="off" action="">
                    @csrf
                    <div class="modal-body">
                        Modal body..
                    </div>
                    <div class="modal-footer">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/ruang-admin.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js" defer></script>
    <script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap4.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.js"></script>
    @yield('js')
</body>

</html>