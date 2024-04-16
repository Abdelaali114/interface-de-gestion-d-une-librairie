
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Addpatient.css">
</head>
<body>
<section class="Home">
        <div class="patient">
            <h1 class="un"><span>Patient</span> Registration 📝</h1><br><br><br>
            <div class="paragraph-container"> 
            <form action="login.php" method="post">
        
               <?php if (isset($_GET['error'])) { ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
              <?php } ?>
              <label for=""> Full Name</label>
              <input type="text" name ="Full_Name" placeholder="Full Name"><br>
              <label for=""> Date of Birth</label>
               <input type="Date" name ="Date_of_Birth" placeholder="Date of Birth"><br>
               <label for="">Gender</label>
               <input type="Text" name ="Gender" placeholder="Gender"><br>
               <label for=""> Adress</label>
              <input type="Adress" name ="Adress" placeholder="Adress"><br>
               <label for=""> Email</label>
              <input type="Email" name ="Email" placeholder="Email"><br>
              <label for=""> Phone Number</label>
              <input type="text" name ="Phone_Number" placeholder="Phone Number"><br>
              <label for=""> Do you have a disease ?</label>
              <input type="choice" name ="Phone_Number" placeholder="Phone Number"><br>
            </form>
                
            </div>
        </div>
    </section>
</body>
</html>
