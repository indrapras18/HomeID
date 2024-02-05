<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update detail</title>
</head>

<body>
    <form action="/update/{{ $data->id_daerah }}" method="post">
        @csrf
        <label for="Nama Daerah"></label><br>
        <input type="text" name="nama_daerah" id="nama_daerah" value="{{ $data->nama_daerah }}" placeholder="input your nama daerah here" required><br>
        <button type="submit">Post</button>
    </form>
</body>

</html>

