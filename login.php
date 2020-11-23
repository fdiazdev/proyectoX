<?php
require_once('php/funciones_inicio.php');
?>
<div class="container text-center py-5">
    <form class="form-signin" action="hall.php">
      <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1><br>
      <label for="inputEmail" class="sr-only">Email address</label><br>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label><br>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>

</div>

<?php

?>
<?php
require_once('php/footer.php');
/*

FUCK SOCIETY

*/
?>