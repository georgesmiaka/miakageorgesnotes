<?php
// Function to show wall articles
function showWallArticles($article) {
    while ($row = $article->fetchArray(SQLITE3_ASSOC)) {
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
}
// Function to show suggested article
function showSuggestedArticle($article)
{
    while ($row2 = $article->fetchArray(SQLITE3_ASSOC)) {
        echo '<div class="article_suggesttion_x">';
        echo '<img class="pict_article_suggest" alt="image_art_suggest" src="https://drive.google.com/uc?export=view&id=' . $row2['cover'] . '"/>';
        echo '<spam class="title_article_suggest">' . $row2['title'];
        echo '<a class="link_article_suggest" href="#"> view</a>';
        echo '</spam>';
        echo '</div>';
    }
}
