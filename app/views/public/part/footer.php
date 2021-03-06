<footer id="footer-section" class="site-footer" style="">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="widget">
                    <div class="widget-inner">
                        <div class="widget-title-outer">
                            <h3 class="widget-title">Tentang Desa Podoroto</h3>
                        </div>
                        <p id="tentang"><?php echo systems('tentang') ?></p>
                    </div><!-- end inner -->
                </div><!-- end widget -->
            </div>

            <div class="col-md-4">
                <div class="widget">
                    <div class="widget-inner">
                        <div class="widget-title-outer">
                            <h3 class="widget-title">Alamat Desa</h3>
                        </div>
                        <table id="alamatdesa">
                            <tr>
                                <td style='padding: 0 5px;'><strong>Lokasi</strong></td>
                                <td style='padding: 0 5px;'>:</td>
                                <td id='alamatlengkap' style='padding: 0 5px;'><?php echo systems('lokasi') ?></td>
                            </tr>
                            <tr>
                                <td style='padding: 0 5px;'><strong>Telp</strong></td>
                                <td style='padding: 0 5px;'>:</td>
                                <td style='padding: 0 5px;'><?php echo systems('telephone') ?></td>
                            </tr>
                            <tr>

                                <td style='padding: 0 5px;'><strong>Email</strong></td>
                                <td style='padding: 0 5px;'>:</td>
                                <td style='padding: 0 5px;'><a href='mailto:<?php echo systems('email') ?>'><?php echo systems('email') ?></a></td>
                            </tr>								</table>
                    </div><!-- end inner -->
                </div><!-- end widget -->
            </div>

            <div class="col-md-4">
                <div class="widget">
                    <div class="widget-inner">
                        <div class="widget-title-outer">
                            <h3 class="widget-title">Foto Desa</h3>
                        </div>
                        <ul class="list-galleries">
                            <?php
                                if (foto_footer() != NULL) {
                                foreach(foto_footer() as $hasil) {
                            ?>
                            <li>
                                <a href="#" class="open_x" id="7">
                                    <a href="<?php echo base_url() ?>resources/foto_gallery/<?php echo url_title(strtolower($hasil->nama_album)) ?>/<?php echo $hasil->foto_gallery ?>" data-lightbox="image-1" data-title="<?php echo $hasil->caption_foto ?>"><img src="<?php echo base_url() ?>resources/foto_gallery/<?php echo url_title(strtolower($hasil->nama_album)) ?>/<?php echo $hasil->foto_gallery ?>" width="100px" height="100px" alt="" class="img-rounded" style="object-fit: cover;" ></a>
                                </a><!-- thumb 01 -->
                            </li>
                            <?php }} ?>

                        </ul>
                    </div><!-- end gallery wrapper -->
                </div><!-- end inner -->
            </div><!-- end widget -->
        </div>
    </div>
    </div>
</footer>
<div class="footer-credit">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="copy" style="font-size: 13px"><?php echo systems('site_footer') ?></p>
            </div><!-- end column -->
            <div class="col-md-6">
                <p class="copy" style="float: right;font-size: 13px">  <a target="_blank" style="text-decoration: none" href="http://bismalabs.co.id/">Bisma Labs - Website Desa, Version <b>2.0.0</b></a></p>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url() ?>resources/public/js/vendor/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url() ?>resources/public/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>resources/public/js/plugin.js"></script>
<script src="<?php echo base_url() ?>resources/public/js/main.js"></script>
<script src="<?php echo base_url() ?>resources/public/js/jquery.simpleWeather.js"></script>
<script src="<?php echo base_url() ?>resources/public/js/moment.min.js"></script>
<script src="<?php echo base_url() ?>resources/public/js/fancybox2/jquery.fancybox.js"></script>
<script src="<?php echo base_url() ?>resources/public/js/fancybox2/jquery.fancybox-thumbs.js"></script>
<script src="<?php echo base_url() ?>resources/public/js/weather.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>resources/public/js/lightbox.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>resources/public/js/app.js" type="text/javascript"></script>
</body>
</html>
