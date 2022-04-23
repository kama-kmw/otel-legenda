<!-- Footer -->

<footer class="footer">
    <div class="footer_content">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer_logo_container text-center">
                        <div class="footer_logo">
                            <a href="#"></a>
                            <div>Контакты</div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer_row">

                <!-- Address -->
                <div class="col-lg-3">
                    <div class="footer_title">Наш адрес</div>
                    <div class="footer_list">
                        <ul>
                            <li>Анапа</li>
                            <li>пос. Витязево</li>
                            <li>ул. Знойная д.1</li>
                        </ul>
                    </div>
                </div>

                <!-- Reservations -->
                <div class="col-lg-3">
                    <div class="footer_title">Связаться</div>
                    <div class="footer_list">
                        <ul>
                            <!-- <li>Tel: 345 5667 889</li> -->
                            <li>
                                <span>
                                    <i class="fa-solid fa-phone fa-phone-color"></i>
                                </span>
                                <p><a href="tel:+79280106646">+7928 010 66 46</a></br>
                            </li>
                            <li>
                                <span><i class="fa fa-whatsapp fa-whatsapp-color" aria-hidden="true"></i>
                                </span>
                                <p><a href="whatsapp://send?phone=+79280106646">WhatsApp</a></br>
                            </li>
                            <!-- <li>
									<span>
										<i class="fa-brands fa-telegram fa-telegram-color"></i>
									</span>
									<p><a href="https://tlgg.ru/9280106646">telegram</a></br>
								</li> -->
                            <li>
                                <span><i class="fa-brands fa-viber fa-viber-color"></i>
                                </span>
                                <p><a href="viber://chat?number=%2B79280106646">Viber</a></br>
                            </li>


                            <!-- <li>Fax; 6783 4567 889</li> -->
                            <!-- <li>reservations@hotelriver.com</li> -->
                        </ul>
                    </div>
                </div>

                <!-- Newsletter -->
                <?php include 'modules/wait_call.php' ?>
                <div class="col-lg-3">
                    <div class="footer_title">Мы Вам перезвоним</div>
                    <div class="newsletter_container">
                        <form action="" class="newsletter_form" id="newsletter_form">
                            <input type="text" class="newsletter_input" placeholder="Ваш телефон" required="required" name="phone">
                            <button class="newsletter_button" name="submit_wait_call">Жду звонка</button>
                        </form>
                    </div>
                </div>

                <!-- Footer images -->
                <!-- <div class="col-lg-3">
						<div class="certificates d-flex flex-row align-items-start justify-content-lg-between justify-content-start flex-lg-nowrap flex-wrap">
							<div class="cert"><img src="images/cert_1.png" alt=""></div>
							<div class="cert"><img src="images/cert_2.png" alt=""></div>
							<div class="footer_title">Номера</div>

							
						</div>
					</div> -->
                <div class="col-lg-3">
                    <div class="footer_title">Номера</div>
                    <div class="newsletter_container">
                        <ul class="footer__room">
                            <li>
                                <a href="booking_2.php">Полулюкс 2-х местный</a>
                            </li>
                            <li>
                                <a href="booking_3.php">Полулюкс 3-х местный</a>
                            </li>
                            <li>
                                <a href="booking_4.php">Полулюкс 4-х местный</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>
            document.write(new Date().getFullYear());
        </script> Сайт создан на <a href="https://surha.ru" target="_blank">SURHA.ru </a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    </div>
</footer>