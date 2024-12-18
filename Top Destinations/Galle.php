<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galle Fort</title>
    <link rel="stylesheet" href="topdes.css">
    <script src="topdes.js" defer></script>
</head>
<body>
    <!-- Navbar -->
    <header>
        <div class="navbar">
            <nav>
                <a href="../index.php">Home</a>
                <a href="../about.php">About</a>
                <a href="../contact.php">Contact</a>
                <a href="../sign-in.php">Sign In</a>
            </nav>
        </div>
    </header>
    

    <!-- Destination Content -->
    <main>
        <section class="destination-content">
            <h1>Galle Fort</h1>
            <img src="../assets/galle fort.jpg" alt="Galle Fort" class="destination-image">
            <p>
                Galle Fort is a colonial-era fortification located in the city of Galle, on the southwestern coast of Sri Lanka. 
                Built by the Portuguese in the 16th century and later expanded by the Dutch, Galle Fort is a UNESCO World Heritage Site. 
                The fort is home to cobblestone streets, colonial architecture, and a rich history.
            </p>
            <h3>Ratings: ★★★★☆ (4.3/5)</h3>
            <h4>How to Travel</h4>
            <p>
                Book a trip to Galle Fort with us! We offer comfortable transportation and guided tours to explore the fort's historical significance, 
                scenic views, and the surrounding old town of Galle.
            </p>
            <button class="btn" onclick="bookNow()">Book Now</button>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Travel Adventures. All Rights Reserved.</p>
        </div>
    </footer>


    <style>

        /* General styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    line-height: 1.6;
}



.logo {
    font-size: 1.5rem;
    font-weight: bold;
}

/* Main content styling */
.destination-content {
    padding: 2rem;
    text-align: center;
}

.destination-image {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 1.5rem;
}

/* Button styling */
.btn {
    display: inline-block;
    padding: 0.7rem 1.5rem;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 4px;
    text-transform: uppercase;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #0056b3;
}

/* Responsive styling */
@media (max-width: 1200px) {
    .destination-content {
        padding: 1.5rem;
    }
}

@media (max-width: 768px) {
    .navbar {
        flex-direction: column;
        align-items: flex-start;
    }

    .navbar a {
        margin: 0.5rem 0;
    }

    .destination-content {
        padding: 1rem;
    }

    .destination-image {
        max-width: 90%;
    }
}

@media (max-width: 480px) {
    .destination-image {
        max-width: 100%;
    }

    .btn {
        padding: 0.5rem 1rem;
        font-size: 0.9rem;
    }
}

    </style>
</body>
</html>
