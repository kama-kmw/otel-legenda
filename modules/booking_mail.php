<?php

$data = $_POST;
$date_arrival = $data['date_arrival'];
$date_departure = $data['date_departure'];
$room = $data['room'];
$phone = $data['phone'];
// Сообщение
$message = 'Бронь - '. $room . ' номер.
Дата заезда - '. $date_arrival . '
Дата выезда - '. $date_departure . '
Номер телефона - '. $phone . '
Перезвоните' ;

// Отправляем если кнопка нажата
if(isset($data['booking_mail'])) {
  mail('hotellegenda123@mail.ru', 'Бронь с сайта Hotel-Legenda.ru', $message);
}
?>