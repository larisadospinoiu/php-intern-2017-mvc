
   
    <div class="err404">


	<form class="form-horizontal" action = "/addPost" method="post">
	  <div class="form-group">
		<label class="control-label col-sm-2" for="name">Add a post</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name="name" id="name" placeholder="Enter the name of the post">
		</div>
	  </div>
	  
	  <div class="form-group">
		<label class="control-label col-sm-2" for="price">Price</label>
		<div class="col-sm-10">
		  <input type="number" id="price" name="price" class="form-control"  placeholder="Enter the price">
		</div>
	  </div>
	  
	  <div class="form-group">
		<label class="control-label col-sm-2" for="details">Details</label>
		<div class="col-sm-10">
		  <textarea type="text" id="details" name="details" rows="10" class="form-control"  placeholder="Details"></textarea>
		</div>
	  </div>
	  
	  <div class="form-group">
		<label class="control-label col-sm-2" for="job" >Categories</label>
		<div class="col-sm-10">
			
			<select id="job" name="job">
				<option value="Software">Software</option>
				<option value="Hardware">Hardware</option>
				<option value="Services">Services</option>
			</select>
		</div>
	  </div>
	  
	  
	<input type="file" name="imagine" />
		<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		  <button type="submit" class="btn btn-default">Submit</button>
		</div>
	  </div>
	  
	</form> 

</div>


