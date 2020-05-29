@extends('layouts.header')

@section('title')
	Корзина
@endsection

@section('content')
<body>
<script>
	$('.like-btn').on('click', function() {
   $(this).toggleClass('is-active');
});

$('.minus-btn').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());
 
    if (value &gt; 1) {
        value = value - 1;
    } else {
        value = 0;
    }
 
  $input.val(value);
 
});
 
$('.plus-btn').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());
 
    if (value &lt; 100) {
        value = value + 1;
    } else {
        value =100;
    }
 
    $input.val(value);
});
</script>
<div class="bnrcorz">
<div class="shopping-cart">
      <!-- Title -->
      <div class="title">
        Корзина товаров
      </div>
 
      <!-- Товар #1 -->
      <div class="item">
        <div class="buttons">
          <span class="delete-btn"></span>
          <span class="like-btn"></span>
        </div>
 
        <div class="image">
          <img src="\Товары\tovar2.jpg" alt="" />
        </div>
 
        <div class="description">
          <span>Медиа стримеры и плееры Xiaomi<br>Mi Box S</span>
          <span>Black</span>
        </div>
 
        <div class="quantity">
          <button class="plus-btn" type="button" name="button">
            <img src="plus.svg" alt="" />
          </button>
          <input type="text" name="name" value="1">
          <button class="minus-btn" type="button" name="button">
            <img src="minus.svg" alt="" />
          </button>
        </div>
 
        <div class="total-price">7499руб</div>
      </div>
 
      <!-- Товар #2 -->
      <div class="item">
        <div class="buttons">
          <span class="delete-btn"></span>
          <span class="like-btn"></span>
        </div>
 
        <div class="image">
          <img src="Товары\tovar1.jpg" alt=""/>
        </div>
 
        <div class="description">
          <span>4K (Ultra HD) Smart телевизор<br>PHILIPS 50PUS 6262/60</span>
          <span>White</span>
        </div>
 
        <div class="quantity">
          <button class="plus-btn" type="button" name="button">
            <img src="plus.svg" alt="" />
          </button>
          <input type="text" name="name" value="1">
          <button class="minus-btn" type="button" name="button">
            <img src="minus.svg" alt="" />
          </button>
        </div>
 
        <div class="total-price">27999руб</div>
      </div>
 
      <!-- Товар #3 -->
      <div class="item">
        <div class="buttons">
          <span class="delete-btn"></span>
          <span class="like-btn"></span>
        </div>
 
        <div class="image">
          <img src="Товары\tovar3.jpg" alt="" />
        </div>
 
        <div class="description">
          <span>Ноутбук Asus X540BA-GQ386</span>
          <span>White</span>
        </div>
 
        <div class="quantity">
          <button class="plus-btn" type="button" name="button">
            <img src="plus.svg" alt="" />
          </button>
          <input type="text" name="name" value="1">
          <button class="minus-btn" type="button" name="button">
            <img src="minus.svg" alt="" />
          </button>
        </div>
        <div class="total-price">31999руб</div>
      </div>
	  <div class = "Zakaz">
		<button>Заказать</button>
	</div>
    </div>
	</div>
@endsection