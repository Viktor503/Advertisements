<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertisements</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <?php include 'header.php';?>
    <h1>Welcome to the users page!</h1>
    <table>
    <tr>
        <th>Id</th>
        <th>Username</th>
    </tr>
    <!-- here we check if there are any users in the database -->
    <?php if(empty($users)){ ?>
    <tr>
        <!-- if there are no users we display a message -->
        <td colspan="3">No users found</td>
    </tr>
    <?php }else{ ?>
        <!-- if there are users we loop through them and display them in a table -->
        <?php foreach($users as $user) : ?>
        <tr>
            <!-- geting variables with class methods -->
            <td><?php echo $user->getId()?></td>
            <td><?php echo $user->getName()?></td>
        </tr>
        <?php endforeach; ?>
    <?php } ?>
    </table>
</body>
</html>