@extends('layouts.app')

@section('title', 'Add Agent')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row md-2">
                <div class="col-sm-6">
                    <h3 class="m-0">เพิ่มข้อมูล Agent</h3>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-outline card-info">
                            <h3 class="card-title">เพิ่มข้อมูล</h3>
                        </div>
                        <form action="">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">ชื่อทีม</label>
                                            <select class="form-control" name="" id="">
                                                <option value="">โปรดเลือก</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">ตำแหน่ง</label>
                                            <select class="form-control" name="" id="">
                                                <option value="">โปรดเลือก</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Name - Lastname</label>
                                            <input type="text" class="form-control" name="" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Start Date</label>
                                            <input type="date" class="form-control" name="" id="">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">Manager</label>
                                            <select class="form-control" name="" id="">
                                                <option value="">โปรดเลือก</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Team Leader</label>
                                            <select class="form-control" name="" id="">
                                                <option value="">โปรดเลือก</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Email</label>
                                            <input type="text" class="form-control" name="" id="">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">Sale ID</label>
                                            <input type="text" class="form-control" name="" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">ชื่อ - นามสกุล</label>
                                            <input type="text" class="form-control" name="" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">เพจ</label>
                                            <input type="text" class="form-control" name="" id="">
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                </div>
                                <div class="box-footer text-center">
                                    <button type="submit" class="btn bg-gradient-success"><i class="fa fa-save"></i>
                                        บันทึก</button>
                                    <a href="{{ route('agent') }}" type="button" class="btn bg-gradient-danger"><i
                                            class="fa fa-refresh"></i> ย้อนกลับ </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
@endsection
