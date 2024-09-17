

<form method='POST' action="payment-processing.php">
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h2 id="offcanvasRightLabel">SPONSOR US</h2>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">

  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"></span>
  <input type="text" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1" name="name" required>
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"></span>
  <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" name="email" required>
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"></span>
  <input type="phone" class="form-control" placeholder="Phone(+254...)" aria-label="Username" aria-describedby="basic-addon1" name="phone" required>
</div>


<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Ksh.</span>
  <input type="text" class="form-control" placeholder="Amount" aria-label="Username" aria-describedby="basic-addon1" name="amount" required>
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"></span>
  <input type="text" class="form-control" placeholder="University" aria-label="Username" aria-describedby="basic-addon1" name="university"required>
</div>
<div class="d-grid gap-2">
<button type="submit" class="btn btn-outline-success" name="donate">Make Donation</button>
</div>
</form>
