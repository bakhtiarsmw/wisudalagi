
<!-- END: Subheader -->
<div class="m-content">
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon m--hide">
                                <i class="la la-gear"></i>
                            </span>
                            <h3 class="m-portlet__head-text">
                                Setting Form
                            </h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="m-form m-form--fit m-form--label-align-right">
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group m--margin-top-10">
                            <div class="alert m-alert m-alert--default" role="alert">
                                Message Here!
                            </div>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="client_id">
                                CLIENT ID
                            </label>
                            <input type="text" name="client_id" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Client ID">
                            <span class="m-form__help">
                                Info Field Here!
                            </span>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="trx_id">
                                TRX ID
                            </label>
                            <input type="text" name="trx_id" class="form-control m-input" id="exampleInputPassword1" placeholder="TRX ID">
                        </div>
                        <div class="form-group m-form__group">
                            <label for="trx_amount">
                                TRX Amount
                            </label>
                            <input type="text" name="trx_amount" class="form-control m-input" id="exampleInputPassword1" placeholder="TRX Amount">
                        </div>
                        <div class="form-group m-form__group">
                            <label for="billing_type">
                                Billing Type
                            </label>
                            <select class="form-control m-input" name="billing_type" id="exampleSelect1">
                                <option>Pilih</option>
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                            </select>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="example-datetime-local-input">
                                Date time Expired
                            </label>

                            <input class="form-control m-input" name="datetime_expired" type="text" placeholder="Date Time Expired" readonly>
                            <span class="m-form__help">
                                Billing will be expired in 2 hours
                            </span>

                        </div>
                        <div class="form-group m-form__group">
                            <label for="exampleInputPassword1">
                                Virtual Account
                            </label>
                            <input type="text" name="virtual_account" class="form-control m-input" placeholder="Cirtual Account">
                        </div>
                        <div class="form-group m-form__group">
                            <label for="exampleInputPassword1">
                                Customer Name
                            </label>
                            <input type="text" name="customer_name" class="form-control m-input" placeholder="Customer Name">
                        </div>
                        <div class="form-group m-form__group">
                            <label for="exampleInputPassword1">
                                Customer Email
                            </label>
                            <input type="email" name="customer_email" class="form-control m-input" placeholder="Customer Email">
                        </div>
                        <div class="form-group m-form__group">
                            <label for="exampleInputPassword1">
                                Customer Phone
                            </label>
                            <input type="text" name="customer_phone" class="form-control m-input" placeholder="Customer Phone">
                        </div>
                        <div class="form-group m-form__group">
                            <label for="exampleSelect1">
                                Type
                            </label>
                            <select class="form-control m-input" name="billing_type" id="exampleSelect1">
                                <option>Type Choose</option>
                                <option>Create Billing</option>
                                <option>Update Billing</option>
                                <option>Inquiry Billing</option>
                            </select>
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit" align="right">
                        <div class="m-form__actions">
                            <button type="reset" class="btn btn-secondary">
                                Cancel
                            </button>
                            <button type="reset" class="btn btn-primary">
                                Submit
                            </button>

                        </div>
                    </div>

                </form>
                <!--end::Form-->
            </div>
            <!--end::Portlet-->
        </div>
    </div>
</div>
