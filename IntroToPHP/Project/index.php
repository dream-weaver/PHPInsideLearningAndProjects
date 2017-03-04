<?php 
    include("PHPInclude/header.php");
    include("PHPInclude/data_posts.php");
?>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

            <?php foreach($blogPosts as $post ){?>
            
          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $post["blogPostTitle"]; ?></h2>
              <p class="blog-post-meta"><?php echo $post["blogPostDate"]; ?> by <a href="#"><?php echo $post["blogPostAuthor"]; ?></a></p>
            <?php echo $post["blogPostContent"] ?>
          </div><!-- /.blog-post -->
            
            <?php  }?>
            
          <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>

        </div><!-- /.blog-main -->

       <?php include("PHPInclude/sidebar.php") ?>

      </div><!-- /.row -->

    </div><!-- /.container -->

    <?php include("PHPInclude/footer.php"); ?>