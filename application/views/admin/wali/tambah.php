
<?php $this->load->view('template/head') ?>
<?php $this->load->view('template/nav') ?>
<?php $this->load->view('template/slidbar') ?>
<!-- ecoderr -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><i class="fa fa-plus-circle"></i> Tambah Wali</h1>
                
          </div>
        </div>
      </div>
    </section>
    <section class="content">
     
          <div class="card">
           
            <div class="card-body">
                <form action="<?php echo site_url('Wali/aksi_tambah') ?>" method="post" >  
                <div class="col-md-9">
                        <label for=""><b>Nama Siswa :</b></label>
                       <select name="id_alumni" class="form-control" id="">
                       <option value="">-Pilh-</option>
                          
                       <?php foreach($siswa as $k):?>					
                        <option  value="<?= $k->id_alumni?>"><?= $k->nama ?></option>
                                           
                    <?php endforeach;?>
                          
                       </select>
                    </div>
                <div class="col-md-8">
                        <label for=""><b>Nama Ayah :</b></label>
                        <input type="text" class="form-control" name="nama_ayah" required placeholder="Nama Ayah" id="">
                    </div>
                    <div class="col-md-8">
                        <label for=""><b>Nama Ibuk :</b></label>
                        <input type="text" class="form-control" name="nama_ibuk" required placeholder="Nama Ibuk" id="">
                    </div>
                    <div class="col-md-8">
                        <label for=""><b>Pekerjaan Ayah :</b></label>
                        <input type="text" class="form-control" name="pekerjaan_ayah" required placeholder="Pekerjaan Ayah" id="">
                    </div>
                    <div class="col-md-8">
                        <label for=""><b>Pekerjaan Ibuk :</b></label>
                        <input type="text" class="form-control" name="pekerjaan_ibuk" required placeholder="Pekerjaan Ibuk" id="">
                    </div>  <div class="col-md-8">
                        <label for=""><b>Nomor Telpon Wali :</b></label>
                        <input type="text" class="form-control" name="no_wali" required  id="">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button type="reset" class="btn btn-danger">Batal</button>
                </form>
                 
            </div>
          
          </div>
          
        </div>
      
      </div>
      
    </section>
  
<?php $this->load->view('template/foot') ?>