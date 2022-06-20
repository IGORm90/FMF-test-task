<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report\PdfReport;

class ReportController extends Controller
{

    public function __construct(PdfReport $reportService){
        $this->reportService = $reportService;
    }

    public function getPdfReport(){
        $this->reportService->saveReport();
    }
}
