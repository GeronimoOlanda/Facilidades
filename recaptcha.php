<html DOCTYPE="html">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Teste com Recaptcha</title>

    <script type="text/javascript">
    var onloadCallback = function() {
        grecaptcha.render('html_element', {
            'sitekey': ''
        });
    };

    window.onload = function() {
        var $recaptcha = document.querySelector('#g-recaptcha-response');

        if ($recaptcha) {
            $recaptcha.setAttribute("required", "required");
        }
    };
    </script>
    <style>
    #g-recaptcha-response {
        display: block !important;
        position: absolute;
        margin: -78px 0 0 0 !important;
        width: 302px !important;
        height: 76px !important;
        z-index: -999999;
        opacity: 0;
    }
    </style>
</head>

<body>
    <form action="./config.php" method="POST">
       <div>
           <label for="">Nome</label><br>
           <input type="text" name="name" id="name" required><br>
       </div>
       <div>
           <label for="">email</label><br>
           <input type="email" name="email" id="email" required><br>
       </div>
       <div>
           <label for="">Deixe sua mensagem</label><br>
         <textarea name="message" id="message" cols="30" rows="10"></textarea><br><br><br>
       </div>
        <div id="html_element"></div>
        <br>
        <input type="submit" value="Submit">
    </form>

    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
    </script>
</body>

</html>