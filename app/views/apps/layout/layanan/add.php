
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-bell"></i> Tambah Layanan</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="update-page">
                            <?php
                            $attributes = array('id' => 'frm_login');
                            echo form_open_multipart('apps/layanan/simpan?source=login&utf8=✓', $attributes)
                            ?>
                            <div class="form-group">
                                <label for="artilces">Judul Pages</label>
                                <input type="text" class="form-control" name="judul" id="articles" placeholder="Enter Judul Profil">
                                
                            </div>
                            <div class="form-group">
                                <label for="artilces">Isi Pages</label>
                                <textarea class="ckeditor" id="post" name="isi_page" rows="6" placeholder="Enter Isi Pages"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="artilces">Meta Keywords</label>
                                <input type="text" class="form-control" name="meta_keywords"  id="articles" placeholder="Enter Meta Keywords">
                            </div>
                            <div class="form-group">
                                <label for="artilces">Meta Descriptions</label>
                                <textarea class="form-control" name="meta_descriptions" rows="6" placeholder="Enter Meta Descriptions"></textarea>
                            </div>
                            <div class="submit">
                                <button type="submit" class="btn  bg-olive btn-flat btn-save btn-fill"><i class="fa fa-save"></i> Simpan</button>
                                <button type="reset" class="btn bg-orange btn-flat btn-fill"><i class="fa fa-repeat"></i> Reset</button>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>

    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->