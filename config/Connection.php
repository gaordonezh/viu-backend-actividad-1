<?php
class Connection
{
  public $con;

  public function connect()
  {
    $this->con = mysqli_connect("localhost", "root", "", "library_db");
  }
}
