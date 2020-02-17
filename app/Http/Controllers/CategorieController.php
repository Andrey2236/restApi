<?php
namespace App\Http\Controllers;

use Illuminate\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\Categorie;
use App\Http\Resources\CategorieResource;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::with('product')->select('id','name','description')->get();



        foreach ($categories as $key => $categorie ) {
            $categorie->setAttribute('count',$categorie->product->count());
            $response[$key] = new CategorieResource($categories[$key]);
        }


        if (!$response) {
            throw new HttpException(400, "Invalid data");
        }
        return response()->json([
            $response,
        ], 200);
    }

}
