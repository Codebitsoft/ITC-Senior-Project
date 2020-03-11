
<html lang="en-US">

  <head>
    <title>Tech Help - Chat</title>
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
    background-color: tomato;
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
    border: 2px solid tomato;
    background: none;
    margin: 20px auto;
    text-align: center;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    text-decoration: none;
    cursor: pointer;
    font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif, monospace;
}

.container button:hover {
    background: tomato;
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
    background-color: tomato;
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
    background: tomato;
}

input[type=email]:focus,
input[type=password]:focus {
    background-color: tomato;
    outline: none;
}

input[type=text] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: tomato;
}

input[type=text]:focus {
    background-color: tomato;
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
    background-color: tomato;
    color: white;
}

.pagination a:hover:not(.active) {
    background-color: tomato;
}

/*chat*/
.container-chat{
    border: 2px solid firebrick;
    background-color: salmon;
    border-radius: 5px;
    padding: 20px;
    margin: 20px 0;
}

.container-chat-darker{
    border: 2px solid darkred;
    background-color: darksalmon;
    border-radius: 5px;
    padding: 20px;
    margin: 20px 0;
}

.container-chat .container-chat-darker{
    content: "";
    clear: both;
    display: table;
}

.container-chat img {
    float: left;
    max-width: 60px;
    width: 100%;
    margin-right: 20px;
    border-radius: 50%;
}

.container-chat-darker img.right {
    float: right;
    max-width: 60px;
    width: 100%;
    margin-left: 20px;
    margin-right: 0;
    border-radius: 50%;
}

.time-right{
    float: right;
    color: white;
}

.time-left{
    float: left;
    color: white;
}

</style>
  </head>
  
  <body>
    <div class="container">
        <div class="header">
            <h1> Tech Help </h1>
            <p> Use the chat below to talk to a live technician! </p>
            <div class="nav">
                <a href="index.php">Home</a>
				<a href="logout.php">Log Out</a>
            </div>
        </div>
        <div class="main">
            <div class="container-chat">
                <img src="https://cdn.nohat.cc/w600/u1/1uzizMLlDaLvgv5ljAOYZ3B_36PbW3cI3FgNuf.jpg" alt="Technician Avatar">
                <p>Hello. How are you today?</p>
                <span class="time-right">11:00</span>
            </div>
            <div class="container-chat-darker">
                <img src="https://cdn3.iconfinder.com/data/icons/red-icons-1/512/Male-profile-icon-512.png" alt="User Avatar" class="right">
                <p>Hey! I'm fine, thanks!</p>
                <span class="time-left">11:01</span>
            </div>
            <div class="container-chat">
                <img src="https://cdn.nohat.cc/w600/u1/1uzizMLlDaLvgv5ljAOYZ3B_36PbW3cI3FgNuf.jpg" alt="Technician Avatar">
                <p>Awesome! What can I help you with today?</p>
                <span class="time-right">11:02</span>
            </div>
            <div class="container-chat-darker">
                <img src="https://cdn3.iconfinder.com/data/icons/red-icons-1/512/Male-profile-icon-512.png" alt="User Avatar" class="right">
                <p>My laptop has been blue screening a lot lately...</p>
                <span class="time-left">11:03</span>
            </div>
            <div class="container-chat">
                <img src="https://cdn.nohat.cc/w600/u1/1uzizMLlDaLvgv5ljAOYZ3B_36PbW3cI3FgNuf.jpg" alt="Technician Avatar">
                <p>Oof, I'm sorry to hear that. Have you installed any new software lately?</p>
                <span class="time-right">11:03</span>
            </div>
            <div class="container-chat-darker">
                <img src="https://cdn3.iconfinder.com/data/icons/red-icons-1/512/Male-profile-icon-512.png" alt="User Avatar" class="right">
                <p>Just a couple cracked games from a website</p>
                <span class="time-left">11:04</span>
            </div>
            <p>How are we doing? Click <a href="feedback.php">here</a> to provide feedback &amp; suggestions! We appreciate and consider all feedback!</p>
        </div>
    </div>
 
    </body>
</html>
