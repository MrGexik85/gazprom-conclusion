<!DOCTYPE html>
<html>
  <title>GTO</title>
<head>
    <link rel="stylesheet" href="../../design/design.css">
  </head>
<body>
<center>
<label>Хакер</label><br>
<textarea type="text" id="username" placeholder="your username..."></textarea><br>
<input id="btn" type="submit" value="START">

<p id="out">Подключение к серверу: </p>
</center>
<script>
  //Получение адреса сервера:
  console.log("Waiting for connection...")
  window.addEventListener("message", (event)=>{
    console.log("[OK] Connected!")
    address = event.data
    document.getElementById('out').innerHTML += `<u>${address}</u>`
  });

  //Code...
</script>
</body>
</html>