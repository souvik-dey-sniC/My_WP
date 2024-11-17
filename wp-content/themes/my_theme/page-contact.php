<?php
// Template Name: Contact Page
   session_start();
   get_header();
?>

<?php
   if(isset($_SESSION['msg'])){
    ?>
    <script>
        alert("<?php echo $_SESSION['msg'];?>");
    </script>
    <?php
    // session_unset();
    // session_destroy();
   }
?>
<script>
    // alert()
</script>
<div class="contact-content font1 max-width-1 m-auto">
        <div class="max-width-1 m-auto mx-1">
            <h2>Feel Free to Contact Us</h2>
            <div class="contact-form">
                <form action="" method="post">
                <div class="form-box">
                    <input type="text" name="name" placeholder="Enter Your Name">
                </div>
                <div class="form-box">
                    <input type="text" name="contact" placeholder="Enter Your Phone Number">
                </div>
                <div class="form-box">
                    <input type="text" name="email" placeholder="Enter Your Email Id">
                </div>
                <div class="form-box">
                    <textarea name="message" cols="30" rows="10" placeholder="How may we help you?"></textarea>
                </div>
                <div class="form-box">
                    <button class="btn">Submit</button>
                </div>
                </form>

            </div>
        </div>

    </div><br>
<?php
   get_footer();
?>