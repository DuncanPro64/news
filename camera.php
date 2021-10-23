

<form method='POST' action="#">
<div class="offcanvas offcanvas-end" tabindex="-1" id="addphoto" aria-labelledby="offcanvasRightLabel"style="height:60%;margin-top:9%; margin-right:1%; border:1px dotted red;background:#e8e8e8;">
  <div class="offcanvas-header">
    <p id="addphoto">Upload your file</p style="text-align: center; margin-left: 50%;">
    <p data-bs-dismiss="offcanvas" aria-label="Close"><img src="https://img.icons8.com/ios-glyphs/30/fa314a/macos-close.png"/></p style="border-style: none;background-color:red;">
  </div>
  <div class="offcanvas-body">

  <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1" name="name" required>
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Email" aria-label="email" aria-describedby="basic-addon1" name="email" required>
</div>
<div class="input-group mb-3">
  <input type="textarea" class="form-control" placeholder="Describe your photo" aria-label="description" aria-describedby="basic-addon1" name="amount" required>
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="University" aria-label="Username" aria-describedby="basic-addon1" name="university"required>
</div>
<div class="d-grid gap-2">
<button type="submit" class="btn btn-outline-danger" name="donate">UPLOAD</button>
</div>
</form>
