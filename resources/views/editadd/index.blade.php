@extends('layouts.app')

@section('title', 'เพิ่ม/แก้ไขทีม')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row md-2">
                <div class="col-sm-6">
                    <h3 class="m-0">เพิ่ม / แก้ไขทีม</h3>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-outline card-info">
                            <h3 class="card-title">เพิ่ม / แก้ไขทีม &nbsp;&nbsp;
                                <a class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">
                                    เพิ่มชื่อทีมใหม่</a>
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <table id="table" class="table table-hover table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>ชื่อทีม</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">เพิ่มชื่อทีมใหม่</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="" id="">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<script>
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#table').DataTable({
            'paging': false,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': false,
            'autoWidth': false,
            "responsive": true,
            "columnDefs": [{
                "orderable": false,
                "targets": [0, 1, 2, 3]
            }]
        });
    });
</script>
