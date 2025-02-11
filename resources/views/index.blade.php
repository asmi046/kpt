@extends('layouts.all')

@php
    $title = "";
    $description = "";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

<header class="main_header">
    <div class="container">
        <div class="left_side">
            <div class="top">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/logo.svg') }}" alt="{{ config('lend_data.company_name') }}">
                </a>

                <nav>
                    <ul>
                        <li><a href="#">О нас</a></li>
                        <li><a href="#">Услуги</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </nav>
            </div>
        
        </div>
        
    </div>
</header>

@endsection

