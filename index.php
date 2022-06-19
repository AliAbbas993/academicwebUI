<?php include'./src/includes/header.php'?>
<section class="about-us-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-4">
                <div class="content-block text-center">
                    <div class="about-us-title-content">
                        <h1>Shoreditch Technology</h1>
                        <h3>Provide the simplest solution for the most complex problem!</h3>
                        <button class="btn-blue">
                            <a href="./" target="_blank" class="link-blue">Get started</a>
                        </button>
                        <button class="btn-blue">
                            <a href="./" target="_blank" class="link-blue">Learn more</a>
                        </button>
                    </div>
                    <lottie-player src="./src/js/banner.json" background="transparent" speed="1" loop autoplay></lottie-player>
                    <h4>Digitize your business today and start growing!</h4>
                    <p class="py-3">"Shoreditch Technology is an agile start-up technology company. A fast-growing, energetic digital company that specializes in Digital Transformation, Business Consultancy & Advisory Services. Shoreditch Technology helps their client to design, build, and launch innovative digital products that help them engage their customers and keep them ahead of their competitors in an ever-evolving operating landscape."</p>
                    <span>- Qaiser Sajid (CEO), Shoreditch Tech</span>
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
<?php include './contact-us.php'?>
<?php include './src/includes/footer.php'?>