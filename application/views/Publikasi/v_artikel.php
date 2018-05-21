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
                <div class="col-lg-3">
                    <form role="form">
                        <div class="form-group">
                            <select class="form-control">
                                <option>---- Pilih Tahun ----</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                                <option>2018</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="col-lg-9">
                    <form role="form">
                        <div class="form-group input-group">
                            <input type="text" class="form-control" placeholder="Kata Kunci . . . . . . .">
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
                        </p>
                        <div class="form-group ">
                            <input type="hidden" name="artikel" value="<?php echo $row->id_buletin; ?>">
                            <a data-toggle="modal" data-target="#myModal" type="button" class="btn btn-default">View Details</a>
                        </div>

                        <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- konten modal-->
                                <div class="modal-content">
                                    <!-- heading modal -->
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><center><?php echo $row->judul; ?></center></h4>
                                    </div>
                                    <!-- body modal -->
                                    <div class="modal-body">
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <embed src="<?php echo base_url('db_buletin/file/'.$row->id_buletin.'.pdf'); ?>" type="apliccation/pdf" width="50%" height="100%" />
                                        </div>
                                    </div>
                                    <!-- footer modal -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
                                    </div>
                                </div>
                            </div>
                        </div>

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
                    <a data-toggle="tab" href="#Gempa" style="font-size: 12px; font-weight: bold">Gempabumi M ≥ 5.0</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#Gempa2" style="font-size: 12px; font-weight: bold">Gempabumi Dirasakan</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="Gempa" class="tab-pane fade in active">
                    <div style="margin-top:10px; background-color:white; height: 400px; box-shadow: 1px 1px 3px grey;" class="col-lg-12">
                    </div>
                </div>
                <div id="Gempa2" class="tab-pane fade">
                    <div style="margin-top:10px; background-color:white; height: 400px; box-shadow: 1px 1px 3px grey;" class="col-lg-12">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
