
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <title>Vivify Blog</title>

    <!-- Bootstrap core CSS -->

    <!-- Custom styles for this template -->
    <link rel='stylesheet' href='styles/styles.css' />
</head>


<body>

<header>
    <?php include 'header.php'?>
</header>

<main role="main" class="container">

    <div class="row">

        <div class="col-sm-8 blog-main">

            <div class="blog-post">
            </div><!-- /.blog-post -->
                <?php include 'single-post.php';?>
            <div class="blog-post">
                <?php include 'posts.php';?>
            </div><!-- /.blog-post -->

            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>

        </div><!-- /.blog-main -->


        <!-- /.blog-sidebar -->
       <?php include 'sidebar.php';?>
    </div><!-- /.row -->

</main><!-- /.container -->
<footer class="blog-footer">
    <?php include 'footer.php';?>
</footer>

</body>
</html>
