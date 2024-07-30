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
    <title>Photo Manage</title>
    <link rel="stylesheet" href="gallery-manage">
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Photo Manage</h1>
            <a href="gallery-main.php" class = "Back-btn">Back</a>
            
        </div>
        <table id="crudTable">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Photo</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="tableBody">
                <!-- Rows will be dynamically added here -->
            </tbody>
        </table>
        <button id="addRowBtn">Add Row</button>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const tableBody = document.getElementById('tableBody');
        const addRowBtn = document.getElementById('addRowBtn');

        let rowCount = 0;

        addRowBtn.addEventListener('click', function() {
            addRow();
        });

        function addRow() {
            rowCount++;
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${rowCount}</td>
                <td contenteditable="true">Name ${rowCount}</td>
                <td contenteditable="true">Description ${rowCount}</td>
                <td contenteditable="true">Photo URL ${rowCount}</td>
                <td>
                    <button class="action-btn" onclick="editRow(this)"><i class="fas fa-edit"></i></button>
                    <button class="action-btn" onclick="deleteRow(this)"><i class="fas fa-trash-alt"></i></button>
                </td>
            `;
            tableBody.appendChild(row);
        }

        window.editRow = function(button) {
            const row = button.parentNode.parentNode;
            const cells = row.querySelectorAll('td[contenteditable]');
            cells.forEach(cell => {
                cell.setAttribute('contenteditable', 'true');
                cell.focus();
            });
        }

        window.deleteRow = function(button) {
            const row = button.parentNode.parentNode;
            tableBody.removeChild(row);
        }

        // Add initial rows
        for (let i = 0; i < 5; i++) {
            addRow();
        }
    });

    function goBack() {
        window.history.back();
    }
    </script>
</body>
</html>
