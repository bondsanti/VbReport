<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    // Start - รายงานสถานะของทีม //
    public function index()
    {
        return view('report.jobteam.team_status');
    }
    public function search()
    {
        return view('report.jobteam.team_search');
    }
    // End - รายงานสถานะของทีม //



    // Start - รายงานเหตุผลการ Rejected //
    public function rejected()
    {

        return view('report.rejected.rejected_page');
    }

    public function rejected_search()
    {
        return view('report.rejected.rejected_search');
    }
    // End - รายงานเหตุผลการ Rejected //



    // Start - รายงานแต่ละสถานะของทีม //
    public function jobstatus()
    {
        return view('report.jobbutstatus.status_page');
    }

    public function status_search()
    {
        return view('report.jobbutstatus.status_search');
    }
    // End - รายงานแต่ละสถานะของทีม //

    // Start - รายงานทีมวิเคราะห์ //
    public function report()
    {
        return view('report.report_team.report_team');
    }
    public function report_search()
    {
        return view('report.report_team.report_search');
    }
    // End - รายงานทีมวิเคราะห์ //

    // Start - รายงาน Sale in out //
    public function inout()
    {
        return view('report.saleinout.in_out');
    }
    public function inout_search()
    {
        return view('report.saleinout.in_out_search');
    }
    // End - รายงาน Sale in out //

     // Start - รายงาน Sale in out //
     public function zen()
     {
         return view('report.zenTeam.zen');
     }

     public function zen_search()
     {
         return view('report.zenTeam.zen_search');
     }
     // End - รายงาน Sale in out //
}
