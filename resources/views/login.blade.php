<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <section id="create">
        <div class="container mt-5">
          <div class="row justify-content-center">
            <h2 class="text-center"><b>LOGIN</b></h3>
            <br>
            <br>
            <br>
            <div class="col-4">
              <form action="{{ route('actionlogin') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label fw-medium">Email</label>
                  <input type="email" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:350px;">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label fw-medium">Password</label>
                  <input type="password" name="password"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:350px;">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <button type="submit" class="btn btn-success">Register</button>
              </form>
            </div>
          </div>
        </div>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
