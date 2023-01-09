<?php

namespace App\Consts;

// usersで使う定数
class UserConst
{
    const GENDER_NONE = 0;
    const GENDER_MAN = 1;
    const GENDER_WOMAN = 2;
    const GENDER_LIST = [
        'none' => self::GENDER_NONE,
        'man' => self::GENDER_MAN,
        'woman' => self::GENDER_WOMAN,
    ];
}