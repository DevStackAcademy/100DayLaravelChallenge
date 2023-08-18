<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Exports\UsersExport;

use Maatwebsite\Excel\Excel as Format;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function web()
    {
        return view('users', [
            'users' => User::paginate()
        ]);
    }

    public function excel()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function csv()
    {
        // return Excel::download(new UsersExport, 'users.csv', \Maatwebsite\Excel\Excel::CSV);
        return Excel::download(new UsersExport, 'users.csv', Format::CSV);

    }

    public function pdf()
    {
        return Excel::download(new UsersExport, 'users.pdf', Format::DOMPDF);
    }

    public function html()
    {
        return Excel::download(new UsersExport, 'users.html', Format::HTML);
    }
}
