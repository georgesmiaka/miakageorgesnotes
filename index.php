<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Georgesnotes</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">
    <link href="frontend/style/default.css" rel="stylesheet" type="text/css">
    <link href="frontend/style/home.css" rel="stylesheet" type="text/css">
    <link href="frontend/style/responsive.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Navbar -->
    <div class="navbar_div">
        <?php include 'frontend/view/component/navbar.php'; ?>
        <?php include 'frontend/view/component/component.php'; ?>
        <?php include 'backend/connect/conn.php'; ?>
        <?php //include 'backend/admin/admin.php'; 
        ?>-
    </div>
    <div class="mainbody_div">
        <!-- Page title -->
        <div class="page_title">
            <h1>Home</h1>
        </div>
        <div class="space"></div>
        <!-- Block1: Wall -->
        <div class="wall">
            <!-- Posts-->

            <?php
            $wallArticles = getWallArticles();
            // Showing posts
            showWallArticles($wallArticles);
            ?>
            <!-- Footer -->
            <div class="footer_wall"><?php include 'frontend/view/component/footer.php' ?></div>
        </div>
        <!-- Block2: suggestions -->
        <div class="suggestions article_text">
            <?php 
            $suggestedArticles = getSuggestedArticles();
            $lastTweet = getLastTweet();
            $lastPost = getLastPost();
            ?>
            <!-- Tree articles as suggestion -->
            <h3>Suggested for you</h3>
            <div class="space"></div>
            <?php
            showSuggestedArticle($suggestedArticles);
            ?>
            <!-- space -->
            <div class="space"></div>
            <hr class="divider">
            <div class="space"></div>
            <!-- Last twet -->
            <h3>Last tweet</h3>
            <?php
            showSuggestedArticle($lastTweet);
            ?>
            <!-- space -->
            <div class="space"></div>
            <hr class="divider">
            <div class="space"></div>
            <!-- Last post from IG and FB -->
            <h3>Last post</h3>
            <?php
            showSuggestedArticle($lastPost);
            ?>
            <!-- Footer -->
            <div class="footer_suggestions">
                <div class="space"></div>
                <hr class="divider">
                <div class="space"></div>
                <?php include 'frontend/view/component/footer.php' ?>
            </div>
            <!-- space -->
            <div class="space_footer"></div>
        </div>

    </div>
    <!-- Navbar_bootom -->
    <div>
        <?php include 'frontend/view/component/navbar_bottom.php'; ?>
    </div>
</body>

</html>