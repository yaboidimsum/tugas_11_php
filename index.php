<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>	
	<title>Homepage</title>
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
            <h2 class="font-bold text-xl text-white">Homepage</h2>
                    <a class="py-2 px-4 bg-white flex justify-center items-center font-semibold rounded-md" href="add.php">Add New Data</a>
                <div>
                <table class="w-[50rem] rounded-md bg-[#354154] border-collapse">
                <tr>
                    <td class="px-6 pyy-2 text-slate-300 border-b border-r"><strong>Name</strong></td>
                    <td class="px-6 py-2 text-slate-300 border-b border-r"><strong>Age</strong></td>
                    <td class="px-6 py-2 text-slate-300 border-b border-r"><strong>Email</strong></td>
                    <td class="px-6 py-2 text-slate-300 border-b"><strong>Action</strong></td>
                </tr>
                <?php
                // Fetch the next row of a result set as an associative array
                while ($res = mysqli_fetch_assoc($result)) {
                    echo "<tr class='border-b'>";
                    echo "<td class='px-6 py-6 text-white font-semibold border-r'>".$res['name']."</td>";
                    echo "<td class='px-6 py-6 text-white font-semibold border-r'>".$res['age']."</td>";
                    echo "<td class='px-6 py-6 text-white font-semibold border-r'>".$res['email']."</td>";	
                    echo "<td class='px-6 py-6 text-white font-semibold'><a class='text-yellow-500' href=\"edit.php?id=$res[id]\">Edit</a> | 
                    <a class='text-red-500' href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                }
                ?>
        </table>

                </div>
    </div>
    </div>
</body>
</html>