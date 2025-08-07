@extends('layout.core')

@section('title')
    Login Page 
@endsection

@section('content')
     <div class="container login-container d-flex justify-content-center align-items-center">
    <form class="login-form" action="#" method="POST">
      <h3 class="text-center mb-4">Login</h3>
      
      <div class="form-group">
        <label for="email">Email address</label>
        <input
          type="email"
          class="form-control"
          id="email"
          placeholder="Enter email"
          required
        />
      </div>
      
      <div class="form-group">
        <label for="password">Password</label>
        <input
          type="password"
          class="form-control"
          id="password"
          placeholder="Password"
          required
        />
      </div>
      
      <div class="form-group form-check">
        <input
          type="checkbox"
          class="form-check-input"
          id="rememberMe"
        />
        <label class="form-check-label" for="rememberMe">Remember me</label>
      </div>
      
      <button type="submit" class="btn btn-primary btn-block">
        Login
      </button>

      <p class="mt-3 text-center">
        <a href="#">Forgot password?</a>
      </p>
    </form>
  </div>
@endsection