<?php
/*header feedback form*/
add_action( 'wp_ajax_feedback', 'headfeedback' );
add_action( 'wp_ajax_nopriv_feedback', 'headfeedback' );

function headfeedback() {

    $to = fw_get_db_customizer_option('email');
    $subject = 'Вам сообщение с сайта';
    $message = 'Пользователь: ' . $_POST['name'] . ' Email - ' . $_POST['mail'] . '<br /> Текст - ' . $_POST['message'];
    $headers = 'Content-type: text/html';
    wp_mail($to, $subject, $message, $headers);
    wp_die();

}

/*main page feedback*/
add_action( 'wp_ajax_mainfeedback', 'mainfeedback' );
add_action( 'wp_ajax_nopriv_mainfeedback', 'mainfeedback' );

function mainfeedback() {

    $to = fw_get_db_customizer_option('email');
    $subject = 'Вам сообщение с сайта';
    $message = 'Пользователь: ' . $_POST['name'] . ' Email - ' . $_POST['mail'] . '<br /> Текст - ' . $_POST['message'];
    $headers = 'Content-type: text/html';
    wp_mail($to, $subject, $message, $headers);
    wp_die();

}

/*contacts page form*/
add_action( 'wp_ajax_contacts', 'contacts' );
add_action( 'wp_ajax_nopriv_contacts', 'contacts' );

function contacts() {

    $to = fw_get_db_customizer_option('email');
    $subject = 'Вам сообщение с сайта';
    $message = 'Пользователь: ' . $_POST['name'] . ' Email - ' . $_POST['mail'] . '<br /> Текст - ' . $_POST['message'];
    $headers = 'Content-type: text/html';
    wp_mail($to, $subject, $message, $headers);
    wp_die();

}