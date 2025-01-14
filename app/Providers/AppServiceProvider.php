<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Media;
use App\Models\Course;
use App\Models\University;
use App\Models\Subject;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Spatie\Menu\Laravel\Menu;
use Spatie\Menu\Laravel\Link;
use View;

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
        Menu::macro('main', function () {
            return  Menu::new([
                Link::to('/', 'Home'),
                Link::to('/about', 'About'),
            ]);
        });


        Paginator::useBootstrap();
 
        View::composer('*', function($view)
        {

            // Header Menu
           
            $primaryMenu[url('contact')] = "Contact";
            
            $view->with('primaryMenu', $primaryMenu);

            $media = Media::orderBy('created_at', 'desc')->get();
            $view->with('media', $media);

            $courses = Course::where('status',"1")->get();
            $view->with('courses', $courses);

            $universities = University::where('status',"1")->get();
            $view->with('universities', $universities);

            $subjects = Subject::where('status',"1")->get();
            $view->with('subjects', $subjects);

            $user = Auth::user();
            $view->with('user', $user);

            // Get User
            $loggedInUser = Auth::user();
            $view->with('loggedInUser', $loggedInUser);
 
            if($loggedInUser){
                $roles = $loggedInUser
                ->roles
                ->pluck('name');
                $roles = implode(",",json_decode($roles));
                $view->with('roles', ucfirst($roles));
            }
        });
    }
}
