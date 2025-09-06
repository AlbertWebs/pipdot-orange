<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostView;
use App\Models\Blog;
use App\Models\Category;
use DB;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
// OR with multi
use Artesaos\SEOTools\Facades\JsonLdMulti;

// OR
use Artesaos\SEOTools\Facades\SEOTools;

class BlogsController extends Controller
{
    public function show(Blog $blog)
        {
            $blog = Blog::find($blog->id);

            if($post->showBlog()){
                return $post;
            }

            $blog->increment('views');//I have a separate column for views in the post table. This will increment the views column in the posts table.
            PostView::createViewLog($blog);
            return $post;
        }
    
    public function index(){
        $Blogs = DB::table('blogs')->orderBy('id','DESC')->paginate(5);
        $BlogsOne = DB::table('blogs')->orderBy('id','DESC')->get();
        foreach ($BlogsOne as $key => $value) {
            $page_title = 'Latest News';
            $url = url('/');
            $pageDescription = "$page_title - Learn to trade the global forex market Currencies, Indices, Futures, Commodities, Stocks, Crypto Trade financial instruments as a professional";
            $SiteTitle = html_entity_decode($page_title);
            $SiteSettings = DB::table('_site_settings')->get();

            foreach($SiteSettings as $Seo){
                $logoLink = "$url/uploads/blogs/$value->image_one";
                SEOMeta::setTitle(' '.$SiteTitle.' - PipDot FX Consultants');
                SEOMeta::setDescription($pageDescription);
                SEOMeta::setCanonical(''.$url.'/articles');

                OpenGraph::setDescription($pageDescription);
                OpenGraph::setTitle(' '.$SiteTitle.' - PipDot FX Consultants');
                OpenGraph::setUrl(''.$url.'/articles');
                OpenGraph::addProperty('type', 'website');
                OpenGraph::addProperty('image', $logoLink);
                OpenGraph::addProperty('fb:app_id','pt-pt');

                TwitterCard::setTitle(' '.$SiteTitle.' - PipDot FX Consultants');
                TwitterCard::setSite(''.$Seo->twitter.'');
                
                JsonLd::setTitle(' '.$SiteTitle.' - PipDot FX Consultants');
                JsonLd::setDescription($pageDescription);
                JsonLd::addImage(''.$logoLink.'');
            }
        $Category = DB::table('categories')->inRandomOrder()->get();
        return view('blog.index',compact('page_title','Category','Blogs'));
        }
        
    }

    public function blog_cat($CategorySlung){
        $BlogsOne = DB::table('blogs')->orderBy('id','DESC')->get();
        foreach ($BlogsOne as $key => $value) {
            $page_title = 'Latest News';
            $url = url('/');
            $pageDescription = "$value->title Learn to trade the global forex market Currencies, Indices, Futures, Commodities, Stocks, Crypto Trade financial instruments as a professional";
            $SiteTitle = html_entity_decode($page_title);
            $SiteSettings = DB::table('_site_settings')->get();

            foreach($SiteSettings as $Seo){
                $logoLink = "$url/uploads/blogs/$value->image_one";
                SEOMeta::setTitle(' '.$SiteTitle.' - PipDot FX Consultants');
                SEOMeta::setDescription($pageDescription);
                SEOMeta::setCanonical(''.$url.'/articles/category/'.$CategorySlung.'');

                OpenGraph::setDescription($pageDescription);
                OpenGraph::setTitle(' '.$SiteTitle.' - PipDot FX Consultants');
                OpenGraph::setUrl(''.$url.'/articles/category/'.$CategorySlung.'');
                OpenGraph::addProperty('type', 'website');
                OpenGraph::addProperty('image', $logoLink);
                OpenGraph::addProperty('fb:app_id','pt-pt');

                TwitterCard::setTitle(' '.$SiteTitle.' - PipDot FX Consultants');
                TwitterCard::setSite(''.$Seo->twitter.'');
                
                JsonLd::setTitle(' '.$SiteTitle.' - PipDot FX Consultants');
                JsonLd::setDescription($pageDescription);
                JsonLd::addImage(''.$logoLink.'');
            }

                $Category = DB::table('categories')->where('slung',$CategorySlung)->get();
                if($Category->isEmpty()){
                    this.index();
                }else{
                    foreach($Category as $Cat){
                        $Blogs = DB::table('blogs')->where('category',$Cat->id)->paginate(5);
                        $page_title = 'Latest News';
                        return view('blog.index',compact('page_title','Category','Blogs'));
                    }
                }
            }
        
       
    }

    public function blog($slung){
        $Blogs = DB::table('blogs')->where('slung',$slung)->get();
        foreach ($Blogs as $key => $value) {
            $page_title = $value->title;
            $url = url('/');
            $pageDescription = "$value->title Learn to trade the global forex market Currencies, Indices, Futures, Commodities, Stocks, Crypto Trade financial instruments as a professional";
            $SiteTitle = html_entity_decode($page_title);
            $SiteSettings = DB::table('_site_settings')->get();

            foreach($SiteSettings as $Seo){
                $logoLink = "$url/uploads/blogs/$value->image_one";
                SEOMeta::setTitle(' '.$SiteTitle.' - PipDot FX Consultants');
                SEOMeta::setDescription($pageDescription);
                SEOMeta::setCanonical(''.$url.'/articles');

                OpenGraph::setDescription($pageDescription);
                OpenGraph::setTitle(' '.$SiteTitle.' - PipDot FX Consultants');
                OpenGraph::setUrl(''.$url.'/articles');
                OpenGraph::addProperty('type', 'website');
                OpenGraph::addProperty('image', $logoLink);
                OpenGraph::addProperty('fb:app_id','pt-pt');

                TwitterCard::setTitle(' '.$SiteTitle.' - PipDot FX Consultants');
                TwitterCard::setSite(''.$Seo->twitter.'');
                
                JsonLd::setTitle(' '.$SiteTitle.' - PipDot FX Consultants');
                JsonLd::setDescription($pageDescription);
                JsonLd::addImage(''.$logoLink.'');
            }
        $page_title = 'Latest News';

        $Category = DB::table('categories')->inRandomOrder()->get();
        return view('blog.blog',compact('page_title','Category','Blogs'));
        }
    }


    
}
