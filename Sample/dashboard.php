<?php
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <!-- Header content goes here -->
        <h1>Header</h1>
    </header>
    
    <div class="container">
        <aside class="sidebar">
            <!-- Left sidebar content goes here -->
            <h2>Sidebar</h2>
            <ul>
                <li class="sidebar-item" data-content="dashboard">Dashboard</li>
                <li class="sidebar-item" data-content="inventory">Inventory</li>
                <li class="sidebar-item" data-content="sales">Sales</li>
                <li class="sidebar-item" data-content="users">Users</li>
            </ul>
        </aside>
        
        <main class="main-content">
            <!-- Main content goes here -->
            <div id="content-dashboard" class="content hidden">Dashboard Content</div>
            <div id="content-inventory" class="content hidden">Inventory Content</div>
            <div id="content-sales" class="content hidden">Sales Content</div>
            <div id="content-users" class="content hidden">Users Content</div>
        </main>
    </div>
    
    <footer>
        <!-- Footer content goes here -->
        <p>Footer</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>


