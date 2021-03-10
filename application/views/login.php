

  <body class="login">

      
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form>
              <h1><i class="fa fa-map"></i> SIG JALAN TOL</h1>
              
              <div class="form-group row">
								<div class="col-md-12 col-sm-12 ">
									<select class="select2_single form-control" tabindex="-1">
										<option></option>
										<option value="AK">BPJN</option>
										<option value="HI">BPJT</option>
										<option value="CA">BUJT</option>
									</select>
								</div>
							</div>

              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
               <a class="btn btn-primary" href="<?=site_url('Dashboard')?>">Log in</a>
                <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
              </div>
              <div>
                <a class="reset_pass" href="#">Lupa password?</a>
              </div>
              <div class="clearfix"></div>


                <div class="clearfix"></div>
                <br />

              </div>
            </form>
          </section>
        </div>
      </div>
  </body>
</html>
