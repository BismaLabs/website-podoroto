<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-youtube-play"></i> Tambah Video</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="add-user">
                            <?php
                            $attributes = array('id' => 'frm_login');
                            echo form_open_multipart('apps/video/save?source=header&utf8=✓', $attributes)
                            ?>

                            <div class="form-group">
                                <label>Judul Video</label>
                                <input type="text" class="form-control" name="judul_video" value="<?php echo $data_video['judul_video'] ?>" placeholder="Judul Video">
                                <input type="hidden" name="type" value="<?php echo $type ?>">
                                <input type="hidden" name="id_video" value="<?php echo $this->encryption->encode($data_video['id_video']) ?>">
                            </div>

                            <div class="form-group">
                                <label>Embed Youtube</label>
                                <input type="text" class="form-control" name="embed_youtube" value="<?php echo $data_video['embed_youtube'] ?>" placeholder="Embed Youtube">
                            </div>

                            <div class="submit" style="margin-bottom: 7px">
                                <button type="submit" class="btn  bg-olive btn-flat btn-save btn-fill"><i class="fa fa-save"></i> Tambah</button>
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

