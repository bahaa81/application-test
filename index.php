<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
		<title>
			Ebasefm - Simple Test
		</title>
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script  type="text/javascript">
			$(document).ready(function(e) {	
				
				var clickHandler = "click";

				if('touchstart' in document.documentElement){
					clickHandler = "touchstart";
				}

				 $('body').on(clickHandler, '.display', function(){
						
						var firstName = $('td:eq(1)', $(this).parents('tr')).text();
						var lastName = $('td:eq(2)', $(this).parents('tr')).text();
						var email = $('td:eq(3)', $(this).parents('tr')).text();
						alert("Name: "+firstName + ' '+lastName+"\r" + "Email: "+email);
				  });
			});
		</script>
		<style>
			#tblPeople{
				margin:20px auto;
				width:100%;
				max-width:600px;
				border-collapse: collapse;
				border-spacing: 0;
			}
			
			 #tblPeople thead {
				border: 1px solid #cccccc;
				background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#FEFEFE), to(#F6F7F8));
				background: -webkit-linear-gradient(top, #FEFEFE, #F6F7F8);
				background: -moz-linear-gradient(top, #FEFEFE, #F6F7F8);
				background: -ms-linear-gradient(top, #FEFEFE, #F6F7F8);
				background: -o-linear-gradient(top, #FEFEFE, #F6F7F8);
			}
			
			#tblPeople thead tr th{
				color:#505050;
				border-bottom:1px;
				border-top: 0;
				text-align:left;
				padding:10px;
				
			}
			#tblPeople tbody {
				border: 1px solid #cccccc;
			}
			#tblPeople tbody tr td{
				padding:5px;
				color:#898F9C;
				border-bottom: 1px solid #cccccc;
			}
			
			#tblPeople  tbody tr:nth-child(even){
				background-color:#F6F7F8;
			}
			#tblPeople  tbody tr:hover{
				background-color:#E7E7E7;
			}
			.btn{
				 display: inline-block;
				padding: 6px 12px;
				margin-bottom: 0;
				font-size: 14px;
				font-weight: 400;
				line-height: 1.42857143;
				text-align: center;
				white-space: nowrap;
				vertical-align: middle;
				-ms-touch-action: manipulation;
				touch-action: manipulation;
				cursor: pointer;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
				background-image: none;
				color: #fff;
				background-color: #204d74;
				border: 1px solid transparent;
				border-radius: 4px;
				background-image: none;
				outline: 0;
				-webkit-box-shadow: inset 0 3px 5px rgba(0,0,0,.125);
				box-shadow: inset 0 3px 5px rgba(0,0,0,.125);
			}
			.btn:hover{
				background-color: #286090;
				border-color: #204d74;
			}
		</style>
	</head>
<body>
	<?php
		$people = array(
		   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
		   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
		   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
		   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
		   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
		);
	?>
	<table id="tblPeople">
		<thead>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Action</th>
		</head>
		<tbody>
			<?php
				foreach($people as $key=>$person){
					?>
					<tr>
						<td><?php echo $person['id'];?></td>
						<td><?php echo $person['first_name'];?></td>
						<td><?php echo $person['last_name'];?></td>
						<td><?php echo $person['email'];?></td>
						<td><button class="display btn">Display Info</button></td>
					</tr>
					<?php
				}
			?>
		</tbody>
	</table>
</body>
</html>
