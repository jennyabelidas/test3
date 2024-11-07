<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ubuntu Server-PHP Deployment</title>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
	<div class="container mt-5">
		<h2 class="mb-4">Ubuntu Server-PHP Deployment</h2>

		<!-- Form -->
		<form action="process_form.php" method="POST">

			<div class="mb-3">
				<label for="firstname" class="form-label">Firstname:</label>
				<input type="text" id="firstname" name="firstname" class="form-control">
			</div>

			<div class="mb-3">
				<label for="middlename" class="form-label">Middlename:</label>
				<input type="text" id="middlename" name="middlename" class="form-control">
			</div>

			<div class="mb-3">
				<label for="lastname" class="form-label">Lastname:</label>
				<input type="text" id="lastname" name="lastname" class="form-control">
			</div>

			<div class="mb-3">
				<label for="age" class="form-label">Age:</label>
				<input type="text" id="age" name="age" class="form-control">
			</div>

			<div class="mb-3">
				<label for="address" class="form-label">Address:</label>
				<input type="text" id="address" name="address" class="form-control">
			</div>

			<div class="mb-3">
				<label for="course_section" class="form-label">Course & Section:</label>
				<input type="text" id="course_section" name="course_section" class="form-control">
			</div>

			<div class="mb-3">
				<!-- Submit Button -->
				<button type="submit" class="btn btn-primary w-100">Submit</button>
			</div>

		</form>
	</div>

	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
