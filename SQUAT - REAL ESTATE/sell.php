<?php include('includes/header.php') ?>

<!-- Begin Main -->
<div role="main" class="main pgl-bg-grey">
	<!-- Begin page top -->
	<section class="page-top">
		<div class="container">
			<div class="page-top-in">
				<h2><span>Sell </span></h2>
			</div>
		</div>
	</section>
</div>
<br>
	<!-- End page top -->
<section class="bg-info">
  <h1 class="text-center text-capitalize">Include Some Details</h1>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form action="code.php" method="POST" enctype="multipart/form-data" style="border:1px solid gray;">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Contact Number*" name="phone">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Project Name" name="projectname">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Maintenance (Monthly)" name="maintenance">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Total Floors" name="totalfloors">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address" placeholder="Your Address..."></textarea>
          </div>
          <div class="form-row">
                <div class="form-group col-md-4">
                <select class="form-control" name="type">
                    <option>Type*</option>
                    <option>Sell</option>
                    <option>Rent</option>
                </select>
                </div>
                <div class="form-group col-md-4">
                    <select class="form-control" name="bedrooms">
                        <option>Bedrooms*</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>4+</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                <select class="form-control" name="furnishing">
                    <option>Furnishing</option>
                    <option>Furnished</option>
                    <option>Semi-Furnished</option>
                    <option>Unfurnished</option>
                </select>
                </div>
          </div>

          <div class="form-row">
                <div class="form-group col-md-6">
                <select class="form-control" name="const_status">
                    <option>Constructions status</option>
                    <option>New Lunch</option>
                    <option>Ready to Move</option>
                    <option>Under Construction</option>
                </select>
                </div>
                <div class="form-group col-md-6">
                <select class="form-control" name="listedby">
                    <option>Listed by</option>
                    <option>Builder</option>
                    <option>Dealer</option>
                    <option>Owner</option>
                </select>
                </div>
          </div>

          
          <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputFile">Exterior</label>
                <input type="file" id="exampleInputFile" name="exteriorimg">
            </div>    
          </div>
          <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputFile">Livingroom</label>
                <input type="file" id="exampleInputFile" name="livingroomimg">
            </div>    
          </div>
          <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputFile">Kitchen</label>
                <input type="file" id="exampleInputFile" name="kitchenimg">
            </div>    
          </div>
          
          <br><br><br>
          <div class="form-group">
            <button type="reset" class="btn btn-info" id="reset" name="btnsellform">Reset</button>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary" id="submit" name="btnsellform">submit</button>
          </div>
          
        </form>
        <br><br><br><br>
      </div>
    </div>
  </div>
</section>

<?php include('includes/footer.php') ?>