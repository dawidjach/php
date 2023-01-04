<?php
/* get_header(
*	string $title,
*	string/array $css=NULL,
*	bool $bootstrap=false,
*	string $header=NULL,
*	array $nav=NULL,
*	bool $fluid=false
* )
*/

if( isset($_SESSION['user']) ) {
    $nav = array(
        'Logout' => '34-logout.php'
    );
} else {
    $nav = array(
        'Registrieren' => '32-register.php',
        'Login' => '33-login.php'
    );
}
$args = array(
    $page_title,
    NULL,
    true,
    $page_header,
    array(
        'Mein Blog',
        $nav
    )
);
get_header( ...$args );
