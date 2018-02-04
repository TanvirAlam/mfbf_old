<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;
use Tests\CallsApi;

class CategorySearchAddDeleteTest extends TestCase
{
    use CallsApi;

    public function setUp()
    {
        parent::setUp();
        $this->authenticate();
    }

    /** @test */
    public function canViewAllCategories()
    {
        /*$xxx = $this->call('GET', 'api/search/category/')->assertSuccessful()
            ->assertJsonStructure([
                'email' => 'test'
            ]);*/

        $response = $this->json('POST', 'api/search/category', ['query' => 'was']);

        dd($response->original);



        /*    ->assertSuccessful()
            ->assertJsonStructure([
            'email' => 'test'
        ]);*/
    }

    /** @test */
    public function canAddCategory()
    {
        /*dd($this->postJson('/api/category/save', [
            'query' => 'test'
        ])->original);*/


            /*->assertSuccessful()->assertJsonStructure([
            'email' => 'test'
        ]);*/
    }

    /** @test */
    /*public function canDeleteCategory()
    {

    }*/

    /** @test */
    /*public function canEditCategory()
    {

    }*/
}
