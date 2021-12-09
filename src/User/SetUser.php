<?php

namespace learn\src\User;

class SetUser
{

    public function init(array $user_info): void
    {
        User::$name = $user_info['name'];

        User::$phone = $user_info['phone'];

        User::$email = $user_info['email'];
    }
}
