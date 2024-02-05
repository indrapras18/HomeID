<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update detail</title>
</head>
<body>
    <form action="/updatedetails/{{ $data->id_detail }}" method="post">
        @csrf
        <label for="">Alamat</label><br>
        <input type="text" name="alamat" id="alamat" value="{{ $data->alamat }}" placeholder="input your alamat here" required><br>
        <label for="">Daya listrik</label><br>
        <input type="text" name="daya_listrik" id="daya_listrik" value="{{ $data->daya_listrik }}" placeholder="input your daya lesterk here" required><br>
        <label for="">Jumlah kamar</label><br>
        <input type="text" name="jumlah_kamar" id="jumlah_kamar" value="{{ $data->jumlah_kamar }}" placeholder="input your jumlah kamar here" required><br>
        <label for="">Luas kamar</label><br>
        <input type="text" name="luas_kamar" id="luas_kamar" value="{{ $data->luas_kamar }}" placeholder="input your luas kamar here" required><br>
        <label for="">Luas dapur</label><br>
        <input type="text" name="luas_dapur" id="luas_dapur" value="{{ $data->luas_dapur }}" placeholder="input your luas dapur here" required><br>
        <label for="">Luas kamar mandi</label><br>
        <input type="text" name="luas_kamar_mandi" id="luas_kamar_mandi" value="{{ $data->luas_kamar_mandi }}" placeholder="input your luas kamar mandi here" required><br>
        <button type="submit">Post</button>
    </form>
</body>
</html>