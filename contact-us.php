<?php include'./src/includes/header.php'?>
<section class="contact-us-banner-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex flex-wrap justify-content-center">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
</section>
<section class="contact-us-sec my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-5 pl-0">
                <div class="left-div"></div>   
            </div>
            <div class="col-md-7 py-5">
                <h5 class="mb-4">Send us a message</h5> 
                <form action="" class="contact-us-form">
                    <input type="text" placeholder="Write your name" class="form-control mb-3 p-4" id="name"/>
                    <input type="email" placeholder="Write your email" class="form-control mb-3 p-4" id="email"/>
                    <textarea name="msg" id="msg" class="form-control mb-3 p-4" cols="5" rows="5" placeholder="Tell us about your problem"></textarea>
                    <button class="btn-blue px-5">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include'./src/includes/footer.php'?>