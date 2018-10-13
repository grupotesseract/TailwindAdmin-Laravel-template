@extends('layouts.app')

@section('base')
<div id="app">
    <!--Container -->
    <div class="h-screen font-sans login bg-cover">
        <!-- login form -->
        <div class="container mx-auto h-full flex flex-1 justify-center items-center">
            @yield('content')
        </div>
    </div>
</div>
@endsection
