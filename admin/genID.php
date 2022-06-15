<?php

function generate_id($length)
{
  $random = '';
  for ($i = 0; $i < $length; $i++) {
    $random .= rand(0, 9);
  }
  return $random;
}
