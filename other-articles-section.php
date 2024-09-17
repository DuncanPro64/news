<?php
$query = "SELECT article_id,article_title,content,date,time_posted,MAX(likes),cat_name FROM article as a
 INNER JOIN category as c ON c.cat_id=a.category_id ORDER BY time_posted DESC LIMIT 4";
$select = mysqli_query($con, $query) or die(mysqli_error($con));
while($rr=mysqli_fetch_array($select)){
    
      echo'  <div class="single-blog-post small-featured-post d-flex">
    <div class="post-thumb">
        <a href="#"><img src="img/bg-img/21.jpg" alt=""></a>
    </div>
    <div class="post-data">
        <a href="single-post.php?article_id='.$rr['article_id'].'" class="post-catagory">'.$rr['cat_name'].'</a>
        <div class="post-meta">
            <a href="#" class="post-title">
                <h6>'.$rr['article_title'].'</h6>
            </a>
            <p class="post-date"><span>'. date('g:ia', strtotime($rr['time_posted'])).'</span> | <span>'.date('F d Y', strtotime($rr['date'])).'</span></p>
        </div>
    </div>
</div>';
}
                             

?>