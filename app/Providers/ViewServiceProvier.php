<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\CategoryComposer;
use App\Http\View\Composers\ProductComposer;
use App\Models\AboutUs;
use App\Models\FeatureSection;
use App\Models\OurCustomer;
use App\Models\Post;

class ViewServiceProvier extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['admin.pages.categories.index', 'admin.pages.products.create', 'admin.pages.products.edit', 'partials.body'], CategoryComposer::class);
        View::composer(['admin.pages.products.index', 'partials.*', 'pages.shop.index'], ProductComposer::class);
        View::composer(['pages.blog.index', 'partials.blog'], function($view){
            $view->with('posts', Post::paginate(12) );
        });

        View::composer(['admin.pages.feature-section.index', 'partials.banner'], function($view){
            $view->with('feature', FeatureSection::first() );
        });

        View::composer(['admin.pages.about-us.index', 'pages.about-us.index'], function($view){
            $view->with('aboutUs', AboutUs::first() );
        });

        View::composer(['admin.pages.our-customers.index', 'partials.brand'], function($view){
            $view->with('customers', OurCustomer::all() );
        });
    }
}
