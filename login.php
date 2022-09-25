<?php include'./src/includes/header.php'?>
<section class="login-banner-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex flex-wrap justify-content-center">
                <h1>Log In / Sign Up</h1>
            </div>
        </div>
    </div>
</section>
<section class="login-sec my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="" class="login-form">
                    <div class="form-group">
                        <div class="col-md-12 p-0">
                            <label>Email</label>
                        </div>
                        <div class="col-12 p-0">
                            <input type="email" placeholder="Write your email" class="form-control w-100 p-4" id="email"/>
                        </div>
                    </div>
                    <div class="form-group mb-5">
                        <div class="col-md-12 p-0">
                            <div class="d-flex justify-content-between">
                                <label>Password</label>
                                <a href="">Forgot?</a>
                            </div>
                        </div>
                        <div class="col-12 p-0">
                            <input type="password" placeholder="Write your password" class="form-control w-100 p-4" id="password"/>
                        </div>
                    </div>
                    <button class="btn-blue px-5">Login</button>
                    <span class="text-center my-4">or log in with</span>
                    <button class="facebook-btn px-5 mb-4">
                        <span></span>
                        Facebook
                    </button>
                    <button class="google-btn px-5">Sign in with google</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include'./src/includes/footer.php'?>