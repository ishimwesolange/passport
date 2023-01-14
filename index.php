<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Passport</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">


</head>

<body class="">

    <nav class="navbar navbar-expand-sm bg-light navbar-light text-uppercase fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/rwanda.png" alt="" width="70"> 
                <span  style="color: green; text-align: center;margin-left: 10px" >Passport Application</span>
            </a>

            <ul class="navbar-nav">
                <li class="nav-item active">
                <a class="nav-link" href="index.php">New Application</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="list.php">Application List</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container bg-white">
        <div class="row pt-5">
            
            <div class="col-md-12 p-5">
                <h1  style="color: green; text-align: center;margin-top: 10px" >New Application</h1>
                <form action="insert.php" method="POST"  class="needs-validation" novalidate>
                    <div class="form row">
                        <h5 class="text-primary">Personnal Information</h5>
                        <div  class="col-md-12 form-group">
                            <label for="id_number">Enter ID NUMBER</label>
                            <input type="text" class="form-control" name="id_number" id="id_number" required>
                            <div class="invalid-feedback">Please Enter ID NUMBER.</div>
                        </div>
                        <div  class="col-md-6 form-group">
                            <label for="firstname">Enter Firstname</label>
                            <input type="text" class="form-control" name="firstname" id="firstname" required>
                            <div class="invalid-feedback">PEnter Firstname.</div>
                        </div>
                        <div  class="col-md-6 form-group" >
                            <label for="lastname">Enter Lastname</label>
                            <input type="text" class="form-control" name="lastname" id="lastname" required>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div  class="col-md-6 form-group">
                            <label for="gender">Enter Gender</label>
                            <Select  class="form-control" name="gender" id="gender" required>
                                <option value="">[Select Gender]</option>
                                <option value="male" >Male</option>
                                <option value="female">Female</option>
                            </select>
                            <div class="invalid-feedback">Please select a gender</div>
                        </div>
                        <div  class="col-md-6 form-group" >
                            <label for="telephone">Enter Telephone</label>
                            <input type="tel" class="form-control" name="telephone" id="telephone" required>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div  class="col-md-6 form-group" >
                            <label for="email">Enter Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                            <div class="invalid-feedback">Please enter valid email.</div>
                        </div>
                        <div  class="col-md-6">
                            <label for="birthdate">Enter Birthdate</label>
                            <input type="date" class="form-control"  name="birthdate" id="birthdate" required>
                            <div class="invalid-feedback">Please fill out this field.</div>
                            
                        </div>
                        <div  class="col-md-12 form-group">
                            <label for="civil_state">Enter Civil State</label>
                            <Select type="text" class="form-control" name="civil_state" id="civil_state" required>
                                <option value="">[Select Civil State]</option>
                                <option value="single" >Single</option>
                                <option value="married">Married</option>
                                <option value="divorced">Divorced</option>
                            </select>
                            <div class="invalid-feedback">Please select a Civil State.</div>
                        </div>
                        <div  class="col-md-6 form-group">
                            <label for="father_name">Enter Father Name</label>
                            <input type="text" class="form-control" name="father_name" id="father_name" required> 
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div  class="col-md-6 form-group">
                            <label for="mother_name">Enter Mother Name</label>
                            <input type="text" class="form-control" name="mother_name" id="mother_name" required>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="clear-fix"></div>
                        <h5 class="text-primary">Address</h5>
                        
                            <div class="col-md-12 form-group" >
                                <label for="province">PROVINCE</label>
                                <Select type="text" class="form-control" name="province" id="province" required>
                                    <option value="">[Select Province]</option>
                                    <option value="Kigali" >Kigali</option>
                                    <option value="nothern province">Northern Province</option>
                                    <option value="southern province">southern Province</option>
                                    <option value="eastern province">Eastern Province</option>
                                    <option value="western province">Western Province</option>
                                </select>
                                <div class="invalid-feedback">Please select a province.</div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="district">District</label>
                                <input type="text" class="form-control" name="district" id="district" required>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div  class="col-md-6 form-group">
                                <label for="sector">Sector</label>
                                <input type="text" class="form-control" name="sector" id="sector" required>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div  class="col-md-6 form-group">
                                <label for="cell">Cell</label>
                                <input type="text" class="form-control" name="cell" id="cell" required>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div  class="col-md-6 form-group">
                                <label for="village">Village</label>
                                <input type="text" class="form-control" name="village" id="village" required>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="col-md-6 form-group" >
                                <label for="street_number">Street Number</label>
                                <input type="text" class="form-control" name="street_number" id="street_number" required>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="col-md-6 form-group" >
                                <label for="house_number">House Number</label>
                                <input type="text" class="form-control" name="house_number" id="house_number" required>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        
                        
                        <div class="mt-5" >
                            <button class="btn btn-danger pull-left" type="reset">Cancel</button>
                            <button class="btn btn-success pull-right"  type="submit" id="save">Save</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
    

    <section class="">
        <!-- Copyright Section-->
        <div class="footer py-4 text-center text-dark bg-light">
            <div class="container"><small>Copyright &copy;ULK-Y3-CS Our Goup</small></div>
        </div>
    </section>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
    
<script src="js/bootstrap.min.js"></script>
</body>

</html>