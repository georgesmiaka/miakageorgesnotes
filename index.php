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
</head>

<body>
    <!-- Navbar -->
    <div class="navbar_div">
        <?php include 'frontend/view/component/navbar.php'; ?>
    </div>
    <!-- Navbar_bootom -->
    <div>
        <?php include 'frontend/view/component/navbar_bottom.php'; ?>
    </div>

    <div class="mainbody_div">
        <!-- Block1: Wall -->
        <div class="wall">
            <!-- Post1 -->
            <div class="post_wall">
                <p class="post_category">Programming</p>
                <h1>Presentation</h1>
                <h5>Unleashing Creativity and Innovation: Exploring my Programming Journey and Passion for Innovation.</h5>
                <p>By <b class="post_author">Georges Miaka</b>
                    <spam class="post_datum">June 13, 2023 - 5min read</spam>
                </p>
                <div class="card">
                    <img src="frontend/assets/images/prog.jpg" class="card-img-top" alt="image_post">
                    <div class="card-body">
                        <p class="card-text">
                            As a software developer, I constantly strive to keep up with the latest trends and
                            seek out new challenges. Programming is my passion, and I find creative freedom in it.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Space & divider -->
            <div class="space"></div>
            <hr class="divider">
            <div class="space"></div>
            <!-- Post2 -->
            <div class="post_wall">
                <p class="post_category">Discovery</p>
                <h1>Natural structures</h1>
                <h5>Unraveling the Mysteries: A Journey into Scientific Discovery and Advancement.</h5>
                <p>By <b class="post_author">Georges Miaka</b>
                    <spam class="post_datum">June 13, 2023 - 5min read</spam>
                </p>
                <div class="card">
                    <img src="frontend/assets/images/science1.png" class="card-img-top" alt="image_post">
                    <div class="card-body">
                        <p class="card-text">
                            As a science enthusiast, I have always been fascinated by the intricacies of
                            the natural world and the way that science helps us understand it.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Space & divider -->
            <div class="space"></div>
            <hr class="divider">
            <div class="space"></div>
            <!-- post3 -->
            <div class="post_wall">
                <p class="post_category">Photography</p>
                <h1>Exploring the World</h1>
                <h5>Framing the World: Exploring the Art and Craft of Photography to Capture
                    Moments of Beauty and Tell Stories Through Images.</h5>
                <p>By <b class="post_author">Georges Miaka</b>
                    <spam class="post_datum">June 13, 2023 - 5min read</spam>
                </p>
                <div class="card">
                    <img src="frontend/assets/images/me.png" class="card-img-top" alt="image_post">
                    <div class="card-body">
                        <p class="card-text">
                            My love for photography has also inspired me to explore new places and seek out unique and interesting subjects to photograph.
                            Whether I'm writing code, exploring the wonders of the natural world, or capturing the essence of a unique subject through
                            my camera lens, I am constantly discovering new ways to challenge myself and expand my horizons.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Space & divider -->
            <div class="space"></div>
            <hr class="divider">
            <div class="space"></div>
            <!-- Footer -->
            <div class="footer_wall"><?php include 'frontend/view/component/footer.php' ?></div>
        </div>
        <!-- Block2: suggestions -->
        <div class="suggestions">
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
</body>

</html>