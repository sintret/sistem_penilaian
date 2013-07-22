<?php 
	$id =(int)$_GET['id'];
	$sql = 'select * from nilai where id=:id';
	$pdo = $db->prepare($sql);
	$pdo->bindParam(":id", $id, PDO::PARAM_INT);
	$pdo->execute();
	$result = $pdo->fetch();
?>

<p>
	<a class="pure-button pure-button-active" href="#">Form  Penilaian Siswa</a>
</p>

<form class="pure-form pure-form-aligned"  method="post" action="<?php echo BASE_URL;?>nilai_form_proses.php">
    <fieldset>
        <div class="pure-control-group">
            <label for="name">Nama</label>
            <select name="murid_id">
            	<?php 
            		$res=$db->query("select * from murid")->fetchAll();
            		if($res)
            			foreach ($res as $r){
            				$selected = $r['id']==$result['murid_id']?"selected":"";
            				echo '<option value="'.$r['id'].'"  '.$selected.' >'.$r['name'].'</option>';
            			}
            	?>
            </select>
        </div>

        <div class="pure-control-group">
            <label for="name">MataPelajaran</label>
            <select name="matapelajaran_id">
            	<?php 
            		$res=$db->query("select * from matapelajaran")->fetchAll();
            		if($res)
            			foreach ($res as $r){
            				$selected = $r['id']==$result['matapelajaran_id']?"selected":"";
            				echo '<option value="'.$r['id'].'"  '.$selected.' >'.$r['subject'].'</option>';
            			}
            	?>
            </select>
        </div>    
        
        <div class="pure-control-group">
            <label for="name">Nilai</label>
            <select name="nilai">
            	<?php 
            		$res=array(1,2,3,4,5,6,7,8,9,10);
            		if($res)
            			foreach ($res as $r){
            				$selected = $r==$result['nilai']?"selected":"";
            				echo '<option value="'.$r.'"  '.$selected.' >'.$r.'</option>';
            			}
            	?>
            </select>
        </div>    
            <input name="id" type="hidden" value="<?php echo $id;?>">

        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Submit</button>
        </div>
    </fieldset>
</form>