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
                                        <th>Pic</th>
                                        <th>Registrasion Number</th>
                                        <th>Full Name</th>
                                        <th>Born</th>
                                        <th>Sex</th>
                                        <th>Departement</th>
                                        <th>Semester</th>
                                        <th>Cause</th>
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
                                        <td>{{$d->pic}}</td>
                                        <td>{{$d->regis_number}}</td>
                                        <td>{{$d->name}}</td>
                                        <td>{{$d->born}}</td>
                                        <td>{{$d->sex}}</td>
                                        <td>{{$d->departement_role->name}}</td>
                                        <td>{{$d->semester}}</td>
                                        <td>{{$d->cause}}</td>
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
                        <form autocomplete="off" action="{{route('new_member.create')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="pic">Pic</label>
                                        <input type="text" name="pic" class="form-control"
                                            aria-describedby="Masukan Data Pic" placeholder="Masukan Data Pic">
                                        @error('pic')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <br>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="regis_number">Regist Number</label>
                                        <input type="text" name="regis_number" class="form-control"
                                            aria-describedby="Masukan Data Regist Number"
                                            placeholder="Masukan Data Regist Number">
                                        @error('regis_number')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control"
                                            aria-describedby="Masukan Data Name" placeholder="Masukan Data Name">
                                        @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <br>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="born">Born</label>
                                        <input type="date" name="born" class="form-control"
                                            aria-describedby="Masukan Data Born" placeholder="Masukan Data Born">
                                        @error('born')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="sex">Sex</label>
                                    <select class="form-control" name="sex">
                                        <option disabled selected>select Sex</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    @error('sex')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="departemen_id">Departement</label>
                                        <select class="form-control" name="departemen_id">
                                            <option disabled selected>select Departement</option>
                                            @foreach ($data ['dept'] as $d)
                                            <option value="{{$d->id}}">{{$d->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('departemen_id')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="semester">Semester</label>
                                        <input type="text" name="semester" class="form-control"
                                            aria-describedby="Masukan Data Semester"
                                            placeholder="Masukan Data Semester">
                                        @error('semester')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <br>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="cause">Cause</label>
                                        <input type="text" name="cause" class="form-control"
                                            aria-describedby="Masukan Data Cause" placeholder="Masukan Data Cause">
                                        @error('cause')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
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
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="pic">Pic</label>
                            <input type="hidden" name="id" value="`+ data.id +`">
                            <input type="text" name="pic" id="pic" class="form-control"
                                aria-describedby="Masukan Data Pic" value="`+ data.pic +`">
                            <br>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="regis_number">Regist Number</label>
                            <input type="text" name="regis_number" id="regis_number" class="form-control"
                                aria-describedby="Masukan Data Regist Number"
                                value="`+ data.regis_number +`">
                            <br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                aria-describedby="Masukan Data Name" value="`+ data.name +`">
                            <br>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="born">Born</label>
                            <input type="date" name="born" id="born" class="form-control"
                                aria-describedby="Masukan Data Born" value="`+ data.born +`">
                            <br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="sex">Sex</label>
                        <select class="form-control" name="sex" id="sex">
                            <option disabled selected>select Sex</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="departemen_id">Departement</label>
                            <select class="form-control" name="departemen_id" id="departemen_id">
                                <option disabled selected>select Departement</option>
                                @foreach ($data ['dept'] as $d)
                                <option value="{{$d->id}}">{{$d->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <input type="text" name="semester" id="semester" class="form-control"
                                aria-describedby="Masukan Data Semester"
                                value="`+ data.semester +`">
                            <br>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="cause">Cause</label>
                            <input type="text" name="cause" id="cause" class="form-control"
                                aria-describedby="Masukan Data Cause" value="`+ data.cause +`">
                            <br>
                        </div>
                    </div>
                </div>
                `);
                $('.modal-footer').html('');
                $('.modal-footer').append(`
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                `);
                $('#univModal').modal('show');
                $('#sex').val(data.sex);
                $('#departemen_id').val(data.departemen_id);
            })
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