<?php
include 'dbcon.php';

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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['proposal_id'];
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
    
    $sql = "UPDATE proposal SET 
            title_of_activity='$title', 
            college='$college', 
            department='$department', 
            specify_department='$specify_department', 
            objectives='$objectives', 
            nature_classification='$nature_classification', 
            locale='$locale', 
            duration_of_activity='$duration_of_activity', 
            funding_source='$funding_source', 
            total_amount='$total_amount', 
            contact_person='$contact_person', 
            action_of_csac='$action_of_csac', 
            remarks='$remarks', 
            doc_sequence_number='$doc_sequence_number', 
            no_of_copies='$no_of_copies', 
            receiver='$receiver', 
            duration_of_process='$duration_of_process', 
            action_of_usds='$action_of_usds', 
            notations='$notations', 
            status='$status', 
            office_destination='$office_destination' 
            WHERE proposal_id=$id";
    
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
    <title>Edit Proposal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form method="POST">
        <h2>Edit Proposal</h2>
        <input type="hidden" name="proposal_id" value="<?php echo $row['proposal_id']; ?>">
        <label>Title:</label> <input type="text" name="title_of_activity" value="<?php echo $row['title_of_activity']; ?>" required><br>
        <label>College:</label> <input type="text" name="college" value="<?php echo $row['college']; ?>" required><br>
        <label>Department:</label> <input type="text" name="department" value="<?php echo $row['department']; ?>"><br>
        <label>Specify Department:</label> <input type="text" name="specify_department" value="<?php echo $row['specify_department']; ?>"><br>
        <label>Objectives:</label> <textarea name="objectives" required><?php echo $row['objectives']; ?></textarea><br>
        <label>Nature Classification:</label> <input type="text" name="nature_classification" value="<?php echo $row['nature_classification']; ?>" required><br>
        <label>Locale:</label> <input type="text" name="locale" value="<?php echo $row['locale']; ?>" required><br>
        <label>Duration:</label> <input type="text" name="duration_of_activity" value="<?php echo $row['duration_of_activity']; ?>" required><br>
        <label>Funding Source:</label> <input type="text" name="funding_source" value="<?php echo $row['funding_source']; ?>" required><br>
        <label>Total Amount:</label> <input type="number" step="0.01" name="total_amount" value="<?php echo $row['total_amount']; ?>" required><br>
        <label>Contact Person:</label> <input type="text" name="contact_person" value="<?php echo $row['contact_person']; ?>" required><br>
        <label>Action of CSAC:</label> <textarea name="action_of_csac"><?php echo $row['action_of_csac']; ?></textarea><br>
        <label>Remarks:</label> <textarea name="remarks"><?php echo $row['remarks']; ?></textarea><br>
        <label>Doc Sequence No.:</label> <input type="text" name="doc_sequence_number" value="<?php echo $row['doc_sequence_number']; ?>" required><br>
        <label>No. of Copies:</label> <input type="number" name="no_of_copies" value="<?php echo $row['no_of_copies']; ?>" required><br>
        <label>Receiver:</label> <input type="text" name="receiver" value="<?php echo $row['receiver']; ?>" required><br>
        <label>Duration of Process:</label> <input type="number" name="duration_of_process" value="<?php echo $row['duration_of_process']; ?>"><br>
        <label>Action of USDS:</label> <input type="text" name="action_of_usds" value="<?php echo $row['action_of_usds']; ?>" required><br>
        <label>Notations:</label> <textarea name="notations"><?php echo $row['notations']; ?></textarea><br>
        <label>Status:</label> <input type="text" name="status" value="<?php echo $row['status']; ?>" required><br>
        <label>Office Destination:</label> <input type="text" name="office_destination" value="<?php echo $row['office_destination']; ?>" required><br>
        <button type="submit">Update Record</button>
    </form>
</body>
</html>
