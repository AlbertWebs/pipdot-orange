<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if($request->ajax())
        {
            $output="";
            $products=DB::table('topics')->where('title','LIKE','%'.$request->search."%")->where('course_id',Auth::user()->course_registered_id)->get();
            if($products)
                {
                    foreach ($products as $key => $product)
                    {
                        $url = url('/');
                        $output.='<a href="'.$url.'/apps/player/'.$product->slung.'"><span>'.$product->title.'</span></a><br>';
                    }
                }

                return Response($output);

            
        }
    }

    public function search_faq(Request $request)
    {
        if($request->ajax())
        {
            $output="";
            $products=DB::table('faq')->where('title','LIKE','%'.$request->search."%")->limit(5)->get();
            if($products->isEmpty()){
                $output = '';
                return Response($output);
            }else{
                if($products)
                {
                    foreach ($products as $key => $product)
                    {
                        $url = url('/');
                        $output.='<a href="'.$url.'/frequently-asked-questions/'.$product->slung.'"><span>'.$product->title.'</span></a><br>';
                    }
                }
            else{
                    $output = '';
                }

                return Response($output);

            }
            
            
        }
    }

    
}
