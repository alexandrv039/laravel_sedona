<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        $query = DB::table('products');
        $query->when($request->get('type'), function (Builder $query, $type) {
            $query->where('type', $type);
        });
        $products = $query->get();
        return view('catalog', ['products' => $products]);
    }

    public function show($id)
    {
        $product = Product::query()->findOrFail($id);
        dd($product);
    }
}
