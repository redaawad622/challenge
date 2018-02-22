<?php

namespace App\Providers;

use App\Event;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
   
public function boot()
{
    Schema::defaultStringLength(191);

    ///?sql_dump-1
    if (env('APP_ENV')=='local')
    {
        DB::connection()->enableQueryLog();
        Event::listen('kernel.handled',function ($request,$response){
            if($request->has('sql_dump')){
                $queries=DB::getQueryLog();
                dd($queries);
            }

        });

    }
}

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
