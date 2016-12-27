<?
include(__DIR__.'\functions.php');

 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title></title>
</head>
<body>
  <h2>Телефонный справочник</h2>
  <table border="1">
    <tr>
     <th>Имя</th>
     <th>Фамилия</th>
     <th>Адрес</th>
     <th>Контактная информация</th>
    </tr>
      <? foreach ( get_data() as $user => $user_data): ?>
      <tr>
        <? foreach ($user_data as $key => $value): ?>

          <? if (is_array($value)): ?>
            <td>
            <? foreach ($value as $k => $v): ?>
            <?= $v?>
            </br>
            <? endforeach; ?>
          </td>
          <? else: ?>
            <td> <?= $value ?></td>
            <? endif; ?>
        <? endforeach; ?>
      </tr>
      <?php endforeach; ?>



</table>
</body>
</html>
