@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6 m-auto p-4 border rounded">
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="forNameField">Name:</label>
                        <input type="text" class="form-control" name="name" @error('name') is-invalid @enderror placeholder="Name" id="">
                        @error('name')
                            <p class="alert alert-danger">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="forEmailField">Email:</label>
                        <input type="email" class="form-control" name="email" @error('email') is-invalid @enderror placeholder="Email" id="">
                        @error('email')
                            <p class="alert alert-danger">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="forPasswordField">Passoword:</label>
                        <input type="password" class="form-control" name="password" @error('password') is-invalid @enderror placeholder="Passowrd" id="">
                        @error('password')
                            <p class="alert alert-danger">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="forConfirmPasswordField">Confirm Password:</label>
                        <input type="Password" class="form-control" name="password_confirmation" @error('password_confirmation') is-invalid @enderror placeholder="Confirm Password" id="">
                        @error('password_confirmation')
                            <p class="alert alert-danger">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="SIGN UP" class="btn btn-dark">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
