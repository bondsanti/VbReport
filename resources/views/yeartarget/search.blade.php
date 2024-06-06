@extends('layouts.app')

@section('title', 'Mortgaged')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row md-2">
                <div class="col-sm-6">
                    <h3 class="m-0">รายงาน Year Target</h3>
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
                            <h3 class="card-title">ค้นหารายงาน Year Target</h3>
                        </div>
                        <form action="{{ route('yeartarget.search') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-6 d-flex align-items-center">
                                                <label for="start-date" class="form-label me-4"
                                                    style="height: 16px; width: 50px;">วันที่</label>
                                                <input type="date" id="start-date" class="form-control"
                                                    name="start_date">
                                            </div>
                                            <div class="col-sm-3"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3"></div>
                                </div>
                                <br>
                                <div class="box-footer text-center">
                                    <button type="submit" class="btn bg-gradient-success"><i class="fa fa-search"></i>
                                        ค้นหา</button>
                                    <a href="{{ route('yeartarget') }}" type="button" class="btn bg-gradient-danger"><i
                                            class="fa fa-refresh"></i> เคลียร์</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header card-outline card-info">
                                    <h3 class="card-title">กราฟเทียบยอกเป้าปี(M) YearTarget</h3>
                                </div>
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header card-outline card-info">
                                    <h3 class="card-title">ข้อมูล Year Target <span class="text-bold text-danger">0</span>
                                        จำนวน</h3>
                                </div>
                                <div class="card-body">
                                    <table border="1" cellpadding="3" cellspacing="0" id="table"
                                        class="table table-hover table-striped text-center">
                                        <thead>
                                            <tr bgcolor="#66BB00">
                                                <th>สายงาน</th>
                                                <th>TEAM</th>
                                                <th>Yearly Target</th>
                                                <th>Actual</th>
                                                <th>%</th>
                                                <th>Monthly Target</th>
                                                <th>Mortgaged</th>
                                                <th>%</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td rowspan="4" bgcolor="#F8C471">OUTSOURCE</td>
                                                <td>
                                                    <p
                                                        title="VBO03 คุณเอ้ VBO04 คุณปอนด์ VBO05 คุณเจี๊ยะ VBO09 คุณตั้ม VBO31 คุณวัชระ VBO66 คุณจิม VBO84 เฮียเจียว VBO91 TMRL">
                                                        คุณนิ่ม</p>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p title="VBO06 คุณต่อ VBO69 คุณวิรัตน์ VBO72 คุณบอย VBO74 คุณเอก">
                                                        คุณต่อ</p>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p
                                                        title="VBO02 คุณช้าง VBO08 คุณปิ๊ก VBO25 คุณโจ้ VBO32 คุณผึ้ง VBO53 คุณหนู VBO70 คุณกุ้ง VBO71 คุณชา VBO81 คุณปอ VBO90 คุณบอย(ชลิต) VBO28 ชาญชัย VBO102 คุณชนินทร์ VBO100 คุณโก้">
                                                        คุณแจม</p>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p title="VBO13 คุณทิพย์">OTHER</p>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td rowspan="10" bgcolor="#9EC87B">CORPORATE</td>
                                                <td>
                                                    <p title="VBO52 คุณวรเดช VBO54 เสืออสังหา VBO82 คุณธันวา VBO83 Rabbit">
                                                        VIP/Corporate</p>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p title="">Affiliate</p>
                                                </td>
                                                <td align="right"></td>
                                                <td align="right">0.00</td>
                                                <td align="right">0.00</td>
                                                <td align="right"></td>
                                                <td align="right">0.00</td>
                                                <td align="right">0.00</td>
                                            </tr>
                                            <tr>
                                                <td>Agent</td>
                                                <td align="right"></td>
                                                <td align="right">0.00</td>
                                                <td align="right">0.00</td>
                                                <td align="right"></td>
                                                <td align="right">0.00</td>
                                                <td align="right">0.00</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p title="VBO64 หน้าโครงกรุงเทพ">Sale site BKK</p>
                                                </td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p title="VBO75 ภาคตะวันออก">Sale site East</p>
                                                </td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                            </tr>
                                            <tr>
                                                <td>Manager (ศิระ)</td>
                                                <td align="right"></td>
                                                <td align="right">0.00</td>
                                                <td align="right">0.00</td>
                                                <td align="right"></td>
                                                <td align="right">0.00</td>
                                                <td align="right">0.00</td>
                                            </tr>
                                            <tr>
                                                <td>Manager (เอก)</td>
                                                <td align="right"></td>
                                                <td align="right">0.00</td>
                                                <td align="right">0.00</td>
                                                <td align="right"></td>
                                                <td align="right">0.00</td>
                                                <td align="right">0.00</td>
                                            </tr>
                                            <tr>
                                                <td>Manager (แจม)</td>
                                                <td align="right"></td>
                                                <td align="right">0.00</td>
                                                <td align="right">0.00</td>
                                                <td align="right"></td>
                                                <td align="right">0.00</td>
                                                <td align="right">0.00</td>
                                            </tr>
                                            <tr>
                                                <td>Manager (แคท)</td>
                                                <td align="right"></td>
                                                <td align="right">0.00</td>
                                                <td align="right">0.00</td>
                                                <td align="right"></td>
                                                <td align="right">0.00</td>
                                                <td align="right">0.00</td>
                                            </tr>
                                            <tr>
                                                <td>Manager (BKK)</td>
                                                <td align="right"></td>
                                                <td align="right">0.00</td>
                                                <td align="right">0.00</td>
                                                <td align="right"></td>
                                                <td align="right">0.00</td>
                                                <td align="right">0.00</td>
                                            </tr>
                                            {{-- <tr>
                                                <td><p title="VBO88 CMO VBO85 คุณนุ่น VBO86 คุณหลิน VBO94 Plus VBO99 คุุณไก่ VBO115 คุณเจี๊ยบ CMO">CMO</p></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                            </tr> --}}
                                            <tr>
                                                <td rowspan="3" bgcolor="#BB8FCE">Exclusive BroKer (ONE W.)</td>
                                                <td>
                                                    <p title="VBN09 BKK">BKK</p>
                                                </td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p title="UVB01 ศิระ">CNX</p>
                                                </td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p title="VBO80 Onewealth ชลบุรี">EAST</p>
                                                </td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                            </tr>
                                            <tr>
                                                <td rowspan="4" bgcolor="#7B8BC8"> Underlicense outsource</td>
                                                <td>
                                                    <p title="VBO78 Mac">MAC</p>
                                                </td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p title="VBO73 Obelisk">OBL</p>
                                                </td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p title="VBO89 Boda">BODA</p>
                                                </td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                            </tr>
                                            <tr>
                                                <td>OTHER</td>
                                                <td align="right"></td>
                                                <td align="right">0.00</td>
                                                <td align="right">0.00</td>
                                                <td align="right"></td>
                                                <td align="right">0.00</td>
                                                <td align="right">0.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" bgcolor="#66BB00">TOTAL</td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
                                                <td align="right"></td>
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
