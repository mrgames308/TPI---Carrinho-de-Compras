<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="img/favicon.png">
    <meta charset="utf-8"/>
    <title>Calcular a Idade Futura</title>
    <link href="css/estilos.css" type="text/css" rel="stylesheet" />
</head>
<body>  
<fieldset>
<legend>Calcular sua Idade Futura</legend>
<form action="calcular.php" method="get">
   <label>Nome:
   <input type="text" name="nome" required>
   </label>
   <label>Idade:
       <input type="text" name="nasc" required>
   </label>
   <label>Ano Futuro:
      <input type="text" name="fut" required>
   </label>
   <button type="submit">Enviar </button> 
   <button type="reset">Limpar </button>
</form>
</fieldset>
</body>
</html>

