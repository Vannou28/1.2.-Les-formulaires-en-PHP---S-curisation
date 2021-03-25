<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>


<form  action='thanks.php'  method="post">

    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name" placeholder= "Dupond" required>
    </div>
    <div>
      <label  for="prenom">Prénom :</label>
      <input  type="text"  id="prenom"  name="user_firstName" placeholder= "Alain" required>
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email" placeholder= "dupond.alain@dommain.com" required>
    </div>
    <div>
      <label  for="phoneNumber">Tel :</label>
      <input  type="text"  id="phoneNumber"  name="user_phoneNumber" placeholder= "06**********" required>
    </div>
    <div>
      <label for="lstDestination">Votre destinantion :</label>
        <select id="lstDestination" name="lstDestination" >
          <option value="Les Philippines">Les Philippines</option>
          <option value="Japon">Japon</option>
          <option value="Tahiti">Tahiti</option>
          <option value="Australie">Australie</option>
        </select>

    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"  placeholder= "Veuillez renseigner le motif de votre demande" required></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>

  
  </form>
 

  </body>
</html>
