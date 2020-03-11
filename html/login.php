
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="/home/itsaph/Desktop/html/css/main.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Shadows+Into+Light');

.main {
    max-width: 600px;
    margin: 10px auto;
    padding: 25px;
    border-width: 5px;
    font-size: 14pt;
}

.container {
    position: relative;
    text-align: left;
    padding: 16px;
    font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif, monospace;
    font-size: 12pt;
   /* background-color: saddlebrown;*/
}

.header {
    padding: 60px;
    text-align: center;
    background-color: lightpink;
    /*background-image: url(https://media.giphy.com/media/7dJMPVnDuflbW/giphy.gif);*/
    background-repeat: no-repeat;
    background-size: auto;
    color: black;
    font-size: 18pt;
}

.header ul li {
    display: inline-block;
}

.nav {

    background-color: transparent;
    overflow: hidden;
    margin-top: auto;
    text-align: center;
    float: right;
    color: black;
    padding: 10px;
    text-decoration: none;
    font-size: 14pt;
    display: inline-block;
}

.nav a {
    color: black;
    text-decoration: none;
}

.nav a:hover {
    color: white;
}

.container button {
    display: inline-block;
    border: 2px solid lightpink;
    background: none;
    margin: 20px auto;
    text-align: center;
    padding: 14px 40px;
    outline: none;
    color: black;
    border-radius: 24px;
    transition: 0.25s;
    text-decoration: none;
    cursor: pointer;
    font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif, monospace;
}

.container button:hover {
    background: lightpink;
}

.container button a {
    text-decoration: none;
    color: black;
}

.footer {
    position: fixed;
    bottom: 0;
    left: 0;
    height: 70px;
    background-color: transparent;
    width: 100%;
}

body {
    margin-bottom: 120px;
    font-family: monospace;
}

h1 {
    text-align: center;
}

.codeblocks {
    background-color: lightpink;
    text-align: left;
}

/*For Forms*/
* {
    box-sizing: border-box;
}

input[type=email],
input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: lightpink;
}

input[type=email]:focus,
input[type=password]:focus {
    background-color: lightpink;
    outline: none;
}

input[type=text] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: lightpink;
}

input[type=text]:focus {
    background-color: lightpink;
    outline: none;
}

/*Pagination*/
.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    text-align: center;
}

.pagination a.active {
    background-color: lightpink;
    color: white;
}

.pagination a:hover:not(.active) {
    background-color: lightpink;
}

</style>
  </head>
  
  <body>
  <div class="container">
        <div class="header">
            <h1> Login </h1>
            <p> Fill out the form below to login. </p>
            <div class="nav">
                <a href="index.php">Home</a>
            </div>
        </div>
        <div class="main">
            <form method="post" action="session.php" name="regform">
                <label for="username"><b>Username:</b></label>
                <input type="text" placeholder="user123 or user@domain.com" name="username" required>
                
                <label for="pass"><b>Password:</b></label>
                <input type="password" placeholder="Password pls" name="pass" required>
                
                <input type="submit" value="Login">
            </form>
            <p>Don't have an account? <a href="register.php">Register here</a>.</p>
            <p>Technical difficulties? Head over to our <a href="techhelp.php">Tech Help - Chat</a> page to get some assistance!</p>
        </div>
    </div>
</body>
</html>