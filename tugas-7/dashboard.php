<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <title>Login</title>
  </head>
  <body class="bg-info">
  <section class="content">
          <div class="container">
            <div class="text-center">
              <h2>Authentication</h2>
              <?php
              session_start();
              if (isset($_GET['message'])) {
                  $message = $_GET['message'];
                  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                  echo  $message;
                  echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                  echo '</div>';
              }
              ?>
            </div>
            <div class="data">
              <div class="text-end">
                <a href="register.php" class="btn btn-success">
                  Register Data
                </a>
              </div>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Nama</th>
                      <th scope="col">Username</th>
                      <th scope="col">Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?= $_SESSION["nama"] ?></td>
                      <td><?= $_SESSION["username"] ?></td>
                      <td>
                      <a href="logout.php" onclick="return confirm('yakin ingin logout?')" class="btn btn-danger">Logout</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
