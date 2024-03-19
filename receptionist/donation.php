<?php
session_start();
include('../connectionn.php');

if(isset($_POST['submit'])){


$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$blood=$_POST['blood'];
$donate=$_POST['donate'];
$height = $_POST['height'];
$weight=$_POST['weight'];
$dob=$_POST['dob'];
$date=$_POST['date'];
$dona=$_POST['dona'];


$sql="INSERT INTO `bdonation`(`Fname`, `Mname`, `Lname`, `Email`, `Contact`, `Blood`,`Dblood_ml`, `Height`, `Weight`, `Dob`,`Date`, `Donate previsiously`) VALUES ('$fname','$mname','$lname','$email','$contact','$blood','$donate','$height','$weight','$dob','$date','$dona')";

$query= mysqli_query($conn, $sql);

if($query){
  header('location:donarlist.php');
}


}




?>
<!-- <!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
    

    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        .registration{
            margin: 20px 10%;
            background-color: white;
            height: auto;
            padding: 10px;
            border: 2px solid purple;
            border-radius: 18px;
            line-height: 2.5;
            font-size: 20px;
        }
       
        h1{
          padding: 10px;
          text-align: center;
          color: White;
          font-family: Arial, Helvetica, sans-serif;
           background-color:purple;
           border-radius: 18px;
           margin: 10px 10px 0px 10px;
        }
        body{
          background-color:  #ffe6ff;
        }
        #btn{
            background-color: purple;
            color:White;
        }
        #btn a{
          color:White;
        }
        #btn:hover{
          background-color:White;
          color:purple;

        }
        #reset:hover{
          background-color:White;
          color:purple;

        }
        #btn:hover a{
          color:purple;

        }


    </style>

    </head>
    <body>
      <div class="container-fluid" width="50%">
              <div class="registration">
              
                <h1><img src="images/1600w-hbl5vlZh180.webp" alt="logo" style="height: 50px;float:left;"><i class="fa-solid fa-hand-holding-droplet" style="color:White;"></i> Blood Donation </h1>
                <hr style="color:White;">
                  <div class="container mb-2 mt-3 p-4" style="border-radius: 18px;border:2px solid purple;">
                      <form action="" method="post" enctype="multipart/form-data" >
                      <p style="color: red; text-align: center;">Every blood donor is a lifesaver.</p>
                      <hr style="color: purple;">
                        <div class="row">
                          <div class="col-md-4">
                            <label for="fname" class="form-label">FirstName</label>
                            <input type="text" class="form-control" name="fname"  />
                          </div>
                          <div class="col-md-4">
                            <label for="mname" class="form-label">MiddleName</label>
                            <input type="text" class="form-control"  name="mname"/>
                          </div>
                          <div class="col-md-4">
                            <label for="lname" class="form-label">LastName</label>
                            <input type="text" class="form-control" name="lname"/>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email"/>
                          </div>
                          <div class="col-md-6">
                            <label for="contact" class="form-label">Contact</label>
                            <input type="text" class="form-control" name="contact"/>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 ">
                            <label for="blood" class="form-label">Bloodgroups</label>
                          
                          <select class="form-control" name="blood">
                          <option value="Select Blood Group">Select Blood Group</option>
                            <option value="O+ve">O+ve</option>
                            <option value="O-ve">O-ve</option>
                            <option value="B+ve">B+ve</option>
                            <option value="B-ve">B-ve</option>
                            <option value="AB+ve">AB+ve</option>
                            <option value="AB-ve">AB-ve</option>
                            <option value="A+ve">A+ve</option>
                            <option value="A-ve">A-ve</option>
                          </select>
                          </div>
                          
                          <div class="col-md-6">
                            <label for="donate" class="form-label">Donar Donated Blood(ml)-</label>
                            <input type="text" class="form-control" name="donate"/>
                          </div>
                        </div>
                          <div class="row">
                                <div class="col-md-6">
                                    <label for="height" class="form-label">Height</label>
                                    <input type="text" class="form-control" name="height"/>
                                </div>
                                <div class="col-md-6">
                                  <label for="weight" class="form-label">weight</label>
                                  <input type="text" class="form-control" name="weight"/>
                                </div>
                          </div>
                        

                          <div class="row">
                            <div class="col-md-6">
                              <label for="dob">Date of Birth</label>
                              <input type="date" name="dob" class="form-control">
                            </div>
                            <div class="col-md-6">
                              <label for="date">Blood Donate Date</label>
                              <input type="date" name="date" class="form-control">
                            </div>
                          </div>

                          
                          <div class="col-md-12">
                            <label for="dona">Have you Donate previously?</label>
                              <div class="section1">
                              
                              <input type="radio" value="Yes" name="dona" id="input" height="18px">
                              <label for="id1">Yes</label>
                              
                              <input type="radio" value="No" name="dona" id="input">
                              <label for="id2">No</label>
                              </div>
                          </div>
                          <div class="col-md-12">
                            <input type="checkbox" name="check" id="input">
                            <label for="check">I have read and understood all the information presented.</label><br><br>
                          
                          </div>
                          <hr style="color: purple;">
                    
                          <!-- <div class="row justify-content-center">
                            <div class="col-md-2">
                              <input type="submit" class="btn btn-primary form-control p-2 fs-5" name="submit" value="Submit">
                            </div>
                            <div class="col-md-2">
                              <input type="reset" class="btn btn-danger form-control p-2 fs-5" name="reset" value="Reset">
                            </div>
                            <div class="col-md-2">
                              <button  class="btn btn-primary form-control">
                             <a href="#" onclick="history.back(); return false;" style="color:White;" class="p-2 fs-5 text-decoration-none"><i class="fas fa-arrow-left"></i> Back</a>
                             </button>
                            </div>
                          </div> -->
                          <!-- <div class="row justify-content-center">
                            <div class="col-md-2">
                              <input type="submit" class="btn btn-primary form-control p-2 fs-5" name="submit" value="Submit"id="btn">
                            </div>
                            <div class="col-md-2">
                              <input type="reset" class="btn btn-danger form-control p-2 fs-5" name="reset" value="Reset" id="reset">
                            </div>
                            <div class="col-md-2">
                              <button  class="btn btn-primary form-control" id="btn">
                             <a href="#" onclick="history.back(); return false;" class="p-2 fs-5 text-decoration-none"><i class="fas fa-arrow-left"></i> Back</a>
                             </button>
                            </div>
                          </div>
                    </form>
                    
                  </div>
                
              </div>
              
          </div>
</body>
</html>  -->


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css"
    />

    <style>
      * {
        margin: 0px;
        padding: 0px;
      }
      .registration {
        margin: 20px 10%;
        background-color: white;
        height: auto;
        padding: 10px;
        border: 2px solid purple;
        border-radius: 18px;
        line-height: 2.5;
        font-size: 20px;
      }
      /* #btn{
            background-color: purple;
            color:White;
            font-size: 20px;
            width: 50%;
        } */
      h1 {
        padding: 10px;
        text-align: center;
        color: White;
        font-family: Arial, Helvetica, sans-serif;
        background-color: red;
        border-radius: 18px;
        margin: 10px 10px 0px 10px;
      }
      body {
        background-color: #ffe6ff;
      }
      #btn{
            background-color: purple;
            color:White;
        }
        #btn a{
          color:White;
        }
        #btn:hover{
          background-color:White;
          color:purple;

        }
        #reset:hover{
          background-color:White;
          color:purple;

        }
        #btn:hover a{
          color:purple;

        }

    </style>
  </head>
  <body>
    <div class="container-fluid" width="50%">
      <div class="registration">
        <h1>
          <img
            src="images/1600w-hbl5vlZh180.webp"
            alt="logo"
            style="height: 50px; float: left"
          /><i
            class="fa-solid fa-hand-holding-droplet"
            style="color: White"
          ></i>
          Blood Donation
        </h1>
        <hr style="color: White" />
        <div
          class="container mb-2 mt-3 p-4"
          style="
            border-radius: 18px;
            border: 2px solid red;
            background-color: #ffe6e6;
          "
        >
          <form action="" method="post" enctype="multipart/form-data">
            <p style="color: red; text-align: center">
              Every blood donor is a lifesaver.
            </p>
            <hr style="color: red" />
            <div class="row">
              <div class="col-md-4">
                <label for="fname" class="form-label">FirstName</label>
                <input
                  type="text"
                  class="form-control"
                  name="fname"
                  id="fname"
                  required
                />
                <small id="fnameValidation" style="color: red"></small>
              </div>
              <div class="col-md-4">
                <label for="mname" class="form-label">MiddleName</label>
                <input
                  type="text"
                  class="form-control"
                  name="mname"
                  id="mname"
                  required
                />
                <small id="mnameValidation" style="color: red"></small>
              </div>
              <div class="col-md-4">
                <label for="lname" class="form-label">LastName</label>
                <input
                  type="text"
                  class="form-control"
                  name="lname"
                  id="lname"
                  required
                />
                <small id="lnameValidation" style="color: red"></small>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  id="email"
                  required
                />
                <small id="emailValidation" style="color: red"></small>
              </div>
              <div class="col-md-6">
                <label for="contact" class="form-label">Contact</label>
                <input
                  type="tel"
                  class="form-control"
                  name="contact"
                  id="contact"
                  oninput="this.value=this.value.replace(/[^0-9]/g,'')"
                  size="10"
                  minlength="10"
                  maxlength="10"
                  placeholder="0123456789"
                />
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="blood" class="form-label">Bloodgroups</label>

                <select class="form-control" name="blood" required>
                  <option value="">Select Blood Group</option>
                  <option value="O+ve">O+ve</option>
                  <option value="O-ve">O-ve</option>
                  <option value="B+ve">B+ve</option>
                  <option value="B-ve">B-ve</option>
                  <option value="AB+">AB+ve</option>
                  <option value="AB-ve">AB-ve</option>
                  <option value="A+">A+ve</option>
                  <option value="A-ve">A-ve</option>
                </select>
              </div>

              <div class="col-md-6">
                            <label for="donate" class="form-label">Donar Donated Blood(ml)-</label>
                            <input type="text" class="form-control" name="donate"/>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="height" class="form-label">Height</label>
                <input
                  type="number"
                  class="form-control"
                  name="height"
                  required
                />
              </div>
              <div class="col-md-6">
                <label for="weight" class="form-label">Weight</label>
                <input
                  type="number"
                  class="form-control"
                  name="weight"
                  required
                />
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" class="form-control" required />
              </div>
              <div class="col-md-6">
                <label for="date">Blood Donate Date</label>
                <input type="date" name="date" class="form-control" required />
              </div>
            </div>

            <div class="col-md-12">
              <label for="dona">Have you donated previously?</label>
              <div class="section1">
                <input
                  type="radio"
                  value="Yes"
                  name="dona"
                  id="input"
                  required
                />
                <label for="id1">Yes</label>

                <input type="radio" value="No" name="dona" id="input" />
                <label for="id2">No</label>
              </div>
            </div>
            <div class="col-md-12">
              <input type="checkbox" name="check" id="input" required />
              <label for="check"
                >I have read and understood all the information
                presented.</label
              ><br /><br />
            </div>
            <hr style="color: red" />

            <div class="row justify-content-center">
                            <div class="col-md-2">
                              <input type="submit" class="btn btn-primary form-control p-2 fs-5" name="submit" value="Submit"id="btn">
                            </div>
                            <div class="col-md-2">
                              <input type="reset" class="btn btn-danger form-control p-2 fs-5" name="reset" value="Reset" id="reset">
                            </div>
                            <div class="col-md-2">
                              <button  class="btn btn-primary form-control" id="btn">
                             <a href="#" onclick="history.back(); return false;" class="p-2 fs-5 text-decoration-none"><i class="fas fa-arrow-left"></i> Back</a>
                             </button>
                            </div>
                          </div>
          </form>
        </div>
      </div>
    </div>
    <script>
      document
        .getElementById("fname")
        .addEventListener("input", function (event) {
          var fnameInput = event.target.value;
          var fnameRegex = /^[A-Za-z\s]+$/;
          var fnameValidation = document.getElementById("fnameValidation");

          if (!fnameRegex.test(fnameInput)) {
            fnameValidation.textContent =
              "Name must contain only letters and spaces.";
          } else {
            fnameValidation.textContent = "";
          }
        });
      //   document
      //     .getElementById("registrationForm")
      //     .addEventListener("submit", function (event) {
      //       var inputs = document.querySelectorAll("input");
      //       var isValid = true;

      //       inputs.forEach(function (input) {
      //         if (!input.checkValidity()) {
      //           isValid = false;
      //         }
      //       });

      //       if (!isValid) {
      //         event.preventDefault();
      //       }
      //     });

      //Validations for second filed
      document
        .getElementById("mname")
        .addEventListener("input", function (event) {
          var mnameInput = event.target.value;
          var mnameRegex = /^[A-Za-z\s]+$/;
          var mnameValidation = document.getElementById("mnameValidation");

          if (!mnameRegex.test(mnameInput)) {
            mnameValidation.textContent =
              "Name must contain only letters and spaces.";
          } else {
            mnameValidation.textContent = "";
          }
        });
      //Validations for lastname.
      document
        .getElementById("lname")
        .addEventListener("input", function (event) {
          var lnameInput = event.target.value;
          var lnameRegex = /^[A-Za-z\s]+$/;
          var lnameValidation = document.getElementById("lnameValidation");

          if (!lnameRegex.test(lnameInput)) {
            lnameValidation.textContent =
              "Name must contain only letters and spaces.";
          } else {
            lnameValidation.textContent = "";
          }
        });

      //Validation for email filed.
      document
        .getElementById("email")
        .addEventListener("input", function (event) {
          var emailInput = event.target.value;
          var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          var emailValidation = document.getElementById("emailValidation");

          if (!emailRegex.test(emailInput)) {
            emailValidation.textContent = "Please enter a valid email address.";
          } else {
            emailValidation.textContent = "";
          }
        });

      //Validations for submit filed.
      document
        .getElementById("registrationForm")
        .addEventListener("submit", function (event) {
          var inputs = document.querySelectorAll("input");
          var isValid = true;

          inputs.forEach(function (input) {
            if (!input.checkValidity()) {
              isValid = false;
            }
          });

          if (!isValid) {
            event.preventDefault();
          }
        });
    </script>
  </body>
</html>

