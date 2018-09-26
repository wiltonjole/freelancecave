<?php  
	include("header.php");
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h2>Join our Growing Community of Engineers</h2>
      <form id="registerForm">
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">First Name</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Surname</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email Address</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Confirm Email Address</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Sign me up for newsletters 
      </label>
    </div>
  </div>
  <input id="btnSignup" type="button" class="btn btn-primary" value="Register" name="">
</form>
    </div>
  </div>
</div>

<?php  
	include("footer.php");
?>