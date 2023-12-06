<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Article;
use App\Models\Category;
use App\Models\Pokja;
use App\Models\Profile;
use App\Models\Unit;
use Illuminate\Http\Request;

class GisController extends Controller
{
    public function index(){
      $profile = Profile::first();
      $about = About::all();
      $unit = Unit::all();
      $pokja = Pokja::all();
      $pageConfigs = ['myLayout' => 'horizontal'];
      $infoPublic = Category::where('is_public', '1')->get();
      //WAJIB

      $lastArticle = Article::orderBy('created_at','desc')->take(5)->get();

      return view('pages.gis',['pageConfigs'=> $pageConfigs,'profile'=>$profile,'about'=>$about,'unit'=>$unit,'pokja'=>$pokja,'lastArticle'=>$lastArticle,'infoPublic'=>$infoPublic]);
    }
}
