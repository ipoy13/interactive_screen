<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SefasController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function about()
    {
        return view('sefas/about');
    }

    public function warehouse()
    {
        $warehouses = DB::table('warehouses')->get();

        return view('sefas/warehouse', compact('warehouses'));
    }

    public function product()
    {
        $types = DB::table('product_types')->get();

        return view('sefas/product', compact('types'));
    }

    public function product_type($type)
    {
        $product_type = DB::table('product_types')->where('id', $type)->first();
        $categories = DB::table('product_categories as a')
                        ->leftJoin('products as b', 'a.id', '=', 'b.product_category_id')
                        ->where('a.product_type_id', $type)
                        ->groupBy('a.id')
                        ->select(
                            'a.*',
                            DB::raw('GROUP_CONCAT(b.image) as images')
                        )
                        ->get();
        $other_types = DB::table('product_types')->where('id', '!=', $type)->take(4)->get();

        return view('sefas/product_type', compact('product_type','categories', 'other_types'));
    }

    public function packaging()
    {
        $packagings = DB::table('product_packagings')->get();

        return view('sefas/packaging', compact('packagings'));
    }

    public function service()
    {
        $services = DB::table('services')->get();
        $flows = DB::table('service_flows')->get();

        return view('sefas/service', compact('services', 'flows'));
    }

    public function sector()
    {
        $sectors = DB::table('sectors')->get();

        return view('sefas/sector', compact('sectors'));
    }
}
