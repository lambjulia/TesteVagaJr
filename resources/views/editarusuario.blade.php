
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

<div class="container" style="display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 60%;
                        width: 8000px;
                        padding-top: 20px; 
                        ">
    <div class="card" style="width: 30%">
        
        <div class="form">
          <div class="text-center" style="justify-content: center; align-items: center;">

            <h4 class="text-xl font-semibold mt-1 mb-6 pb-1">Cadastre um novo Usuário</h4>
          </div>
          
        @if ($errors->any())
            <div class='alert alert-danger'>
            @foreach ( $errors->all() as $error )
            <p>{{ $error }}</p>
            @endforeach
            </div>
        @endif

            <form class="form-horizontal" method="post" action="{{route('update', $usuario->id)}}">
                @csrf
                <div class="form-group col-md-12">
                    <label for="nome" class="control-label">Nome Completo</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id name="nome"  
                        value="{{ isset($usuario->nome) ? $usuario->nome : old('nome') }}">
                    </div>
                </div>

                <div class="form-group col-md-12">
                    <label for="telefone" class="control-label">Telefone</label>
                    <div class="input-group">
                        <input type="text" class="form-control telefone" id name="telefone" 
                        value="{{ isset($usuario->telefone) ? $usuario->telefone : old('telefone') }}">
                    </div>
                </div>

              

                
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('home') }}" class="btn btn-primary">Voltar</a>
           
        </div>
    </div>
    
    
    
    
    </form>
 </div>
</div>
</div>
</body>
<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
<script type='text/javascript' src='//igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js'></script>
<script>$(document).ready(function(){
    $('.telefone').mask('(00) 00000-0000');
  });</script>
</html>