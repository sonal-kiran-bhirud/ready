<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    
    <style>
         body{
            background-image: url('https://cdn.wallpapersafari.com/83/26/TVC4pE.jpeg');
            background-repeat: no-repeat;
             background-size: cover; 
             
            
            } 


        #hiddenDiv {
      display: none;
    }
      
      
           
      
       

        
        .card-body{
            box-shadow: 0 4px 8px 0 rgba(16, 14, 14, 0.914), 0 6px 20px 0 rgba(29, 1, 1, 0.937);
            border-radius: 20px 20px 20px 20px;
          }


        .card{
           width: 50%;
           border-radius: 20px;
           margin:20px;
            }


            w3-container{
            align-items: center;
            padding-left: 200px;
           
            
        }

        .footer{
            text-align: center;
            background-color:#34495e;
            color: white;
           
            
        }
       

        
    </style>
</head>
<body>
<div class="w3-container">
    <div class="card w-75 mx-auto" >
        <div class="card-body">
            

            <nav class="navbar navbar-expand-lg navbar-inverse " style="background-color: purple;border-radius: 20px;">
                <div class="container">
                    <a class="navbar-brand home" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" fill="white" class="bi bi-skip-backward-fill" viewBox="0 0 16 16">
                  <path d="M.5 3.5A.5.5 0 0 0 0 4v8a.5.5 0 0 0 1 0V8.753l6.267 3.636c.54.313 1.233-.066 1.233-.697v-2.94l6.267 3.636c.54.314 1.233-.065 1.233-.696V4.308c0-.63-.693-1.01-1.233-.696L8.5 7.248v-2.94c0-.63-.692-1.01-1.233-.696L1 7.248V4a.5.5 0 0 0-.5-.5"/>
                 </svg></a>
                    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button> -->
                    <h1 class="mx-auto" style="color: white; font-family: Didot;">Patient Registration</h1>
                </div>
            </nav>
            
            <form method="post" action ="#" enctype="multipart/form-data">


                <div class="row">

                <div class="col-sm-4" style="padding-top :30px;">
                    <div class="form-group">
                        <label for="patient"> Select Patient type</label>
                        <select class="form-control" id="patient"  name="patient" required>
                        <option> patient Type</option>
                          <option value="OPD">OPD</option>
                          <option value="IPD">IPD</option>
                          <option value="Emergency">Emergency</option>
                         </select>
                        </div>
                        </div>



                    <div class="col-sm-4"style="padding-top :30px;">
                        <div class="form-group">
                            <label for="fname">First Name</label>
                         <input type="text" class="form-control" placeholder="Enter First Name" name="fname" id="fname"required>
                         <small id="fnameValidation" style="color: red"></small>
                           
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="form-group"style="padding-top :30px;">
                            <label for="mname">Middle Name</label>
                            <input type="text" class="form-control" placeholder="Enter Middle Name" name="mname" id="mname"required>
                            <small id="mnameValidation" style="color: red"></small>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="form-group"style="padding-top :30px;">
                            <label for="lname">Last Name</label>
                            <input type="text" class="form-control" placeholder="Enter Last Name" name="lname" id="lname" required>
                            <small id="lnameValidation" style="color: red"></small>
                            
                         
                        </div><br>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group" style="padding-top :30px;">
                         
                            <label for="gender">Select gender:</label>
                            <select class="form-control" id="gender"  name="gender" required>
                              <option value="">Select Gender</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                              <option value="Other">Other</option>
                             
                            </select>
                           
                          
                            </div>
                            </div>


                    
                 


                    <div class="col-sm-4">
                        <div class="form-group"style="padding-top :30px;">
                            <label for="aadhar">Adhar No</label>
                            <input type="text" class="form-control" placeholder="Enter Adhar No" name="aadhar" id="aadhar"
                            oninput="this.value=this.value.replace(/[^0-9]/g,'')"|size="12" minlength="12" maxlength="12"placeholder="123-899-783-123"required>
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" textarea class="form-control" name="address" id=address rows="3" placeholder="Enter Patient's Address"required ></textarea>
                         
                        </div><br>
                        
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="contact">Contact</label>
                            <input type="text" class="form-control" placeholder="Enter Contact Number" name="contact" id="contact"oninput="this.value=this.value.replace(/[^0-9]/g,'')"
                            size="10"
                            minlength="10"
                            maxlength="10"
                            placeholder="0123456789"required >
                           
                        </div>  
                         </div>
                  

                         <div class="col-sm-4">
                        <div class="form-group">
                            <label for="aadhar">Emergency Contact</label>
                            <input type="text" class="form-control" placeholder="Enter econtact" name="econtacts" id="econtacts"
                            oninput="this.value=this.value.replace(/[^0-9]/g,'')"
                            size="10"
                            minlength="10"
                            maxlength="10"
                            placeholder="0123456789">
                           
                        </div>
                    </div>


                        <div class="col-sm-4">
                        <div class=" form-group  label">
                        <label for="dob">DOB:</label>
                       <input type="date" class="form-control"  name="dob"  id="dob" placeholder=""required>
                    </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="text" class="form-control" placeholder="Age" name="age" id="age"required >
                           
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="height">Height</label>
                            <input type="height" class="form-control" placeholder="Height" name="height" id="height"required >
                           
                        </div><br>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="weight">Weight</label>
                            <input type="text" class="form-control" placeholder="Weight" name="weight" id="weight"required >
                           
                        </div>
                    </div>


                    <div class="col-sm-4">
                    <div class="form-group">
                            
                    <label for="blood">blood group</label><br>
                    <select class="" name="blood" id="blood"required >
                    <option >Select Blood Group</option>
                      <option value="A+">A+</option>
                      <option value="A-">A-</option>
                      <option value="B+">B+</option>
                      <option value="B-">B-</option>
                      <option value="AB+">AB+</option>
                      <option value="AB-">AB-</option>
                      <option value="O+">O+</option>
                      <option value="O-">O-</option>
                    </select>
                  
                  </div>
                  </div>

                  <div class="col-sm-4">
                        <div class="form-group">
                            <label for="occupation">Occupation</label>
                            <input type="text" class="form-control" placeholder="Occupation" name="occupation" id="occupation"required>
                            <small id="occupationValidation" style="color: red"></small>
                        </div><br>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="medical">Medical History</label>
                            <input type="text" class="form-control" placeholder="Medical History" name="medical" id="medical"required >
                            <small id="medicalValidation" style="color: red"></small>
                           
                        </div>
                    </div>

                    

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="indate">Indate</label>
                            <input type="date" class="form-control" placeholder="Enter Indate" name="indate" id="indate"required>
                           
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                        <label for="outdate">Outdate:</label>
                        <input type="date" class="form-control"  name="outdate" id="outdate"required>
                       
                        </div><br>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="roomno">Room No</label>
                            <input type="text" class="form-control" placeholder="Enter Room Number" name="roomno" id="roomno"required>
                        
                        </div>
                    </div>

                   

                        

                      <div class="col-sm-4">
                        <div class="form-group">
                            <label for="doctor">doctor assigned</label>
                            <input type="text" class="form-control" placeholder=" Dr. Name" name="doctor" id="doctor"required>
                        
                        </div>
                      </div>
                   

                      <div class="col-sm-4">
                        <div class="form-group">
                            <label for="nurse">Nurse Assigned </label>
                            <input type="text" class="form-control" placeholder="Enter Adhar No" name="nurse" id="nurse"required >
                           
                        </div>
                    </div>
        
                       
                    <div><br>
                        <button  onclick="preventsubmit(event);toggleDiv();" class="btn btn-danger">Insurance</button>   
                    </div> 
       

            <p>Insurance Details</p>
              <div id="hiddenDiv">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="company">Insurance Company</label>
                            <input type="text" class="form-control" id="company" name="company" placeholder="Company name"required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="insuranceid">Insurance Id</label>
                            <input type="text" class="form-control" id="insuranceid" name="insuranceid" placeholder="Insurance ID"required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                        <label for="expirydate">Expiry Date:</label>
            <input type="date" class="form-control"  name="expirydate" id="expirydate" required>
                        </div><br>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="holder">Holder Name</label>
                            <input type="text" class="form-control" id="holder" name="holder" placeholder="Holder"required>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ephone">Emergency Contact</label>
                            <input type="text" class="form-control" id="ephone" name="ephone" placeholder="Emergency Contact"
                            name="contacts" id="contacts"
                            oninput="this.value=this.value.replace(/[^0-9]/g,'')"
                            size="10"
                            minlength="10"
                            maxlength="10"
                            placeholder="0123456789"required >
                        </div><br>
                    </div>
               

                <div class="col-sm-4">
                        <div class="form-group">
                            <label for="relation">Relation</label>
                            <input type="text" class="form-control" id="relation" name="relation" placeholder="Relation"required>
                        </div>
                    </div>
             
                
  
         <script>
          function toggleDiv() {
           var div = document.getElementById('hiddenDiv');
          if (div.style.display === 'none') {
           div.style.display = 'block';
          } else {
          div.style.display = 'none';
        }
      }
          </script>
      </div>
      </div>
</div>



     
       
          <div class="card-footer footer" >
            <div class="form-group form-check">
             <input type="checkbox" class="form-check-input" id="check"> 
            <label class="form-check-label" for="check">By submitting this form, I hereby declare that the information provided above is accurate and true to the best of my knowledge.</label>
            </div>
            <div class="btn">
            <button type="submit" name="submit"  id="submit" class="btn btn-primary button">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="reset" name="reset"  id="reset" class="btn btn-dark button">Reset</button>
                    <!-- <button class="emergency btn btn-danger" onclick="()=>{
                        document.getElementsByClassName('hello').style.display='none'
                     }">emergency</button> -->
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
    
       
<script>
    // let hideshow=document.getElementByClass('emergency')

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
function preventsubmit(event)
{
    event.preventDefault();
}
</script>
<script>
    //validation for firstname.
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
        //Validation for Middlename.
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

        //Valiadtion for lastname.
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

        //Validations for occupation filed.
        document
        .getElementById("occupation")
        .addEventListener("input", function (event) {
          var occupationInput = event.target.value;
          var occupationRegex = /^[A-Za-z\s]+$/;
          var occupationValidation = document.getElementById("occupationValidation");

          if (!occupationRegex.test(mnameInput)) {
            occupationValidation.textContent =
              "Name must contain only letters and spaces.";
          } else {
            occupationValidation.textContent = "";
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