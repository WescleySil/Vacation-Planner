<?php

namespace App\Services\HolidayPlan;

use Barryvdh\DomPDF\Facade\Pdf;
class GenerateHolidayPlanPdfService
{
    public function run($plan)
    {
        $pdf = Pdf::loadView("pdf.plan", compact('plan'));
        $pdf->setPaper('A4', 'landscape');

        return $pdf;
    }
}
