<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Admin Profile</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Admin Profile</li>
            </ul>
        </div>	
        <div class="row">
            <!-- Your Profile Views Chart -->
            <div class="col-lg-12 m-b30">
                <div class="widget-box">
                    <div class="wc-title">
                        <h4>Admin Profile</h4>
                    </div>
                    <div class="widget-inner">
                        <form class="edit-profile m-b30">
                            <div class="row">
                                <div class="col-12">
                                    <div class="ml-auto">
                                        <h3>1. Personal Details</h3>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Full Name</label>
                                    <div>
                                        <input class="form-control" type="text" value="<?php echo $_SESSION["admin"]["first_name"]." ".$_SESSION["admin"]["last_name"]; ?>">
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Occupation</label>
                                    <div>
                                        <input class="form-control" type="text" value="CTO">
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Company Name</label>
                                    <div>
                                        <input class="form-control" type="text" value="EduChamp">
                                        <span class="help">If you want your invoices addressed to a company. Leave blank to use your full name.</span>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Phone No.</label>
                                    <div>
                                        <input class="form-control" type="text" value="+120 012345 6789">
                                    </div>
                                </div>
                                
                                <div class="seperator"></div>
                                
                                <div class="col-12 m-t20">
                                    <div class="ml-auto m-b5">
                                        <h3>2. Address</h3>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Address</label>
                                    <div>
                                        <input class="form-control" type="text" value="5-S2-20 Dummy City, Canada">
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">City</label>
                                    <div>
                                        <input class="form-control" type="text" value="US">
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">State</label>
                                    <div>
                                        <input class="form-control" type="text" value="California">
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Postcode</label>
                                    <div>
                                        <input class="form-control" type="text" value="000702">
                                    </div>
                                </div>

                                <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

                                <div class="col-12 m-t20">
                                    <div class="ml-auto">
                                        <h3 class="m-form__section">3. Social Links</h3>
                                    </div>
                                </div>

                                <div class="form-group col-6">
                                    <label class="col-form-label">Linkedin</label>
                                    <div>
                                        <input class="form-control" type="text" value="www.linkedin.com">
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Facebook</label>
                                    <div>
                                        <input class="form-control" type="text" value="www.facebook.com">
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Twitter</label>
                                    <div>
                                        <input class="form-control" type="text" value="www.twitter.com">
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Instagram</label>
                                    <div>
                                        <input class="form-control" type="text" value="www.instagram.com">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="reset" class="btn">Save changes</button>
                                    <button type="reset" class="btn-secondry">Cancel</button>
                                </div>
                            </div>
                        </form>
                        <form class="edit-profile">
                            <div class="row">
                                <div class="col-12 m-t20">
                                    <div class="ml-auto">
                                        <h3 class="m-form__section">4. Add Item</h3>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <table id="item-add" style="width:100%;">
                                        <tr class="list-item">
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label class="col-form-label">Course Name</label>
                                                        <div>
                                                            <input class="form-control" type="text" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label class="col-form-label">Course Category</label>
                                                        <div>
                                                            <input class="form-control" type="text" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label class="col-form-label">Course Category</label>
                                                        <div>
                                                            <input class="form-control" type="text" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="col-form-label">Close</label>
                                                        <div class="form-group">
                                                            <a class="delete" href="#"><i class="fa fa-close"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-12">
                                    <button type="button" class="btn-secondry add-item m-r5"><i class="fa fa-fw fa-plus-circle"></i>Add Item</button>
                                    <button type="reset" class="btn">Save changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Your Profile Views Chart END-->
        </div>
    </div>
</main>