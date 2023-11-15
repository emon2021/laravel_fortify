@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6 m-auto p-4 border rounded">
                <form action="#" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="forEmailField">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" id="">
                    </div>
                    <div class="mb-3">
                        <label for="forPasswordField">Password:</label>
                        <input type="Password" class="form-control" name="password" placeholder="Password" id="">
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="LOGIN" class="btn btn-dark">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
