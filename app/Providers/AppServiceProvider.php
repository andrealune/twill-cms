<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use A17\Twill\Facades\TwillNavigation;
use A17\Twill\View\Components\Navigation\NavigationLink;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        TwillNavigation::addLink(
            NavigationLink::make()->forRoute('twill.homepage')->title('Homepage')
        );
        TwillNavigation::addLink(
            NavigationLink::make()->forModule('news')
                ->setChildren([
                    NavigationLink::make()->forModule('news_categories')->title('Categories')
                ])
        );
        TwillNavigation::addLink(
            NavigationLink::make()->forModule('projects')
                ->setChildren([
                    NavigationLink::make()->forModule('project_categories')->title('Categories')
                ])
        );
        TwillNavigation::addLink(
            NavigationLink::make()->forModule('sectors')
        );
        TwillNavigation::addLink(
            NavigationLink::make()->forModule('services')
        );
    }
}
