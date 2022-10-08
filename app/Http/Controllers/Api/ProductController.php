<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     // Method for retrieving all products

    public function index()
    {

        try {
        $products = Product::all();

        return response()->json([
            'status' => true,
            'products' => $products
        ]);
    } catch (Exception $e){
        return response()->json([
            'error' => 'Unable to retrieve all products'
        ]);
    }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     // Method for storing or saving a product through request

    public function store(StoreProductRequest $request)
    {
        try {
        $product = Product::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Product created successfully!",
            'product' => $product
        ], 200);
    } catch (Exception $e){
        return response()->json([
            'error' => 'Unable to save product'
        ]);
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

    // Method for retrieving a single product through request
    public function show(Request $request, $product_id)
    {
        try {
        $product = Product::select('*')->where('id','=', $request->product_id)->get();
        return response()->json([
            'status' => true,
            'message' => "Product found successfully!",
            'product' => $product
        ], 200);
    } catch (Exception $e) {
        return response()->json([
            'error' => 'Unable to identify product'
        ]);
    }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

    // Method for updating a product through request
    public function update(Request $request, $product_id)
    {
        try {
        $product = Product::find($product_id);
        $product->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Product updated successfully!",
            'product' => $product
        ], 200);
    } catch (Exception $e){
        return response()->json([
            'error' => 'Unable to update product'
        ]);
    }
    }

    // Method for retrieving all categories

    public function categories()
    {
        try {
        $categories = Product::select('category')->pluck('category');

        return response()->json([
            'status' => true,
            'message' => "Categories found successfully!",
            'categories' => $categories
        ], 200);
    } catch (Exception $e){
        return response()->json([
            'error' => 'Unable to retrieve categories'
        ]);
    }
    }

    // Method for retrieving products from a category


    public function categoryProducts($category_name)
    {
        try {
        $category_product = Product::select('*')->where('category', '=', $category_name)->get();

        return response()->json([
            'status' => true,
            'message' => "Category products successfully!",
            'categories' => $category_product
        ], 200);
    } catch (Exception $e){
        return response()->json([
            'error' => 'Unable to retrieve products by category'
        ]);
    }
    }

    // Method for searching a product through keywords

    public function search($keywords)
    {
        try {
        $product = Product::where('title','like','%'.$keywords.'%')->get();
        return response()->json([
            'status' => true,
            'message' => "Product/s found successfully!",
            'products' => $product
        ], 200);
    } catch (Exception $e) {
        return response()->json([
            'error' => 'Unable to search product'
        ]);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

     // Method for deleting a product through 
     
    public function destroy(Request $request, $product_id)
    {
        try {
        $product = Product::find($product_id);
        $product->delete();

        return response()->json([
            'status' => true,
            'message' => "Product deleted successfully!",
        ], 200);
    } catch (Exception $e){
        return response()->json([
            'error' => 'Unable to delete product'
        ]);
    }
    }


}
