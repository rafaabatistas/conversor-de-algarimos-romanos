# Conversor de Algarismos Romanos em Números Inteiros

Esse é um teste de lógica de programação que tem como objetivo testar o conhecimento sobre alguma linguagem de programação, neste caso foi utilizado o PHP, e também ver o caminho lógico criado pelo programador. Na qual, a proposta é criar um conversor de números romanos para números inteiros, assim transformando qualquer número romano. Ainda foi implementado mais duas restrições, uma pra reconhecer números inteiros, já que a conversão não acontece inversamente, e também uma restrição para barrar letras nas quais não são algarismo romanos.

### Preview Desktop

<img src="https://github.com/rafaabatistas/conversor-de-algarimos-romanos/blob/master/IMG/preview-desktop.gif" align="center">

### Aponte Sua Câmera ao Código QR

<img src="https://github.com/rafaabatistas/conversor-de-algarimos-romanos/blob/master/IMG/qrcode.png" align="center" width="180px">

### Ou acesse o projeto [clicando aqui](https://projeto-conversor.herokuapp.com/PAGES/index.php).

## - Principais Hard Skills Trabalhadas

- [x] HTML
- [x] CSS
- [x] PHP

## - Lógica Utilizada/Principal Obstáculo

Primeiramente, precisamos entender como os números romanos funcionam, e ainda quais os valores de cada letra, sendo eles:

``` 
    I = 1 / V = 5 / X = 10 / L = 50 / C = 100 / D = 500 / M = 1000
```

Podemos sudvidir em dois casos, sendo eles de subtração e soma. O caso de subtração irá ocorrer quando se têm duas letras na qual a primeira terá um valor menor que a segunda, logo se subtrai o primeiro valor pelo segundo, ex:

```
    IV (5 - 1) = 4 
```

O caso de soma ocorre quando se tem a mesma letra na sequência e/ou a primeira letra se tem um valor maior que a segunda, ex:

```
    XX (10 + 10) = 20
    LX (50 + 10) = 60
```

Tendo tudo isso em mente, no código foi declarado uma matriz que irá guardar todos os valores com suas respectivas letras da numeração romana, e que a partir disso, com uma estrutura de repetição o código primeiro saberá se existe mais de uma letra para algum dos casos ocorrer, se não tiver ele apenas retorna o valor da letra em específico. Se tiver uma letra seguinte ou uma sequência de letras, consequentemente ele irá reconhecer se aquele valor é maior ou menor para fazer os cálculos, assim retornando o resultado.

Verifique o código em PHP [clicando aqui](https://github.com/rafaabatistas/conversor-de-algarimos-romanos/blob/master/PHP/function.php).

## - Funções de PHP Utilizadas

A função `strtoupper()` faz a conversão de texto minúsculo para maiúsculo, ou seja, transforma para caixa alta. Já a função `strlen()` dá como resultado a quantidade de letras/caracteres tem uma palavra.


## - Créditos

<span>Foto por <a href="https://unsplash.com/@didiofederico_photographer?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Federico Di Dio photography</a> em <a href="https://unsplash.com/s/photos/romans?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span>
