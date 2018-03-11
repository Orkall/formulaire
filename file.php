
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre</title>
    </head>

    <body>
    
        <p> Hello <?php echo $_POST['user_name']; ?></p>
        <p> My email is the following<?php echo $_POST['user_email']; ?></p>
        <p> The criteria I choose is  <?php echo $_POST['rep']; ?></p>
        <p> My number is the following :  <?php echo $_POST['number']; ?></p>
        <p> I tell  <?php echo $_POST['user_message']; ?></p>
 </body>
</html>