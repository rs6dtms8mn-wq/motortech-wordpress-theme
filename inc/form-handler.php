<?php

function motortech_form_send(){

if(

isset($_POST['motortech_submit'])

){

$name =

sanitize_text_field(

$_POST['name']

);

$phone =

sanitize_text_field(

$_POST['phone']

);

$service =

sanitize_text_field(

$_POST['service']

);

$post_id = wp_insert_post(

array(

'post_type'=>'motortech_request',

'post_title'=>

$name.' - '.$phone,

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