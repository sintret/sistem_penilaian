<p>
	<a class="pure-button pure-button-active" href="#">Daftar Siswa Dengan Nilai Kelas Programming </a>
	<a class="pure-button pure-button-primary" href="nilai_form"><i class="icon-plus-sign icon-large"></i> Add </a>
</p>

<?php 
$sql = 'SELECT nilai,id,
		(select name from murid where id=murid_id) as name,  
		(select subject from matapelajaran where id=matapelajaran_id) as matapelajaran
		FROM nilai order by id desc';
$results= $db->query($sql);
?>

<table class="pure-table pure-table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama </th>
            <th>Mata Pelajaran</th>
            <th>Nilai</th>
            <th><button class="pure-button"><i class="icon-cog"></i>Settings</button> </th>
        </tr>
    </thead>

    <tbody>
    <?php 
    	$no=1; // nomor
    	if($results)
    	foreach ($results as $result) {
    ?>
        <tr id="<?php echo 'elem'.$result['id']?>">
            <td><?php echo $no;?></td>
            <td><?php echo $result['name']?></td>
            <td><?php echo $result['matapelajaran']?></td>
            <td><?php echo $result['nilai']?></td>
            <td>
            	<a class="pure-button" href="nilai_form/<?php echo $result['id']?>" title="edit"><i class="icon-edit"></i></a> 
            	<button class="pure-button" onclick="deleteRow(<?php echo $result['id'];?>)" title="delete"><i class="icon-trash"></i></button> 
            </td>
        </tr>
	<?php $no++; }?>
     
    </tbody>
</table>

<script>
function deleteRow(n){
	if(window.confirm("Yakin Data ini mau dihapus !!")){
		$.ajax({
			url:"nilai_form_proses.php",
			type:"POST",
			cache:false,
			async:false,
			data:{id:n,attr:"delete"},
			success:function(pesan){
				$("#elem"+n).remove();
			}
			});
	}
}
</script>