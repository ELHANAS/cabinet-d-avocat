<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cabinet D'avocat Login</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
	<link href="style.css" rel="stylesheet">
   <style>
       #back{
           border-left:6px solid gold;
           background:url('images/AdobeStock295967841jpeg_629dca4f32009.jpg') no-repeat;
           background-size: cover;

           position: fixed;
           height: 100%;width: 50%;
           right: 0;
       }
       </style>

</head>
<body >
<section class=" gradient-form" style="background-color: #eee;position: fixed;height: 100%">

                    <div class="row g-0">
                        <div class="col-lg-6" style="position: fixed;height: 100%;width: 50%;left: 0">
                            <div class="card-body p-md-5 w-75 m-auto">

                                <div class="text-center">
                                    <img src="./images/icon/logo-caroline-alix-avocat-guadeloupe-400.png"
                                         style="width: 185px;" alt="logo">
                                    <h4 class="mt-1 mb-5 pb-1">Cabinet d'avocat</h4>
                                </div>

                                <form action="/acceuil">
                                    <p>Please login to your account</p>

                                    <div class="form-outline mb-4">
                                        <input type="email" id="form2Example11" class="form-control"
                                               placeholder="Phone number or email address" />
                                        <label class="form-label" for="form2Example11">Username</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="form2Example22" class="form-control" />
                                        <label class="form-label" for="form2Example22">Password</label>
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button type="submit" class="btn text-white mb-3" style="background: gold" type="button">Log
                                            in</button>
                                        <a class="text-muted" href="#!">Forgot password?</a>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div id="back" class="col-lg-6 d-flex  align-items-center gradient-custom-2" style="">

                        </div>

    </div>
</section>
</body>
</html>
