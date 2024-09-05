<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login & Signup</title>
    <style>
        body {
            font-family: Cambria, Georgia, serif;
            background-image: url('JP3.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-color: rgba(255, 255, 255, 0.5);
            margin: 0;
            padding: 0;
            display: flex;
            font-weight: bold;
        }

        h1 {
            background: 00FFFFFF;
            text-align: evenly;
            color: #02f5ac;
            top: -10px;
            right: 50px;
            font-size: 5rem;
            padding: -2px 1em;
            font-weight: bold;
            cursor: pointer;
            font-family: "Arial Black MT Bold";
        }

        .dashboard-button,
        .menu-button,
        .nf-button {
            position: absolute;
            top: 10px;
            background-color: #27c8a9;
            color: #fff;
            padding: 15px 40px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
        }

        .dashboard-button:hover,
        .menu-button:hover,
        .nf-button:hover {
            background-color: #0a0a0a;
        }

        .dashboard-button {
            left: 10px;
        }

        .menu {
            position: absolute;
            top: 60px;
            left: -200px;
            background-color: #0a0a0a;
            color: #ff4500;
            padding: 10px;
            border-radius: 25px;
            transition: left 0.3s;
        }

        .menu a {
            display: block;
            margin-bottom: 50px; /* Adjusted margin to make menu items closer together */
            color: #fff;
            text-decoration: none;
        }

        .menu a:hover {
            background-color: #02f502;
            padding: 10px;
            border-radius: 25px;
            color: #000;
            padding-left: 40px;
            padding-right: 40px;
        }

        .form-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: 00FFFFFF;
            padding: 20px;
            border-radius: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: left;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 50px;
        }

 .form-button {
    background-color: #3eb300;
    color: #fff;
    border: none;
    border-radius: 40px;
    padding: 10px 20px;
    cursor: pointer;
    width: 105px;
    transition: background-color 0.3s ease-in-out;
	}

        .form-button:hover {
            background-color: #555;
        }

        .success-message {
            background-color: #4CAF50;
            color: #fff;
            text-align: center;
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
            width: 50%;
            margin-left: 25%;
            display: none;
        }
    </style>
</head>
<body>
<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Parole</h1>
<div class="dashboard-button" id="dashboard-button"><i class="fa-solid fa-bars"></i></div>
<div class="menu" id="menu">
    <a href="prisoner.html"><i class="fa-solid fa-house"></i>&nbsp;&nbsp;&nbspHome</a>
   <a href="Login.php"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;&nbsp;&nbspLogin/Signup</a>
    <a href="Signup.html" target="_blank"><i class="fa-regular fa-user"></i>&nbsp;&nbsp;&nbspNew Registration</a>
    <a href="Q&A.html" target="_blank"><i class="fa-solid fa-question" style="color: #ffffff;">&nbsp;&nbsp;&nbsp</i>Q & A</a>
    <a href="about.html" target="_blank"><i class="fa-solid fa-circle-info"></i>&nbsp;&nbsp;&nbspAbout</a>
</div>
</div>
<div class="form-container" id="login-form">
<h2>Login</h2>

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the form has been submitted
        $username = $_POST["harsha@gmail.com"];
        $password = $_POST["harsha2002"];
   }
   ?>
 
 <form method="POST" action="login2.php">
        <label for="username"><i class="fa-solid fa-user" style="color: #101114;"></i>&nbsp;&nbsp;Username:</label>
        <input type="text" name="username" placeholder="Username" required class="form-input">
        <label for="password"><i class="fa-solid fa-key" style="color: #0c0d0d;"></i>&nbsp;&nbsp;Password:</label>
        <input type="password" name="password" placeholder="Password" required class="form-input"></i></i></button>
       <a href="login2.php"><button type="submit" class="form-button">Submit</i></i></button>
        <p>
            Don't have an Account? 
            <a href="createone.html" target="_blank">Create One</a>
        </p>
    </form>
</div>

   
	    <script>

         const dashboardButton = document.getElementById('dashboard-button');
    const menu = document.getElementById('menu');
    const menuButton = document.getElementById('menu-button');
    const welcomeMessage = document.getElementById('welcome-message');

    dashboardButton.addEventListener('click', () => {
        menu.style.left = menu.style.left === '0px' ? '-200px' : '0px';
    });

    menuButton.addEventListener('click', () => {
        menu.style.left = menu.style.left === '0px' ? '-200px' : '0px';
    });

    document.getElementById("nf-button").addEventListener("click", function () {
        window.open("notification.html", "_blank");
    });

    const aboutLink = document.querySelector('a[href="about.html"]');
    aboutLink.addEventListener('click', () => {
        welcomeMessage.textContent = 'Welcome to my website!';
    });
</script>
</body>
</html>
