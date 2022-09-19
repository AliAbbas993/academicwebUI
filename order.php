<?php include'./src/includes/header.php'?>
<section class="order-banner-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex flex-wrap justify-content-center">
                <h1>Order Page</h1>
            </div>
        </div>
    </div>
</section>
<section class="order-form-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Get your <span>paper done</span> by an expert in your field!</h3>    
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h5 class="form-step mb-3">Step 1/3 Type of work and deadline</h5> 
                <form action="" class="order-form">
                    <div class="form-group">
                        <label>Type of Work</label>
                        <select class="form-control" id="paper_type">
                            <option value="Essay">Essay</option>
                            <option value="Thesis">Thesis</option>
                            <option value="Assignment">Assignment</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Subject*</label>
                        <select class="form-control" id="paper_subject">
                            <option value="">Please select your subject</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 p-0">
                            <label>Academic level</label>
                        </div>
                        
                        <input type="radio" class="academic-level" name="academic-level" id="school" autocomplete="off">
                        <label class="btn academic-level" for="school">High School</label>

                        <input type="radio" class="academic-level" name="academic-level" id="college" autocomplete="off" checked>
                        <label class="btn academic-level" for="college">College</label>

                        <input type="radio" class="academic-level" name="academic-level" id="undergrad" autocomplete="off">
                        <label class="btn academic-level" for="undergrad">Undergraduate</label>

                        <input type="radio" class="academic-level" name="academic-level" id="masters" autocomplete="off">
                        <label class="btn academic-level" for="masters">Masters</label>

                        <input type="radio" class="academic-level" name="academic-level" id="phd" autocomplete="off">
                        <label class="btn academic-level" for="phd">ph.D</label>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-12 p-0">
                                    <label>No of Pages</label>
                                </div>
                                <div class="row mx-0">
                                    <button class="dec-btn" onclick="decrementNoOfPage()">-</button>
                                    <input class="form-control w-50" type="number" name="pages" id="noOfPages" value="1" min="1">
                                    <button class="inc-btn" onclick="incrementNoOfPage()">+</button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12 p-0">
                                    <label>Spacing</label>
                                </div>

                                <input type="radio" class="spacing" name="spacing" id="double" autocomplete="off" checked>
                                <label class="btn spacing" for="double">Double-spaced</label>
    
                                <input type="radio" class="spacing" name="spacing" id="single" autocomplete="off">
                                <label class="btn spacing" for="single">Single-spaced</label>
    
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Urgency</label>
                        <select class="form-control" id="urgency">
                            <option value="7d">7 days</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 p-0">
                            <label class="writer-label">Select the most suitable writer with en.samedayessay</label>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4 px-0">
                                <input type="radio" class="suitable-writer" name="suitable-writer" id="best-writer" autocomplete="off">
                                <label class="btn suitable-writer" for="best-writer">
                                    <div class="card p-4">
                                        <h5>Best <br /> Available</h5>
                                        <p>Free</p>
                                        <p class="writer-desc">I have used this expert before and what stands out for me is how he delivers way in advance of the time given.</p>
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-4 px-0">
                                <input type="radio" class="suitable-writer" name="suitable-writer" id="top-writer" autocomplete="off" checked>
                                <label class="btn suitable-writer" for="top-writer">
                                    <div class="card p-4">
                                        <h5>Top <br /> Writer</h5>
                                        <p>+ $3.98 per page</p>
                                        <p class="writer-desc">I have used this expert before and what stands out for me is how he delivers way in advance of the time given.</p>
                                    </div>
                                </label>                            
                            </div>
                            <div class="col-md-4 px-0">
                                <input type="radio" class="suitable-writer" name="suitable-writer" id="premium-writer" autocomplete="off">
                                <label class="btn suitable-writer" for="premium-writer">
                                    <div class="card p-4">
                                        <h5>Premium <br /> Writer</h5>
                                        <p>+ $3.98 per page</p>
                                        <p class="writer-desc">I have used this expert before and what stands out for me is how he delivers way in advance of the time given.</p>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 p-0">
                            <label>E-mail*</label>
                        </div>
                        <div class="col-12 p-0">
                            <input type="email" placeholder="example@mail.com" class="form-control w-100" id="email"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 p-0">
                            <label>Phone</label>
                        </div>
                        <div class="col-md-12 p-0">
                            <input type="tel" name="phone" id="phone" class="form-control" />
                            <div class="alert alert-info" style="display: none"></div>
                            <div class="alert alert-error" style="display: none"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="" name="" value=""/>
                        <label for="">I want to recieve order status updates via text messages</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="" name="" value=""/>
                        <label for="">I agree to <a href="./terms-and-conditions.php">Terms And Conditions</a> and <a href="./privacy-policy.php">Privacy Policy</a> *</label>
                    </div>
                    <span class="next-step">Next Step</span>
                    <h6 class="my-4">STEP 2/3 Additional paper details</h6>
                    <h6 class="my-4">STEP 3/3 Extra services</h6>
                </form>
            </div>
            <div class="col-md-4">
                <div class="side-card">
                    <div class="card-content">
                        <h5>Essay</h5>
                        <p>College</p>
                        <p>1 page / double-spaced</p>
                        <p>7 days / Thu, Dec 02</p>
                        <div class="d-flex justify-content-between">
                            <p>Premium Writer</p>
                            <span id="total-price">$7.97<span>
                        </div>
                        <div class="form-group">
                            <div class="row m-0 d-flex justify-content-between">
                                <label for="promo-code">Promo code</label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                                    <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
                                </svg>
                            </div> 
                            <input type="text" name="promo code" id="promo-code" class="form-control">
                        </div>
                    </div>
                    <div class="total-cost">
                        <span>Total cost</span>
                        <span>$21.25</span>
                    </div>
                    <div class="payment-methods">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M482.9 410.3c0 6.8-4.6 11.7-11.2 11.7-6.8 0-11.2-5.2-11.2-11.7 0-6.5 4.4-11.7 11.2-11.7 6.6 0 11.2 5.2 11.2 11.7zm-310.8-11.7c-7.1 0-11.2 5.2-11.2 11.7 0 6.5 4.1 11.7 11.2 11.7 6.5 0 10.9-4.9 10.9-11.7-.1-6.5-4.4-11.7-10.9-11.7zm117.5-.3c-5.4 0-8.7 3.5-9.5 8.7h19.1c-.9-5.7-4.4-8.7-9.6-8.7zm107.8.3c-6.8 0-10.9 5.2-10.9 11.7 0 6.5 4.1 11.7 10.9 11.7 6.8 0 11.2-4.9 11.2-11.7 0-6.5-4.4-11.7-11.2-11.7zm105.9 26.1c0 .3.3.5.3 1.1 0 .3-.3.5-.3 1.1-.3.3-.3.5-.5.8-.3.3-.5.5-1.1.5-.3.3-.5.3-1.1.3-.3 0-.5 0-1.1-.3-.3 0-.5-.3-.8-.5-.3-.3-.5-.5-.5-.8-.3-.5-.3-.8-.3-1.1 0-.5 0-.8.3-1.1 0-.5.3-.8.5-1.1.3-.3.5-.3.8-.5.5-.3.8-.3 1.1-.3.5 0 .8 0 1.1.3.5.3.8.3 1.1.5s.2.6.5 1.1zm-2.2 1.4c.5 0 .5-.3.8-.3.3-.3.3-.5.3-.8 0-.3 0-.5-.3-.8-.3 0-.5-.3-1.1-.3h-1.6v3.5h.8V426h.3l1.1 1.4h.8l-1.1-1.3zM576 81v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V81c0-26.5 21.5-48 48-48h480c26.5 0 48 21.5 48 48zM64 220.6c0 76.5 62.1 138.5 138.5 138.5 27.2 0 53.9-8.2 76.5-23.1-72.9-59.3-72.4-171.2 0-230.5-22.6-15-49.3-23.1-76.5-23.1-76.4-.1-138.5 62-138.5 138.2zm224 108.8c70.5-55 70.2-162.2 0-217.5-70.2 55.3-70.5 162.6 0 217.5zm-142.3 76.3c0-8.7-5.7-14.4-14.7-14.7-4.6 0-9.5 1.4-12.8 6.5-2.4-4.1-6.5-6.5-12.2-6.5-3.8 0-7.6 1.4-10.6 5.4V392h-8.2v36.7h8.2c0-18.9-2.5-30.2 9-30.2 10.2 0 8.2 10.2 8.2 30.2h7.9c0-18.3-2.5-30.2 9-30.2 10.2 0 8.2 10 8.2 30.2h8.2v-23zm44.9-13.7h-7.9v4.4c-2.7-3.3-6.5-5.4-11.7-5.4-10.3 0-18.2 8.2-18.2 19.3 0 11.2 7.9 19.3 18.2 19.3 5.2 0 9-1.9 11.7-5.4v4.6h7.9V392zm40.5 25.6c0-15-22.9-8.2-22.9-15.2 0-5.7 11.9-4.8 18.5-1.1l3.3-6.5c-9.4-6.1-30.2-6-30.2 8.2 0 14.3 22.9 8.3 22.9 15 0 6.3-13.5 5.8-20.7.8l-3.5 6.3c11.2 7.6 32.6 6 32.6-7.5zm35.4 9.3l-2.2-6.8c-3.8 2.1-12.2 4.4-12.2-4.1v-16.6h13.1V392h-13.1v-11.2h-8.2V392h-7.6v7.3h7.6V416c0 17.6 17.3 14.4 22.6 10.9zm13.3-13.4h27.5c0-16.2-7.4-22.6-17.4-22.6-10.6 0-18.2 7.9-18.2 19.3 0 20.5 22.6 23.9 33.8 14.2l-3.8-6c-7.8 6.4-19.6 5.8-21.9-4.9zm59.1-21.5c-4.6-2-11.6-1.8-15.2 4.4V392h-8.2v36.7h8.2V408c0-11.6 9.5-10.1 12.8-8.4l2.4-7.6zm10.6 18.3c0-11.4 11.6-15.1 20.7-8.4l3.8-6.5c-11.6-9.1-32.7-4.1-32.7 15 0 19.8 22.4 23.8 32.7 15l-3.8-6.5c-9.2 6.5-20.7 2.6-20.7-8.6zm66.7-18.3H408v4.4c-8.3-11-29.9-4.8-29.9 13.9 0 19.2 22.4 24.7 29.9 13.9v4.6h8.2V392zm33.7 0c-2.4-1.2-11-2.9-15.2 4.4V392h-7.9v36.7h7.9V408c0-11 9-10.3 12.8-8.4l2.4-7.6zm40.3-14.9h-7.9v19.3c-8.2-10.9-29.9-5.1-29.9 13.9 0 19.4 22.5 24.6 29.9 13.9v4.6h7.9v-51.7zm7.6-75.1v4.6h.8V302h1.9v-.8h-4.6v.8h1.9zm6.6 123.8c0-.5 0-1.1-.3-1.6-.3-.3-.5-.8-.8-1.1-.3-.3-.8-.5-1.1-.8-.5 0-1.1-.3-1.6-.3-.3 0-.8.3-1.4.3-.5.3-.8.5-1.1.8-.5.3-.8.8-.8 1.1-.3.5-.3 1.1-.3 1.6 0 .3 0 .8.3 1.4 0 .3.3.8.8 1.1.3.3.5.5 1.1.8.5.3 1.1.3 1.4.3.5 0 1.1 0 1.6-.3.3-.3.8-.5 1.1-.8.3-.3.5-.8.8-1.1.3-.6.3-1.1.3-1.4zm3.2-124.7h-1.4l-1.6 3.5-1.6-3.5h-1.4v5.4h.8v-4.1l1.6 3.5h1.1l1.4-3.5v4.1h1.1v-5.4zm4.4-80.5c0-76.2-62.1-138.3-138.5-138.3-27.2 0-53.9 8.2-76.5 23.1 72.1 59.3 73.2 171.5 0 230.5 22.6 15 49.5 23.1 76.5 23.1 76.4.1 138.5-61.9 138.5-138.4z"/></svg>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row feature-content">
            <div class="col-md-4 p-4">
                <h5>Secure online payment</h5>
                <p>Your online payment will be processed via a secure payment system. We don't have access to your credit card information, so it is absolutely safe to pay for your order</p>
            </div>
            <div class="col-md-4 p-4">
                <h5>Free revisions</h5>
                <p>You have two whole weeks to request for free revisions to your paper. We will revise it as many times as needed - until you are 100% satisfied with your order.</p>
            </div>
            <div class="col-md-4 p-4">
                <h5>Satisfaction guarantee</h5>
                <p>If the result does'nt match your expectations, you can request a refund within 14-30 days after your order was completed.</p>
            </div>
        </div>
    </div>
</section>
<?php include'./src/includes/footer.php'?>