<?php 
function get_db_config()
{
    if (getenv('IS_IN_HEROKU')) {
        return $db_config = [
            'connection' => 'mysql',
            'host' => '114.55.100.251',
            'database'  => 'weibo',
            'username'  => 'weibo',
            'password'  => 'iAGrD5r7SJEhPcHK',
        ];
    } else {
        return $db_config = [
            'connection' => 'mysql',
            'host' => '114.55.100.251',
            'database'  => 'weibo',
            'username'  => 'weibo',
            'password'  => 'iAGrD5r7SJEhPcHK',
        ];
    }
}

function get_mail_config()
{
    if (getenv('IS_IN_HEROKU')) {
        return $db_config = [
            'MAIL_MAILER'       =>  'smtp',
            'MAIL_HOST'         =>  'smtp.qq.com',
            'MAIL_PORT'         =>  25,
            'MAIL_USERNAME'     =>  '170907924@qq.com',
            'MAIL_PASSWORD'     =>  'zbdqkxjnhfizbigh',
            'MAIL_ENCRYPTION'   =>  null,
            'MAIL_FROM_ADDRESS' =>  '170907924@qq.com',
            'MAIL_FROM_NAME'    =>  'admin@tiktok.test'  
        ];
    } else {
        return $db_config = [
            'MAIL_MAILER'       =>  'smtp',
            'MAIL_HOST'         =>  'smtp.qq.com',
            'MAIL_PORT'         =>  25,
            'MAIL_USERNAME'     =>  '170907924@qq.com',
            'MAIL_PASSWORD'     =>  'zbdqkxjnhfizbigh',
            'MAIL_ENCRYPTION'   =>  null,
            'MAIL_FROM_ADDRESS' =>  '170907924@qq.com',
            'MAIL_FROM_NAME'    =>  'admin@tiktok.test'  
        ];
    }
}