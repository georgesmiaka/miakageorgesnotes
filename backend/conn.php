<?php
// SQLite database configuration
$databaseFileStorie = './backend/db/storie.db';
// Create SQLite database and articles table if they don't exist
$connection = new SQLite3($databaseFileStorie);
$connection->exec('CREATE TABLE IF NOT EXISTS articles (id INTEGER PRIMARY KEY AUTOINCREMENT, title TEXT, subtitle TEXT, author TEXT, created_at DATETIME DEFAULT CURRENT_TIMESTAMP, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP, cover TEXT, coverdescription TEXT, category TEXT, content TEXT)');
// Function to save an article to SQLite
function saveArticle($title, $subtitle, $author, $cover, $coverdescription, $category, $content)
{
    global $connection;

    $stmt = $connection->prepare('INSERT INTO articles (title, subtitle, author, cover, coverdescription, category, content) VALUES (:title, :subtitle, :author, :cover, :coverdescription, :category, :content)');
    $stmt->bindValue(':title', $title, SQLITE3_TEXT);
    $stmt->bindValue(':subtitle', $subtitle, SQLITE3_TEXT);
    $stmt->bindValue(':author', $author, SQLITE3_TEXT);
    $stmt->bindValue(':cover', $cover, SQLITE3_TEXT);
    $stmt->bindValue(':coverdescription', $coverdescription, SQLITE3_TEXT);
    $stmt->bindValue(':category', $category, SQLITE3_TEXT);
    $stmt->bindValue(':content', $content, SQLITE3_TEXT);
    $result = $stmt->execute();

    if ($result) {
        return "Article saved successfully!";
    } else {
        return "Failed to save the article.";
    }
}
// Function to fetch all articles from SQLite
function getAllArticles()
{
    global $connection;

    $stmt = $connection->prepare('SELECT * FROM articles');
    $result = $stmt->execute();
    return $result;
}
// Function to fetch a single article by ID
function getArticleById($id)
{
    global $connection;

    $stmt = $connection->prepare('SELECT * FROM articles WHERE id = :id');
    $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
    $result = $stmt->execute();
    return $result;
}

?> 

