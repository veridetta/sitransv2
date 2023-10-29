<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Profile;
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
      $profile = Profile::first();
      $pageConfigs = ['myLayout' => 'horizontal'];
      $lastArticle = Article::orderBy('created_at','desc')->take(5)->get();

    return view('pages.home',['pageConfigs'=> $pageConfigs,'profile'=>$profile,'lastArticle'=>$lastArticle]);
    }
}