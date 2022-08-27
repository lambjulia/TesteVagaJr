
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">   
        <script src="{{url('assets/js/core/popper.min.js')}}"></script>
        <script src="{{url('assets/js/core/bootstrap.min.js')}}"></script>
        <script src="sweetalert2.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
        <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
        />
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css"
        rel="stylesheet">
        <link rel="stylesheet" href="sweetalert2.min.css">
        </head>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: rgb(242, 242, 242)" >
            <a href="{{ route('home') }}">
            <div class="text-center" style="display: flex;
              justify-content: left;
              align-items: left;">
    <img style="width: 80%;
                height: 80%;
                padding-top: 3px;"
    class="mx-auto w-40" src="{{asset('assets/img/nitronews.png')}}" alt="logo" />
            </div>
            </a>
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Cadastro
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="{{ url('formulario') }}">Cadastrar Usuário</a>
                      <a class="dropdown-item" href="{{ url('tabelausuarios') }}">Tabela Usuários</a>
                    </div>
                  </li>
                </ul>
              </div>
              
            <section class="mb-2" style="padding-left: 1000px">
                <a
                  class="btn btn-primary btn-floating m-1"
                  style="background-color: #ac2bac;"
                  href="https://www.instagram.com/jjulialamb/"
                  role="button"
                  ><i class="fab fa-instagram"></i
                ></a>
                <a
                  class="btn btn-primary btn-floating m-1"
                  style="background-color: #0082ca;"
                  href="https://www.linkedin.com/in/julia-lamb-337a92229/"
                  role="button"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
                <a
                  class="btn btn-primary btn-floating m-1"
                  style="background-color: #333333;"
                  href="https://github.com/lambjulia"
                  role="button"
                  ><i class="fab fa-github"></i
                ></a>
              </section>
          </nav>
    <body style="background: linear-gradient(135deg, rgba(50, 79, 133, 0.9) 0%, rgba(8, 180, 147, 0.9) 100%);">

    @if(session('CadastroUsuario'))
        <script>
	        Swal.fire({
	            icon: 'success',
	            title: 'Usuário cadastrado com sucesso!',
	            showConfirmButton: false,
	            timer: 1500
	        })
	    </script>	
    @endif
    @if (session('ExcluirUsuario'))
        <script>
            Swal.fire({
                position: 'mid-mid',
                icon: 'success',
                title: 'Usuário excluído com sucesso!',

            })
        </script>
    @endif
    @if(session('EditarUsuario'))
        <script>
	        Swal.fire({
	            icon: 'success',
	            title: 'Dados alterados com sucesso!',
	            showConfirmButton: false,
	            timer: 1500
	        })
	    </script>	
    @endif
<div class="container" style="display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 100%;
                        width: 8000px;
                        padding-top: 80px; 
                        ">
    <div class="card" style="width: 80%">
        
        <div class="form">
          <div class="text-center" style="justify-content: center; align-items: center;">

            <h4 class="text-xl font-semibold mt-1 mb-6 pb-1">Tabela de Usuários</h4>
          </div>
          
<div class="container-fluid no-padding table-responsive-sm" style="background-color: rgb(255, 255, 255)">
    <table class="table table-striped nowrap" style="width:100%" id="exemplo">
        <thead style="align: center">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Data de Cadastro</th>
                <th>Nível</th>
                <th></th>
                <th></th>

            </tr>
        </thead>
        <tbody>
            @foreach ($usuario as $u)
            <tr>
                <td>{{$u->id}}</td>
                <td>{{$u->nome}}</td>
                <td>{{$u->telefone}}</td>
                <td>{{date('d/m/Y H:i:s', strtotime($u->data_cadastro))}}</td>
                <td>
                    @switch($u->permissoes->nivel)
                              @case('1')
                             Operador
                          @endswitch</td>

                          <td>
                            <a class="btn btn-danger delete" onclick="destroy(this)"
                            href="destroy/{{ $u->id }}">
                            Excluir</a>
                        </td>
                        <td>
                            <a href="{{ route('editar', $u->id) }}" class="btn btn-warning">
                               Editar </a>
                          </td>
            </tr>
            @endforeach
        </tbody>
        <div class="form-row">
            <div class="text-center" style="padding-left: 8px">
        <a href="{{ route('home') }}" class="btn btn-primary" >Voltar</a>
            </div>
            <div class="text-center" style="padding-left: 8px">
        <a href="{{ route('formulario') }}" class="btn btn-primary">Cadastrar Novo Usuário</a>
            </div>
        </div>
    </table>
</div>
</body>
<script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
<script>

function destroy() {

var deleteLinks = document.querySelectorAll('.delete');
event.preventDefault();

for (var i = 0; i < deleteLinks.length; i++) {
    deleteLinks[i].addEventListener('click', function(event) {
        Swal.fire({
            title: 'ALERTA!',
            text: "Você realmente deseja excluir este usuário?",
            icon: 'warning',
            iconColor: '#e22121',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Sim, Excluir!',
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = this.getAttribute('href');
            }
        });

    });
}
}
</script>
<script>
       $(document).ready(function () {
    $('#exemplo').DataTable({
        select: false,
        responsive: true,
        "order": [
            [0, "asc"]
        ],
        "info": false,
        "sLengthMenu": false,
        "bLengthChange": false,
        "oLanguage": {

            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de START até END de TOTAL registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de MAX registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "MENU resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        }
    });
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
</html>