<?php
  //q=<body onload=alert(1)> (without ending tag)
  $data = [
    'term' => $_GET['q']
  ];
  
  //to prevent
  header('Content-type: application/json');
  
  //to prevent
  echo json_encode($data, JSON_HEX_TAG | JSON_HEX_QUOT | JSON_HEX_APOS | JSON_HEX_AMP);
  