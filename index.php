<?php include'./src/includes/header.php'?>
<section class="about-us-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-4">
                <div class="content-block text-center">
                    <div style="margin-bottom: -15%">
                        <h1>Digital Landscape</h1>
                        <h3>Provide the simplest solution for the most complex problem!</h3>
                        <button class="btn-blue">
                            <a href="https://dls-global.com" target="_blank" class="link-blue">Get started</a>
                        </button>
                        <button class="btn-blue">
                            <a href="https://dls-global.com" target="_blank" class="link-blue">Learn more</a>
                        </button>
                    </div>
                    <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_xmt2vgt4.json" background="transparent" speed="1" loop autoplay></lottie-player>
                    <h4>Digitize your business today and start growing!</h4>
                    <p class="py-3">"Digital Landscape is an agile start-up technology company. A fast-growing, energetic, digital company that specializes in Digital Transformation, Business Consultancy & Advisory Services. Digital Landscape helps their client to design, build, and launch innovative digital products that help them engage their customers and keep them ahead of their competitors in an ever-evolving operating landscape."</p>
                    <span>- Shahab Rizvi, Digital Landscape</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services-sec" id="services">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="content-block">
                    <h3 class="sec-title">Our Services</h3>
                    <p class="sec-desc">Focusing on innovation and digitalization while providing industry-leading solutions.</p>
                    <?php include './services.php' ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="products-sec" id="products">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="content-block">
                    <h3 class="sec-title">Our Work</h3>
                    <p class="sec-desc">Exciting web and mobile applications for various business models.</p>
                    <?php include './products.php' ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tech-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="content-block">
                    <h3 class="sec-title">Our Technologies Stack</h3>
                    <p class="sec-desc">Our expertise in latest development frameworks and technologies has enabled us to use a variety of suitable technology stack that businesses request.</p>
                    <?php include './tech-stack.php' ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="clients-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="content-block">
                    <h3 class="sec-title">Our Clients</h3>
                    <p class="sec-desc">our trusted clients and partners</p>
                    <?php include './clients.php' ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="clients-testo-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="content-block">
                    <h3 class="sec-title">Our Clients Testimonials</h3>
                    <?php include './clients-testimonials.php' ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-sec" id="contact-us">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-4 mb-4 content-block">
                <h4>what we'll do next</h4>
                <ul class="list">
                    <li>our team will contact you within one business day</li>
                    <li>we will engage on initial discussion to understand your requirements</li>
                    <li>our team of analysts and developers will assess the scope and propose a way forward with mutual consultation</li>
                    <li>all information exchange is protected via a mutual NDA</li>
                </ul>
            </div>
            <div class="col-12 col-md-8 mb-4 form-block">
                <h2>Get started with us</h2>
                <form>
                    <div class="form-row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Full Name*">
                        </div>
                        <div class="col-md-6">
                            <input type="password" class="form-control" placeholder="Email*">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Phone Number" />
                        </div>
                        <div class="col-md-6">
                            <input type="password" class="form-control" placeholder="Budget" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Country" />
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="City" />
                        </div>
                    </div>
                    <div class="form-row">
                        <textarea type="text" class="form-control" placeholder="Your Message" rows="4" cols="12">
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>
            </div>
        </div>
    </div>
</section>
<?php include'./src/includes/footer.php'?>