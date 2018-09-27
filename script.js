
//Insert Data
$(document).ready(function(){
   $('#insert').click(function(event){
     event.preventDefault();
   	 $.ajax({
   	 	url:"insert.php",
   	 	method:'post',
   	 	data:$('form').serialize()
   	 }).done(function(response){
   	 	$('#message').text(response);
   	 });
   });
});


//update Data


 $('#update').click(function(){
   alert('data');
   $.ajax({
       url :'insert.php',
       method:'post',
       data:$('form').serialize()
       datatype:'html',
       success:function(response){
         console.log(response);
       }
   });
 });


//select Data

$(document).ready(function(){
 $('#select').click(function(){
   
   $.ajax({
       url :'select.php',
       datatype:'html',
       success:function(result){
         
       }
   });
 });
});