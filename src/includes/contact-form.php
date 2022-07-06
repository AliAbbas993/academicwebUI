<?php
    include ('/src/includes/db-connection.php');
    // function validate_phone_number($phone)
    // {
    //     $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
    //     $phone_to_check = str_replace("-", "", $filtered_phone_number);
    //     if (strlen($phone_to_check) < 11 || strlen($phone_to_check) > 15) {
    //         return false;
    //     } else {
    //     return true;
    //     }
    // }
    function validate_budget($budget)
    {
        $filtered_budget = filter_var($budget, FILTER_SANITIZE_NUMBER_INT);
        return $filtered_budget;
    }

    $name = '';
    $email = '';
    // $phone = '';
    $budget = '';
    // $country = '';
    // $city = '';
    $msg = '';
    $name_error = '';
    $email_error = '';
    // $phone_error = '';
    $budget_error = '';
    $_SESSION['success'] = '';
    $_SESSION['reject'] = '';

    if (isset($_POST['send'])){          
        if(empty($_POST['name'])){
            $name_error = "This is a required field";
        }
        else if(!preg_match("/^([a-zA-Z' ]+)$/", $_POST['name'])){
            $name_error = "Please enter a valid name";
        }
        else{
            $name = $_POST['name'];
        }
        if(empty($_POST['email'])){
            $email_error = "This is a required field";
        }
        else if (!filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL)){
            $email_error = "Please enter valid email address";
        }
        else{
            $email = $_POST['email']; 
        }
        // $phone = $_POST['phone'];  
        $budget = $_POST['budget'];
        // $country = $_POST['country'];
        // $city = $_POST['city'];
        $msg = $_POST['msg'];

        if(!empty($name) && !empty($email)){
            // if(!empty($phone)){
            //     if(!preg_match("/^[0-9]{11,15}$/", $phone)){
            //         $phone_error = 'Please enter valid phone number';
            //     }
            //     else{
            //         $insert_query = "INSERT INTO contactus (name, email, budget, msg) VALUES ('$name', '$email', '$budget', '$msg');";
            //         $result = mysqli_query($con, $insert_query);
            //         if ($result){
            //             $_SESSION['success'] = "Thank You for Contacting Us.. Your Message Has Been Submitted Successfully";
            //             $name = '';
            //             $email = '';
            //             // $phone = '';
            //             $budget = '';
            //             // $country = '';
            //             // $city = '';
            //             $msg = '';
            //         }
            //     }
            // }
            // else{
            
                echo "<script type='text/javascript'>
                        swal({
                            title: 'Congratulations!',
                            text: 'Your message has been submitted successfully.',
                            icon: 'success',
                            button: 'Ok',
                            // timer: 2000
                        });
                </script>";
                // $insert_query = "INSERT INTO contactus (name, email, budget, msg) VALUES ('$name', '$email', '$budget', '$msg')";
                // $result = mysqli_query($con, $insert_query);
                // if ($result){
                //     $_SESSION['success'] = "Thank You for Contacting Us.. Your Message Has Been Submitted Successfully";
                    $name = '';
                    $email = '';
                    // $phone = '';
                    $budget = '';
                    // $country = '';
                    // $city = '';
                    $msg = '';
                // }
            // }
        }
    }
?>
<?php
    if($_SESSION['reject']){?>
        <div class="alert alert-danger alert-dismissible" role="alert">
        <strong>Error!</strong> <?php echo $_SESSION['reject']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
<?php }
    else if($_SESSION['success']){?>
        <div class="alert alert-success alert-dismissible" role="alert">
        <strong>Success!</strong> <?php echo $_SESSION['success']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
<?php } ?>
<form id="contact-form" method="POST" action="/">
    <div class="form-row">
        <div class="col-md-6 position-relative">
            <input type="text" class="form-control" placeholder="Full Name*" id="name" name="name" required value="<?php echo htmlspecialchars($name); ?>">
            <?php if($name_error){?>
                <div class="error">
                    <span><?php echo $name_error; ?></span>
                </div>
            <?php } ?>
        </div>
        <div class="col-md-6 position-relative">
            <input type="email" class="form-control" placeholder="Email*" id="email" aria-describedby="emailHelp" name="email" required value="<?php echo htmlspecialchars($email); ?>">
            <?php if($email_error){?>
                <div class="error">
                    <span><?php echo $email_error; ?></span>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="form-row">
        <!-- <div class="col-md-6 position-relative">
            <input type="tel" class="form-control" placeholder="Phone Number" id="phone" name="phone" required value="<?php //echo htmlspecialchars($phone); ?>"/>
            <?php //if($phone_error){?>
                <div class="error">
                    <span><?php //echo $phone_error; ?></span>
                </div>
            <?php //} ?>
        </div> -->
        <div class="col-md-6 position-relative">
            <!-- <input type="number" class="form-control" placeholder="Budget" id="budget" name="budget" required value="<?php //echo htmlspecialchars($budget); ?>"/> -->
            <select name="budget" id="budget" class="form-control" required placeholder="budget" onchange="<?php echo htmlspecialchars($budget); ?>">
                <option value="20000">up to $20,000</option>
                <option value="40000">$20,000 - $40,000</option>
                <option value="60000">$40,000 - $60,000</option>
                <option value="70000">$60,000+</option>
                <option value="other">do not disclose</option>
            </select>
        </div>
    </div>
    <!-- <div class="form-row">
        <div class="col-md-6 position-relative">
            <select class="form-control w-100" id="country" name="country*" onselect="getCountries(e)" value="<?php //echo htmlspecialchars($country); ?>"></select>
        </div>
        <div class="col-md-6 position-relative">
            <input type="text" class="form-control" placeholder="City*" id="city" name="city" required value="<?php //echo htmlspecialchars($city); ?>"/>
        </div>
    </div> -->
    <div class="form-row">
        <div class="col-md-12 position-relative">
            <textarea class="form-control" placeholder="Your Message..." rows="7" cols="12" id="msg" required name="msg" value="<?php echo htmlspecialchars($msg); ?>"></textarea>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 position-relative">
            <label for="nda" class="d-flex align-items-center justify-content-start m-0 nda-field">
                <input type="checkbox" class="form-control m-0 d-inline-block" name="nda" id="nda">
                <span class="ml-3">request NDA</span>
            </label>
        </div>
    </div>
    <div class="d-flex justify-content-end">
        <button type="submit" class="rfq-btn" name="send">Send request</button>
    </div>
</form>        
                    