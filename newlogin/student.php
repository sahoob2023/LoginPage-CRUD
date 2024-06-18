 <?php
  include 'connection.php';

  if (isset($_POST['sub12'])) {
    $newname = $_POST['name1'];
    $newemail = $_POST['email1'];
    $newcompany = $_POST['company1'];
    $newnumber = $_POST['number1'];
    $newaddress = $_POST['address1'];
    $newmessage = $_POST['mess1'];
    $newfav = $_POST['fav'];

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./image/" . $filename;

    $sql = "insert into employee(name,email,company,noo,address,message,gender,filename)values('$newname','$newemail','$newcompany','$newnumber','$newaddress','$newmessage','$newfav','$filename')";
    $result = mysqli_query($conn, $sql);

    if(move_uploaded_file($tempname, $folder)) {
      echo "<h3>  Image uploaded successfully!</h3>";
    } else {
      echo "<h3>  Failed to upload image!</h3>";
    }

    if ($result) {
      header('Location:table.php');
    } else {
    }
  }
  ?>
 
 

 <html>

 <head>
   <title>form</title>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

   <style>
    
     .get-in-touch {
       max-width: 800px;
       margin: 50px auto;
       position: relative;

     }

     .get-in-touch .title {
       text-align: center;
       text-transform: uppercase;
       letter-spacing: 3px;
       font-size: 3.2em;
       line-height: 48px;
       padding-bottom: 48px;
       color: #5543ca;
       background: #5543ca;
       background: -moz-linear-gradient(left, #f4524d 0%, #5543ca 100%) !important;
       background: -webkit-linear-gradient(left, #f4524d 0%, #5543ca 100%) !important;
       background: linear-gradient(to right, #f4524d 0%, #5543ca 100%) !important;
       -webkit-background-clip: text !important;
       -webkit-text-fill-color: transparent !important;
     }

     .contact-form .form-field {
       position: relative;
       margin: 32px 0;
     }

     .contact-form .input-text {
       display: block;
       width: 100%;
       height: 36px;
       border-width: 0 0 2px 0;
       border-color: #5543ca;
       font-size: 18px;
       line-height: 26px;
       font-weight: 400;
     }

     .contact-form .input-text:focus {
       outline: none;
     }

     .contact-form .input-text:focus+.label,
     .contact-form .input-text.not-empty+.label {
       -webkit-transform: translateY(-24px);
       transform: translateY(-24px);
     }

     .contact-form .label {
       position: absolute;
       left: 20px;
       bottom: 11px;
       font-size: 18px;
       line-height: 26px;
       font-weight: 400;
       color: #5543ca;
       cursor: text;
       transition: -webkit-transform .2s ease-in-out;
       transition: transform .2s ease-in-out;
       transition: transform .2s ease-in-out,
         -webkit-transform .2s ease-in-out;
     }

     .contact-form .submit-btn {
       display: inline-block;
       background-color: #000;
       background-image: linear-gradient(125deg, #a72879, #064497);
       color: #fff;
       text-transform: uppercase;
       letter-spacing: 2px;
       font-size: 16px;
       padding: 8px 16px;
       border: none;
       width: 200px;
       cursor: pointer;
       margin-left: 120px;
     }
   </style>
 </head>

 <body>

   <section class="get-in-touch">
     <h1 class="title">EMPLOYEE DETAILS</h1>
     <form class="contact-form row" method="post" enctype="multipart/form-data">
       <div class="form-field col-lg-6">
         <input id="name" class="input-text js-input" type="text" name="name1" required>
         <label class="label" for="name">Name</label>
       </div>
       <div class="form-field col-lg-6 ">
         <input id="email" class="input-text js-input" type="email" name="email1" required>
         <label class="label" for="email">E-mail</label>
       </div>
       <div class="form-field col-lg-6 ">
         <input id="company" class="input-text js-input" type="text" name="company1" required>
         <label class="label" for="company">Company Name</label>
       </div>
       <div class="form-field col-lg-6 ">
         <input id="phone" class="input-text js-input" type="text" name="number1" required>
         <label class="label" for="phone">Contact Number</label>
       </div>
       <div class="form-field col-lg-6">
         <input id="message" class="input-text js-input" type="text" name="address1" required>
         <label class="label" for="message">Address</label>
       </div>
       <div class="form-field col-lg-6">
         <input id="message" class="input-text js-input" type="text" name="mess1" required>
         <label class="label" for="message">Message</label>
       </div>

       <div class="form-field col-lg-6">
         <input type="radio" id="html" name="fav" value="male">
         <label for="html">MALE</label>
         <input type="radio" id="css" name="fav" value="female">
         <label for="css">FEMALE</label><br>
       </div>

       <div class="form-field col-lg-6">
         <input class="input-text js-input" id="message" type="file" name="uploadfile" value="" required />
       </div>
       <div class="form-field col-lg-12">
         <input class="submit-btn" type="submit" name="sub12" value="Submit">
 
       </div>
     </form>
   </section>
 </body>

 </html>