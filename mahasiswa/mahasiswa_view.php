<?php 
  //Getting mahasiswas
  include('mahasiswa/mahasiswa.class.php');
  $mahasiswaObj = new mahasiswa();
  $listMhs = $mahasiswaObj->getMahasiswa('10');
?>
<!--- kode untuk menampilkan data di table -->
<h3>List mahasiswa</h3>
<a class="button success " href='index.php?mod=mahasiswa&pg=mahasiswa_form'>Add mahasiswa</a>
<p>
    <!-- desc -->
</p>
<table class="table bordered hovered table-bordered">
  <thead>
    <th>NIM</th>
    <th>Mahasiswa</th>
  	<th>Aksi</th>
  </thead>
  <tbody>
     <?php 
     foreach ($listMhs as $mahasiswa) :
        $nim = (isset($mahasiswa['nim']) ? $mahasiswa['nim'] : '');   
        $nama = (isset($mahasiswa['nama']) ? $mahasiswa['nama'] : '');
      ?>
    <tr>
      <td><?php echo $nim ?></td>
      <td><?php echo $nama ?></td>
      <td width="200px"><center><a href="index.php?mod=mahasiswa&pg=mahasiswa_form&flag=edit&nim=<?php echo $nim; ?>" class= 'button success'>Edit</a>&nbsp;<a href="mahasiswa/mahasiswa_action.php?flag=delete&nim=<?php echo $nim; ?>" class="button danger">Delete</a></center></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

