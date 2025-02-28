<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Website</title>
    <style>
        /* Basic CSS for styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav ul {
            list-style: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin: 0 15px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        main {
            padding: 20px;
            text-align: center;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Welcome to My PHP Website</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <h2>About This Website</h2>
        <p>This is a simple PHP website created to demonstrate basic PHP functionality.</p>
        <p>Feel free to explore and learn more about how PHP works!</p>
        <h3>Features:</h3>
        <ul>
            <li>Simple and clean design</li>
            <li>Easy to understand code</li>
            <li>Reusable components</li>
        </ul>
        <a href="contact.php">Contact Me</a>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2023 My PHP Website. All rights reserved.</p>
    </footer>
</body>
</html>
