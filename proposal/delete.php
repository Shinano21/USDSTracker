<?php
include 'db_connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Delete record
    $query = "DELETE FROM proposal WHERE proposal_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        echo "<script>alert('Record deleted successfully.'); window.location.href='../dashboard.php';</script>";
    } else {
        echo "<script>alert('Error deleting record.'); window.history.back();</script>";
    }
    
    $stmt->close();
    $conn->close();
} else {
    echo "<script>alert('Invalid request.'); window.history.back();</script>";
}
?>
