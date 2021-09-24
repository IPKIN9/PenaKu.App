@extends('Base.Dash')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h4 class="m-0 font-weight-bold text-primary">Data Contoh</h4>
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
                                        <th>No Registrasi</th>
                                        <th>Nama</th>
                                        <th>Created at</th>
                                        <th>Updated at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach ($data as $d)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{$no++}}</td>
                                        <td>{{$d->regis_number}}</td>
                                        <td>{{$d->name}}</td>
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
                console.log(data);
               if (!$.trim(data)) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Data Kosong',
                });
               } else {
                $('.modal-title').html('Detail Pertanyaan');
                $('#edit_form').attr('action', `#`);
                $('.modal-body').html('');
                $('.modal-body').append(`
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-lg-12" id='div_content'>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                `);
                $('.modal-footer').html('');
                $('.modal-footer').append(`
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                `);
                $('#div_content').html('');
                $.each(data, function(i,d)
                {
                    $('#div_content').append(`
                    <div class="row text-center">
                        <div class="col-md-12 mt-4">
                            <div class="form-group">
                            <label for=""><i class="far fa-question-circle"></i> `+ d.question_rerol.questions +`</label>
                            <textarea style="
                            white-space: normal;
                            text-align: justify;
                            -moz-text-align-last: center; /* Firefox 12+ */
                            text-align-last: center;
                            " class="form-control" value="Test" id="anw`+d.id+`" readonly="true" id="" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                    `);
                    $('#anw'+d.id).val(d.answer)
                });
                $('#univModal').modal('show');
               }
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