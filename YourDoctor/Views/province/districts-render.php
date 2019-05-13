<?php
foreach ($districts as $dis) {
?>
<option value="<?php echo $dis['id']; ?>" ><?php echo $dis['name']; ?></option>
<?php	
}
?>