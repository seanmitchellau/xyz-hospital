<?php

namespace App\Mail;

use App\Models\Patient;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PatientReceivedForm extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * @var Patient
     */
    private $patient;

    /**
     * @return void
     */
    public function __construct(Patient $patient)
    {
        $this->patient = $patient;
    }

    /**
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.patient.received', ['patient' => $this->patient]);
    }
}
