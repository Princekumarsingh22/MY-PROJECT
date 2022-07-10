<?php include('includes/header.php'); ?>
<style>
  .containerimage {
    background-color: whitesmoke;
    width: 60%;
    min-width: 450px;
    position: relative;
    margin: 50px auto;
    padding: 50px 20px;
    border:1px solid gray;
    border-radius: 7px;
    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.05);
  }

  input[type="file"] {
    display: none;
  }

  .picsimage {
    display: block;
    position: relative;
    background-color: #025bee;
    color: #ffffff;
    font-size: 18px;
    text-align: center;
    width: 300px;
    padding: 18px 0;
    margin: auto;
    border-radius: 5px;
    cursor: pointer;
  }

  .containerimage p {
    text-align: center;
    margin: 20px 0 30px 0;
  }

  #images {
    width: 90%;
    position: relative;
    margin: auto;
    display: flex;
    justify-content: space-evenly;
    gap: 20px;
    flex-wrap: wrap;
  }

  figure {
    width: 45%;
  }

  img {
    width: 100%;
  }

  figcaption {
    text-align: center;
    font-size: 2.4vmin;
    margin-top: 0.5vmin;
  }
</style>
<?php include('includes/navbar2.php'); ?>
<section>
  <h1 class="text-center text-capitalize bg-warning">Include some details</h1>
  <div class="container containerimage ">
    <div class="row">
      <div class="col-md-12">
        <form action="code.php" onsubmit="return validate()">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name*" name="name" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Your Email*" name="email" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Contact Number*" name="number" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Project Name" name="projectname" required>
          </div>
          <div class="form-group">
            <select class="form-control">
              <option>Bedrooms*</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>4+</option>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control">
              <option>Furnishing</option>
              <option>Furnished</option>
              <option>Semi-Furnished</option>
              <option>Unfurnished</option>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control">
              <option>Constructions status</option>
              <option>New Lunch</option>
              <option>Ready to Move</option>
              <option>Under Construction</option>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control">
              <option>Listed by</option>
              <option>Builder</option>
              <option>Dealer</option>
              <option>Owner</option>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Maintenance (Monthly)" name="maintenance" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Total Floors" name="totalfloors" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" placeholder="Address"></textarea>
          </div>

          <div class="container containerimage">
            <div class="picsimage">
              <input type="file" id="file-input" accept="image/png, image/jpeg" onchange="preview()" multiple>
              <label for="file-input">
                <i class="fas fa-upload"></i> &nbsp; Choose Photo For Sell
              </label>
              <p id="num-of-files">No Files Chosen</p>
              <div id="images"></div>
            </div>
          </div>
          <script src="js/scriptimage.js"></script>
          <button type="submit" class="btn btn-primary" id="submit" name="btnsellimage">submit</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include('includes/footer2.php'); ?>