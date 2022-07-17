<?php
    include('includes/header.php');
    include('includes/navbar2.php');
?>
<style>
  /* START SELL~1 */
  .sell1-content {
    font-size: 2rem;

  }

  .sell1-content ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: whitesmoke;
    /* word-spacing: 20px; */
    padding-bottom: 30px;
  }

  .sell1-content li {
    float: left;
    margin-left: 80px;
  }

  .sell1-content ul li a {
    color: green;
  }

  details {
    margin-bottom: 20px;
    width: 100%;
    font-family: sans-serif;
  }

  details p {
    padding: 20px;
  }

  summary {
    padding: 20px;
    background-color: #FBEFF8;
    border: 1px solid #FBEFF8;
    outline: none;
  }

  details[open] summary {
    background-color: #F5A9F2;
    border: 1px solid #F5A9F2;
  }

  details[open] {
    background: #fff;
  }

  /* END SELL~1 */
  /* START COMMENT PART */
  li,
  a {
    list-style-type: none;
    text-decoration: none;
  }

  #comment-image {
    width: 55px;
  }

  #comment-comment {
    margin: 0.5rem 0 0 0;
    font-size: 17px;
  }

  #comment-list {
    margin: 2rem 0;
    scroll-behavior: auto;
  }

  #comment-list li {
    border-bottom: 1px solid #8d8d8d1a;
    font-size: 18px;
    color: rgb(61, 61, 61);
    padding: 1rem 0;
  }

  #comment-list li span {
    display: flex;
    gap: 1rem;
    align-items: center;
  }

  /* END COMMENT PART */
</style>



<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h2>Building: 123 on the Park</h2>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item">
              <img src="image/sell1/balcony1.jpg" alt="lol1">
              <div class="carousel-caption">
                BALCONY
              </div>
            </div>
            <div class="item">
              <img src="image/sell1/bedroom1.1.jpeg" alt="lol2">
              <div class="carousel-caption">
                BEDROOM~1
              </div>
            </div>
            <div class="item">
              <img src="image/sell1/bedroom1.jpg" alt="lol3">
              <div class="carousel-caption">
                BEDROOM~2
              </div>
            </div>
            <div class="item">
              <img src="image/sell1/diningroom1.jpg" alt="lol4">
              <div class="carousel-caption">
                DININGROOM
              </div>
            </div>
            <div class="item active">
              <img src="image/sell1/exterior1.jpg" alt="lol5">
              <div class="carousel-caption">
                EXTERIOR
              </div>
            </div>
            <div class="item">
              <img src="image/sell1/kitchen1.jpg" alt="lol6">
              <div class="carousel-caption">
                KITCHEN
              </div>
            </div>
            <div class="item">
              <img src="image/sell1/livingroom1.jpg" alt="lol7">
              <div class="carousel-caption">
                LIVINGROOM
              </div>
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-md-4">
      <form action="code.php" style="background-color: whitesmoke;" method="POST" >
          <div class="form-group ">
            <h3 class="card-title">More about this property</h3>
            <label for="exampleInputName">Full Name</label>
            <input type="text" class="form-control" id="exampleInputName" name="name" aria-describedby="nameHelp"
              placeholder="Enter Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp"
              placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"
              placeholder="I am interested ..."></textarea>
          </div>
          <button type="submit" class="btn btn-primary" name="emailagent_btn">Email Agent</button>
          <div class="form-group">
            <details>
              <summary>By proceeding, you consent to receive calls and texts at the number you provided, including
                marketing by autodialer and prerecorded and artificial
                voice, and email, from realtor.com and
              </summary>
              <p>about your inquiry and other home-related matters, but not as a condition of any purchase; this applies
                regardless of whether you check, or leave un-checked, any box above.</p>
            </details>
          </div>
        </form>

      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="sell1-content">
          <ul>
            <li>₹ 589,8000</li>
            <li>Est.&nbsp;<a href="#" data-toggle="modal" data-target="#modalRegisterForm">321,400/month</a></li>
          </ul>

          <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header text-center">
                  <h4 class="modal-title w-100 font-weight-bold">Estimated monthly Payment</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="">
                  <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Down Payment</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="117,9600">
                      </div>
                    </div>
                    <div class="md-form mb-5">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Down Payment (%)</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="20.00%">
                      </div>
                    </div>
                    <div class="md-form mb-5">
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">30-year Fixed</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>30-Year Fixed FHA</option>
                          <option>20-Year Fixed</option>
                          <option>15-Year Fixed</option>
                          <option>10-Year Fixed</option>
                          <option>5-Year Fixed</option>
                        </select>
                      </div>
                    </div>
                    <div class="md-form mb-4">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Interest Rate (%)</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="5.009%">
                      </div>
                    </div>

                  </div>
                </form>
                <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-info">Update & Close</button>
                </div>
              </div>
            </div>
          </div>

          <!-- <div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Launch
    Modal Register Form</a>
</div> -->
          <ul>
            <li>4 bed</li>
            <li>3 bath</li>
            <li>2,154 sqft</li>
            <li>0.37 acre lot</li>
          </ul>
          <div class="sell1-btn">
            <div class="col-md-2"><a href="contact.php"><button type="button"
                  class="btn btn-danger">Contact</button></a></div>
            <div class="col-md-2"><a href="https://web.whatsapp.com/"><button type="button"
                  class="btn btn-info">Share</button></a></div>


          </div>
        </div>
      </div>
      <div class="map">
        <div class="col-md-4">
          <h4>Property Location</h4>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230292.83828455536!2d85.13756450000002!3d25.5940947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed593425a70f1f%3A0x1be26ed210ba9c5f!2sKurji%20More!5e0!3m2!1sen!2sin!4v1656471985087!5m2!1sen!2sin"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10">
        <section>
          <details open>
            <summary>
              <h3>Property Address</h3>
            </summary>
            <p>Kurji More, Patna 800010 (Bihar)</p>
          </details>
          <details>
            <summary>
              <h3>Property Details</h3>
            </summary>
            <p>
              One of A Kind 4 Bedroom & 3 Bath 3 Car Garage CBS Pool Home Located on one of the Largest lots in River
              Place with Private Water Access on the St Lucie River. This Upgraded Beauty Features an Oversized 3rd
              Garage, and Expanded Back Porch. Located on a Beautifully Landscaped .37 of an Acre, which backs up to the
              Lightly Used Private Road that Leads to the Boat Ramp for Water Lovers!! This Custom Built Home is CBS
              Construction, with Hardi-Plank Siding, Upgraded Storm Windows or Accordion Hurricane Shutters, Heated
              Pool, and Fireplace. This Custom Built Key West Style Home is Impeccably Kept and is the only Home in
              River Place that has a 3 Car Garage. This Showplace greets you with a large Front Porch with Brick Pavers
              and Cedar Ceilings Inviting you into this lovely Home.
            </p>

          </details>

          <details>
            <summary>
              <h3>Property History</h3>
            </summary>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero perferendis adipisci laboriosam nihil
              incidunt natus dolorem exercitationem error, saepe nostrum quam accusantium, voluptatem molestiae repellat
              mollitia sit quidem debitis! Saepe ducimus repellat voluptatum porro provident suscipit. Est quidem, ullam
              aperiam accusamus tenetur delectus fugiat similique reprehenderit voluptatem consectetur molestiae fuga!
            </p>
          </details>

          <details>
            <summary>
              <h3>Property Value</h3>
            </summary>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo praesentium explicabo expedita, nulla qui,
              temporibus rem eum sed a quam quidem! Distinctio amet libero laborum itaque delectus fugiat perferendis
              esse. Reiciendis quos, eveniet modi, quas nisi eos fugit recusandae voluptate ut provident eligendi quia
              aliquam possimus praesentium consequatur saepe ducimus.</p>
          </details>

          <details>
            <summary>
              <h3>Neighborhood</h3>
            </summary>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, eveniet molestiae! Accusantium
              iure fugiat voluptatem incidunt, dolor et nulla voluptatum reprehenderit, illum similique ratione nobis
              corporis, minima deserunt? Sequi quae aspernatur illo non excepturi, dicta veniam, dolorem, velit libero
              fugiat delectus perspiciatis earum neque error? Debitis deleniti quae a hic.</p>
          </details>

          <details>
            <summary>
              <h3>Schools</h3>
            </summary>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis quidem sint repudiandae temporibus quo
              minima suscipit recusandae commodi nam quae voluptate in ratione ipsum expedita consequatur nulla aliquam
              atque nobis, exercitationem, nesciunt dolorem tenetur pariatur eaque magni! Vero quas iure odit minima
              repudiandae fugit, odio quis architecto minus nesciunt blanditiis.</p>
          </details>

          <details>
            <summary>
              <h3>Feedback Property</h3>
            </summary>
            <br>
            <!-- Write ur comments -->
            <div class="row">
              <div class="col-md-6">
                <form action="" method="POST">
                  <div class="form-group">
                    <input class="form-control" required type="text" id="name" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <input class="form-control" required type="email" id="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" rows="6" required id="comment"
                      placeholder="your comment ..."></textarea>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary" id="button" type="submit" onclick="myFunction();">Post a
                      Comment</button>
                  </div>
                </form>
                <ul id="comment-list">
                  <!-- data are comes from local storage -->
                </ul>
              </div>
            </div>
          </details>
        </section>
      </div>
    </div>

  </div>
</section>
<script>
  // getting all required elements
  const button = document.querySelector("#button");
  const commentList = document.querySelector("#comment-list");

  showComments();

  function myFunction() {
    var name = document.getElementById("name").value; //getting value of input field
    var email = document.getElementById("email").value;
    var comment = document.getElementById("comment").value;
    let storage = localStorage.getItem("New Comments"); //getting localstorage

    if (storage == null) {
      listArr = [];
    } else {
      listArr = JSON.parse(storage);
    }

    listArr.push(
      //pushing or adding new value in array
      "<span>" +
      "<img src = 'user.png'/>" +
      name +
      "<br/>" +
      email +
      "</span>" +
      "<br>" +
      comment
    );
    localStorage.setItem("New Comments", JSON.stringify(listArr));

    showComments(); //calling showComments function
  }

  function showComments() {
    let storage = localStorage.getItem("New Comments");

    if (storage == null) {
      listArr = []; //create a blank array
    } else {
      listArr = JSON.parse(storage); //transforming json string into a js object
    }

    let liTag = "";

    listArr.forEach((element, index) => {
      liTag += `<li> ${element} </li>`;
    });

    commentList.innerHTML = liTag;
  }
</script>

<?php include('includes/footer2.php'); ?>