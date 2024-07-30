<?php
session_start();
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Upload Page</title>
    <link rel="stylesheet" href="gallery-add">
</head>
<body>
    <div class="container">
    <a href="gallery-main.php" class = "Back-btn">Back</a>
        <h1>Add More Photos</h1><br>
        <div class="upload-section">
            <label for="photo-title">Photo Title:</label>
            <input type="text" id="photo-title" name="photo-title" placeholder="Enter photo title">
            
            <label for="photo-title">Description:</label>
            <!-- <input type="text" id="photo-title" name="photo-title" placeholder="Enter photo title"> -->

            <textarea id="photo-title" name="photo-title" rows="4" cols="50">
                
                </textarea>
            
            <label for="photo-upload">Choose Photo:</label>
            <input type="file" id="photo-upload" name="photo-upload">

            <button type="button" id="upload-button">Upload</button>

            <button type="submit" class="btn">Submit</button>
        </div>
    </div>

    <!-- <script>
        document.getElementById('upload-button').addEventListener('click', function() {
            const title = document.getElementById('photo-title').value;
            const fileInput = document.getElementById('photo-upload');
            const file = fileInput.files[0];

            if(title && file) {
                alert('Photo uploaded successfully!');
            } else {
                alert('Please provide both a title and a photo.');
            }
        });

        function goBack() {
            window.history.back();
        }
    </script> -->
</body>
</html>
