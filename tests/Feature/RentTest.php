<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Rent;
use Tests\TestCase;

class RentTest extends TestCase
{
    public function testSaveRent()
    {
        $rent               = new Rent;
        $rent->id_usuario   = 1;
        $rent->valor_total  = 1.0;
        $rent->data_inicial = date('Y-m-d H:i:s');
        $rent->data_final   = date('Y-m-d H:i:s');
        $rent->id_veiculo   = 1;

        $this->assertEquals(true, $rent->save());
    }

    public function testUpdateRent(): void 
    {
        $modelRent          = new Rent;
        $rent               = $modelRent::latest()->first();
        $rent->id_usuario   = 2;
        $rent->valor_total  = 2.0;
        $rent->data_inicial = date('Y-m-d H:i:s');
        $rent->data_final   = date('Y-m-d H:i:s');
        $rent->id_veiculo   = 2;

        $this->assertEquals(true, $rent->save());
    }

    public function testDeleteRent(): void 
    {
        $modelRent     = new Rent;
        $rent          = $modelRent::latest()->first();

        $this->assertEquals(true, $rent->destroy($rent->id));
    }
}
