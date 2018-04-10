<!--Judul-->
<div class="container" style="margin-top: 70px">
    <div class="container" style="margin-left:45px;">
        <div class="row">
            <h3>Layanan Online</h3>
        </div>
    </div>
</div>

<!--Tanggal dan Bulan-->
<div class="container" style="background-color: white; margin-top: 25px;">
    <div class="container" style="padding-top: 25px; margin-bottom: 50px">
        <div class="col-lg-12" >
            <div class="col-lg-2">
                <form role="form">
                    <div class="form-group">
                        <select class="form-control">
                            <option>---- Pilih Bulan ----</option>
                            <option>Januari</option>
                            <option>Februari</option>
                            <option>Maret</option>
                            <option>April</option>
                            <option>Mei</option>
                            <option>Juni</option>
                            <option>Juli</option>
                            <option>Agustus</option>
                            <option>September</option>
                            <option>Oktober</option>
                            <option>November</option>
                            <option>Desember</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="col-lg-2">
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
            <div class="col-lg-1" style="margin-left: 53%;">
                <form role="form">
                  <div class="btn-group">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Pemesanan</button>
                  </div>
                </form>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog modal-lg" >
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Form Permintaan Data Online</h4>
                  </div>
                  <div class="modal-body">
                    <div>
                      <table class="table">
                        <tr>
                          <td>
                            <form role="form">
                              <div class="form-group">
                                <select class="form-control">
                                  <option>--Jenis Data--</option>
                                  <option>Data Gempa</option>
                                  <option>Data Petir</option>
                                  <option>Data Angin</option>
                                  <option>Data Harian Hujan</option>
                                  <option>Data Suhu</option>
                                  <option>Data Kelembapan</option>
                                  <option>Lama penyinaran</option>
                                  <option>Arah/Kecepatan Angin</option>
                                  <option>Data Penguapan</option>
                                  <option>Data Curah Hujan</option>
                                  <option>Data Intensitas Hujan</option>
                                </select>
                              </div>
                            </form>
                          </td>
                          <td>
                            <form role="form">
                              <div class="form-group">
                                <input class="form-control" type="date" id="Mulai">
                              </div>
                            </form>
                          </td>
                          <td>
                            <form role="form">
                              <div class="form-group">
                                <input class="form-control" type="date" id="Akhir">
                              </div>
                            </form>
                          </td>
                          <td>
                            <form role="form">
                              <div class="form-group">
                                <input class="form-control" type="text" disabled="disabled" value="Rp.10000">
                              </div>
                            </form>
                          </td>
                          <td>
                            <form role="form">
                              <div class="form-group">
                                <span class="glyphicon glyphicon-remove-circle" style="font-size:24px;margin-top: 3%;">
                              </div>
                            </form>
                          </td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>
                            <h4>Total Harga: </h4>
                          </td>
                          <td>
                            <form role="form">
                              <div class="form-group">
                                <input class="form-control" type="text" disabled="disabled" value="Rp.10000">
                              </div>
                            </form>
                          </td>
                          <td>
                            <form role="form">
                            <div class="form-group">
                              <span class="glyphicon glyphicon-plus-sign" style="font-size:24px;margin-top: 3%;">
                            </div>
                            </form>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <a type="submit" class="btn btn-default" href="<?php echo base_url('publikasi/pemesanan')?>">Lanjutkan</a>
                  </div>
                </div>
              </div>
            </div>

            <table class="table table-striped" style="width: 100%;">
            <!--Table Head-->
                <thead>
                    <tr>
                        <th rowspan="2" style="text-align: center; padding-bottom: 2.5%; font-size: 16px">Jenis Data</th>
                        <th colspan="31" style="text-align: center">Bulan : Tahun</th>
                    </tr>
                    <tr>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                            <th ><?php echo $i?></th>
                        <?php }?>
                    </tr>
                </thead>

            <!--Table Body-->
                <tbody >

            <!--Data Gempa-->
                    <tr>
                        <td>Data Gempa</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Data Petir-->
                    <tr>
                        <td>Data Petir</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Data Angin-->
                    <tr>
                        <td>Data Angin</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Data Hari Hujan-->
                    <tr>
                        <td>Data Harian Hujan</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Data Suhu-->
                    <tr>
                        <td>Data Suhu</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Data Kelembapan-->
                    <tr>
                        <td>Data Kelembapan</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Lama Penyinaran-->
                    <tr>
                        <td>Lama penyinaran</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Arah/Kecepatan Angin-->
                    <tr>
                        <td>Arah/Kecepatan Angin</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Data Penguapan-->
                    <tr>
                        <td>Data Penguapan</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Data Curah Hujan-->
                    <tr>
                        <td>Data Curah Hujan</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Data Intensitas Hujan-->
                    <tr>
                        <td>Data Intensitas Hujan</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Koding icon Circle X -->
<!-- <span class="glyphicon glyphicon-remove-circle" style="font-size:24px;"> -->
<!-- Pilih Data -->
