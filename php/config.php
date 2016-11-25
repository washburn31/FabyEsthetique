<?php

return array(
    // Mail Address and Name
    'sender_email'   => 'contact@faby-esthetique.fr',
    'sender_name'    => 'contact',

    // Mail Config
    'mail_type'     => 'smtp', // smtp or mail - mail is the php mail function
    'smtp_server'   => 'ssl0.ovh.net', 
    'smtp_port'     => '587',
    'smtp_user'     => 'contact@faby-esthetique.fr',
    'smtp_password' => 'Edith3009',

    // Mail Subjects
    'contact_form_subject' => 'New message form website',
    'newsletter_form_subject' => 'New message form website',
    'appointment_form_subject' => 'New appointment request form website',
    'appointment_autoresponder_subject' => 'Thanks for your appointment request',

    // Mailchimp
    'mailchimp_support' => false, // ture is activated
    'mailchimp_api_key' => 'xxxxxx-your-api-key-xxxxxx',
    'mailchimp_list_id' => 'xxx-list-id-xxx',
    
    'CompteSMS' => '',
    'UtilisateurSMS' => '',
    'MotDePasseSMS' => '',
    'NumeroExpediteurSMS' => '',
    'NumeroDestinataireSMS' => ''
);

//'smtp.faby-esthetique.fr',