<?php

function motortech_form_send(){

if(

isset($_POST['motortech_submit'])

){
    
if(

!empty($_POST['website'])

){

exit;

}

$name = sanitize_text_field(

$_POST['name']

);

$phone = sanitize_text_field(

$_POST['phone']

);

$service = sanitize_text_field(

$_POST['service']

);

// Создаём заявку в WordPress

$post_id = wp_insert_post(

array(

'post_type'=>'motortech_request',

'post_title'=>$name.' - '.$phone,

'post_status'=>'publish'

)

);

if($post_id){

update_post_meta(

$post_id,

'Телефон',

$phone

);

update_post_meta(

$post_id,

'Услуга',

$service

);

}

// Отправка письма администратору

$admin_email = get_option(

'admin_email'

);

$message = "

Новая заявка MOTÖРТЕХ

Имя:

$name

Телефон:

$phone

Услуга:

$service

";

wp_mail(

$admin_email,

'Новая заявка MOTÖРТЕХ',

$message

);

// Перенаправление после отправки

wp_redirect(

home_url('/thank-you')

);

exit;

}

}

add_action(

'init',

'motortech_form_send'

);

?>