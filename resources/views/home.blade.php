@extends('layouts.app')

@section('title', 'Downtown Pizza Studio | Build Your Own Pizza')

@push('styles')
    @vite([
        'resources/css/home.css',
        'resources/js/home.js'
    ])
@endpush

@section('content')

<section class="hero">

    <div class="container hero-container">

        <div class="hero-left">

            <span class="badge">

                🍕 Premium Pizza Builder

            </span>

            <h1>

                Build Your

                <span>

                    Dream Pizza

                </span>

            </h1>

            <p>

                Choose your size, select your favourite toppings,
                preview your pizza live and order instantly.

            </p>

            <div class="hero-buttons">

                <a href="{{ route('builder') }}"
                    class="btn btn-primary">

                    Build Pizza

                </a>

            </div>

        </div>

        <div class="hero-right">

    <div class="pizza-wrapper">

        <img
            src="{{ asset('assets/images/hero-pizza.png') }}"
            class="hero-pizza"
            alt="Pizza">

        <img
            src="{{ asset('assets/images/tomato.png') }}"
            class="floating tomato"
            alt="Tomato">

        <img
            src="{{ asset('assets/images/onion.png') }}"
            class="floating onion"
            alt="Onion">

        <img
            src="{{ asset('assets/images/olive.png') }}"
            class="floating olive"
            alt="Olive">

        <img
            src="{{ asset('assets/images/corn.png') }}"
            class="floating corn"
            alt="Corn">

    </div>

</div>

    </div>

</section>

@endsection
