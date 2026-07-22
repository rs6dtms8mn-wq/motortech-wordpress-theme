<?php

function motortech_customizer($wp_customize){

    $wp_customize->add_section(

        'motortech_contacts',

        array(

            'title'=>'Контакты MOTÖРТЕХ'

        )

    );

    $wp_customize->add_setting(

        'phone_number'

    );

    $wp_customize->add_control(

        'phone_number',

        array(

            'label'=>'Телефон',

            'section'=>'motortech_contacts'

        )

    );

    $wp_customize->add_setting(

        'address'

    );

    $wp_customize->add_control(

        'address',

        array(

            'label'=>'Адрес',

            'section'=>'motortech_contacts'

        )

    );

}

add_action(

    'customize_register',

    'motortech_customizer'

);

?>