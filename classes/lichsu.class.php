<?php
require 'DB.class.php';
class lichsu extends DB
{
  function allquery()
  {
    $con = $this->connect();
    $sql = 'select * from history';
    $query = mysqli_query($con, $sql);
    $result = array();
    if ($query) {
      while ($row = mysqli_fetch_assoc($query)) {
        $result[] = $row;
      }
    }
    return $result;
  }
}
