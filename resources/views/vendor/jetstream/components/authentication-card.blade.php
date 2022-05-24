@php
    $titles = [
        'login' => 'Log In',
        'register' => 'Register',
        'forgot-password' => 'Forgot Password',
    ];
    $title = $titles[Request::segment(1)];
@endphp
<div class="flex flex-col items-center min-h-screen pt-6 sm:justify-center sm:pt-0 bg-slate-800">

    <div class="w-full mt-6 overflow-hidden bg-gray-200 shadow-md sm:max-w-md sm:rounded-lg">
        <x-card-header :home="true">
            {{ __($title) }}
        </x-card-header>

        <div class="px-4 pb-4">
            {{ $slot }}
        </div>
    </div>
</div>
