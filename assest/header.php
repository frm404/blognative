<header class="blog-header border-bottom shadow-sm bg-white">
    <div class="container-fluid" style="padding-left: 3rem; padding-right:3rem">

        <div class="d-flex flex-column flex-md-row align-items-center py-2">
            <a href="index.php" class="my-0 mr-md-auto" style="width: 6rem;">
                <img src="img/logo/logo.png" alt="dev culture logo" style="width: 80%;height: auto;">
            </a>

            <?php if ($loggedin && $_SESSION["username"] == 'admin') : ?>

                <nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-2 px-5 text-muted" href="index.php">Home</a>
                    <a class="p-2 px-5 text-muted" href="categories.php">Category</a>
                    <a class="p-2 px-5 text-muted" href="article.php">Article</a>
                    <a class="p-2 px-5 text-muted" href="author.php">Author</a>
                </nav>

            <?php else : ?>
                <nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-2 px-5 text-muted" href="articleOfCategory.php">Articles</a>
                </nav>
                <nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-2 px-5 text-muted" href="gantipass.php">Ganti Password</a>
                </nav>

            <?php endif;  ?>

            <a class="btn btn-outline-success" href="<?= ($loggedin && $_SESSION["username"] == 'admin') ? 'Logout.php' : 'login.php'; ?>">
                <?= ($loggedin && $_SESSION["username"] == 'admin') ? 'Logout' : 'Login Admin'; ?>
            </a>

        </div>
    </div>
</header>