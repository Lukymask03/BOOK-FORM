<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $title = htmlspecialchars($_POST['title']);
    $author = htmlspecialchars($_POST['author']);
    $genre = htmlspecialchars($_POST['genre']);
    $publishing_house = htmlspecialchars($_POST['publishing_house']);
    $publication_date = htmlspecialchars($_POST['publication_date']);
    $edition = htmlspecialchars($_POST['edition']);
    $num_copies = htmlspecialchars($_POST['num_copies']);
    $format = htmlspecialchars($_POST['format']);
    $age_group = isset($_POST['age_group']) ? implode(', ', $_POST['age_group']) : 'None';
    $book_rating = htmlspecialchars($_POST['book_rating']);

    // Display the submitted data
    echo "<h1>Book Details Submitted</h1>";
    echo "<p><strong>Title:</strong> $title</p>";
    echo "<p><strong>Author:</strong> $author</p>";
    echo "<p><strong>Genre:</strong> $genre</p>";
    echo "<p><strong>Publishing House:</strong> $publishing_house</p>";
    echo "<p><strong>Publication Date:</strong> $publication_date</p>";
    echo "<p><strong>Edition:</strong> $edition</p>";
    echo "<p><strong>Number of Copies:</strong> $num_copies</p>";
    echo "<p><strong>Format:</strong> $format</p>";
    echo "<p><strong>Age Group:</strong> $age_group</p>";
    echo "<p><strong>Book Rating:</strong> $book_rating</p>";
} else {
    echo "No data submitted.";
}
?>
