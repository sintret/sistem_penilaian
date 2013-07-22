<?php 
	$id =(int)$_GET['id'];
	$sql = 'select * from murid where id=:id';
	$pdo = $db->prepare($sql);
	$pdo->bindParam(":id", $id, PDO::PARAM_INT);
	$pdo->execute();
	$result = $pdo->fetch();
?>

<p>
	<a class="pure-button pure-button-active" href="#">Form  Murid</a>
</p>

<form class="pure-form pure-form-aligned"  method="post" action="<?php echo BASE_URL;?>murid_form_proses.php">
    <fieldset>
        <div class="pure-control-group">
            <label for="name">Nama</label>
            <input name="name" type="text" placeholder="Nama" value="<?php echo $result['name']?>" required>
        </div>

        <div class="pure-control-group">
            <label for="address">Alamat</label>
            <textarea  name="address" required><?php echo $result['address']?></textarea>
        </div>     
            <input name="id" type="hidden" value="<?php echo $id;?>">

        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Submit</button>
        </div>
    </fieldset>
</form>