<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>

<body>
    <!-- PHP file located at '../app/views/' followed by the $viewPath variable and '.php' extension. -->
    <?php require_once '../app/views/' . $viewPath . '.php'; ?>
</body>

</html>

