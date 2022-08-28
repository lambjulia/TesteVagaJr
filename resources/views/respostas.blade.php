1. c)for, while, foreach

2. 
Route::get('/date', 'App\Http\Controllers\DateController@date');

public function date() {

echo "Hoje é dia: " . date("d/m/Y");
}

3. A formula está errada pois se $i for maior que 4 não haverá o laço de repetição. A formula correta é:
for ($i = 0; $i < 4; $i++){
    echo $i;
}

4. T, T, F, T, F, F, F

5.
a)<?php
$variavel = 198;
if(isset($variavel)){
	echo "A variável existe."; 
};

if (is_int($variavel))
{
echo "A $variavel é inteira" ;

if ($variavel === 198) {
    echo 'Variável é 198';
}
?>
b)<?php
$procurar_array = array('endereco');
if (array_key_exists('endereco', $procurar_array)) {
    echo "O elemento 'endereco' esta no array";
}
?>
c)<?php
$variavel = “Romarinho”;
if(isset($variavel)){
	echo "A variável existe."; 
};

if (is_int($variavel))
{
echo "A $variavel é inteira" ;

if ($variavel === “Romarinho”) {
    echo 'Variável é 198';
}
?>

6. 
a)SELECT * FROM `estados` WHERE id = 3
SELECT * FROM `estados` WHERE nome_estado = 'Paraná'

b) SELECT nome_estado, nome_pais FROM estados INNER JOIN paises ON estados.id_pais = paises.id;

c) alter table paises add sigla char(2)

d)CREATE TABLE cidades (
id INT PRIMARY KEY,
nome_cidade VARCHAR(100) NOT NULL,
id_estado INT,
FOREIGN KEY (id_estado) REFERENCES estados(id)
);

7.Feito

8.
a)chmod 644 pasta2/arquivo3.txt
b)chown root: root pasta2/pasta3/arquivo4.txt
c)touch pasta1/arquivo5.txt
d)mkdir pasta4
e)rm -rf pasta2/pasta3

9.
sudo useradd Pedro
sudo passwd Pedro
sudo groupadd Futebol
sudo adduser Pedro Futebol

10. kill 9985