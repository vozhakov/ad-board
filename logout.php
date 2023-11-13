<?php 
// Выход
if (!empty($_SESSION['auth']) and $_SESSION['auth']) {
            session_start();
            session_destroy(); 
            setcookie( 'email', '', time() ); 
            setcookie( 'random_str', '', time() );
         }
