<?php
function autoload($class)
{
  if (file_exists($path = $class . '.class.php') || file_exists($path = $class . '.interface.php'))
  {
    require $path;
  }
}

spl_autoload_register('autoload');

$writer = new FileWriter(new HTMLFormater, 'file.html');
$writer->write('Hello world !');
?>