@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-6">
            <form action="login" method="POST">
              @csrf
                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="email" name="email" id="form2Example1" class="form-control" />
                  <label class="form-label" for="form2Example1">Email address</label>
                </div>
              
                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" name="password" id="form2Example2" class="form-control" />
                  <label class="form-label" for="form2Example2">Password</label>
                </div>
              
                <!-- Submit button -->
                <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Login</button>
              
              </form>
        </div>
    </div>
</div>
@endsection