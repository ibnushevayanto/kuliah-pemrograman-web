<?php
function openDb()
{

  $con=mysqli_connect("localhost", "root", "", "db_kuliah_ibnushevayanto");
  return $con;
}

function myQuery($con, $sql, $debug=0)
{
  $rs=mysqli_query($con, $sql);
  if ($debug)
  {
    if (mysqli_errno($con)>0)
      echo mysqli_error($con);
  }
  return $rs;
}

function myFetch($rs, $type="number")
{
  if ($type=="name")
    $rc=mysqli_fetch_assoc($rs);
  if ($type=="number")
    $rc=mysqli_fetch_row($rs);
  return $rc;
}
