
<!DOCTYPE html>
<html>
<head>
	<title>Survey</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<?php
		$is_submit = false;
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			require_once('Model.php');
			$model = new Model();

			$query = "
				INSERT INTO 
				users 
					(name, email, profession, pgm_lang, year_of_experience)
				VALUES 
					('{$_POST['name']}', '{$_POST['email']}', '{$_POST['profession']}', '{$_POST['pgm_lang']}', '{$_POST['year_of_experience']}')
			";
			$is_submit = $model->query($query);

			/*
				ini_set("SMTP","smtp.gmail.com");
				ini_set("smtp_port","465");
				ini_set("force_sender","");
				ini_set("sendmail_from","");
				ini_set("auth_username","");
				ini_set("auth_password","");
				$message = "Hi {$_POST['name']}, We have received your information, thank you for contacting us";

				$header = "From: jahangiralomshamim3@gmail.com" . "\r\n" ."CC: {$_POST['email']}";
				echo mail($_POST['email'], "Survey", $message, $header);
			*/
		}
		else{
	?>
	<div class="box-wrapper">
		<div class="survey-box">
			<form method="POST" action="">
				<div class="scroll">
					<div class="item active start">
						<div class="start-btn">
							<button type="button" class="btn btn-success" id="start">Start ></button>
						</div>
					</div>

					<div class="item">
						<div class="form-group">
							<label>
								<strong>Enter Your Name *</strong>
							</label>
							<input type="text" name="name" class="form-control" placeholder="Enter Your Name">
						</div>
					</div>

					<div class="item">
						<div class="form-group">
							<label>
								<strong>Enter E-mail Address *</strong>
							</label>
							<input type="mail" name="email" class="form-control" placeholder="Enter Your E-mail Address">
						</div>
					</div>

					<div class="item">
						<div class="form-group">
							<label>
								<strong>Profession *</strong>
							</label>
							<div class="form-control">
								<label><input type="radio" name="profession" value="developer" checked="true"> &nbsp;Developer</label> &nbsp; &nbsp;
								<label><input type="radio" name="profession" value="designer"> &nbsp;Designer</label>
							</div>
						</div>
					</div>

					<div class="item">
						<div class="form-group">
							<label>
								<strong>Total Year Of Experience *</strong>
							</label>
							<input type="number" name="year_of_experience" class="form-control" placeholder="E.G: 5">
						</div>
					</div>

					<div class="item">
						<div class="form-group">
							<label>
								<strong>Which Programming Language Are You Using *</strong>
							</label>
							<textarea name="pgm_lang" class="form-control" placeholder="PHP, OOP" required></textarea>
						</div>
					</div>
				</div>

				<button type="button" id="next_btn" class="btn btn-success">Next</button>
				<button type="submit" id="submit_btn" class="btn btn-success d-none">Submit</button>

			</form>
		</div>
	</div>
	<?php } if($is_submit){ ?>
		<div>
			<div class="alert alert-success" role="alert">
				<h3>Submit Successfull</h3>
				<p>Check Your E-mail</p>
			</div>
		</div>
	<?php } ?>
</body>
<script>
	((x)=>{
		/*
		 * *******************
		 *	HANDLE NEXT BTN
		 * *****************
		*/
		function next (){
			let items = (event.target.closest('.survey-box')).querySelectorAll('.item') ?? [];
			let pulse = true;

			items.forEach((item, index)=>{

				if(item.classList.contains('active') && pulse)
				{
					let input = item.querySelector('input');

					if(!input || input.value !=''){
						let next_target = (index + 1);
						if(items.length > next_target){
							item.classList.remove('active');
							items[next_target].classList.add('active');
							x('.scroll').style.transform = `translate3d(${0-(450*next_target)}px, 0px, 0px)`;
							pulse = false;
						}
						if(items.length == (index+2)){
							x('#submit_btn').classList.remove('d-none');
							x('#next_btn').classList.add('d-none');
						}
					}
					else if(input) {
						input.classList.add('border-danger');
					}
				}
			});
		}

		x("#start").addEventListener('click', (event)=>{
			next();
		});

		x("#next_btn").addEventListener('click', (event)=>{
			next();
		});

	})((x)=>document.querySelector(x))
</script>
</html>