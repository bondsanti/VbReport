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
                                        <div class="form-group">
                                            <label class="form-label" for="">ผู้วิเคราะห์</label>
                                            <input type="text" class="form-control" name="" id=""
                                                value="หลิว" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="form-label" for="">ชื่อลูกค้า</label>
                                            <input type="text" class="form-control" name="" id=""
                                                value="ณัฎฐนิช  ชุบกิ่ง" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">สถานที่ทำงาน</label>
                                            <textarea class="form-control" name="" id="" disabled>บริษัท สกิลพาวเวอร์ เซอร์วิส (ประเทศไทย) จำกัด</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="form-label" for="">Sale ID</label>
                                            <input type="text" class="form-control" name="" id=""
                                                value="6501202645" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">ประเภทรายได้</label>
                                            <select class="form-control" name="" id="">
                                                <option value="ไม่มีสวัสดิการ">ไม่มีสวัสดิการ</option>
                                                <option value="มีสวัสดิการ">มีสวัสดิการ</option>
                                                <option value="เจ้าของกิจการ">เจ้าของกิจการ</option>
                                                <option value="อื่นๆ">อื่นๆ</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">รหัสไปรษณีย์</label>
                                            <input type="text" class="form-control" name="" id=""
                                                value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">ชื่อโครงการ</label>
                                            <select class="form-control" name="" id="">
                                                <option value="ไม่มีสวัสดิการ">โปรดเลือก</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">หมายเหตุ (นิติกรรม)</label>
                                            <textarea class="form-control" name="" id=""></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">วันที่รับเอกสาร</label>
                                            <input type="date" class="form-control" name="" id=""
                                                value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="form-label" for="">ฐานเงินเดือน</label>
                                            <input type="text" class="form-control" name="" id=""
                                                value="32001">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">Tel.</label>
                                            <input type="text" class="form-control" name="" id=""
                                                value="0896921982" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">ราคาซื้อขาย</label>
                                            <input type="text" class="form-control" name="" id=""
                                                value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">หมายเหตุ (วิเคราะห์)</label>
                                            <textarea class="form-control" name="" id=""></textarea>
                                        </div>
p 
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="form-label" for="">รายได้สุทธิ</label>
                                            <input type="text" class="form-control" name="" id=""
                                                value="30980">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="">เลขทะเบียนบ้าน</label>
                                                    <input type="text" class="form-control" name=""
                                                        id="" value="">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="">เลขห้อง</label>
                                                    <input type="text" class="form-control" name=""
                                                        id="" value="">
                                                </div>
                                            </div>
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
                                                        id="checkbox1" value="option1" checked>
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
                                    <a href="{{route('lists')}}" type="button" class="btn bg-gradient-danger"><i
                                            class="fa fa-refresh"></i> ย้อนกลับ</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
