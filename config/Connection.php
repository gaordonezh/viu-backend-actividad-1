<?php
class Connection
{
  public $con;

  public function connect()
  {
    $HOST = "containers-us-west-70.railway.app:7344";
    $USER = "root";
    $PASSWORD = "yvt6IXXJl3weio8bvUtO";
    $DATABASE = "railway";

    /* $HOST = "localhost";
    $USER = "root";
    $PASSWORD = "";
    $DATABASE = "library_db"; */

    $this->con = mysqli_connect($HOST, $USER, $PASSWORD, $DATABASE);
  }
}
