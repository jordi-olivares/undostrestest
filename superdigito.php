<?php
//llama a la función que calcula el súper dígito
super_digit(148,3);


//función que cálcula el súper dígito de un numero $numero
//que se repite $repeticion veces
function super_digit($numero,$repeticiones){
    $sn=strval($numero);     //axiliar que transforma el número en string
    $sr=strval($repeticiones); 
    $a=array();   //arreglo auxiliar donde se guardarán el número repetido

    //fragmento de código que genera un arreglo $a con el número repetido
    //$repeticion veces
    for ($i=0; $i < $repeticiones; $i++) { 
        array_push($a,$sn);
    }
    $s=implode($a);  //función que transforma el arreglo en un string
    $aux=0;          //auxiliar donde se guardara el resultado de la suma
    for ($i=0; $i < strlen($s); $i++) { 
        $aux=$aux+$s[$i];
    }
    
    //verificación de que el resultado es de un dígito o no
    //si es así imprimelo y sino vuelve a llamar a la función
    if (strlen(strval($aux))>1) {
        super_digit($aux,1);
    }
    else {
        echo 'el super digíto es: '.$aux;
    }

}
?>