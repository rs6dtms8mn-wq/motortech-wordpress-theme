<?php

function motortech_send_telegram($name, $phone, $service){

// Вставьте свои данные Telegram

$bot_token = get_option(

'motortech_bot_token'

);

$chat_id = get_option(

'motortech_chat_id'

);

// Текст сообщения

$message = "

🔧 Новая заявка MOTÖРТЕХ

👤 Имя:

$name

☎️ Телефон:

$phone

🛠 Услуга:

$service

🌐 Сайт:

".home_url()."

";

// Отправка в Telegram

$url = 

"https://api.telegram.org/bot"

.$bot_token

."/sendMessage";

$args = array(

'body'=>array(

'chat_id'=>$chat_id,

'text'=>$message,

'parse_mode'=>'HTML'

)

);

wp_remote_post(

$url,

$args

);

}