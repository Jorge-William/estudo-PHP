<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aliens Abducted Me - Report an Abduction</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    
</head>
<body>
    <h1>
        Aliens Abducted Me - Report an Abduction 
    </h1>
    <p>
        Share  your story of alien abduction:
    </p>
    <form method="post" action="report.php">
        <label for="firstname">First name:</label>
        <input type="text" name="firstname"  id="firstname"><br>
        <label for="lastname">Last name:</label>
        <input type="text" name="lastname" id="lastname"><br>
        <label for="email">What is your email adress?</label>
        <input type="email" name="email" id="email"><br>
        <label for="whenithappened">When did it happen?</label>
        <input type="text" name="whenithappened" id="whenithappened"><br>
        <label for="howlong">How long were you gone?</label>
        <input type="text" name="howlong" id="howlong"><br>
        <label for="howmany">How many did you see?</label>
        <input type="text" name="howmany" id="howmany"><br>
        <label for="aliendescription">Describe then:</label>
        <input type="text" name="aliendescription" id="aliendescription" size="32"><br>
        <label for="whattheydid">What did they do to you?</label>
        <input type="text" name="whattheydid" id="whattheydid" size="32"><br>
        <label for="fangspoted">Have you seen my dog Fang?</label>
        Yes<input type="radio" name="fangspoted" value="yes" id="fangspoted">
        No<input type="radio" name="fangspoted" value="no" id="fangspoted"><br>
        <img src="imagens/fang.jpg" width="100" height="175" alt="My adbucted dog Fang"><br>
        <label>Anything else you want to add?</label>
        <textarea name="other" ></textarea><br>
        <input type="submit" name="submit" value="Report Abduction">
    </form>

</body>
</html>