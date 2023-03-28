<?php
require_once __DIR__ . '/vendor/autoload.php'; // Path to the Google API client library

// Initialize the Google client
$client = new Google_Client();
$client->setClientId('YOUR_CLIENT_ID');
$client->setClientSecret('YOUR_CLIENT_SECRET');
$client->setRedirectUri('YOUR_REDIRECT_URI');
$client->addScope('https://www.googleapis.com/auth/userinfo.email');

// Generate a URL to initiate the Google login flow
$auth_url = $client->createAuthUrl();

// Output the login form
echo '<form method="post" action="login.php">';
echo '<input type="email" name="email" placeholder="Email"><br>';
echo '<input type="password" name="password" placeholder="Password"><br>';
echo '<button type="submit">Login</button>';
echo '<a href="' . $auth_url . '">Login with Google</a>';
echo '</form>';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Authenticate the user using their email and password
    // ...

    // Retrieve the Google ID token for the authenticated user
    $token = $_POST['id_token'];
    $ticket = $client->verifyIdToken($token);
    if ($ticket) {
        $data = $ticket->getAttributes()['payload'];
        $user_id = $data['sub'];
        // Verify that the token is for the authenticated user
        if ($user_id == $authenticated_user_id) {
            // The user is authenticated and the token is valid
            // Create a session for the user and redirect to a protected page
            // ...
        }
    }
}
?>