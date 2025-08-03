<?php include 'config/config.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?></title>
</head>

<body>
    <div class="body-div">
        <div class="login-form">
            <div class="logo-div">
                <h1>JERRY COLLEGE</h1>
            </div>


            <div class="form">
                <h2>Sign Up</h2>
                <div class="text_field_container" id="fullName_container">
                    <script>
                        textField({
                            id: 'fullName',
                            title: 'Enter full name'
                        });
                    </script>
                </div>

                <div class="text_field_container" id="emailAddress_container">
                    <script>
                        textField({
                            id: 'emailAddress',
                            title: 'Enter email address'
                        });
                    </script>
                </div>

                <div class="text_field_container" id="phoneNumber_container">
                    <script>
                        textField({
                            id: 'phoneNumber',
                            title: 'Enter phone number'
                        });
                    </script>
                </div>

                <div class="text_field_container" id="password_container">
                    <script>
                        textField({
                            id: 'password',
                            title: 'Enter password'
                        });
                    </script>
                </div>

                <div class="text_field_container" id="confirmPassword_container">
                    <script>
                        textField({
                            id: 'confirmPassword',
                            title: 'Confirm password'
                        });
                    </script>
                </div>
                <div class="page-div">
                    <span>Have an account? <a href="<?php echo $websiteUrl?>/index">Login</a></span>
                </div>

                <div class="button-div">
                    <button class="btn" title="login button">Sign Up</button>
                    <button class="btn clear" title="clear button">CLEAR</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>