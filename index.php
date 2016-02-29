<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Drag and Drop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        ​
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="css/main.css" media="screen" title="no title" charset="utf-8">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </head>
    <body>
        <?php
        include 'php/config.php';
        ?>
        <table class="test" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <td>Nom</td>
                    <td>Prenom</td>
                    <td>Age</td>
                    <td>Profession</td>
                    <td>E-mail</td>
                    <td>Codec</td>
                </tr>
            </thead>
            <tbody id="bloc1">
                <?php
                While ($data = mysqli_fetch_assoc($info)) {
                    echo '<tr class="move"><td>' . utf8_encode($data['nom']) . "</td><td>" . utf8_encode($data['prenom']) . "</td><td>" . utf8_encode($data['age']) . "</td><td>" . utf8_encode($data['profession']) . "</td><td>" . utf8_encode($data['email']) . "</td><td>" . utf8_encode($data['codec']) . '</td></tr>';
                };
                mysql_close($info);
                ?>
            <div id="todrop"><img style="height: 150px; width: 150px;"src="img/bin.jpg"></div>
        </tbody>
    </table>
</body>
</html>