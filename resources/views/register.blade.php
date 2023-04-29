<!DOCTYPE html>
<html>

<head>
     <link rel="icon" type="img" href="img/gambar.png">
     <meta charset="utf-8">
     <title>Iqbal Faris Akbar</title>
     @include('includes.style')
</head>

<body id="login">
     <form action="/registeruser" method="POST">
          @csrf
          <div id="loginbox">
               <div class="container">
                    <a href="/"><img src="img/IP V3.jpg" width="60px" height="60px"></a>
                    <h1>Register</h1>

                    <div class=" row mb-3 Rlogin">
                         <label for="email" class="col-sm-2 col-form-label" required="">Nama :</label>
                         <div class="col LogIn">
                              <input type="text" id="name" name="name" class="form-control" placeholder="Nama ">
                         </div>
                    </div>

                    <div class=" row mb-3 ">
                         <label for="email" class="col-sm-2 col-form-label" required="">Email :</label>
                         <div class="col LogIn">
                              <input type="email" id="email" name="email" class="form-control" placeholder=" E-Mail">
                         </div>
                    </div>

                    <div class=" row mb-3">
                         <label for="email" class="col-sm-2 col-form-label" required="">Password :</label>
                         <div class="col LogIn">
                              <input type="password" id="password" name="password" class="form-control" placeholder="password">
                         </div>
                    </div>

                    <div class=" button">
                         <button class="btn" type="submit"><i class="fa-regular fa-paper-plane fa-bounce" style="--fa-animation-duration: 2.5s;"></i> Register </button>
                    </div>
               </div>
          </div>
     </form>

</body>


</html>