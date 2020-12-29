<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>List Book</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<h2>Daftar Buku</h2>
	<table class="table">
		<tr>
			<td><b>Kode Buku</b></td>
			<td><b>Judul Buku</b></td>
			<td><b>Pengarang Buku</b></td>
			<td><b>Penerbit Buku</b></td>
			<td><b>Action</b></td>
			<td><b>Action</b></td>
		</tr>

<?php
require("Library.php");
$Lib = new Library();
$show = $Lib->showBooks();
while($data = $show->fetch(PDO::FETCH_OBJ)){
echo "
<tr>
<td>$data->kodeBuku</td>
<td>$data->judulBuku</td>
<td>$data->pengarang</td>
<td>$data->penerbit</td>
<td><a class='btn btn-danger' href='list.php?delete=$data->kodeBuku'>Delete</a></td>
<td><a class='btn btn-info' href='edit.php?kode=$data->kodeBuku'>Edit</td>
</tr>";
};
?>

</table>
<a href="index.php" class="btn btn-success">Tambah Buku Baru</a>
</div>
</body>
</html>
<?php
if(isset($_GET['delete'])){
$del = $Lib->deleteBook($_GET['delete']);
}
?>