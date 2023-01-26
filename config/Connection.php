<?php
class Connection
{
  public $con;

  public function connect()
  {
    $this->con = mysqli_connect("containers-us-west-70.railway.app:7344", "root", "yvt6IXXJl3weio8bvUtO", "railway");
  }
}
