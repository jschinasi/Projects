<?php 
/*******************************************************************
** Filename: Logout.php
** V2.1 12/05/20 AT Original
*******************************************************************/
  session_start();
  unset($_SESSION["login_status"]);
  header("Location:Sign_In.php");

// END OF FILE