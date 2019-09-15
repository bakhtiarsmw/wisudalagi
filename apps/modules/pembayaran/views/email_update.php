<?php

$data = json_decode(json_encode($message,true));

?>
<!doctype html>
<html>
<head>
    <!-- trx_0061 -->
    <meta charset="3D&quot;UTF-8&quot;">
    <meta name="3D&quot;viewport&quot;" content="3D&quot;width=3Ddevice-width," initial-sc="ale=3D1&quot;/">
    <meta http-equiv="3D&quot;X-UA-Compatible&quot;" content="3D&quot;IE=3Dedge&quot;">
    <title>UNMER MALANG - WisudaPay</title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
<div>

    <table align="center" style="background:#FAFAFA; background-repeat: no-repeat; background-size:100%;" border="0" cellpadding="0" cellspacing="0" width="100%" id="">
        <tbody>
        <tr>
            <td align="center">
                <table align="center" border="0" cellpadding="0" cellspacing="0" style="max-width:530px" width="100%">
                    <tbody>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;padding-bottom:10px;">
                            <img src="https://i.imgur.com/YsnTo5v.png" style="width:100%;border-radius:5px 5px 5px 5px;">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top" style="background:#ffffff;border-radius:5px 5px 5px 5px;">
                            <div class="content-layout" style="padding:20px;">
                                <div class="date-created" style="padding:0px 20px;">
                                    <h3 style="font-weight:normal;color:#737373;font-size:16px;padding-bottom:10px;width:100%;border-bottom:solid 1px #EE8967;">
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
                                        Data Tagihan Anda Telah Dirubah: <br>
                                        Your Billing Data Has Changed:
                                    </p>
                                </div>
                                <div class="detail-info" style="padding:0px 20px;">
                                    <table class="detail-tb" width="100%" style="color:#737373;font-size:13.5px;">
                                        <tr>
                                            <td colspan="3" style="background: #ededed;padding:20px;">
                                                <table style="color:#737373;font-size:13.5px;" align="center">
                                                    <tr><td colspan="3">Rincian Perubahan Tagihan</td></tr>
                                                    <tr><td colspan="3"><br><br></td></tr>
                                                    <tr>
                                                        <td>Biaya Wisuda</td>
                                                        <td>:</td>
                                                        <td width="80px" align="right"><?=number_format($data->trx_amount - 2500,2,",",".")?> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Biaya VA BNI</td>
                                                        <td>:</td>
                                                        <td width="80px" align="right"><?=number_format(2500,2,",",".")?> </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Total Tagihan</th>
                                                        <td>:</td>
                                                        <th width="80px" align="right"><?=number_format($data->trx_amount,2,",",".")?> </th>
                                                    </tr>
                                                </table>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><br></td>
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
                                        <tr>
                                            <td colspan="3">
                                                Silahkan melakukan pembayaran wisuda menggunakan Virtual Account (VA) BNI. Berikut Tata Caranya.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><br><br></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" align="center">
                                                <a href="https://drive.google.com/open?id=10wyWqbxiLkAt5Y9QxdPXNFUaTDde_t_l" target="_blank" style="line-height: 40px;padding:10px;border-radius: 20px;background-image: -webkit-linear-gradient(0deg, #e66587 0%, #f09458 100%);color:#ffffff;text-decoration: none;margin-top:10px;">Download Tata Cara Pembayaran</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><br><br></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="top">

                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tbody>
                                <tr>
                                    <td align="center" valign="top" class="m_-568390118054485034footerContent" style="color:#484848;font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif;font-size:12px;font-weight:400;line-height:14px;padding-top:40px;padding-bottom:40px;text-align:center">
                                        <p style="color:#484848;font-family: 'Josefin Sans', sans-serif;font-size:12px;font-weight:400;line-height:14px;padding-top:0;margin:0;text-align:center">
                                            © 2019 <a href="https://fti.unmer.ac.id/fti/">FTI</a> - UNMER MALANG.<br></p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </td>
                    </tr>
                    </tbody>
                </table>

            </td>
        </tr>
        </tbody>
    </table>

    <div class="yj6qo"></div>
    <div class="adL">
    </div>
</div>




</body>

</html>
