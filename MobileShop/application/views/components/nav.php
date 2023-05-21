<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Mobo mobiles </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <style>
    .navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
    color: #bbb;
  }
    bg-primary {
    background-color: #2196F3 !important;}
    body{
      background-color:#eee;
    }
    .bg-primary {
    background-color: #444 !important;
    }

    .btn-success {
    
    
      background: #4CAF50 linear-gradient(206deg, #ed0606, #87ba89) repeat-x;
    border-color: #4CAF50;
}
</style>
  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo BASEURL; ?>/profile">Home <span class="sr-only">(current)</span></a>
      </li>
      <?php if(!$this->getSession('userId')): ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASEURL; ?>/accountController">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASEURL; ?>/accountController/loginForm">Login</a>
      </li>

<?php else: ?>
<li class="nav-item">
        <a class="nav-link" href="<?php echo BASEURL; ?>/profile/mobileForm">Add Mobile</a>
      </li>
<?php endif; ?>
    </ul>
    <?php if($this->getSession('userId')): ?>
   <ul class="my-2 my-lg-0"><a href="<?php echo BASEURL; ?>/profile/logout" class="btn btn-success">Logout</a></ul>
<?php endif; ?>
  </div>
</nav>
   <!-- Close navbar -->