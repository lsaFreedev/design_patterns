<?php
require './DBFactory.php';

try
{
  $mysql = DBFactory::getMysqlConnexion();
  $pgsql = DBFactory::getPgsqlConnexion();
}
catch (RuntimeException $e)
{
  echo $e->getMessage();
}

