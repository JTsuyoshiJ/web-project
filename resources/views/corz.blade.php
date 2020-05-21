<!DOCTYPE html> 
<html> 
<head> 
<meta charset = "UTF-8"> 
<link rel = "stylesheet" href = "CSS.css"> 
<title> 
Корзина
</title> 
</head> 
<body> 
<header> 
<div class = "menu"> 
<ul class="menuone"> 
<li class="menu-item"> 
<a href="#" class = "Catalog"><img src = "img\menu.png" class = "menimg"></a> 
<ul class="sub-menu"> 
<li class= "sm">
<a href="/" class = "Catalog"><b>Главная</b></a>
</li>
<hr>
<li class = "sm"> 
<a href="/technical" class = "Catalog"><b>Бытовая техника</b></a> 
</li> 
<hr> 
<li class = "sm"> 
<a href="/phones_and_gadjets" class = "Catalog">Телефоны и гаджеты</a> 
</li> 
<hr> 
<li class = "sm"> 
<a href="/computers" class = "Catalog">Компьютеры</a> 
</li> 
<hr> 
<li class = "sm"> 
<a href="/office" class = "Catalog">Офис и сеть</a>
</li> 
<hr> 
<li class = "sm"> 
<a href="/accesuars" class = "Catalog">Аксессуары</a> 
</li> 
<hr> 
<li class = "sm"> 
<a href="/photo_and_vidios" class = "Catalog">Фото и видео</a> 
</li> 
<hr> 
<li class = "sm"> 
<a href="/garden_and_repair" class="Catalog">Сад и ремонт</a> 
</li> 
</ul> 
</li> 
</ul> 
<script> 
var el = document.getElementsByClassName('menu-item'); 
for(var i=0; i<el.length; i++) { 
el[i].addEventListener("mouseenter", showSub, false); 
el[i].addEventListener("mouseleave", hideSub, false); 
} 
function showSub(e) { 
if(this.children.length>1) { 
this.children[1].style.height = "auto"; 
this.children[1].style.overflow = "visible"; 
this.children[1].style.opacity = "1"; 
} else { 
return false; 
} 
} 
function hideSub(e) { 
if(this.children.length>1) { 
this.children[1].style.height = "0px"; 
this.children[1].style.overflow = "hidden"; 
this.children[1].style.opacity = "0"; 
} else { 
return false; 
} 
} 
</script> 
</div> 
<div class = "corz">
<a href="#">
<img src ="img\corz.png">
</div>
<div class = "info">
<a href = "https://vk.com/justonlywaifu" class = "inf">Связаться можно здесь</a> 
</div> 
</header> 
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
</body>
</html>