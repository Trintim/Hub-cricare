<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductcategorieRequest;
use App\Models\Product;
use App\Models\Productcategorie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductCategorieController extends Controller
{
    private $products;
    private $productcategories;

    public function __construct(Product $products, Productcategorie $productcategories)
    {
        $this->products = $products;
        $this->productcategories =$productcategories;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productcategories = $this->productcategories->all();
        return view('admin.productcategorie.index', compact('productcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.productcategorie.crud');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductcategorieRequest $request)
    {
        $data = $request->all();
        $productcategories = $this->productcategories->make($data);

        $slug = Str::of($productcategories->categorie)->slug('-');
        $productcategories->categorie_slug = $slug;
        $productcategories->save();

        return redirect(route('admin.productCategories.index'))->with('success', 'Categoria de Produto cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productcategorie = $this->productcategories->find($id);

        $products = $this->products->where('productcategorie_id', $id)->get();

        return json_encode([$productcategorie, $products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productcategorie = $this->productcategories->find($id);
        return view('admin.productcategorie.crud', compact('productcategorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductcategorieRequest $request, $id)
    {
        $data = $request->all();
        $productcategories = $this->productcategories->find($id);

        $slug = Str::of($data['categorie'])->slug('-')->__toString();
        $datas_treated= array_merge($data, ['categorie_slug' => $slug]);
        $productcategories->update($datas_treated);

        return redirect(route('admin.productCategories.index'))->with('success', 'Categoria de Produto atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productcategories = $this->products->find($id);
        $productcategories->delete();
        return redirect(route('admin.productCategories.index'))->with('success', 'Produto excluido com sucesso!');
    }
}
