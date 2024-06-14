@extends('layouts.app')

@section('title', 'Agent')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row md-2">
                <div class="col-sm-6">
                    <h3 class="m-0">Agent</h3>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-outline  caard-info">
                            <h3 class="card-title">E S A U Performance Evaluation Report ,
                                <a href="{{ route('agent.add') }}" type="button" class="btn btn-primary">เพิ่มข้อมูล</a>
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <table id="table" class="table table-hover table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th>ชื่อ- นามสกุล</th>
                                            <th>Team</th>
                                            <th>Position</th>
                                            <th>Page</th>
                                            <th>Join Date</th>
                                            <th>Resign Date</th>
                                            <th>Code</th>
                                            <th>Sup Code</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
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
