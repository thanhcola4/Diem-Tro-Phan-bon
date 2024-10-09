<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class WebNewController extends Controller
{
    public function index()
    {
        $newsItems = News::paginate(3);
        
        return view ('web.news', compact('newsItems'));
    }
    public function shownews($id)
    {
        $new = News::findOrFail($id);
        $new->views = $new->views + 1;
        $new->save();  // Lưu lại lượt truy cập
        return view('web.shownews', compact('new'));
    }
}
