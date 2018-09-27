<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<br><br>
	<hr>
	<p id="message"></p>

	<!--Insert Form-->
	<div class="container">
	   <div class="panel panel-primary">
       <div class="panel-heading">Data Insert Through Ajax Jquery</div>
       <div class="panel-body">
       	<form method="post">
       		<table class="table table-hover">
       			<tr><th>Name</th><td><input type='text' id="name" name="name"></td></tr>
       			<tr><th>Email</th><td><input type='text' id="email" name="email"></td></tr>
       			<tr><th>contact</th><td><input type='text' id="contact" name="contact"></td></tr>
       			<tr>
       				<td><div class="col-md-4"></div></td>
       				<td><div class="col-md-4"><input type='submit' id="insert" name="insert" value='insert' class="btn btn-primary"></div></td>
       			    <td><div class="col-md-4"></div></td>
       		   </tr>
       		</table>
       	</form>
       </div>
       </div>
	</div>

	<!--Show data-->

	<div class='container'>
		<input type='submit' id="select" name="insert" value='select' class="btn btn-primary" style="float:right;">
		<div class="row"style="clear:right;">
			<div class="col-md-2">
			</div>
			<div class="col-md-8">
				<table class="table table-hover">
			<thead>
				
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Contact</th>
				<th>&nbsp;</th>
				<th>Action</th>
			</tr>
           </thead>
           <?php include_once('select.php');
				$sql ="SELECT * from students";
					if($data =mysqli_query($conn,$sql)){
						while($row =mysqli_fetch_assoc($data))
					{
					?>
			 <tbody>
           	  <tr>
           	  	<td><?php echo $row['id'];?></td>
           		<td><?php echo $row['name'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['contact'];?></td>
				<td><a href="edit.php/?id=<?php echo $row['id'];?>"><input type="button" class="btn btn-primary" value="Edit"></a></td>
				<td><a href="delete.php/?id=<?php echo $row['id'];?>"><input type="button" class="btn btn-danger" value="Delete"></a></td>
           </tbody>
					<?php }
					} ?>
          
		</table>
			</div>
			<div class="col-md-2">
			</div>
		</div>
	</div>
<script type="text/javascript" src="script.js"></script>
</body>
</html>