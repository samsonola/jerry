<?php 

session_start();
// ob_start();
$_SESSION["key"] = "";

// if (isset($_POST['sub'])) {
//    $_SESSION['name'] = $_POST['name'];
//    $_SESSION['email'] = $_POST['email'];
//    $_SESSION['pass'] = $_POST['pass'];
//    $_SESSION['check'] = $_POST['check'];
//    $_SESSION['country'] = $_POST['country'];
//    $_SESSION['gender'] = $_POST['gender'];
//    $_SESSION['rand'] =  rand(1,9).(rand(1000,10000)*10);

//    header("location:download");

// }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        
		<!-- JQuery -->
		<script src="jquery/jquery.min.js"></script>
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/bg-registration-form-3.jpg');">
			<div class="inner">
			
				<form action="" method="POST">
				<p id='new_empty' style="color:Red"></p>
					<h3>Registration Form</h3>
					
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Username:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account-o"></i>
								<input type="text" class="form-control" name="name">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Email:</label>
							<div class="form-holder">
								<i style="font-style: normal; font-size: 15px;">@</i>
								<input type="text" class="form-control" name="email">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Password:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="password" class="form-control" placeholder="********" name="pass">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Repeat Password:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="password" class="form-control" placeholder="********">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Country:</label>
							<div class="form-holder select">
								<select id="country" class="form-control" name="country">
									<option value="united_states">United States</option>
									<option value="united_kingdom">United Kingdom</option>
									<option value="viet_nam">Viet Nam</option>
								</select>
								<i class="zmdi zmdi-pin"></i>
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Gender:</label>
							<div class="form-holder select">
								<select id="gender" class="form-control" name="gender">
									<option value="male">Male</option>
									<option value="female">Female</option>
									<option value="other">Other</option>
								</select>
								<i class="zmdi zmdi-face"></i>
							</div>
						</div>
					</div>
					<div class="form-end">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="check"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
								<span class="checkmark"></span>
							</label>
						</div>
						<div class="button-holder">
							<input type="submit" value="Print Form" name="sub" onclick="printSerial()">
						</div>
						
					</div>
				</form>
			</div>
		</div>
		
		
		<script>
         var random = "";
			function keyGen(keyLength) {
             var i, 
			 key = "", 
			 characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

    		var charactersLength = characters.length;
			
    		for (i = 0; i < keyLength; i++) {
       		 key += characters.substr(Math.floor((Math.random() * charactersLength) + 1), 1);
    		}
    		return key;
			
			}
			


			function printSerial() {
					var print_line = document.getElementById("new_empty");
					var random_gen  = keyGen(15);
					var neon = "";
					var rand = random_gen;
					document.cookie="cname="+rand;
					print_line.innerHTML = random_gen;

					// AJAX function using jQuery
                    $.ajax({
					url:"download.php",
					method: "post",
					data: {neon : JSON.stringify(random_gen)},
					success:function(response) {
						console.log(response);
					}
				})
				    
				    event.preventDefault();
					window.print();
				}	

       
				
				// if(printSerial().length == 15 && printSerial() != ""){
				// 	alert(printSerial());
				// }

			// AJAX function to submit to DB
			// function showUser(str) {
			// if (str == "") {
			// 	document.getElementById("txtHint").innerHTML = "";
			// 	return;
			// } else {
			// 	var xmlhttp = new XMLHttpRequest();
			// 	xmlhttp.onreadystatechange = function() {
			// 	if (this.readyState == 4 && this.status == 200) {
			// 		document.getElementById("txtHint").innerHTML = this.responseText;
			// 	}
			// 	};
			// 	xmlhttp.open("GET","getuser.php?q="+str,true);
			// 	xmlhttp.send();
			// }
			// }
		</script>
		?>
		
         

	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>