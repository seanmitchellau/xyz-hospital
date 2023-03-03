<?php

namespace App\Http\Controllers;

use App\Events\NewPatient as NewPatientEvent;
use App\Http\Requests\NewPatient;
use App\Models\Patient;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function newPatientForm(): View
    {
        return view('new-patient-form');
    }

    public function submitNewPatientForm(NewPatient $request): RedirectResponse
    {
        $patient = new Patient($request->all());
        $patient->save();

        NewPatientEvent::dispatch($patient);

        return redirect()->route('thank-you.page', ['patient' => $patient->id]);
    }

    public function thankyou(Patient $patient): View
    {
        return view('thank-you', compact('patient'));
    }

}
