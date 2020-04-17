<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css">
				<link rel="stylesheet" href="css/styles.css">
        <meta charset="utf-8">
         <script type = "text/javascript" src = "script/login.js" ></script>
        <title>Login</title>
    </head>
    <body onload="formListener();">
        <section id = "pre">
            <center><h1 class="pre">LOGIN</h1></center>
        </section>
        <div id = "main">
            <section id = "form" name = "main">
                <center>
                    <form action="" method="" id="login-form">
                        <input type="hidden" id="reqid" name="reqid" value="0"/>
                        <input type="text" name="username" id="username" placeholder="UCID"/>
                        <br>
                        <input type="password" name="password" id="password" placeholder="Password"/>
                        <br>
                        <div> Enter UCID & Password </div>
                        <button type="submit" id="submitform"> Submit </button>
                    </form>
                    <h1 id="error"> </h1>
                </center>
            </section>
        </div>
</body>

</html>
