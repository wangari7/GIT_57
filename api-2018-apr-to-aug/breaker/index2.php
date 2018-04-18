<?php
//valid strings
$welcome_message = "Eric showed Joey a string";
//declare the above statement in 2 ways
$welcome_message1 = "June showed Doug a loop";
$welcome_message2 = <<<EOT
Jane showed Paul an array
EOT;
//Display every word of the string above on a new line
//Split the string
$welcome_message_array = explode(' ', $welcome_message);

foreach ($welcome_message_array as $word)
{
  echo "{$word}<br/>";
}
?>
