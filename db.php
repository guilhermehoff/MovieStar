<?php

  session_start();

  $db_name = 'soingr27_moviestar';
  $db_host = '162.241.63.35';
  $db_user = 'soingr27_moviestar';
  $db_pass = 'flm33205';

  $conn = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

 //mysql://b08a0e92e8dc16:f12b2af2@us-cdbr-east-06.cleardb.net/heroku_b3d79f1e3ee5823?reconnect=true