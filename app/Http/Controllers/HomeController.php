<?php

namespace App\Http\Controllers;
use App\Models\Contract;
use App\Models\Review;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
    $TotalContacts = Contract::count(); 
    $TotalReviews = Review::count();
    $TotalOrders = Contact::count();
    $TotalUsers = User::count();
    return view('dashboard', compact( 'TotalContacts','TotalReviews','TotalOrders','TotalUsers'));
    }
    
}
