<?php 

class allClass{
    function welcomeProfilePanel(){ ?>

        <div class="title-div">
            <div class="info-div">
            <span id="page-title"><i class="bi bi-speedometer2"></i> Admin Information</span>
                <h2>Hi, Seton Emmanuel</h2>
                <span><i class="bi bi-clock"></i> Last login Date - 2024-05-23 15:12:49</span>
            </div>
            <div class="info-div border">         
                <span>Current Time</span>
                <h2>09 : 50</h2>
                <span><i class="bi bi-calendar3"></i> Wednesday, 18 July 2024</span>
            </div>
        </div>
<?php 
    }
}
$callClass =  new allClass();

?>
