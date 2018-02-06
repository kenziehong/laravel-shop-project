<?php

namespace App\Providers;

use App\menu_loai;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composerNavigation();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function composerNavigation(){
        view()->composer('layouts.banner', function($view){
            $view->with('ds_menu', menu_loai::with('loai_san_pham')->get());
       });
    }
}
