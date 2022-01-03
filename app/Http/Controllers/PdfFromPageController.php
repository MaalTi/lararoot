<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PDF;

class PdfFromPageController extends Controller
{
    public function PdfMaker($locale, $view){
        $md = resource_path('markdown/'.$locale.'/'.$view.'.md');
        if(file_exists($md)){
            $pdf = PDF::loadHTML(Str::markdown(file_get_contents($md)));
            return $pdf->stream($view.'.pdf');
        }else{
            return redirect()->back();
        }
    }
}
