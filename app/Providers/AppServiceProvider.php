<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(Schema::hasTable('product_lists')){
            $splist = DB::table('product_lists')
            ->select('*')
            ->whereJsonContains('status', 'noibat')
            ->get();
            View::share('splist', $splist);
        }

        if(Schema::hasTable('blogs')){
            $blogs = DB::table('blogs')
            ->select('*')
            ->get();
            View::share('blogs', $blogs);
        } 

        if(Schema::hasTable('slides')){
            $slides = DB::table('slides')
            ->select('*')
            ->get();
            View::share('slides', $slides);
        }
    }
}
