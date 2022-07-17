
<section>
  <h1 class="text-center text-capitalize bg-warning">Include some details</h1>
  <div class="container containerimage ">
    <div class="row">
      <div class="col-md-12">
        <form action="code.php" method="POST">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name*" name="name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Your Email*" name="email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Contact Number*" name="phone">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Project Name" name="projectname">
          </div>
          <div class="form-group">
            <select class="form-control" name="bedrooms">
              <option>Bedrooms*</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>4+</option>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" name="furnishing">
              <option>Furnishing</option>
              <option>Furnished</option>
              <option>Semi-Furnished</option>
              <option>Unfurnished</option>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" name="constr_status">
              <option>Constructions status</option>
              <option>New Lunch</option>
              <option>Ready to Move</option>
              <option>Under Construction</option>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" name="listedby">
              <option>Listed by</option>
              <option>Builder</option>
              <option>Dealer</option>
              <option>Owner</option>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Maintenance (Monthly)" name="maintenance">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Total Floors" name="totalfloors">
          </div>
          <div class="form-group">
            <textarea class="form-control" placeholder="Address" naem="address"></textarea>
          </div>

          <div class="container containerimage">
            <div class="picsimage">
              <input type="file" id="file-input" accept="image/png, image/jpeg,image/jpg" onchange="preview()"
                name="upload" multiple>
              <label for="file-input">
                <i class="fas fa-upload"></i> &nbsp; Choose Photo For Sell
              </label>
              <p id="num-of-files">No Files Chosen</p>
              <div id="images"></div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary" id="submit" name="btnsellform">submit</button>
        </form>
      </div>
    </div>
  </div>
</section>


<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Default checkbox
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
  <label class="form-check-label" for="defaultCheck2">
    Disabled checkbox
  </label>
</div>


<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">1</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">2</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
  <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
</div>


<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
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
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>

