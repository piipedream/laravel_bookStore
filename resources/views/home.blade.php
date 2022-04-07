@extends('layouts.app')

@section('title-block')Главная страница @endsection

@section('content')

<div class="home_img_bg">
  <section class="py-5 container">
    <div class="row py-lg-5">
      <div class="col-lg-8 col-md-8 mb-5 home_head">
        <p class="lead" style="font-weight: 400;">Качественные эксклюзивы по доступным цена</p>
        <h1 class="mb-5">Книжный Онлайн магазин «Book Store»</h1>
        <a href="{{route('books')}}">
          <button type="submit" class="btn btn_home btn-dark">Купить сейчас</button>
        </a>
      </div>
    </div>
  </section>
</div>

<div class="container">
  <!-- <div class="text-center mb-4">
    <h1>Рекомендации</h1>
  </div> -->

  <!-- <div class="books_bestsellers">
    <div class="card" style="width: 18rem;">
      <img src="/img/books/book1.jpeg" alt="book">
      <div class="card-body card_description">
        <div class="card_bookname">
          <h5 class="card-title">Благословение небожителей. Том 1</h5>
          <p class="card-text">Мосян Тунсю</p>
        </div>
        <div class="price">
          <a href="#" class="">
            <button type="button" class="btn btn-outline-dark btn_addcart">Купить сейчас</button>
          </a>
          <p>990 р.</p>
        </div>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="/img/books/book2.jpeg" alt="book">
      <div class="card-body">
        <div class="card_bookname">
          <h5 class="card-title">Лисья нора</h5>
          <p class="card-text">Нора Сакавич</p>
        </div>
        <div class="price">
          <a href="#" class="">
            <button type="button" class="btn btn-outline-dark btn_addcart">Купить сейчас</button>
          </a>
          <p>360 р.</p>
        </div>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="/img/books/book3.jpeg" alt="book">
      <div class="card-body">
        <div class="card_bookname">
          <h5 class="card-title">Похитители снов</h5>
          <p class="card-text">Мэгги Стивотер</p>
        </div>
        <div class="price">
          <a href="#" class="">
            <button type="button" class="btn btn-outline-dark btn_addcart">Купить сейчас</button>
          </a>
          <p>586 р.</p>
        </div>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="/img/books/book4.jpeg" alt="book">
      <div class="card-body">
        <div class="card_bookname">
          <h5 class="card-title">Мечтатель Стрэндж</h5>
          <p class="card-text">Лэйни Тейлор</p>
        </div>
        <div class="price">
          <a href="#" class="">
            <button type="button" class="btn btn-outline-dark btn_addcart">Купить сейчас</button>
          </a>
          <p>400 р.</p>
        </div>
      </div>
    </div>
  </div> -->


  <div class="container">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Заголовок статьи в блоге</h1>
      <p class="lead my-3">Множественные строки текста, образующие ленту, быстро и эффективно информируют новых читателей о том, что наиболее интересно в содержании этого поста.</p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Продолжить чтение...</a></p>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Технологии</strong>
          <h3 class="mb-0">Лучший пост</h3>
          <div class="mb-1 text-muted">12 ноября</div>
          <p class="card-text mb-auto">Это более широкая карточка с вспомогательным текстом ниже как естественный ввод к дополнительному контенту.</p>
          <a href="#" class="stretched-link">Продолжить чтение</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Дизайн</strong>
          <h3 class="mb-0">Заголовок поста</h3>
          <div class="mb-1 text-muted">11 ноября</div>
          <p class="mb-auto">Это более широкая карточка с вспомогательным текстом ниже как естественный ввод к дополнительному контенту.</p>
          <a href="#" class="stretched-link">Продолжить чтение</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
      </div>
    </div>
  </div>
  </div>

  <div class="text-center mt-5 mb-5">
    <h2>Популярные писатели</h2>
  </div>

  <div class="container marketing mb-5">
    <div class="row" style="text-align: center;">
      <div class="col-lg-4">
        <img src="/img/authors/author1.png" alt="author" width="140" height="140">
        <h2>Михаил Булгаков</h2>
        <p>Русский писатель, драматург, театральный режиссёр и актёр. Автор повестей, рассказов, фельетонов, пьес, инсценировок, киносценариев и оперных либретто.</p>
      </div>
      <div class="col-lg-4">
        <img src="/img/authors/author2.png" alt="author" width="140" height="140">
        <h2>Джоан Роулинг</h2>
        <p>Английская писательница, пишущая под псевдонимом Джоан Кэтлин Роулинг (Joanne Katheline Rowling), автор серии (1997—2007) романов о Гарри Поттере, переведённых более чем на 60 языков, в том числе и на русский.</p>
      </div>
      <div class="col-lg-4">
        <img src="/img/authors/author3.png" alt="author" width="140" height="140">
        <h2>Джек Лондон</h2>
        <p>Джек Лондон (урождённый Джон Гриффит Чейни) — американский писатель, наиболее известный как автор приключенческих рассказов и романов.</p>
      </div>
    </div>
  </div>

</div>

<!-- <script type="text/javascript">

</script> -->
@endsection
