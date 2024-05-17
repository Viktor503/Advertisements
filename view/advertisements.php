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
    <h1>Welcome to the advertisements page!</h1>
    <table>
    <tr>
        <th>Id</th>
        <th>User</th>
        <th>Title</th>
    </tr>
    <!-- here we check if there are any advertisements in the database -->
    <?php if(empty($advertisements)){ ?>
    <tr>
        <!-- if there are no advertisements we display a message -->
        <td colspan="3">No advertisements found</td>
    </tr>
    <?php }else{ ?>
        <!-- if there are advertisements we loop through them and display them in a table -->
        <?php foreach($advertisements as $advertisement) : ?>
        <tr>
            <!-- geting variables with class methods -->
            <td><?php echo $advertisement->getId()?></td>
            <td><?php echo $advertisement->getUsername()?></td>
            <td><?php echo $advertisement->getTitle()?></td>
        </tr>
        <?php endforeach; ?>
    <?php } ?>
    </table>
</body>
</html>