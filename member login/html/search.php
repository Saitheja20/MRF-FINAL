<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the search query from the form
    $searchQuery = $_POST["search"];

    // Replace this with code to search for users in your database or other data source
    $users = [
        ['id' => 1, 'username' => 'user1', 'email' => 'user1@example.com'],
        ['id' => 2, 'username' => 'user2', 'email' => 'user2@example.com'],
        ['id' => 3, 'username' => 'user3', 'email' => 'user3@example.com'],
    ];

    // Filter the users based on the search query
    $filteredUsers = array_filter($users, function ($user) use ($searchQuery) {
        return strpos(strtolower($user['username']), strtolower($searchQuery)) !== false;
    });

    // Display the filtered users
    echo "<h2>Search Results</h2>";
    echo "<table>";
    echo "<tr><th>User ID</th><th>Username</th><th>Email</th></tr>";
    foreach ($filteredUsers as $user) {
        echo "<tr>";
        echo "<td>{$user['id']}</td>";
        echo "<td>{$user['username']}</td>";
        echo "<td>{$user['email']}</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
