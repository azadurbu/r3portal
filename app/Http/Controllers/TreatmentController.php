<?php

namespace App\Http\Controllers;

use FFI\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TreatmentController extends Controller
{
    public function treatmentPlan()
    {
        return view('treatment.treatment-plan');
    }

    public function treatmentDetails()
    {
        return view('treatment.treatment-details');
    }
    
    public function treatmentGuide()
    {
        return view('treatment.treatment-guide');
    }
    
    public function nutrition()
    {
        return view('treatment.nutrition');
    }
    
    public function commonAdverseEvents()
    {
        return view('treatment.common-adverse-events');
    }
    
    public function optimizingOutcome()
    {
        return view('treatment.optimizing-outcome');
    }
    
    public function beforeAppointment()
    {
        return view('treatment.before-appointment');
    }
    public function quote()
    {
        return view('treatment.quote');
    }
    public function masterClass()
    {
        return view('treatment.master-class');
    }
    public function procedureInstruct()
    {
        return view('treatment.procedure-instruct');
    }
    public function faq()
    {
        return view('treatment.faq');
    }
}