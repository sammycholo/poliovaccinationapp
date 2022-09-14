<?php

namespace App\Http\Controllers\Api\User;

use App\Helpers\Api;
use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news(){
        $news = News::all();
        return Api::setResponse('news', $news);
    }
}
