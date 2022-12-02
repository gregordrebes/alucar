<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Product;
use Tests\TestCase;

class ProductTest extends TestCase
{
    public function testSaveProduct()
    {
        $product          = new Product;
        $product->name    = 'T1';
        $product->detail  = 'T1';
        $product->image   = 'T1';
        $product->price   = 1.0;

        $this->assertEquals(true, $product->save());
    }

    public function testUpdateProduct(): void 
    {
        $modelProduct       = new Product;
        $product            = $modelProduct::latest()->first();
        $product->name    = 'T2';
        $product->detail  = 'T2';
        $product->image   = 'T2';
        $product->price   = 2.0;

        $this->assertEquals(true, $product->save());
    }

    public function testDeleteProduct(): void 
    {
        $modelProduct       = new Product;
        $product            = $modelProduct::latest()->first();

        $this->assertEquals(true, $product->destroy($product->id));
    }
}
