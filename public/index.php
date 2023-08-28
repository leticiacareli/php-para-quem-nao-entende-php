<?php

// aula 2 - include/require

/**
 * include: é usado para incluir um arquivo no script. Se o arquivo não for encontrado, o PHP emitirá um aviso,
 * mas o arquivo continuará sendo executado.
*/
include './data.php';

/**
 * include_once: é semelhante ao 'include', mas garante que o arquivo seja incluído apenas uma vez durante a 
 * execução do arquivo. É útil para evitar a inclusão duplicada de um arquivo.
*/
include_once './data.php';

/**
 * require: também é utilizado para incluir arquivos no script, ma se o arquivo não for encontrado, o PHP
 * emitirá um erro fatal e o script será interrompido. Útil para inclusão de script de conexão com banco de dados.
*/
require './data.php';

/**
 * require_once: é semelhante ao 'require', mas também garante que o arquivo seja incluído apenas uma vez durante a 
 * execução do script, se o arquivo não for encontrado, assim como o 'require', um erro fatal será emitido e a execução
 * será interrompida.
*/
require_once './data.php';

echo $firstName;

//aula 3 - variáveis, tipos e referências

/**
 * VARIÁVEL: é um nome simbólico que representa um valor armazenado na memória de um programa de computador.
 * Ela é usada para armazenar e manipular dados durante a execução de um script. As variáveis tem um papel fundamental na programação,
 * pois permitem que armazene informações, realize códigos, tome decisões e crie lógicas complexas.
 * 
 * No exemplo abaixo, '$age' e '$name' são variáveis, o símbolo '$' é usado para indicar que algo é uma variável, seguido pelo nome da variável, as variáveis podem armazenar diferentes tipos de dados, como números inteiros, números de ponto flutuante, textos, lógicos
 * e até mesmo estruturas mais complexas, como arrays e objetos.
*/

$age = 25;
$name = 'Letícia';

/**
 * TIPOS DE DADOS: o PHP suporta vários tipos de dados, que são utilizados para armazenar diferentes tipos de informações:
*/

/**
 * integer: representa números inteiros, positivos e negativos, sem casas decimais.
*/

$age = 25;

/**
 * float ou double: representa números com casas decimais.
*/

$height = 1.75;

/**
 * string: representa sequencia de caracteres, como texto.
*/

$fullName = "Maria dos Santos";

/**
 * booleanos: representa valores de verdadeiro (true) ou falso (false).
*/

$havePermission = false;

/**
 * array: é uma coleção de valores, onde cada valor é acesso por meio de um índice. Os arrays podem conter valores de diferentes tipos.
*/

$colors = [25, "blue", "green", 1, 1.75];

/**
 * object: representa instancias de classes definidas pelo usuário. Os objetos contêm propriedades e métodos que permitem modelar entidades do mundo real.
*/

class Person
{
    public $name;
    public $age;
}

$person = new Person();
$person->name = "João";
$person->age = 30;

/**
 * null: representa a ausência de valor ou não inicialização de uma variável.
*/

/**
 * REFERÊNCIA: passar um valor por referência no PHP significa permitir que uma função modifique diretamente o valor de uma variável
 * definida fora do escopo da função. Em PHP, por padrão, os argumentos de uma função são passados por valor,
 * o que siginifica que a função trabalha com cópias dos valores originais. No entanto, é possível passar um argumento por referência,
 * usa-se o símbolo '&' antes do parâmetro da função e na chamada da função.
 * 
 * No exemplo abaixo, a função 'bendyByReference' recebe um parâmetro por referência '&$number'. Isso significa que qualquer alteração
 * feita ao parâmetro dentro da função afetará diretamente a variável original '$value' definida fora da função.
 * Quando a função é chamada com '$value' como argumento, o valor é dobrado dentro da função e a alteração e refletida quando o 
 * valor de '$value' é impresso após a chamada da função.
*/

function bendyByReference(&$number)
{
    $number *= 2;
}

$value = 7;
bendyByReference($value);

echo $value; //output: 10

//aula 4 - constantes

/**
 * Em PHP, as constantes são valores que permanecem inalterados durante a execução do script.
 * Ela são usadas para armazenar valores que não devem ser modificados ao longo do código,
 * como configurações, vaores fixos e outras informações constantes. 
 * Diferente das variáveis, as contantes não podem ser reatribuídas após serem definidas 
 * e não possuem o símbolo '$' antes do nome.
 * 
 * No exemplo abaixo, 'CONSTANT_NAME' é o nome da constante e 'constant_value' é o valor atribuído a ela.
 * As constantes são definidas usando a função 'define()', que recebe dois argumentos: o nome (em letras maíusculas, por convenção)
 * e o valor que a constante deve armazenar. Após a definição, a constante pode ser utilizada em qualquer parte do código,
 * e o valor dela permanecerá constante ao longo da execução do script.
*/

define('CONSTANT_NAME', "constant_value");
echo CONSTANT_NAME;

/**
 * Algumas características importantes das constantes em PHP:
 * 
 * Não há necessidade de usar o símbolo '$': Diferentemente das variáveis, as constantes não usam o símbolo '$' antes do nome;
 * 
 * Não é possível redefinir uma constante: Depois que uma constante é definida, ela não pode ser alterada o valor dela durante a 
 * execução do script;
 * 
 * Escopo global: As constantes são globais, o que significa que podem ser acessadas de qualquer lugar do código;
 * 
 * Convensão de nomenclatura: Por conversão, os nomes das constantes são geralmente escritos em letras maiúsculas
 * e separadas por underline (_), exemplo: 'CONSTANT_NAME';
 * 
 * Não é necessário o uso de aspas para valores numéricos: Se o valor da constante for um número, não precisa usar aspas para defini-lo;
*/

/**
 * CONSTANTES MÁGICAS: são um conjunto de constantes pré-definidas que fornecem informações contextuais sobre o script em execução.
 * Essas constantes são automáticas e não precisam ser declaradas, pois são fornecidas pelo próprio PHP.
 * Elas começam e terminam com dois underlines, como '__CONSTANT__'.
 * 
 * As constantes mágicas são usadas para obter informações sobre o ambiente de execução do script, o arquivo atual,
 * o local de chamada e outras informações úteis durante o desenvolvimento e depuração de scripts PHP
 * 
 * Algumas das constantes mágicas mais comuns:
 * 
 * '__LINE__': Retorna o número da linha atual no script;
 * '__FILE__': Retorna o caminho completo e o nome do arquivo;
 * '__DIR__': Retorna o diretório do arquivo atual;
 * '__FUNCTION__': Retorna o nome da função atual;
 * '__CLASS__': Retorna o nome da classe atual (funciona somente dentro do contexto de uma classe);
 * '__METHOD__': Retorna o nome do método atual (funciona somente dentro do contexto de uma classe);
 * '__NAMESPACE__': Retorna o namespace atual;
 * '__TRAIT___': Retorna o nome do trait atual (funciona somente dentro do contexto de um trait).
 * 
 * Essas constantes mágicas podem ser usadas para fornecer informações úteis em memsagens de erros, logs 
 * ou para ajudar na depuração. Segue um exemplo de como podemos usar algumas dessas constantes mágicas: 
*/

echo "Estamos na linha " . __LINE__ . " do arquivo " . __FILE__;

/**
 * Verificando se uma constante foi definida.
*/

define('NAME', 'Letícia');

if(defined('NAME'))
{
    echo 'foi definido';
}
else
{
    echo 'não foi definido';
}

/**
 * Lista de todas as constantes fornecidas pelo PHP
*/

$const = get_defined_constants(true);

// var_dump($const);