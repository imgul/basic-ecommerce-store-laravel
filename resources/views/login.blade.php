@extends('master')
@section('title')
    Login
@endsection

@section('content')
    .<div class="container">
        <div class="row justify-content-center align-items-center g-5">
            <div class="col">
                <form action="/login" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email Address"
                            aria-describedby="emailHelp">
                        <small id="emailHelp" class="text-muted">Error</small>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password"
                            aria-describedby="passwordHelp">
                        <small id="passwordHelp" class="text-danger">Error</small>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
            <div class="col">
                <img src="https://t3.ftcdn.net/jpg/03/39/70/90/360_F_339709048_ZITR4wrVsOXCKdjHncdtabSNWpIhiaR7.jpg"
                    alt="login now">
            </div>
        </div>
    </div>
@endsection
