<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF()

    {

        $data = ['title' => 'Welcome to ItSolutionStuff.com'];

        $pdf = PDF::loadView('myPDF', $data);

  

        return $pdf->download('itsolutionstuff.pdf');

    }
}
