<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Left Navbar</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
/* Change the background color as needed */
        nav {
            background-color: #000080; 
            height: 1000vh;
            width: 200px;
            padding-top: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2); /* Add a box shadow for a border effect */
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            margin-bottom: 50px; /* Add spacing between list items */
        }

        a {
            text-decoration: none;
            color: white; /* Change the text color as needed */
            font-size: 16px;
            font-weight: bold;
            display: block;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #555; /* Change the hover background color as needed */
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Team</a></li>
            <li><a href="#">Add</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
</body>
</html>
