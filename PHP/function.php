<?php 
    function conversorInt($romano) {
        $romano = strtoupper($romano);
        $n = 0;
        $numeros = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];

        $letras = strlen($romano);

    
        for($i = 0; $i < $letras; $i ++) {
            $letraAtual = $romano[$i];
            $proxLetra = $romano[$i+1] ?? false;

            if($proxLetra && $numeros[$proxLetra] > $numeros[$letraAtual]) {
                $n -= $numeros[$letraAtual];
            } else {
                $n += $numeros[$letraAtual];
            }
        }
        return $n;
    }
?>