<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewPatientSubmitTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @return void
     */
    public function test_submit_patient_form()
    {
        $response = $this->followingRedirects()->call('POST', route('new-patient.submit'), array(
            '_token' => csrf_token(),
            'first_name' => 'New',
            'last_name' => 'Patient',
            'email' => 'new-patient@gmail.com',
            'address' => '55 Some St, Melbourne, Victoria, 3000',
            'phone_number' => '0400000000',
            'date_of_birth' => '2021-01-31',
            'past_history' => 'I have ... .. plus other things ...',
            'agree' => 1,
        ));

        $this->assertEquals(200, $response->getStatusCode());

        $this->assertDatabaseHas('patients', [
            'email' => 'new-patient@gmail.com',
        ]);
    }
}
