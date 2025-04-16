@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-6">
            <form>
                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="email" id="form2Example1" class="form-control" />
                  <label class="form-label" for="form2Example1">Email address</label>
                </div>
              
                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" id="form2Example2" class="form-control" />
                  <label class="form-label" for="form2Example2">Password</label>
                </div>
              
                <!-- Submit button -->
                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>
              
              </form>
        </div>
    </div>
</div>
@endsection