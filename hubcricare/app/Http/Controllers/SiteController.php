<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMailRequest;
use App\Mail\HubMail;
use App\Models\Product;
use App\Models\Productcategorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Productcategorie::all();
        $products = Product::where('status', true)->get();
        return view('site.index', compact('products', 'categories'));
    }

    public function produtos(){

        $categories = Productcategorie::all();
        $products = Product::where('status', true)->get();
        return view('site.produtos', compact('products', 'categories'));
    }

    public function product($id){

        $product = Product::find($id);
        $categorie = Productcategorie::find($product->productcategorie_id);
        return view('site.product', compact('product', 'categorie'));
    }

    public function sendEmail(SendMailRequest $request){
        $email = $request->all();
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new HubMail($email));
        return redirect()->back();
    }
}
