<section style="margin-left:350px; margin-top:150px; margin-bottom:-500px;"class="section">
  <div class="row">
     <div class="lg-10">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">tulis catatan</h5>
                 
                 <!-- general form elemens-->
                 <form method="POST" action="<?= base_url('aplikasinya/tambah_catatan');  ?>">
                    <div class="row mb-3"> 
                        <label for="imputDate"class="col-sm-2 col-form-label">pilih tanggal</label>
                        <div class="col-sm-10">
                           <input type="date" name="tanggal" id="tanggal" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row mb-3">
                        <label for="imputTime"class="col-sm-2 col-form-label">pilih jam</label>
                        <div class="col-sm-10">
                           <input type="time" name="jam" id="jam" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">pilih lokasi</label>
                        <div class="col-sm-10">
                           <input type="text" name="lokasi" id="lokasi" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row mb-3">
                        <label for="imputNumber"class="col-sm-2 col-form-label">suhu tubuh</label>
                        <div class="col-sm-10">
                           <input type="number" name="suhu" id="suhu" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row mb-3">
                        <div class="col-sm-10">
                           <input type="submit" class="btn btn-primary">Submit Form</button>
                        </div>
                    </div>
             </div>
         </div>

         </form><!-- end general form elements-->
                   
         </div>
  </div>
      </div>
 </div>
</section>