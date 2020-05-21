<!DOCTYPE html> 
<html> 
<head> 
<meta charset = "UTF-8"> 
<link rel = "stylesheet" href = "CSS.css"> 
<title> 
Интернет-магазин EAS
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
<a href="/corz">
<img src ="img\corz.png">
</div>
<div class = "info">
<a href = "https://vk.com/justonlywaifu"  class = "inf">Связаться можно здесь</a> 
</div> 
</header> 
<br> 
<div class = "banner"> 
<img src = "img\banner.png" class = "ban"> 
</div> 
<br> 
<div class = "usl"> 
Акции 
</div> 
<div class = "lenta"> 
<div class = "t1"> 
<a href = "#"> 
<div class="smesh">
<img src = "Товары\tovar1.jpg" class = "srcimg">
</div>
4K (Ultra HD) Smart телевизор PHILIPS 50PUS 6262/60 
</a> 
</div> 
<div class = "t2"> 
<a href = "#"> 
<div class="smesh">
<img src = "Товары\tovar2.jpg" class = "srcimg"> 
</div>
Медиа стримеры и плееры Xiaomi Mi Box S
</a> 
</div> 
<div class = "t3"> 
<a href = "#"> 
<div class="smesh">
<img src = "Товары\tovar3.jpg" class = "srcimg"> 
</div>
Ноутбук Asus X540BA-GQ386
</a> 
</div> 
<div class = "t4"> 
<a href = "#"> 
<div class="smesh">
<img src = "Товары\tovar4.jpg" class = "srcimg"> 
</div>
Плита комбинированная DARINA 1D1 KM 241 311 Х
</a> 
</div> 
<div class = "t5"> 
<a href = "#"> 
<div class="smesh">
<img src = "Товары\tovar5.jpg" class = "srcimg"> 
</div>
Smart телевизор AMCV LE-39ZTHS21
</a> 
</div> 
</div> 
<div class = "bttext"> 
О нас
</div> 
<div class = "tovary"> 
<div class = "raa"> 
<div class = "bt1"> 
1. Мы новоиспечённая сеть магазинов 
</div> 
</a> 
</div> 
<div class = "gwow"> 
<div class = "bt1"> 
2. Мы не собираемся обманывать покупателей
</div> 
</a> 
</div> 
<div class = "gaa"> 
<div class = "bt1"> 
3. Только качественный товар 
</div> 
</a> 
</div> 
</div> 
</body> 
</html>