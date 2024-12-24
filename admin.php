<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Admin Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
        }
        .left-frame {
            width: 200px;
            background-color: #333;
            color: white;
            height: 100vh;
            display: flex;
            flex-direction: column;
            padding: 20px;
        }
        .left-frame a {
            color: white;
            padding: 10px 0;
            text-decoration: none;
            cursor: pointer;
        }
        .left-frame a:hover {
            background-color: #444;
        }
        .right-frame {
            flex-grow: 1;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="left-frame">
        <a onclick="showContent('manage-users')">Manage Users</a>
        <a onclick="showContent('manage-cars')">Manage Cars</a>
        <a onclick="showContent('manage-bookings')">Manage Bookings</a>
    </div>
    <div class="right-frame" id="right-frame">
        <h2>Welcome to Admin Dashboard</h2>
        <p>Select an option from the menu to manage the respective section.</p>
    </div>

    <script>
        function showContent(section) {
            let content = '';
            switch(section) {
                case 'manage-users':
                    content = '<h2>Manage Users</h2><p>Here you can manage users.</p>';
                    break;
                case 'manage-cars':
                    content = '<h2>Manage Cars</h2><p>Here you can manage cars.</p>';
                    break;
                case 'manage-bookings':
                    content = '<h2>Manage Bookings</h2><p>Here you can manage bookings.</p>';
                    break;
                default:
                    content = '<h2>Welcome to Admin Dashboard</h2><p>Select an option from the menu to manage the respective section.</p>';
                    break;
            }
            document.getElementById('right-frame').innerHTML = content;
        }
    </script>
</body>
</html>
