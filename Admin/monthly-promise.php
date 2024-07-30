<?php
session_start();
include('includes/config.php');

// Login-Page---
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monthly Promise</title>
    <link rel="stylesheet" href="monthly-promise">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Monthly Promise</h1>
            <a href="main.php" class="Back-btn">Back</a>
            
        </div>
        <br>
        <div class="file-upload">
            <input type="file" class="file-input" hidden>
            <div class="input-wrapper">
                
                <input type="text" class="file-name" readonly placeholder="No file chosen English">
                <button class="choose-button">Choose File</button>
                <button class="remove-button" hidden>Remove</button>
                <button class="update-button" hidden>Update</button>
            </div>
        </div>

        <div class="file-upload">
            <input type="file" class="file-input" hidden>
            <div class="input-wrapper">
                <input type="text" class="file-name" readonly placeholder="No file chosen Tamil">
                <button class="choose-button">Choose File</button>
                <button class="remove-button" hidden>Remove</button>
                <button class="update-button" hidden>Update</button>
            </div>
        </div>

        <button type="submit" class="btn">Submit</button>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const fileInputs = document.querySelectorAll(".file-input");
            const chooseButtons = document.querySelectorAll(".choose-button");
            const removeButtons = document.querySelectorAll(".remove-button");
            const updateButtons = document.querySelectorAll(".update-button");
            const fileNames = document.querySelectorAll(".file-name");

            chooseButtons.forEach((chooseButton, index) => {
                chooseButton.addEventListener("click", function() {
                    fileInputs[index].click();
                });
            });

            fileInputs.forEach((fileInput, index) => {
                fileInput.addEventListener("change", function() {
                    if (fileInput.files.length > 0) {
                        fileNames[index].value = fileInput.files[0].name;
                        removeButtons[index].hidden = false;
                        updateButtons[index].hidden = false;
                    } else {
                        fileNames[index].value = "";
                        removeButtons[index].hidden = true;
                        updateButtons[index].hidden = true;
                    }
                });
            });

            removeButtons.forEach((removeButton, index) => {
                removeButton.addEventListener("click", function() {
                    fileInputs[index].value = "";
                    fileNames[index].value = "";
                    removeButtons[index].hidden = true;
                    updateButtons[index].hidden = true;
                });
            });

            updateButtons.forEach((updateButton, index) => {
                updateButton.addEventListener("click", function() {
                    fileInputs[index].click();
                });
            });
        });

        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
