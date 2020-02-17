<?php

namespace App\Http\Controllers;

use Illuminate\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Providers\ProductsServiceProvider;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\Product;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductsResource;
use App\Http\Resources\ReviwesResource;


class ProductController extends Controller
{
    public function index(Product $product)
    {
        $product = Product::with('categorie')->get();


        foreach ($product as $key => $products) {
            $response[$key] = new ProductsResource($product[$key]);
        }

        if (!$response) {
            throw new HttpException(400, "Invalid data");
        }
        return response()->json([
            $response,
        ], 200);

    }

    public function show($id)
    {
        if (!$id) {
            throw new HttpException(400, "Invalid id");
        }

        $product = Product::find($id)->with('categorie', 'reviews.user')->get();


        $response = new ProductsResource($product[$id - 1]);

        foreach ($product[$id - 1]->reviews->get() as $key => $review) {
            $responseReview[$key] = new ReviwesResource($review);
        }


        return response()->json([
            $response, $responseReview,
        ], 200);

    }

    public function showCategory($id)
    {
        if (!$id) {
            throw new HttpException(400, "Invalid id");
        }
        $product = Product::where('categories_id', $id)->with('categorie', 'reviews')->get();


        foreach ($product as $key => $products) {
            $response[$key] = new ProductsResource($product[$key]);
        }


        return response()->json([
            $response,
        ], 200);

    }
}
