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
    <section id="login ">
      <div class="container login">
        <div class="row justify-content-center align-self-center pt-5">
          <div class="col-lg-4 col-md-6">
            <div class="card shadow-2-strong">
              <div class="card-body p-4 rounded">
                <h3 class="mb-5 text-center">Sign In</h3>
                <?php
                if (isset($_GET['message'])) {
                    $message = $_GET['message'];
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                    echo  $message;
                    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                    echo '</div>';
                }
                ?>
                <form class="form-container" action="auth/proses.php" method="POST" enctype="multipart/form-data">
                    
                    <div class="mb-2">
                      <label for="username" class="form-label">Username</label>
                      <input
                        type="text"
                        class="form-control"
                        id="username"
                        name="username"
                        placeholder="Masukkan username"
                      />
                    </div>
                    <div class="mb-2">
                      <label for="password" class="form-label">Password</label>
                      <input
                        type="password"
                        class="form-control"
                        id="password"
                        name="password"
                        placeholder="Masukkan password"
                      />
                    </div>
                   
                    <div class="text-center">
                      <button type="submit" class="btn btn-success btn-block" name="login">
                        Login
                      </button>
                    </div>
                  </form>
              </div>
            </div>
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
