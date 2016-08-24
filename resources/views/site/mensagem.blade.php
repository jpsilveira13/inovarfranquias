<html>
<head>
    <title>Resultado anuncio</title>
    <link rel="stylesheet" href="/css/bootstrap.css">

    <link rel="stylesheet" href="/css/style.css">

    <link rel="stylesheet" id="theme-switch" href="/css/style.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
</head>
<body>
<div class="container">
    <h2>Tabela de Mensagens enviadas</h2>
    <p>Relatório básico de envio de mensagens feitas pelo site.</p>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Capital</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Celular</th>
                <th>Estado</th>
                <th>Cidade</th>
                <th>Mensagem</th>
            </tr>
            </thead>
            <tbody>
            @foreach($mensagens as $mensagem)
                <tr>

                    <td>{{$mensagem->id}}</td>
                    <td>{{$mensagem->nome}}</td>
                    <td>{{$mensagem->capital}}</td>
                    <td>{{$mensagem->email}}</td>
                    <td>{{$mensagem->telefone}}</td>
                    <td>{{$mensagem->celular}}</td>
                    <td>{{$mensagem->estado}}</td>
                    <td>{{$mensagem->cidade}}</td>
                    <td>{{$mensagem->mensagem}}</td>
                    @endforeach

                </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>