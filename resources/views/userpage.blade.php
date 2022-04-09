@extends('layouts.app')

@section('title-block'){{Auth::user()->login}} @endsection

@section('content')

<div class="userpage_img_bg">
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h3>Привет, {{Auth::user()->login}}!</h3>
        <h1>Это твой личный кабинет.</h1>
      </div>
    </div>
  </section>
</div>


<div class="container">
  <div class="nav_bar mb-5">
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
          <button class="tablinks">
            <img src="/img/icons/book.png" alt="heart">
            <br>
            Добавить книгу
          </button>
        </span>
      </a>
    </div>
    @endcan
  </div>

</div>

@endsection
