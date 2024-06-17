@extends('layouts.app')

@section('title', 'แก้ไขข้อมูล')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row md-2">
                <div class="col-sm-6">
                    <h3 class="m-0">รายงาน แก้ไขข้อมูล</h3>
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
                            <h3 class="card-title">รายการ แก้ไขข้อมูล</h3>
                        </div>
                        <form action="">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">ชื่อทีม</label>
                                            <select class="form-control" name="" id="">
                                                <option value="">UVB01 ศิระ</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Team ID</label>
                                            <select class="form-control" name="" id="">
                                                <option value="">โปรดเลือก</option>
                                                <option value="VBDI">VBDI</option>
                                                <option value="VBDO">VBDO</option>
                                                <option value="VBDA">VBDA</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">ผู้วิเคราะห์</label>
                                            <input type="text" class="form-control" name="" id=""
                                                value="หลิว">
                                        </div>
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
                                                <option value="">โปรดเลือก</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">หมายเหตุ (นิติกรรม)</label>
                                            <textarea class="form-control" name="" id=""></textarea>
                                        </div>


                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="form-label" for="">Admin Page ID</label>
                                            <input type="text" class="form-control" name="" id=""
                                                value="6501202645">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">Team Name</label>
                                            <input type="text" class="form-control" name="" id=""
                                                value=" ">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">บัตรประชาชน <font style="color:red">
                                                    (โชว์ที่หน้าระบบเช่า)</font></label>
                                            <input type="file" class="form-control" name="" id=""
                                                value=" ">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">ฐานเงินเดือน (บาท)</label>
                                            <input type="text" class="form-control" name="" id=""
                                                value="32001">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">Tel.</label>
                                            <input type="text" class="form-control" name="" id=""
                                                value="0896921982">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">ราคาซื้อขาย(บาท)</label>
                                            <input type="text" class="form-control" name="" id=""
                                                value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">หมายเหตุ (วิเคราะห์)</label>
                                            <textarea class="form-control" name="" id=""></textarea>
                                        </div>


                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="form-label" for="">Sale ID</label>
                                            <input type="text" class="form-control" name="" id=""
                                                value="6501202645">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">ชื่อลูกค้า</label>
                                            <input type="text" class="form-control" name="" id=""
                                                value="ณัฎฐนิช  ชุบกิ่ง">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">สถานที่ทำงาน</label>
                                            <input type="text" class="form-control" name="" id=""
                                                value="บริษัท สกิลพาวเวอร์ เซอร์วิส (ประเทศไทย) จำกัด">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">รายได้สุทธิ (บาท)</label>
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
                                        <div class="form-group">
                                            <label class="form-label" for="">ลักษณะอาศัย</label>
                                            <select class="form-control" name="" id="">
                                                <option value="">โปรดเลือก</option>
                                                <option value="อยู่เอง">อยู่เอง</option>
                                                <option value="การันตี">การันตี</option>
                                                <option value="การันตีรับล่วงหน้า">การันตีรับล่วงหน้า</option>
                                                <option value="ฝากเช่า">ฝากเช่า</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="form-label" for="">ธนาคารที่ยื่นกู้</label>
                                            <select class="form-control" name="" id="">
                                                <option value="">โปรดเลือก</option>
                                                <option value="KK">KK</option>
                                                <option value="LHBANK">LHBANK</option>
                                                <option value="SCB">SCB</option>
                                                <option value="BBL">BBL</option>
                                                <option value="KTB">KTB</option>
                                                <option value="BAY">BAY</option>
                                                <option value="KBANK">KBANK</option>
                                                <option value="CIMB">CIMB</option>
                                                <option value="TMB">TMB</option>
                                                <option value="UOB">UOB</option>
                                                <option value="GSB">GSB</option>
                                                <option value="ธอส">ธอส</option>
                                                <option value="TBANK">TBANK</option>
                                                <option value="เงินสด">เงินสด</option>
                                                <option value="TTB">TTB</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">Result Date</label>
                                            <input type="date" class="form-control" name="" id=""
                                                value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">วงเงินอนุมัติ
                                                ไม่รวมประกัน(บาท)</label>
                                            <input type="text" class="form-control" name="" id=""
                                                value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">วันที่เเจ้งโอน</label>
                                            <input type="date" class="form-control" name="" id=""
                                                value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">Reject Code</label>
                                            <select class="form-control" name="" id="">
                                                <option value="">โปรดเลือก</option>
                                                <option value="ไม่ผ่านเกณฑ์วิเคราะห์">ไม่ผ่านเกณฑ์วิเคราะห์</option>
                                                <option value="รายได้ไม่พอภาระหนี้สูง">รายได้ไม่พอภาระหนี้สูง</option>
                                                <option value="ประวัติหรือเครดิตไม่ดี">ประวัติหรือเครดิตไม่ดี</option>
                                                <option value="ไม่ผ่านเกณฑ์ธนาคาร">ไม่ผ่านเกณฑ์ธนาคาร</option>
                                                <option value="อื่นๆ">อื่นๆ</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">ขอเวลา เพิ่ม</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Waiting
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="form-label" for="">สาขา</label>
                                            <input type="text" class="form-control" name="" id=""
                                                value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">วงเงินอนุมัติ 1 (บาท)</label>
                                            <input type="text" class="form-control" name="" id=""
                                                value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">Type</label>
                                            <input type="text" class="form-control" name="" id=""
                                                value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">Status</label>
                                            <select class="form-control" name="" id="">
                                                <option value="">โปรดเลือก</option>
                                                <option value="Received">Received</option>
                                                <option value="Pending">Pending</option>
                                                <option value="Waiting">Waiting</option>
                                                <option value="รอเปิดภาระ">รอเปิดภาระ</option>
                                                <option value="รอบูโรเปลี่ยน หลังปิดภาระ">รอบูโรเปลี่ยน หลังปิดภาระ
                                                </option>
                                                <option value="Pre-Approved Analyst">Pre-Approved Analyst</option>
                                                <option value="Pre-Approved Bank">Pre-Approved Bank</option>
                                                <option value="Req Doc By Bank">Req Doc By Bank</option>
                                                <option value="Approved">Approved</option>
                                                <option value="Approved-Cancel">Approved-Cancel</option>
                                                <option value="Rejected Analyst">Rejected Analyst</option>
                                                <option value="Rejected Bank">Rejected Bank</option>
                                                <option value="Canceled">Canceled</option>
                                                <option value="Returned">Returned</option>
                                                <option value="Deducted">Deducted</option>
                                                <option value="Mortgaged">Mortgaged</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">Cancel Code</label>
                                            <select class="form-control" name="" id="">
                                                <option value="">โปรดเลือก</option>
                                                <option value="เงินส่วนลดไม่พอ">เงินส่วนลดไม่พอ</option>
                                                <option value="ไม่มีทำเลที่น่าสนใจ">ไม่มีทำเลที่น่าสนใจ</option>
                                                <option value="ปัญหาครอบครัว">ปัญหาครอบครัว</option>
                                                <option value="อื่นๆ">อื่นๆ</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">ขอเวลา เพิ่ม</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        ติดภาระ
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="form-label" for="">วันที่ส่งงานเข้าธนาคาร</label>
                                            <input type="date" class="form-control" name="" id=""
                                                value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">วงเงินอนุมัติ 2 (บาท)</label>
                                            <input type="text" class="form-control" name="" id=""
                                                value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">Result Reason</label>
                                            <input type="text" class="form-control" name=""
                                                id=""></input>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">สถานะเเจ้งโอน</label>
                                            <select class="form-control" name="" id="">
                                                <option value="">โปรดเลือก</option>
                                                <option value="แจ้งโอน">แจ้งโอน</option>
                                                <option value="โอนสำเร็จ">โอนสำเร็จ</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="">Waiting Code</label>
                                            <select class="form-control" name="" id="">
                                                <option value="">โปรดเลือก</option>
                                                <option value="ติดตามเอกสารเพิ่มเติม">ติดตามเอกสารเพิ่มเติม</option>
                                                <option value="รอสรุปโครงการ">รอสรุปโครงการ</option>
                                                <option value="ส่วนลด(Margin)">ส่วนลด(Margin)</option>
                                                <option value="ติดตามลูกค้าไม่ได้">ติดตามลูกค้าไม่ได้</option>
                                                <option value="อื่นๆ">อื่นๆ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                </div>
                                <div class="box-footer text-center">
                                    <button type="submit" class="btn bg-gradient-success"><i class="fa fa-save"></i>
                                        บันทึก</button>
                                    <a href="{{ route('lists') }}" type="button" class="btn bg-gradient-danger"><i
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
