<div id="main" style="padding-top: 20px">
    <div class="container">
        <div class="row">
            <?php
                if($detail_berita != NULL) :
            ?>
            <div id="primary" class="widget content-area" style="background-color: white;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);">
                <div id="content" class="site-content">
                    <div class="service-page">
                        <h1 class="entry-title">
                            <a href="<?php echo base_url() ?>berita/<?php echo $detail_berita->slug ?>/"><?php echo $detail_berita->judul_berita ?></a>
                        </h1>
                        <i class="fa fa-calendar"></i> <?php echo $this->apps->tgl_indo_lengkap($detail_berita->created_at) ?>  <i class="fa fa-user"></i> <?php echo $detail_berita->nama_user ?>  <i class="fa fa-eye"></i> Dilihat <?php echo $detail_berita->views ?> Kali
                        <hr>
                        <div class="entry-content">
                            <figure class="wp-caption">
                                <img src="<?php echo  base_url() ?>resources/images/berita/<?php echo $detail_berita->gambar ?>" alt="" style="width: 100%">
                                <figcaption class="wp-caption-text"><?php echo $detail_berita->judul_berita ?> </figcaption>
                            </figure>

                            <p>
                                <?php echo $detail_berita->isi_berita ?>
                            </p>
                            <ul class="list-unstyled list-inline blog-tags" style="margin-top: 30px">
                                <li>
                                    <span>
                                    <?php
                                    if($detail_berita->keywords != NULL):
                                        $tags = explode(",", $detail_berita->keywords);
                                        foreach($tags as $k => $v):
                                            ?>
                                            <button class="btn btn-sm btn-default"><i class="fa fa-tags"></i> <?php echo $v ?></button>
                                            <?php
                                        endforeach;
                                    endif;
                                    ?>
                                </span>
                                </li>
                            </ul>
                        </div><!-- end entry-content -->

                    </div><!-- end service page -->

                </div><!-- end #content -->
                <h1 class="entry-title">
                    Komentar
                </h1>
                <?php echo $disqus ?>
            </div>

            <?php
            else:
                ?>
                <?php redirect('/') ?>
            <?php endif; ?>
            <div id="secondary" class="col-md-4">
                <div id="search-2" class="widget widget_search">
                    <div class="widget-title-outer">
                        <h3 class="widget-title">Cari Berita</h3>
                    </div>
                    <div class="searchform">
                        <form>
                            <input type="text" class="txt" name="s" placeholder="Type Keywords">
                            <input type="submit" value="search" class="btn btn-sm">
                        </form>
                    </div><!-- end searchform -->
                </div><!-- end search widget -->
                <div class="widget widget_categories">
                    <div class="widget-title-outer">
                        <h3 class="widget-title">Kategori Berita</h3>
                    </div>
                    <ul>

                    </ul>
                </div><!-- end widget -->
                <div class="widget widget_categories">
                    <div class="widget-title-outer">
                        <h3 class="widget-title">Tag Berita</h3>
                    </div>
                    <ul>

                    </ul>
                </div><!-- end widget -->
            </div><!-- end #secondary -->
        </div><!-- end row -->
    </div><!-- end container -->
</div>
