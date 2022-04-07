@extends('layouts.app')

@section('title-block'){{$data->title}} - {{$data->author}} @endsection

@section('content')

<div class="container">
  <div class="container parent_form_book">
    @if(session('success'))
      <div class="alert alert-success">
        {{session('success')}}
      </div>
    @endif
  </div>
  <div class="one_book mt-5 mb-5">
    <div class="oneBook_img">
      <img src="{{asset("storage/image/$data->image")}}" alt="book">
    </div>

    <div class="oneBook_info">
      <div class="name_book">
        <h1>{{$data->title}}</h1>
        <p>{{$data->author}}</p>
      </div>
      <p class="one_book_price">{{$data->price}} руб.</p>
      <div class="oneBook_btn">
        <form action="{{route('cart.store', $data->id)}}" method="POST">
          @csrf
          <button type="submit" class="btn btn-dark">В корзину</button>
        </form>
        <a href="#" class="btn_fav_heart">
          &#9825;
        </a>
      </div>
      @can('admin')
      <div class="oneBook_btn">
        <a href="{{route('edit_book', $data->id)}}" class="edit_one_book">
          <button type="submit" class="btn btn-outline-dark">Редактировать</button>
        </a>
        <a href="{{route('delete_book', $data->id)}}">
          <button type="submit" class="btn btn-outline-dark">Удалить</button>
        </a>
      </div>
      @endcan
      <div class="book_description">
        <p>Аннотация</p>
        <p>{{$data->description}}</p>
        <div class="book_inf_footer">
          <span>Жанр: {{$data->genre}}</span>
          <br>
          <span>Страна: {{$data->country}}</span>
          <br>
          <span>Количество страниц: {{$data->pages}}</span>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
