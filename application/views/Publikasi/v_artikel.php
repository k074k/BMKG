<div class="container" style="margin-top: 70px">
    <div class="container" style="margin-left:45px;">
        <div class="row">
            <h3>Artikel</h3>
            <hr style="box-shadow: 0px 1px 1px grey;">
        </div>
    </div>
</div>
<div class="container">
    <div class="col-lg-12">
        <div class="col-lg-8" style="margin-bottom: 60px; padding-left: 3%; padding-top: 1%;">
            <div class="row">
                <div class="col-lg-12">
                    <form role="form">
                        <div class="form-group input-group">
                            <input name="search_artikel" type="text" class="form-control" placeholder="Kata Kunci Judul . . . . . . .">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="glyphicon glyphicon-search">
                                    </i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <?php
            foreach ($data->result() as $row) {
            ?>
            <div class="row" style="padding-left: 2%; padding-right: 2%; ">
                <div class="col-lg-12" style="background-color: white; box-shadow: 1px 1px 3px grey; padding-top: 3%">

                    <div class="col-lg-2" style="padding-bottom: 5%; padding-top: 3%">
                        <img src="<?php echo base_url('assets/db_buletin/cover/'.$row->id_buletin.'.jpg'); ?>" width="100%">
                    </div>
                    <div class="col-lg-10" style="padding-bottom: 2%;">
                        <h5 style="font-weight: bold"><?php echo $row->judul; ?></h5>
                        <p style="font-size: 11px">Nomer Katalog : <?php echo $row->id_buletin; ?> | ISSN / ISBN : - | Tanggal Rilis : <?php echo $row->tgl_rilis; ?> | Ukuran File : <?php  echo $row->size; ?> MB
                        </p>
                        <p style="font-size: 12px">
                            <?php echo $row->ket; ?>
                            <?php   $judul = $row->judul;
                                    $id = $row->id_buletin;
                            ?>
                        </p>
                        <div class="form-group ">
                            <!--<a data-toggle="modal" data-target="#Modal" type="button" class="btn btn-default">View Details</a>-->
                            <a href="<?php echo base_url('assets/db_buletin/file/'.$row->id_buletin.'.pdf'); ?>">
                                <button type="submit" class="btn btn-default">
                                    View Detail
                                </button>
                            </a>
                            <a href="<?php echo base_url('assets/db_buletin/file/'.$row->id_buletin.'.pdf'); ?>">
                                <button type="submit" class="btn btn-primary">
                                    Unduh
                                </button>
                            </a>
                        </div>

                        <!--
                        <div id="Modal" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <div class="modal-content">

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><center><?php echo $row->judul; ?></center></h4>
                                    </div>

                                    <div class="modal-body">
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <embed src="<?php echo base_url('db_buletin/file/'.$row->id_buletin.'.pdf'); ?>" type="apliccation/pdf" width="50%" height="100%" />
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        -->

                    </div>
                </div>
            </div>
            <?php }?>
            <div class="row" style="padding-left: 2%; padding-right: 2%; margin-top: 1%">
                <?php echo $pagination; ?>
            </div>
        </div>

        <div class="col-lg-4" style="padding-bottom: 100px">
            <ul class="nav nav-tabs" style="margin-top: 3%">
                <li class="active">
                    <a data-toggle="tab" href="#Gempa" style="font-size: 12px; font-weight: bold">Gempa Terakhir</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="Gempa" class="tab-pane fade in active">
                    <div style="margin-top:10px; background-color:white; height: 400px; box-shadow: 1px 1px 3px grey;" class="col-lg-12">
                      <nav style="width:100%;height:100%;overflow: auto;" >
                        <ul class="list-group" style="margin-top: 5%;">
                          <?php error_reporting(0); ?>
                          <?php $i=10; ?>
                          <?php foreach ($tb_gempa as $i) { ?>
                            <li class="list-group-item"><span class="badge"><?php echo $i->Magnitude ?>SR</span><?php echo $i->Keterangan;?></li>
                            <?php if ($i == 10) {
                              break;
                            } else {
                              $i++;
                            }
                             ?>
                          <?php } ?>
                        </ul>
                      </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
