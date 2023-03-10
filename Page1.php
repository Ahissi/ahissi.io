<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
  
    <link rel="stylesheet" >
    <style>


.input {
  max-width: 190px;
  height: 44px;
  background-color: #05060f0a;
  border-radius: .5rem;
  padding: 0 1rem;
  border: 2px solid transparent;
  font-size: 1rem;
  transition: border-color .3s cubic-bezier(.25,.01,.25,1) 0s, color .3s cubic-bezier(.25,.01,.25,1) 0s,background .2s cubic-bezier(.25,.01,.25,1) 0s;
}

.label {
  display: block;
  margin-bottom: .3rem;
  font-size: .9rem;
  font-weight: bold;
  color: #05060f99;
  transition: color .3s cubic-bezier(.25,.01,.25,1) 0s;
}

.input:hover, .input:focus, .input-group:hover .input {
  outline: none;
  border-color: #05060f;
}

.input-group:hover .label, .input:focus {
  color: #05060fc2;
}
    
body{
    background:url(./Images/im2.JPEG) center/cover ;
    backdrop-filter: blur(15px);
    margin: 00px;
    padding: 00px;
    height: 110vh;
  color: #05060f99;
  transition: color .3s cubic-bezier(.25,.01,.25,1) 0s;

}

form{
    border-radius: 10px;
    border: 1px solid rgb(255, 255, 255);
    width: 1200px;
    
    box-shadow: 4px 4px 5px black;

}

legend{
    text-align: center;
   
    font-size: 60px;
    text-transform: uppercase;
    text-decoration:underline;
    color: rgb(17, 12, 12);
}

a{
    font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
    font-size: 24px;
    text-decoration: none;
    color:rgb(0, 2, 95);
    border-bottom: 1px solid rgb(0, 2, 95);
    border-radius: 10px;
    padding: 5px 50px;
    transition: 0.5s;
}


button {
  /* Variables */
 --button_radius: 0.75em;
 --button_color: #e8e8e8;
 --button_outline_color: #000000;
 font-size: 17px;
 font-weight: bold;
 border: none;
 border-radius: var(--button_radius);
 background: var(--button_outline_color);
}

.button_top {
 display: block;
 box-sizing: border-box;
 border: 2px solid var(--button_outline_color);
 border-radius: var(--button_radius);
 padding: 0.75em 1.5em;
 background: var(--button_color);
 color: var(--button_outline_color);
 transform: translateY(-0.2em);
 transition: transform 0.1s ease;
}

button:hover .button_top {
  /* Pull the button upwards when hovered */
 transform: translateY(-0.33em);
}

button:active .button_top {
  /* Push the button downwards when pressed */
 transform: translateY(0);
}



</style>
</head>
<body>

    <form action="code.php" name="frm" method="POST" align="center" >
        <legend align="center"><u>ENREGISTREMENT DES PARTICIPANTS</u></legend>
        <br/> <br/> <br/>
        <div class="input-group">

        <label class="label">NOM :</label>
    <input autocomplete="off" name="nom" class="input" type="text">

    <label class="label">PRENOMS :</label>
    <input autocomplete="off" name="prenom" class="input" type="text">

    <label class="label">NUMERO</label>
    <input autocomplete="off" name="tel" class="input" type="text">

    <label class="label">ADRESSE Email</label>
    <input autocomplete="off" name="email" id="Email" class="input" type="email">
    <div></div></div>
        <br/>
        <br/>
        <br/>
        <button>
  <span class="button_top"> VALIDER </span>
</button>
<p align="right"><u><a href="Page2.php">Liste des participants</a></u></p>
    </form>
</body>
</html>