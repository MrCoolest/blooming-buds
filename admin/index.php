<?php
require_once "./main.php";


?>
  
  <!-- User authentication -->
  <form id="login_form" class="container my-4 p-5">

    <div id="error">

    </div>
    <!-- Email input -->
    <div class="form-outline mb-4">
      <input type="text" id="username" class="form-control" autocomplete="off" />
      <label class="form-label" for="form2Example1">Username</label>
    </div>
  
    <!-- Password input -->
    <div class="form-outline mb-4">
      <input type="password" id="passwd" class="form-control" autocomplete="off" >
      <label class="form-label" for="form2Example2">Password</label>
    </div>
  


  
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
  
    
  </form>

  <!-- User Authentication -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>



</html>