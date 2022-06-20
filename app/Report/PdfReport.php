<?php 

namespace App\Report;

use App\Models\Car;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Mpdf\Mpdf;

class PdfReport extends Report
{

    public function __construct(){
        $this->model = new Car;
        $this->mpdf = new Mpdf();
    }

    /**
     * Display a listing of the resource.
     * @return $mpdf
     */
    public function makeReport(){
        try {
            $pdfData = $this->getReportData();
            $date = Carbon::now()->format('d.m.Y');
            $html = \view('pdf.car', ['date' => $date, 'pdfData' => $pdfData]);
            $html = $html->render();
            $this->mpdf->writeHTML($html);
            return $this->mpdf;
        } catch (Exception $e) {
            return false;
        }
        
    }

    /**
     * Display a listing of the resource.
     * @param   $mpdfReport
     * @return $output
     */
    public function getReport(Mpdf $mpdfReport){
        $mpdfReport->Output();
    }

    /**
     * Display a listing of the resource.
     * @param   $mpdfReport
     * @return $isSaved
     */
    public function saveReport($mpdfReport){
        try {
            Storage::put('public/pdf/invoice.pdf', $mpdfReport->Output());
            return true;
    } catch (Exception $e) {
        return false;
    }
    }
    
}