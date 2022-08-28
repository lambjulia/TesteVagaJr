<h1> Projeto TesteVagaJr </h1>
<h4> Esse projeto foi desenvolvido para o teste de uma vaga Jr na empresa NitroNews.</h4>

<h3>Sobre o projeto:</h3>

<p>Fiz uma tela inicial com todas as questões do teste e um botão de resposta, ao clicar no botão abre um PopUp feito com o SweetAlert contendo as respostas das questões.</p>
<p>Para a questão 7, fiz um CRUD, com cadastro de usuários, contendo nome e telefone, o sistema grava a data e o horario do cadastro e aplica o nível de permissões desse usuário, o sistema não permite que grave o usuário sem todos os campos estarem preenchidos. Após o cadastro ser realizado, o usuário é encaminhado para a tela da tabela de usuários ja cadastrados, onde pode editar o cadastro, excluir e gerar um PDF relatório de todos os usuários cadastrados.</p>
<p>O sistema contém uma navbar contendo o logo que criei para o sistema baseado no logo da NitroNews, que ao clicar no logo te leva para a home. Também na navbar temos o menu da questão 7, tendo o link de cadastro de usuários e o da tabela. No final da NavBar coloquei link para meu Instagram, LinkedIn e GitHub.</p>

<h3>Como instalar o projeto:</h3>
<p>A .env já esta no projeto.</p>
<p>Você pode baixar o projeto ou usar o comando:</p>
<p>git clone https://github.com/lambjulia/TesteVagaJr</p>
<p>Crie um banco com o nome 'TesteVagaJr'</p>
<p>No terminal do projeto rode os seguintes comandos:</p>
<p>composer install</p>
<p>php artisan migrate --seed</p>
<p>php artisan serve</p>
<p>E abra o servidor no navegador com http://127.0.0.1:8000/</p>

