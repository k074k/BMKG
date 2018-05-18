<div class="container" style="margin-top: 5%">
    <div class="container" style="margin-left:45px;">
        <div class="row">
            <h3>Publikasi</h3>
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
            $no = $this->uri->segment('3') + 1;
            foreach ($buletin as $data) {
                
            ?>
            <div class="row" style="padding-left: 2%; padding-right: 2%; ">
                <div class="col-lg-12" style="background-color: white; box-shadow: 1px 1px 3px grey; padding-top: 3%">

                    <div class="col-lg-2" style="padding-bottom: 5%; padding-top: 3%">
                        <img src="<?php echo base_url('assets/db_buletin/cover/'.$data->id_buletin.'.jpg'); ?>" width="100%">
                    </div>
                    <div class="col-lg-10" style="padding-bottom: 2%;">
                        <h5 style="font-weight: bold"><?php echo $data->judul; ?></h5>
                        <p style="font-size: 11px">Nomer Katalog : <?php echo $data->id_buletin; ?> | ISSN / ISBN : - | Tanggal Rilis : <?php echo $data->tgl_rilis; ?> | Ukuran File : <?php  echo $data->size; ?> MB 
                        </p>
                        <p style="font-size: 12px">
                            <?php echo $data->ket; ?>
                        </p>
                        <div class="form-group">
                            <a href="<?php echo base_url('assets/db_buletin/file/'.$data->id_buletin.'.pdf'); ?>">
                                <button type="submit" class="btn btn-primary" hr>
                                    Unduh
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="row" style="padding-left: 2%; padding-right: 2%; margin-top: 1%">
                <?php echo $this->pagination->create_links(); ?>
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
