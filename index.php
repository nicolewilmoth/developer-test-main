<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KHM Travel Developer Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            display:flex;
            flex-direction: column;
            min-height: 100vh;
        }
        #footer {
            margin-top: auto !important;
        }
    </style>
</head>

<body>


<div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>KHM Travel Dev Test</h1>
        <p>Television Show App</p> 
    </div>

    <div class="container mt-5 text-center">
        <div class="row">
            <div class="col-lg-12 text-center">
                <form action="insert-data.php" method="POST">
                    Best televison show of all time:
                    <input type="text" name="tvshow">
                    <input type="submit" name="submit" value="Save to database">
                </form>
            </div>
        </div>
    </div>
    <div id="footer" class="mt-5 p-4 bg-dark text-white text-center">
        <p>Developed by Nicole Wilmoth</p>
    </div>


</body>

</html>