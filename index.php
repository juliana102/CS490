<!doctype html>

<html>

    <head>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css">

        

        <meta charset="utf-8">

        <title>cs490 login</title>

    </head>

    <body>

        <section id = "pre">

            <center><h1 class="pre">LOGIN</h1></center>

        </section>

        <div id = "main">

            <section id = "form" name = "main">

                <center>

                    <form class="login" action="" method="POST">

                        <input type = "hidden" name = "isSubmitted" value = "1"/>



                        <input type="text" name="U" id="ucid" placeholder="UCID"/>

                        <br>

                        <input type="password" name="P" id="pass" placeholder="password"/>

                        <br>

                        <div id="err"> Enter UCID & Password </div>

                        <input type="submit" value = "Log In" name="submit"/>



                    </form>

                </center>



            </section>

        </div>



        <?php
        if(isset($_POST["submit"])){
        $url = 'https://web.njit.edu/~jac323/post.php';
        $fields = array(
          'ucid' => urlencode($_POST["U"]),
          'password'=> urlencode($_POST["P"])
        );

        $fields_string="";
        foreach($fields as $key=>$value) { $fields_string = $fields_string.$key.'='.$value.'&'; }
        rtrim($fields_string, '&');


        $ch = curl_init();


        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_POST, count($fields));
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);


        $result = curl_exec($ch);


        curl_close($ch);

        echo $result;
        }
        ?>


    </body>

</html>
