<?php 
//Open koneksi
include 'Database.php';

// mendapatkan attribute kalau ada isi delete maka delete , hanya bisa via post
$attr=$_POST['attr'];
$id =$_POST['id'];

if($attr=="delete")
{
	$pdo = $db->prepare("DELETE FROM nilai  where id=:id");
	$pdo->bindParam(':id', $id);
	$pdo->execute();
} 
else 
{
	if(empty($id))
	{
		// add statement
		$pdo = $db->prepare("INSERT INTO nilai (nilai,murid_id,matapelajaran_id) VALUES (:nilai, :murid_id, :matapelajaran_id)");
		$pdo->bindParam(':nilai', $_POST['nilai'],PDO::PARAM_INT);
		$pdo->bindParam(':murid_id', $_POST['murid_id'],PDO::PARAM_INT);
		$pdo->bindParam(':matapelajaran_id', $_POST['matapelajaran_id'],PDO::PARAM_INT);
	} else {
		// edit statement
		$pdo = $db->prepare("UPDATE nilai SET nilai=:nilai, murid_id=:murid_id, matapelajaran_id=:matapelajaran_id  where id=:id");
		$pdo->bindParam(':nilai', $_POST['nilai'],PDO::PARAM_INT);
		$pdo->bindParam(':murid_id', $_POST['murid_id'],PDO::PARAM_INT);
		$pdo->bindParam(':matapelajaran_id', $_POST['matapelajaran_id'],PDO::PARAM_INT);
		$pdo->bindParam(':id', $id,PDO::PARAM_INT);
	}	
	if($pdo->execute())
		header("Location:home");
	else echo 'Failed ';

}
?>