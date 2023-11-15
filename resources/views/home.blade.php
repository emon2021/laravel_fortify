@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 border p-5 rounded">
                <h1 class="title">Welcome, {{Auth::user()->name}}!</h1>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod dolor molestiae consequatur officia corrupti accusantium magnam veritatis illo eaque temporibus nulla doloremque, nobis soluta minima. Consequatur quae ratione quaerat? Nobis?
                </p>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
@endsection
