<?php

function motortech_send_telegram($name, $phone, $service){

// Вставьте свои данные Telegram

$bot_token = 'ВАШ_BOT_TOKEN';

$chat_id = 'ВАШ_CHAT_ID';

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