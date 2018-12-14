<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container col-md-12">

	<h1 class='text-center'>List of User</h1>
	<p data-placement="top" data-toggle="tooltip" title="Add User"><button class="btn btn-success btn-sm" data-title="Edit" data-toggle="modal" data-target="#addUser" ><span class="glyphicon glyphicon-plus"></span></button></p>
	<table class='table table-bordred table-striped'>
		<thead>
			<th>#</th>
			<th>Fullname</th>
			<th>Email</th>
			<th>Role</th>
			<th>Address</th>
			<th>Phone</th>
			<th>Edit</th>
			<th>Delete</th>
		</thead>
		<tbody>
			@for($i = 0;$i < count($users);$i++)
			<tr>
				<td>
					{{ $i + 1 }}
				</td>
				<td>
					{{ $users[$i]['Fullname'] }}
				</td>
				<td>
					{{ $users[$i]['Email'] }}
				</td>
				<td>
					{{ $users[$i]['Role'] }}
				</td>
				<td>
					{{ $users[$i]['Address'] }}
				</td>
				<td>
					{{ $users[$i]['Phone'] }}
				</td>
				<td>
					<p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit_{{ $users[$i]['UserID'] }}" ><span class="glyphicon glyphicon-pencil"></span></button></p>
				</td>
				<td>
					<p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete_{{ $users[$i]['UserID'] }}" ><span class="glyphicon glyphicon-trash"></span></button></p>
				</td>
			</tr>
			@endfor
		</tbody>
	</table>

	<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
		<div class="modal-dialog">
    		<div class="modal-content">
          		<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        			<h4 class="modal-title custom_align" id="Heading">Add A User</h4>
      			</div>
      			<form action='{{ route("addUser") }}' method='POST'>
          		<div class="modal-body">
          			@csrf
          			<input type="hidden" name="userID" value="">
          			<div class="form-group">
          				<label>Username</label>
        				<input class="form-control" type="text" placeholder="" value="" name='userName'>
        			</div>
          			<div class="form-group">
          				<label>Fullname</label>
        				<input class="form-control" type="text" placeholder="" value="" name='userFullname'>
        			</div>
        			<div class="form-group">
        				<label>Email</label>
        				<input class="form-control" type="text" placeholder="" value="" name='userEmail'>
        			</div>
        			<div class="form-group">
        				<label>Password</label>
        				<input class="form-control" type="password" name="userPassword">
        			</div>
        			<div class="form-group">
        				<label>Role</label>
        				<select class="form-control" name='userRole'>
        					<option>Administrator</option>
        					<option>Manager</option>
        					<option selected="">Customer</option>
        				</select>
        			</div>
        			<div class="form-group">
        				<label>Address</label>
        				<input class="form-control" type="text" placeholder="" value="" name="userAddress">
        			</div>
        			<div class="form-group">
        				<label>Phone</label>
        				<input class="form-control" type="text" placeholder="" value="" name="userPhone">
        			</div>
        			
      			</div>
          		<div class="modal-footer ">
        			<button type="submit" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>Add</button>
      			</div>
      			</form>
        	</div>
    	<!-- /.modal-content --> 
  		</div>
    <!-- /.modal-dialog --> 
    </div>

	@foreach($users as $user)
	<div class="modal fade" id="edit_{{ $user['UserID'] }}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
		<div class="modal-dialog">
    		<div class="modal-content">
          		<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        			<h4 class="modal-title custom_align" id="Heading">Edit User Detail</h4>
      			</div>
      			<form action='{{ route("updateUser", $user["UserID"]) }}' method='POST'>
          		<div class="modal-body">
          			@csrf
          			<input type="hidden" name="userID" value="{{ $user['UserID'] }}">
          			<div class="form-group">
          				<label>Fullname</label>
        				<input class="form-control" type="text" placeholder="" value="{{ $user['Fullname'] }}" name='userFullname'>
        			</div>
        			<div class="form-group">
        				<label>Email</label>
        				<input class="form-control" type="text" placeholder="" value="{{ $user['Email'] }}" name='userEmail'>
        			</div>
        			<div class="form-group">
        				<label>Role</label>
        				<select class="form-control" name='userRole'>
        					@if ($user['Role'] == 'Administrator')
        					<option selected="">Administrator</option>
        					<option>Manager</option>
        					<option>Customer</option>
        					@elseif ($user['Role'] == 'Customer')
        					<option>Administrator</option>
        					<option>Manager</option>
        					<option selected="">Customer</option>
        					@else
        					<option>Administrator</option>
        					<option selected="">Manager</option>
        					<option>Customer</option>
        					@endif
        				</select>
        			</div>
        			<div class="form-group">
        				<label>Address</label>
        				<input class="form-control" type="text" placeholder="" value="{{ $user['Address'] }}" name="userAddress">
        			</div>
        			<div class="form-group">
        				<label>Phone</label>
        				<input class="form-control" type="text" placeholder="" value="{{ $user['Phone'] }}" name="userPhone">
        			</div>
        			
      			</div>
          		<div class="modal-footer ">
        			<button type="submit" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>Update</button>
      			</div>
      			</form>
        	</div>
    	<!-- /.modal-content --> 
  		</div>
    <!-- /.modal-dialog --> 
    </div>
    
    <!-- Delete user -->

    <div class="modal fade" id="delete_{{ $user['UserID'] }}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        	
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      	</div>
        	<div class="modal-body">
       			<div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete {{ $user['Fullname'] }}?</div>
       
      		</div>
        <div class="modal-footer ">
        	<form action="{{ route('deleteUser', $user['UserID']) }}" method='POST'>
        	@csrf
        	<button type="submit" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        	<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
        	</form>
      	</div>
      	
        </div>
    	<!-- /.modal-content --> 
  		</div>
    <!-- /.modal-dialog --> 
    </div>
    @endforeach
    </div>
</body>
</html>