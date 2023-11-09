<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$name = $resultData['name'];
$age = $resultData['age'];
$email = $resultData['email'];
?>
<html>
<head>	
	<title>Edit Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<header>
    <div class="py-4 px-12 bg-[#0D1120]">
        <div>
            <h2 class="font-bold text-lg text-white">PWEB-B Crud</h2>
        </div>
    </div>
</header>

<body class="bg-[#11162A]">
    <div class="grid h-screen place-items-center">
    <div class="flex flex-col py-6 px-6 bg-[#0D1120] gap-8 rounded-md">
        <h2 class="font-bold text-xl text-white">Edit Data</h2>
            <a class="py-2 px-4 bg-white flex justify-center items-center font-semibold rounded-md" href="index.php">Home</a>            
            <form name="edit" method="post" action="editAction.php">
                <table class="flex flex-col py-6 w-[20rem] rounded-md bg-[#354154] border-collapse">
                    <tr> 
                        <td class="px-6 py-2 font-semibold text-slate-200">Name</td>
                        <td><input class="rounded-md bg-[#161B27] text-white px-3 " type="text" name="name" value="<?php echo $name; ?>"></td>
                    </tr>
                    <tr> 
                        <td class="px-6 py-2 font-semibold text-slate-200">Age</td>
                        <td><input class="rounded-md bg-[#161B27] text-white px-3 " type="text" name="age" value="<?php echo $age; ?>"></td>
                    </tr>
                    <tr> 
                        <td class="px-6 py-2 font-semibold text-slate-200">Email</td>
                        <td><input class="rounded-md bg-[#161B27] text-white px-3 " type="text" name="email" value="<?php echo $email; ?>"></td>
                    </tr>
                    <tr>
                        <td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
                        <td><input class="py-2 px-4 bg-white flex justify-center items-center font-semibold rounded-md w-full" type="submit" name="update" value="Update"></td>
                    </tr>
                </table>
            </form>
    </div>    
    </div>
</body>
</html>