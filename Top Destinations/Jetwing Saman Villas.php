<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jetwing Saman Villas</title>
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
            <h1>Jetwing Saman Villas</h1>
            <img src="../assets/unawatuna.jpg" alt="Jetwing Saman Villas" class="destination-image">
            <p>
                Jetwing Saman Villas is a luxurious beachfront resort located in Unawatuna, Sri Lanka. With its tranquil atmosphere and stunning ocean views, 
                it offers the perfect escape for relaxation and rejuvenation. The resort combines modern luxury with traditional Sri Lankan hospitality.
            </p>
            <h3>Ratings: ★★★★★ (5/5)</h3>
            <h4>How to Travel</h4>
            <p>
                Book your stay with us! Whether you're looking for a relaxing retreat or an adventure, we offer top-tier transportation to Jetwing Saman Villas 
                and help you plan your perfect getaway.
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
