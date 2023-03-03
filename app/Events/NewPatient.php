<?php

namespace App\Events;

use App\Models\Patient;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewPatient
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var Patient
     */
    public $patient;

    /**
     * @return void
     */
    public function __construct(Patient $patient)
    {
        $this->patient = $patient;
    }
}
