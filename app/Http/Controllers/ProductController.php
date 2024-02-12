<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Inertia\Inertia;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        if (!empty($id)) {
            $product = Product::where("alias", $id)->first();
            if (!$product) {
                abort(404);
            }
        }

        $productCategory = Category::with("product")->get();
        $locale = 'ro';
        App::setLocale($locale);
        return Inertia::render('Product', [
            'product' => [],
            'productCategory' => $productCategory,
            'locale' => $locale,
            'localeArray'=>$this->localeArray,
        ]);
    }

    public function product($id)
    {

        $product = Product::where("alias", $id)->first();
        if (!$product) {
            abort(404);
        }

        $productCategory = Category::with("product")->get();
        $locale = 'ro';
        App::setLocale($locale);
        return Inertia::render('Product', [
            'product' => $product,
            'productCategory' => $productCategory,
            'locale' => $locale,
            'category'=>'product',
            'localeArray'=>$this->localeArray,
        ]);
    }

    public function productLocale($locale,$alias)
    {
        $product = Product::where("alias", $alias)->first();
        $productCategory = Category::with("product")->get();

        if (! in_array($locale, $this->localeArray) || !$product) {
            abort(404);
        }

        App::setLocale($locale);
        return Inertia::render('Product', [
            'product' => $product,
            'alias'=>$alias,
            'productCategory' => $productCategory,
            'localeArray'=>$this->localeArray,
            'locale' => $locale,
            'category'=>'product'
        ]);
    }

    public function mainProduct()
    {
        header("Access-Control-Allow-Origin:*");
        header("Content-type: application/json");
        $productCategory = Category::with("product")->get();
        $product = Product::all();
        // return json_encode(["category"=>$productCategory,"product"=>$product]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Inertia\Response
     */
    public function show($id)
    {
        $product = Product::where("alias", $id)->first();
        $productCategory = Category::with("product")->get();
        if (!$product) {
            abort(404);
        }

        return Inertia::render('Product', [
            'product' => $product,
            'productCategory' => $productCategory,
        ]);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "test";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
