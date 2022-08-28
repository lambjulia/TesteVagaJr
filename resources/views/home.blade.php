
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
<style>

    .container {
  position: center;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  width:9000px;
  min-height: 100vh;
  margin: 0 auto;
  flex-wrap: wrap;
  box-sizing: content-box;
}


.card{
  width:550px; 
  height:450px; 
  margin:30px;
  padding-left: 10px;
 }
</style>
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
              target="_blank"
              role="button"
              ><i class="fab fa-instagram"></i
            ></a>
            <a
              class="btn btn-primary btn-floating m-1"
              style="background-color: #0082ca;"
              href="https://www.linkedin.com/in/julia-lamb-337a92229/"
              target="_blank"
              role="button"
              ><i class="fab fa-linkedin-in"></i
            ></a>
            <a
              class="btn btn-primary btn-floating m-1"
              style="background-color: #333333;"
              href="https://github.com/lambjulia"
              target="_blank"
              role="button"
              ><i class="fab fa-github"></i
            ></a>
          </section>
      </nav>
<body style="background: linear-gradient(135deg, rgba(50, 79, 133, 0.9) 0%, rgba(8, 180, 147, 0.9) 100%);">
    <div class="container">
        

<div class="card" style="width: 25%">

<div class="form">
<div class="text-left">

<h5>1 – Qual alternativa se refere somente à funções de laços de repetição no PHP?<br><br>
 
    a) if, for, stop      <br>      
    b) if, for, while<br>
    c) for, while, foreach<br>
    d) for, foreach, if<br>
    </h5>
</div>

<div class="text-center" style="padding-top: 80px; padding-right: 10px">
    <button type="button" id="tarefa1"  class="btn btn-primary my-3">Resposta</button>
</div>



</div>

</form>
</div>


<div class="card" style="width: 25%">

<div class="form">
<div class="text-left" >

<h5>2 – Informe abaixo qual a URL <br>    oficial para documentação da função date() no PHP. Logo abaixo da URL, indique como utilizar a função para mostrar a data de hoje no formato “Dia / Mês / Ano” com o Ano não resumido (4 digitos).
</h5>
</div>

<div class="text-center" style="padding-top: 105px; padding-right: 10px">
    <button type="button" id="tarefa2" class="btn btn-primary my-3">Resposta</button>
</div>



</div>

</form>
</div>
<div class="card" style="width: 25%">

    <div class="form">
    <div class="text-left" >
    
    <h5>3 – Por qual motivo o código a baixo não está funcionando?
    </h5>
    </div>
    
    <div class="text-center" style="padding-top: 230px; padding-right: 10px">
        <button type="button" id="tarefa3" class="btn btn-primary my-3">Resposta</button>
    </div>
    
    
    
    </div>
    
  
    </div>

    <div class="card" style="width: 25%">

        <div class="form">
        <div class="text-left" >
        
        <h5 >4 – Responda as condicionais abaixo com “true” ou “false”. <br>
 
            ( ) 19 > 11<br>
            ( ) 22 <= 22<br>
            ( ) 22 > 98<br>
            ( ) 22 <= 22 && 19 > 11<br>
            ( ) 18 == 18 && 49  < 26<br>
            ( ) 25 != 10 OR 5 == 9<br>
            ( ) !(1 == 1 && 2 == 2)
            </h5>
        </div>
        <div class="text-center" style="padding-top: 60px; padding-right: 10px">
            <button type="button" id="tarefa4"    class="btn btn-primary my-3">Resposta</button>
        </div>
        
        
        
        </div>
        
        
        </div>

        <div class="card" style="width: 25%">

            <div class="form">
            <div class="text-left" >
            
            <h5 style="font-size: medium" >5 – Em PHP, aplique as validações (if) necessárias para que se garanta que as variáveis abaixo existam, tenham um valor e que estejam no tipo correto para ser utilizado:<br>a) Validar a variável: $variavel = 198;<br>

                b) Validar o array e o indice “endereco”:<br>
                 
                c) Validar a variável: $variavel = “Romarinho”;<br>
                 </h5>
            </div>
           <div class="form-row" style="padding-top: 50px">
            <div class="text-center" style="padding-left: 15px">
                <button type="button" id="tarefa5a" class="btn btn-primary my-3">Resposta a)</button>
            </div>
            <div class="text-center" style="padding-left: 40px">
                <button type="button" id="tarefa5b" class="btn btn-primary my-3">Resposta b)</button>
            </div>
            <div class="text-center" style="padding-left: 90px">
                <button type="button" id="tarefa5c" class="btn btn-primary my-3">Resposta c)</button>
            </div>
           </div>
            
            
            </div>
            
            </form>
            </div>

            <div class="card" style="width: 25%">

                <div class="form">
                <div class="text-left" >
                
                <h5 style="font-size: 12px">6 – Para o banco de dados abaixo, realize as taréfas solicitadas:<br>
                    a) Escreva um SELECT que retorne o nome_estado com valor ‘Paraná’.<br>
 
                    b) Escreva um SELECT que retorne todas as tuplas com o “nome_estado” e o “nome_pais”.<br>
                     
                    c) Altere a tabela “pais” para adicionar um novo campo de nome “sigla” com limite para 2 caracteres. Escreva abaixo o comando utilizado para realizar esta tarefa.<br>
                     
                    d) Crie uma nova tabela chamada “cidade” com as colunas “id”, “nome_cidade” e “id_estado” sendo a coluna “id” uma Primary Key com Auto Increment e “id_estado” uma Foreign Key da coluna “id” da tabela “estado”.<br>
                    </h5>
                </div>
                
                <div class="form-row" style="padding-top: 40px">
                    <div class="text-center" style="padding-left: 15px">
                        <button type="button" id="tarefa6a" class="btn btn-primary my-3">Resposta a)</button>
                    </div>
                    <div class="text-center" style="padding-left: 40px">
                        <button type="button" id="tarefa6b" class="btn btn-primary my-3">Resposta b)</button>
                    </div>
                    <div class="text-center" style="padding-left: 15px">
                        <button type="button" id="tarefa6c" class="btn btn-primary my-3">Resposta c)</button>
                    </div>
                    <div class="text-center" style="padding-left: 40px" >
                        <button type="button" id="tarefa6d" class="btn btn-primary my-3">Resposta d)</button>
                    </div>
                   </div>
                
                
                
                </div>
                
                </form>
                </div>

                <div class="card" style="width: 25%">

                    <div class="form">
                    <div class="text-left" >
                    
                    <h5 style="font-size: 12px">7 – Construir em código PHP o diagrama abaixo cumprindo as seguintes exigências:<br>
                        a) Utilizar autoload (Nativo ou Composer) para carregamento das classes.<br>
 
                        b) O código deve estar envolvido em um tratamento de exceções.<br>
 
                        c) Método preencherDados() deve preencher os atributos da classe Usuario e utilizar o método setNivel para preencher o atributo “nivel” da classe Permissao.<br>
 
                        d) Método cadastrar() deve ser executado apenas se nome, telefone e nivel estiverem preenchidos e quando executado deve cadastrar a data e hora de cadastro no atributo data_cadastro. Caso algum dos campos não estejam preenchidos, deve-se disparar uma exceção informando quais campos não estão preenchidos.<br>
 
                        e) O arquivo que irá executar tudo deverá mostrar na tela o nome, telefone, nivel e data_cadastro após todo o procedimento de preencherDados() e cadastro() ser realizado.<br>
 
                        Compactar todos os arquivos da programação e envie junto com o teste.<br>
                    </h5>
                    </div>
                    
                    <div class="text-center" style="padding-right: 8px">
                        <a type="button" href="{{ route('formulario') }}" class="btn btn-primary my-3">Resposta</a>
                    </div>
                    </div>
                    </form>
                    </div>

                    <div class="card" style="width: 25%">

                        <div class="form">
                        <div class="text-left" >
                        
                        <h5 style="font-size: 9.5px">8 – Para a estrutura de pastas abaixo, execute e informe os comandos necessários para realizar as seguintes tarefas supondo que esteja em um ambiente com Linux CentOS 7:<br>
 
                            ├── pasta_pai<br>
                            │   ├── arquivo2.txt<br>
                            │   ├── pasta1<br>
                            │   │   └── arquivo1.txt<br>
                            │   └── pasta2<br>
                            │       ├── arquivo3.txt<br>
                            │       └── pasta3<br>
                            │           └── arquivo4.txt<br>
                             
                            a) Estando no diretório “pasta_pai”, coloque permissão “rw-r--r--” no “arquivo3.txt”.<br>
                             
                            b) Estando no diretório “pasta_pai”, altere o “arquivo4.txt” para que o proprietário seja root e o grupo também seja root.<br>
                             
                            c) Estando no diretório “pasta_pai”, crie um arquivo chamado “arquivo5.txt” dentro do diretório “pasta1”.<br>
                             
                            d) Estando no diretório “pasta3”, crie um diretório chamado “pasta4” dentro do mesmo.<br>
                             
                            e) Estando no diretório “pasta_pai”, remova o diretório “pasta3”.<br>
                            </h5>
                        </div>
                        
                        <div class="form-row">
                            <div class="text-center" style="padding-left: 18px">
                                <button type="button" id="tarefa8a" class="btn btn-primary my-3">Resposta a)</button>
                            </div>
                            <div class="text-center" style="padding-left: 40px">
                                <button type="button" id="tarefa8b" class="btn btn-primary my-3">Resposta b)</button>
                            </div>
                            <div class="text-center" style="padding-left: 18px">
                                <button type="button" id="tarefa8c" class="btn btn-primary my-3">Resposta c)</button>
                            </div>
                            <div class="text-center" style="padding-left: 40px" >
                                <button type="button" id="tarefa8d" class="btn btn-primary my-3">Resposta d)</button>
                            </div>
                            <div class="text-center" style="padding-left: 90px" >
                                <button type="button" id="tarefa8e" class="btn btn-primary my-3">Resposta d)</button>
                            </div>
                           </div>
                        
                        
                        
                        </div>
                        
                        </form>
                        </div>

                        <div class="card" style="width: 25%">

                            <div class="form">
                            <div class="text-left" >
                            
                            <h5>9 – Supondo que esteja em um ambiente com Linux CentOS 7, crie um usuário chamado “pedro”, coloque a senha “123456” neste usuário, crie um grupo chamado “futebol” e adicione o usuário “pedro” no grupo “futebol”.</h5>
                            </div>
                            
                            <div class="text-center" style="padding-top: 130px; padding-right: 8px">
                                <button type="button" id="tarefa9" class="btn btn-primary my-3">Resposta</button>
                            </div>
                            
                            
                            
                            </div>
                            
                            </form>
                            </div>

                            <div class="card" style="width: 25%">

                                <div class="form">
                                <div class="text-left" >
                                
                                <h5>10 – Supondo que esteja em um ambiente com Linux CentOS 7 e um processo de PID 9985, como eu poderia “matar” este processo?
                                </h5>
                                </div>
                                
                                <div class="text-center" style="padding-top: 150px; padding-right: 15px">
                                    <button type="button" id="tarefa10" class="btn btn-primary my-3">Resposta</button>
                                </div>
                                </div>
                                </form>
                            </div>
        </div>
    </div>
</body>

<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"
></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
<script>
$(function() {
    $('#tarefa1').click(function(e) {
        e.preventDefault();
        
        Swal.fire({
            width: 600,
            padding: '3em',
            title: 'c) for, while, foreach',
            showCloseButton: true,
            showCancelButton: false,
        }).then((result) => {
            console.log(result);
        });
    });
});
$(function() {
    $('#tarefa2').click(function(e) {
        e.preventDefault();
        Swal.fire({
            imageUrl: 'assets/img/date.png',
            imageWidth: 700,
            imageHeight: 150,
            imageAlt: 'Custom image',
        }).then((result) => {
            console.log(result);
        });
    });
});

$(function() {
    $('#tarefa3').click(function(e) {
        e.preventDefault();
        
        Swal.fire({
            width: 600,
            padding: '3em',
            title: 'A formula está errada pois se $i for maior que 4 não haverá o laço de repetição. <br>A formula correta é: <br> for ($i = 0; $i < 4; $i++)<br>{echo $i;}',
           
            showCloseButton: true,
            showCancelButton: false,
        }).then((result) => {
            console.log(result);
        });
    });
});
$(function() {
    $('#tarefa4').click(function(e) {
        e.preventDefault();
        
        Swal.fire({
            imageUrl: 'assets/img/tarefa4.png',
            imageWidth: 200,
            imageHeight: 200,
            imageAlt: 'Custom image',
            showCloseButton: true,
            showCancelButton: false,
        }).then((result) => {
            console.log(result);
        });
    });
});
$(function() {
    $('#tarefa5a').click(function(e) {
        e.preventDefault();
        
        Swal.fire({
            imageUrl: 'assets/img/tarefa5a.png',
            imageWidth: 300,
            imageHeight: 300,
            imageAlt: 'Custom image',
            showCloseButton: true,
            showCancelButton: false,
        }).then((result) => {
            console.log(result);
        });
    });
});
$(function() {
    $('#tarefa5b').click(function(e) {
        e.preventDefault();
        
        Swal.fire({
            imageUrl: 'assets/img/tarefa5b.png',
            imageWidth: 450,
            imageHeight: 150,
            imageAlt: 'Custom image',
            showCloseButton: true,
            showCancelButton: false,
        }).then((result) => {
            console.log(result);
        });
    });
});
$(function() {
    $('#tarefa5c').click(function(e) {
        e.preventDefault();
        
        Swal.fire({
            imageUrl: 'assets/img/tarefa5c.png',
            imageWidth: 300,
            imageHeight: 300,
            imageAlt: 'Custom image',
            showCloseButton: true,
            showCancelButton: false,
        }).then((result) => {
            console.log(result);
        });
    });
});
$(function() {
    $('#tarefa6a').click(function(e) {
        e.preventDefault();
        Swal.fire({
            width: 600,
            padding: '3em',
            title: 'SELECT * FROM `estados` WHERE id = 3 <br><br> SELECT * FROM `estados` WHERE nome_estado = "Paraná"',
            showCloseButton: true,
            showCancelButton: false,
        }).then((result) => {
            console.log(result);
        });
    });
});
$(function() {
    $('#tarefa6b').click(function(e) {
        e.preventDefault();
        Swal.fire({
            width: 600,
            padding: '3em',
            title: ' SELECT nome_estado, nome_pais FROM estados INNER JOIN paises ON estados.id_pais = paises.id;',
            showCloseButton: true,
            showCancelButton: false,
        }).then((result) => {
            console.log(result);
        });
    });
});
$(function() {
    $('#tarefa6c').click(function(e) {
        e.preventDefault();
        Swal.fire({
            width: 600,
            padding: '3em',
            title: 'alter table paises add sigla char(2)',
            showCloseButton: true,
            showCancelButton: false,
        }).then((result) => {
            console.log(result);
        });
    });
});
$(function() {
    $('#tarefa6d').click(function(e) {
        e.preventDefault();
        Swal.fire({
            width: 600,
            padding: '3em',
            title: 'CREATE TABLE cidades (id INT PRIMARY KEY,nome_cidade VARCHAR(100) NOT NULL,id_estado INT,FOREIGN KEY (id_estado) REFERENCES estados(id));',
            showCloseButton: true,
            showCancelButton: false,
        }).then((result) => {
            console.log(result);
        });
    });
});
$(function() {
    $('#tarefa8a').click(function(e) {
        e.preventDefault();
        Swal.fire({
            width: 600,
            padding: '3em',
            title: 'chmod 644 pasta2/arquivo3.txt',
            showCloseButton: true,
            showCancelButton: false,
        }).then((result) => {
            console.log(result);
        });
    });
});
$(function() {
    $('#tarefa8b').click(function(e) {
        e.preventDefault();
        Swal.fire({
            width: 600,
            padding: '3em',
            title: 'chown root: root pasta2/pasta3/arquivo4.txt',
            showCloseButton: true,
            showCancelButton: false,
        }).then((result) => {
            console.log(result);
        });
    });
});
$(function() {
    $('#tarefa8c').click(function(e) {
        e.preventDefault();
        Swal.fire({
            width: 600,
            padding: '3em',
            title: 'touch pasta1/arquivo5.txt',
            showCloseButton: true,
            showCancelButton: false,
        }).then((result) => {
            console.log(result);
        });
    });
});
$(function() {
    $('#tarefa8d').click(function(e) {
        e.preventDefault();
        Swal.fire({
            width: 600,
            padding: '3em',
            title: 'mkdir pasta4',
            showCloseButton: true,
            showCancelButton: false,
        }).then((result) => {
            console.log(result);
        });
    });
});
$(function() {
    $('#tarefa8e').click(function(e) {
        e.preventDefault();
        Swal.fire({
            width: 600,
            padding: '3em',
            title: 'rm -rf pasta2/pasta3',
            showCloseButton: true,
            showCancelButton: false,
        }).then((result) => {
            console.log(result);
        });
    });
});
$(function() {
    $('#tarefa9').click(function(e) {
        e.preventDefault();
        Swal.fire({
            width: 600,
            padding: '3em',
            title: 'sudo useradd Pedro<br> sudo passwd Pedro<br> sudo groupadd Futebol<br> sudo adduser Pedro Futebol',
            showCloseButton: true,
            showCancelButton: false,
        }).then((result) => {
            console.log(result);
        });
    });
});
$(function() {
    $('#tarefa10').click(function(e) {
        e.preventDefault();
        Swal.fire({
            width: 600,
            padding: '3em',
            title: 'kill 9985',
            showCloseButton: true,
            showCancelButton: false,
        }).then((result) => {
            console.log(result);
        });
    });
});

</script>
