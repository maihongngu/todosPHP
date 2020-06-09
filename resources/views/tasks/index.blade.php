@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        <h1 class="title">
            Hello World
        </h1>
        <p class="subtitle">
            My first website with <strong>Bulma</strong>!
        </p>

        @foreach($tasks as $task)
        <div class="card" style="margin-bottom: 20px">
            <header class="card-header">
                <p class="card-header-title">
                  {{$task -> description}}
                </p>
                <a href="#" class="card-header-icon" aria-label="more options">
                    <span class="icon">
                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                    </span>
                </a>
            </header>
            <div class="card-content">
                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
                </div>
            </div>
            <footer class="card-footer">
                <a href="#" class="card-footer-item has-background-info has-text-white">Done</a>
            </footer>
        </div>

        @endforeach
    </div>
</section>


@endsection()