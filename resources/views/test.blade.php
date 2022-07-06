<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >
    <title>Document</title>
</head>

<body>
    @php
        $id = 1;
        $type = 'admin';
        $token = 'eyJpdiI6ImVXVDQ0VUVPUzdJOHZ5QTZEdzBySnc9PSIsInZhbHVlIjoiT0FFc2w1VzZOZjVBZmVkTitYd1hnZz09IiwibWFjIjoiZWNiY2Q3YmUxMjJiYjg5ZGM5MDYyODg5ZjViYmIxZjU1NDkxMzg0YTI2NzAzZTFiODlhODFkZjQ0ZDQyYzgyZiIsInRhZyI6IiJ9';
    @endphp

    <a href="{{ route('auth.test', ['type' => $type, 'token' => $token, 'id' => $id]) }}">mwdwk</a>
</body>

</html>
