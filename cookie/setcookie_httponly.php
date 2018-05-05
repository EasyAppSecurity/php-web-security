<?php
//document.cookie sees only the second cookie
  setcookie('Cookie1', rand(100, 999), 0, '/', '', false, true);
  
  setcookie('Cookie2', rand(100, 999), 0, '/', '', false, false);