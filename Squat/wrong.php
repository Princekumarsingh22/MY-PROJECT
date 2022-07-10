<?php include('includes/header.php'); ?>
<style>
    .containersell {
        background-color: #ffffff;
        width: 60%;
        min-width: 450px;
        position: relative;
        margin: 50px auto;
        padding: 50px 20px;
        border-radius: 7px;
        box-shadow: 0 20px 35px rgba(0, 0, 0, 0.05);
    }

    input[type="file"] {
        display: none;
    }

    .pics {
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

    .containersell p {
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

<script>
    let fileInput = document.getElementById("file-input");
    let imageContainer = document.getElementById("images");
    let numOfFiles = document.getElementById("num-of-files");

    function preview() {
        imageContainer.innerHTML = "";
        numOfFiles.textContent = `${fileInput.files.length} Files Selected`;

        for (i of fileInput.files) {
            let reader = new FileReader();
            let figure = document.createElement("figure");
            let figCap = document.createElement("figcaption");
            figCap.innerText = i.name;
            figure.appendChild(figCap);
            reader.onload = () => {
                let img = document.createElement("img");
                img.setAttribute("src", reader.result);
                figure.insertBefore(img, figCap);
            }
            imageContainer.appendChild(figure);
            reader.readAsDataURL(i);
        }
    }
</script>
<section>
    <div class="container containersell">
    <div class="row row1">
            <div class="contact-banner" style="position:relative; bottom:35rem;">
                <u>
                    <h2>Sell</h2>
                </u>
            </div>
        </div>
       <!--  <h1 class="text-center text-capitalize pt-5">SELL</h1> -->
        <hr class="w-25 mx-auto pt-5">
        <div class="w-50 mx-auto">
            <form action="/action_page.php">
                <div class="form-group">
                    <label for="name">Your Name:*</label>
                    <input type="text" class="form-control" placeholder="Enter Your Name" id="nm" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail:*</label>
                    <input type="email" class="form-control" placeholder="Enter  your E-mail" id="mail" name="email"
                        required>
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile No.:*</label>
                    <input type="email" class="form-control" placeholder="Enter  your mob. no." id="mob" name="mobile"
                        required>
                </div>
                <div class="form-group">
                    <label for="add">Address</label>
                    <textarea class="form-control"></textarea>
                </div>
                <div class="container containersell">
                    <div class="pics">
                        <input type="file" id="file-input" accept="image/png, image/jpeg" onchange="preview()" multiple>
                        <label for="file-input">
                            <i class="fas fa-upload"></i> &nbsp; Choose A Photo
                        </label>
                        <p id="num-of-files">No Files Chosen</p>
                        <div id="images"></div>
                    </div>
                </div>
                <script src="sell/script.js"></script>
                <button type="submit" class="btn btn-primary" id="submit">submit</button>
            </form>
        </div>
    </div>
</section>

<?php include('includes/footer2.php'); ?>