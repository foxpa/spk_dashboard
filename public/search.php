<?php
require_once 'connection.php'; // Include your database connection

if (isset($_GET['query'])) {
    $searchQuery = mysqli_real_escape_string($conn, $_GET['query']);
    $sql = "SELECT * FROM slists WHERE s_name LIKE '%$searchQuery%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<div class='search-results'>"; // Add a wrapper for search results
        while ($row = $result->fetch_assoc()) {
            echo "<div class='highlight'>" . htmlspecialchars($row['s_name']) . "</div>"; // Highlight each result
        }
        echo "</div>";
    } else {
        echo "No results found.";
    }
}

$conn->close();
?>