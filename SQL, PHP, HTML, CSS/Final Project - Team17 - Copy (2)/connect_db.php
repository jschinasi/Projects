<?php
/*******************************************************************
** Filename: connect_db.php
**
** V1.0 10/28/20 AT Original 
*******************************************************************/
  $dbc=mysqli_connect('localhost','mike','easysteps','site_db')
  OR die
    (mysqli_connect_error());;

// END OF FILE