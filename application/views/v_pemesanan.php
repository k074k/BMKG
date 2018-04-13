<div class="container" style=" background-color: white;margin-top: 70px">
  <div class="container">
      <div class="row">
          <h3 style="text-align:center;">Pesanan Dipilih</h3>
      </div>
  </div>
  <div class="col-lg-8" style="padding-top: 25px;margin-left:17%;" >
    <table class="table">
      <tr>
        <td>
          <form role="form">
            <div class="form-group">
              <input class="form-control" type="text" disabled="disabled" value="Jenis Data">
            </div>
          </form>
        </td>
        <td>
          <form role="form">
            <div class="form-group">
              <input class="form-control" type="text" disabled="disabled" value="Tanggal Mulai">
            </div>
          </form>
        </td>
        <td>
          <form role="form">
            <div class="form-group">
              <input class="form-control" type="text" disabled="disabled" value="Sampai Tanggal">
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
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>
          <h4 style="text-align:end;">Total Harga: </h4>
        </td>
        <td>
          <form role="form">
            <div class="form-group">
              <input class="form-control" type="text" disabled="disabled" value="Rp.10000">
            </div>
          </form>
        </td>
      </tr>
    </table>
  </div>
</div>

<div class="container" style=" background-color: white;margin-top: 70px; margin-bottom:70px;">
    <div class="container">
        <div class="row">
            <h3 style="text-align:center;">From Pemesanan Data</h3>
        </div>
    </div>
    <div class="col-lg-8" style="padding-top: 25px;margin-left:17%;">
      <form>
        <div class="form-group">
          <input type="text" class="form-control" id="name" placeholder="Nama Lengkap">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="pekerjaan" placeholder="Pekerjaan">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="instansi" placeholder="Instansi">
        </div>
        <div class="form-group">
          <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="ktp" placeholder="Nomor KTP">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="tlp" placeholder="Nomor Telepon">
        </div>
        <div class="form-group">
          <div class="radio">
            <label><input type="radio" name="optradio">Komersial</label>
            <label  style="margin-left:20px;"><input type="radio" name="optradio">Non Komersial</label>
          </div>
        </div>
        <div class="form-group">
          <button class="btn btn-default" onclick="document.getElementById('file').click()">Chose PDF file (Max 4Mb)</button>
          <input type="file" id="file" style="display:none">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="captha" placeholder="Captha">
        </div>
        <div class="form-group">
          <a type="submit" class="btn btn-primary">Cetak</a>
        </div>
      </form>
    </div>
</div>
