@extends('layouts.app')

@section('title', 'Report P ZEN Team')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row md-2">
                <div class="col-sm-6">
                    <h3 class="m-0"> รายงาน P Zen Team </h3>
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
                            <h3 class="card-title">ค้นหารายงาน P Zen Team</h3>
                        </div>
                        <form action="{{ route('zen.search') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-6 d-flex align-items-center">
                                                <label for="start-date" class="form-label me-4"
                                                    style="height: 16px; width: 50px;">วันที่</label>
                                                <input type="date" id="start-date" class="form-control"
                                                    name="start_date">
                                            </div>
                                            <div class="col-sm-6 d-flex align-items-center">
                                                <label for="end-date" class="form-label me-4"
                                                    style="height: 16px; width: 50px;">ถึงวันที่</label>&nbsp;
                                                <input type="date" id="end-date" class="form-control" name="end_date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3"></div>
                                </div>
                                <br>
                                <div class="box-footer text-center">
                                    <button type="submit" class="btn bg-gradient-success"><i class="fa fa-search"></i>
                                        ค้นหา</button>
                                    <a href="{{ route('zen') }}" type="button" class="btn bg-gradient-danger"><i
                                            class="fa fa-refresh"></i> เคลียร์</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header card-outline card-info">
                                    <h3 class="card-title"> รายงาน P Zen Team </h3>
                                </div>
                                <div class="card-body">
                                    <table id="table" class="table table-hover table-striped text-center" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ลูกทีม</th>
                                                <th>Received(Application)</th>
                                                <th>Pending</th>
                                                <th>Waiting</th>
                                                <th>Pre-Approved</th>
                                                <th>Pre-Approved Analyst</th>
                                                <th>Approved</th>
                                                <th>Rejected Analyst</th>
                                                <th>Rejected</th>
                                                <th>Canceled</th>
                                                <th>Returned</th>
                                                <th>Contract</th>
                                                <th>Mortgaged</th>
                                                <th>วงเงินอนุมัติ ไม่รวมประกัน</th>
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
        </div>
    </section>
@endsection
@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.15.6/xlsx.full.min.js"></script>
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
                "targets": [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]
            }]
        });
    });
</script>
@endpush
