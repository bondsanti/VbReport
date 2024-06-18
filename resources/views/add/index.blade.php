@extends('layouts.app')

@section('title', 'เพิ่มรายการใหม่')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row md-2">
                <div class="col-sm-6">
                    <h3 class="m-0">เพิ่มรายการใหม่</h3>
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
                            <h3 class="card-title">เพิ่มรายการใหม่</h3>
                        </div>
                        <form action="" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="name_team" class="form-label">
                                                <font style="color:red">*</font> ชื่อทีม
                                            </label>
                                            <Select class="form-control" required>
                                                <option value="">โปรดเลือก</option>
                                            </Select>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">
                                                <font style="color:red">*</font> ชื่อลูกค้า
                                            </label>
                                            <input type="text" name="name_th" id="name_th" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">
                                                <font style="color:red"> * </font> ประเภท
                                            </label>
                                            <div class="col-sm-12">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gridRadios"
                                                        id="gridRadios1" value="option1">
                                                    <label class="form-check-label" for="gridRadios1">
                                                        มีสวัสดิการ
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gridRadios"
                                                        id="gridRadios2" value="option2">
                                                    <label class="form-check-label" for="gridRadios2">
                                                        ไม่มีสวัสดิการ
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gridRadios"
                                                        id="gridRadios3" value="option3">
                                                    <label class="form-check-label" for="gridRadios3">
                                                        เจ้าของกิจการ
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gridRadios"
                                                        id="gridRadios4" value="option4">
                                                    <label class="form-check-label" for="gridRadios4">
                                                        อื่นๆ
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">
                                                Sourcecode
                                            </label>
                                            <input type="text" name="name_th" id="name_th" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="sale_id" class="form-label">
                                                ผู้วิเคราะห์
                                            </label>
                                            <input type="text" class="form-control" name="sale_id" id="sale_id">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">
                                                หมายเหตุ (วิเคราะห์)
                                            </label>
                                            <textarea name="remarkanalyst" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="sale_id" class="form-label">
                                                <font style="color:red">*</font> Sale ID
                                            </label>
                                            <input type="text" class="form-control" name="sale_id" id="sale_id" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">
                                                <font style="color: red">*</font> สถานที่ทำงาน
                                            </label>
                                            <input type="text" name="" id="" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">
                                                ฐานเงินเดือน
                                            </label>
                                            <input type="text" name="name_th" id="name_th" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">
                                                วันที่รับเอกสาร
                                            </label>
                                            <input type="date" name="name_th" id="name_th" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label"> ลักษณะอาศัย</label>
                                            <div class="col-sm-12">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gridRadios"
                                                        id="gridRadios10" value="option10">
                                                    <label class="form-check-label" for="gridRadios10">
                                                        อยู่เอง
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gridRadios"
                                                        id="gridRadios20" value="option20">
                                                    <label class="form-check-label" for="gridRadios20">
                                                        การันตี
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="sale_id" class="form-label">
                                                Admin Page ID
                                            </label>
                                            <input type="text" class="form-control" name="sale_id" id="sale_id">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">เบอร์โทรศัพท์</label>
                                            <input type="text" class="form-control" name="" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">
                                                รายได้สุทธิ
                                            </label>
                                            <input type="text" name="name_th" id="name_th" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">
                                                วันที่ส่งงาน
                                            </label>
                                            <input type="date" name="name_th" id="name_th" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">
                                                ชื่อโครงการ
                                            </label>
                                            <Select class="form-control">
                                                <option value="">โปรดเลือก</option>
                                            </Select>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="col-form-label">
                                                <font style="color:red"> * </font> ผลิตภัณฑ์ที่สมัคร
                                            </label>
                                            <div class="col-sm-12">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                                        id="checkbox1" value="option1">
                                                    <label class="form-check-label" for="checkbox1">
                                                        ธอส
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                                        id="checkbox2" value="option2">
                                                    <label class="form-check-label" for="checkbox2">
                                                        TBANK
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                                        id="checkbox3" value="option3">
                                                    <label class="form-check-label" for="checkbox3">
                                                        GSB
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                                        id="checkbox4" value="option4">
                                                    <label class="form-check-label" for="checkbox4">
                                                        ISALAM
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                                        id="checkbox5" value="option5">
                                                    <label class="form-check-label" for="checkbox4">
                                                        BAY
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                                        id="checkbox6" value="option6">
                                                    <label class="form-check-label" for="checkbox6">
                                                        BBL
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                                        id="checkbox7" value="option7">
                                                    <label class="form-check-label" for="checkbox7">
                                                        KK
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                                        id="checkbox8" value="option8">
                                                    <label class="form-check-label" for="checkbox8">
                                                        TTB
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                                        id="checkbox9" value="option9">
                                                    <label class="form-check-label" for="checkbox9">
                                                        KBANK
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                                        id="checkbox10" value="option10">
                                                    <label class="form-check-label" for="checkbox10">
                                                        SCB
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                                        id="checkbox11" value="option11">
                                                    <label class="form-check-label" for="checkbox11">
                                                        CIMB
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                                        id="checkbox12" value="option12">
                                                    <label class="form-check-label" for="checkbox12">
                                                        UOB
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                                        id="checkbox13" value="option13">
                                                    <label class="form-check-label" for="checkbox13">
                                                        TMB
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                                        id="checkbox14" value="option14">
                                                    <label class="form-check-label" for="checkbox14">
                                                        KTB
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                                        id="checkbox15" value="option15">
                                                    <label class="form-check-label" for="checkbox15">
                                                        LHBANK
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                                        id="checkbox16" value="option16">
                                                    <label class="form-check-label" for="checkbox16">
                                                        เงินสด
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer text-center">
                                    <button type="submit" class="btn bg-gradient-success"><i class="fa fa-save"></i>
                                        บันทึก</button>
                                    {{-- <a href="" type="button" class="btn bg-gradient-danger"><i
                                            class="fa fa-refresh"></i> เคลียร์</a> --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
