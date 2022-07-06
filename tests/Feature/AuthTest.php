<?php

it('ensure user can loggin via url', function () {
    $id = 263;
    $type = 'guru';
    $token = 'eyJpdiI6InJoUEVvMW1UREkzaWRCdks0NFJkYXc9PSIsInZhbHVlIjoidkVPbnNGZWNMeU05amNLWUtjOCtRQT09IiwibWFjIjoiNGZiNGMxNjQxOWU5YjI1MGQwYmEyYzJhNWM3ZjA2ZjYxYmM5NzhhMzIzZGM5OWJmODQ5MTAyM2I2MWNkZjdmNiIsInRhZyI6IiJ9';

    $url = route('auth.test', ['type' => $type, 'token' => $token, 'id' => $id]);

    $res = $this->get($url);
    $res->assertStatus(302);
});
