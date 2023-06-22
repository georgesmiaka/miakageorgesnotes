<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Georgesnotes - Projects</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">
    <link href="../../style/default.css" rel="stylesheet" type="text/css">
    <link href="../../style/storie.css" rel="stylesheet" type="text/css">
    <link href="../../style/responsive.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Navbar -->
    <div class="navbar_div">
        <?php include '../component/navbar_stories.php'; ?>
    </div>
    <div class="mainbody_div">
        <!-- Block1: Wall -->
        <div class="stories_category">
            <a href="/frontend/view/page/stories/programming.php">
                <div class="stories_category_1">
                    <h5 class="storie_card_category_title"> Programming</h5>
                    <div class="card">
                        <img src="/frontend/assets/images/prog1.png" class="card-img-top" alt="image_post">
                        <!--<div class="card-body">
                        <p class="card-text article_text">
                    </div>-->
                    </div>
                </div>
            </a>
            <a href="/frontend/view/page/stories/science.php">
                <div class="stories_category_2">
                    <h5 class="storie_card_category_title"> Science</h5>
                    <div class="card">
                        <img src="/frontend/assets/images/science1.png" class="card-img-top" alt="image_post">
                        <!--<div class="card-body">
                        <p class="card-text article_text">
                    </div>-->
                    </div>
                </div>
            </a>

            <a href="/frontend/view/page/stories/photography.php">
                <div class="stories_category_3">
                    <h5 class="storie_card_category_title"> Photography</h5>
                    <div class="card">
                        <img src="/frontend/assets/images/photo.png" class="card-img-top" alt="image_post">
                        <!--<div class="card-body">
                        <p class="card-text article_text">
                    </div>-->
                    </div>
                </div>
            </a>

        </div>
        <!-- Space & divider -->
        <div class="space"></div>
        <hr class="divider divider_footer">
        <div class="space"></div>
        <!-- Footer -->
        <div><?php include '../component/footer.php' ?></div>
    </div>
    <!-- space -->
    <div class="space_footer"></div>
    <!-- Navbar_bootom -->
    <div>
        <?php include '../component/navbar_bottom_stories.php'; ?>
    </div>
</body>

</html>