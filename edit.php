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
       <div class="panel-heading">Data Update Through Ajax Jquery</div>
       <div class="panel-body">
       	<form method="post" action="">
       		<table class="table table-hover">
       				<?php include_once('select.php');
				$sql ="SELECT * from students where id =".$_GET['id'];
				$data =mysqli_query($conn,$sql);
				 if($data->num_rows> 0)
				 	{
				 	$row =mysqli_fetch_assoc($data);
				 	?>
       			<tr>
       				<th>Name</th>
       				<td>
       					<input type='text' id="name" name="name" value="<?php echo $row['name'];?>">
       				</td>
       			    
       			</tr>
       			<tr>
       				<th>Email</th>
       				<td><input type='text' id="email" name="email" value="<?php echo $row['email'];?>">
       				</td>
       			</tr>
       			<tr>
       				<th>contact</th>
       				<td>
       					<input type='text' id="contact" name="contact" value="<?php echo $row['contact'];?>">
       				</td>
       			</tr>
       		<?php }?>
       			<tr>
       				<td><div class="col-md-4"></div></td>
       				<td>
                                          <div class="col-md-4">
                                                 <button type='button' id="update" name="update" class="btn btn-primary">Update</button>
                                          </div>
                                   </td>
       			    <td><div class="col-md-4"></div></td>
       		   </tr>
       		</table>
       	</form>
       </div>
       </div>
	</div>					
<script type="text/javascript">
      $(document).ready(function(){
                 $('#update').click(function(event){
                   event.preventDefault();
                      $.ajax({
                            url:"insert.php",
                            method:'post',
                            data:$('form').serialize()
                      }).done(function(response){
                            console.log(response);
                      });
                 });
              });
</script>
</body>
</html>