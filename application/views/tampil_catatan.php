<div style="margin-left:350px; margin-top:150px; margin-bottom:-500px;"class="card">
  <div class="card-body">
     <h5 class="card-title">tampilkan data</h5>

     <!-- table with stripped rows -->
     <table class="table table-striped">
         <thead>
             <tr>
                  <th scope="col"#></th>
                  <th scope="col">tanggal</th>
                  <th scope="col">jam</th>
                  <th scope="col">lokasi</th>
                  <th scope="col">suhu badan</th>
                  <th scope="col">aksi</th>
             </tr>
       </thead>

       <?php $i = 1; ?>
       <?php foreach ($catatan as $cat) : ?>
          <tbody>
              <tr>
                   <th scope="row"><?= $i++ ?></th>
                   <td><?php echo $cat['tanggal']; ?> </td>
                   <td><?php echo $cat['jam']; ?></td>
                   <td><?php echo $cat['lokasi']; ?></td>
                   <td><?php echo $cat['suhu']; ?> celcius</td>
                   <td><?= anchor('tampil_catatan/delete/' . $cat['id'], '<div class="btn btn-danger"><i class="fas
                   fa-trash">hapus</i></div>') ?>
                        <td><?= anchor('tampil_catatan/edit_catatan/' . $cat['id'], '<div class="btn btn-primary"><i 
                        class="fas fa-pen">edit</i></div>') ?></td>
                    
                 </tr>
            </tbody>
          <?php endforeach ?>
       </table>
       <a href="<?= base_url('cetak'); ?>"target="_BLANK" class="btn btn-primary"><i class="bi bi-card-list"></i>
       print</a>
       <!-- end table with stripped rows --> <i></i>

       </div>
 </div>



                 
            
