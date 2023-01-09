<?php
namespace App\Consts;

class OrderConst
{
    const STATUS_RECEPT = '1';

    const STATUS_RECEPT_NAME = '注文受付';

    const STATUS_SENT = '2';

    const STATUS_SENT_NAME = '発送済み';

    const STATUS_CANCEL = '3';

    const STATUS_CANCEL_NAME = 'キャンセル';

    const STATUS_LIST = [
        self::STATUS_RECEPT => STATUS_RECEPT_NAME,
        self::STATUS_SENT => STATUS_SENT_NAME,
        self::STATUS_CANCEL => STATUS_CANCEL_NAME
    ];

    const STUFF_STATUS_LIST = [
        self::STATUS_RECEPT => STATUS_RECEPT_NAME,
        self::STATUS_SENT => STATUS_SENT_NAME,
    ];
}