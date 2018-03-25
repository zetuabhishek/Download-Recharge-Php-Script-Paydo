<?php
 include '../theme/header.php';
?>
<div class="tab-pane active" id="Login">
                                        <form  class="form-horizontal" action="actionlogin.php" method="post">
                                        <div class="form-group <?php echo (!empty($dis_mobile_err)) ? 'has-error' : ''; ?>">
                                            <label for="username" class="col-sm-2 control-label">
                                               Mobile No</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="username" name="mobile" placeholder="registered mobile number" value="<?php echo $dis_mobile; ?>"/>
                                            </div>
											<span class="help-block"><?php echo $dis_mobile_err; ?></span>
                                        </div>
                                        <div class="form-group <?php echo (!empty($dis_password_err)) ? 'has-error' : ''; ?>">
                                            <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                                Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="password" 
                                                     required="required" />
												<span class="help-block"><?php echo $dis_password_err; ?></span>	 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-2">
                                            </div>
                                            <div class="col-sm-10">
                                                <input type="submit" name="submit" class="btn btn-primary" value="Login"/>
                                                <a href="javascript:;" class="agileits-forgot">Forgot your password?</a>
                                            </div>
                                        </div>
                                        </form>
                                    </div>

<?php
 include './theme/footer.php';
?>