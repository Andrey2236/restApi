<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ProductsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function responseAll($product)
    {

        $nameCategory = null;
        $idCategory = null;
        $descriptionCategory = null;
        foreach ($product as $item) {
            $idCategory = $item->categorie->pluck('id');
            $nameCategory = $item->categorie->pluck('name');
            $descriptionCategory = $item->categorie->pluck('description');
        }
        $response = [
            'products' => 'products',
            'data' => [
                'name' => $product->pluck('name'),
                'short_description' => $product->pluck('short_description'),
                'price' => $product->pluck('price'),
                'category' => [
                    'id' => $idCategory,
                    'name' => $nameCategory,
                    'description' => $descriptionCategory,
                ],
            ],
        ];
        return $response ;
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
