<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nine Arch Bridge</title>
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
            <h1>Nine Arch Bridge</h1>
            <img src="../assets/nine arch.jpg" alt="Nine Arch Bridge" class="destination-image">
            <p>
                The Nine Arch Bridge is an iconic railway bridge located in Ella, Sri Lanka. Known for its impressive architecture, the bridge spans a deep valley, 
                surrounded by lush greenery and scenic landscapes. It's one of the most photographed landmarks in Sri Lanka.
            </p>
            <h3>Ratings: ★★★★★ (5/5)</h3>
            <h4>How to Travel</h4>
            <p>
                Explore the beauty of Nine Arch Bridge with us! Our services offer safe, comfortable travel and guided tours to give you the best experience while 
                you enjoy the stunning views of the bridge.
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
