<?php
include 'db.php';

if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    $result = mysqli_query($conn,
        "SELECT * FROM anime
         WHERE judul_en LIKE '%$keyword%'
         OR judul_jpn LIKE '%$keyword%'
         OR studio LIKE '%$keyword%'
         OR genre LIKE '%$keyword%'");
} else {
    $result = mysqli_query($conn, "SELECT * FROM anime");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>AmbaNime</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

<h1>AmbaNime</h1>

<form method="GET" action="index.php" class="mb-3">
    <input type="text" name="keyword" placeholder="Cari anime..." class="form-control" style="width:300px;display:inline-block;">
    <button type="submit" class="btn btn-primary">Search</button>
</form>

<a href="create.php" class="btn btn-success mb-3">Tambah Anime</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Cover</th>
            <th>Judul (EN)</th>
            <th>Judul (JPN)</th>
            <th>Skor</th>
            <th>Status</th>
            <th>Studio</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td>
                <?php if (!empty($row['cover'])) { ?>
                    <img src="uploads/<?php echo $row['cover']; ?>" width="80">
                <?php } else { ?>
                    <span class="text-muted">No Image</span>
                <?php } ?>
            </td>
        
            <td><?php echo $row['judul_en']; ?></td>
            <td><?php echo $row['judul_jpn']; ?></td>
            <td><?php echo $row['skor']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td><?php echo $row['studio']; ?></td>
            <td>
                <a href="detail.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-sm">Detail</a>
                <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<link rel="stylesheet" href="style.css">


</body>
</html>
