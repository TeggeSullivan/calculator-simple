<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora SimpleServer - Captura</title>
</head>
<body>
    <h1>Calculadora SimpleServer</h1>
    <div id="container_form">
        <div id="titulo">
            <label>1º valor</label>
            <label>operação</label>
            <label>2º valor</label>
        </div>
        <form action="{{route('resultado')}}" method="post" id="form_captura">
            @csrf
            <input type="number" name="first" id="fisrt">
            <select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="number" name="second" id="second">
            <input type="submit" id="enviar" value="Enviar!">
        </form>
    </div>
</body>
</html>