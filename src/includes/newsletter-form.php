<?php
    include 'db-connection.php';

    $email = '';
    $email_error = '';
    $_SESSION['success'] = '';
    $_SESSION['reject'] = '';

    if (isset($_POST['send'])){          
        if(empty($_POST['email'])){
            $email_error = "This is a required field";
        }
        else if (!filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL)){
            $email_error = "Please enter valid email address";
        }
        else{
            $email = $_POST['email']; 
        }
        if(!empty($email)){
            $insert_query = "INSERT INTO newsletter (email) VALUES ('$email');";
            $result = mysqli_query($con, $insert_query);
                if ($result){
                    $_SESSION['success'] = "Thank You for subscribe";
                    $email = '';
                }    
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
<div class="newsletter-form-block">
    <div class="newsletter-content">
        <h3>NewsLetter</h3>
        <p>subscribe to our newsletter</p>
    </div>
    <div class="newsletter-form">
        <form id="contact-form" method="POST" action="index.php#footer">
            <div class="form-row">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="your email*" id="email" aria-describedby="emailHelp" name="email" required value="<?php echo htmlspecialchars($email); ?>">                    
                    <?php if($email_error){?>
                        <div class="error">
                            <span><?php echo $email_error; ?></span>
                        </div>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="send">Subscribe</button>
                </div>
            </div>
        </form>
    </div>
</div>