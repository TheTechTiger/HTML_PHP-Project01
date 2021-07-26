<html>
    <head>
        <title>
            Registration Form
        </title>
        <link rel="stylesheet" type="text/css" href="css/stylereg.css">
        <link rel="icon" href="avtar.png">
    </head>
    <body>
        <div class="regbx">
            <h1>
                Registration Form
            </h1>
            <form action="regform.php" method="post">
                <p>
                    Firstname
                </p>
                <input type="text" name="fnm" placeholder="Enter Your Firstname" required>
                <p>
                    Lastname
                </p>
                <input type="text" name="lnm" placeholder="Enter Your Lastname" required>
                <p>
                    E-mail
                </p>
                <input type="email" name="eml" placeholder="Enter Your E-mail" required>
                <p>
                    Passsword
                </p>
                <input type="password" name="pss" placeholder="Set a Strong Password" maxlength="10" required>
                <p>
                    Phone Number
                </p>
                <input type="phone" name="phone" placeholder="Enter Your Phone Number" maxlength="13" required>
                <p>    
                <input type="submit" value="Submit">
                <a href="index.html">
                    Already Have An Account?
                </a>
            </form>
        </div>
    </body>
</html>