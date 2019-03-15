<div class="modal fade " data-keyboard="false" data-backdrop="static" id="loginModal" tabindex="-1">
      <div class="modal-dialog modal-sm dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">login</h4>
          </div>
          <div class="modal-body">
            <form method="POST" action="#">
              <div class="form-group">
                <label for="inputUserName">Username</label>
                <input class="form-control" placeholder="Login Email" type="email" id="inputUserName">
              </div>

              <div class="form-group">
                <label for="inputPassword">Password</label>
                <input class="form-control" placeholder="Login Password" type="password" id="inputPassword">
              </div>
            
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary">Login</button>
            <button class="btn btn-primary" type="reset" value="Reset">Reset</button>
            </form>
          </div>
        </div>

      </div>

    </div>
    
   <div class="modal fade " data-keyboard="false" data-backdrop="static" id="registrationModal" tabindex="-1">
      <div class="modal-dialog modal-sm ">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">registration</h4>
          </div>
          <div class="modal-body">
            <form method="POST" action="#">
              <div class="form-group">
                <label for="inputUserName">Username</label>
                <input class="form-control" placeholder="User full name" type="text" id="inputUserName">
              </div>

              <div class="form-group">
                <label for="inputaddress">address</label>
                <textarea class="form-control" placeholder="your formal address" id="inputaddress"></textarea>
              </div>

              <div class="form-group">
                <label for="inputState">state</label>
                <select class="form-control"  name="state" id="inputState" onchange="">
                  <option value="">--SELECT VALUE--</option>
                  <option value=""></option>
       
                </select>
              </div>

              <div class="form-group">
                <label for="inputCity">city</label>
                <select class="form-control"  name="city" id="inputState" onchange="">
                  <option value="">--SELECT VALUE--</option>
                  <option value=""></option>
       
                </select>
              </div>

              <div class="form-group">
                <label for="inputEmail">Email</label>
                <input class="form-control" placeholder="current email-id" type="email" id="inputEmail">
              </div>

              <div class="form-group">
                <label for="inputPassword">password</label>
                <input class="form-control" placeholder="Login Password" type="password" id="inputPassword">
              </div>
            
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary">Register</button>
            <button class="btn btn-primary" type="reset" value="Reset">Reset</button>
            </form>
          </div>
        </div>

      </div>

    </div>


    <div class="container-fluid footer">
      <div class="row ad">
          <div class="col-xs-6 text-center">
            Designed by: Lavita Pandey
          </div>
          <div class="col-xs-6 text-center">
            mobile:+91-____________
          </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url() ?> assets/js/jquery.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
</body>
</html>	
