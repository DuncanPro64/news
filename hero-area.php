    <div class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Breaking News Widget -->
                    <div class="breaking-news-area d-flex align-items-center">
                        <div class="news-title">
                            <p>Breaking News</p>
                        </div>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <?php
            $row = mysqli_query($con, "SELECT c.cat_name, c.cat_id, e.f_name,e.email, e.l_name, d.count,o.content, o.article_title,o.date,o.timestamp,o.likes,o.category_id,o.article_id FROM article as o
                    INNER JOIN category AS c
                    ON o.category_id=c.cat_id 
                    INNER JOIN comment AS d
                  ON o.article_id=d.article_id
                  INNER JOIN editor AS e
                  ON e.email=o.editor_id ") or die(mysqli_error($con));



                        while($rr=mysqli_fetch_array($row)){
                            ?>
                                <li><a href="single-post.html"><?php echo $rr['article_title']; ?></a></li>
                            <?php }?>
                                
                            </ul>
                        </div>
                    </div>

                    <!-- Breaking News Widget -->
                    <div class="breaking-news-area d-flex align-items-center mt-15">
                        <div class="news-title title2">
                            <p>World News</p>
                        </div>
                        <div id="internationalTicker" class="ticker">
                            <ul>
                                                            <?php
                $row = mysqli_query($con, "SELECT c.cat_name, c.cat_id, e.f_name,e.email, e.l_name, d.count,o.content, o.article_title,o.date,o.timestamp,o.likes,o.category_id,o.article_id FROM article as o
                        INNER JOIN category AS c
                        ON o.category_id=c.cat_id 
                        INNER JOIN comment AS d
                      ON o.article_id=d.article_id
                      INNER JOIN editor AS e
                      ON e.email=o.editor_id ") or die(mysqli_error($con));



                while($rr=mysqli_fetch_array($row)){
                    ?>
                                <li><a href="single-post.php?article_id=<?php echo $rr['article_id']; ?>"><?php echo $rr['article_title']; ?></a></li>
                            <?php }?>
                                <li><a href="single-post.html">Computer scients have finally solved the long standing travelling sales man problem</a></li>
                                <li><a href="single-post.html">Microsoft looses billions of money after computer hackers take  down machines and servers operating on windows ten </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Hero Add -->
                <div class="col-12 col-lg-4">
                    <div class="hero-add">
                        <a href="#"><img src="img/bg-img/hero-add.gif" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>