<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\admin\Categroy;
use App\Models\Category;
use App\Models\Order_rule;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::where('active', true)->get();
        return view('products.index')
                ->with(compact('products', 'categories'));
    }

    public function show(Product $product)
    {
        return view('products.show')
                ->with(compact('product'));
    }

    public function category(Category $category)
    {
        $products = Product::where('category_id', $category->id)->get();
        return view('products.category')
            ->with(compact('category', 'products'), $category->id);
    }
 
    public function order(Product $product, Request $request)
    {
        $rule = new Order_rule();
        $rule->product = $product;
        $rule->type = $request->type;
        $rule->size = $request->size;

        $request->session()->push('cart', $rule);
        return redirect()->route('cart');
    }

}
