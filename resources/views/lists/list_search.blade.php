@extends('layouts.app')

@section('title', 'ค้นหารายการ')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row md-2">
                <div class="col-sm-6">
                    <h3 class="m-0">รายงาน ค้นหา</h3>
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
                            <h3 class="card-title">ค้นหารายกาย</h3>
                        </div>
                        <form action="{{ route('lists.search') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-3 d-flex align-items-center">
                                            <label for="start-date" class="form-label me-4"
                                                style="height: 16px; width: 50px;">วันที่</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option value="Result Date">Result Date</option>
                                                <option value="Sent Date">Sent Date</option>
                                                <option value="Received Date">Received Date</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3 d-flex align-items-center">
                                            <input type="date" id="start-date" class="form-control" name="start_date">
                                        </div>
                                        <div class="col-sm-3 d-flex align-items-center">
                                            <label for="end-date" class="form-label me-4"
                                                style="height: 16px; width: 50px;">ถึงวันที่</label>&nbsp;
                                            <input type="date" id="end-date" class="form-control" name="end_date">
                                        </div>
                                        <div class="col-sm-3 d-flex align-items-center">
                                            <label for="team" class="form-label me-4"
                                                style="height: 16px; width: 50px;">Team</label>&nbsp;
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option value="All">All</option>
                                                <option value="VBDI">VBDI</option>
                                                <option value="VBDO">VBDO</option>
                                                <option value="VBDA">VBDA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3 d-flex align-items-center">
                                            <label for="team" class="form-label me-4"
                                                style="height: 16px; width: 50px;">Team</label>&nbsp;
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option value="All">All</option>
                                                <option value="VBDI">VBDI</option>
                                                <option value="VBDO">VBDO</option>
                                                <option value="VBDA">VBDA</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3 d-flex align-items-center">
                                            <label for="team" class="form-label me-4"
                                                style="height: 16px; width: 60px;">ชื่อลูกค้า</label>&nbsp;
                                            <input type="text" class="form-control" name="name_team" id="name_team">
                                        </div>
                                        <div class="col-sm-3 d-flex align-items-center">
                                            <label for="team" class="form-label me-4"
                                                style="height: 16px; width: 50px;">Sale ID</label>&nbsp;
                                            <input type="text" class="form-control" name="sale_id" id="sale_id">
                                        </div>
                                        <div class="col-sm-3 d-flex align-items-center">
                                            <label for="team" class="form-label me-4"
                                                style="height: 16px; width: 100px;">Cancel Code</label>&nbsp;
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option value=" ">ไม่ระบุ</option>
                                                <option value="เงินส่วนลดไม่พอ">เงินส่วนลดไม่พอ</option>
                                                <option value="ไม่มีทำเลที่น่าสนใจ">ไม่มีทำเลที่น่าสนใจ</option>
                                                <option value="ปัญหาครอบครัว">ปัญหาครอบครัว</option>
                                                <option value="อื่นๆ">อื่นๆ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3 d-flex align-items-center">
                                            <label for="team" class="form-label me-4"
                                                style="height: 16px; width: 50px;">โครงการ</label>&nbsp;
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option value=" ">All Project</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3 d-flex align-items-center">
                                            <label for="team" class="form-label me-4"
                                                style="height: 16px; width: 60px;">Analyst</label>&nbsp;
                                            <input type="text" class="form-control" name="analyst" id="analyst">
                                        </div>
                                        <div class="col-sm-3 d-flex align-items-center">
                                            <label for="team" class="form-label me-4"
                                                style="height: 16px; width: 50px;">Grade</label>&nbsp;
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option value=" ">All Grade</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3 d-flex align-items-center">
                                            <label for="team" class="form-label me-4"
                                                style="height: 16px; width: 100px;">สถานที่ทำงาน</label>&nbsp;
                                            <input type="text" name="" id="" class="form-control">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3 d-flex align-items-center">
                                            <label for="team" class="form-label me-4"
                                                style="height: 16px; width: 50px;">Bank</label>&nbsp;
                                            <select class="form-control" id="bank">
                                                <option value=" ">All Bank</option>
                                                <option value="BAY">BAY</option>
                                                <option value="BBL">BBL</option>
                                                <option value="CIMB">CIMB</option>
                                                <option value="GSB">GSB</option>
                                                <option value="ISALAM">ISALAM</option>
                                                <option value="KBANK">KBANK</option>
                                                <option value="KK">KK</option>
                                                <option value="KTB">KTB</option>
                                                <option value="LHBANK">LHBANK</option>
                                                <option value="SCB">SCB</option>
                                                <option value="TBANK">TBANK</option>
                                                <option value="TMB">TMB</option>
                                                <option value="TTB">TTB</option>
                                                <option value="UOB">UOB</option>
                                                <option value="เงินสด">เงินสด</option>
                                                <option value="ธอส">ธอส</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3 d-flex align-items-center">
                                            <label for="team" class="form-label me-4"
                                                style="height: 16px; width: 100px;">Reject Type</label>&nbsp;
                                            <select class="form-control" id="bank">
                                                <option value=" ">ไม่ระบุ</option>
                                                <option value="ไม่ผ่านเกณฑ์วิเคราะห์">ไม่ผ่านเกณฑ์วิเคราะห์</option>
                                                <option value="รายได้ไม่พอ ภาระหนี้สูง">รายได้ไม่พอ ภาระหนี้สูง</option>
                                                <option value="ประวัติหรือเครดิตไม่ดี">ประวัติหรือเครดิตไม่ดี</option>
                                                <option value="ไม่ผ่านเกณฑ์ธนาคาร">ไม่ผ่านเกณฑ์ธนาคาร</option>
                                                <option value="อื่นๆ">อื่นๆ</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3 d-flex align-items-center">
                                            <label for="team" class="form-label me-4"
                                                style="height: 16px; width: 120px;">Waiting Code</label>&nbsp;
                                            <select class="form-control" id="bank">
                                                <option value=" ">ไม่ระบุ</option>
                                                <option value="ติดตามเอกสารเพิ่มเติม">ติดตามเอกสารเพิ่มเติม</option>
                                                <option value="รอสรุปโครงการ">รอสรุปโครงการ</option>
                                                <option value="ส่วนลด (Margin)">ส่วนลด (Margin)</option>
                                                <option value="ติดตามลูกค้าไม่ได้">ติดตามลูกค้าไม่ได้</option>
                                                <option value="อื่นๆ">อื่นๆ</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3 d-flex align-items-center">
                                            <label for="team" class="form-label me-4"
                                                style="height: 16px; width: 70px;">ห้องเลขที่</label>&nbsp;
                                            <input type="text" name="Home_No" id="Home_No" class="form-control">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3 d-flex align-items-center">
                                            <label for="team" class="form-label me-4"
                                                style="height: 16px; width: 80px;">Sourcecode</label>&nbsp;
                                            <input type="text" name="Home_No" id="Home_No" class="form-control">
                                        </div>
                                        <div class="col-sm-3 d-flex align-items-center">
                                            <label for="team" class="form-label me-4"
                                                style="height: 16px; width: 100px;">ลักษณะอาศัย</label>&nbsp;
                                            <select class="form-control" id="bank">
                                                <option value=" ">ไม่ระบุ</option>
                                                <option value="อยู่เอง">อยู่เอง</option>
                                                <option value="การันตี">การันตี</option>
                                                <option value="การันตีรับล่วงหน้า">การันตีรับล่วงหน้า</option>
                                                <option value="ฝากเช่า">ฝากเช่า</option>
                                                <option value="อื่นๆ">อื่นๆ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-12 d-flex align-items-center">
                                            <div class="form-check form-check-inline">
                                                <label for="team" class="form-label"
                                                    style="height: 16px; width: 50px;">Status</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">Received</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                    value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">Pending</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                    value="option3">
                                                <label class="form-check-label" for="inlineCheckbox3">Waiting</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                    value="option4">
                                                <label class="form-check-label" for="inlineCheckbox3">Req Doc By
                                                    Bank</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                    value="option5">
                                                <label class="form-check-label" for="inlineCheckbox3">รอปิดภาระ</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                    value="option6">
                                                <label class="form-check-label" for="inlineCheckbox3">Pre-Approved</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                    value="option7">
                                                <label class="form-check-label" for="inlineCheckbox3">Pre-Approved
                                                    Analyst</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                    value="option8">
                                                <label class="form-check-label" for="inlineCheckbox3">รอบูโรเปลี่ยน
                                                    หลังปิดภาระ</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                    value="option9">
                                                <label class="form-check-label" for="inlineCheckbox3">Approved</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                    value="option10">
                                                <label class="form-check-label"
                                                    for="inlineCheckbox3">Approved-Cancel</label>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <div class="col-sm-10 d-flex align-items-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                    value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">Rejected</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                    value="option3">
                                                <label class="form-check-label" for="inlineCheckbox3">Rejected
                                                    Analyst</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                    value="option4">
                                                <label class="form-check-label" for="inlineCheckbox3">Canceled</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                    value="option5">
                                                <label class="form-check-label" for="inlineCheckbox3">Returned</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                    value="option6">
                                                <label class="form-check-label" for="inlineCheckbox3">Mortgaged</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                    value="option7">
                                                <label class="form-check-label" for="inlineCheckbox3">เเจ้งโอน</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                    value="option8">
                                                <label class="form-check-label" for="inlineCheckbox3">Contract</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                    value="option9">
                                                <label class="form-check-label" for="inlineCheckbox3">SLA</label>
                                            </div>
                                            <a href="#" onclick="formuncheck()">Uncheck all</a>
                                            &nbsp;&nbsp;
                                            /
                                            &nbsp;&nbsp;
                                            <a href="#" onclick="formcheck()">Check all</a>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="box-footer text-center">
                                    <button type="submit" class="btn bg-gradient-success"><i class="fa fa-search"></i>
                                        ค้นหา</button>
                                    <a href="{{ route('lists') }}" type="button" class="btn bg-gradient-danger"><i
                                            class="fa fa-refresh"></i> เคลียร์</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header card-outline card-info">
                                    <h3 class="card-title">ข้อมูล ค้นหารายกาย</h3>
                                </div>
                                <div class="card-body">
                                    <table id="table" class="table table-hover table-striped text-center">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Team ID</th>
                                                <th>Team Name</th>
                                                <th>Name</th>
                                                <th>Grade</th>
                                                <th>อนุมัติ Grade</th>
                                                <th>Sourcecode</th>
                                                <th>Tel</th>
                                                <th>ฐานเงินเดือน</th>
                                                <th>Bank</th>
                                                <th>Status</th>
                                                <th>วันที่เเจ้งโอน</th>
                                                <th>สถานะเเจ้งโอน</th>
                                                <th>ประเภทรายได้</th>
                                                <th>โครงการ</th>
                                                <th>ห้อง</th>
                                                <th>Received Date</th>
                                                <th>Sent Date</th>
                                                <th>Result Date</th>
                                                <th>Result Reason</th>
                                                <th>Remark นิติกรรม</th>
                                                <th>วงเงินอนุมัติ1</th>
                                                <th>วงเงินอนุมัติ2</th>
                                                <th>วงเงินอนุมัติ ไม่รวมประกัน</th>
                                                <th>ราคาซื้อขาย</th>
                                                <th>จำนวนเงินการันตี</th>
                                                <th>เงินการันตีหักภาษี 5 %</th>
                                                <th>Rej/Wait</th>
                                                <th>Analyst</th>
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
                                                <td></td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm" href="{{route('list.show')}}">
                                                        <i class="fas fa-eye"></i>
                                                        View
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" href="#">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                        Edit
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-sm" href="#">
                                                        <i class="fas fa-trash">
                                                        </i>
                                                        Delete
                                                    </a>
                                                </td>
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
