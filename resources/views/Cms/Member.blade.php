@extends('Base.Dash')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h4 class="m-0 font-weight-bold text-primary">Data Member</h4>
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
                                        <th>No. Registrasi</th>
                                        <th>Created at</th>
                                        <th>Updated at</th>
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
                                        <td>{{$d->regist_number}}</td>
                                        <td>{{date('d-M-Y', strtotime($d->created_at))}}</td>
                                        <td>{{date('d-M-Y', strtotime($d->updated_at))}}</td>
                                        <td>
                                            <button data-id="{{$d->id}}" id="detail-data"
                                                class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></button>
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
                        <form autocomplete="off" action="{{route('member.create')}}" enctype="multipart/form-data"
                            method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nomor Registrasi</label>
                                        <input type="text" name="regist_number" class="form-control">
                                        <small class="form-text text-muted">Masukan nomor registrasi.</small>
                                        @error('regist_number')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="name" class="form-control">
                                        <small class="form-text text-muted">Masukan nama.</small>
                                        @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Tgl Lahir</label>
                                        <input type="date" name="born" class="form-control">
                                        <small class="form-text text-muted">Masukan tanggal lahir.</small>
                                        @error('born')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="select2SinglePlaceholder">Jenis Kelamin</label>
                                        <select class="form-control" name="sex" id="select2SinglePlaceholder">
                                            <option value="" selected disabled>Select</option>
                                            <option value="Laki-laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        <small class="form-text text-muted">Pilih Data.</small>
                                        @error('sex')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="select2SinglePlaceholder">Pilih Jurusan</label>
                                        <select class="form-control" name="departement_id"
                                            id="select2SinglePlaceholder">
                                            <option value="" selected disabled>Select</option>
                                            @foreach ($data['departement'] as $d)
                                            <option value="{{$d->id}}">{{$d->name}}</option>
                                            @endforeach
                                        </select>
                                        <small class="form-text text-muted">Pilih Data.</small>
                                        @error('departement_id')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="select2SinglePlaceholder">Pilih Generasi</label>
                                        <select class="form-control" name="generation_id" id="select2SinglePlaceholder">
                                            <option value="" selected disabled>Select</option>
                                            @foreach ($data['generation'] as $d)
                                            <option value="{{$d->id}}">{{$d->generation}}</option>
                                            @endforeach
                                        </select>
                                        <small class="form-text text-muted">Pilih Data.</small>
                                        @error('generation_id')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="select2SinglePlaceholder">Pilih Posisi Jabatan</label>
                                        <select class="form-control" name="position_id" id="select2SinglePlaceholder">
                                            <option value="" selected disabled>Select</option>
                                            @foreach ($data['position'] as $d)
                                            <option value="{{$d->id}}">{{$d->position_name}}</option>
                                            @endforeach
                                        </select>
                                        <small class="form-text text-muted">Pilih Data.</small>
                                        @error('position_id')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="custom-file" style="margin-top: 30px;">
                                        <input name="pic" type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                                        <small class="form-text text-muted">Pilih Data.</small>
                                        @error('pic')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-lg-5">Submit</button>
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

        $('#table_contoh').DataTable();

        $(document).on('click','#detail-data',function(){
            let dataId = $(this).data('id');
            let url = "getspecdata/" + dataId;
            
            $.get(url, function(data){
                $('.modal-title').html('Perubahan Data');
                $('#edit_form').attr('action', `{{route('member.update')}}`);
                $('.modal-body').html('');
                $('.modal-body').append(`
                <div class='row'>
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="row text-center">
                            <div class="col-md-12">
                            <input name="id" value="`+ data.id +`" type="hidden">
                                <img src="{{ asset('storage/image/member/`+ data.pic +`') }}"
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
                                    <label>Nomor Registrasi</label>
                                    <input type="text" id="first_focus" name="regist_number" value="`+ data.regist_number +`" class="form-control edit_input">
                                    <small class="form-text text-muted">Masukan nomor registrasi.</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="name" value="`+ data.name +`" class="form-control edit_input">
                                    <small class="form-text text-muted">Masukan nomor nama.</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tgl Lahir</label>
                                    <input type="date" name="born" value="`+ data.born +`" class="form-control edit_input">
                                    <small class="form-text text-muted">Masukan nomor tgl lahir.</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="select2SinglePlaceholder">Jenis Kelamin</label>
                                    <select class="form-control edit_input" name="sex" id="sex_select">
                                        <option value="Laki-laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <small class="form-text text-muted">Pilih Data.</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="departement_select">Pilih Jurusan</label>
                                    <select class="form-control edit_input" name="departement_id"
                                        id="departement_select">
                                        <option value="" selected disabled>Select</option>
                                        @foreach ($data['departement'] as $d)
                                        <option value="{{$d->id}}">{{$d->name}}</option>
                                        @endforeach
                                    </select>
                                    <small class="form-text text-muted">Pilih Data.</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="generation_select">Pilih Generasi</label>
                                    <select class="form-control edit_input" name="generation_id" id="generation_select">
                                        <option value="" selected disabled>Select</option>
                                        @foreach ($data['generation'] as $d)
                                        <option value="{{$d->id}}">{{$d->generation}}</option>
                                        @endforeach
                                    </select>
                                    <small class="form-text text-muted">Pilih Data.</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="position_select">Pilih Posisi Jabatan</label>
                                    <select class="form-control edit_input" name="position_id" id="position_select">
                                        <option value="" selected disabled>Select</option>
                                        @foreach ($data['position'] as $d)
                                        <option value="{{$d->id}}">{{$d->position_name}}</option>
                                        @endforeach
                                    </select>
                                    <small class="form-text text-muted">Pilih Data.</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="custom-file" style="margin-top: 30px;">
                                    <input name="pic" type="file" class="custom-file-input" id="pic_select">
                                    <label class="custom-file-label" for="pic_select">Pilih Gambar</label>
                                    <small class="form-text text-danger">Pilih gambar baru, atau abaikan jika gambar tidak ingin dirubah.</small>
                                    <input type="hidden" name="pic_update" value="`+ data.pic +`">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                `);
                $('#sex_select').val(data.sex);
                $('#departement_select').val(data.departement_id);
                $('#generation_select').val(data.generation_id);
                $('#position_select').val(data.position_id);
                $('.modal-footer').html('');
                $('.modal-footer').append(`
                    <div class="mt-lg-4">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                `);
                $('.edit_input').prop('readonly',true);
                $('#pic_select').prop('disabled',true);
                $('#univModal').modal('show');
            })
        });

        $(document).on('click','#btn_enable',function()
        {
            $('.edit_input').prop('readonly',false);
            $('#pic_select').prop('disabled',false);
            $('#first_focus').focus();
        });

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