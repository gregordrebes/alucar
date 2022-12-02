<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Agency;
use Tests\TestCase;

class AgencyTest extends TestCase
{
    public function testSaveAgency()
    {
        $agency            = new Agency;
        $agency->descricao = 'T1';
        $agency->endereco  = 'T1';
        $agency->cidade    = 'T1';

        $this->assertEquals(true, $agency->save());
    }

    public function testUpdateAgency(): void 
    {
        $modelAgency       = new Agency;
        $agency            = $modelAgency::latest()->first();
        $agency->descricao = 'T2';
        $agency->endereco  = 'T2';
        $agency->cidade    = 'T2';

        $this->assertEquals(true, $agency->save());
    }

    public function testDeleteAgency(): void 
    {
        $modelAgency  = new Agency;
        $agency       = $modelAgency::latest()->first();

        $this->assertEquals(true, $agency->destroy($agency->id));
    }
}