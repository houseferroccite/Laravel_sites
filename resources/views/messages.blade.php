<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Messages</title>
</head>
<body>
<div class="container">
    <form action="{{route('searchPhone')}}" method="GET" novalidate="novalidate">
        <input
            class="form-control mr-sm-2"
            id="phone"
            name="phone"
            style="width: 100% !important;"
            type="Search"
            autofocus
            placeholder="Поиск по номеру телефона"
            aria-label="Search">
        <br>
        <button class="btn btn-primary" style="width: 100%">Найти</button>
    </form>
    @foreach($messages as $message)
        <ul>
            <li>
                <b>content</b> - {{ $message->content['text'] }}
            </li>
            <li><b>Телефон</b> - {{$message->customer->phone}}</li>
        </ul>
    @endforeach
</div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous">
</script>
</html>
