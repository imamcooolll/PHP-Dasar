<?php 
require 'functions.php';
$conn = konek();

sleep(1);

$id = $_GET["id"];

$kota = query($conn, "SELECT * FROM kota WHERE id_provinsi = $id");
?>

<?php foreach( $kota as $baris ) : ?>
	<option value="<?= $baris["id"]; ?>"><?= $baris["nama"]; ?></option>
<?php endforeach; ?>