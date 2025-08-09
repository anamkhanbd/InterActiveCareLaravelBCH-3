@extends('layout.core')

@section('title')
    Registration 
@endsection

@section('content')
    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header text-center">
                    <h4>Register</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('singup.post')}}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </form>
                </div>
                <div class="card-footer text-center">
                    Already have an account? <a href="{{route('login')}}">Login</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection