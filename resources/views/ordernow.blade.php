@extends('master')
@section('content')
<div class="container ">
  <div class="row">
    <div class="trending">
      <h1>Order List</h1>
      <table class="table table-striped">

        <tr>
          <td>Price</td>
          <td>{{$products_total}} Rupees</td>
        </tr>
        <tr>
          <td>Tax</td>
          <td>0 Rupees</td>
        </tr>
        <tr>
          <td>Delivry charg</td>
          <td>100 Rupees</td>
        </tr>
        <tr>
          <td>Total Amount</td>
          <td>{{$products_total+100}}</td>
        </tr>
        </tbody>
      </table>

      {{-- -----form --}}
      <form action="orderplace" method="POST" class="mb-3">
        @csrf
        <div class="form-group">
          <label for="exampleInputPassword1">Text Area</label>
          <textarea class="form-control" name="address" placeholder="enter your address"></textarea>
        </div>
        <div class="form-check mb-3">
          <label class="form-check-label mb-3">Pyment Option</label><br>

          <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="  Online Payment">
          <label class="form-check-label" for="exampleRadios2">
            Online Payment
          </label><br>
          <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="Emi Payment">
          <label class="form-check-label" for="exampleRadios2">
            Emi Payment
          </label><br>
          <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="Cash On Delivary" checked>
          <label class="form-check-label" for="exampleRadios2">
            Cash On Delivary
          </label>

        </div>
        <button type="submit" class="btn btn-primary">Order Now</button>
      </form>
      {{-- <a href="/ordernow" class="btn  btn-success mb-3">Order Now</a> --}}
    </div>
  </div>
  @endsection