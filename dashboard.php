<?php
session_start();
include 'db_connection.php'; // Ensure this file establishes your database connection

// Pagination settings
$limit = 10; // Number of records per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Search functionality
$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$search_query = $search ? "WHERE title_of_activity LIKE '%$search%' OR college LIKE '%$search%' OR status LIKE '%$search%'" : '';

// Fetch total records
$total_query = "SELECT COUNT(*) AS total FROM proposal $search_query";
$total_result = $conn->query($total_query);
$total_records = $total_result->fetch_assoc()['total'];
$total_pages = ceil($total_records / $limit);

// Fetch paginated results
$query = "SELECT * FROM proposal $search_query ORDER BY received_datetime DESC LIMIT $limit OFFSET $offset";
$result = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include your CSS file -->
</head>
<body>
    <h2>Proposal Dashboard</h2>
    <a href="proposal/add.php" class="btn">Add Record</a>
    <form method="GET" action="dashboard.php">
        <input type="text" name="search" placeholder="Search..." value="<?php echo htmlspecialchars($search); ?>">
        <button type="submit">Search</button>
    </form>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>College</th>
                <th>Department</th>
                <th>Specify Department</th>
                <th>Objectives</th>
                <th>Nature Classification</th>
                <th>Locale</th>
                <th>Duration</th>
                <th>Funding Source</th>
                <th>Total Amount</th>
                <th>Contact Person</th>
                <th>Action of CSAC</th>
                <th>Remarks</th>
                <th>Doc Sequence No.</th>
                <th>No. of Copies</th>
                <th>Receiver</th>
                <th>Received Date/Time</th>
                <th>Duration of Process</th>
                <th>Expected Release Date/Time</th>
                <th>Action of USDS</th>
                <th>Notations</th>
                <th>Status</th>
                <th>Status Date/Time</th>
                <th>Office Destination</th>
                <th>Accomplished On Time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['proposal_id']; ?></td>
                    <td><?php echo htmlspecialchars($row['title_of_activity']); ?></td>
                    <td><?php echo htmlspecialchars($row['college']); ?></td>
                    <td><?php echo htmlspecialchars($row['department']); ?></td>
                    <td><?php echo htmlspecialchars($row['specify_department']); ?></td>
                    <td><?php echo htmlspecialchars($row['objectives']); ?></td>
                    <td><?php echo htmlspecialchars($row['nature_classification']); ?></td>
                    <td><?php echo htmlspecialchars($row['locale']); ?></td>
                    <td><?php echo htmlspecialchars($row['duration_of_activity']); ?></td>
                    <td><?php echo htmlspecialchars($row['funding_source']); ?></td>
                    <td><?php echo $row['total_amount']; ?></td>
                    <td><?php echo htmlspecialchars($row['contact_person']); ?></td>
                    <td><?php echo htmlspecialchars($row['action_of_csac']); ?></td>
                    <td><?php echo htmlspecialchars($row['remarks']); ?></td>
                    <td><?php echo htmlspecialchars($row['doc_sequence_number']); ?></td>
                    <td><?php echo $row['no_of_copies']; ?></td>
                    <td><?php echo htmlspecialchars($row['receiver']); ?></td>
                    <td><?php echo $row['received_datetime']; ?></td>
                    <td><?php echo $row['duration_of_process']; ?></td>
                    <td><?php echo $row['expected_release_datetime']; ?></td>
                    <td><?php echo htmlspecialchars($row['action_of_usds']); ?></td>
                    <td><?php echo htmlspecialchars($row['notations']); ?></td>
                    <td><?php echo htmlspecialchars($row['status']); ?></td>
                    <td><?php echo $row['status_datetime']; ?></td>
                    <td><?php echo htmlspecialchars($row['office_destination']); ?></td>
                    <td><?php echo $row['accomplished_on_time'] ? 'Yes' : 'No'; ?></td>
                    <td>
                        <a href="proposal/view.php?id=<?php echo $row['proposal_id']; ?>">View</a> |
                        <a href="proposal/edit.php?id=<?php echo $row['proposal_id']; ?>">Edit</a> |
                        <a href="delete.php?id=<?php echo $row['proposal_id']; ?>" onclick="return confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div>
        <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
            <a href="dashboard.php?page=<?php echo $i; ?>&search=<?php echo urlencode($search); ?>">
                <?php echo $i; ?>
            </a>
        <?php } ?>
    </div>
</body>
</html>
