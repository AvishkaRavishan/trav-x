<?php
?>
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
    <!-- Navigation Bar -->
    <div class="navbar">
        <nav>
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
        </nav>   
    </div>
</header>



    <!-- Main Section -->
    <main class="bookings" id="bookings-section" style="display: none;">
        <div class="container">
            <h1>My Bookings</h1>
            <p>Here you can view and manage your current and past bookings.</p>

            <!-- Current Bookings -->
            <section class="current-bookings">
                <h2>Current Bookings</h2>
                <div class="booking-item">
                    <h3>Booking #12345</h3>
                    <p><strong>Date:</strong> 2024-11-28</p>
                    <p><strong>Time:</strong> 10:00 AM</p>
                    <p><strong>Service:</strong> Hotel Reservation</p>
                    <button class="btn cancel">Cancel Booking</button>
                </div>
            </section>

            <!-- Past Bookings -->
            <section class="past-bookings">
                <h2>Past Bookings</h2>
                <div class="booking-item">
                    <h3>Booking #54321</h3>
                    <p><strong>Date:</strong> 2024-10-20</p>
                    <p><strong>Time:</strong> 2:00 PM</p>
                    <p><strong>Service:</strong> Flight Ticket</p>
                    <button class="btn details">View Details</button>
                </div>
            </section>
        </div>
    </main>

    <!-- Login Prompt -->
    <div id="login-prompt" style="text-align: center; margin-top: 100px;">
        <h1>Please Log In</h1>
        <p>You must be logged in to view your bookings.</p>
        <button class="btn details" onclick="redirectToLogin()">Log In</button>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 MyBooking. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Simulated login status check
        const isLoggedIn = false; // Replace with actual login status check from your backend

        document.addEventListener("DOMContentLoaded", () => {
            const bookingsSection = document.getElementById("bookings-section");
            const loginPrompt = document.getElementById("login-prompt");

            if (isLoggedIn) {
                bookingsSection.style.display = "block";
                loginPrompt.style.display = "none";
            } else {
                bookingsSection.style.display = "none";
                loginPrompt.style.display = "block";
            }
        });

        function redirectToLogin() {
            window.location.href = "sign-in.php";
        }
    </script>
</body>
</html>
