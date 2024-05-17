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
    <?php if(empty($advertisements)){ ?>
    <tr>
        <td colspan="3">No advertisements found</td>
    </tr>
    <?php }else{ ?>
        <?php foreach($advertisements as $advertisement) : ?>
        <tr>
            <td><?php echo $advertisement['id']?></td>
            <td><?php echo $advertisement['username']?></td>
            <td><?php echo $advertisement['title']?></td>
        </tr>
        <?php endforeach; ?>
    <?php } ?>
    </table>
</body>
</html>