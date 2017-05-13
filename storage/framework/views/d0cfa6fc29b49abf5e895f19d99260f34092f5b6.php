<br>
<table width="400px">
    <tr>
        <td><h4>Tanggal Penilaian</h4></td>
        <td>
            <input type="text" size="30" value="" class="clean"  data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
            <button class="btn btn-primary" title="Perbaharui tanggal Penilaian"><i class="fa fa-refresh"></i></button>
        </td>
    </tr>
</table>
<div class="task-content">
<br>
  <div class="row">
    <div class="col-md-12"><span><h4 align="center">DATA PEMOHON</h4></span><hr></div>
    <div class="col-md-6 bordered">
    <table class="table table-responsive table-borderless">
      <tr>
        <td width="150px">Nama</td>
        <td><input type="text" class="form-control" value="<?php echo e($app->mitra->nama_lengkap); ?>" disabled></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>
          <input type="radio" value="L" <?php echo e(autoChecked($app->mitra->jk, 'L')); ?>> Laki-laki
          <input type="radio" value="P" <?php echo e(autoChecked($app->mitra->jk, 'P')); ?>> Perempuan
        </td>
      </tr>
      <tr>
        <td>Alamat Rumah</td>
        <td><textarea name="" class="form-control" id="" cols="" rows="2" disabled><?php echo e(getAlamat('blk', $app->mitra->alamat->alamat_sekarang) . " " . getAlamat('jl', $app->mitra->alamat->alamat_sekarang)); ?></textarea></td>
      </tr>
      <tr>
        <td>No. Telp. / HP</td>
        <td><input type="text" class="form-control" value="<?php echo e($app->mitra->no_telp); ?>" disabled></td>
      </tr>
      <tr>
        <td>Riwayat hub.dgn Lembaga Keuangan</td>
        <td>
            <select name="" id="" class="form-control">
               <?php $__currentLoopData = getEnum(new App\NapSatu, 'rwyt_hbng_lbg'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_key); ?>" <?php echo e(autoSelect($nap_satu->rwyt_hbng_lbg, $m_val)); ?>><?php echo e($m_val); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </td>
      </tr>
      <tr>
        <td>Prospek Usaha</td>
        <td>
            <select name="" id="" class="form-control">
               <?php $__currentLoopData = getEnum(new App\NapSatu, 'ps_usaha'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_key); ?>" <?php echo e(autoSelect($nap_satu->ps_usaha, $m_val)); ?>><?php echo e($m_val); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </td>
      </tr>
      <tr>
        <td>Ketergantungan thd Supplyer</td>
        <td>
          <select name="" id="" class="form-control">
               <?php $__currentLoopData = getEnum(new App\NapSatu, 'ktg_thd_sp'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_key); ?>" <?php echo e(autoSelect($nap_satu->ktg_thd_sp, $m_val)); ?>><?php echo e($m_val); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </td>
      </tr>
      <tr>
        <td>Ketergantungan thd Pelanggan</td>
        <td>
          <select name="" id="" class="form-control">
               <?php $__currentLoopData = getEnum(new App\NapSatu, 'ktg_thd_pl'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_key); ?>" <?php echo e(autoSelect($nap_satu->ktg_thd_pl, $m_val)); ?>><?php echo e($m_val); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </td>
      </tr>
      <tr>
        <td>Wilayah Pemasaran</td>
        <td>
          <select name="" id="" class="form-control">
               <?php $__currentLoopData = getEnum(new App\NapSatu, 'wly_pmsrn'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_key); ?>" <?php echo e(autoSelect($nap_satu->wly_pmsrn, $m_val)); ?>><?php echo e($m_val); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </td>
      </tr>
      <tr>
        <td>Jenis Produk</td>
        <td>
          <select name="" id="" class="form-control">
               <?php $__currentLoopData = getEnum(new App\NapSatu, 'jns_prdk'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_key); ?>" <?php echo e(autoSelect($nap_satu->jns_prdk, $m_val)); ?>><?php echo e($m_val); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </td>
      </tr>
    </table>
  </div>
  <div class="col-md-6 bordered">
    <table class="table table-responsive table-borderless">
      <tr>
        <td width="150px">Jml. Permohonan Pembiayaan</td>
        <td><input type="text" class="form-control" value="<?php echo e($app->nominal_pb); ?>" disabled=""></td>
      </tr>
      <tr>
        <td>Bidang Usaha</td>
        <td>
        <select name="" id="" class="form-control" disabled>
               <?php $__currentLoopData = getEnum(new App\Keuangan, 'bidang_usaha'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_key); ?>" <?php echo e(autoSelect($app->keuangan->bidang_usaha, $m_val)); ?>><?php echo e($m_val); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
      </td>
      </tr>
      <tr>
        <td>Alamat Usaha</td>
        <td><input type="text" class="form-control" value="<?php echo e($app->keuangan->alamat); ?>" disabled=""></td>
      </tr>
      <tr>
        <td>Lama Usaha</td>
        <td>
          <select name="" id="" class="form-control">
               <?php $__currentLoopData = getEnum(new App\NapSatu, 'lm_ush'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_key); ?>" <?php echo e(autoSelect($nap_satu->lm_ush, $m_val)); ?>><?php echo e($m_val); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </td>
      </tr>
      <tr>
        <td>Reputasi Usaha</td>
        <td>
          <select name="" id="" class="form-control">
               <?php $__currentLoopData = getEnum(new App\NapSatu, 'rpt_ush'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_key); ?>" <?php echo e(autoSelect($nap_satu->rpt_ush, $m_val)); ?>><?php echo e($m_val); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </td>
      </tr>
      <tr>
        <td>Usia</td>
        <td>
          <select name="" id="" class="form-control">
               <?php $__currentLoopData = getEnum(new App\NapSatu, 'usia'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_key); ?>" <?php echo e(autoSelect($nap_satu->usia, $m_val)); ?>><?php echo e($m_val); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </td>
      </tr>
      <tr>
        <td>Administrasi Usaha</td>
        <td>
          <select name="" id="" class="form-control">
               <?php $__currentLoopData = getEnum(new App\NapSatu, 'adm_ush'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_key); ?>" <?php echo e(autoSelect($nap_satu->adm_ush, $m_val)); ?>><?php echo e($m_val); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </td>
      </tr>
      <tr>
        <td>Tempat Tinggal</td>
        <td>
          <select name="" id="" class="form-control">
               <?php $__currentLoopData = getEnum(new App\NapSatu, 'tmpt_tgl'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_key); ?>" <?php echo e(autoSelect($nap_satu->tmpt_tgl, $m_val)); ?>><?php echo e($m_val); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </td>
      </tr>
      <tr>
        <td>Tempat Usaha</td>
        <td>
          <select name="" id="" class="form-control">
               <?php $__currentLoopData = getEnum(new App\NapSatu, 'tmpt_ush'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_key => $m_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($m_key); ?>" <?php echo e(autoSelect($nap_satu->tmpt_ush, $m_val)); ?>><?php echo e($m_val); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </td>
      </tr>
      <tr>
        <td>Rekening di UJKS BMT Al Ishlah</td>
        <td>
          <div class="form-group">
            <label for=""><small><strong>Simpanan</strong></small></label>
            <input type="text" class="form-control" value="<?php echo e($nap_satu->rkn_smpn); ?>">
          </div>
          <div class="form-group">
            <label for=""><small><strong>Sijangka</strong></small></label>
            <input type="text" class="form-control" value="<?php echo e($nap_satu->rkn_sjnk); ?>">
          </div>
        </td>
      </tr>
    </table>
  </div>
  </div>
  
  <div class="row">
    <div class="co-md-12"><span><h4 align="center">INFORMASI KEUANGAN PEMOHON</h4></span><hr></div>
    <div class="col-md-7 bordered col-md-offset-2">
        <table class="table table-borderless" width="" align="center">
        <tr>
            <td width="200px">Produk Jasa Yag Dihasilkan</td>
            <td><input type="text" class="form-control" value="<?php echo e($app->keuangan->nama_usaha); ?>" disabled=""></td>
        </tr>
        <tr>
            <td>Rencana Penggunakan</td>
            <td><input type="text" class="form-control" value="<?php echo e($app->keuangan->tujuan_pb_detail); ?>" disabled=""></td>
        </tr>
        <tr>
            <td>Jumlah Pembiayaan yang di Rekomendasikan</td>
            <td>
              <input type="number" class="clean" value="<?php echo e($app->rekomen_pb); ?>">
              &nbsp;&nbsp;
              <strong>JK.Waktu</strong>
              <input type="number" class="clean" value="<?php echo e($app->waktu_pb); ?>">
            </td>
        </tr>
        <tr>
            <td>Jumlah Margin / Bagi hasil</td>
            <td>
              <input type="text" class="clean" value="<?php echo e($app->margin_pb); ?>">
              &nbsp;&nbsp;
              <strong>e. rate</strong> :
              <span>2 %</span>
            </td>
        </tr>
        <tr>
            <td>Besar angsuran perbulan</td>
            <td><input type="text" class="form-control"  value="<?php echo e($app->angs_pb); ?>"></td>
        </tr>
            
        </table>
    </div>
  </div>
  <div class="row">
  <hr>
    <div class="col-md-6 bordered">
    <table class="table table-responsive table-bordered">
    <thead>
        <tr>
            <td colspan="2"><b>Pendapatan Usaha</b></td>
        </tr>
    </thead>
    <?php  $t_pdptn = 0;  ?>
      <?php $__currentLoopData = $pendapatan->where('tipe', 'pu')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pdptn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <!-- Total pendapatan -->
      <?php  $t_pdptn += $pdptn->isi;  ?>
      <tr>
        <td width="150px"><b><?php echo e($pdptn->judul); ?></b></td>
        <td><input type="text" class="form-control" value="<?php echo e($pdptn->isi); ?>"></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <tr>
          <td>Jumlah</td>
          <td><?php echo e($t_pdptn); ?></td>
      </tr>
      <tr>
          <td colspan="2">
              <button class="btn btn-primary btn-sm">Tambah baris</button>
              <button class="btn btn-success btn-sm">Simpan</button>
          </td>
      </tr>
    </table>
  </div>
  <div class="col-md-6 bordered">
    <table class="table table-responsive table-bordered">
    <thead>
        <tr>
            <td colspan="2"><b>Pengeluaran Usaha (HPP)</b></td>
        </tr>
    </thead>
      <tr>
        <td width="150px">Omset Pendapatan</td>
        <td><input type="text" class="form-control" value="20020020"></td>
      </tr>
      <tr>
          <td colspan="2">
              <button class="btn btn-primary btn-sm">Tambah baris</button>
              <button class="btn btn-success btn-sm">Simpan</button>
          </td>
      </tr>
    </table>
  </div>
  </div>
  <div class="row">
    <div class="col-md-6 bordered">
    <table class="table table-responsive table-bordered">
    <thead>
        <tr>
            <td colspan="2"><b>Pendapatan Lain</b></td>
        </tr>
    </thead>

    <?php  $t_pdptn = 0;  ?>

    <?php $__currentLoopData = $pendapatan->where('tipe', 'pl')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pdptn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <!-- Total pendapatan -->
      <?php  $t_pdptn += $pdptn->isi;  ?>
      <tr>
        <td width="150px"><b><?php echo e($pdptn->judul); ?></b></td>
        <td><input type="text" class="form-control" value="<?php echo e($pdptn->isi); ?>"></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <tr>
          <td>Jumlah</td>
          <td><?php echo e($t_pdptn); ?></td>
      </tr>
      <tr>
          <td colspan="2">
              <button class="btn btn-primary btn-sm">Tambah baris</button>
              <button class="btn btn-success btn-sm">Simpan</button>
          </td>
      </tr>
    </table>
  </div>
  <div class="col-md-6 bordered">
    <table class="table table-responsive table-bordered">
    <thead>
        <tr>
            <td colspan="2"><b>Pengeluaran Rumah Tangga</b></td>
        </tr>
    </thead>
      <tr>
        <td width="150px">Omset Pendapatan</td>
        <td><input type="text" class="form-control" value="20020020"></td>
      </tr>
      <tr>
          <td colspan="2">
              <button class="btn btn-primary btn-sm">Tambah baris</button>
              <button class="btn btn-success btn-sm">Simpan</button>
          </td>
      </tr>
    </table>
  </div>
  </div>

  <div class="row">
      <div class="col-md-12">
          <h4 align="center">Laba/Rugi Bersih Per Bulan</h4><hr>
      </div>
  </div>
  <div class="row">
      <div class="col-md-12">
          <h4 align="center">NERACA</h4><hr>
      </div>
  </div>
</div>