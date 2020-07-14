PHP:
<?php
$Variables = array(
'SERVER_ADDR',
'SERVER_PROTOCOL',
'REQUEST_METHOD',
'REQUEST_TIME', //Pas forcément très utile lel
'HTTP_ACCEPT',
'HTTP_ACCEPT_CHARSET',
'HTTP_ACCEPT_ENCODING',
'HTTP_ACCEPT_LANGUAGE',
'HTTP_CONNECTION',
'HTTP_HOST',
'HTTP_REFERER',
'HTTP_USER_AGENT',
'HTTPS',
'REMOTE_ADDR',
'REMOTE_HOST',
'REMOTE_PORT',
) ;

echo '<table cellpadding="10">' ;
foreach ($Variables as $arguments) {
    if (isset($_SERVER[$arguments])) {
        echo '<tr><td>'.$arguments.'</td><td>' . $_SERVER[$arguments] . '</td></tr>' ;
    }
    else {
        echo '<tr><td>'.$arguments.'</td><td>-</td></tr>' ;
    }
}
echo '</table>' ;
Par exemple, le HTTP_REFERER, permet de savoir en gros sur quel page le visiteur à cliquer pour arriver à la votre... Si vous arrivez à sélectionner certaines valeurs qui ne changent jamais, vous pouvez repérer vos visiteurs, même si ils changent d'IP.