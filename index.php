<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include_once __DIR__ . '/server/data.php'; ?>
    <header class="container-fluid d-flex p-1 mb-3">
        <div class="row">
            <div class="col-4">
            <img src="<?= $logo;?>" alt="logo" class="img-fluid">
            </div>
        </div>
    </header>

    <main class="container-fluid">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php foreach($music as $data) { ?>
        <div class="col">
            <div class="card">
                <img src="<?= $data['poster'];?>" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    </main>
    
</body>
</html>