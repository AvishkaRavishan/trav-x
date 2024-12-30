<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tripType = $_POST['trip_type'] ?? '';
    $destination = $_POST['destination'] ?? '';
    $vehicleType = $_POST['vehicle_type'] ?? '';
    $travelDate = $_POST['travel_date'] ?? '';
    $startDate = $_POST['start_date'] ?? '';
    $endDate = $_POST['end_date'] ?? '';
    $stops = $_POST['stops'] ?? '';
    $time = $_POST['time'] ?? '';

    // Check required fields
    if (empty($tripType) || empty($destination) || empty($vehicleType) || empty($time)) {
        die('Missing required fields');
    }

    // Save booking to the database
    $stmt = $conn->prepare(
        "INSERT INTO bookings (trip_type, destination, vehicle_type, travel_date, start_date, end_date, stops, time) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)"
    );
    $stmt->bind_param("ssssssss", $tripType, $destination, $vehicleType, $travelDate, $startDate, $endDate, $stops, $time);



    $stmt->close();
    $conn->close();
}
?>


<script>    
    function sendwhatsapp() {
        const phonenumber = "94789238128"; // Include the country code

        // Get form values
        const name = document.querySelector(".name").value;
        const email = document.querySelector(".email").value;
        const country = document.querySelector(".country").value;
        const message = document.querySelector(".message").value;

        // Validate form inputs
        if (!name || !email || !country || !message) {
            alert("Please fill all fields before sending the message.");
            return;
        }

        // Create WhatsApp message URL
        const url = `https://wa.me/message/K3CC6OUJPSADD1${phonenumber}?text=` +
            `*Name:* ${encodeURIComponent(name)}%0a` +
            `*Email:* ${encodeURIComponent(email)}%0a` +
            `*Country:* ${encodeURIComponent(country)}%0a` +
            `*Message:* ${encodeURIComponent(message)}%0a%0a` +
            `This is an example of sending HTML form data to WhatsApp`;

        // Open WhatsApp in a new tab
        window.open(url, "_blank").focus();
    }
</script>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bookings</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="navbar">
            <nav>
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="logout.php">Logout</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="bookings-section">
            <h1>My Bookings</h1>
            
            <?php if (empty($bookings)): ?>
                <p>You have no bookings yet.</p>
            <?php else: ?>
                <div class="bookings-grid">
                    <?php foreach ($bookings as $booking): ?>
                        <div class="booking-card">
                            <h3>Booking #<?php echo $booking['id']; ?></h3>
                            <p><strong>Type:</strong> <?php echo ucfirst($booking['trip_type']); ?></p>
                            <p><strong>Destination:</strong> <?php echo $booking['destination']; ?></p>
                            <p><strong>Vehicle:</strong> <?php echo ucfirst($booking['vehicle_type']); ?></p>
                            
                            <?php if ($booking['trip_type'] === 'one-way'): ?>
                                <p><strong>Date:</strong> <?php echo $booking['travel_date']; ?></p>
                            <?php else: ?>
                                <p><strong>Start Date:</strong> <?php echo $booking['start_date']; ?></p>
                                <p><strong>End Date:</strong> <?php echo $booking['end_date']; ?></p>
                                <p><strong>Stops:</strong> <?php echo $booking['stops']; ?></p>
                            <?php endif; ?>
                            
                            <p><strong>Time:</strong> <?php echo $booking['travel_time']; ?></p>
                            <p><strong>Status:</strong> <span class="status-<?php echo $booking['status']; ?>"><?php echo ucfirst($booking['status']); ?></span></p>
                            
                            <?php if ($booking['status'] === 'pending'): ?>
                                <form action="cancel_booking.php" method="POST">
                                    <input type="hidden" name="booking_id" value="<?php echo $booking['id']; ?>">
                                    <button type="submit" class="cancel-btn">Cancel Booking</button>
                                </form>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </section>
    </main>

    <footer>
        <p>© 2024 Sun Rock Tours | All Rights Reserved.</p>
    </footer>
</body>
</html>
