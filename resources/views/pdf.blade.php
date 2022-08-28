<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>PDF RELATORIO</title>
    
</head>
<style>
    .table-condensed {
        font-size: 13px;
    }

    div {
        margin-top: 10px;
    }
</style>

    <body>
    <header>
        
    </header>
    <div class="align-itens-center" style="width: 100%">
                <h4 class="text-center">Relatório de Usuários</h4>
    </div>
    <div  class="align-itens-center">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead style="text-align: center">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Data de Cadastro</th>
                    </tr>
                </thead>
                <tbody style="text-align: center">
                    @foreach ($usuario as $u)
                    <tr>
                        <td>{{$u->id}}</td>
                        <td>{{$u->nome}}</td>
                        <td>{{$u->telefone}}</td>
                        <td>{{date('d/m/Y H:i:s', strtotime($u->data_cadastro))}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>