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
            NavigationLink::make()->forModule('pages')
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
        TwillNavigation::addLink(
            NavigationLink::make()->forModule('teams')->title('Team')
                ->setChildren([
                    NavigationLink::make()->forModule('offices')
                ])
        );
        TwillNavigation::addLink(
            NavigationLink::make()->forModule('awards')
        );
        TwillNavigation::addLink(
            NavigationLink::make()->forModule('certfications')->title('Certifications')
                ->setChildren([
                    NavigationLink::make()->forModule('certficationCategories')->title('Categories')
                ])
        );

    }
}
