<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<section class="hero-section">
    <div class="overlay"></div>
    <div class="container hero-content">
        <h1>Hi, I'm Yafiq</h1>
        <p>hmmmmmmmmmmmmm</p>
    </div>
</section>

<section class="py-5 bg-dark text-light">
<div class="container">
    <h2>About Me</h2>

    <?php
    $query = mysqli_query($conn, "SELECT * FROM about");
    while ($row = mysqli_fetch_assoc($query)) {
        echo "<p>{$row['deskripsi']}</p>";
    }
    ?>

</div>
</section>

<section class="py-5">
<div class="container">
    <h2>Skills</h2>

    <?php
    $query = mysqli_query($conn, "SELECT * FROM skills");
    while ($row = mysqli_fetch_assoc($query)) {
    ?>
        <label><?= $row['nama_skill'] ?></label>
        <div class="progress mb-3">
            <div class="progress-bar"
            style="width: <?= $row['level'] ?>%; background-color: <?= $row['warna'] ?>;">
            <?= $row['level'] ?>%
            </div>
        </div>
    <?php } ?>

</div>
</section>

<section class="py-5 bg-light">
<div class="container">
    <h2>Certificates</h2>
    <div class="row">

    <?php
    $query = mysqli_query($conn, "SELECT * FROM certificates");
    while ($row = mysqli_fetch_assoc($query)) {
    ?>
        <div class="col-md-4">
            <div class="card">
                <img src="<?= $row['image'] ?>" class="card-img-top">
                <div class="card-body">
                    <h5><?= $row['title'] ?></h5>
                    <p><?= $row['deskripsi'] ?></p>
                </div>
            </div>
        </div>
    <?php } ?>

    </div>
</div>
</section>

</body>
</html>