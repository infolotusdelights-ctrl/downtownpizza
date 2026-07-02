@extends('layouts.app')

@section('title', 'Downtown Pizza Studio | Build Your Own Pizza')

@push('styles')
    @vite('resources/css/home.css')
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

            <img

                src="{{ asset('assets/images/hero-pizza.png') }}"

                alt="Pizza"

                class="hero-pizza">

        </div>

    </div>

</section>

@endsection
