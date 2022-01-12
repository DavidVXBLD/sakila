<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-light text-black border-pink" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <div class="mb-md-5 mt-md-4 pb-5">
              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-black-50 mb-5">Please enter your login and password!</p>
                <form action="login.php" method="post">
                    <div class="form-outline form-black mb-4">
                        <input name="email" type="email" id="typeEmailX" class="form-control form-control-lg border-pink" />
                        <label class="form-label" for="typeEmailX">Email</label>
                    </div>
                    <div class="form-outline form-black mb-4">
                        <input name="password" type="password" id="typePasswordX" class="form-control form-control-lg border-pink" />
                        <label class="form-label" for="typePasswordX">Password</label>
                    </div>
                    <button class="btn btn-pink px-5" type="submit">Login</button>
                </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</header>

</body>
</html>