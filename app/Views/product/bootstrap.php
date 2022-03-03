<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<!-- <div class="d-flex flex-row bd-highlight mb-3">
  <div class="p-2 bd-highlight">Flex item 1</div>
  <div class="p-2 bd-highlight">Flex item 2</div>
  <div class="p-2 bd-highlight">Flex item 3</div>
</div>
<div class="d-flex flex-row-reverse bd-highlight">
  <div class="p-2 bd-highlight">Flex item 1</div>
  <div class="p-2 bd-highlight">Flex item 2</div>
  <div class="p-2 bd-highlight">Flex item 3</div>
</div> -->




<!-- <div class="container">
    <div class="row">
        <div class="col-7 mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis ad nobis aliquid, facilis fugiat rerum, itaque labore omnis voluptate fuga vel illo? Cum earum ad mollitia nam esse dolore!
        </div>

        <div class="col-5">
        <div class="container mt-3">
            <h2>form</h2>
            <form action="/action_page.php">
                <div class="mb-3 mt-3">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="mb-3">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                </div>

                <div class="row">
                    <div class="col">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" placeholder="Enter email" name="email">
                    </div>
                    <div class="col">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" placeholder="Enter password" name="pswd">
                    </div>
                </div>

                <div class="mb-3 mt-3">
                    <label for="comment">Comments:</label>
                    <textarea class="form-control" rows="3" id="comment" name="text"></textarea>
                </div>

                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                    </label>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
    </div>
</div> -->


<!-- <div class="container">
    <div class="row">
        <div class="col-6 mt-1">
                <table class="table table-bordered table-hover">
                    <h2>Basic Table</h2>
                    <thead>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Password1</th>
                            <th>Password2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>john@example.com</td>
                            <td>1234</td>
                            <td>1234</td>
                        </tr>
                        <tr>
                            <td>Mary</td>
                            <td>Moe</td>
                            <td>mary@example.com</td>
                            <td>1234</td>
                            <td>1234</td>
                        </tr>
                        <tr>
                            <td>July</td>
                            <td>Dooley</td>
                            <td>july@example.com</td>
                            <td>1234</td>
                            <td>1234</td>
                        </tr>
                    </tbody>
                </table>
        </div>
        <div class="col-6 ">
        <div class="container mt-1">
                <h2>Basic Table</h2>
                <table class="table table-striped border">
                    <thead>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Password1</th>
                            <th>Password2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>john@example.com</td>
                            <td>1234</td>
                            <td>1234</td>
                        </tr>
                        <tr>
                            <td>Mary</td>
                            <td>Moe</td>
                            <td>mary@example.com</td>
                            <td>1234</td>
                            <td>1234</td>
                        </tr>
                        <tr>
                            <td>July</td>
                            <td>Dooley</td>
                            <td>july@example.com</td>
                            <td>1234</td>
                            <td>1234</td>
                        </tr>
                    </tbody>
                </table>
            </div>
 
        </div>
    </div>
</div> -->



    <!-- <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 style="text-align: center;">The Text1</h3>
                <div class="row">
                    <div class="col-6">
                        <h3>The Text under2</h3>
                        <div class="row">
                            <div class="col-6">
                                <h3>The Text under3</h3>
                            </div>                            
                            <div class="col-6">
                                <h3>The Text under3</h3>
                            </div>                            
                        </div>
                    </div>
                    <div class="col-6">
                        <h3 class="text-end">The Text under2</h3>
                    </div>
                </div>
            </div>

            <div class="col-6 ">
                <h3>The Word1</h3>
            </div>
        </div>
 
    </div> -->

</body>
</html>
