<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trincomalee</title>
    <link rel="stylesheet" href="topdes.css">
    <script src="topdes.js" defer></script>
</head>
<body>


    <main>
        <section class="destination-content">
            <h1>Trincomalee</h1>
            <img src="../assets/trinco.jpg" alt="Trincomalee" class="destination-image">
            <p>
                Trincomalee, located on the eastern coast of Sri Lanka, is known for its pristine beaches, ancient temples, and famous harbor. 
                Visit Nilaveli Beach and the iconic Koneswaram Temple.
            </p>
            <h3>Ratings: ★★★★★ (4.8/5)</h3>
            <h4>How to Travel</h4>
            <p>
                Travel to Trincomalee with ease through our personalized packages offering guided tours and premium accommodations.
            </p>
            <button class="btn" onclick="bookNow()">Book Now</button>
        </section>
        <style>.destination-image {
    width: 100%;
    height: auto;
    max-width: 1200px; /* Maximum width to prevent the image from becoming too large */
    margin: 0 auto; /* Centers the image */
    display: block; /* Makes sure the image behaves like a block element */
}

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
    </main>

    <footer>
        <div class="footer-content">
        <p>© 2024 Sun Rock Tours | All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>