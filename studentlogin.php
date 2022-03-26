<?php
	  if($_SERVER["REQUEST_METHOD"]=='POST')
	  {
		  $connection=mysqli_connect('localhost','root','','STU_SYS');
		  $query='SELECT * FROM REGISTRATION';
		  $Email=$_POST['sid'];
          $Pass=$_POST['pass'];
		  $check=false;
		  $pa=false;
		  $qry=mysqli_query($connection,$query);
		  while ($row=mysqli_fetch_assoc($qry)){
			if($row['EID']==$Email)
			{
				$check=true;
			}
			if($row['PASS']==$Pass)
			{
				$pa=true;
			}
		  }
		  if($check)
		  {
			  if($pa)
			  {
				header("location:./index.php");
			  }
			  else{
				  echo "wrong password";
			  }
		  }
		  else
		  {
			  echo "wrong email";
		  }
	  }
	?>
<div class="container">
	<div class="row">
		<div class="col-md-5">
			<!-- Stdeunt login page -->
			<fieldset>
				<legend>
					<h3 style="padding-top: 25px;"><span class="glyphicon glyphicon-lock"></span>&nbsp;  Student Login</h3>
				</legend>
				<form  method="POST">
					<div class="control-group form-group">
						<div class="controls">
							<label>Email Id:</label>
							<input type="text" class="form-control" name="sid" required>
							<p class="help-block"></p>
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Passsword:</label>
							<input type="password" class="form-control" name="pass" required>
							<p class="help-block"></p>
						</div>
					</div>
					<center>
						<button type="submit" name="login" class="btn btn-primary">Login</button>
						<button type="reset" class="btn btn-primary" style="
background-color: #E52727;
border-color: #D21B1B;">Reset</button>
					</center>
			</fieldset>
			</form>
		</div>
	</div>

	