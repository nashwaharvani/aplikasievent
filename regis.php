<?php include('koneksi.php');
 session_start();

  $hostname= "localhost";
	$email= "root";
	$password= "";
	$db_name= "db_dcf";

  ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link href="koneksi.php" rel="stylesheet">

    <title>Login Bootstrap</title>
    </head>
    <body>
            <form action ="login.php" method = "post" onSubmit = "return validasi()">

    <div class="global-container">
        <div class="card login-form">
        <div class="card-body">

         </div>
         <div class="card text">
            <form>
                <div class="mb-3">
<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  <style>
    .background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -150px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(300%) blur(25px);
    }
  </style>

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form>
            <h1 class="card-tittle text-center" style="color: #393f81;">Registrasi </h1>

             <!-- Name input -->
                <div class="form-outline mb-2">
                <input type="text" id="form3Example3" class="form-control" />
                <label class="form-label" for="form3Example3">Enter Your Name</label>
             </div>
              <!-- Email input -->
              <div class="form-outline mb-2">
                <input type="text" id="form3Example3" class="form-control" />
                <label class="form-label" for="form3Example3">Enter Your Email</label>
              </div>
               <!-- Password input -->
               <div class="form-outline mb-2">
                <input type="password" id="form3Example3" class="form-control" />
                <label class="form-label" for="form3Example3">Enter Your Password</label>
              </div>

              <!-- Password confirm -->
              <div class="form-outline mb-2">
                <input type="password" id="form3Example4" class="form-control" />
                <label class="form-label" for="form3Example4">Confirm Your Password</label>
              </div>
        
        <p class="mb-4 pb-lg-2" style="color: #393f81;"><a href="#!" 
                 style="color: #393f81;"></a></p>
              </div>
                   
        <button type="" class="btn btn-primary btn-block mb-4" a href= "login.php">
        Register now  


                
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

 </body>
 <script type ="text/javascript">
function validasi(){
	var username = document.getElementById("email").value;
	var password = document.getElementById("password").value;
  var username = document.getElementById("name").value;
	if(email!=""&&password!=""name!=""){
		return true;
	} else {
		alert('email,name dan password harus diisi!');
return false;}}

</script>

</html>