<?php 
//Open koneksi
include 'Database.php';

// mendapatkan attribute kalau ada isi delete maka delete , hanya bisa via post
$attr=$_POST['attr'];
$id =$_POST['id'];

if($attr=="delete")
{
	$pdo = $db->prepare("DELETE FROM murid  where id=:id");
	$pdo->bindParam(':id', $id);
	$pdo->execute();
} 
else 
{
	if(empty($id))
	{
		// add statement
		$pdo = $db->prepare("INSERT INTO murid (name, address) VALUES (:name, :address)");
		$pdo->bindParam(':name', $_POST['name']);
		$pdo->bindParam(':address', $_POST['address']);
	} else {
		// edit statement
		$pdo = $db->prepare("UPDATE murid SET name=:name, address=:address  where id=:id");
		$pdo->bindParam(':name', $_POST['name']);
		$pdo->bindParam(':address', $_POST['address']);
		$pdo->bindParam(':id', $id,PDO::PARAM_INT);
	}	
	if($pdo->execute())
		header("Location:murid");
	else echo 'Failed ';
}
?>