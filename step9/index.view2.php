<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Task For The Day</h1>
        <ul>
            <li>
                <strong>Name : </strong><?= $task['title']; ?>
            </li>
            <li>
                <strong>Due Date : </strong><?= $task['due']; ?>
            </li>
            <li>
                <strong>Person Responsible : </strong><?= $task['assigned_to']; ?>
            </li>
            <li>
                <strong>Status : </strong>
                <?php 
                if ($task['completed']) {
                    echo '<span class="icon">&#9989;</span>';
                } else {
                    echo 'incomplete';
                }
                ?>
            </li>
        </ul>
    </header>
</body>
</html>