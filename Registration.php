 <?php

$mysqli = new mysqli("localhost", "root", "", "register");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

	
?>
<html>
<head>
	<style type ="text/css">
		body{
			margin:0;
			background-image:url('edu.jpg');
			background-repeat:no-repeat;
			background-size:cover;}

		div.header{	
				text-align:center;
				heigth:20px;
				background-color:black;
				}

		p.topic{	
				color:white;
				font-size:100px;
				letter-spacing: 8px;
				height:10px;
				text-shadow:5px 5px 8px #E600FF}
		
		input.btn{
				background-color:black;
				color:blue;
				text-shadow: 6px 6px 10px #EB408A;
				padding: 10px 10px 10px 10px;
				width:150px;
				margin-left:5px;
				font-size:15px;
				font-weight:bold;}
		
		.btn:hover{
				background-color:white;
				border-radius:25px;}

		div.Btnheader{
				text-align:right;}

		
		div.footer1{
					background-color:#521F1F;
					margin-top:100px;
					height:auto;
					}

		div.footer2{
					text-align:center;
					color:white;
					background-color:black;
					margin-top:auto;
					height:20px;
					padding: 10px 10px;}
		
		p.footerP{
				font-size:60px;
				text-align:center;
				color:#06FFFF;
				text-shadow: 8px 8px 5px #000000;
				font-family:"papyrus",fantasy;
				position:relative;
				animation:move-lable 2s infinite;}
		p.footerP:hover{
					color:red;}
		
		table.footerP{
				padding-top:0;}
		td.tdf{
				color:white;}
			
		img.info{
				border-radius:25px;}
		
		img.imgH{
				border-radius:50%;
				}
		div.content{
					background-color:rgb(255,255,255,0.7);
					height:auto;
					width:800px;
					margin-top:50px;
					margin-left:425px;
					border:6px solid #ED7474;
					border-radius:5%;}
		form{padding-left:15px;}
		
		.date{width:750px; height:40px;}
		
		.text{width:750px; height:40px;}
		
		.btnReg{
				border:5px solid red;
				width:120px;
				padding:5px 5px;
				}
		.btnEnd{
				border:5px solid orange;
				width:120px;
				padding:5px 5px;
				}
		.btnEnd:hover{
				border:5px solid black;
				width:120px;
				padding:5px 5px;
		}
		.btnReg:hover{
				background-color:black;
				color:white;
		}
	</style>
	<script type="text/javascript">
		function validateForm()
		{
			var n = document.forms["form1"]["fullName"].value;
			if(n == "")
			{
				alert("Full Name must be filled out!");
				return false;
			}
			
			var idnum = document.forms["form1"]["IdNum"].value;
			var idlength = idnum.length;
			//var charCode =idnum.which ? idnum.which : idnum.keyCode;
			if(idlength != 12)
			{
				alert("ID number must be filled out with 12 digits!");
				return false;
			}
			
			var bd = document.forms["form1"]["bDay"].value;
			if(bd == "")
			{
				alert("Birthday must be filled out!");
				return false;
			}
			
			var a = document.forms["form1"]["address"].value;
			if(a == "")
			{
				alert("Address must be filled out!");
				return false;
			}
			
			var phone = document.forms["form1"]["pNumber"].value;
			var numlength = phone.length;
			if(numlength != 10)
			{
				alert("Phone number must be filled out with 10 digits!");
				return false;
			}
			
			var sub = document.forms["form1"]["subjects"].value;
			if(sub == "")
			{
				alert("Subject stream must be filled out!");
				return false;
			}
			
			var inputMail = document.forms["form1"]["email"].value;
			/*var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			if(inputMail.value.match(mailformat))
			{
				document.form1.email.focus();
				return true;
			}*/
			if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form1.email.value))
			{
				return (true)
			}
			else if(inputText = "")
			{
				alert("Email address must be filled out!");
				return false;
			}
			else 
			{
				alert("You have entered an invalid email address!");
				document.form1.email.focus();
				return false;
			}
			
		}
		/*function callMultipleFunctions()
			{
				validateForm();
				validateEmail();
				
			}*/
	</script>
</head>
<body>
	<div class="header">
			<p class="topic"><b>HORIZON</b></p> 
			<br>
			<div class="Btnheader">
			<a href="Home.html"><input class="btn" type="button" name="home" value="HOME"></a>
			<a href="Science.html"><input class="btn" type="button" name="science" value="SCIENCE"></a>
			<a href="Art.html"><input class="btn" type="button" name="art" value="ART"></a>
			<a href="Commerce.html"><input class="btn" type="button" name="commerce" value="COMMERCE"></a>
			<a href="Technology.html"><input class="btn" type="button" name="technology" value="TECHNOLOGY"></a>
			<a href="Contact.html"><input class="btn" type="button" name="contact" value="CONTACT"></a>
			</div>
	</div>
	
	<div class="content">
		<form action="" name="form1" onsubmit="return validateForm()" method="post" >
			<center><ins><h1 class="topic">.....Register Here.....</h1></ins></center>
			Full Name:<br>
			<input class="text" type="text" name="fullName" placeholder="Enter the full name here." ><br><br>
			National ID Number:<br>
			<input class="text" type="text" name="IdNum" placeholder="Digits only"><br><br>
			Birthday:<br>
			<input class="date" type="date" name="bDay" ><br><br>
			Address:<br>
			<input type="text" class="text" name="address" placeholder="Enter the address here."><br><br>
			Phone Number:<br>
			<input type="text" class="text" name="pNumber" placeholder="Digits only"><br><br>
			Email Address:<br>
			<input type="text" class="text" name="email" placeholder="example@gmail.com"><br><br>
			Subject Stream:<br>
			<input type="radio" name="subjects" value="Science">
			Science
			<input type="radio" name="subjects" value="Commerce">
			Commerce
			<input type="radio" name="subjects" value="Art">
			Art
			<input type="radio" name="subjects" value="Technology">
			Technology<br><br>
			<center><input type="submit" class="btnReg" value="REGISTER NOW" name="submit"><br><br>
			
			<input type="reset" class="btnEnd" value="CLEAR" name="clear">
			<a href="Home.html"><input type="button" class="btnEnd" value="CANCEL" name="cancel"></a></center>
			
		</form>



	</div>

			<?php



				if(isset($_POST['submit']))
				{
					$fullname = $_POST['fullName'];
					$nicnum = $_POST['IdNum'];
					$bday = $_POST['bDay'];
					$address =  $_POST['address'];
					$pnumber = $_POST['pNumber'];
					$email = $_POST['email'];
					$stream = $_POST['subjects'];



					$query = "SELECT * FROM register_form WHERE nic='$nicnum'";
						$result = $mysqli->query($query);

					if ($result->num_rows > 0) {
    						echo '<script>alert("NIC is already exists!")</script>';
						}
						else{
							mysqli_query($mysqli, "INSERT INTO register_form (fname,nic,bday,address,pnum,email,stream) VALUES ('$fullname','$nicnum','$bday','$address','$pnumber','$email','$stream')");
							echo '<script>alert("You have successfully Registered.")</script>';
						}
					
					
				}
				mysqli_close($mysqli);
			?>
			

	<div class="footer1">
			<table class="footerP" border="0" cellspacing="50px">
				<tr>
					<td><p class="footerP">Join with us to get<br> highest results for A/L</p>
					</td>
					<td class="tdf" style="width:300px;"><h2>Information</h2>
						<img class="info" src="1.jpg" align="left" width="50" height="50"><p class="inf2">Horizon (Pvt)Ltd,<br>
						Dalugama, Kelaniya.</p><br>
						
						<img class="info" src="2.jpg" align="left" width="50" height="50"><p class="inf2">Telephone:0112 999999<br>
						Fax:0094 112 621 382</p><br>
				
						<img class="info" src="3.jpg" align="left" width="50" height="50"><p class="inf2">info@horizon.com</p>	
					</td>
					<td>
						<img src="horizon.jpg" class="imgH" width="400" height="300">
					</td>

				</tr>
				
			</table>
				
			
	</div>
	<div class="footer2">
		Copyright 2023 <b>Institute Management Web Project</b> Designed By <b>Group 02</b>
	</div>

</body>
<html>