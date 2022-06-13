<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMailRequest;
use App\Mail\HubMail;
use App\Models\Product;
use App\Models\Productcategorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\URL;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
//use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        SEOMeta::setTitle('Hub do Cricaré');
        SEOMeta::setDescription('Empresa de tecnologia e inovação.');
        SEOMeta::setCanonical('https://hubdocricare.com.br');
        SEOMeta::addKeyword(['Hub do Cricaré', 'Hub', 'Inovação', 'Tecnologia', 'Sites', 'Sistemas', 'Drones']);

        OpenGraph::setDescription('Empresa de tecnologia e inovação.');
        OpenGraph::setTitle('Hub do Cricaré');
        OpenGraph::setUrl(Url::current());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addImage(asset('assets/img/logo3.png'));

        JsonLd::setTitle('Hub do Cricaré');
        JsonLd::setDescription('Empresa de tecnologia e inovação.');
        JsonLd::addImage(asset('assets/img/logo3.png'));

        $categories = Productcategorie::all();
        $products = Product::where('status', true)->get();
        return view('site.index', compact('products', 'categories'));
    }

    public function produtos(){
        SEOMeta::setTitle('Hub do Cricaré - Serviços');
        SEOMeta::setDescription('Empresa de tecnologia e inovação.');
        SEOMeta::setCanonical('https://hubdocricare.com.br');

        OpenGraph::setDescription('Empresa de tecnologia e inovação.');
        OpenGraph::setTitle('Hub do Cricaré');
        OpenGraph::setUrl(Url::current());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addImage(asset('assets/img/logo3.png'));

        JsonLd::setTitle('Hub do Cricaré');
        JsonLd::setDescription('Empresa de tecnologia e inovação.');
        JsonLd::addImage(asset('assets/img/logo3.png'));

        $categories = Productcategorie::all();
        $products = Product::where('status', true)->get();

        $keywords = ['Hub do Cricaré', 'Hub', 'Inovação', 'Tecnologia', 'Sites', 'Sistemas', 'Drones'];
        SEOMeta::addKeyword($keywords);
        return view('site.produtos', compact('products', 'categories'));
    }

    public function product($id){

        $product = Product::find($id);
        $categorie = Productcategorie::find($product->productcategorie_id);

        $keywords = ['Hub do Cricaré', 'Hub', 'Inovação', 'Tecnologia', 'Sites', 'Sistemas', 'Drones'];

        SEOMeta::setTitle($product->name);
        SEOMeta::setDescription($product->description);
        SEOMeta::setCanonical('https://hubdocricare.com.br');
        SEOMeta::addKeyword($keywords);

        OpenGraph::setDescription($product->description);
        OpenGraph::setTitle($product->name);
        OpenGraph::setUrl(Url::current());
        OpenGraph::addProperty('type', 'article');
        OpenGraph::setArticle([
            'published_time' => $product->created_at,
            'section' => $categorie->categorie
        ]);

        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addImage(asset('assets/img/logo3.png'));

        JsonLd::setTitle($product->name);
        JsonLd::setDescription($product->description);
        JsonLd::addImage(asset('assets/img/logo3.png'));

        return view('site.product', compact('product', 'categorie'));
    }

    public function sendEmail(SendMailRequest $request){
        $email = $request->all();
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new HubMail($email));
        return redirect()->back();
    }
}
