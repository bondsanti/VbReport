@extends('layouts.app')

@section('title', 'แสดงข้อมูล')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row md-2">
                <div class="col-sm-6">
                    <h3 class="m-0">รายงาน ข้อมูล</h3>
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
                            <h3 class="card-title">รายการข้อมูล</h3>
                        </div>
                        <form action="">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">ชื่อทีม</label>
                                            <select class="form-control" name="" id="" disabled>
                                                <option value="">UVB01 ศิระ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="form-label" for="">ชื่อลูกค้า</label>
                                            <input type="text" class="form-control" name="" id="" value="ณัฎฐนิช  ชุบกิ่ง"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="form-label" for="">Sale ID</label>
                                            <input type="text" class="form-control" name="" id="" value="6501202645" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
