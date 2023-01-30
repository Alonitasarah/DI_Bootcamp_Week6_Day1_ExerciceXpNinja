<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="form.php" method = "POST">
     <div>
       <label> Nom : </label>
       <input type = "text"  name = "nom" require>
     </div> <br> 
    
     <div>
       <label> Prénom : </label>
       <input type = "text" name = "prenom" require>
     </div><br>
       
     <div>
        <input type = "checkbox" name = "couleur[]" value = "rouge" require>
        <label> rouge </label><br>

        <input type = "checkbox" name = "couleur[]" value = "bleu" require>
        <label> bleu </label><br>

        <input type = "checkbox" name = "couleur[]" value = "orange">
        <label> orange </label><br>
     </div><br>
      
     <div>
      <input type = "submit" name = "submit">
     </div>
     
    </form> 
</body>
</html>