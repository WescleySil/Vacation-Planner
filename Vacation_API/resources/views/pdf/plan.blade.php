<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vacation Plan</title>
    <link rel="stylesheet" href="{{ resource_path('css/pdf.css') }}" type="text/css">
</head>
<body>

<div class="align-center">
    <header>
        <h1>
            Vacation Plan <img
                src="https://static-00.iconduck.com/assets.00/beach-with-umbrella-emoji-2048x2036-36ytkrws.png">
        </h1>
    </header>
    <p>
        Esse é seu planejamento de férias, visualize abaixo sua programação.
    </p>
    <table col="2">
        <thead>
        <tr>
            <th>Titulo</th>
            <th>Descrição</th>
            <th>Data</th>
            <th>Local</th>
            <th>Numero de Participantes</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$plan->title}}</td>
            <td>{{$plan->description}}</td>
            <td>{{$plan->date}}</td>
            <td>{{$plan->location}}</td>
            <td>{{$plan->participants}}</td>
        </tr>
        </tbody>
    </table>

</div>


</body>
