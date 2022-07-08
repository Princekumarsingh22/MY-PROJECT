<?php include('includes/header.php'); ?>
<?php include('includes/navbar2.php'); ?>

<section>
<div class="form4 top">
            <div class="container" >
                <div class="row row1">
                    <div class="contact-banner" style="position:relative; bottom:35rem;"><!-- style1 -->
                        <u><h2>Contact us</h2></u>
                    </div>
                </div>
                <div class="row row2">
                    <div class="col-md-6">
                        <div class="form-bg">
                            <form action="code.php" method="POST" class="form">
                                <div class="form-group">
                                    <label class="sr-only">Name</label>
                                    <input type="text" class="form-control" required="" name="name" id="name" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Email</label>
                                    <input type="email" class="form-control" required=""  name="email"id="email" placeholder="Email Address ...">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Message</label>
                                    <textarea class="form-control" rows="7" required="" name="message" id="message" placeholder="Write message ..."></textarea>
                                </div>
                                <button type="submit" class="btn text-center btn-blue"   name="contact_btn" id="submit">Send Message</button>
                            </form>
                        </div>
                    </div>
                    <div class="map">
                    <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230292.83828455536!2d85.13756450000002!3d25.5940947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed593425a70f1f%3A0x1be26ed210ba9c5f!2sKurji%20More!5e0!3m2!1sen!2sin!4v1656471985087!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php include('includes/footer2.php'); ?>