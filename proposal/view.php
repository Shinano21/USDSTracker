<?php
include 'db_connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM proposal WHERE proposal_id = $id";
    $result = $conn->query($query);
    
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        echo "Record not found.";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Proposal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form>
        <h2>View Proposal</h2>
        <label>Title:</label> <input type="text" value="<?php echo $row['title_of_activity']; ?>" readonly><br>
        <label>College:</label> <input type="text" value="<?php echo $row['college']; ?>" readonly><br>
        <label>Department:</label> <input type="text" value="<?php echo $row['department']; ?>" readonly><br>
        <label>Specify Department:</label> <input type="text" value="<?php echo $row['specify_department']; ?>" readonly><br>
        <label>Objectives:</label> <textarea readonly><?php echo $row['objectives']; ?></textarea><br>
        <label>Nature Classification:</label> <input type="text" value="<?php echo $row['nature_classification']; ?>" readonly><br>
        <label>Locale:</label> <input type="text" value="<?php echo $row['locale']; ?>" readonly><br>
        <label>Duration:</label> <input type="text" value="<?php echo $row['duration_of_activity']; ?>" readonly><br>
        <label>Funding Source:</label> <input type="text" value="<?php echo $row['funding_source']; ?>" readonly><br>
        <label>Total Amount:</label> <input type="number" step="0.01" value="<?php echo $row['total_amount']; ?>" readonly><br>
        <label>Contact Person:</label> <input type="text" value="<?php echo $row['contact_person']; ?>" readonly><br>
        <label>Action of CSAC:</label> <textarea readonly><?php echo $row['action_of_csac']; ?></textarea><br>
        <label>Remarks:</label> <textarea readonly><?php echo $row['remarks']; ?></textarea><br>
        <label>Doc Sequence No.:</label> <input type="text" value="<?php echo $row['doc_sequence_number']; ?>" readonly><br>
        <label>No. of Copies:</label> <input type="number" value="<?php echo $row['no_of_copies']; ?>" readonly><br>
        <label>Receiver:</label> <input type="text" value="<?php echo $row['receiver']; ?>" readonly><br>
        <label>Duration of Process:</label> <input type="number" value="<?php echo $row['duration_of_process']; ?>" readonly><br>
        <label>Action of USDS:</label> <input type="text" value="<?php echo $row['action_of_usds']; ?>" readonly><br>
        <label>Notations:</label> <textarea readonly><?php echo $row['notations']; ?></textarea><br>
        <label>Status:</label> <input type="text" value="<?php echo $row['status']; ?>" readonly><br>
        <label>Office Destination:</label> <input type="text" value="<?php echo $row['office_destination']; ?>" readonly><br>
        <button type="button" onclick="window.history.back();">Back</button>
    </form>
</body>
</html>
