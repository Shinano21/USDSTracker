<?php
include 'dbcon.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title_of_activity'];
    $college = $_POST['college'];
    $department = $_POST['department'];
    $specify_department = $_POST['specify_department'];
    $objectives = $_POST['objectives'];
    $nature_classification = $_POST['nature_classification'];
    $locale = $_POST['locale'];
    $duration_of_activity = $_POST['duration_of_activity'];
    $funding_source = $_POST['funding_source'];
    $total_amount = $_POST['total_amount'];
    $contact_person = $_POST['contact_person'];
    $action_of_csac = $_POST['action_of_csac'];
    $remarks = $_POST['remarks'];
    $doc_sequence_number = $_POST['doc_sequence_number'];
    $no_of_copies = $_POST['no_of_copies'];
    $receiver = $_POST['receiver'];
    $duration_of_process = $_POST['duration_of_process'];
    $action_of_usds = $_POST['action_of_usds'];
    $notations = $_POST['notations'];
    $status = $_POST['status'];
    $office_destination = $_POST['office_destination'];
    
    $sql = "INSERT INTO proposal (title_of_activity, college, department, specify_department, objectives, nature_classification, locale, duration_of_activity, funding_source, total_amount, contact_person, action_of_csac, remarks, doc_sequence_number, no_of_copies, receiver, duration_of_process, action_of_usds, notations, status, office_destination) 
            VALUES ('$title', '$college', '$department', '$specify_department', '$objectives', '$nature_classification', '$locale', '$duration_of_activity', '$funding_source', '$total_amount', '$contact_person', '$action_of_csac', '$remarks', '$doc_sequence_number', '$no_of_copies', '$receiver', '$duration_of_process', '$action_of_usds', '$notations', '$status', '$office_destination')";
    
    if ($conn->query($sql)) {
        header('Location: dashboard.php');
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Proposal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form method="POST">
        <h2>Add New Proposal</h2>
        <label>Title:</label> <input type="text" name="title_of_activity" required><br>
        <label>College:</label> <input type="text" name="college" required><br>
        <label>Department:</label> <input type="text" name="department"><br>
        <label>Specify Department:</label> <input type="text" name="specify_department"><br>
        <label>Objectives:</label> <textarea name="objectives" required></textarea><br>
        <label>Nature Classification:</label> <input type="text" name="nature_classification" required><br>
        <label>Locale:</label> <input type="text" name="locale" required><br>
        <label>Duration:</label> <input type="text" name="duration_of_activity" required><br>
        <label>Funding Source:</label> <input type="text" name="funding_source" required><br>
        <label>Total Amount:</label> <input type="number" step="0.01" name="total_amount" required><br>
        <label>Contact Person:</label> <input type="text" name="contact_person" required><br>
        <label>Action of CSAC:</label> <textarea name="action_of_csac"></textarea><br>
        <label>Remarks:</label> <textarea name="remarks"></textarea><br>
        <label>Doc Sequence No.:</label> <input type="text" name="doc_sequence_number" required><br>
        <label>No. of Copies:</label> <input type="number" name="no_of_copies" required><br>
        <label>Receiver:</label> <input type="text" name="receiver" required><br>
        <label>Duration of Process:</label> <input type="number" name="duration_of_process"><br>
        <label>Action of USDS:</label> <input type="text" name="action_of_usds" required><br>
        <label>Notations:</label> <textarea name="notations"></textarea><br>
        <label>Status:</label> <input type="text" name="status" required><br>
        <label>Office Destination:</label> <input type="text" name="office_destination" required><br>
        <button type="submit">Add Record</button>
    </form>
</body>
</html>
