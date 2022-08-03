<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;
    public function test_products_route_returns_ok(){
        $response = $this->get('/products');

        $response->assertStatus(200);
        $response->assertSee('Hi');
    }

    public function test_product_has_name(){
        $product = Product::factory()->create();
        $this->assertNotEmpty($product->name);
    }
}
