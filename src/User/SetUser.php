<?php

namespace learn\src\User;

class SetUser
{

    public function init(array $user_info): void
    {
        User::$user_id = $user_info['user_id'];

        User::$name = $user_info['name'];

        User::$phone = $user_info['phone'];

        User::$email = $user_info['email'];
    }
}
