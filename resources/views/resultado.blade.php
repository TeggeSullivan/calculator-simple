<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora SimpleServer - Resultado</title>
</head>
<body>
    <h1>Calculadora SimpleServer</h1>
    <table>
        <thead>
            <th colspan="4">Resultado de SimpleServer</th>
        </thead>
        <tbody>
            <tr>
                <td>Primeiro</td>
                <td>Operação</td>
                <td>Segundo</td>
                <td>Resultado</td>
            </tr>
            <tr>
                <td>{{$first}}</td>
                <td>{{$operator}}</td>
                <td>{{$second}}</td>
                <td>{{$total}}</td>
            </tr>
            <tr><th colspan="4"><button><a href="{{route('home')}}">Fazer novo Cálculo!</a></button></th></tr>
        </tbody>
    </table>
</body>
</html>