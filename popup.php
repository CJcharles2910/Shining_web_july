<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .popup {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgba(0,0,0,0.8); /* Black w/ opacity */
    animation: fadeIn 0.5s; /* Fade-in animation */
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity: 1;}
}

.popup-content {
    margin: 70px auto;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 65%;
    height: 65%;
    max-width: 1000px;
    padding: 20px;
    background: white;
    border-radius: 10px;
    animation: slideIn 0.5s; /* Slide-in animation */
}

@keyframes slideIn {
    from {transform: translateY(-50px); opacity: 0;}
    to {transform: translateY(0); opacity: 1;}
}

.popup-image {
    margin: 10px;
    height: 450px;
    width: 45%;
    max-width: 45%;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    /* transition: transform 0.3s ease; */
}

/* .popup-image:hover {
    transform: scale(1.05);
} */

.popup-close {
    position: absolute;
    top: 15px;
    right: 20px;
    color: white;
    font-size: 40px;
    font-weight: bold;
    transition: color 0.3s;
    cursor: pointer;
}

.popup-close:hover,
.popup-close:focus {
    color: #bbb;
}

@keyframes fadeOut {
    from {opacity: 1;}
    to {opacity: 0;}
}


@media only screen and (max-width: 700px){
    .popup-content {
        flex-direction: column;
    }
    .popup-image {
        width: 80%;
        max-width: 80%;
    }
    .popup-close{
        right: 45px;
    }
}
    </style>
</head>
<body>

    <div id="popup" class="popup">
        <span class="popup-close" id="popup-close">&times;</span>
        <div class="popup-content">
            <img class="popup-image" src="./images/promise-1.jpg" alt="Popup Image 1">
            <img class="popup-image" src="./images/promise-2.jpg" alt="Popup Image 2">
        </div>
    </div>

    <script>
        // Pop-Up
var popup = document.getElementById("popup");

var closeBtn = document.getElementById("popup-close");

closeBtn.onclick = function() {
    popup.style.animation = 'fadeOut 0.5s';
    setTimeout(() => popup.style.display = 'none', 500);
}

window.onload = function() {
    popup.style.display = "block";
}

window.onclick = function(event) {
    if (event.target == popup) {
        popup.style.animation = 'fadeOut 0.5s';
        setTimeout(() => popup.style.display = 'none', 500);
    }
}
    </script>
</body>
</html>