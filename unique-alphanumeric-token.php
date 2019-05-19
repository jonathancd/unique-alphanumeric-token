<?php 

	function getToken()
    {   
        $length = 40;

        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet.= "0123456789";

        $max = strlen($codeAlphabet);

        for ($i=0; $i < $length; $i++) {
            $token .= $codeAlphabet[random_int(0, $max-1)];
        }

        return $token;
    }

    echo getToken();


# From https://stackoverflow.com/questions/1846202/php-how-to-generate-a-random-unique-alphanumeric-string
?>