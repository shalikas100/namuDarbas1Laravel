<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Lentelės kūrimas. Duomenys is db. Klientai.</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Vardas</th>
        <th>Pavarde</th>
        <th>Asmens kodas</th>
        <th>Adresas</th>
    </tr>
    @foreach($klientai as $klientas)
    <tr>
        <td>{{ $klientas-> id}}</td>
        <td>{{ $klientas-> name}}</td>
        <td>{{ $klientas-> surname}}</td>
        <td>{{ $klientas-> personal_code}}</td>
        <td>{{ $klientas-> address}}</td>
    </tr>
    @endforeach
</table>
</body>
</html>