@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        @foreach($tasks as $task)
        <div class="card box" style="margin-bottom: 20px; 
        @if( !$task -> isCompleted() )
        border: solid 1px #48c774" @endif>
            <header class="card-header ">
                <p class="card-header-title">
                    {{$task -> title}}
                </p>
                @if( !$task -> isCompleted() )
                <div>
                    <p class="tag is-success is-large level-right" style="height:100%">Completed</p>
                </div>
                @endif
            </header>
            <div class="card-content">
                <div class="content">
                    {{$task -> description}}
                </div>
            </div>
            <footer class="card-footer">.
                @if( $task -> isCompleted() )
                <form action="/tasks/{{$task->id}}" method="POST" style="width:100%">
                    @method('PATCH')
                    @csrf
                    <div style="width:100%">

                        <button type="submit" style="width:100%"
                            class="button has-background-info has-text-white">Done</button>

                    </div>
                </form>

                @else
                <form action="/tasks/{{$task->id}}" method="POST" style="width:100%">
                    @method('DELETE')
                    @csrf
                    <div style="width:100%">
                        <button type="submit" style="width:100%"
                            class="button has-background-danger has-text-white">Remove</button>
                    </div>

                </form>


                @endif
            </footer>
        </div>
        @endforeach
        <a href="/tasks/create" class="button is-fullwidth has-background-link has-text-white"> Create Task </a>

    </div>

</section>


@endsection()