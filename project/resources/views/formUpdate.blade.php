<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route("update",$announce->id) }}" method="POST">
    @csrf

<input type="text" value="{{ $announce->title }}" name="title" id="">
<input type="text" value="{{ $announce->description }}" name="description" id="">
<input type="submit" name="submit" value="">

    </form>
</body>
</html>