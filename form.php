
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre</title>
    </head>

    <body>
    

  <form action="/file.php" method="post">
 
   <fieldset>
       <legend>Your details</legend>
         <form action="/file.php" method="post">
        <label for="nom">Name:</label>
         <input type="text" id="nom" name="user_name">

      <label for="courriel">what is your phone number :</label>
         <input id="telNo" name="number" type="tel" size="20" minlength="9" maxlength="10">

 
       <label for="email">What is your email ?</label>
       <input type="email" name="user_email" id="email" />



   </fieldset>
 <fieldset>
     
    <form  action="file.php" method="post" >
        <select id="number" name="rep">
<p>
 what criteria would you choose for a return to formation<br>
     
          <option value="Geographic location">Geographic location</option>
          <option value="Pedagogy">Pedagogy </option>
          <option value="Trainer qualification">Trainer qualification </option>
          <option value="The training price ">The training price</option>
        

     </select>
</p>
</fieldset>
   <fieldset>

    <form action="/file.php" method="post">
             <label for="message">Message :</label>
        <textarea id="message" name="user_message"></textarea>
    </div></br>
      
    <div class="button">
        <button type="submit">Send your message</button>
    </div></form>
</form>
   </fieldset>
 

</p>
</form>
 
    
 </fieldset>
    

 </body>
</html>