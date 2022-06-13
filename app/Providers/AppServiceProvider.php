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
            ->get();
            View::share('splist', $splist);
        }

        if(Schema::hasTable('product_cats')){
            $spcat = DB::table('product_cats')
            ->select('*')
            ->get();
            View::share('spcat', $spcat);
        }

        if(Schema::hasTable('product_lists')){
            $splistnb = DB::table('product_lists')
            ->whereJsonContains('status', 'noibat,hienthi')
            ->get();
            View::share('splistnb', $splistnb);
        }
        // dd($splistnb);
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
