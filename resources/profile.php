working on someone's code, figuring out where stuff goes, etc. the error I am getting: View [register] not found. (View: /Users/striker/bankproject/app/views/frontend/default/pages/profile.blade.php)

I see that the $sections is being passed from the controller to the view.

Here is the route Route::get('register',['as'=>'register.create','uses'=>'UsersController@create']); Route::post('register',['as'=>'register.store','uses'=>'UsersController@store']);

Here is the controller

use Forret\Interfaces\UserInterface;
use View;
use Sentry;

class UsersController extends BaseController{

    public function __construct(UserInterface $user){
        $this->user = $user;
    }

    public function show($user_id){
        $view['title'] = 'Forret - Profile';
        $view['auth_navbar'] = 1;
        $view['user'] = Sentry::getUser();
        $view['sections'] = ["Frontend::components.sections.profile"];
        return View::make('Frontend::pages.profile',$view);
    }

    public function create(){
        $view['title'] = 'Forret - Register';
        $view['auth_navbar'] = 0;
        $view['user'] = [];
        $view['sections'] = ['register'];
        return View::make('Frontend::pages.profile',$view);
    }

} 
Here is the view profile.php

@extends('Frontend::layouts.default')

@section('page_styles')

@stop

@section('content')

    @foreach($sections as $section)
        @include($section)
    @endforeach

@stop

@section('page_scripts')

@stop
