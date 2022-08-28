<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Stock;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:users');

    // $this->middleware(function ($request, $next) {

    //   $id = $request->route()->parameter('product');
    //   if (!is_null($id)) {
    //     $productsOwnerId = Product::findOrFail($id)->shop->owner->id;
    //     $productId = (int)$productsOwnerId;
    //     if ($productId !== Auth::id()) {
    //       abort(404);
    //     }
    //   }
    //   return $next($request);
    // });
  }

  public function index()
  {
    // ローカルスコープを使用(Productモデル)
    $products  = Product::availableItems()->get();

    return view('user.index', compact('products'));
  }

  public function show($id)
  {
    $product = Product::findOrFail($id);
    $quantity = Stock::where('product_id', $product->id)
      ->sum('quantity');

    if ($quantity > 9) {
      $quantity = 9;
    }

    return view('user.show', compact('product', 'quantity'));
  }
}
