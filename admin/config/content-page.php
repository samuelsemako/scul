<?php if ($page=='log-in'){?>

    <div class="inner log-div" id="next_1">
        <div class="logo">
            <img src="all-images/images/logo2.png" alt="logo">
        </div>

        <h2>Administrative Log-in</h2>
        
        <div class="input-div">
            <form onsubmit="_fetchUser(event)">
            <div class="container-div">
                <div class="title-div"><i class="bi-envelope"></i> Email Address</div>
                <input type="text" class="text_field" id="staffEmail" placeholder="Enter Your Email Address"/>
            </div>
            
            <div class="container-div">
                <div class="title-div"><i class="bi-lock"></i> Password</div>
                <input type="password" class="text_field" id="staffPassword" placeholder="Enter Your Password"/>
            </div>

            <div class="btn-div">
                <button class="btn" title="Login"><i class="bi-check" type ="submit"></i> Log-In</button>
            </div>
            
        </div>
        
        <div class="remember-forgot">                    
            <div class="forgot">Forgot Password? <span onclick=" _next_page('next_2')" >RESET PASSWORD</span></div>               
        </div>
      </form>
    </div>


    <div class="inner log-div"  id="next_2">
       
        <h2>Reset Password</h2>
        
        <div class="input-div">
            <div class="container-div">
                <div class="title-div"><i class="bi-envelope"></i> Email Address</div>
                <input type="text" class="text_field" placeholder="Enter Your Email Address"/>
            </div>
            

            <div class="btn-div">
                <button class="btn" title="Login" onclick="_get_page()"><i class="bi-check"></i> Proceed</button>
            </div>
            
        </div>
        
        <div class="remember-forgot">                    
            <div class="forgot">Existing User?<span onclick=" _next_page('next_1')" > LOGIN</span></div>               
        </div>
    </div>

<?php }?> 



<?php if ($page=='reset_password'){?>

    <div class="container">
        <div class="inner">

            <div class="reset">
            <div class="reset-div"><i class="bi bi-person-fill-lock"></i> RESET PASSWORD</div>
            <i class="bi bi-x" onclick="alert_close()"></i>
            </div>

            <div class="message-box">
                <p><i class="bi bi-person-fill-lock"></i> Dear <span>Barry Job Michael,
                    </span> an <span>OTP</span> has been sent to your email has being sent to your email address
                    (<span>barrygodlikej@gmail.com</span>) to reset your password.
                    Kindly check your INBOX or SPAM to comfirm.
                </p>
            </div>

            
            <div class="otp">
                <label for="">ENTER OTP:</label>
                <input type="text" placeholder="Enter OTP">

            <div class="resend-otp">
                <p><span>OTP</span> not received? <span>
                <a href="#" title="resend"><i class="bi-send"></i> RESEND OTP </a></span></p>
            </div>

            </div>

            
            <div class="otp create">
                <label for="">CREATE PASSWORD:</label>
                <input type="text" placeholder="CREATE PASSWORD">
                <P>Atleast 8 characters required including lower & upper cases and special characters and number</P> 
            </div>

            <div class="otp confirm">
                <label for="">COMFIRM PASSWORD:</label>
                <input type="text" placeholder="COMFIRM PASSWORD">
            </div>

            <button class="btn" title="Reset password" onclick="_success_page()"><i class="bi-check"></i>Reset Password</button>
            
            
        </div>      
    </div>

<?php }?>

<?php if ($page=='password_reset_completed') {?>

    <div class="container success">
        <div class="inner">

            <div class="gif-div">
                <img src="all-images/images/new.gif" alt="successful">
            </div>

            <div class="text-div">
                <h1>PASSWORD RESET SUCCESSFUL!</h1>
            </div>

            <button class="btn suc-btn" title="log-in" onclick="_next_page('next_1'); alert_close()"><i class="bi-check"></i>Login Now</button>

        </div>
    </div>

<?php }?>

