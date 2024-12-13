<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the dates from the form
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    // Convert the date strings to DateTime objects
    $startDateObj = new DateTime($startDate);
    $endDateObj = new DateTime($endDate);

    // Calculate the difference
    $interval = $startDateObj->diff($endDateObj);
    
    // Display the difference in days
    $daysDifference = $interval->days;

    // Optional: Check if end date is before start date
    if ($endDateObj < $startDateObj) {
        echo "End Date should be later than Start Date.";
    } else {
        echo "The difference is {$daysDifference} days.";
    }
}
?>