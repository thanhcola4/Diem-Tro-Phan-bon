<?php

namespace App\Http\Controllers;
use App\Models\Contract;
use App\Models\Review;
use App\Models\Contact;
use App\Models\User;
use App\Models\Services;
use App\Models\News;
Use App\Models\SiteStatistics;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
    $TotalContacts = Contract::count(); 
    $TotalReviews = Review::count();
    $TotalOrders = Contact::count();
    $TotalUsers = User::count();
    $TotalViews = Services::sum('views');
    $TotalNews = News::sum('views');
    $stats = SiteStatistics::first();

    return view('dashboard', compact( 'TotalContacts','TotalReviews','TotalOrders','TotalUsers','TotalViews','TotalNews','stats'));
    }
    
}
