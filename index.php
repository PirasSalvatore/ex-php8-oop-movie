<?php


require_once './Models/Review.php';
require_once './Traits/Reviews.php';
require_once './Models/Genre.php';
require_once './Models/Movie.php';

require_once './db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>

    <title>Movie PHP</title>
</head>
<body>

    <?php require_once './Components/Header.php'; ?>


    <main class="container mt-5">
        <h1 class="text-center mb-4 text-warning">Movie List</h1>
        <div class="row">
            <?php foreach ([$Inception, $Interstellar, $Dunkirk] as $movie): ?>
                <div class="col-md-4 mb-4 h-100 d-flex">
                    <div class="card h-100 w-100 shadow-lg">
                        <!-- Immagine con altezza fissa e object-fit -->
                        <img 
                            src="<?php echo htmlspecialchars($movie->coverImage); ?>" 
                            class="card-img-top"
                            alt="<?php echo htmlspecialchars($movie->title); ?>"
                            style="height: 300px; object-fit: cover;"
                        >
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?php echo htmlspecialchars($movie->title); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($movie->description); ?></p>
                            <p class="card-text"><strong>Genre:</strong>
                                <?php foreach ($movie->genre as $genre): ?>
                                    <?php echo htmlspecialchars($genre->name); ?>
                                <?php endforeach; ?>
                            </p>
                            <p class="card-text"><strong>Director:</strong> <?php echo htmlspecialchars($movie->director); ?></p>
                            <p class="card-text"><strong>Year:</strong> <?php echo htmlspecialchars($movie->getYear()); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>