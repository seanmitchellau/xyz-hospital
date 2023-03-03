<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewPatientViewTest extends TestCase
{
    /**
     * @return void
     */
    public function test_view_patient_form()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
