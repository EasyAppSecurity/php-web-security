<?php
  //doe€snöt@€x!st
  var_dump(filter_var(
      ' doe€snöt@€x!st',
      FILTER_SANITIZE_EMAIL));
  //-123.456E789Y
  var_dump(filter_var(
      'X-123.456E789Y',
      FILTER_SANITIZE_NUMBER_FLOAT,
      FILTER_FLAG_ALLOW_SCIENTIFIC | FILTER_FLAG_ALLOW_FRACTION));
  //true 'x'
  var_dump(filter_has_var(
      INPUT_GET,
      'id'));
  //false 'x'
  var_dump(filter_input(
      INPUT_GET,
      'id',
      FILTER_VALIDATE_INT));
