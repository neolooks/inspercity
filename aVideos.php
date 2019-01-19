<form class="form-horizontal" 
				name="frmAdd" id="frmAdd" 
				method="post" 
				action="avideos2.php" 
				enctype="multipart/form-data"
				onsubmit="return validateForm()" >
			
				<fieldset>
					<legend class="text-info">Add video</legend>
					
					<label>Title</label>
					<input type="text" name="title" id="title" required="required" /> <br /><br />
					
					<label>link</label>
					<input type="text" name="link" id="link" required="required"  /> <br /><br />

                    <label>description</label>
					<input type="text" name="description" id="description" required="required"  /> <br /><br />
				
					<label>Picture</label>
					<input type="file" name="picture" id="picture" /><br /><br />
					
					<input type="submit" value="Add" class="btn btn-primary" />
					<input type="reset" value="Cancel"  class="btn btn-warning"/>
					
					
					
					
				</fieldset>
				
			</form>