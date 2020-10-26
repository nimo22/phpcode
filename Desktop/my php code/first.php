<?php if ($_SERVER[ "REQUEST_METHOD" ] == "POST"):?>
    <?php $firstname=$_POST["firstn"] ;?>
    <?= $firstname ; ?>
    <?php $password=$_POST["password"] ;?>
    <?=  $password ;?>
    <?php $destination=$_POST["destination"];?>
    <?= $destination ;?>
    <?php $erreur=[] ; ?>
    <?php $checkBoxContaineur=[];?>
   <?php $carCHOOSING=$_POST['carContaineur'];?>
   <?= count($carCHOOSING)?>
   <?php if (trim($destination)=="lvl" && in_array("honda",$carCHOOSING)): ?>
    <?= 'choix invalide' ?>
    <?php  endif ?>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="utf-8">
<title>facebook</title>
<style>
    .midle{
        text-align: center;
    }
    .radio{
        text-align: center;

    }

</style>
</head>
<body>
<?php $container=["mtl"=>"montreal","lvl"=>"laval", "br"=>"beirut"]?>
<form  class ="midle" action="first.php" method="POST" >
<label for="firstn">firstname</label>
<input name="firstn" type="text" id="firstn" placeholder="username"><br>
<label for="password">Password</label>
<input name="password" id="password" type="password" placeholder="*****"><br>
<label for="destination">Destinaiton</label><br>
<select name="destination" id="destination ">
    <?php foreach ($container as $ab=> $full): ?>
        <option value="<?= $ab ?> "
         <?php echo ( trim($ab) == trim($destination) ? 'selected' : '' )?> 
         >
          <?= $full ?> 
        </option>
<?php endforeach; ?>
</select>
<br>
<?php $carContaineur=["H"=>"honda","T"=>'toyota','B'=>'bmw'] ;?>
<?php foreach($carContaineur  as $selectedCar => $carMaker): ?>
    <label for="<?= $carMaker ;?>" > " <?= $selectedCar; ?>"
    <input type="checkbox" name="carContaineur[]" id="<?= $carMaker;?>" value="<?=$carMaker;?>"
    <?= in_array($carMaker,$carCHOOSING) ? 'checked' : '' ?>
    >
</label>
<?php endforeach ; ?>
        

<input type="submit" placeholder="submit">
</form>
<!-- validation---->
<br>
</body>
</html> 