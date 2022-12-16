<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;

class PdfController extends Controller
{
    public function print(Request $request)
    {
        $users = User::all();

        view()->share('users',$users);



        if($request->has('download')) {

        	// pass view file

            $pdf = PDF::loadView('welcome');

            // download pdf

            return $pdf->download('userlist.pdf');

        }

        return view('welcome');

    }
}
