<!DOCTYPE html>

<html>

<head>
    <title> Feedback </title>
    <style>
    .feedback{
    position: relative;
    text-align: left;
    padding: 16px;
    font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif, monospace;
    font-size: 12pt;
   /* background-color: saddlebrown;*/
    }
    
    .main {
    max-width: 600px;
    margin: 10px auto;
    padding: 25px;
    border-width: 5px;
    font-size: 14pt;
    }
    
    .header {
    padding: 60px;
    text-align: center;
    background-color: thistle;
    /*background-image: url(https://media.giphy.com/media/7dJMPVnDuflbW/giphy.gif);*/
    background-repeat: no-repeat;
    background-size: auto;
    color: black;
    font-size: 18pt;
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

.feedback button{
display: inline-block;
    border: 2px solid thistle;
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

.feedback button:hover {
    background: thistle;
}

.feedback button a {
    text-decoration: none;
    color: black;
}

body {
    margin-bottom: 120px;
    font-family: monospace;
}

h1 {
    text-align: center;
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
    background: thistle;
}

input[type=email]:focus,
input[type=password]:focus {
    background-color: thistle;
    outline: none;
}

input[type=text] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: thistle;
}

input[type=text]:focus {
    background-color: thistle;
    outline: none;
}

    </style>
</head>

</body>
    <div class="feedback">
        <div class="header">
            <h1> Feedback </h1>
            <p> We appreciate any constructive criticism that comes our way! </p>
            <div class="nav">
                <a href="index.php">Home</a>
            </div>
        </div>
        <div class="main">
            <form action="sendmail.php" method="POST">
                <label for="name"><b>Name:</b></label>
                <input type="text" name="name">
                
                <label for="email"><b>Email:</b></label>
                <input type="email" name="email">
                
                <b>Comments: <br> </b>
                <textarea name="comments" rows="15" cols="50"></textarea>
                
                <input type="submit" value="Submit Feedback">
            </form>
            <p>Technical difficulties? Head over to our <a href="techhelp.html">Tech Help - Chat</a> page to get some assistance!</p>
        </div>
    </div>
</body>

</html>
