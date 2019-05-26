
@extends('layouts.basic')
    @section('content')
   
        <div class="flex-center position-ref full-height">
           

            <div class="content">
                <img src=" {{ asset('img/mtg.png') }} ">
                <div class="title m-b-md">
                    MGT:Sort
                </div>
                
                <div class="links">
                    <a href="{{ route('format.index') }}">Formatos</a>
                    <a href="{{ route('set.index') }}">Expansiones</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>

            </div>
        </div>
    


    @endsection
       