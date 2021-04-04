<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        

    		<h1>Login </h1>
    		
    		<form action="{{ route('login') }}" method="POST">
                @csrf 
    		    <div class="form-group has-error">
    		        <label for="slug">user <span class="require">*</span> <small>(This field use in url path.)</small></label>
    		        <input type="text" class="form-control" name="user" />
    		        <span class="help-block">Field not entered!</span>
    		    </div>
    		    
    		    <div class="form-group">
    		        <label for="title">password <span class="require">*</span></label>
    		        <input type="password" class="form-control" name="password" />
    		    </div>
    		    
    		    <div class="form-group">
    		        <button type="submit" class="btn btn-primary">
    		            login
    		        </button>
    		        <button class="btn btn-default">
    		            Cancel
    		        </button>
    		    </div>
    		    
    		</form>
		</div>
		
	</div>
</div>