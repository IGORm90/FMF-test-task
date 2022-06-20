<?php 

namespace App\Report;

interface ReportInterface
{

    public function makeReport();

    public function saveReport($report);

    public function sendToMail($file);

    public function getReportData();
    
}