<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Services;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Sử dụng view composer để truyền $recentPosts tới tất cả các view có footer
        View::composer('web.layouts.footer', function ($view) {
            $recentPosts = Services::orderBy('created_at', 'desc')->take(3)->get();
            $view->with('recentPosts', $recentPosts);
        });
    }
}
