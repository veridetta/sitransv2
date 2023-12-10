<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Announcement;
use App\Models\Application;
use App\Models\Article;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Pokja;
use App\Models\Profile;
use App\Models\SideBanner;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    //fungsi index
    public function index()
    {
      //WAJIB
      $profile = Profile::first();
      $about = About::all();
      $unit = Unit::all();
      $pokja = Pokja::all();
      $pageConfigs = ['myLayout' => 'horizontal'];
      $infoPublic = Category::where('is_public', '1')->get();
      //WAJIB
      $lastArticle = Article::orderBy('created_at','desc')->take(5)->get();
      $banner = Banner::all();
      $sideBanner = SideBanner::all();
      $announcement = Announcement::all();
      $publicApp = Application::where('jenis','Public')->get();
      $internApp = Application::where('jenis','Intern')->get();
      $info = Article::whereHas('category', function ($query) {
        $query->where('is_info', '1');
      })->orderBy('created_at', 'desc')->take(5)->get();
      $popular = Article::orderBy('visitor','desc')->take(5)->get();
      $swiper = Article::where('content','like','%<img%')->orderBy('created_at','desc')->take(5)->get();

      return view('pages.home',['pageConfigs'=> $pageConfigs,'profile'=>$profile,'about'=>$about,'unit'=>$unit,'pokja'=>$pokja,'swiper'=>$swiper,'lastArticle'=>$lastArticle,'info'=>$info,'popular'=>$popular,'banner'=>$banner,'sideBanner'=>$sideBanner,'announcement'=>$announcement,'publicApp'=>$publicApp,'internApp'=>$internApp,'infoPublic'=>$infoPublic]);
    }
    //fungsi pages
    public function pages($slug)
    {
      //WAJIB
      $profile = Profile::first();
      $about = About::all();
      $unit = Unit::all();
      $pokja = Pokja::all();
      $pageConfigs = ['myLayout' => 'horizontal'];
      $infoPublic = Category::where('is_public', '1')->get();
      //WAJIB

      $lastArticle = Article::orderBy('created_at','desc')->take(5)->get();
      $content = About::where('slug',$slug)->first();
      return view('pages.pages',['pageConfigs'=> $pageConfigs,'profile'=>$profile,'about'=>$about,'unit'=>$unit,'pokja'=>$pokja,'lastArticle'=>$lastArticle,'content'=>$content,'infoPublic'=>$infoPublic]);
    }
    public function news($slug)
    {
      //WAJIB
      $profile = Profile::first();
      $about = About::all();
      $unit = Unit::all();
      $pokja = Pokja::all();
      $pageConfigs = ['myLayout' => 'horizontal'];
      $infoPublic = Category::where('is_public', '1')->get();
      //WAJIB
      $popular = Article::orderBy('visitor','desc')->take(5)->get();
      //ambil data dari about where slug
      $content = Article::where('slug',$slug)->first();
      $content->increment('visitor');
      //ambil artikel terkait berdasarkan tags dan kategori
      $related = Article::
        whereHas('category', function ($query) use ($content) {
          $query->whereIn('categories.id', $content->category->pluck('id'));
        })
        ->orWhere(function ($query) use ($content) {
            foreach ($content->tags as $tag) {
                $query->orWhere('tags', 'LIKE', '%' . $tag . '%');
            }
        })
        ->where('id', '!=', $content->id)
        ->orderBy('created_at', 'desc')
        ->take(5)
        ->get();

      //return
      return view('pages.news',['pageConfigs'=> $pageConfigs,'profile'=>$profile,'about'=>$about,'unit'=>$unit,'pokja'=>$pokja,'content'=>$content,'related'=>$related,'popular'=>$popular,'infoPublic'=>$infoPublic]);
    }
    public function categories($slug)
    {
      //WAJIB
      $profile = Profile::first();
      $about = About::all();
      $unit = Unit::all();
      $pokja = Pokja::all();
      $pageConfigs = ['myLayout' => 'horizontal'];
      $infoPublic = Category::where('is_public', '1')->get();
      //WAJIB
      $popular = Article::orderBy('visitor','desc')->take(5)->get();
      //ambil data dari about where slug
      $perPage = 10; // Gantilah dengan jumlah item yang ingin ditampilkan per halaman
      $category = Category::where('slug', $slug)->first();
      $content = Article::where('category_id',$category->id)->orderBy('created_at', 'desc')->paginate($perPage);
      $related = Article::
        orderBy('created_at', 'desc')
        ->take(5)
        ->get();
      //return
      return view('pages.category',['pageConfigs'=> $pageConfigs,'profile'=>$profile,'about'=>$about,'unit'=>$unit,'pokja'=>$pokja,'content'=>$content,'related'=>$related,'popular'=>$popular,'infoPublic'=>$infoPublic,'category'=>$category]);
    }
    public function search(Request $request)
    {
      $query = $request->get('query');
      //WAJIB
      $profile = Profile::first();
      $about = About::all();
      $unit = Unit::all();
      $pokja = Pokja::all();
      $pageConfigs = ['myLayout' => 'horizontal'];
      $infoPublic = Category::where('is_public', '1')->get();
      //WAJIB
      $popular = Article::orderBy('visitor','desc')->take(5)->get();
      //ambil data dari about where slug
      $perPage = 10; // Gantilah dengan jumlah item yang ingin ditampilkan per halaman
      $content = Article::where('title','like','%'.$query.'%')->orderBy('created_at', 'desc')->paginate($perPage);
      $related = Article::
        orderBy('created_at', 'desc')
        ->take(5)
        ->get();
      //return

      return view('pages.search',['pageConfigs'=> $pageConfigs,'profile'=>$profile,'about'=>$about,'unit'=>$unit,'pokja'=>$pokja,'content'=>$content,'related'=>$related,'popular'=>$popular,'infoPublic'=>$infoPublic,'query'=>$query]);
    }
    public function beban(){
      $profile = Profile::first();
      $about = About::all();
      $unit = Unit::all();
      $pokja = Pokja::all();
      $pageConfigs = ['myLayout' => 'horizontal'];
      $infoPublic = Category::where('is_public', '1')->get();
      //WAJIB

      $lastArticle = Article::orderBy('created_at','desc')->take(5)->get();

      return view('pages.beban',['pageConfigs'=> $pageConfigs,'profile'=>$profile,'about'=>$about,'unit'=>$unit,'pokja'=>$pokja,'lastArticle'=>$lastArticle,'infoPublic'=>$infoPublic]);
    }
    public function dokumentasi(){
      $profile = Profile::first();
      $about = About::all();
      $unit = Unit::all();
      $pokja = Pokja::all();
      $pageConfigs = ['myLayout' => 'horizontal'];
      $infoPublic = Category::where('is_public', '1')->get();
      //WAJIB

      $lastArticle = Article::orderBy('created_at','desc')->take(5)->get();

      return view('pages.dokumentasi',['pageConfigs'=> $pageConfigs,'profile'=>$profile,'about'=>$about,'unit'=>$unit,'pokja'=>$pokja,'lastArticle'=>$lastArticle,'infoPublic'=>$infoPublic]);
    }
}
