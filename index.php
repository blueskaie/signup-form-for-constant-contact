<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <link href="https://visitor.r20.constantcontact.com/core/css/jquery-ui/1.8.17/jquery.ui.base.css?version=20161010091324" media="all" rel="stylesheet" type="text/css"/>
    <link href="https://visitor.r20.constantcontact.com/core/css/base.css?version=20161010091324" rel="stylesheet" type="text/css"/>
    <link href="https://visitor.r20.constantcontact.com/core/css/visitor.css?version=20161010091324" rel="stylesheet" type="text/css"/>   
    <link href="http://www.constantcontact.com/favicon.ico?version=20161010091324" rel="icon"/>
    <link href="https://visitor.r20.constantcontact.com/core/css/jquery/1.7.1/plugins/jquery.ux.infoPopup.css?version=20161010091324" media="all" rel="stylesheet" type="text/css"/>
    <link href="my.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="screen-width-indent">
        <div id="visitorSiteLogo">
            <img src="images/logo.jpg" border="0"/>
        </div>
        <div>
            <div id="optin" class="container">
                <h1 style="text-align:center">Love the Waterfront? </h1>
                <?php
                    $errstr = '<div id="globalError" class="notify notify-large-error">Please correct errors on the indicated fields for a successful submission.</div>';
                    if (!empty($_REQUEST['totalerror'])) echo $errstr;
                ?>
                <form id="addForm" name="addForm" method="post" action="./ccvender/signup.php">
                    <div class="form-background-wrapper clearfix">
                        <div class="colLeft">
                            <p>Join our e-Newsletter for your chance to WIN Porter Airlines flights! Plus, get info on contests, unique offers, marketing tips and FREE events on Toronto's 
                                Waterfront. We'll send you a few emails a month and you'll be able to unsubscribe at any time. (We never share your information!)
                            </p>
                            <div id="subProfile">
                                <fieldset>
                                    <div class="prop-input clearfix" data-name="Email Address">
                                        <label for="EmailAddress"><span class="required">*</span>Email Address</label>
                                        <div id="noEmailSignupError"><span class="error-secondary" id="update-profile-required-error">
                                            <?php 
                                                if (!empty($_REQUEST['emailerror'])) echo "Please enter your email address in name@email.com format.";
                                                if (!empty($_REQUEST['emailexisterror'])) echo "Already exist this email address.";
                                            ?>
                                        </span></div>
                                        <input type="text" name="EmailAddress" value="" id="EmailAddress" maxlength="50"/>
                                    </div>
                                    <div class="prop-input clearfix" data-name="First Name">
                                        <label for="FirstName"><span class="required">*</span>First Name</label>
                                        <div id="noEmailSignupError"><span class="error-secondary" id="update-profile-required-error"><?php if (!empty($_REQUEST['firstnameerror'])) echo "This item is required"; ?></span></div>
                                        <input type="text" name="FirstName" value="" id="FirstName" maxlength="50"/>
                                    </div>
                                    <div class="prop-input clearfix" data-name="Last Name">
                                        <label for="LastName"><span class="required">*</span>Last Name</label>
                                        <div id="noEmailSignupError"><span class="error-secondary" id="update-profile-required-error"><?php if (!empty($_REQUEST['lastnameerror'])) echo "This item is required"; ?></span></div>
                                        <input type="text" name="LastName" value="" id="LastName" maxlength="50"/>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div id="colLeftContent" class="colLeft">
                            <div class="interest">Email Lists</div>
                            <div id="intCatSelection" class="background-wrapper clearfix">
                                <fieldset>
                                    <?php
                                        $emailliststr = '<div id="intCatBottom"><span class="error-secondary">Please select at least one mailing list.</span></div>';
                                        if (!empty($_REQUEST['emaillisterror'])) echo $emailliststr;
                                    ?>
                                    <div class="opt-check clearfix">
                                        <input type="checkbox" id="list_Member (Do you work for a local business located within The Waterfront BIA boundaries? (East of Stadium Rd., west of Yonge St., south of Harbour St. & the south side of Lake Shore Blvd. West.)" name="Lists[]" value="Member (Do you work for a local business located within The Waterfront BIA boundaries? (East of Stadium Rd., west of Yonge St., south of Harbour St. & the south side of Lake Shore Blvd. West.)" name="Lists[]" id="list_Member (Do you work for a local business located within The Waterfront BIA boundaries? (East of Stadium Rd., west of Yonge St., south of Harbour St. & the south side of Lake Shore Blvd. West.)"/>
                                        <label for="list_Member (Do you work for a local business located within The Waterfront BIA boundaries? (East of Stadium Rd., west of Yonge St., south of Harbour St. & the south side of Lake Shore Blvd. West.)">Member (Do you work for a local business located within The Waterfront BIA boundaries? (East of Stadium Rd., west of Yonge St., south of Harbour St. & the south side of Lake Shore Blvd. West.)</label>
                                    </div>
                                    <div class="opt-check clearfix">
                                        <input type="checkbox" id="list_Other (Main database)" name="Lists[]" value="Other (Main database)"/>
                                        <label for="list_Other (Main database)">Other (Main database)</label>
                                    </div>
                                    <div class="opt-check clearfix">
                                        <input type="checkbox" id="list_WBIA Friends (Do you do business with a member of The Waterfront BIA team?)" name="Lists[]" value="WBIA Friends (Do you do business with a member of The Waterfront BIA team?)"/>
                                        <label for="list_WBIA Friends (Do you do business with a member of The Waterfront BIA team?)">WBIA Friends (Do you do business with a member of The Waterfront BIA team?)</label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <input type="hidden" name="SuccessURL" value="/ccsignup/thank.html" />
                        <input type="hidden" name="FailureURL" value="/ccsignup/index.php" />
                        <div class="clear"></div>
                        <div class="visitorActions clearfix">
                            <input type="submit" name="signup" id="signup" class="btn btn-primary full" value="Sign Up" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="txt-mid foot-container update-profile-footer-container">
                <div class="footer_copy update-profile-footer">
                    By submitting this form, you are granting: The Waterfront Business Improvement Area (BIA), 370 Queens Quay West, Toronto, Ontario, M5V 3J3 Canada, http://www.waterfrontbia.com permission to email you. You can revoke permission to mail to your email address at any time using the <img src="images/safe_unsubscribe_envelop.gif" width="12" height="9" border="0" alt="SafeUnsubscribe" title="SafeUnsubscribe" />
                    <strong>SafeUnsubscribe&#0174;</strong> link, found at the bottom of every email. We take your privacy seriously (to see for yourself, please read our <a href="http://www.constantcontact.com/legal/privacy-statement" target="_blank">Email Privacy Policy</a>). Emails are serviced by Constant Contact.
                </div>
            </div>
        </div>
    </div>
</body>