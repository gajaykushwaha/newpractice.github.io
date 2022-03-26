<?php include('allhead.php'); ?>
<div class="container">
	<script>
		//java script valadtion for e-mail, query field, guest name
		function validateFormPublicQuery() {
			var email = document.forms[ "update" ][ "email" ].value;
			var query = document.forms[ "update" ][ "queryx" ].value;
			var query = document.forms[ "update" ][ "gname" ].value;
			if ( email == null || email == "" ) {
				alert( "Email Address must be filled out" );
				return false;
			}
			if ( query == null || query == "" ) {
				alert( "Query field must be filled out" );
				return false;
			}
			if ( gname == null || gname == "" ) {
				alert( "Full Name must be filled out" );
				return false;
			}
		}
	</script>
	<div class="row">
		<div class="col-md-8">
			<h3> Welcome Guest</h3>
			<form action="" method="POST" name="update" onsubmit="return validateFormPublicQuery()">
				<fieldset>
					<legend>
						<h3 style="padding-top: 25px;"> Post Query Details </h3>
					</legend>
					<div class="control-group form-group">
						<div class="controls">
							<input placeholder="Full Name" type="text" class="form-control" id="gname" name="gnamex" maxlength="50">
							<p class="help-block"></p>
						</div>
					</div>

					<div class="control-group form-group">
						<div class="controls">
							<input placeholder="Email ID" type="email" class="form-control" id="email" name="email" maxlength="50">
							<p class="help-block"></p>
						</div>
					</div>

					<div class="control-group form-group">
						<div class="controls">
							<label>Query : </label>
							<textarea class="form-control" rows="5" cols="40" id="queryx" name="squeryx" maxlength="200"></textarea>
							<p class="help-block"></p>
						</div>
					</div>
					<div class="form-group">
						<input type="submit" value="Post Query!" name="update" class="btn btn-primary">
						<button type="reset" name="reset" class="btn btn-primary">Clear</button>
				</fieldset>
			</form>
			<?php
			if ( isset( $_POST[ 'update' ] ) ) {
				$connectt=mysqli_connect('localhost','root','','STU_SYS');
				// include( 'database.php' );
				$tempsquery = $_POST[ 'squeryx' ];
				$tempseid = $_POST[ 'email' ];
				$tempgname = $_POST[ 'gnamex' ];
				$check=false;
				$sqlfirst='select * from REGISTRATION where EID="'. $tempseid .'"';
				$connection=mysqli_query($connectt,$sqlfirst);
				if(mysqli_num_rows($connection)>0)
				{
					while($rows=mysqli_fetch_assoc($connection))
					{
						if($rows['EID']==$tempseid)
						{
                           $check=true;
						}
					}
				}
				if($check)
				{
					$sql = "INSERT INTO `query`(`Query`, `Eid`) VALUES ('$tempsquery','$tempseid')";
					$newconnection=mysqli_query($connectt,$sql);
					if($newconnection)
					{
						echo "<div><div class='successfully'><h3 >Successfully Inserted....</h3></div></div>";
					}
				}
				else{
					echo "<div><div  class='danger'><h3>Failed.....</h3></div></div>";
				}
				
				
			}
			?>
			</div>
			
		</div>
		<?php include('allfoot.php'); ?>