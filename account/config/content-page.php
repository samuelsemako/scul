<?php if ($page=='log-in'){
    include 'connection.php';
    ?>
<?php include "config/config.php";?>

<div class="account-form-in log-div" id="next_1">
    <div class="title-div">
        <h1>Log In</h1>
        <img src="all-images/images/new_logo.png" alt="">
    </div>

    <div class="input-form-div">
        <form id="loginForm" onsubmit="_fetchUser(event)">
            <label for="matricNumber">Matric Number</label>
            <input type="text" id="loginMatric" placeholder="Matric Number">


            <label for="password">Password</label>
            <input type="password" id="loginPassword" placeholder="Password">
            <div class="forgot-pass">
                <div class="remember">
                    <input type="checkbox" name="Remember Me">
                    <label for="forgot password">Forgot Password</label>
                </div>
                <a href="?page=reset_password">Forgot Password?</a>
            </div>

            <button type="submit" class="btn">Login</button>
        </form>
        <div class="signup-link-div">
            <p onclick="_next_page('next_2')" >Don't have an account? <a href="#"> Sign Up</a></p> 
        </div>  
    </div>
</div>



<div class="account-form-in log-div" id="next_2">
    <div class="title-div">
        <h1>Sign Up</h1>
        <img src="all-images/images/new_logo.png" alt="">
    </div>

    <div class="input-form-div">
        <form id="registrationForm" onsubmit="_insert_user(event)">
            <label for="fullname" >Full Name</label>
            <input type="text" id="fullname"  placeholder="Enter Your Name" >

            <label for="phoneNumber">Phone Number</label>
            <input type="number" id="phoneNumber" placeholder="Enter Your Phone Number" >

            <label for="matric_no">Matric Number</label>
            <input type="text" id="matric_no" placeholder="Enter Your Matric Number" >

            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Enter Your Password" >

            <label for="ConfirmPassword">Confirm Password</label>
            <input type="password" id="confirmPassword" placeholder="Confirm Your Password" >

            <label for="passport">Select Picture</label>
            <input type="file" id="passport" accept=".jpg, .jpeg, .png, .gif, .bmp, .tiff, .webp, .svg, .avif"
                                        onchange="userPixPreview.UpdatePreview(this);"/>

            <button type="submit" id="submit" class="btn" >Sign Up</button>
            <p id="error-message"></p> 
        </form>

        <div class="signup-link-div">
            <p onclick="_next_page('next_1')">Already have an account? <a href="#"> Log In</a></p>
        </div>
    </div>
</div>

<?php }?>