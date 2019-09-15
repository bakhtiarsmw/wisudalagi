<?php

$data = json_decode(json_encode($message,true));

?>
<style>
    body{
        font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
    }
</style>
<div class="wrapper-layout" style="width:595px;height:842px;border:solid 1px #E4E4E4;padding:0;">
    <div class="logo-bni" style="width:100%;background:#F8F8F8;height:auto;">
        <div class="img-bni" style="padding:20px;border-bottom:solid 1px #E4E4E4;">
            <img src="<?=base_url('../assets/img/uner.png')?>" style="width:300px;">
        </div>
    </div>
    <div class="content-layout">
        <div class="date-created" style="padding:0px 20px;">
            <h3 style="font-weight:normal;color:#737373;font-size:16px;padding-bottom:10px;width:100%;border-bottom:solid 1px #E4E4E4;">
                Malang, <?=date("d M Y", strtotime($data->datetime_created));?>
            </h3>
        </div>
        <div class="yth-content" style="padding:0px 20px;">
            <p style="color:#737373;font-size:13.5px;line-height: 20px;">
                Kepada Yth. <?=$data->customer_name?>, <br>
                Dear <i><?=$data->customer_name?></i>,
            </p>
        </div>
        <div class="subject-content" style="padding:0px 20px;">
            <p style="color:#737373;font-size:13.5px;line-height: 20px;">
                Silahkan melakukan pembayaran dengan menggunakan data sebagai berikut: <br>
                Please make payment with detailed info:
            </p>
        </div>
        <div class="detail-info" style="padding:0px 25px;">
            <table class="detail-tb" width="100%" style="color:#737373;font-size:13.5px;">
                <tr>
                    <td style="line-height:20px;">Nomor VA<br><i>VA Number</i></td>
                    <td>:</td>
                    <td><?=$data->virtual_account?></td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td style="line-height:20px;">Kode Tagihan<br><i>Billing ID</i></td>
                    <td>:</td>
                    <td><?=$data->trx_id?></td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td style="line-height:20px;">Nama<br><i>Name</i></td>
                    <td>:</td>
                    <td><?=$data->customer_name?></td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td style="line-height:20px;">Surel<br><i>Email</i></td>
                    <td>:</td>
                    <td><?=$data->customer_email?></td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td style="line-height:20px;">Telepon<br><i>Phone</i></td>
                    <td>:</td>
                    <td><?=$data->customer_phone?></td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td style="line-height:20px;">Rincian Tagihan<br><i>Billing Amount</i></td>
                    <td>:</td>
                    <td>
                        <table style="color:#737373;font-size:13.5px;">
                            <tr>
                                <td>Biaya Wisuda</td>
                                <td width="80px" align="right"><?=number_format($data->trx_amount - 2500,2,",",".")?> </td>
                            </tr>
                            <tr>
                                <td>Biaya VA BNI</td>
                                <td width="80px" align="right"><?=number_format(2500,2,",",".")?> </td>
                            </tr>
                            <tr>
                                <th>Total Tagihan</th>
                                <th width="80px" align="right"><?=number_format($data->trx_amount,2,",",".")?> </th>
                            </tr>
                        </table>

                    </td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td style="line-height:20px;">Batas Pembayaran<br><i>Payment Limit</i></td>
                    <td>:</td>
                    <td><?=date("d M Y H:i:s", strtotime($data->datetime_expired));?></td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td style="line-height:20px;">Status<br><i>Status</i></td>
                    <td>:</td>
                    <td style="color:red;">Belum Lunas (Tagihan)</td>
                </tr>
            </table>
        </div>
    </div>
</div>
