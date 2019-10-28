<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DailyReport;

class DailyReportController extends Controller
{
    public $daily;

    public function __construct(DailyReport $daily)
    {
        $this->daily = $daily;
    }

    public function index()
    {
        $dailys = $this->daily->all();
        return view('user.daily_report.index', compact('dailys'));
    }

    public function create()
    {
        return view('user.daily_report.create');
    }

    public function store(Request $request)
    {
        return redairect()->to('user.daily_report.index');
    }

    public function show($id)
    {
        return view('user.daily_report.show');
    }

    public function edit($id)
    {
        return view ('user.daily_report.edit');
    }

    public function update(Request $request, $id)
    {
      return redairect()->to('daily_report.index');
    }

    public function destroy($id)
    {
      $this->daily->find($id)->delete();
      return redairect()->to('user.daily_report.index');
    }
}
