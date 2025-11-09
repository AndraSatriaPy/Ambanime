<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul_en       = $_POST['judul_en'];
    $judul_jpn      = $_POST['judul_jpn'];
    $skor           = $_POST['skor'];
    $status         = $_POST['status'];
    $total_episode  = $_POST['total_episode'];
    $tanggal_rilis  = $_POST['tanggal_rilis'];
    $produser       = $_POST['produser'];
    $studio         = $_POST['studio'];
    $genre          = $_POST['genre'];
    $sinopsis       = $_POST['sinopsis'];

    $coverName = null;
    if (!empty($_FILES['cover']['name'])) {
        $coverName = $_FILES['cover']['name'];
        $coverTmp  = $_FILES['cover']['tmp_name'];
        move_uploaded_file($coverTmp, "uploads/" . $coverName);
    }

    $query = "INSERT INTO anime 
              (judul_en, judul_jpn, skor, status, total_episode, tanggal_rilis, produser, studio, genre, sinopsis, cover)
              VALUES ('$judul_en','$judul_jpn','$skor','$status','$total_episode','$tanggal_rilis','$produser','$studio','$genre','$sinopsis','$coverName')";
    mysqli_query($conn, $query);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Anime</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="container mt-4">

<h1>Tambah Anime</h1>

<form method="POST" enctype="multipart/form-data">
    <input type="text" name="judul_en" placeholder="Judul EN" class="form-control mb-2" required>
    <input type="text" name="judul_jpn" placeholder="Judul JPN" class="form-control mb-2">
    <input type="text" name="skor" placeholder="Skor" class="form-control mb-2">
    <select name="status" class="form-control mb-2">
        <option value="Ongoing">Ongoing</option>
        <option value="Finished">Finished</option>
        <option value="Upcoming">Upcoming</option>
    </select>
    <input type="number" name="total_episode" placeholder="Total Episode" class="form-control mb-2">
    <input type="date" name="tanggal_rilis" class="form-control mb-2">
    <input type="text" name="produser" placeholder="Produser" class="form-control mb-2">
    <input type="text" name="studio" placeholder="Studio" class="form-control mb-2">
    <input type="text" name="genre" placeholder="Genre" class="form-control mb-2">
    <textarea name="sinopsis" placeholder="Sinopsis" class="form-control mb-2"></textarea>
    <input type="file" name="cover" class="form-control mb-2">
    <button type="submit" class="btn btn-success">Simpan</button>
</form>

<a href="index.php" class="btn btn-secondary mt-2">Kembali</a>

</body>
</html>
