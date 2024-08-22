<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Form</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .form-container { max-width: 600px; margin: 0 auto; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; }
        .form-group input, .form-group select, .form-group textarea { width: 100%; padding: 8px; box-sizing: border-box; }
        .form-group input[type="radio"], .form-group input[type="checkbox"] { margin-right: 5px; }
        .form-group input[type="range"] { width: 100%; }
        .form-group button { padding: 10px 15px; background-color: #0018b2; color: #fff; border: none; border-radius: 5px; cursor: pointer; }
        .form-group button:hover { background-color: #0075b2; }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>BOOK INFORMATION</h1>
        <form action="addbook.php" method="post">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" id="author" name="author" required>
            </div>
            <div class="form-group">
                <label for="genre">Genre:</label>
                <select id="genre" name="genre" required>
                    <option value="science">Science</option>
                    <option value="history">History</option>
                    <option value="math">Math</option>
                    
                    <option value="filipino">Filipino<opition>
                    
                </select>
            </div>
            <div class="form-group">
                <label for="publishing_house">Publishing House:</label>
                <input type="text" id="publishing_house" name="publishing_house" required>
            </div>
            <div class="form-group">
                <label for="publication_date">Publication Date:</label>
                <input type="date" id="publication_date" name="publication_date" required>
            </div>
            <div class="form-group">
                <label for="edition">Edition:</label>
                <input type="number" id="edition" name="edition" required>
            </div>
            <div class="form-group">
                <label for="num_copies">Number of Copies:</label>
                <input type="number" id="num_copies" name="num_copies" required>
            </div>
            <div class="form-group">
                <label>Format:</label>
                
                <input type="radio" id="hardbound" name="format" value="hardbound" required><br>
                <label for="hardbound">Hardbound</label>
                <input type="radio" id="softbound" name="format" value="softbound" required><br>
                <label for="softbound">Softbound</label>
                
            </div>
            <br>
            <div class="form-group">
                <label>Age Group:</label>
                <br>
                <input type="checkbox" id="kids" name="age_group[]" value="kids">
                <label for="kids">Kids</label><br><br>
                <input type="checkbox" id="teens" name="age_group[]" value="teens">
                <label for="teens">Teens</label><br><br>
                <input type="checkbox" id="adult" name="age_group[]" value="adult">
                <label for="adult">Adult</label><br><br>
            </div>
            <br>
            <div class="form-group">
                <br>
                <label for="book_rating">Book Ratings (1-5):</label>
                <input type="range" id="book_rating" name="book_rating" min="1" max="5" step="1" value="3">
                <span id="rating_value">3</span>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
    <script>
        // Update the rating value display
        document.getElementById('book_rating').addEventListener('input', function() {
            document.getElementById('rating_value').textContent = this.value;
        });
    </script>
</body>
</html>
