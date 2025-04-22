<?php
use App\Http\Controllers\productcontroller;
$total=0;
// Session::has('user');
if(Session::has('user')){
  $total= productcontroller::cartitem();
}

?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="/">E-comm</a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/myorder">Order</a>
                      </li>
                     
                    </ul>
                    <form action="/search" class="d-flex" role="search">
                      <input class="form-control me-2" name="query" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/cartlist">Card Item({{$total}})</a>
                          </li>
                          @if (Session::has('user'))
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             {{Session::get('user')->name}}
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#"></a></li>
                              <li><a class="dropdown-item" href="#"></a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="/logout">Log Out</a></li>
                            </ul>
                          </li>
                          @else
                          <li><a href="/login">Login</a></li>
                          @endif
                        
                    </ul>
                  
                  </div>
                </div>
              </nav>
        </div>
    </div>
</div>