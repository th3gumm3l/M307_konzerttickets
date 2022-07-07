<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List</title>
</head>
<style>
  * {
    margin: 0px;
    padding: 0px;
    font-family: 'Courier New', Courier, monospace;
  }

  body {
    margin-left: 20px;
    margin-right: 20px;
  }

  nav {
    width: 100%;
    background-color: lightgray;
  }

  table {
    width: 500px;
    height: 200px;
    border: 0;
    border-collapse: collapse;
  }

  td {
    border: 1px solid #aaa;
  }
</style>

<body>
  <main>
    <nav>
      <a href="./formView.view.php">Formular</a>
      <a href="./orderlist.view.php">Order List</a>
    </nav>
    <br>

    <h1>List</h1>

    <?php foreach ($movies as $movie) : ?>

    <?php endforeach ?>

    <table>
      <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>

  </main>
</body>
<script>
  document.getElementById('signUpForm').onsubmit = function(evt) {
    var password = document.getElementById("pw");
    var passwordConfirm = document.getElementById("pw-rep");
    if (passwordConfirm != null) {
      if (password.value !== passwordConfirm.value) {
        alert("Die eingegebenen passwörter müssen übereinstimmen");
        evt.preventDefault();
      }
    }
  }
</script>

</html>