<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Signup User</h3>
    
    <form action="includes/insertuser.inc.php" method = "post">
        <input type = "text" name="username" placeholder="Username">
        <input type = "password" name="password" placeholder="Password">
        <input type = "text" name="email" placeholder="Email">
        <button>Sign Up</button>
    </form>

    <h3>Update User</h3>
    
    <form action="includes/updateuser.inc.php" method = "post">
        <input type = "text" name="username" placeholder="Username">
        <input type = "password" name="password" placeholder="Password">
        <input type = "text" name="email" placeholder="Email">
        <button>Sign Up</button>
    </form>

    <h3>Delete User</h3>
    
    <form action="includes/deleteuser.inc.php" method = "post">
        <input type = "text" name="username" placeholder="Username">
        <input type = "password" name="password" placeholder="Password">
        <button>Sign Up</button>
    </form>

    <h3>Search User</h3>
    <form class="searchform" action="search.php" method="post">
        <label for="search">Search for user</label>
        <input type ="text" name="usersearch" placeholder="Search User....">
        <button>Search</button>
    </form>

</body>
</html>