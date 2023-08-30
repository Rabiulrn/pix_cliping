<?php

namespace App\Http\Controllers;

use App\Models\PathServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view('home');
    }

    public function aboutUs()
    {
        $title = 'About Us';
        return  view('about-us',compact('title'));
    }
    public function price()
    {
        $title = 'Price';
        $pathServices = PathServices::where('status', 'active')->get();
        return  view('price',compact('title','pathServices'));
    }
    public function workflow()
    {
        $title = 'Workflow';
        return  view('workflow',compact('title'));
    }
    public function services()
    {
        $title = 'Services';
        return  view('services.index',compact('title'));
    }
    public function singleService($slug)
    {
        $title = ucwords(preg_replace("/[^a-zA-Z0-9]+/", " ", $slug));
        $url = explode('/', URL::current());
        if (end($url) === 'clipping-path') {
            return  view('services.clipping-path',compact('title'));
        }else if (end($url) === 'background-remove') {
            return  view('services.background-remove',compact('title'));
        }else if (end($url) === 'shadow-making') {
            return  view('services.shadow-making',compact('title'));
        }else if (end($url) === 'image-masking') {
            return  view('services.image-masking',compact('title'));
        }else if (end($url) === 'ghost-mannequin') {
            return  view('services.ghost-mannequin',compact('title'));
        }else if (end($url) === 'multi-clipping-path') {
            return  view('services.multi-clipping-path',compact('title'));
        }else if (end($url) === 'photo-recoloring') {
            return  view('services.photo-recoloring',compact('title'));
        }else if (end($url) === 'school-photo-editing') {
            return  view('services.school-photo-editing',compact('title'));
        }else if (end($url) === 'photo-retouching') {
            return  view('services.photo-retouching',compact('title'));
        }else if (end($url) === 'jewelry-retouch') {
            return  view('services.jewelry-retouch',compact('title'));
        }else if (end($url) === 'product-photo-retouching') {
            return  view('services.product-photo-retouching',compact('title'));
        }else if (end($url) === 'beauty-retouching') {
            return  view('services.beauty-retouching',compact('title'));
        }else if (end($url) === 'headshot-retouching') {
            return  view('services.headshot-retouching',compact('title'));
        }else if (end($url) === 'newborn-baby-photo-editing') {
            return  view('services.newborn-baby-photo-editing',compact('title'));
        }else if (end($url) === 'food-photo-retouching') {
            return  view('services.food-photo-retouching',compact('title'));
        }else if (end($url) === 'real-estate-photo-editing') {
            return  view('services.real-estate-photo-editing',compact('title'));
            }else if (end($url) === 'essential-editing') {
            return  view('services.essential-editing',compact('title'));
        }else if (end($url) === 'amazon-e-bay-shopify') {
            return  view('services.amazon-e-bay-shopify',compact('title'));
        }else if (end($url) === 'ecommerce-360-degree-editing') {
            return  view('services.ecommerce-360-degree-editing',compact('title'));
        }else if (end($url) === 'image-optimization') {
            return  view('services.image-optimization',compact('title'));
        }else if (end($url) === 'product-photography') {
            return  view('services.product-photography',compact('title'));
        }else if (end($url) === 'apparels-photography') {
            return  view('services.apparels-photography',compact('title'));
        }else if (end($url) === 'jewelry-photography') {
            return  view('services.jewelry-photography',compact('title'));
        }else if (end($url) === 'school-photography') {
            return  view('services.school-photography',compact('title'));
        }
    }

    public function freeTrail(){
        $title = 'Free Trail';
        $pathServices = PathServices::where('status', 'active')->get();
        return  view('free-trail',compact('title','pathServices'));
    }

    public function sendFreeTrail(Request $request){
        $data = $request->except('_token');
        return json_encode($data);
    }

    public function faq()
    {
        $title = 'FAQ';
        return  view('faq',compact('title'));
    }
    public function contact()
    {
        $title = 'Contact';
        return  view('contact',compact('title'));
    }
}
