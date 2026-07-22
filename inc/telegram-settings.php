<?php

// Добавляем страницу настроек

function motortech_telegram_settings_menu(){

add_options_page(

'MOTÖРТЕХ Telegram',

'Telegram MOTÖРТЕХ',

'manage_options',

'motortech-telegram',

'motortech_telegram_settings_page'

);

}

add_action(

'admin_menu',

'motortech_telegram_settings_menu'

);

// Регистрация настроек

function motortech_register_telegram_settings(){

register_setting(

'motortech_telegram_group',

'motortech_bot_token'

);

register_setting(

'motortech_telegram_group',

'motortech_chat_id'

);

}

add_action(

'admin_init',

'motortech_register_telegram_settings'

);

// Страница настроек

function motortech_telegram_settings_page(){

?>

<div class="wrap">

<h1>

Telegram уведомления MOTÖРТЕХ

</h1>

<form method="post" action="options.php">

<?php

settings_fields(

'motortech_telegram_group'

);

do_settings_sections(

'motortech_telegram_group'

);

?>

<table class="form-table">

<tr>

<th>

Telegram Bot Token

</th>

<td>

<input

type="text"

name="motortech_bot_token"

value="<?php echo esc_attr(

get_option('motortech_bot_token')

); ?>"

style="width:400px;"

>

</td>

</tr>

<tr>

<th>

Telegram Chat ID

</th>

<td>

<input

type="text"

name="motortech_chat_id"

value="<?php echo esc_attr(

get_option('motortech_chat_id')

); ?>"

style="width:400px;"

>

</td>

</tr>

</table>

<?php

submit_button();

?>

</form>

</div>

<?php

}