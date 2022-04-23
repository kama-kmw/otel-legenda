<!DOCTYPE html>
<html lang="en">

<head>
	<title>ГОСТЕВОЙ ДОМ «ЛЕГЕНДА» В ВИТЯЗЕВО</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="The River template project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
	<link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/contact.css">
	<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
	<link rel="stylesheet" href="styles/elem-show.css">

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function(m, e, t, r, i, k, a) {
			m[i] = m[i] || function() {
				(m[i].a = m[i].a || []).push(arguments)
			};
			m[i].l = 1 * new Date();
			k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
		})
		(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		ym(88274418, "init", {
			clickmap: true,
			trackLinks: true,
			accurateTrackBounce: true
		});
	</script>
	<noscript>
		<div><img src="https://mc.yandex.ru/watch/88274418" style="position:absolute; left:-9999px;" alt="" /></div>
	</noscript>
	<!-- /Yandex.Metrika counter -->
</head>

<body>

	<div class="super_container">

		<?php
		include 'includes/header.php';
		?>

		<!-- Home -->

		<div class="home">
			<div class="background_image" style="background-image:url(images/contact.jpg)"></div>
			<div class="home_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content text-center">
								<div class="home_title">Контакты</div>
								<!-- <div class="booking_form_container">
								<form action="#" class="booking_form" id="booking_form">
									<div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
										<div class="booking_input_container d-flex flex-row align-items-start justify-content-start flex-wrap">
											<div><input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Заезд" required="required"></div>
											<div><input type="text" class="datepicker booking_input booking_input_a booking_out" placeholder="Выезд" required="required"></div>
											<div><input type="number" class="booking_input booking_input_b" placeholder="Дети" required="required"></div>
											<div><input type="number" class="booking_input booking_input_b" placeholder="Номер" required="required"></div>
										</div>
										<div><button class="booking_button trans_200">Забронировать</button></div>
									</div>
								</form>
							</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Contact -->

		<div class="contact">
			<div class="container">
				<div class="row">

					<!-- Contact Content -->
					<div class="col-lg-6">
						<div class="contact_content">
							<div class="contact_title">
								<h2>Связаться</h2>
							</div>
							<div class="contact_list">
								<ul>
									<li>Краснодарский край</li>
									<li>г. Анапа</li>
									<li>пос. Витязево</li>
									<li>ул. Знойная д.1 </li>
									<li>
										<ul class="contact__icon">
											<li>
												<a href="whatsapp://send?phone=+79280106646" target="_blank">
													<i class="fa fa-whatsapp fa-whatsapp-color" aria-hidden="true"></i>
												</a></br>
											</li>
											<li>
												<a href="tel:+79280106646" target="_blank">
													<i class="fa-solid fa-phone fa-phone-color"></i>
												</a></br>
											</li>
											<li>
												<a href="viber://chat?number=%2B79280106646" target="_blank">
													<i class="fa-brands fa-viber fa-viber-color"></i>
												</a></br>
											</li>
										</ul>
									</li>
									<li>
										<a href="mailto:hotellegenda123@mail.ru" class="footer__imail">hotellegenda123@mail.ru</a>
									</li>
								</ul>
							</div>
							<div class="contact_form_container">
								<form action="#" class="contact_form" id="contact_form">
									<div class="row">
										<div class="col-md-6 input_container">
											<input type="text" class="contact_input" placeholder="Ваше имя" required="required">
										</div>
										<div class="col-md-6 input_container">
											<input type="email" class="contact_input" placeholder="Ваш email адрес" required="required">
										</div>
									</div>
									<!-- <div class="input_container"><input type="text" class="contact_input" placeholder="Subject"></div> -->
									<div class="input_container"><textarea class="contact_input contact_textarea" placeholder="Сообщение" required="required"></textarea></div>
									<button class="contact_button">Отправить</button>
								</form>
							</div>
						</div>
					</div>

					<!-- Google Map -->
					<div class="col-xl-5 col-lg-6 offset-xl-1">
						<!-- <div class="contact_map"> -->
						<div class="yandex__map"></div>
						<div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Яндекс Карты</a><a href="https://yandex.ru/maps/?ll=37.258144%2C44.987680&mode=usermaps&source=constructorStatic&um=constructor%3A1837968dfb02a1bfb07e156e10c73af8f46c223dfe764f09612a998cbc41181b&utm_medium=mapframe&utm_source=maps&z=14" style="color:#eee;font-size:12px;position:absolute;top:14px;">Яндекс Карты — транспорт, навигация, поиск мест</a><iframe src="https://yandex.ru/map-widget/v1/-/CCUFAFXrOC" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
						<!-- Google Map -->

						<!-- <div class="map">
							<div id="google_map" class="google_map">
								<div class="map_container">
									<div id="">
										
									</div>
								</div>
							</div>
						</div> -->

					</div>
				</div>

			</div>
		</div>
	</div>

	<?php
	include 'includes/footer.php';
	?>
	
	</div>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="styles/bootstrap-4.1.2/popper.js"></script>
	<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
	<script src="plugins/greensock/TweenMax.min.js"></script>
	<script src="plugins/greensock/TimelineMax.min.js"></script>
	<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="plugins/greensock/animation.gsap.min.js"></script>
	<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/progressbar/progressbar.min.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="plugins/jquery-datepicker/jquery-ui.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
	<script src="js/contact.js"></script>
	<script src="js/elem-show.js"></script>
	<script src="https://kit.fontawesome.com/f8a4f55103.js" crossorigin="anonymous"></script>
</body>

</html>