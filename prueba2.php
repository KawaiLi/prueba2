<!DOCTYPE html>
<html>
<html lang="en">
  <title>TRABAJO SIN_2022I</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php
echo '<table>';
echo '<tr>';
echo '<td>HOLA KAWAI, <span class="badge bg-info">¿Cómo estás hoy?<span></td>';
echo '</tr>';
echo '<tr>';
echo '<td>Esta es la tabla que has creado:</td>';
echo '</tr>';
echo '</table>';

echo '<table class="table table-hover">';
for($i = 0; $i < 5; $i = $i+1) {
  echo  '<tr>';
  for($y = 0; $y < 10; $y = $y+1) {
    $a = rand(0,10);
    $b = rand(0,10);
    echo  '<td>Hola '.$a.'-'.$b.' </td>';
  }
  echo  '</tr>';
}
echo '</table>';
?>

</body>
</html>
