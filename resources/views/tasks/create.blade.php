@extends('layouts.app')
@section('content')
<section class="section">
    <div class="container">
        <h1 class="title">
            New Task
        </h1>
        <form method="POST" action="/tasks">

            @csrf
            <div class="field">
                <label class="label">Name Task</label>
                <div class="control">
                    <input class="input" name="description" type="text" placeholder="Input name task ">
                </div>
            </div>
            <div class="field">

                <button type="submit" class="button is-link">Submit</button>

            </div>

        </form>
    </div>
</section>
@endsection()
