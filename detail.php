<?php
include 'db.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM anime WHERE id=$id");
$anime = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Detail Anime</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="container mt-4">

<div style="display:flex; align-items:flex-start; gap:20px;">
    <div>
        <img src="uploads/<?php echo $anime['cover']; ?>" width="250">
    </div>

    <div>
        <h1><?php echo $anime['judul_en']; ?> (<?php echo $anime['judul_jpn']; ?>)</h1>
        <p><strong>Skor:</strong> <?php echo $anime['skor']; ?></p>
        <p><strong>Status:</strong> <?php echo $anime['status']; ?></p>
        <p><strong>Total Episode:</strong> <?php echo $anime['total_episode']; ?></p>
        <p><strong>Tanggal Rilis:</strong> <?php echo $anime['tanggal_rilis']; ?></p>
        <p><strong>Produser:</strong> <?php echo $anime['produser']; ?></p>
        <p><strong>Studio:</strong> <?php echo $anime['studio']; ?></p>
        <p><strong>Genre:</strong> <?php echo $anime['genre']; ?></p>
    </div>
</div>

<h3 class="mt-4">Sinopsis</h3>
<p><?php echo nl2br($anime['sinopsis']); ?></p>

<a href="index.php" class="btn btn-secondary mt-3">Kembali</a>

</body>
</html>
