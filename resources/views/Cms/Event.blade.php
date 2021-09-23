@extends('Base.Dash')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h4 class="m-0 font-weight-bold text-primary">Data Event</h4>
                <br>
                @if (session('status'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    {{ session('status') }}
                </div>
                @endif
            </div>
            <div class="table-responsive p-3">
                <div id="dataTableHover_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table align-items-center table-flush table-hover dataTable" id="table_contoh"
                                role="grid" aria-describedby="dataTableHover_info">
                                <thead class="thead-light">
                                    <tr role="row">
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tgl Pelaksanaan</th>
                                        <th>Created at</th>
                                        <th>Update at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach ($data['all'] as $d)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{$no++}}</td>
                                        <td>{{$d->name}}</td>
                                        <td>{{$d->execution_date}}</td>
                                        <td>{{date('d-M-Y', strtotime($d->created_at))}}</td>
                                        <td>{{date('d-M-Y', strtotime($d->updated_at))}}</td>
                                        <td>
                                            <button data-id="{{$d->id}}" id="edit-data"
                                                class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
                                            <button data-id="{{$d->id}}" id="dell-data"
                                                class="btn btn-sm btn-secondary ml-1"><i
                                                    class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 mt-5">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h4 class="m-0 font-weight-bold text-primary">Formulir</h4>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card-body mt-2 mb-5">
                        <form autocomplete="off" enctype="multipart/form-data" action="{{route('event.create')}}"
                            method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group" style="margin-top: 35px;">
                                        <div class="custom-file">
                                            <input name="img" type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">-- Pilih Gambar --</label>
                                        </div>
                                        <small id="" class="form-text text-danger">Pastikan gambar yang
                                            dimasukan
                                            landscape.</small>
                                        <br>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" name="name" class="form-control" id=""
                                            aria-describedby="Masukan Data Contoh">
                                        <small id="" class="form-text text-muted">Masukan data nama
                                            lengkap.</small>
                                        <br>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Link</label>
                                        <input type="text" name="link" class="form-control" id=""
                                            aria-describedby="Masukan Data Contoh">
                                        <small id="" class="form-text text-muted">Masukan link yang
                                            berkaitan dengan event.</small>
                                        <br>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Tanggal pelaksanaan</label>
                                        <input type="date" name="execution_date" class="form-control" id="">
                                        <small id="" class="form-text text-muted">Pilih tanggal pelaksanaan
                                            kegiatan.</small>
                                        <br>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Penjelasan Lengkap</label>
                                        <textarea class="form-control" name="description" id="" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mb-3">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
            @endsection
            @section('js')
            <script>
                $(document).ready(function()
    {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#table_contoh').DataTable();

        $(document).on('click','#edit-data',function(){
            let dataId = $(this).data('id');
            let url = "getspecdata/" + dataId;
            
            $.get(url, function(data){
                $('.modal-title').html('Perubahan Data');
                $('#edit_form').attr('action', `{{route('event.update')}}`);
                $('.modal-body').html('');
                $('.modal-body').append(`
                <div class='row'>
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="row text-center">
                            <div class="col-md-12">
                            <input name="id" value="`+ data.id +`" type="hidden">
                                <img src="{{ asset('storage/image/event/`+ data.img +`') }}"
                                style="width: 300px;" alt="">
                            </div>
                        </div>
                        <hr style="margin-top:50px;">
                        <div class="col-md-12 text-right">
                            <button type="button" id="btn_enable" class="btn btn-secondary btn-sm">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" value="`+ data.name +`" name="name" class="form-control edit_input" id="first_focus"
                                        aria-describedby="Masukan Data Contoh">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Link</label>
                                    <input type="text" value="`+ data.link +`" name="link" class="form-control edit_input" id=""
                                        aria-describedby="Masukan Data Contoh">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                        <label for="">Tanggal pelaksanaan</label>
                                        <input type="date" name="execution_date" class="form-control edit_input" id="execution_date">
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" style="margin-top: 35px;">
                                    <div class="custom-file">
                                        <input name="img_update" type="hidden" value="`+ data.img +`">
                                        <input name="img" type="file" class="custom-file-input" id="img_select">
                                        <label class="custom-file-label" for="img_select">-- Pilih Gambar --</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Penjelasan Lengkap</label>
                                    <textarea class="form-control edit_input" name="description"
                                        id="description" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                `);
                $('.edit_input').prop('readonly', true);
                $('#img_select').prop('disabled', true);
                $('#execution_date').val(data.execution_date);
                $('#description').val(data.description);
                $('.modal-footer').html('');
                $('.modal-footer').append(`
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                `);
                $('#univModal').modal('show');
            })
        });

        $(document).on('click','#btn_enable',function()
        {
            $('.edit_input').prop('readonly', false);
            $('#img_select').prop('disabled', false);
            $('#first_focus').focus();
        });

        $(document).on('click','#dell-data',function(){
            let dataId = $(this).data('id');
            Swal.fire({
            title: 'Anda Yakin?',
            text: "Data ini mungkin terhubung ke tabel yang lain!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Batal',
            confirmButtonText: 'Hapus'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "deletespecdata/" + dataId,
                        type: 'delete',
                        success: function () {
                            Swal.fire({
                                title: 'Hapus!',
                                text: 'Data berhasl di hapus.',
                                icon: 'success',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Oke'
                            }).then((result) => {
                                location.reload();
                            });
                        },
                        error: function () {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Ada yang salah!',
                            });
                        }
                    })
                }
            })
        });
    });
            </script>
            @endsection