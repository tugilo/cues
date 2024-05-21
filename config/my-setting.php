<?php
// config/my-app.php

return [
    // configに.envの内容を入れる。
    'MY_CRYPT_KEY' => env('DB_CRYPT_KEY'),
];
