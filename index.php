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
        <?php include 'backend/conn.php'; ?>
        <?php //include 'backend/admin.php'; ?>-
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
            $result = getAllArticles(); 
            // Showing posts
            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                echo '<div class="post_wall">';
                echo '<h2>' . $row['title'] . '</h2>';
                echo '<h5>' . $row['subtitle'] . '</h5>';
                echo '<p class="post_author_datum"> By ';
                echo '<b class="post_author">' . $row['author'] . '</b>';
                echo '<spam class="post_datum">' . $row['created_at'] . '</spam>';
                echo '</p>';
                echo '<p class="post_category">' . $row['category'] . '</p>';
                echo '<div class="card">';
                echo '<img class="card-img-top" alt="image_post" src="https://drive.google.com/uc?export=view&id=' . $row['cover'] . '"/>';
                echo '<div class="card-body">';
                echo '<p class="card-text article_text">' . $row['coverdescription'] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                
                // Space & divider
                echo '<div class="space"></div>';
                echo '<hr class="divider">';
                echo '<div class="space"></div>';
            }
            ?>

            <!-- Footer -->
            <div class="footer_wall"><?php include 'frontend/view/component/footer.php' ?></div>
        </div>
        <!-- Block2: suggestions -->
        <div class="suggestions article_text">
            <!-- Tree articles as suggestion -->
            <h3>Suggested for you</h3>
            <div class="space"></div>
            <div class="articles_suggestion">
                <div class="article_suggesttion_x">
                    <img src="frontend/assets/images/datastruct.jpg" class="pict_article_suggest" alt="image_art_suggest">
                    <span class="title_article_suggest">Static data Structures
                        <a class="link_article_suggest" href="https://www.facebook.com/photo/?fbid=144564908553344&set=pb.100089995069982.-2207520000.">view</a></span>
                </div>

                <div class="article_suggesttion_x">
                    <img src="frontend/assets/images/sunset.jpg" class="pict_article_suggest" alt="image_art_suggest">
                    <span class="title_article_suggest">Amaizing sunset at Lilby
                        <a class="link_article_suggest" href="https://www.facebook.com/photo/?fbid=111015561908279&set=pb.100089995069982.-2207520000.">view</a></span>
                </div>

                <div class="article_suggesttion_x">
                    <img src="frontend/assets/images/memocraft.png" class="pict_article_suggest" alt="image_art_suggest">
                    <span class="title_article_suggest">The virtual version of G
                        <a class="link_article_suggest" href="https://www.twitter.com/memocraftapp">view</a></span>
                </div>
            </div>
            <!-- space -->
            <div class="space"></div>
            <hr class="divider">
            <div class="space"></div>
            <!-- Last twet -->
            <h3>Last tweet</h3>
            <div class="article_suggesttion_x">
                <img src="frontend/assets/images/memocraft.png" class="pict_article_suggest" alt="image_art_suggest">
                <span class="title_article_suggest">Memocraft - The App
                    <a class="link_article_suggest" href="https://www.twitter.com/memocraftapp">view</a></span>
            </div>
            <!-- space -->
            <div class="space"></div>
            <hr class="divider">
            <div class="space"></div>
            <!-- Last post from IG and FB -->
            <h3>Last post</h3>
            <div class="article_suggesttion_x">
                <img src="frontend/assets/images/datastruct.jpg" class="pict_article_suggest" alt="image_art_suggest">
                <span class="title_article_suggest">Static data Structures
                    <a class="link_article_suggest" href="https://www.facebook.com/photo/?fbid=144564908553344&set=pb.100089995069982.-2207520000.">view</a></span>
            </div>
            <div class="article_suggesttion_x">
                <img src="frontend/assets/images/sunset.jpg" class="pict_article_suggest" alt="image_art_suggest">
                <span class="title_article_suggest">Tropea by night
                    <a class="link_article_suggest" href="https://www.facebook.com/photo/?fbid=111015561908279&set=pb.100089995069982.-2207520000.">view</a></span>
            </div>
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