<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');

body {
    margin: 0;
    font-family: 'Roboto', sans-serif;
    overflow-x: hidden;
}

.hero-section {
    background: rgb(249, 249, 249);
    background: radial-gradient(circle, rgba(249, 249, 249, 1) 0%, rgba(240, 232, 127, 1) 49%, rgba(246, 243, 132, 1) 100%);
    position: relative;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.container {
    position: relative;
    z-index: 2;
    max-width: 1200px;
    padding: 0 20px;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 0;
}

header .logo {
    width: 120px;
    height: auto;
}
main h1 {
    font-family: 'Montserrat', sans-serif;
    font-size: 3em;
    margin: 0.5em 0;
    animation: fadeInDown 1s ease-out;
}

main p {
    font-size: 1.2em;
    margin-bottom: 2em;
    animation: fadeInUp 1s ease-out;
}

.login-buttons {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.btn {
    display: inline-block;
    padding: 15px 35px;
    font-size: 1.1em;
    font-weight: 700;
    color: white;
    text-decoration: none;
    border-radius: 50px;
    transition: transform 0.2s, background-color 0.3s ease;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.admin-btn {
    background-color: #ff6f61;
    box-shadow: 0 4px 15px rgba(255, 111, 97, 0.5);
}
.register-btn {
    background-color: #72A0C1;
    box-shadow: 0 4px 15px rgba(255, 111, 97, 0.5);
}
.user-btn {
    background-color: #4caf50;
    box-shadow: 0 4px 15px rgba(76, 175, 80, 0.5);
}

.btn:hover {
    transform: translateY(-5px);
}

.admin-btn:hover {
    background-color: #e65a50;
}

.user-btn:hover {
    background-color: #43a047;
}

@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

    </style>

</head>
<body>
    <div class="hero-section">
        <div class="overlay"></div>
        <div class="container">
            <header>
                <img src="./assets/images/logo.png" alt="Logo" class="logo">
            </header>
            <main>
                <h1>Build Your Professional Resume Effortlessly</h1>
                <p>Create a standout resume that lands you the job you deserve.</p>
                <div class="login-buttons">
                    <a href="register.php" class="btn register-btn">Register</a>
                    <a href="admin.php" class="btn admin-btn">Admin Login</a>
                    <a href="login.php" class="btn user-btn">User Login</a>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
