<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function welcome()
    {
        $users = User::all();

        return view('welcome', compact('users'));
    }
    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    public function import(Request $request) 
    {
        $request->validate(['users' => ['required', 'file']]);
        Excel::import(new UsersImport, $request->file('users'));
        
        return redirect('/')->with('success', 'All good!');
    }
}
