<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="styleee.css">
</head>

<body>
    <main>
            <div class="container">
                <div class="row">
                  
                    <div class="form">
                        <div class="col-lg-5">
                        <h1 style="color:#fd7e14;"> SIGN UP</h1>
                        <div class="" style="border: 1px solid; width:40px; height: 5px; background-color: #fd7e14; border: none;"></div>
                       <p style="color:grey;"> Please Sign Up to your Account to cntinue with App</p>
                    </div>
                    <form>                          
                        <div class="form-row">
                          <div class=" name mb-3 ">
                            <ion-icon name="mail-outline" style="position:absolute; margin-left:15px; margin-top: 17px;"></ion-icon>
                            <input type="text" class="form-control" id="email" name="mail" class="form-control" placeholder="       Email Address" style="width:500px ;">
                            <span id="idemail" style="color:red; font-weight: bold;"></span>
                          </div>

                           <div class="mb-3 ">
                            <ion-icon name="key-outline" style="position:absolute; margin-left:15px; margin-top: 17px;"></ion-icon>
                              <input type="password" class="form-control" id="password" name="pass" placeholder="        ***********************************"style="width:500px ;" >
                              <span id="pass" style="color:red; font-weight: bold; "></span>
                            </div>
                           <div class="mb-3 ">
                            <ion-icon name="key-outline" style="position:absolute; margin-left:15px; margin-top: 17px;"></ion-icon>
                            <input type="password" class="form-control" id="passwordver" name ="cpass"placeholder="        *********************************" style="width:500px ;">
                            <span id="pass2" style="color:red; font-weight: bold; "></span>
                          </div> 
                             <input type="submit" value="Continue" class="btn1">          
                        <div class="mb-5">      
                        <p style="text-align:center;">Already Have an account?<a href="login.html" class=""style="text-decoration:none; color:green;">SIGN IN</a></p>
                        </div>
                        <div class="social" style="text-align:center;">
                            <p class="">Or signup with</p>
                                <img src="images/Image 1.png" alt="" width="50px">
                                <img src="images/Image 2.png" alt="" width="50px">
                                <img src="images/Image 3.png" alt="" width="65px">
                                <img src="images/Image 4.png" alt="" width="50px">
                            </div>
                    </form>
                    </div>                   
                </div>
            </div>
    </main>    

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
</body>
</html>