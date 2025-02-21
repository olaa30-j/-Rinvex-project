@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold">Welcome to Livewire E-Commerce</h1>

    @auth
        <p class="mt-4">Hello, {{ auth()->user()->name }}! Manage your orders below.</p>
        <livewire:order-form />
    @else
        <p class="mt-4">Please <a href="{{ route('login') }}" class="text-blue-500">login</a> to manage orders.</p>
    @endauth
</div>
@endsection
