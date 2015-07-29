<?php

//LIMITAR QUANTIDADE DE CARACTERES
function changeSizeText($str, $n = 500, $end_char = '&#8230;'){
    if (strlen($str) < $n){
        return $str;
    }

    $str = preg_replace("/\s+/", ' ', str_replace(array("\r\n", "\r", "\n"), ' ', $str));

    if (strlen($str) <= $n){
        return $str;
    }

    $out = "";
    foreach (explode(' ', trim($str)) as $val){
        $out .= $val.' ';

        if (strlen($out) >= $n){
            $out = trim($out);
                return (strlen($out) == strlen($str)) ? $out : $out.$end_char;
        }
    }
}

/* Exemplo de uso
<?php $resumoNoticias = get_the_excerpt();
echo changeSizeText( $resumoNoticias, 70 );
?>
*/

?>
