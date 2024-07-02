<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Username Replacement</title>
</head>
<body>
    <div id="loginForm">
        <h2>Login</h2>
        <input type="text" id="username" placeholder="Enter your username">
        <button onclick="login()">Login</button>
    </div>

    <div id="welcomeMessage" style="display:none;">
        <h2>Welcome, <span id="userDisplayName">Syafiq Rasul</span></h2>
    </div>

    <img id="profileImage" src="image.png" alt="Profile Image">
    
    <script>
        function login() {
    var username = document.getElementById('username').value;
    if (username) {
        // Replace the displayed username with the logged-in user's name
        document.getElementById('userDisplayName').innerText = username;

        // Hide the login form and show the welcome message
        document.getElementById('loginForm').style.display = 'none';
        document.getElementById('welcomeMessage').style.display = 'block';

        // Optionally, update the profile image or other elements as needed
        // For example, if the image needs to be updated based on the username:
        // document.getElementById('profileImage').src = 'path/to/new/image/' + username + '.png';
    } else {
        alert('Please enter a username');
    }
}

    </script>
</body>
</html>
