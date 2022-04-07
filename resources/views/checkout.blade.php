@extends('layouts.app')

@section('title-block')Оформление заказа @endsection

@section('content')

  <div class="container py-5" style="width: 900px;">
    <div class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Ваша корзина</span>
        </h4>
        <ul class="list-group mb-3">
          @php $totalPrice = 0 @endphp
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            @php $totalPrice += $details['price'] * $details['quantity'] @endphp
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                <h6 class="my-0">{{$details['author']}}</h6>
                                <small class="text-muted">{{$details['title']}}</small>
                              </div>
                              <span class="text-muted">{{$details['quantity']}}</span>

                              <span class="text-muted">{{$details['price']}} р.</span>
                            </li>
                        @endforeach
                    @endif
          <li class="list-group-item d-flex justify-content-between">
            <span>Всего</span>
            <strong>{{$totalPrice}} р.</strong>
          </li>
        </ul>
      </div>

      <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Адрес для выставления счета</h4>
        <form class="needs-validation" novalidate="" action="{{route('makeOrder')}}" method="POST">
          @csrf
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName">Имя</label>
              <input type="text" class="form-control" name="name" id="firstName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Фамилия</label>
              <input type="text" class="form-control" name="last_name" id="lastName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="username">Логин</label>
            <div class="input-group">
              <input type="text" class="form-control" name="login" id="username" placeholder="Login" required="">
              <div class="invalid-feedback" style="width: 100%;">
                Your login is required.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
            <div class="invalid-feedback">
              Please enter a valid email address for shipping updates.
            </div>
          </div>

          <div class="mb-3">
            <label for="address">Адрес</label>
            <input type="text" class="form-control" name="address" id="address" placeholder="Ленина 54, 89" required="">
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>

          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="country">Страна</label>
              <input type="text" class="form-control" name="country" id="zip" placeholder="" required="">
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="state">Город</label>
              <input type="text" class="form-control" name="city" id="zip" placeholder="" required="">
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="zip">Индекс</label>
              <input type="text" class="form-control" name="zip_code" id="zip" placeholder="" required="">
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>
          <hr class="mb-4">

          <h4 class="mb-3">Оплата</h4>

          <div class="d-block my-3">
            <div class="custom-control custom-radio">
              <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
              <label class="custom-control-label" for="credit">Онлайн оплата</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
              <label class="custom-control-label" for="debit">Оплата при получении</label>
            </div>
          </div>
          <hr class="mb-4">
          <button class="btn btn-dark btn-lg btn-block" type="submit">Заказать</button>
        </form>
      </div>
    </div>
  </div>
@endsection
