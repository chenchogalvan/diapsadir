<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DataUsersImport;

class DataUserController extends Controller
{
    public function exportDataUSer(Request $request)
    {
        $path = $request->file('excel_file');
        Excel::import(new DataUsersImport, $path);
        return redirect()->back()->with('success', 'Se cargaron los datos correctamente');
    }
}
