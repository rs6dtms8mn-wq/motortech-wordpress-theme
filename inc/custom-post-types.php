<?php

function motortech_register_requests(){

register_post_type(

'motortech_request',

array(

'labels'=>array(

'name'=>'Заявки',

'singular_name'=>'Заявка'

),

'public'=>false,

'show_ui'=>true,

'menu_icon'=>'dashicons-phone',

'supports'=>array(

'title'

)

)

);

}

add_action(

'init',

'motortech_register_requests'

);

?>