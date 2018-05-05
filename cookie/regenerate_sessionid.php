<?php

  session_start();
  //if the attacker steel session id, it may be used until user reload the page
  session_regenerate_id(true);
  
  echo 'Current session ID: ' . session_id();