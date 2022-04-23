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
	<link rel="stylesheet" type="text/css" href="styles/booking.css">
	<link rel="stylesheet" type="text/css" href="styles/booking_responsive.css">
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
			<div class="background_image" style="background-image:url(images/booking.jpg)"></div>
			<div class="home_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content text-center">
								<div class="home_title">Забронировать номер</div>
								<div class="booking_form_container">
									<?php include 'modules/booking_mail.php' ?>
									<form action="" method="POST" class="booking_form" id="booking_form">
										<div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
											<div class="booking_input_container d-flex flex-row align-items-start justify-content-start flex-wrap">
												<div><input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Дата заезда" name="date_arrival" required="required"></div>
												<div><input type="text" class="datepicker booking_input booking_input_a booking_out" placeholder="Дата выезда" name="date_departure" required="required"></div>
												<div>
													<select class="booking_input booking_input_b" name="room" id="">
														<option disabled>Номера</option>
														<option>2-х местный</option>
														<option>3-х местный</option>
														<option>4-х местный</option>
													</select>
												</div>
												<!-- <div><input type="number" class="booking_input booking_input_b" placeholder="Дети" required="required"></div> -->
												<div><input type="number" class="booking_input booking_input_b" placeholder="Телефон" name="phone" required="required"></div>
											</div>
											<div><button class="booking_button trans_200" name="booking_mail">Забронировать</button></div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Booking -->

		<div class="booking">
			<div class="container">
				<div class="row">
					<div class="col">

						<!-- Booking Slider -->
						<div class="booking_slider_container">
							<div class="owl-carousel owl-theme booking_slider">

								<!-- Slide -->
								<div class="booking_item">
									<!-- <div class="background_image" style="background-image:url(images/booking_1.jpg)"></div> -->
									<div class="background_image" style="background-image:url(img/11.jpg)"></div>
									<div class="booking_overlay trans_200"></div>
									<!-- <div class="booking_item_content">
									<div class="booking_item_list">
										<ul>
											<li>27 m² Patio</li>
											<li>Balcony with view</li>
											<li>Garden / Mountain view</li>
											<li>Flat-screen TV</li>
											<li>Air conditioning</li>
											<li>Soundproofing</li>
											<li>Private bathroom</li>
											<li>Free WiFi</li>
										</ul>
									</div>
								</div> -->
									<!-- <div class="booking_price">$120/Night</div> -->
									<!-- <div class="booking_link"><a href="booking.html">Family Room</a></div> -->
								</div>

								<!-- Slide -->
								<div class="booking_item">
									<!-- <div class="background_image" style="background-image:url(images/booking_2.jpg)"></div> -->
									<div class="background_image" style="background-image:url(img/14.jpg)"></div>
									<div class="booking_overlay trans_200"></div>
									<!-- <div class="booking_item_content">
									<div class="booking_item_list">
										<ul>
											<li>27 m² Patio</li>
											<li>Balcony with view</li>
											<li>Garden / Mountain view</li>
											<li>Flat-screen TV</li>
											<li>Air conditioning</li>
											<li>Soundproofing</li>
											<li>Private bathroom</li>
											<li>Free WiFi</li>
										</ul>
									</div>
								</div> -->
									<!-- <div class="booking_price">$120/Night</div> -->
									<!-- <div class="booking_link"><a href="booking.html">Deluxe Room</a></div> -->
								</div>

								<!-- Slide -->
								<div class="booking_item">
									<!-- <div class="background_image" style="background-image:url(images/booking_3.jpg)"></div> -->
									<div class="background_image" style="background-image:url(img/13.jpg)"></div>
									<div class="booking_overlay trans_200"></div>
									<!-- <div class="booking_item_content">
									<div class="booking_item_list">
										<ul>
											<li>27 m² Patio</li>
											<li>Balcony with view</li>
											<li>Garden / Mountain view</li>
											<li>Flat-screen TV</li>
											<li>Air conditioning</li>
											<li>Soundproofing</li>
											<li>Private bathroom</li>
											<li>Free WiFi</li>
										</ul>
									</div>
								</div> -->
									<!-- <div class="booking_price">$120/Night</div> -->
									<!-- <div class="booking_link"><a href="booking.html">Single Room</a></div> -->
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Details Right -->

		<div class="details">
			<div class="container">
				<div class="row">

					<!-- Details Image -->
					<div class="col-xl-7 col-lg-6">
						<div class="details_image">
							<div class="background_image" style="background-image:url(img/10.jpg)"></div>
						</div>
					</div>

					<!-- Details Content -->
					<div class="col-xl-5 col-lg-6">
						<div class="details_content">
							<div class="details_title">Полулюкс 4-х местный с балконом</div>
							<div class="details_list">
								<ul>
									<li>Площадь 22 м²</li>
									<li>Комнат 1</li>
									<li>Балкон</li>
									<li>Душ</li>
									<li>Туалет</li>
									<li>Сплит-система</li>
									<li>Интернет</li>
									<li>Телевизор</li>
									<li>Холодильник</li>
								</ul>
							</div>
							<div class="details_long_list">
								<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
									<li>Четыре односпальные кровати</li>
									<li>Прикроватные тумбочки</li>
									<li>Туалетный столик с зеркалом</li>
									<li>Стол</li>
									<li>Платяной шкаф</li>
									<li>Цифровое ТВ (20 каналов)</li>
									<li>На балконе – стулья, сушилка для белья</li>
									<!-- <li>Balcony</li>
								<li>Mountain view</li>
								<li>Terrace</li>
								<li>TV</li>
								<li>Satellite Channels</li>
								<li>Safety Deposit Box</li>
								<li>Heating</li>
								<li>Sofa</li>
								<li>Tile/Marble floor</li>
								<li>Mosquito net</li>
								<li>Wardrobe/Closet</li>
								<li>Sofa bed</li>
								<li>Shower</li>
								<li>Hairdryer</li>
								<li>Free toiletries</li>
								<li>Toilet</li>
								<li>Bath or Shower</li>
								<li>Toilet paper</li>
								<li>Tea/Coffee Maker</li>
								<li>Minibar</li>
								<li>Dining area</li>
								<li>Electric kettle</li>
								<li>Dining table</li>
								<li>Outdoor furniture</li>
								<li>Outdoor dining area</li>
								<li>Towels</li>
								<li>Linen</li>
								<li>Upper floors accessible by lift</li> -->
								</ul>
							</div>
							<div class="book_now_button"><a href="tel:+79280106646">Узнать подробнее</a></div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- Details Left -->

		<div class="details">
			<div class="container">
				<div class="row">

					<!-- Details Content -->
					<!-- <div class="col-xl-5 col-lg-6 order-lg-1 order-2">
					<div class="details_content">
						<div class="details_title">Double Room</div>
						<div class="details_list">
							<ul>
								<li>27 m² Patio</li>
								<li>Balcony with view</li>
								<li>Garden / Mountain view</li>
								<li>Flat-screen TV</li>
								<li>Air conditioning</li>
								<li>Soundproofing</li>
								<li>Private bathroom</li>
								<li>Free WiFi</li>
							</ul>
						</div>
						<div class="details_long_list">
							<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
								<li>Balcony</li>
								<li>Mountain view</li>
								<li>Terrace</li>
								<li>TV</li>
								<li>Satellite Channels</li>
								<li>Safety Deposit Box</li>
								<li>Heating</li>
								<li>Sofa</li>
								<li>Tile/Marble floor</li>
								<li>Mosquito net</li>
								<li>Wardrobe/Closet</li>
								<li>Sofa bed</li>
								<li>Shower</li>
								<li>Hairdryer</li>
								<li>Free toiletries</li>
								<li>Toilet</li>
								<li>Bath or Shower</li>
								<li>Toilet paper</li>
								<li>Tea/Coffee Maker</li>
								<li>Minibar</li>
								<li>Dining area</li>
								<li>Electric kettle</li>
								<li>Dining table</li>
								<li>Outdoor furniture</li>
								<li>Outdoor dining area</li>
								<li>Towels</li>
								<li>Linen</li>
								<li>Upper floors accessible by lift</li>
							</ul>
						</div>
						<div class="book_now_button"><a href="#">Book Now</a></div>
					</div>
				</div> -->

					<!-- Details Image -->
					<!-- <div class="col-xl-7 col-lg-6 order-lg-2 order-1">
					<div class="details_image">
						<div class="background_image" style="background-image:url(images/details_2.jpg)"></div>
					</div>
				</div> -->

				</div>
			</div>
		</div>

		<!-- Special -->

		<div class="special">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/special.jpg" data-speed="0.8"></div>
			<div class="container">
				<div class="row">
					<div class="col-xl-6 offset-xl-6 col-lg-8 offset-lg-2">
						<div class="special_content">
							<div class="details_title">ДОП. ИНФОРМАЦИЯ ПО СТОИМОСТИ:</div>
							<div class="details_list">
								<ul>
									<li>Цены за проживание, без питания.</li>
									<li>Предоплата при бронировании – 3000 руб.</li>
									<li>Доп. место - 300 руб. в сутки.</li>
									<li>Дети до 3 лет принимаются бесплатно!</li>
									<br>
									<li>Реквизиты для оплаты брони:</li>
									<li>Карта Сбербанка №5469 6000 1456 5212</li>
									<li>Получатель Георгий Владимирович Айвазов</li>
								</ul>
							</div>
							<div class="details_long_list">
								<!-- <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
								<li>Balcony</li>
								<li>Mountain view</li>
								<li>Terrace</li>
								<li>TV</li>
								<li>Satellite Channels</li>
								<li>Safety Deposit Box</li>
								<li>Heating</li>
								<li>Sofa</li>
								<li>Tile/Marble floor</li>
								<li>Mosquito net</li>
								<li>Wardrobe/Closet</li>
								<li>Sofa bed</li>
								<li>Shower</li>
								<li>Hairdryer</li>
								<li>Free toiletries</li>
								<li>Toilet</li>
								<li>Bath or Shower</li>
								<li>Toilet paper</li>
								<li>Tea/Coffee Maker</li>
								<li>Minibar</li>
								<li>Dining area</li>
								<li>Electric kettle</li>
								<li>Dining table</li>
								<li>Outdoor furniture</li>
								<li>Outdoor dining area</li>
								<li>Towels</li>
								<li>Linen</li>
								<li>Upper floors accessible by lift</li>
							</ul> -->
							</div>
							<!-- <div class="book_now_button"><a href="#">Book Now</a></div> -->
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
	<script src="js/booking.js"></script>
	<script src="js/elem-show.js"></script>
	<script src="https://kit.fontawesome.com/f8a4f55103.js" crossorigin="anonymous"></script>

</body>

</html>