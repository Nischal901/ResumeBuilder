<?php
require './assets/class/database.class.php';
require './assets/class/function.class.php';
$title ="Admin Dashboard | Resume Builder";


$query = "SELECT id,full_name, email_id,password FROM users";
$result = $db->query($query);

$user = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $user[] = $row;
    }
} else {
    $fn->setError('No users found.');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <style>
/* styles.css */
.delete-button {
        background-color: #dc3545; /* Red color */
        color: white; /* White text color */
        border: none; /* No border */
        padding: 8px 16px; /* Padding */
        border-radius: 4px; /* Rounded corners */
        cursor: pointer; /* Cursor on hover */
        transition: background-color 0.3s; /* Smooth color transition */
    }

    /* Hover effect */
    .delete-button:hover {
        background-color: #c82333; /* Darker red on hover */
    }
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.dashboard {
    max-width: 1200px;
    margin: auto;
    padding: 20px;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
}

header h1 {
    margin: 0;
}

header a {
    background-color: #ff4d4d;
    border: none;
    color: white;
    padding: 10px 20px;
    cursor: pointer;
}

header a:hover {
    background-color: #ff1a1a;
}

main {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

#userManagement h2 {
    margin-top: 0;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: #f4f4f4;
}

button.edit, button.delete {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 5px 10px;
    cursor: pointer;
}

button.delete {
    background-color: #f44336; /* Red */
}

button.edit:hover {
    background-color: #45a049;
}

button.delete:hover {
    background-color: #d32f2f;
}


    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="dashboard">
        <header>
            <h1>Admin Dashboard</h1>
            <a href="admin.php" id="logoutButton">Logout</a>
        </header>
        <main>
            <section id="userManagement">
                <h2>User Management</h2>
                <table id="userTable">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($user as $users): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($users['id']); ?></td>
                        <td><?php echo htmlspecialchars($users['full_name']); ?></td>
                        <td><?php echo htmlspecialchars($users['email_id']); ?></td>
                        <td><?php echo htmlspecialchars($users['password']); ?></td>

                        <td>
                        <form method="post" action="actions/deleteusers.action.php" onsubmit="return confirm('Are you sure you want to delete this user?');">
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($users['id']); ?>" >
                            <button type="submit" class="delete-button">Delete</button>
                        </form>

                        </td>
                    </tr>
                <?php endforeach; ?>
                    </tbody>
                </table>
        </main>
    </div>
    <script src="script.js"></script>
</body>
</html>
<?php
require './assets/includes/footer.php';
?>
