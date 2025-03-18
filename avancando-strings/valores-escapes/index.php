<?php

// diz ao navegador que o conteúdo da página deve ser interpretado como texto simples (plain text), e não como HTML — que é o padrão em páginas PHP.
header("Content-type: text/plain"); 

// \n - Nova linha
echo "Isso aqui vai ficar na primeira linha \nE isso na segunda linha\n";

// \t - Tabulação horizontal (espaço como o de um Tab)
echo "Produto:\tPreço:\n";
echo "Café\t\tR$ 5,00\n";
echo "Pão\t\tR$ 3,00\n";

// \\ - Barra invertida literal (exibe a barra ao invés de ser interpretada como escape)
echo "Caminho do arquivo: C:\\xampp\\htdocs\\projeto\n";

// \" - Aspas duplas dentro de uma string com aspas duplas
echo "Ele disse: \"PHP é incrível!\"\n";

// \' - Aspas simples dentro de uma string com aspas simples
echo 'Ela falou: \'Aprender PHP é divertido!\'\n';

// \$ - Exibe o símbolo do cifrão sem interpretar como variável
echo "O preço é de \$10,00\n";

// \r - Retorno de carro (usado em sistemas antigos ou para sobrescrever linha)
echo "Essa linha será sobrescrita...\rNova linha!\n";

// \f - Avanço de formulário (menos comum)
echo "Isso aqui\fsepara como página em impressoras antigas\n";

// \v - Tabulação vertical (pula linha com um espaçamento diferente)
echo "Linha 1\vLinha 2\n";

// Heredoc com escape dentro
echo <<<EXEMPLO
Aqui usamos um bloco de texto grande com heredoc.
Podemos até incluir "aspas duplas" e 'aspas simples' sem problema.
E ainda colocar uma barra invertida: \\
EXEMPLO;

?>
