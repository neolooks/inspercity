<form class="form-horizontal" 
				name="frmAdd" id="frmAdd" 
				method="post" 
				action="aqoutes2.php" 
				enctype="multipart/form-data"
				onsubmit="return validateForm()" >
			
				<fieldset>
					<legend class="text-info">Add qoutes</legend>
					
						
					<label>Picture</label>
					<input type="file" name="picture" id="picture" /><br /><br />
					
					<input type="submit" value="Add" class="btn btn-primary" />
					<input type="reset" value="Cancel"  class="btn btn-warning"/>
					
					
					
					
				</fieldset>
				
			</form>