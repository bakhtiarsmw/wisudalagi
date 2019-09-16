<div class="row">
    <div class="col-md-12" style="padding:20px 50px;">
        <span id="message-batas-pembayaran"></span>
        <button type="button" class="btn btn-primary" id="create_billing" data-toggle="modal" data-target="#m_modal_4" >
            Create Billing
        </button>
        My URI  <?=$this->uri->segment(1);?>
    </div>
</div>
<input type="hidden" value="<?=site_url('pembayaran/') ?>" id="base_url_id">
<div class="row">
    <div class="col-md-12" style="padding:20px 50px;">
        <table id="tbl_pembayaran" class="table table-striped table-bordered nowrap" width="100%" style="font-weight:500;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Transaksi ID</th>
                    <th>Tagihan</th>
                    <th>Expired</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Transaksi ID</th>
                    <th>Tagihan</th>
                    <th>Expired</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<!--Test Gitraken-->

<div class="modal fade" id="m_modal_4" tabindex="-1" role="dialog" aria-labelledby="CreateBilling" aria-hidden="true">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <form class="m-form m-form--fit m-form--label-align-right" id="paymentForm" method="POST" role="form" action="<?=site_url('pembayaran/post_payment');?>">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Create Billing Now
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            &times;
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--begin::Form-->
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group">
                                <label for="exampleInputPassword1">
                                    NIM <span style="color:blue;font-size:12px;">*Press Enter After Typing Nim</span>
                                </label>
                                <input type="text" name="nim" maxlength="11" id="txt_nim" class="form-control m-input" placeholder="NIM" required>
                                <div class="message-response" style="font-size:11px; color:red;padding-left:20px;padding-top:10px;"></div>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="exampleInputPassword1">
                                    Customer Name
                                </label>
                                <input type="text" readonly name="customer_name" id="c_name" class="form-control m-input" placeholder="Customer Name" required>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="exampleInputPassword1">
                                    Customer Email
                                </label>
                                <input type="email" name="customer_email" class="form-control m-input" placeholder="Customer Email" required>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="exampleInputPassword1">
                                    Customer Phone
                                </label>
                                <input type="text" name="customer_phone" class="form-control m-input" placeholder="Customer Phone" required>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="exampleInputPassword1">
                                    Virtual Account
                                </label>
                                <input type="text" readonly name="virtual_account" id="va" class="form-control m-input" placeholder="Virtual Account" required>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="exampleInputPassword1">
                                    Program Studi
                                </label>
                                <input type="text" readonly name="prodi" id="prodi" class="form-control m-input" placeholder="Customer Name" required>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="trx_id">
                                    Tahun
                                </label>
                                <select name="tahun" id="tahun" class="form-control m-input" required>
                                    <option value="">Pilih Tahun</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                </select>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="trx_id">
                                    Periode Semester
                                </label>
                                <div class="form-group">
                                    <input type="radio" name="periode" value="1" required> Ganjil
                                    <input type="radio" name="periode" value="2"> Genap
                                </div>

                            </div>
                            <div class="form-group m-form__group">
                                <label for="trx_id">
                                    Jenis Pembayaran
                                </label>
                                <select name="jenis" id="jenis" class="form-control m-input" required>
                                    <option value="">Pilih Jenis</option>
                                    <option value="05">Wisuda</option>
                                </select>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="trx_amount">
                                    Total Tagihan
                                </label> <span style="font-size:11px;">+ 2.500 secara otomatis (Biaya VA BNI)</span>
                                <input type="text" name="trx_amount" class="form-control m-input" id="trx_amount" placeholder="Contoh : 1450000" required>
                            </div>
                        </div>
                    <!--end::Form-->
                </div>
                <div class="modal-footer">
                    <span id="message-api" style="font-size:12px;color:red;font-weight:bold;"></span>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Cancel
                    </button>
                    <button type="submit" id="submitPayment" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="m_modal_5" tabindex="-1" role="dialog" aria-labelledby="Inquery" aria-hidden="true">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <form class="m-form m-form--fit m-form--label-align-right" id="inquiryForm" method="POST" role="form" action="<?=site_url('pembayaran/put_payment');?>">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Inquiry
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            &times;
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--begin::Form-->
                    <div class="m-portlet__body">

                        <div class="form-group m-form__group">
                            <label for="exampleInputPassword1">
                                TRX ID
                            </label>
                            <input type="text" name="trx_id_iq" id="iq_trx_id" class="form-control m-input" placeholder="TRX ID" required>
                            <div class="message-response-iq" style="font-size:11px; color:red;padding-left:20px;padding-top:10px;"></div>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="exampleInputPassword1">
                                Customer Name
                            </label>
                            <input type="text" name="customer_name_iq" id="iq_name" class="form-control m-input" readonly placeholder="Customer Name" required>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="exampleInputPassword1">
                                Customer Email
                            </label>
                            <input type="email" name="customer_email_iq" id="iq_email" class="form-control m-input" readonly placeholder="Customer Email" required>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="exampleInputPassword1">
                                Customer Phone
                            </label>
                            <input type="text" name="customer_phone_iq" id="iq_phone" class="form-control m-input" placeholder="Customer Phone" required readonly>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="exampleInputPassword1">
                                Virtual Account
                            </label>
                            <input type="text" readonly name="virtual_account_iq" id="iq_va" class="form-control m-input" placeholder="Virtual Account" required>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="exampleInputPassword1">
                                Status Tagihan
                            </label>
                            <input type="text" id="status_va_iq" class="form-control" readonly>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="trx_amount">
                                Total Tagihan
                            </label> <span style="font-size:11px;">Sudah termasuk Biaya VA BNI (2.500)</span>
                            <input type="text" name="trx_amount_iq" readonly class="form-control m-input" id="iq_trx_amount" placeholder="Contoh : 1450000" required>
                        </div>
                    </div>
                    <!--end::Form-->
                </div>
                <div class="modal-footer">
                    <span id="message-api-iq" style="font-size:12px;color:red;font-weight:bold;"></span>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="m_modal_6" tabindex="-1" role="dialog" aria-labelledby="Update" aria-hidden="true">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <form class="m-form m-form--fit m-form--label-align-right" id="updateForm" method="POST" role="form" action="<?=site_url('pembayaran/put_payment');?>">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Update Billing
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            &times;
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--begin::Form-->
                    <div class="m-portlet__body">

                        <div class="form-group m-form__group">
                            <label for="exampleInputPassword1">
                                TRX ID
                            </label>
                            <input type="text" readonly name="trx_id_up" id="id_trx_up" class="form-control m-input" placeholder="TRX ID" required>
                            <input type="hidden" name="id_up" id="id_up">
                            <div class="message-response-up" style="font-size:11px; color:red;padding-left:20px;padding-top:10px;"></div>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="exampleInputPassword1">
                                Customer Name
                            </label>
                            <input type="text" name="customer_name_up" id="up_name" class="form-control m-input" readonly placeholder="Customer Name" required>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="exampleInputPassword1">
                                Customer Email
                            </label>
                            <input type="email" name="customer_email_up" id="up_email" class="form-control m-input" readonly placeholder="Customer Email" required>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="exampleInputPassword1">
                                Customer Phone
                            </label>
                            <input type="text" name="customer_phone_up" id="up_phone" class="form-control m-input" placeholder="Customer Phone" required readonly>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="exampleInputPassword1">
                                Virtual Account
                            </label>
                            <input type="text" readonly name="virtual_account_up" id="up_va" class="form-control m-input" placeholder="Virtual Account" required>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="exampleInputPassword1">
                                Status Tagihan
                            </label>
                            <input type="text" id="status_va_up" class="form-control" readonly>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="trx_amount">
                                Total Tagihan
                            </label> <span style="font-size:11px;">+ 2.500 secara otomatis (Biaya VA BNI)</span>
                            <input type="text" name="trx_amount_up" class="form-control m-input" id="up_trx_amount" placeholder="Contoh : 1450000" required>
                        </div>
                    </div>
                    <!--end::Form-->
                </div>
                <div class="modal-footer">
                    <span id="message-api-up" style="font-size:12px;color:red;font-weight:bold;"></span>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" id="updatePayment" class="btn btn-primary">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>