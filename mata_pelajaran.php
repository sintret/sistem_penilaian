<p>
	<a class="pure-button pure-button-active" href="#">Daftar Mata Pelajaran Programming </a>
	<a class="pure-button pure-button-primary" href="#"><i class="icon-plus-sign icon-large"></i> Add </a>
</p>

<?php 
$sql = 'select * from matapelajaran';
$results= $db->query($sql);
?>

<table class="pure-table pure-table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Mata Pelajaran </th>
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
            <td><?php echo $result['subject']?></td>
            <td>
            	<a class="pure-button" href="#" title="edit"><i class="icon-edit"></i></a> 
            	<button class="pure-button" onclick="deleteRow(<?php echo $result['id'];?>)" title="delete"><i class="icon-trash"></i></button> 
            </td>
        </tr>
	<?php $no++; }?>
     
    </tbody>
</table>