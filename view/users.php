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
    <?php if(empty($users)){ ?>
    <tr>
        <td colspan="3">No users found</td>
    </tr>
    <?php }else{ ?>
        <?php foreach($users as $user) : ?>
        <tr>
            <td><?php echo $user['id']?></td>
            <td><?php echo $user['name']?></td>
        </tr>
        <?php endforeach; ?>
    <?php } ?>
    </table>
</body>
</html>