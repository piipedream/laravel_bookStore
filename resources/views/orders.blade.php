@extends('layouts.app')

@section('title-block')Заказы @endsection

@section('content')
<div class="container">

  <div class="nav_bar mt-5 mb-5">
    <div class="nav_bar_block shopping_bag">
      <a href="{{route('orders')}}">
        <span>
          <button class="tablinks"  id="defaultOpen">
            <img src="/img/icons/orders.png" alt="shopping_bag">
            <br>
            Заказы
          </button>
        </span>
      </a>
    </div>

    <div class="nav_bar_block favorites">
      <a href="{{route('favorites.fav_list')}}">
        <span>
          <button class="tablinks" >
            <img src="/img/icons/heart.png" alt="heart">
            <br>
            Фавориты
          </button>
        </span>
      </a>
    </div>

    @can('admin')
    <div class="nav_bar_block favorites">
      <a href="{{route('add_book')}}">
        <span>
          <button class="tablinks" >
            <img src="/img/icons/book.png" alt="heart">
            <br>
            Добавить книгу
          </button>
        </span>
      </a>
    </div>
    @endcan
  </div>

  <div id="accordion">

    <div class="mb-3">
      <a class="btn btn-dark" data-bs-toggle="collapse" href="#collapseOne">
        Посмотреть заказы
      </a>
    </div>

    @foreach ($orders as $order)
    <div class="card">
      <div class="card-header">
          Заказ #{{$order->id}}
      </div>
      <div id="collapseOne" class="collapse " data-bs-parent="#accordion">
        <div class="card-body">

          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">№</th>
                <th scope="col">Имя</th>
                <th scope="col">Login</th>
                <th scope="col">Email</th>
                <th scope="col">Адрес</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">{{$order->id}}</th>
                <td>{{$order->name}} {{$order->last_name}}</td>
                <td>{{$order->login}}</td>
                <td>{{$order->email}}</td>
                <td>{{$order->country}}, {{$order->city}}, {{$order->address}}, {{$order->zip_code}}</td>
              </tr>
            </tbody>
          </table>
          @php
              $cart = unserialize($order->cart);
              $total = 0;
          @endphp

          @foreach ($cart as $item)
            <div class="row mb-4 d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
                @php
                    $imageURL = $item['image'];
                    $total += $item['price'];
                @endphp
                <img src="{{asset("storage/image/$imageURL")}}" class="img-fluid rounded-3" alt="Cotton T-shirt">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3">
                <h6 class="text-muted">{{$item['author']}}</h6>
                <h6 class="text-black mb-0">{{$item['title']}}</h6>
              </div>
              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">

                  <div class="col-md-3 col-lg-3 col-xl-3">
                    <h6 class="text-black mb-0">{{$item['quantity']}}</h6>
                  </div>

              </div>
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                <h6 class="mb-0">{{$item['price']}} р.</h6>
              </div>

            </div>
          @endforeach


          <hr class="my-4">
          <p>Доставка: {{$order->delivery}} р.</p>
          <p>Итоговая цена: {{$total + $order->delivery}} р.</p>
          <div class="d-flex justify-content-between align-items-center">

            <small class="text-muted">{{$order->created_at}}</small>
          </div>

        </div>
      </div>
    </div>
    @endforeach

    </div>

</div>
@endsection
