<?php

  session_start();

  $db_name = 'moviestar';
  $db_host = 'us-cdbr-east-06.cleardb.net';
  $db_user = 'b08a0e92e8dc16';
  $db_pass = 'f12b2af2';

  $conn = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

  mysql://b08a0e92e8dc16:f12b2af2@us-cdbr-east-06.cleardb.net/heroku_b3d79f1e3ee5823?reconnect=true