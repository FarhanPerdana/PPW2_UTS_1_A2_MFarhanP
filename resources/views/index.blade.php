<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemain MU</title>
</head>
<body>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama_Pemain</th>
                <th>No_Punggung</th>
                <th>Posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_pemain as $pemain)
                <tr>
                   <td>{{ $pemain->id }}</td>
                   <td>{{ $pemain->nama }}</td>
                   <td>{{ number_format($pemain->no_punggung) }}</td>
                   <td>{{ $pemain->posisi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>