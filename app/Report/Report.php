<?php 

namespace App\Report;

use App\Mail\MailSender;

abstract class Report implements ReportInterface
{

    protected $model;

    /**
     * Display a listing of the resource.
     * @param   $file
     * @return $isSended
     */
    public function sendToMail($file){
        $mailSender = new MailSender();
        $send = $mailSender->sendMail($file);
        return $send;
    }

    /**
     * Display a listing of the resource.
     * @return $model->get()
     */
    public function getReportData(){
        return $this->model->get();
    }

    
}