<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<style>
    body {
  display: flex;
  justify-content: center;
  margin-top: 200px;
  background-image: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"%3E%3Cg fill-rule="evenodd"%3E%3Cg fill="%239C92AC" fill-opacity="0.4"%3E%3Cpath opacity=".5" d="M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9zm-1 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9z"/%3E%3Cpath d="M6 5V0H5v5H0v1h5v94h1V6h94V5H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');
}

.modal-body {
  display: flex;
  padding: 0;
  border-radius: 4rem;
  font-family: 'PT Sans', sans-serif;
}

.modal-content {
  border-radius: 4rem;
  width: 140%;
  -webkit-box-shadow: -1px -2px 42px -19px rgba(0,0,0,0.74);
-moz-box-shadow: -1px -2px 42px -19px rgba(0,0,0,0.74);
box-shadow: -1px -2px 42px -19px rgba(0,0,0,0.74);
}
.modal-content h1, .modal-content h2, .modal-content h3 {
    text-align: center;
}
.modal-content h1 {
  font-size: 1.3em;
  text-transform: uppercase;
}

.modal-content h2 {
    font-size: 1.1em;
}
.modal-content h3 {
  font-size: .8em;
  letter-spacing: 2px;
}
form {
    font-size: .8em;
}
.column {
  flex: 50%;
  padding: 10px;
}

.column#main {
  flex: 75%;
  padding: 50px;
  margin-top: 30px;
  margin-left: 15px;
}

#secondary {
  background-color: #F9BC35;
  border-radius: 0 4rem 4rem 0;
  text-align: center;
}

#main .form-control {
  border-radius: 0;
  font-size: .9em;
}

.btn {
  text-transform: uppercase;
  border-radius: .15rem;
  width: 200px;
  padding: .150rem .75rem;
  margin: 30px auto;
  font-family: 'PT Sans', sans-serif;
  letter-spacing: 2px;
}

.btn-primary {
  border-color: rgba( 255, 255, 255, 0);
  background: #f1da36; /* Old browsers */
background: -moz-linear-gradient(left, #f1da36 0%, #fca86c 99%); /* FF3.6-15 */
background: -webkit-linear-gradient(left, #f1da36 0%,#fca86c 99%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right, #f1da36 0%,#fca86c 99%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f1da36', endColorstr='#fca86c',GradientType=1 ); /* IE6-9 */
Color format:     Comments
}

.btn-primary:hover {
  border-color: rgba( 255, 255, 255, 0);
}

#main .btn-primary {
  width: 100%;
}
#secondary .btn-primary {
  background: #f8f9fa4f;
  color: #000;
}
.modal-body label {
  margin-bottom: 0;
}

.sec-content {
  margin-top: 85%;
}
</style>

<body>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Sign Up
</button>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalle">Login</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="column" id="main">
          <h1>Sign Up </h1>
          <h3>Welcome</h3>
          <form action="controller/auth.php" method="post">
            <div class="form-group">
              <label for="exampleInputName">Name</label>
              <input type="name" name="name" class="form-control" id="exampleInputName" placeholder="Name" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">E-mail </label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password"  pattern="(?=.*\d)(?=.*[a-zA-Z])(?=.*[\W_]).{8,}" title="Password must be at least 8 characters long and contain at least one letter, one number, and one special character." required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Contect Number</label>
              <input type="tel" name="number" class="form-control" id="exampleInputPassword1" placeholder="Contect Number" pattern="[0-9]{10}" title="Please enter a 10-digit phone number" required>
            </div>
            <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
          </form>
        </div>
        <div>
          <?xml version="1.0" encoding="UTF-8"?>
          <svg width="67px" height="578px" viewBox="0 0 67 578" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <!-- Generator: Sketch 53.2 (72643) - https://sketchapp.com -->
            <title>Path</title>
            <desc>Created with Sketch.</desc>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <path d="M11.3847656,-5.68434189e-14 C-7.44726562,36.7213542 5.14322917,126.757812 49.15625,270.109375 C70.9827986,341.199016 54.8877465,443.829224 0.87109375,578 L67,578 L67,-5.68434189e-14 L11.3847656,-5.68434189e-14 Z" id="Path" fill="#F9BC35"></path>
            </g>
          </svg>
        </div>
        <div class="column" id="secondary">
          <div class="sec-content">
            <h2>Welcome Back!</h2>
            <h3>Welcome to our gold website! Discover the finest selection of gold jewelries in the luxury of gold today.</h3>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalle">Login</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModalle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="column" id="main">
          <h1>Login </h1>
          <h3>Welcome</h3>
          <form action="controller/auth.php" method="post">
           
            <div class="form-group">
              <label for="exampleInputEmail1">E-mail </label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
            </div>
          
            <button type="submit" name="login" class="btn btn-primary">Login</button>
          </form>
        </div>
        <div>
          <?xml version="1.0" encoding="UTF-8"?>
          <svg width="67px" height="578px" viewBox="0 0 67 578" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <!-- Generator: Sketch 53.2 (72643) - https://sketchapp.com -->
            <title>Path</title>
            <desc>Created with Sketch.</desc>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <path d="M11.3847656,-5.68434189e-14 C-7.44726562,36.7213542 5.14322917,126.757812 49.15625,270.109375 C70.9827986,341.199016 54.8877465,443.829224 0.87109375,578 L67,578 L67,-5.68434189e-14 L11.3847656,-5.68434189e-14 Z" id="Path" fill="#F9BC35"></path>
            </g>
          </svg>
        </div>
        <div class="column" id="secondary">
          <div class="sec-content">
            <h2>Welcome Back!</h2>
            <h3> to our gold website! Discover the finest selection of gold jewelries in the luxury of gold today.</h3>

            <a href="reg.php"><button type="button" class="btn btn-primary" data-toggle="modal" >Signup</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>