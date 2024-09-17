<?php
    $row = mysqli_query($con, "SELECT * FROM article ORDER BY likes DESC,time_posted DESC LIMIT 4");

            $i = 1;
            while($rr=mysqli_fetch_array($row)){
                echo'<!-- Single Popular Blog -->
                <div class="single-popular-post">
                    <a href="#">
                        <h6><span>'.$i .'</span>'.$rr['article_title'].'</h6>
                    </a>
                    <p>'.date('F d ,Y', strtotime($rr['date'])).'</p>
                </div>';
                $i++;
            }
            ?>