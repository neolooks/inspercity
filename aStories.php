<form class="form-horizontal" 
				name="frmAdd" id="frmAdd" 
				method="post" 
				action="aStories2.php" 
				enctype="multipart/form-data"
				onsubmit="return validateForm()" >
			
				<fieldset>
					<legend class="text-info">Add Story</legend>
					
					<label>Title</label>
					<input type="text" name="title" id="title" required="required" /> <br /><br />
					
					<label>content</label>
					<input type="text" name="content" id="content" required="required"  /> <br /><br />

                    <label>reference</label>
					<input type="text" name="reference" id="reference" required="required"  /> <br /><br />
				
					<label>Picture</label>
					<input type="file" name="picture" id="picture" /><br /><br />
					
					<input type="submit" value="Add" class="btn btn-primary" />
					<input type="reset" value="Cancel"  class="btn btn-warning"/>
					
					
					
					
				</fieldset>
				
			</form>