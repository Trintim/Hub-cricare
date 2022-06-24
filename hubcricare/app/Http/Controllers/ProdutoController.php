<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Productcategorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdutoController extends Controller
{
    private $products;
    private $categories;

    public function __construct(Product $products, Productcategorie $categories)
    {
        $this->products = $products;
        $this->categories = $categories;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->products->all();

        return view('admin.produtos.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = $this->categories->all();
        return view('admin.produtos.crud', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $datas = $request->all();
        if($request->hasFile('image')){
            $datas['image'] = $request->file('image')->store('products', 'public');
        }
        else{
            return redirect()->back()->withInput($request->all())->with('danger', 'Insira uma imagem para o produto!');
        }
        $this->products->create($datas);
        return redirect(route('admin.produtos.index'))->with('success', 'Produto cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->products->find($id);
        $categorie = $this->categories->where('id', $product->productcategorie_id)->first();

        return json_encode([$product, $categorie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = $this->products->find($id);
        $categories = $this->categories->all();

        return view('admin.produtos.crud', compact(['categories', 'product']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $datas = $request->all();
        $product = $this->products->find($id);
        if($request->hasFile('image')){
            Storage::delete('public/'.$product->image);
            $datas['image'] = $request->file('image')->store('products', 'public');
        }

        $product->update($datas);
        return redirect(route('admin.produtos.index'))->with('success', 'Produto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = $this->products->find($id);
        Storage::delete('public/'.$product->image);
        $product->delete();
        return redirect(route('admin.produtos.index'))->with('success', 'Produto excluido com sucesso!');
    }

    public function stateUpdate($id){

        $product = $this->products->find($id);

        if ($product->status) {
            $product->update(["status" => false]);
        } else {
            $product->update(["status" => true]);
        }

        return redirect(route('admin.produtos.index'))->with('success', 'Status do Produto modificado');
    }
}
