@extends('layouts.app')

@section('title-block')Фавориты @endsection

@section('content')
<div class="container">

  <div class="nav_bar mt-5 mb-5">
    <div class="nav_bar_block shopping_bag">
      <a href="{{route('orders')}}">
        <span>
          <button class="tablinks"  id="defaultOpen">
            <img src="/img/icons/bag.png" alt="shopping_bag">
            <br>
            Заказы
          </button>
        </span>
      </a>
    </div>

    <div class="nav_bar_block favorites">
      <a href="{{route('favorites')}}">
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

  <!-- block 2 -->
  	<div class="container2 tabcontent" id="Favorites">
      <hr class="my-4">

      <div class="row mb-4 d-flex justify-content-between align-items-center">
        <div class="col-md-2 col-lg-2 col-xl-2">
          <img
            src="/img/books/book1.jpeg"
            class="img-fluid rounded-3" alt="Cotton T-shirt">
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3">
          <h6 class="text-muted">Shirt</h6>
          <h6 class="text-black mb-0">Благословение небожителей. Том 1</h6>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
          <button class="btn btn-link px-2"
            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
            <i class="fas fa-minus"></i>
          </button>

          <input id="form1" min="0" name="quantity" value="1" type="number"
            class="form-control form-control-sm" />

          <button class="btn btn-link px-2"
            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
            <i class="fas fa-plus"></i>
          </button>
        </div>
        <div class="col-md-3 col-lg-2 col-xl-1 offset-lg-1">
          <h6 class="mb-0">€ 44.00</h6>
        </div>
        <div class="col-md-1 col-lg-1 col-xl-2 text-end">
          <a href="#!" class="btn-outline-fav">
            <button type="button" name="button" class="btn btn-dark">В корзину</button>
          </a>
          <a href="#!" class="btn-outline-fav">
            <button type="button" name="button" class="btn btn-dark">Удалить</button>
          </a>
        </div>
      </div>

      <hr class="my-4">
  	</div>
  <!-- block 2 end -->


</div>
@endsection
