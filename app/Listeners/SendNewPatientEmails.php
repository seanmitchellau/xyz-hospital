<?php

namespace App\Listeners;

use App\Events\NewPatient;
use App\Mail\DoctorNewPatient;
use App\Mail\PatientReceivedForm;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendNewPatientEmails implements ShouldQueue
{
    /**
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * @param  NewPatient  $event
     * @return void
     */
    public function handle(NewPatient $event)
    {
        $patient = $event->patient;

        Mail::to(config('mail.doctor_email'))
            ->send(new DoctorNewPatient($patient));

        Mail::to($patient->email)
            ->send(new PatientReceivedForm($patient));
    }
}
