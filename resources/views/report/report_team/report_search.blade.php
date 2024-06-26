@extends('layouts.app')

@section('title', 'Report Team')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row md-2">
                <div class="col-sm-6">
                    <h3 class="m-0">รายงานทีมวิเคราะห์</h3>
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
                            <h3 class="card-title">ค้นหารายงานทีมวิเคราะห์</h3>
                        </div>
                        <form action="{{ route('report.search') }}" method="POST">
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
                                    <a href="{{ route('report') }}" type="button" class="btn bg-gradient-danger"><i
                                            class="fa fa-refresh"></i> เคลียร์</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-12">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
