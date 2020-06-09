@extends('layouts.app')
@section('content')
<section class="section">
    <div class="container">
        <h1 class="title">
            New Task
        </h1>
        <form method="POST" action="/tasks">
            @if($errors -> any())

            <ul>

                @foreach($errors->all() as $error)

                <li>
                    <p class="has-text-danger">{{$error}}</p>
                </li>

                @endforeach

            </ul>

            @endif
            @csrf
            <div class="field">
                <label class="label">Title</label>
                <div class="control">
                    <input class="input 
                    @error('title')
                        is-danger
                    @enderror
                    
                    " type="text" name="title" placeholder="Email input">
                </div>
                @error('title')
                <p class="help is-danger">{{$error}}</p>
                @enderror
                <label class="label">Description</label>
                <div class="control">
                    <input class="input 
                    @error('title')
                        is-danger
                    @enderror
                    
                    " type="text" name="description" placeholder="Email input">
                </div>
                @error('title')
                <p class="help is-danger">{{$error}}</p>
                @enderror
            </div>
            <div class="field">

                <button type="submit" class="button is-link">Submit</button>

            </div>

        </form>
    </div>
</section>
@endsection()
