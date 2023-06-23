<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use App\Models\Book;
use App\Observers\BookObserver;


class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        
		$this->app->bind(
			'App\Interfaces\v1\BookInterface',
			'App\Repositories\v1\BookRepository'
		);
	
        $this->app->bind(
            'Illuminate\Contracts\Filesystem\Factory',
            'Illuminate\Contracts\Filesystem\Factory'
        );
    }

    public function boot()
    {
        Schema::defaultStringLength(191);
        
		Book::observe(BookObserver::class);
         
    }
}