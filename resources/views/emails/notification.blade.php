<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h4>Olá, {{$name}}</h4>
    <p>Você acabou envia o currículo com o email: {{$email}}</p>
    <p>Data/Hora do envio: {{$date}}</p>
    
    <table class="table table-striped table-bordered table-condensed table-hover">
        <tr class="active">
            <td>Nome</td>
            <td>{{$name}}</td>
        </tr>
        <tr class="success">
            <td>Email</td>
            <td>{{$email}}</td>
        </tr>
        <tr class="danger">
            <td>Telefone</td>
            <td>{{$telephone}}</td>
        </tr>
        <tr class="warning">
            <td>Cargo</td>
            <td>{{$office}}</td>
        </tr>
        <tr class="info">
            <td>Escolaridade</td>
            @if ($schooling === 1)
                <td>Ensino Fundamental</td>
            @elseif ($schooling === 2)
            <td>Ensino Médio</td>
            @else
            <td>Ensino Superior</td>
            @endif
        </tr>
    </table>
    Arquivo enviado que você selecionou:
</body> 
</html>