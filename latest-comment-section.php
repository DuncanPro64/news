<?php
    $query6 = "SELECT * FROM comment ORDER BY c_timestamp DESC LIMIT 4";
    $row = mysqli_query($con,$query6) or die(mysqli_error($con));
    
    while($rr=mysqli_fetch_array($row)){
    echo'<div class="single-comments d-flex">
        <div class="comments-thumbnail mr-15">
            <img src="img/bg-img/29.jpg" alt="">
        </div>
        <div class="comments-text">
            <a href="#">'.$rr['content'].'<br><span>on</span>'.date('F d ,Y', strtotime($rr['date'])).'</a>
            <p>'.date('F d ,Y', strtotime($rr['date'])).'</p>
        </div>
    </div>';
    }
    ?>