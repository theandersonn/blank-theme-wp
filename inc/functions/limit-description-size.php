<?php

/*--------------------------------------------------------------
LIMIT NUMBER OF CHARACTERS
--------------------------------------------------------------*/
function limit_description_size($str, $n = 500, $end_char = '&#8230;'){
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

/* How to use
<?php $resume = get_the_excerpt();
    echo limit_description_size( $resume, 70 );
?>
*/
