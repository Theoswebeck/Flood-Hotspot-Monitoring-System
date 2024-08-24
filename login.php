<div class="row">
    <div class="col-sm-12">
<div class="card">
  <form method="POST" action="" onsubmit="return checkForm(this);">
<div class="card-body">
<span>Email</span>
<input type="email" name="email" class="form-control" required=""> 
<div class="row">
                <div class="col-sm-12">
               <span>Password</span>
            <input type="password" name="pwd1" class="form-control" required="">
              </div>
                
            </div>
              </div>   
                             
<input type="submit" onclick="myFunction()" name="submit" class="btn btn-info text-light form-control" value="SignIn">
<br>





                        </form>
                    </div>
                </div>
            </div>
      
<script type="text/javascript">

  function checkForm(form)
  {
    if(form.pwd1.value == "") {
      alert("Error: Please  Enter  Password !");
      form.pwd1.focus();
      return false;
    }
    if(form.pwd2.value == "") {
      alert("Error: Please  Confirm  Password !");
      form.pwd2.focus();
      return false;
    }
    re = /^\w+$/;
//    if(!re.test(form.username.value)) {
//      alert("Error: Username must contain only letters, numbers and underscores!");
//      form.username.focus();
//      return false;
//    }

    if(form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
      if(form.pwd1.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.pwd1.focus();
        return false;
      }
//      if(form.pwd1.value == form.username.value) {
//        alert("Error: New Password must be different from Given Password!");
//        form.pwd1.focus();
//        return false;
//      }
      re = /[0-9]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.pwd1.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.pwd1.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.pwd1.focus();
        return false;
      }
      
        re = /[$@$!%*#?&]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: Password must contain at least one of Those Special Character ($@$!%*#?&)!");
        form.pwd1.focus();
        return false;
      }
      
      
    } else {
      alert("Error: Please check that you've Entered New Password and Confirm Your New password!");
      form.pwd1.focus();
      return false;
    }

//    alert("You Entered a Strong  password: " + form.pwd1.value);
//    return true;
  }

</script>