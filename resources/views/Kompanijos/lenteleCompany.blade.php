<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kompaniju Lentele</title>
</head>
<body>

<h1>Kompanijos</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Salis</th>
        <th>Miestas</th>
        <th>Pasto kodas</th>
    </tr>
    @foreach($kompanijos as $kompanija)
    <tr>
        <td>{{ $kompanija-> id}}</td>
        <td>{{ $kompanija-> salis}}</td>
        <td>{{ $kompanija-> miestas}}</td>
        <td>{{ $kompanija-> pasto_kodas}}</td>
    </tr>
    @endforeach
</table>
    
</body>
</html>