<div class="m-content">
    <!--Begin::Main Portlet-->
    <div class="row">
        <div class="col-xl-6" style="max-height: 500px;">
            <!--begin:: Widgets/Activity-->
            <div class="m-portlet m-portlet--bordered-semi m-portlet--widget-fit m-portlet--full-height m-portlet--skin-light ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text m--font-light">
                                Selamat Datang! <?=$this->session->userdata('username');?>
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover">
                                <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl">
                                    <i class="fa fa-genderless m--font-light"></i>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
                                                        <span class="m-nav__section-text">
                                                            Quick Actions
                                                        </span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="<?=base_url('pembayaran')?>" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">
                                                                Pembayaran
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit"></li>
                                                    <li class="m-nav__item">
                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                            Cancel
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m-widget17">
                        <div class="m-widget17__visual m-widget17__visual--chart m-portlet-fit--top m-portlet-fit--sides m--bg-danger" align="center">
                            <div class="m-widget17__chart" style="height:320px;">
                                <div class="m-widget25">
                                    <div style="font-size:15px;color:#ffffff;">Pembayaran Wisuda Tersisa</div>
                                    <span class="m-widget25__price m--font-brand" style="color:#ffffff !important;">
                                        <?php
                                            $lmit       = strtotime("2019-10-07");
                                            $today = time(); // Waktu sekarang
                                            $selisih        = $lmit - $today;
                                            $hari = floor($selisih / (60 * 60 * 24));
                                            if($hari <= 0){echo "0";}else{ echo $hari; }?> <sub style="font-size: 15px;">Hari</sub>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="m-widget17__stats">

                            <div class="m-widget17__items m-widget17__items-col1" style="padding-bottom:20px;">
                                <a href="<?=base_url('/pembayaran')?>" class="card-link">
                                <div class="m-widget17__item">
                                    <span class="m-widget17__icon" style="padding-top:10px;">
                                        <i class="flaticon-book m--font-brand" style="font-size: 30px;"></i>
                                    </span>
                                    <span class="m-widget17__subtitle" style="padding-top:0px;margin-top:10px;font-size: 20px;">
                                        Create Billing
                                    </span>
                                    <span class="m-widget17__desc" style="font-size: 12px;">
                                        Transaksi Pembayaran Wisuda
                                    </span>
                                </div>
                                </a>
                            </div>
                            <div class="m-widget17__items m-widget17__items-col2" style="padding-bottom:20px;">
                                <a href="javascript:void(0)" class="card-link">
                                    <div class="m-widget17__item">
                                    <span class="m-widget17__icon" style="padding-top:10px;">
                                        <i class="flaticon-settings m--font-brand" style="font-size: 30px;"></i>
                                    </span>
                                        <span class="m-widget17__subtitle" style="padding-top:0px;margin-top:10px;font-size: 20px;">
                                        Settings
                                    </span>
                                        <span class="m-widget17__desc" style="font-size: 12px;">
                                        Pengaturan Umum
                                    </span>
                                    </div>
                                </a>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Activity-->
        </div>
        <div class="col-xl-6">
            <!--begin:: Widgets/Tasks -->
            <div class="m-portlet m-portlet--full-height ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Aktifitas
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="m_widget2_tab1_content">
                            <div class="m-widget2">
                                <?php foreach ($log as $aLog): ?>
                                <div class="m-widget2__item m-widget2__item--primary">
                                    <div class="m-widget2__checkbox">
                                    </div>
                                    <div class="m-widget2__desc">
                                            <span class="m-widget2__text">
                                                <?=$aLog->activity?>
                                            </span>
                                        <br>
                                        <span class="m-widget2__user-name">
                                            <a href="#" class="m-widget2__link">
                                                <?php
                                                $awal  = date_create($aLog->log_at);
                                                $akhir = date_create(); // waktu sekarang
                                                $diff  = date_diff( $awal, $akhir );
                                                ?>
                                                By <b><?=$aLog->username_log?></b> - <?php if($diff->d == 0){echo "Hari Ini";} else{ echo $diff->d." Hari"; }?>, <?=$diff->h?> Jam <?=$diff->i?> Menit Yang Lalu
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="tab-pane" id="m_widget2_tab2_content"></div>
                        <div class="tab-pane" id="m_widget2_tab3_content"></div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Tasks -->
        </div>
    </div>
    <!--End::Main Portlet-->
</div>
