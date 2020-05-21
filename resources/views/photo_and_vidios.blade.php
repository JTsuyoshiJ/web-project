<!DOCTYPE html> 
<html> 
<head> 
<meta charset = "UTF-8"> 
<link rel = "stylesheet" href = "CSS.css"> 
<title> 
Фото и видео
</title> 
</head> 
<body> 
<header> 
<div class = "menu"> 
<ul class="menuone"> 
<li class="menu-item"> 
<a href="#" class = "Catalog">
<img src = "img\menu.png" class = "menimg">
</a> 
<ul class="sub-menu"> 
<li class="sm">
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
<a href="corz.html">
<img src ="img\corz.png">
</div>
<div class = "info"> 
<a href = "https://vk.com/justonlywaifu" class = "inf">Связаться можно здесь</a> 
</div> 
</header> 
<br> 
<div class="bnr">
<div class="bannertext">
Фото и видео
</div>
<div class="bnr1">
<a href ="#">
<div class="l">
<img src="Товары\tovar24.jpg" class="sdvig">
</div>
<div class="texting">
Штативы и стабилизаторы
</a>
</div>
</div>
<div class="bnr2">
<a href="#">
<div class="l">
<img src="Товары\tovar22.jpg" class="sdvig">
</div>
<div class="texting">
Фото и видеоаппараты
</a>
</div>
</div>
<div class="bnr3">
<a href="#">
<div class="l">
<img src="Товары\tovar23.jpg" class="sdvig">
</div>
<div class="texting">
Объективы
</div>
</div>
	</body>
</html>