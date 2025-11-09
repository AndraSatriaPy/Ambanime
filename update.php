<?php
include 'db.php';
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM anime WHERE id=$id");
$anime = mysqli_fetch_assoc($result);

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

    $coverName = $anime['cover'];
    if (!empty($_FILES['cover']['name'])) {
        $coverName = $_FILES['cover']['name'];
        $coverTmp  = $_FILES['cover']['tmp_name'];
        move_uploaded_file($coverTmp, "uploads/" . $coverName);
    }

    $query = "UPDATE anime SET 
              judul_en='$judul_en', judul_jpn='$judul_jpn', skor='$skor', status='$status',
              total_episode='$total_episode', tanggal_rilis='$tanggal_rilis', produser='$produser',
              studio='$studio', genre='$genre', sinopsis='$sinopsis', cover='$coverName'
              WHERE id=$id";
    mysqli_query($conn, $query);
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Anime</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="container mt-4">

<h1>Edit Anime</h1>
<form method="POST" enctype="multipart/form-data">
    <input type="text" name="judul_en" value="<?php echo $anime['judul_en']; ?>" class="form-control mb-2" required>
    <input type="text" name="judul_jpn" value="<?php echo $anime['judul_jpn']; ?>" class="form-control mb-2">
    <input type="text" name="skor" value="<?php echo $anime['skor']; ?>" class="form-control mb-2">
    
    <select name="status" class="form-control mb-2">
        <option value="Ongoing" <?php if($anime['status']=='Ongoing') echo 'selected'; ?>>Ongoing</option>
        <option value="Finished" <?php if($anime['status']=='Finished') echo 'selected'; ?>>Finished</option>
        <option value="Upcoming" <?php if($anime['status']=='Upcoming') echo 'selected'; ?>>Upcoming</option>
    </select>
    
    <input type="number" name="total_episode" value="<?php echo $anime['total_episode']; ?>" class="form-control mb-2">
    <input type="date" name="tanggal_rilis" value="<?php echo $anime['tanggal_rilis']; ?>" class="form-control mb-2">
    <input type="text" name="produser" value="<?php echo $anime['produser']; ?>" class="form-control mb-2">
    <input type="text" name="studio" value="<?php echo $anime['studio']; ?>" class="form-control mb-2">
    <input type="text" name="genre" value="<?php echo $anime['genre']; ?>" class="form-control mb-2">
    
    <textarea name="sinopsis" class="form-control mb-2"><?php echo $anime['sinopsis']; ?></textarea>
    
    <?php if (!empty($anime['cover'])) { ?>
        <p>Cover saat ini:</p>
        <img src="uploads/<?php echo $anime['cover']; ?>" width="120" class="mb-2">
    <?php } ?>
    
    <input type="file" name="cover" class="form-control mb-2">
    
    <button type="submit" class="btn btn-warning">Update</button>
</form>

<a href="index.php" class="btn btn-secondary mt-2">Kembali</a>

</body>
</html>
