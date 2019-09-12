<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<body>
    <div class="card text-left">
        <?php foreach ($result as $row): ?>
        <div class="card-header">
            <img class="rounded-circle" 
            src="../img/bild.PNG" 
            alt="" 
            style="width:40px; height:40px;">
           <h5 class="card-title pl-4 mb-0">
               <?= $row['name'] ?>
           </h5>
        <small class="time text-center">
            2019-12-12 01:00
        </small>
        <small>
            2019-12-12 01:00
        </small>
        </div>
        <div class="card-body">
          <h5 class="card-title">Verri title</h5>
            <p class="card-text">
                <?= $row['body'] ?>
            </p>
        </div>
        <div class="card-footer text-muted">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
        <?php endforeach ?>
      </div>
</body>
</html>