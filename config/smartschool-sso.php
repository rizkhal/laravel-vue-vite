<?php

return [
    'admin' => [
        'home' => '/',
    ],

    'student' => [
        'home' => 'user/siswa',
    ],

    'teacher' => [
        'home' => 'user/guru',
    ],

    // set false if you want to keep user logged in other app
    'logout_other_apps' => true,

    // current app login url
    'login_url' => 'https://v2.sekolahandalan.id'
];
