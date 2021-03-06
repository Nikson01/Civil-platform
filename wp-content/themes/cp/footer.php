<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cp
 */
?>

<?php wp_reset_query(); ?>
	
	<footer class="footer">
		<div class="footer-container">
			<div class="flex_col-desk top-footer">
				<div class="flex_col-desk--1-5 flex_col--1-1 footer-logo">
					<a href="//localhost:3000/" class="custom-logo-link" rel="home">
						<img width="65" height="41" src="//localhost:3000/wp-content/uploads/2020/04/cropped-logo.jpg" class="custom-logo" alt="Цивілістична Платформа">
					</a>
				</div>
				<div class="flex_col-desk--4-5 footer-menu_block">
					<ul class="flex_col-desk--1-6">
						<li><a href="">Фахові заходи</a></li>
						<li><a href="">Форумы и конференции</a></li>
						<li><a href="">Круглі столи</a></li>
						<li><a href="">Засідання клубу</a></li>
						<li><a href="">Публічні лекції</a></li>
					</ul>
					<ul class="flex_col-desk--1-6">
						<li><a href="">Позиції</a></li>
						<li><a href="">Теорія і методологія цивільного права</a></li>
						<li><a href="">Суб’єкти цивільного права</a></li>
						<li><a href="">Корпоративне право</a></li>
						<li><a href="">Майно. Право власності</a></li>
						<li><a href="">Спадкове право</a></li>
						<li><a href="">Право інтелектуальної власності</a></li>
						<li><a href="">Особисті немайнові права</a></li>
						<li><a href="">Правочини. Договори. Представницво</a></li>
						<li><a href="">Недоговірні зобов’язання</a></li>
						<li><a href="">Строки. Позовна давність</a></li>
						<li><a href="">Захист. Відповідальність</a></li>
					</ul>
					<ul class="flex_col-desk--1-6">
						<li><a href="">Експертная деятельность</a></li>
					</ul>
					<ul class="flex_col-desk--1-6">
						<li><a href="">Дискуссии и диалоги</a></li>
					</ul>
					<ul class="flex_col-desk--1-6">
						<li><a href="">Наукова критика </a></li>
					</ul>
					<ul class="flex_col-desk--1-6">
						<li><a href="">Публікації</a></li>
					</ul>
				</div>
			</div>
			<div class="flex_col-desk bottom-footer">
				<ul class="flex_col--1-1 flex_col-desk--1-5 footer-icons">
					<li class="bottom_list__icons">
					  <a href="#"
						><svg class="icon"><use xlink:href="#inst" /></svg></a>
					</li>
					<li class="bottom_list__icons">
					  <a href="#"
						><svg class="icon"><use xlink:href="#telegram" /></svg></a>
					</li>
					<li class="bottom_list__icons">
					  <a href="#"
						><svg class="icon"><use xlink:href="#youtube" /></svg></a>
					</li>
				  </ul>
				  <div class="flex_col--1-1 flex_col-desk--4-5 footer-bottom__right-block">
					<a class="flex_col-desk--1-6" href="">Контакты</a>
					<a class="flex_col-desk--1-6" href="">О нас</a>
					<div class="flex_col-desk--1-6 empty"></div>
					<div class="flex_col-desk--1-6 empty"></div>
					<span class="flex_col-desk--1-3">©Цивилистическая платформа. Все права защищены</span>
				  </div>				 
			</div>
		</div>







		<div class="popup__overlay">
			<span class="popup__close"><span></span></span>
		  <div class="popup">
			  <h1>Появились вопросы?
				Задайте их профессионалу</h1>
			<form action="">
				<input type="text" placeholder="Имя*" required>
				<input type="email" placeholder="Email*" required>
				<input type="text" placeholder="Тема">
				<input type="text" placeholder="Статья">
				<textarea
                placeholder="Ваше сообщение"
                id="textArea-connect"
                rows="1"                
			  ></textarea>
			  <button type="submit">Отправить</button>
			</form>
		</div>
	  </div>
	  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">        
		<symbol id="search" viewBox="0 0 23 23">
		  <path
			fill="#fff"
			d="M2.224 10.08c0-4.307 3.503-7.805 7.804-7.805 4.306 0 7.805 3.503 7.805 7.804 0 4.302-3.499 7.81-7.805 7.81-4.301 0-7.804-3.504-7.804-7.81zm19.835 11.128l-5.175-5.175a9.043 9.043 0 0 0 2.228-5.954c0-5.01-4.074-9.079-9.08-9.079C5.024 1 .954 5.075.954 10.08c0 5.004 4.075 9.079 9.08 9.079 2.276 0 4.358-.84 5.954-2.229l5.175 5.175a.642.642 0 0 0 .448.189.638.638 0 0 0 .449-1.086z"
		  />
		  <path
			fill="none"
			stroke="#fff"
			stroke-miterlimit="50"
			stroke-width=".5"
			d="M2.224 10.08c0-4.307 3.503-7.805 7.804-7.805 4.306 0 7.805 3.503 7.805 7.804 0 4.302-3.499 7.81-7.805 7.81-4.301 0-7.804-3.504-7.804-7.81zm19.835 11.128l-5.175-5.175a9.043 9.043 0 0 0 2.228-5.954c0-5.01-4.074-9.079-9.08-9.079C5.024 1 .954 5.075.954 10.08c0 5.004 4.075 9.079 9.08 9.079 2.276 0 4.358-.84 5.954-2.229l5.175 5.175a.642.642 0 0 0 .448.189.638.638 0 0 0 .449-1.086z"
		  />
		</symbol>
		<symbol id="inst" viewbox="0 0 17 17">
			<path fill="#fff" d="M15.033 11.945a3.092 3.092 0 0 1-3.089 3.088H4.553a3.092 3.092 0 0 1-3.09-3.088V4.553a3.092 3.092 0 0 1 3.09-3.09h7.391a3.092 3.092 0 0 1 3.09 3.09v7.392zM11.944 0H4.553A4.558 4.558 0 0 0 0 4.553v7.392a4.558 4.558 0 0 0 4.553 4.552h7.391a4.558 4.558 0 0 0 4.553-4.552V4.553A4.558 4.558 0 0 0 11.944 0z"/><path fill="#fff" d="M8.249 11.036A2.79 2.79 0 0 1 5.46 8.249 2.79 2.79 0 0 1 8.25 5.462a2.79 2.79 0 0 1 2.787 2.787 2.79 2.79 0 0 1-2.787 2.787zm0-7.038a4.256 4.256 0 0 0-4.251 4.25 4.256 4.256 0 0 0 4.25 4.251A4.256 4.256 0 0 0 12.5 8.25a4.256 4.256 0 0 0-4.25-4.251z"/><path fill="#fff" d="M12.678 2.757a1.078 1.078 0 0 0-1.074 1.073c0 .282.115.56.315.76.2.198.477.314.759.314.283 0 .559-.116.759-.315a1.078 1.078 0 0 0 0-1.518c-.2-.2-.476-.314-.76-.314z"/>
		</symbol>
		<symbol id="telegram" viewbox="0 0 18 15">
			<path fill="#fff" d="M14.369 3.53L7.247 9.829a.382.382 0 0 0-.127.244l-.274 2.438c-.009.08-.12.09-.144.013L5.574 8.888a.383.383 0 0 1 .164-.438l8.41-5.216c.193-.12.391.146.22.297zM16.29.754L.959 6.728a.56.56 0 0 0 .044 1.057L4.9 8.935l1.454 4.615a.67.67 0 0 0 1.117.267l2.014-2.057 3.952 2.9a.825.825 0 0 0 1.296-.495L17.349 1.65a.789.789 0 0 0-1.058-.897z"/>
		</symbol>
		<symbol id="youtube" viewbox="0 0 18 13">
			<path fill="#fff" d="M11.707 6.762L8.09 8.652a.556.556 0 0 1-.813-.493V4.39a.556.556 0 0 1 .812-.494l3.617 1.878a.556.556 0 0 1 0 .987zm5.5-5.437C16.583.585 15.434.284 13.24.284H5.277c-2.244 0-3.413.321-4.032 1.108C.64 2.16.64 3.292.64 4.857v2.985c0 3.033.717 4.573 4.637 4.573h7.964c1.903 0 2.957-.266 3.64-.919.699-.67.997-1.762.997-3.654V4.857c0-1.65-.047-2.789-.672-3.532z"/>
		</symbol>
		<symbol id="letter" viewbox="00 0 24 18">
		<path fill="#fff" d="M21.56 14.52a1.44 1.44 0 0 1-1.44 1.438H3.75a1.44 1.44 0 0 1-1.438-1.439V3.336a1.44 1.44 0 0 1 1.439-1.44h16.365a1.44 1.44 0 0 1 1.439 1.44v11.183zM20.12.681H3.75a2.651 2.651 0 0 0-2.649 2.65v11.187a2.651 2.651 0 0 0 2.65 2.65h16.365a2.651 2.651 0 0 0 2.65-2.65V3.336A2.649 2.649 0 0 0 20.12.682z"/><path fill="none" stroke="#fff" stroke-miterlimit="20" stroke-width=".8" d="M21.56 14.52a1.44 1.44 0 0 1-1.44 1.438H3.75a1.44 1.44 0 0 1-1.438-1.439V3.336a1.44 1.44 0 0 1 1.439-1.44h16.365a1.44 1.44 0 0 1 1.439 1.44v11.183zM20.12.681H3.75a2.651 2.651 0 0 0-2.649 2.65v11.187a2.651 2.651 0 0 0 2.65 2.65h16.365a2.651 2.651 0 0 0 2.65-2.65V3.336A2.649 2.649 0 0 0 20.12.682z"/><path fill="#fff" d="M14.764 8.786l5.298-4.751a.608.608 0 0 0 .045-.856.608.608 0 0 0-.856-.045l-7.306 6.558-1.426-1.273c-.004-.005-.009-.01-.009-.014a.899.899 0 0 0-.098-.085l-5.8-5.19a.604.604 0 0 0-.857.049.604.604 0 0 0 .05.856l5.36 4.792-5.338 4.998a.608.608 0 0 0 .829.887l5.42-5.07 1.47 1.314a.605.605 0 0 0 .806-.005l1.511-1.353 5.388 5.119a.605.605 0 0 0 .834-.879z"/><path fill="none" stroke="#fff" stroke-miterlimit="20" stroke-width=".8" d="M14.764 8.786v0l5.298-4.751a.608.608 0 0 0 .045-.856.608.608 0 0 0-.856-.045l-7.306 6.558v0l-1.426-1.273c-.004-.005-.009-.01-.009-.014a.899.899 0 0 0-.098-.085l-5.8-5.19a.604.604 0 0 0-.857.049.604.604 0 0 0 .05.856l5.36 4.792v0l-5.338 4.998a.608.608 0 0 0 .829.887l5.42-5.07v0l1.47 1.314a.605.605 0 0 0 .806-.005l1.511-1.353v0l5.388 5.119a.605.605 0 0 0 .834-.879z"/>
		</symbol>
	  </svg>
	</footer>

<?php wp_footer(); ?>

</div> 
<!-- wrapper end -->

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="/wp-content/themes/cp/js/app.min.js"></script>


<script>
  $('.slider-nav .slider-nav__block:first-child').addClass('active-block');
  $('.slider-for .slider-for__container:first-child').addClass('content-active');

</script>

</body>
</html>