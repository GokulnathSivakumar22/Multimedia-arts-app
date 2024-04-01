<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentation</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Additional CSS styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: blue; /* Changed header background color to blue */
            color: #fff;
            padding: 20px;
            text-align: center;
            box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
            color: #fff;
            display: flex;
            align-items: center;
        }
        .logo img {
            margin-right: 10px;
            height: 30px;
            width: auto;
        }
        .logo-text {
            text-decoration: none;
            color: #fff;
        }
        .logo-text:hover {
            text-decoration: none;
            color: #ddd;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: right;
        }
        nav ul li {
            display: inline;
            margin-right: 10px;
        }
        nav ul li a {
            color: orange; /* Changed button color to orange */
            text-decoration: none;
            padding: 10px;
            border-radius: 5px;
            background-color: darkgreen;
            transition: background-color 0.3s;
        }
        nav ul li a:hover {
            background-color: #777;
        }

        main {
            padding: 20px;
            display: flex;
            justify-content: left;
            align-items: left;
            flex-direction: column;
        }

        footer {
            position: fixed; /* Fixed position to stick to the bottom */
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #333;
            color: white;
            text-align: center;
            padding-bottom: inherit;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .dropdown-container {
            display: none;
            margin-top: 10px;
        }

        select {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-right: 10px;
        }

        button {
            padding: 10px;
            border: 5px;
            border-radius: 5px;
            background-color: orange;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: darkorange;
        }
    </style>
</head>
<body>
<header>
    <!-- Header content -->
    <!-- Header content -->
    <a href="#" class="logo">
        <img src="logo.svg" alt="Logo">
        <span class="logo-text">Multimedia Arts</span>
    </a>
    <p><?php echo htmlspecialchars($_GET['title']); ?></p>
    <nav>
        <ul>
            <li><a href="artworks.php">Artworks</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</header>
<main>
    <h1>Documentation Type:</h1>
    <form action="add_documentation.php" method="POST">
        <input type="hidden" name="dpo_id" value="<?php echo htmlspecialchars($_GET['id']); ?>">
        <div id="documentationDropdown">
            <label for="documentationDestination">Select Documentation Type:</label>
            <select name="documentationDestination" id="documentationDestination">
                <option value="photos">Photos</option>
                <option value="interview">Interview</option>
                <option value="av">A/V</option>
                <option value="docs">Docs</option>
            </select>
            <button type="button" onclick="showForm()">Add</button>
        </div>

        <div id="photosForm" class="form-container" style="display: none;">
            <label for="photosUrl">Photos URL:</label>
            <input type="url" id="photosUrl" name="photosUrl">
            <button type="submit">Save</button>
        </div>

        <div id="interviewForm" class="form-container" style="display: none;">
            <label for="interviewUrl">Interview URL:</label>
            <input type="url" id="interviewUrl" name="interviewUrl">
            <button type="submit">Save</button>
        </div>

        <div id="avForm" class="form-container" style="display: none;">
            <label for="avUrl">A/V URL:</label>
            <input type="url" id="avUrl" name="avUrl">
            <button type="submit">Save</button>
        </div>

        <div id="docsForm" class="form-container" style="display: none;">
            <label for="docsUrl">Docs URL:</label>
            <input type="url" id="docsUrl" name="docsUrl">
            <button type="submit">Save</button>
        </div>
    </form>
</main>
<footer>
    <!-- Footer content -->
    <p>&copy; <?php echo date("Y"); ?> Multimedia Arts. All rights reserved.</p>
</footer>
<script>
    function showForm() {
        var selectedOption = document.getElementById("documentationDestination").value;
        var form = document.getElementById(selectedOption + "Form");
        if (form) {
            form.style.display = "block";
        }
    }
</script>
</body>
</html>