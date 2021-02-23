<?php
//llamando a la función
imprimeNSubstring('dbac',3);
    
    //función que imprime el n número resultante de ordenar
    //todas las posibles cadenas de $texto en orden alfabético
    function imprimeNSubstring(String $texto,int $n){
        $tamano=strlen($texto); //obteniendo el tamaño del texto
        $a=array();             //array auxiliar
        $aux=0;                 //variable auxiliar

        //fragmento de código que separa todas las posibles cadenas
        //de nuestro texto de entrada
        for($j=0;$j<$tamano+1;$j++){
            for($i=0;$i<$tamano-$j;$i++){
                $aux=substr($texto,$j,$i+1);
                array_push($a,$aux);
            }
        }
        sort($a);  //función que ordena el array a de manera alfabética
        $s=implode($a);   //función que junta nuestro arreglo en un solo string
        echo 'El carácter es: '.$s[$n-1];    //imprime el resultado en la posición deseada
    }
?>