<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Swap;
use App\Models\FAQ;
use App\Models\How;
use App\Models\Term;
use App\Models\Signal;
use App\Models\Rate;
use App\Models\Privacy;
use App\Models\Copyright;
use App\Models\About;
use App\Models\Course;
use Auth;
use Illuminate\Support\Facades\Session;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
// OR with multi
use Artesaos\SEOTools\Facades\JsonLdMulti;

// OR
use Artesaos\SEOTools\Facades\SEOTools;

use Carbon\Carbon;

use App\Http\Controllers\ContactFormSubmissionController;
use Spatie\Honeypot\ProtectAgainstSpam;
use Analytics;
use Spatie\Analytics\Period;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {





        // ***Stock Exchange API*** //
        // $queryString = http_build_query([
        //     'access_key' => 'f39afa4bf53c93e273152da1b21c4f98'
        //   ]);

        //   $ch = curl_init(sprintf('%s?%s', 'http://api.marketstack.com/v1/tickers/aapl/eod', $queryString));
        //   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //   $json = curl_exec($ch);
        //   curl_close($ch);

        //   $apiResult = json_decode($json, true);

        $page_title = 'Leading FX School | Forex Training Center';
        $url = url('/');
        $pageDescription = "Learn to trade the global forex market Currencies, Indices, Futures, Commodities, Stocks, and Crypto as a professional,  Pipdot FX Consultants - Forex Academy";
        $SiteTitle = html_entity_decode($page_title);
        $SiteSettings = DB::table('_site_settings')->get();

        foreach($SiteSettings as $Seo){
            $logoLink = "$url/uploads/logo/$Seo->logo_two";
            SEOMeta::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            SEOMeta::setDescription($pageDescription);
            SEOMeta::setCanonical(''.$url.'');

            OpenGraph::setDescription($pageDescription);
            OpenGraph::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            OpenGraph::setUrl(''.$url.'/about-us');
            OpenGraph::addProperty('type', 'website');
            OpenGraph::addProperty('image', $logoLink);
            OpenGraph::addProperty('fb:app_id','pt-pt');

            TwitterCard::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            TwitterCard::setSite(''.$Seo->twitter.'');

            JsonLd::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            JsonLd::setDescription($pageDescription);
            JsonLd::addImage(''.$logoLink.'');
        }

        $Sliders = DB::table('sliders')->get();
        $How = How::all();

        return view('front.index',compact('Sliders','page_title','How'));
    }

    public function contact()
    {

        $page_title = 'Contact US';
        $url = url('/');
        $pageDescription = "Contact The Best Forex Academy In Nairobi - PipDot Consultants, Forex School In Kenya";
        $SiteTitle = html_entity_decode($page_title);
        $SiteSettings = DB::table('_site_settings')->get();

        foreach($SiteSettings as $Seo){
            $logoLink = "$url/uploads/logo/$Seo->logo_two";
            SEOMeta::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            SEOMeta::setDescription($pageDescription);
            SEOMeta::setCanonical(''.$url.'/contact-us');

            OpenGraph::setDescription($pageDescription);
            OpenGraph::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            OpenGraph::setUrl(''.$url.'/contact-us');
            OpenGraph::addProperty('type', 'website');
            OpenGraph::addProperty('image', $logoLink);
            OpenGraph::addProperty('fb:app_id','pt-pt');

            TwitterCard::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            TwitterCard::setSite(''.$Seo->twitter.'');

            JsonLd::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            JsonLd::setDescription($pageDescription);
            JsonLd::addImage(''.$logoLink.'');
        }

        $Sliders = DB::table('sliders')->get();
        return view('front.contact',compact('Sliders','page_title'));
    }

    public function signals()
    {

        $page_title = 'Forex Signal';
        $url = url('/');
        $pageDescription = "Hourly, Daily and Weekly Signals PipDot Consultants Forex Scchool in Nairobi, Forex Signals";
        $SiteTitle = html_entity_decode($page_title);
        $SiteSettings = DB::table('_site_settings')->get();

        foreach($SiteSettings as $Seo){
            $logoLink = "$url/uploads/logo/$Seo->logo_two";
            SEOMeta::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            SEOMeta::setDescription($pageDescription);
            SEOMeta::setCanonical(''.$url.'/forex-signals');

            OpenGraph::setDescription($pageDescription);
            OpenGraph::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            OpenGraph::setUrl(''.$url.'/forex-signals');
            OpenGraph::addProperty('type', 'website');
            OpenGraph::addProperty('image', $logoLink);
            OpenGraph::addProperty('fb:app_id','pt-pt');

            TwitterCard::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            TwitterCard::setSite(''.$Seo->twitter.'');

            JsonLd::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            JsonLd::setDescription($pageDescription);
            JsonLd::addImage(''.$logoLink.'');
        }
        $Signal = DB::table('signals')->orderBy('id','DESC')->limit(20)->get();
        return view('front.signals',compact('Signal','page_title'));
    }

    public function allsignals()
    {
        $page_title = 'All Forex Signal';
        $url = url('/');
        $pageDescription = "All Hourly, Daily and Weekly Signals PipDot Consultants Forex Scchool in Nairobi, Forex Signals";
        $SiteTitle = html_entity_decode($page_title);
        $SiteSettings = DB::table('_site_settings')->get();

        foreach($SiteSettings as $Seo){
            $logoLink = "$url/uploads/logo/$Seo->logo_two";
            SEOMeta::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            SEOMeta::setDescription($pageDescription);
            SEOMeta::setCanonical(''.$url.'/all-forex-signals');

            OpenGraph::setDescription($pageDescription);
            OpenGraph::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            OpenGraph::setUrl(''.$url.'/all-forex-signals');
            OpenGraph::addProperty('type', 'website');
            OpenGraph::addProperty('image', $logoLink);
            OpenGraph::addProperty('fb:app_id','pt-pt');

            TwitterCard::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            TwitterCard::setSite(''.$Seo->twitter.'');

            JsonLd::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            JsonLd::setDescription($pageDescription);
            JsonLd::addImage(''.$logoLink.'');
        }
        $Signal = Signal::all();
        return view('front.allsignals',compact('Signal','page_title'));
    }




    public function faq()
    {
        $FAQ = FAQ::all();
        $page_title = 'Frequently Asked Questions';
        $url = url('/');
        $pageDescription = "Frequently Asked Questions - PipDot Consultants - Forex School in Westlands";
        $SiteTitle = html_entity_decode($page_title);
        $SiteSettings = DB::table('_site_settings')->get();

        foreach($SiteSettings as $Seo){
            $logoLink = "$url/uploads/logo/$Seo->logo_two";
            SEOMeta::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            SEOMeta::setDescription($pageDescription);
            SEOMeta::setCanonical(''.$url.'/frequently-asked-questions');

            OpenGraph::setDescription($pageDescription);
            OpenGraph::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            OpenGraph::setUrl(''.$url.'/frequently-asked-questions');
            OpenGraph::addProperty('type', 'website');
            OpenGraph::addProperty('image', $logoLink);
            OpenGraph::addProperty('fb:app_id','pt-pt');

            TwitterCard::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            TwitterCard::setSite(''.$Seo->twitter.'');

            JsonLd::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            JsonLd::setDescription($pageDescription);
            JsonLd::addImage(''.$logoLink.'');
        }
        $Sliders = DB::table('sliders')->get();
        return view('front.faq',compact('Sliders','page_title','FAQ'));
    }

    public function copy_trading()
    {
        $FAQ = FAQ::all();
        $page_title = 'Copy Trading';
        $url = url('/');
        $pageDescription = "Copy Trading - PipDot Consultants - Forex School in Westlands";
        $SiteTitle = html_entity_decode($page_title);
        $SiteSettings = DB::table('_site_settings')->get();

        foreach($SiteSettings as $Seo){
            $logoLink = "$url/uploads/logo/$Seo->logo_two";
            SEOMeta::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            SEOMeta::setDescription($pageDescription);
            SEOMeta::setCanonical(''.$url.'/copy-trading');

            OpenGraph::setDescription($pageDescription);
            OpenGraph::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            OpenGraph::setUrl(''.$url.'/copy-trading');
            OpenGraph::addProperty('type', 'website');
            OpenGraph::addProperty('image', $logoLink);
            OpenGraph::addProperty('fb:app_id','pt-pt');

            TwitterCard::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            TwitterCard::setSite(''.$Seo->twitter.'');

            JsonLd::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            JsonLd::setDescription($pageDescription);
            JsonLd::addImage(''.$logoLink.'');
        }
        $Sliders = DB::table('sliders')->get();
        return view('front.copy_trading',compact('Sliders','page_title','FAQ'));
    }

    public function faq_single($slung)
    {
        $FAQ = FAQ::where('slung',$slung)->get();
        foreach($FAQ as $f){
            $page_title = 'Frequently Asked Questions';

            $page_title = $f->title;
            $url = url('/');
            $pageDescription = "$page_title - PipDot Consultants - Forex School in Westlands";
            $SiteTitle = html_entity_decode($page_title);
            $SiteSettings = DB::table('_site_settings')->get();

            foreach($SiteSettings as $Seo){
                $logoLink = "$url/uploads/logo/$Seo->logo_two";
                SEOMeta::setTitle(' '.$SiteTitle.' - PipDot Consultants');
                SEOMeta::setDescription($pageDescription);
                SEOMeta::setCanonical(''.$url.'/frequently-asked-questions/'.$slung.'');

                OpenGraph::setDescription($pageDescription);
                OpenGraph::setTitle(' '.$SiteTitle.' - PipDot Consultants');
                OpenGraph::setUrl(''.$url.'/frequently-asked-questions/'.$slung.'');
                OpenGraph::addProperty('type', 'website');
                OpenGraph::addProperty('image', $logoLink);
                OpenGraph::addProperty('fb:app_id','pt-pt');

                TwitterCard::setTitle(' '.$SiteTitle.' - PipDot Consultants');
                TwitterCard::setSite(''.$Seo->twitter.'');

                JsonLd::setTitle(' '.$SiteTitle.' - PipDot Consultants');
                JsonLd::setDescription($pageDescription);
                JsonLd::addImage(''.$logoLink.'');
            }
            $Sliders = DB::table('sliders')->get();
            return view('front.faq_single',compact('Sliders','page_title','FAQ'));
        }
    }

    public function terms()
    {
        $Terms = Term::all();
        $page_title = 'Terms and Conditions';

        $url = url('/');
        $pageDescription = "Terms and Conditions - PipDot Consultants - Forex School In Westlands";
        $SiteTitle = html_entity_decode($page_title);
        $SiteSettings = DB::table('_site_settings')->get();

        foreach($SiteSettings as $Seo){
            $logoLink = "$url/uploads/logo/$Seo->logo_two";
            SEOMeta::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            SEOMeta::setDescription($pageDescription);
            SEOMeta::setCanonical(''.$url.'/terms-and-conditions');

            OpenGraph::setDescription($pageDescription);
            OpenGraph::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            OpenGraph::setUrl(''.$url.'/terms-and-conditions');
            OpenGraph::addProperty('type', 'website');
            OpenGraph::addProperty('image', $logoLink);
            OpenGraph::addProperty('fb:app_id','pt-pt');

            TwitterCard::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            TwitterCard::setSite(''.$Seo->twitter.'');

            JsonLd::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            JsonLd::setDescription($pageDescription);
            JsonLd::addImage(''.$logoLink.'');
        }
        $Sliders = DB::table('sliders')->get();
        return view('front.terms',compact('Sliders','page_title','Terms'));
    }

    public function privacy()
    {
        $Privacy = Privacy::all();
        $page_title = 'Privacy Policy';
        $url = url('/');
        $pageDescription = "Privacy Policy - PipDot Consultants - Forex School In Nairoi";
        $SiteTitle = html_entity_decode($page_title);
        $SiteSettings = DB::table('_site_settings')->get();

        foreach($SiteSettings as $Seo){
            $logoLink = "$url/uploads/logo/$Seo->logo_two";
            SEOMeta::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            SEOMeta::setDescription($pageDescription);
            SEOMeta::setCanonical(''.$url.'/privacy-policy');

            OpenGraph::setDescription($pageDescription);
            OpenGraph::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            OpenGraph::setUrl(''.$url.'/privacy-policy');
            OpenGraph::addProperty('type', 'website');
            OpenGraph::addProperty('image', $logoLink);
            OpenGraph::addProperty('fb:app_id','pt-pt');

            TwitterCard::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            TwitterCard::setSite(''.$Seo->twitter.'');

            JsonLd::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            JsonLd::setDescription($pageDescription);
            JsonLd::addImage(''.$logoLink.'');
        }
        $Sliders = DB::table('sliders')->get();
        return view('front.privacies',compact('Sliders','page_title','Privacy'));
    }

    public function copyright()
    {
        $Copyright = Copyright::all();
        // dd($Copyright);
        $page_title = 'Copyright Statement';
        $url = url('/');
        $pageDescription = "Copyright Statement - PipDot Consultants - Forex School In Kenya";
        $SiteTitle = html_entity_decode($page_title);
        $SiteSettings = DB::table('_site_settings')->get();

        foreach($SiteSettings as $Seo){
            $logoLink = "$url/uploads/logo/$Seo->logo_two";
            SEOMeta::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            SEOMeta::setDescription($pageDescription);
            SEOMeta::setCanonical(''.$url.'/copyright');

            OpenGraph::setDescription($pageDescription);
            OpenGraph::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            OpenGraph::setUrl(''.$url.'/copyright');
            OpenGraph::addProperty('type', 'website');
            OpenGraph::addProperty('image', $logoLink);
            OpenGraph::addProperty('fb:app_id','pt-pt');

            TwitterCard::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            TwitterCard::setSite(''.$Seo->twitter.'');

            JsonLd::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            JsonLd::setDescription($pageDescription);
            JsonLd::addImage(''.$logoLink.'');
        }
        $Sliders = DB::table('sliders')->get();
        return view('front.copyrights',compact('Sliders','page_title','Copyright'));
    }

    public function about(){
        $About = About::all();
        $page_title = 'About Us';
        $url = url('/');
        $pageDescription = "About PipDot Consultants - Forex Academy In Nairobi - Forex School In Kenya";
        $SiteTitle = html_entity_decode($page_title);
        $SiteSettings = DB::table('_site_settings')->get();

        foreach($SiteSettings as $Seo){
            $logoLink = "$url/uploads/logo/$Seo->logo_two";
            SEOMeta::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            SEOMeta::setDescription($pageDescription);
            SEOMeta::setCanonical(''.$url.'/about-us');

            OpenGraph::setDescription($pageDescription);
            OpenGraph::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            OpenGraph::setUrl(''.$url.'/about-us');
            OpenGraph::addProperty('type', 'website');
            OpenGraph::addProperty('image', $logoLink);
            OpenGraph::addProperty('fb:app_id','pt-pt');

            TwitterCard::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            TwitterCard::setSite(''.$Seo->twitter.'');

            JsonLd::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            JsonLd::setDescription($pageDescription);
            JsonLd::addImage(''.$logoLink.'');
        }
        $Sliders = DB::table('sliders')->get();
        return view('front.about',compact('Sliders','page_title','About'));
    }

    public function how(){
        $How = How::all();
        $page_title = 'How it Works';
        $url = url('/');
        $pageDescription = "How it works - PipDot Forex Consultants - Forex School In Nairobi";
        $SiteTitle = html_entity_decode($page_title);
        $SiteSettings = DB::table('_site_settings')->get();

        foreach($SiteSettings as $Seo){
            $logoLink = "$url/uploads/logo/$Seo->logo_two";
            SEOMeta::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            SEOMeta::setDescription($pageDescription);
            SEOMeta::setCanonical(''.$url.'/how-it-works');

            OpenGraph::setDescription($pageDescription);
            OpenGraph::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            OpenGraph::setUrl(''.$url.'/how-it-works');
            OpenGraph::addProperty('type', 'website');
            OpenGraph::addProperty('image', $logoLink);
            OpenGraph::addProperty('fb:app_id','pt-pt');

            TwitterCard::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            TwitterCard::setSite(''.$Seo->twitter.'');

            JsonLd::setTitle(' '.$SiteTitle.' - PipDot Consultants');
            JsonLd::setDescription($pageDescription);
            JsonLd::addImage(''.$logoLink.'');
        }
        $Sliders = DB::table('sliders')->get();
        return view('front.how',compact('Sliders','page_title','How'));
    }

    public function payments($id){
        // Forget current session if Any
        Session::forget('course_id');
        // Create Session WithCourse ID
        session()->put('course_id', $id);
        if(Auth::user()){
            // BTC API
            $url='https://bitpay.com/api/rates';
            $json=json_decode( file_get_contents( $url ) );
            $dollar=$btc=0;

            foreach( $json as $obj ){
                if( $obj->code=='USD' )$btc=$obj->rate;
            }
            // The Conversion Rates
            $dollar=1 / $btc;
            // BTCAPI

            $Rates = DB::table('rates')->get();
            foreach ($Rates as $key => $value) {
                # code...
                $USD_KES = $value->USDKES;

            // USDKES
            // $USD_KES = Swap::latest('USD/KES');
            // $USD_KES = $USD_KES->getValue();
            $page_title = 'Select Payments Method';
            $url = url('/');
            $pageDescription = "Learn to trade the global forex market Currencies, Indices, Futures, Commodities, Stocks, Crypto Trade financial instruments as a professional";
            $SiteTitle = html_entity_decode($page_title);
            $SiteSettings = DB::table('_site_settings')->get();

            foreach($SiteSettings as $Seo){
                $logoLink = "$url/uploads/logo/$Seo->logo_two";
                SEOMeta::setTitle(' '.$SiteTitle.' - PipDot Consultants');
                SEOMeta::setDescription($pageDescription);
                SEOMeta::setCanonical(''.$url.'/secured-payments');

                OpenGraph::setDescription($pageDescription);
                OpenGraph::setTitle(' '.$SiteTitle.' - PipDot Consultants');
                OpenGraph::setUrl(''.$url.'/secured-payments');
                OpenGraph::addProperty('type', 'website');
                OpenGraph::addProperty('image', $logoLink);
                OpenGraph::addProperty('fb:app_id','pt-pt');

                TwitterCard::setTitle(' '.$SiteTitle.' - PipDot Consultants');
                TwitterCard::setSite(''.$Seo->twitter.'');

                JsonLd::setTitle(' '.$SiteTitle.' - PipDot Consultants');
                JsonLd::setDescription($pageDescription);
                JsonLd::addImage(''.$logoLink.'');
            }
            return view('payments',compact('page_title','dollar','USD_KES','id'));
        }
        }else{
            return redirect()->action([CoursesController::class, 'login']);
        }

    }

    public function payments_page($id){
        // Forget current session if Any
        Session::forget('course_id');
        // Create Session WithCourse ID
        session()->put('course_id', $id);
        if(Auth::user()){
            // BTC API
            $url='https://bitpay.com/api/rates';
            $json=json_decode( file_get_contents( $url ) );
            $dollar=$btc=0;

            foreach( $json as $obj ){
                if( $obj->code=='USD' )$btc=$obj->rate;
            }
            // The Conversion Rates
            $dollar=1 / $btc;
            // BTCAPI

            $Rates = DB::table('rates')->get();
            foreach ($Rates as $key => $value) {
                # code...
                $USD_KES = $value->USDKES;

            // USDKES
            // $USD_KES = Swap::latest('USD/KES');
            // $USD_KES = $USD_KES->getValue();
            $page_title = 'Select Payments Method';
            $url = url('/');
            $pageDescription = "Learn to trade the global forex market Currencies, Indices, Futures, Commodities, Stocks, Crypto Trade financial instruments as a professional";
            $SiteTitle = html_entity_decode($page_title);
            $SiteSettings = DB::table('_site_settings')->get();

            foreach($SiteSettings as $Seo){
                $logoLink = "$url/uploads/logo/$Seo->logo_two";
                SEOMeta::setTitle(' '.$SiteTitle.' - PipDot Consultants');
                SEOMeta::setDescription($pageDescription);
                SEOMeta::setCanonical(''.$url.'/secured-payments');

                OpenGraph::setDescription($pageDescription);
                OpenGraph::setTitle(' '.$SiteTitle.' - PipDot Consultants');
                OpenGraph::setUrl(''.$url.'/secured-payments');
                OpenGraph::addProperty('type', 'website');
                OpenGraph::addProperty('image', $logoLink);
                OpenGraph::addProperty('fb:app_id','pt-pt');

                TwitterCard::setTitle(' '.$SiteTitle.' - PipDot Consultants');
                TwitterCard::setSite(''.$Seo->twitter.'');

                JsonLd::setTitle(' '.$SiteTitle.' - PipDot Consultants');
                JsonLd::setDescription($pageDescription);
                JsonLd::addImage(''.$logoLink.'');
            }
            return view('payments',compact('page_title','dollar','USD_KES','id'));
        }
        }else{
            return redirect()->action([CoursesController::class, 'login']);
        }

    }



    public function pay(){
        $page_title = 'Select Payments Method';
        return view('pay',compact('page_title'));
    }



    public function course($slung){
        $Course = DB::table('courses')->where('slung',$slung)->get();
        foreach ($Course as $key => $value) {
            $page_title = $value->title;
            $url = url('/');
                $pageDescription = "$page_title Learn to trade the global forex market Currencies, Indices, Futures, Commodities, Stocks, Crypto Trade financial instruments as a professional";
                $SiteTitle = html_entity_decode($page_title);
                $SiteSettings = DB::table('_site_settings')->get();

                foreach($SiteSettings as $Seo){
                    $logoLink = "$url/uploads/logo/$Seo->logo_two";
                    SEOMeta::setTitle(' '.$SiteTitle.' - PipDot Consultants');
                    SEOMeta::setDescription($pageDescription);
                    SEOMeta::setCanonical(''.$url.'/forex-courses/'.$slung.'');

                    OpenGraph::setDescription($pageDescription);
                    OpenGraph::setTitle(' '.$SiteTitle.' - PipDot Consultants');
                    OpenGraph::setUrl(''.$url.'/forex-courses/'.$slung.'');
                    OpenGraph::addProperty('type', 'website');
                    OpenGraph::addProperty('image', $logoLink);
                    OpenGraph::addProperty('fb:app_id','pt-pt');

                    TwitterCard::setTitle(' '.$SiteTitle.' - PipDot Consultants');
                    TwitterCard::setSite(''.$Seo->twitter.'');

                    JsonLd::setTitle(' '.$SiteTitle.' - PipDot Consultants');
                    JsonLd::setDescription($pageDescription);
                    JsonLd::addImage(''.$logoLink.'');
                }
            $Sliders = DB::table('sliders')->get();
            return view('front.course',compact('Sliders','page_title','Course'));
        }

    }

    public function courses(){
        $Course = Course::all();
        $page_title = 'Forex Courses';
        $url = url('/');
            $pageDescription = "$page_title | Learn to trade the global forex market Currencies, Indices, Futures, Commodities, Stocks, Crypto Trade financial instruments as a professional";
            $SiteTitle = html_entity_decode($page_title);
            $SiteSettings = DB::table('_site_settings')->get();

            foreach($SiteSettings as $Seo){
                $logoLink = "$url/uploads/logo/$Seo->logo_two";
                SEOMeta::setTitle(' '.$SiteTitle.' - PipDot Consultants');
                SEOMeta::setDescription($pageDescription);
                SEOMeta::setCanonical(''.$url.'/forex-courses');

                OpenGraph::setDescription($pageDescription);
                OpenGraph::setTitle(' '.$SiteTitle.' - PipDot Consultants');
                OpenGraph::setUrl(''.$url.'/forex-courses');
                OpenGraph::addProperty('type', 'website');
                OpenGraph::addProperty('image', $logoLink);
                OpenGraph::addProperty('fb:app_id','pt-pt');

                TwitterCard::setTitle(' '.$SiteTitle.' - PipDot Consultants');
                TwitterCard::setSite(''.$Seo->twitter.'');

                JsonLd::setTitle(' '.$SiteTitle.' - PipDot Consultants');
                JsonLd::setDescription($pageDescription);
                JsonLd::addImage(''.$logoLink.'');
            }
        $Sliders = DB::table('sliders')->get();
        return view('front.course-all',compact('Sliders','page_title','Course'));
    }


    public function checkEmail(Request $request){
        $email = $request->input('email');
        $isExists = \App\Models\User::where('email',$email)->first();
        if($isExists){
            return response()->json(array("exists" => true));
        }else{
            return response()->json(array("exists" => false));
        }
    }

    public function postCurency(){
        $jdata =
        '
        {
            "success":true,
            "terms":"https:\/\/currencylayer.com\/terms",
            "privacy":"https:\/\/currencylayer.com\/privacy",
            "timestamp":1629546785,
            "source":"USD",
            "quotes":{
               "USDAED":3.672904,
               "USDAFN":86.022057,
               "USDALL":104.154912,
               "USDAMD":490.860905,
               "USDANG":1.792511,
               "USDAOA":636.511041,
               "USDARS":97.148585,
               "USDAUD":1.401542,
               "USDAWG":1.8005,
               "USDAZN":1.70397,
               "USDBAM":1.672078,
               "USDBBD":2.016243,
               "USDBDT":84.980679,
               "USDBGN":1.675216,
               "USDBHD":0.37702,
               "USDBIF":1981.234505,
               "USDBMD":1,
               "USDBND":1.360862,
               "USDBOB":6.905275,
               "USDBRL":5.407882,
               "USDBSD":0.998632,
               "USDBTC":2.0564459e-5,
               "USDBTN":74.258271,
               "USDBWP":11.322134,
               "USDBYN":2.511755,
               "USDBYR":19600,
               "USDBZD":2.012909,
               "USDCAD":1.282245,
               "USDCDF":2002.000362,
               "USDCHF":0.917449,
               "USDCLF":0.028508,
               "USDCLP":786.630396,
               "USDCNY":6.501504,
               "USDCOP":3865.008122,
               "USDCRC":619.671711,
               "USDCUC":1,
               "USDCUP":26.5,
               "USDCVE":94.267761,
               "USDCZK":21.85725,
               "USDDJF":177.772078,
               "USDDKK":6.356704,
               "USDDOP":56.970163,
               "USDDZD":135.429597,
               "USDEGP":15.699752,
               "USDERN":15.004813,
               "USDETB":45.423442,
               "USDEUR":0.85492,
               "USDFJD":2.12095,
               "USDFKP":0.722603,
               "USDGBP":0.73408,
               "USDGEL":3.110391,
               "USDGGP":0.722603,
               "USDGHS":6.031547,
               "USDGIP":0.722603,
               "USDGMD":51.103853,
               "USDGNF":9794.22074,
               "USDGTQ":7.73412,
               "USDGYD":208.925365,
               "USDHKD":7.790965,
               "USDHNL":23.716338,
               "USDHRK":6.410404,
               "USDHTG":98.361973,
               "USDHUF":299.423504,
               "USDIDR":14403.7,
               "USDILS":3.23874,
               "USDIMP":0.722603,
               "USDINR":74.352504,
               "USDIQD":1456.954775,
               "USDIRR":42190.000352,
               "USDISK":127.910386,
               "USDJEP":0.722603,
               "USDJMD":153.679576,
               "USDJOD":0.70904,
               "USDJPY":109.79504,
               "USDKES":109.396426,
               "USDKGS":84.643804,
               "USDKHR":4076.771822,
               "USDKMF":420.850384,
               "USDKPW":900.000168,
               "USDKRW":1175.240384,
               "USDKWD":0.30115,
               "USDKYD":0.832179,
               "USDKZT":427.297598,
               "USDLAK":9575.532188,
               "USDLBP":1510.045311,
               "USDLKR":199.220313,
               "USDLRD":171.703775,
               "USDLSL":15.310382,
               "USDLTL":2.95274,
               "USDLVL":0.60489,
               "USDLYD":4.533727,
               "USDMAD":8.989912,
               "USDMDL":17.600325,
               "USDMGA":3912.011627,
               "USDMKD":52.6759,
               "USDMMK":1643.692229,
               "USDMNT":2850.901143,
               "USDMOP":8.013337,
               "USDMRO":356.999828,
               "USDMUR":42.404035,
               "USDMVR":15.450378,
               "USDMWK":811.371292,
               "USDMXN":20.36215,
               "USDMYR":4.238039,
               "USDMZN":63.703732,
               "USDNAD":15.310377,
               "USDNGN":411.703727,
               "USDNIO":35.065401,
               "USDNOK":9.002575,
               "USDNPR":118.813371,
               "USDNZD":1.464665,
               "USDOMR":0.385022,
               "USDPAB":0.998632,
               "USDPEN":4.101394,
               "USDPGK":3.551167,
               "USDPHP":50.340258,
               "USDPKR":164.294349,
               "USDPLN":3.916704,
               "USDPYG":6928.614175,
               "USDQAR":3.64075,
               "USDRON":4.218404,
               "USDRSD":100.521501,
               "USDRUB":74.278904,
               "USDRWF":1006.967599,
               "USDSAR":3.749458,
               "USDSBD":8.051613,
               "USDSCR":13.152038,
               "USDSDG":445.503678,
               "USDSEK":8.807775,
               "USDSGD":1.362955,
               "USDSHP":1.377404,
               "USDSLL":10250.000339,
               "USDSOS":586.000338,
               "USDSRD":21.396038,
               "USDSTD":20697.981008,
               "USDSVC":8.738138,
               "USDSYP":1257.573972,
               "USDSZL":15.281953,
               "USDTHB":33.34037,
               "USDTJS":11.394033,
               "USDTMT":3.5,
               "USDTND":2.811038,
               "USDTOP":2.28445,
               "USDTRY":8.494104,
               "USDTTD":6.780115,
               "USDTWD":27.983038,
               "USDTZS":2315.747628,
               "USDUAH":26.613662,
               "USDUGX":3530.05044,
               "USDUSD":1,
               "USDUYU":43.084552,
               "USDUZS":10617.089852,
               "USDVEF":213830222338.07285,
               "USDVND":22793.023852,
               "USDVUV":110.886926,
               "USDWST":2.560764,
               "USDXAF":560.790801,
               "USDXAG":0.043423,
               "USDXAU":0.000561,
               "USDXCD":2.70255,
               "USDXDR":0.704454,
               "USDXOF":560.790801,
               "USDXPF":102.4036,
               "USDYER":250.803597,
               "USDZAR":15.243525,
               "USDZMK":9001.203593,
               "USDZMW":17.200821,
               "USDZWL":321.999592
            }
         }
         ';

        //  $result = json_decode(file_get_contents($jdata), true);
         $result=json_decode($jdata, true);

           $Processed = $result['quotes'];
           $Rates = Rate::all();
           if($Rates->isEmpty()){
                Rate::insert($Processed);
           }else{
                Rate::where('id', '1')->update($Processed);
           }



    }

    public function removeSemicolon()
    {
        // Replace : with - in all video in vids table
        DB::table('blogs')->update(['image_one' => DB::raw("REPLACE(image_one, ':', '-')")]);
        // rename the file

    }

}
