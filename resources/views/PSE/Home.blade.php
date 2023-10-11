@extends('layouts.navbar')

@section('content')
<div class="home">
    <h2 class="title">Subject</h2>
    <div class="row mt-3">
        @foreach ($subjects as $s)
            <div class="col-sm-3 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ $s->subject_id }}</h4>
                        <h1 class="card-title">{{ $s->subject_name }}</h1>
                        <p class="card-text">Teacher : {{ $s->lecturer }}</p>
                        <p class="card-text">Section : {{ $s->group }}</p>
                        <a href="/subjects" type="button" class="btn btn-outline-dark">Work</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
