<!--LOGIN-->
<?php
include("koneksi.php");



if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  if(!empty($username) && !empty($password))
  {
    $query = "select * from user where username = '$username' limit 1";
    $result = mysqli_query($connetion, $query);

    if($result)
    {
      if($result && mysqli_num_rows($result) > 0)
      {
        $user_data = mysqli_fetch_assoc($result);

        if($user_data['password']  == $password)
        {
          header("location: tabelbuku.php");
          die;
        }
      }
    }
    echo "<script type='text/javascript'> alert('username atau password salah')</script>";
  }
  else{
    "<script type='text/javascript'> alert('username atau password salah')</script>";
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
    include('navbar.php')
    ?>
    <div class="regis">
      <center>
        <h1>Login</h1>
        <form method="post">
            <label>Nama</label>
            <input type="text" autocomplete="off" name="nama" required>
            <label>Username</label>
            <input type="text" autocomplete="off" name="username" required>
            <label>Password</label>
            <input type="text" autocomplete="off" name="password" required>
            <input type="submit" name="" value="Submit">
        </form>
        <!-- <p>Silahkan Registrasi jika tidak mempunyai akun <a href="index.php">Registrasi</a></p> -->
    </div>
</center>
    <?php
    include('footer.php')
    ?>
</body>
</html>