<div class="row">
    <div class="col-lg-7">
    <div class="p-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Edit User</h1></div>
        <form  action="<?php echo
        base_url().'Mahasiswa/save_edit';?>" method="post">
    <div class="form-group">
	<input type="hidden" name="id" value="<?php echo $list['id']; ?>"
   >
    <input type="text" class="form-control form-control-user"
    id="username" name="username" value="<?php echo $list['username']; ?>"
   >
</div>
<div class="form-group">
<input type="password" class="form-control form-controluser" 
id="password" name="password" value="<?php echo $list['password']; ?>"
>
</div>
<div class="form-group">
<select id="grup" class="form-control" name="grup">
<?php
            foreach ($grup as $value) {
               echo "<option value='$value->id_grup'>$value->id_grup</option>";
            }
            ?>
</select>
</div>
<div class="form-group">
<input type="text" class="form-control"
id="nama" name="nama" value="<?php echo $list['nama']; ?>">
</div>
    <input type="submit" class="btn btn-success btn-icon-split"
name="submit" value="Update">
</form><hr>
<div class="text-center">
<a class="small" href="Mahasiswa">Kembali</a>
</div></div></div></div>