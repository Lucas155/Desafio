<?php


session_start();

// destroi somente o elemento logado do array da sessão.
unset($_SESSION['logado']);

//session_destroy();

