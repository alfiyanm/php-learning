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
                    // if (! true) {}
                    // means if not true then execute
                    if (! $task['completed']) {
                        echo 'incomplete';
                    } else {
                        echo 'complete';
                    };
                ?>
            </li>
        </ul>
    </header>
</body>
</html>