<?
function get_data()
{
  error_reporting(E_ALL);
  ini_set('display_errors',1);
  $path=__DIR__.'\phonebook.json';
  if (file_exists($path)) {
  $str=  file_get_contents($path);
  $users=json_decode($str,true);
  if (!$users) {
    $users=array();
  }
}
return $users;
}
?>
