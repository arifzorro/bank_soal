<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>FORM TAMBAH SOAL<small>tambah data</small></h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br>
            <form data-parsley-validate
                  class="form-horizontal form-label-left"
                  method="post"
                  action="<?php isset($data->id) ? route("data/save", $data->id ): route("data/save"); ?>"
            >

<!--                <div class="form-group">-->
<!--                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Vendor-->
<!--                    </label>-->
<!--                    <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                        <input disabled value="--><?php //echo $vendor->nama?><!--" type="text" required class="form-control col-md-7 col-xs-12">-->
<!--                        <input name="vendor_id" type="hidden" value="--><?php //echo $vendor->id; ?><!--">-->
<!--                    </div>-->
<!--                </div>-->
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal create
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <input value="<?php show_ifset($data->tgl_ganti, date('d-m-Y'), true); ?>" type="text" name="tgl_ganti" required class="datepicker form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">soal</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="form-control" rows="5" id="soal" required></textarea>

                        <!--  <input value="--><?php //show_ifset($data->pelanggan_id); ?><!--"-->
<!--                               class="form-control col-md-7 col-xs-12"-->
<!--                               type="text" name="pelanggan_id" required>-->

                    </div>
                </div>

<!--                <div class="form-group">-->
<!--                    <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                        <input value="--><?php //show_ifset($data->pelanggan_telepon); ?><!--"-->
<!--                               class="form-control col-md-7 col-xs-12"-->
<!--                               type="text" name="pelanggan_telepon">-->
<!--                    </div>-->
<!--                </div>-->

                <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">pilihan A</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input value="<?php show_ifset($data->sn_meter_baru);?>"
                               class="form-control col-md-7 col-xs-12"
                               type="text" name="sn_meter_baru" required>
                    </div>
                </div>


                <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">pilihan B</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input value="<?php show_ifset($data->seri_meter_lama); ?>"
                               class="form-control col-md-7 col-xs-12"
                               type="text" name="seri_meter_lama" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">pilihan C</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input value="<?php show_ifset($data->tahun_meter_lama); ?>"
                               class="form-control col-md-7 col-xs-12"
                               type="text" name="tahun_meter_lama" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">pilihan D</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input value="<?php show_ifset($data->stan_bongkar); ?>"
                               class="form-control col-md-7 col-xs-12"
                               type="text" name="stan_bongkar" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">pilihan E</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input value="<?php show_ifset($data->no_segel); ?>"
                               class="form-control col-md-7 col-xs-12"
                               type="text" name="no_segel" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Pelaksana <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="pelaksana" type="text" value="<?php show_ifset($data->pelaksana, $this->auth->get_name()); ?>" class="date-picker form-control col-md-7 col-xs-12" required>
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="button" class="btn btn-primary" onclick="location.reload()">Cancel</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>