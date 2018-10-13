@extends('layouts.app')

@section('base')
<!--Container -->
<div class="mx-auto bg-grey-lightest">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        @include('layouts.header')

        <div class="flex flex-1">
            @include('layouts.sidebar')

            @yield('content')
        </div>

        @include('layouts.footer')
    </div>
</div>
@endsection
