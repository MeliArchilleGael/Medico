<?php

namespace App\Providers;

use App\Models\Message;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        //
        Schema::defaultStringLength(200);
        if(Schema::hasTable('messages')){
            $messages = Message::where('status', 'Not Read')->get();
        }else{
            $messages = new Message;
        }

        view()->share('messages', $messages);

    }
}
