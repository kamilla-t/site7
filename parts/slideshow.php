<!-- Слайд-шоу -->
<h3 class="h3" style="margin-left: 33%">Процесс создания сайтов</h3>
<div class="slideshow-container">
    <!-- Полноразмерные изображения с текстом номера и заголовка -->
    <div class="mySlides fade">
        <img src="/img/1.jpg" style="width:50%">
        <div class="text" style="margin-left: 5%">Разрабатываем визуальную карту сайта</div>
    </div>

    <div class="mySlides fade">
        <img src="/img/2.jpg" style="width:50%">
        <div class="text" style="margin-left: 5%">Проводим анализ вашего продукта</div>
    </div>

    <div class="mySlides fade">
        <img src="/img/3.jpg" style="width:50%">
        <div class="text" style="margin-right: 3%">Разрабатываем дизайн с визуальной целостностью</div>
    </div>
    <!-- Следующая и предыдущая кнопки -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>
<!-- Точки / круги -->
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script src="functions/slideshow.js"></script>