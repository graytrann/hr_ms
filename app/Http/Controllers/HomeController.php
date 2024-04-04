<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use PDF;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // main dashboard
    public function index()
    {
        return view('dashboard.dashboard');
    }
    // employee dashboard
    public function emDashboard()
    {
        $dt        = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();
        return view('dashboard.emdashboard', compact('todayDate'));
    }

    public function daDashboard()
    {
        // Đếm số lượng người dùng cho mỗi role_name
        $adminCount = DB::table('users')->where('role_name', 'Admin')->count();
        $normalUserCount = DB::table('users')->where('role_name', 'Normal User')->count();
        $superAdminCount = DB::table('users')->where('role_name', 'Super Admin')->count();
        $employeeCount = DB::table('users')->where('role_name', 'Employee')->count();
        $clientCount = DB::table('users')->where('role_name', 'Client')->count();
        $salaryTotal = DB::table('staff_salaries')->sum('salary');

        $formattedSalary = number_format($salaryTotal, 0, ',', '.');

        $staffSalaries = DB::table('staff_salaries')->select('name', 'salary')->get(); // Lấy dữ liệu từ bảng staff_salaries
        // Chuyển đổi kết quả thành dạng JSON
        $salaryChartData = $staffSalaries->map(function ($salary) {
            return ['name' => $salary->name, 'salary' => $salary->salary];
        });

        // Chuyển đổi dữ liệu thành JSON
        $salaryChartData = $salaryChartData->toJson(); // Sử dụng toJson() để chuyển đổi thành JSON



        // Lấy ngày và giờ hiện tại
        $dt = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();

        // dd($salaryChartData);


        // Truyền số lượng người dùng và ngày hiện tại xuống view
        return view('dashboard.dadashboard', compact('todayDate', 'adminCount', 'normalUserCount', 'superAdminCount', 'employeeCount', 'clientCount', 'formattedSalary', 'salaryChartData'));
    }
    public function generatePDF(Request $request)
    {
        // $data = ['title' => 'Welcome to ItSolutionStuff.com'];
        // $pdf = PDF::loadView('payroll.salaryview', $data);
        // return $pdf->download('text.pdf');
        // selecting PDF view
        $pdf = PDF::loadView('payroll.salaryview');
        // download pdf file
        return $pdf->download('pdfview.pdf');
    }
}
