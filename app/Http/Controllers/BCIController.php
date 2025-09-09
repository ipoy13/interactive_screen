<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BCIController extends Controller
{
    public function about()
    {
        return view('bci/about');
    }

    public function product()
    {
        $categories = DB::table('bci_product_categories')->orderBy('name', 'ASC')->get();

        return view('bci/product', compact('categories'));
    }

    public function product_category($category)
    {
        $product_category = DB::table('bci_product_categories')->where('id', $category)->first();
        $products = DB::table('bci_products as a')
                    ->leftJoin('bci_product_subcategories as b', 'a.subcategory_id', '=', 'b.id')
                    ->where('a.category_id', $category)
                    ->select('a.*', 'b.name as subcategory_name')
                    ->get();

        return view('bci/product_category', compact('product_category', 'products'));
    }
}
