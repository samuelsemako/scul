
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include "meta.php"?> 
<title>gethostel.com </title>
<script src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>
</head>
<body>

          

   <section class="header-sec">
   <div class="header-div">
        <div class="inner">

            <div class="logo-dash-pro">
                <div class="logo">
                    <img src="all-images/images/logo2.png" alt="Gethostel Logo">
                </div>
            </div>

            <div class="middle-div">

                <ul class="dash-pro">
                    <li class="dash">
                        <a href="index.php" title="dashboard">
                        <i class="bi bi-speedometer2"></i></a>
                        <p>Dashboard</p>
                    </li>

                    <li class="pro">
                        <a href="#" title="profile">
                        <i class="bi bi-person-circle"></i></a>
                        <p>Profile</p>
                    </li>
                </ul>

                <ul class="icon">
                    <li>
                        <a href="#" title="setting">
                        <i class="bi bi-gear"></i></a>
                    </li>

                    <li>
                        <a href="#" title="notification">
                        <i class="bi bi-bell"></i></a>
                    </li>
                </ul>

            </div>

            <hr>

            <div class="icon-profile">

                    <div class="pic">
                        <img src="all-images/images/me.jpg" alt=" profile picture">
                    </div>
                    <div class="txt-div">
                        <h4>Seton Emmanuel</h4>
                        <p>Superadmin</p>
                    </div>
               
            </div>


        </div>

    </div>
   </section>

    <section class="body-sec">
        <div class="body-con">
            

            <div class="first">
                <ul class="inner">
                    <li>
                        <a href="index.php" title="dashboard">
                        <i class="bi bi-speedometer2"></i></a>
                        <p>Dashboard</p>
                    </li>

                    <li>
                        <a href="staff.php" title="staff">
                        <i class="bi bi-people-fill"></i></a>
                        <p>Staff</p>
                    </li>

                    <li>
                        <a href="#" title="hostel">
                        <i class="bi bi-bank2"></i></a>
                        <p>Hostel</p>
                    </li>

                    <li>
                        <a href="faqs.php" title="faq">
                        <i class="bi bi-record-circle"></i></a>
                        <p>FAQ</p>
                    </li>

                    <li>
                        <a href="blog.php" title="blog">
                        <i class="bi bi-book"></i></a>
                        <p>Blog</p>
                    </li>
                </ul>
            </div>
                
            <div class="second">
                <div class="inner">
                    <div class="admin">
                        <div class="content">
                        <div class="stt">
                                <a href=""><i class="bi bi-question-circle"></i></a>
                                <p>Staff / Administrator</p>
                        </div>

                            <h1>SetonTECH</h1>

                            <div class="stt date">
                                <a href=""><i class="bi bi-clock"></i></a>
                                <p>Last login Date - 2024-05-23 15:12:49</p>
                            </div>
                        </div>

                        <div class="content time">
                            <p>Current Time</p>
                            <h2>09 : 50</h2>
                            <p>Wednesday, 18 July 2024</p>
                        </div>

                    </div>

                    <div class="status">
                        <div class="con">
                        <p>SELECT STATUS</p> 
                        <a href="" title="Select"><i class="bi-check"></i></a>
                        </div>
                        
                            <input type="text" name="search" placeholder="Type here to search..">
                    
                    </div>

                    <div class="create-admin">
                    <div class="create faq1"> <a href=""><i class="bi-question-circle"></i>FAQ'S LIST</a></div>
                        <div class="create faq2"><a href="" title="Add NEw FAQ"><i class="bi-plus-square"></i>ADD NEW FAQ</a></div>
                    </div>

                    <div class="admin-detail center">
                        <div class="accordion">
                            <div class="faq">
                                <div class="content">
                                    <div class="number"><p>1</p></div>
                                    <div class="answer"><span><i class="bi-people"></i> We are here to help</span></div>
                                </div>
                                
                                <div class="content edit">
                                    <a href="" title="View"><i class="bi-plus"></i></a>
                                    <div class="edit-btn"><a href="" title="Edit"><i class="bi-person"></i></a>EDIT</div>
                                </div>
                            </div>

                            <div class="main-con">
                                <p>The difference between Object.groupBy() and Map.groupBy() is:
                                    Object.groupBy() groups elements into a JavaScript object.
                                    Map.groupBy() groups elements into a Map object.
                                
                                    Clone this repo Not Fork
                                    You have been given starter code, use it , modify it as you work on this project
                                    Test and commit your changes on this repo
                                    Project Setup:
                                    1. Create a well-structured Node.js project directory with your server-side code.
                                    2. Install required dependencies including express, mysql, body-parser, and a password hashing library (e.g., bcryptjs).
                                    3. Configure a connection to your MySQL database.
                                    Database Schema:
                                    1. Create Users table with columns for id (primary key), username (unique), and password (hashed).
                                    2. Create an Expenses table with columns for id (primary key), user_id (foreign key referencing Users.id), amount, date, and category.
                                    User Authentication:
                                    1. Implement user registration and login functionalities (covered in previous assignment).
                                    2. Securely store passwords using hashing techniques.
                                    Expense Management:
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


        </div>
    </section>
   


  
</body>
</html>