@extends('layouts.app')

@section('title', 'แดชบอร์ด')

@section('content')

    @push('style')
        <style>
            #table thead th {
                font-size: 13px;
            }

            #table tbody td {
                font-size: 13px;

                vertical-align: middle;
            }

            #badge {
                font-size: 12px;

            }
        </style>
    @endpush
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">แดชบอร์ด</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-2 col-6">
                            <a href="" class="small-box-footer">
                                <div class="small-box bg-gradient-info">
                                    <div class="inner">
                                        <h3>0</h3>
                                        <p>ทั้งหมด</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-building"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-2 col-6">
                            <a href="" class="small-box-footer">
                                <div class="small-box bg-gradient-info">
                                    <div class="inner">
                                        <h3>0</h3>
                                        <p>Pending</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-2 col-6">
                            <a href="" class="small-box-footer">
                                <div class="small-box bg-gradient-info">
                                    <div class="inner">
                                        <h3>0</h3>
                                        <p>Rejected</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-2 col-6">
                            <a href="" class="small-box-footer">
                                <div class="small-box bg-gradient-info">
                                    <div class="inner">
                                        <h3>0</h3>
                                        <p>Req Doc By Bank</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-2 col-6">
                            <a href="" class="small-box-footer">
                                <div class="small-box bg-gradient-info">
                                    <div class="inner">
                                        <h3>0</h3>
                                        <p>Pre-Approved</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-2 col-6">
                            <a href="" class="small-box-footer">
                                <div class="small-box bg-gradient-info">
                                    <div class="inner">
                                        <h3>0</h3>
                                        <p>Approved</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header card-outline card-info">
                                    <h3 class="card-title">กราฟรายงาน Mortgaged</h3>
                                </div>
                                <div class="card-body">

                                    <div class="tab-content p-0">
                                        <!-- Morris chart - Sales -->
                                        <div class="chart tab-pane active" id="revenue-chart"
                                            style="position: relative; height: 300px;">
                                            <canvas id="revenue-chart-canvas" height="300"
                                                style="height: 300px;"></canvas>
                                        </div>
                                        <div class="chart tab-pane" id="sales-chart"
                                            style="position: relative; height: 300px;">
                                            <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header card-outline card-info">
                                    <h3 class="card-title">กราฟรายงาน Year Target</h3>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <div class="chart tab-pane active" id="bank-chart"
                                            style="position: relative; height: 300px;">
                                            <canvas id="bank-chart-canvas" height="300"
                                                style="height: 300px;"></canvas>
                                        </div>
                                        <div class="chart tab-pane" id="approved-chart"
                                            style="position: relative; height: 300px;">
                                            <canvas id="approved-chart-canvas" height="300" style="height: 300px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-outline card-info">
                                    <h3 class="card-title text-danger">รายงาน 0 จำนวน</h3>
                                </div>
                                <div class="card-body table-responsive">
                                    <table id="table" class="table table-sm text-center table-striped">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Bank</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
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
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
@push('script')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            // Revenue Chart
            var ctxRevenue = document.getElementById('revenue-chart-canvas').getContext('2d');
            var revenueChart = new Chart(ctxRevenue, {
                type: 'bar',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                        label: 'Revenue',
                        backgroundColor: 'rgba(60,141,188,0.1)', // เปลี่ยนค่า transparency สำหรับ background
                        borderColor: 'rgba(60,141,188,0.8)',
                        pointRadius: false,
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [28, 48, 40, 19, 86, 27, 90]
                    }, {
                        label: 'Profit',
                        backgroundColor: 'rgba(0,166,90,0.1)', // เปลี่ยนค่า transparency สำหรับ background
                        borderColor: 'rgba(0,166,90,0.8)',
                        pointRadius: false,
                        pointColor: '#00a65a',
                        pointStrokeColor: 'rgba(0,166,90,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(0,166,90,1)',
                        data: [15, 30, 55, 35, 75, 20, 60]
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    legend: {
                        display: true // แสดง legend สำหรับแต่ละเส้น
                    },
                    scales: {
                        xAxes: [{
                            gridLines: {
                                display: false,
                            }
                        }],
                        yAxes: [{
                            gridLines: {
                                display: false,
                            }
                        }]
                    }
                }
            });

            // Sales Chart
            var ctxSales = document.getElementById('sales-chart-canvas').getContext('2d');
            var salesChart = new Chart(ctxSales, {
                type: 'bar',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                        label: 'Sales',
                        backgroundColor: 'rgba(210, 214, 222, 0.1)', // เปลี่ยนค่า transparency สำหรับ background
                        borderColor: 'rgba(210, 214, 222, 1)',
                        pointRadius: false,
                        pointColor: 'rgba(210, 214, 222, 1)',
                        pointStrokeColor: '#c1c7d1',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(220,220,220,1)',
                        data: [65, 59, 80, 81, 56, 55, 40]
                    }, {
                        label: 'Expenses',
                        backgroundColor: 'rgba(255, 99, 132, 0.1)', // เปลี่ยนค่า transparency สำหรับ background
                        borderColor: 'rgba(255, 99, 132, 1)',
                        pointRadius: false,
                        pointColor: 'rgba(255, 99, 132, 1)',
                        pointStrokeColor: '#ff6384',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(255, 99, 132, 1)',
                        data: [28, 48, 40, 19, 86, 27, 90]
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    legend: {
                        display: true // แสดง legend สำหรับแต่ละเส้น
                    },
                    scales: {
                        xAxes: [{
                            gridLines: {
                                display: false,
                            }
                        }],
                        yAxes: [{
                            gridLines: {
                                display: false,
                            }
                        }]
                    }
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            // Revenue Chart
            var ctxRevenue = document.getElementById('bank-chart-canvas').getContext('2d');
            var revenueChart = new Chart(ctxRevenue, {
                type: 'bar',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                        label: 'Revenue',
                        backgroundColor: 'rgba(60,141,188,0.1)', // เปลี่ยนค่า transparency สำหรับ background
                        borderColor: 'rgba(60,141,188,0.8)',
                        pointRadius: false,
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [28, 48, 40, 19, 86, 27, 90]
                    }, {
                        label: 'Profit',
                        backgroundColor: 'rgba(0,166,90,0.1)', // เปลี่ยนค่า transparency สำหรับ background
                        borderColor: 'rgba(0,166,90,0.8)',
                        pointRadius: false,
                        pointColor: '#00a65a',
                        pointStrokeColor: 'rgba(0,166,90,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(0,166,90,1)',
                        data: [15, 30, 55, 35, 75, 20, 60]
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    legend: {
                        display: true // แสดง legend สำหรับแต่ละเส้น
                    },
                    scales: {
                        xAxes: [{
                            gridLines: {
                                display: false,
                            }
                        }],
                        yAxes: [{
                            gridLines: {
                                display: false,
                            }
                        }]
                    }
                }
            });

            // Sales Chart
            var ctxSales = document.getElementById('approved-chart-canvas').getContext('2d');
            var salesChart = new Chart(ctxSales, {
                type: 'bar',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                        label: 'Sales',
                        backgroundColor: 'rgba(210, 214, 222, 0.1)', // เปลี่ยนค่า transparency สำหรับ background
                        borderColor: 'rgba(210, 214, 222, 1)',
                        pointRadius: false,
                        pointColor: 'rgba(210, 214, 222, 1)',
                        pointStrokeColor: '#c1c7d1',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(220,220,220,1)',
                        data: [65, 59, 80, 81, 56, 55, 40]
                    }, {
                        label: 'Expenses',
                        backgroundColor: 'rgba(255, 99, 132, 0.1)', // เปลี่ยนค่า transparency สำหรับ background
                        borderColor: 'rgba(255, 99, 132, 1)',
                        pointRadius: false,
                        pointColor: 'rgba(255, 99, 132, 1)',
                        pointStrokeColor: '#ff6384',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(255, 99, 132, 1)',
                        data: [28, 48, 40, 19, 86, 27, 90]
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    legend: {
                        display: true // แสดง legend สำหรับแต่ละเส้น
                    },
                    scales: {
                        xAxes: [{
                            gridLines: {
                                display: false,
                            }
                        }],
                        yAxes: [{
                            gridLines: {
                                display: false,
                            }
                        }]
                    }
                }
            });
        });
    </script>
@endpush
