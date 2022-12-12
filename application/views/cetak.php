<!DOCTYPE html>
<html>
<head>
	<title>Perjalananku</title>
</head>


<body>
        <h4>aplikasi perjalanan</h4>
        <h4>jakarta barat</h4>
        <h4>085644807630</h4>

        <br><br>
        
        <table border="2" cellspacing="0" cellpadding="10" style="width: 100%;">
             <tr>

                  <th scope="col">no</th>
                  <th scope="col">tanggal</th>
                  <th scope="col">jam</th>
                  <th scope="col">lokasi</th>
                  <th scope="col">suhu badan</th>
                  <th scope="col">aksi</th>
             </tr>
       </thead>

       <?php $i = 1; ?>
       <?php foreach ($print as $cat) : ?>
          <tbody>
              <tr>
                   <th scope="row"><?= $i++ ?></th>
                   <td><?php echo $cat['tanggal']; ?> </td>
                   <td><?php echo $cat['jam']; ?></td>
                   <td><?php echo $cat['lokasi']; ?></td>
                   <td><?php echo $cat['suhu']; ?> celcius</td>
                 </tr>
            </tbody>
            <?php endforeach ?>


            <script>
                window.print()
                </script>

                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <a href="tampil_catatan" class="btn btn-danger btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="bi bi-box-arrow-right"></i>
                               </span>
                               <span class="text">Kembali</span>

                        </a>
       </div>
 </div>

       </body>
    </html>

                 
            
