<html>
<head>
	<title>Add Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#11162A]">

<header>
    <div class="py-4 px-12 bg-[#0D1120]">
        <div>
            <h2 class="font-bold text-lg text-white">PWEB-B Crud</h2>
        </div>
    </div>
</header>

<div class="grid h-screen place-items-center">
        <div class="flex flex-col py-6 px-6 bg-[#0D1120] gap-8 rounded-md" >
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
		
	// Check for empty fields
	if (empty($name) || empty($age) || empty($email)) {
		if (empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if (empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if (empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT INTO users (`name`, `age`, `email`) VALUES ('$name', '$age', '$email')");
		
		// Display success message
		echo "<p class='font-bold text-xl text-white'>Data added successfully!</p>";
		echo "<a class='py-2 px-4 bg-white flex justify-center items-center font-semibold rounded-md w-full' href='index.php'>View Result</a>";
	}
}
?>
</div>
</div>
</body>
</html>