@extends('Base.Dash')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h4 class="m-0 font-weight-bold text-primary">Data New Member</h4>
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
                            <table class="table align-items-center table-flush table-hover dataTable" id="table_member"
                                role="grid" aria-describedby="dataTableHover_info">
                                <thead class="thead-light">
                                    <tr role="row">
                                        <th>No</th>
                                        <th>No. Registrasi</th>
                                        <th>Nama Lengkap</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
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
                                        <td>{{$d->regis_number}}</td>
                                        <td>{{$d->name}}</td>
                                        <td>{{date('d-M-Y', strtotime($d->created_at))}}</td>
                                        <td>{{date('d-M-Y', strtotime($d->updated_at))}}</td>
                                        <td>
                                            <button data-id="{{$d->id}}" id="edit-data"
                                                class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
                                            <button data-id="{{$d->id}}" id="del-data"
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
                        <form autocomplete="off" action="{{route('new_member.create')}}" enctype="multipart/form-data"
                            method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="regis_number">Nomor Registrasi</label>
                                        <input type="text" name="regis_number" class="form-control"
                                            aria-describedby="Masukan Data Regist Number"
                                            placeholder="Masukan Data Regist Number">
                                        @error('regis_number')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <br>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Nama Lengkap</label>
                                        <input type="text" name="name" class="form-control"
                                            aria-describedby="Masukan Data Name" placeholder="Masukan Data Name">
                                        <br>
                                        @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="born">Tanggal Lahir</label>
                                        <input type="date" name="born" class="form-control"
                                            aria-describedby="Masukan Data Born" placeholder="Masukan Data Born">
                                        <br>
                                        @error('born')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="sex">Jenis Kelamin</label>
                                    <select class="form-control" name="sex">
                                        <option disabled selected>-- Pilih --</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <br>
                                    @error('sex')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="departemen_id">Jurusan</label>
                                        <select class="form-control" name="departemen_id">
                                            <option disabled selected>-- Pilih Jurusan --</option>
                                            @foreach ($data ['dept'] as $d)
                                            <option value="{{$d->id}}">{{$d->name}}</option>
                                            @endforeach
                                        </select>
                                        <br>
                                        @error('departemen_id')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Pilih Semester</label>
                                        <select name="semester" class="form-control" id="exampleFormControlSelect1">
                                            <option selected disabled>-- Pilih --</option>
                                            <option>I Satu</option>
                                            <option>III Tiga</option>
                                        </select>
                                        <br>
                                        @error('semester')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Alasan Masuk Pena</label>
                                        <textarea name="cause" class="form-control" id="exampleFormControlTextarea1"
                                            rows="12"></textarea>
                                        <br>
                                        @error('cause')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="pic" id="customFile">
                                            <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                                            <br>
                                            @error('pic')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
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

        $('#table_member').DataTable();

        $(document).on('click','#edit-data',function(){
            let dataId = $(this).data('id');
            let url = "getspecdata/" + dataId;
            
            $.get(url, function(data){
                $('.modal-title').html('Perubahan Data');
                $('#edit_form').attr('action', `{{route('new_member.update')}}`);
                $('.modal-body').html('');
                $('.modal-body').append(`
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row text-center">
                                <div class="col-md-12">
                                <input name="id" value="`+ data.id +`" type="hidden">
                                    <img src="{{ asset('storage/image/CA/`+ data.pic +`') }}"
                                    style="width: 300px;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr style="margin-top:50px;">
                    <div class="col-md-12 text-right">
                        <button type="button" id="btn_enable" class="btn btn-secondary btn-sm">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="regis_number">Nomor Registrasi</label>
                                <input type="text" id="first_focus" name="regis_number" value="`+ data.regis_number +`" class="form-control edit_input"
                                    aria-describedby="Masukan Data Regist Number"
                                    placeholder="Masukan Data Regist Number">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" name="name" value="`+ data.name +`" class="form-control edit_input"
                                    aria-describedby="Masukan Data Name" placeholder="Masukan Data Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="born">Tanggal Lahir</label>
                                <input type="date" name="born" value="`+ data.born +`" class="form-control edit_input"
                                    aria-describedby="Masukan Data Born" placeholder="Masukan Data Born">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="sex">Sex</label>
                            <select class="form-control op_select" id="sex_sel" name="sex">
                                <option disabled selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="departemen_id">Jurusan</label>
                                <select class="form-control op_select" id="dept_sel" name="departemen_id">
                                    <option disabled selected>select Departement</option>
                                    @foreach ($data ['dept'] as $d)
                                    <option value="{{$d->id}}">{{$d->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Pilih Semester</label>
                                <select name="semester" class="form-control op_select" id="semes_sel">
                                    <option selected disabled>-- Pilih --</option>
                                    <option value="1">I Satu</option>
                                    <option value="3">III Tiga</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alasan Masuk Pena</label>
                                <textarea name="cause" class="form-control edit_input" id="cause_sel"
                                    rows="12"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="hidden" name="pic_update" value="`+ data.pic +`">
                                    <input type="file" class="custom-file-input op_select" name="pic" id="">
                                    <label class="custom-file-label" for="pic_select">Pilih Gambar</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                `);
                $('.modal-footer').html('');
                $('.modal-footer').append(`
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                `);
                $('#univModal').modal('show');
                $('#sex_sel').val(data.sex);
                $('#dept_sel').val(data.departemen_id);
                $('#semes_sel').val(data.semester);
                $('#cause_sel').val(data.cause);
                $('.edit_input').prop('readonly',true);
                $('.op_select').prop('disabled',true);
            })
        });

        $(document).on('click', '#btn_enable', function()
        {
            $('.edit_input').prop('readonly',false);
            $('.op_select').prop('disabled',false);
            $('#first_focus').focus();
        })

        $(document).on('click','#del-data',function(){
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