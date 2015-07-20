<?php

return [

    /*
    |--------------------------------------------------------------------------
    | resources/views/account/auth/create.blade.php
    |--------------------------------------------------------------------------
    */
   
    'create.title'          => 'Create Account',
    'create.heading'        => 'Create New Account',
    'create.account'        => 'Account Name:',
    'create.email'          => 'Email Address:',
    'create.password'       => 'Password:',
    'create.confirmation'   => 'Password Again:',
    'create.player'         => 'Character Name:',
    'create.suggestname'    => 'suggest name',
    'create.sex'            => 'Sex:',
    'create.vocation'       => 'Vocation:',
    'create.world'          => 'World:',
    'create.suggestworld'   => 'suggest game world',
    'create.terms'          => 'Please select the following check box:',
    'create.accept'         => 'I agree to the <a href=":terms" target="_blank">:server Service Agreement</a>, the <a href=":rules" target="_blank">:server Rules</a> and the <a href=":privacy" target="_blank">:server Privacy Policy</a>.',
    'create.submit'         => 'Submit',


    /*
    |--------------------------------------------------------------------------
    | resources/views/account/auth/login.blade.php
    |--------------------------------------------------------------------------
    */

    'login.title'       => 'Account Management',
    'login.heading'     => 'Account Login',
    'login.login'       => 'Login',
    'login.lost'        => 'Account Lost?',
    'login.name'        => 'Account Name:',
    'login.password'    => 'Password:',
    'login.new.heading' => 'New to :server?',
    'login.new.player'  => 'New Player',
    'login.new.create'  => 'Create Account',
    'login.new.server'  => ':server...',
    'login.new.one'     => '... where hardcore gaming meets fantasy.',
    'login.new.two'     => '... where friendships last a lifetime.',
    'login.new.three'   => '... unites adventurers since 1997!',

    /*
    |--------------------------------------------------------------------------
    | resources/views/account/auth/logout.blade.php
    |--------------------------------------------------------------------------
    */
   
    'logout.title'      => 'Account Management',
    'logout.heading'    => 'Logout Successful',
    'logout.content'    => 'You have logged out of your :server account. In order to view your account you need to <a href=":url">log in</a> again.',

    /*
    |--------------------------------------------------------------------------
    | resources/views/account/character/create.blade.php
    |--------------------------------------------------------------------------
    */
   
    'character.create.title'        => 'Account Management',
    'character.create.preamble'     => '<p>Please choose a name and sex for your character as well as the game world on which you want the character to live. If you cannot think of any fantasy names, click on the link below the name field to get some suggestions for a name.</p><p>In any case the name must not violate the naming conventions stated in the <a href=":rules">:server Rules</a>, or your character might get deleted or name locked.</p>',
    'character.create.heading'      => 'Create Character',
    'character.create.name'         => 'Name',
    'character.create.sex'          => 'Sex',
    'character.create.suggestname'  => 'suggest name',
    'character.create.vocation'     => 'Vocation:',
    'character.create.world'        => 'World:',
    'character.create.suggestworld' => 'suggest game world',
    'character.create.submit'       => 'Submit',
    'character.create.back'         => 'Back',

    /*
    |--------------------------------------------------------------------------
    | resources/views/account/character/delete.blade.php
    |--------------------------------------------------------------------------
    */

    'character.delete.title'    => 'Account Management',
    'character.delete.preamble' => '<p>To delete this character enter your password and click on "Submit".<br>You can undelete the character within the first 2 months (60 days) after the deletion.<br>After this time the character is deleted for good and cannot be restored anymore!</p>',
    'character.delete.heading'  => 'Delete Character',
    'character.delete.player'   => 'Character Name:',
    'character.delete.password' => 'Password:',
    'character.delete.submit'   => 'Submit',
    'character.delete.back'     => 'Back',

    /*
    |--------------------------------------------------------------------------
    | resources/views/account/character/edit.blade.php
    |--------------------------------------------------------------------------
    */

    'character.edit.title'          => 'Account Management',
    'character.edit.characterdata'  => 'Character Data',
    'character.edit.characterinfo'  => 'Edit Character Information',
    'character.edit.preamble'       => '<p>Here you can see and edit the information about your character.<br>If you do not want to specify a certain field, just leave it blank.</p>',
    'character.edit.name'           => 'Name:',
    'character.edit.changename'     => 'Change Name',
    'character.edit.world'          => 'World:',
    'character.edit.changeworld'    => 'Change World',
    'character.edit.sex'            => 'Sex:',
    'character.edit.changesex'      => 'Change Sex',
    'character.edit.hideaccount'    => 'Hide Account:',
    'character.edit.hide'           => 'check to hide your account information',
    'character.edit.comment'        => 'Comment:',
    'character.edit.signature'      => 'Forum Signature:',
    'character.edit.submit'         => 'Submit',
    'character.edit.back'           => 'Back',

    /*
    |--------------------------------------------------------------------------
    | resources/views/account/character/name.blade.php
    |--------------------------------------------------------------------------
    */

    'character.name.title'      => 'Account Management',
    'character.name.preamble'   => '<p>Please enter the new name for your character. Note that also your new name must not violate the naming conventions stated in the <a href=":rules">:server Rules</a> or your character will get name locked and your account might be punished.</p>',
    'character.name.heading'    => 'Change Character Name',
    'character.name.current'    => 'Current Character Name:',
    'character.name.new'        => 'New Character Name:',
    'character.name.submit'     => 'Submit',
    'character.name.back'       => 'Back',

    /*
    |--------------------------------------------------------------------------
    | resources/views/account/character/sex.blade.php
    |--------------------------------------------------------------------------
    */
   
    'character.sex.title'   => 'Account Management',
    'character.sex.heading' => 'Change Character Sex',
    'character.sex.content' => 'Do you really want to change the sex of your character <strong>:name</strong>?',
    'character.sex.yes'     => 'Yes',
    'character.sex.back'    => 'Back',

    /*
    |--------------------------------------------------------------------------
    | resources/views/account/character/world.blade.php
    |--------------------------------------------------------------------------
    */
   
    'character.world.title'         => 'Account Management',
    'character.world.preamble'      => '<p>Before you initiate a transfer of your character to another game world, please make sure that you are aware of the following points:</p>
                                        <ul>
                                            <li>In case you get a red or black skull or a final warning after having paid for a pending character world transfer, you will have to wait until the final warning or the skull mark have been gone before you can move to the new game world.</li>
                                            <li>Note that you can only move to game worlds with stricter or the same PvP rules. Therefore, if you move your character to an optional PvP game world, it will be impossible to move it back to an open or hardcore PvP game world at a later point.</li>
                                            <li>If you move to a new game world make sure that you select one that is close to your home. If a Brazilian player moves from a game world located in the USA to one located in Europe, he will very likely experience a worse connection than before.</li>
                                        </ul>
                                        <p>In order to transfer your character to another game world, you have to fulfil the following requirements:</p>',
    'character.world.heading'       => 'Character Data',
    'character.world.continue'      => 'Continue',
    'character.world.back'          => 'Back',
    'character.world.transfered'    => 'Character has not been transferred within the last 6 months.',
    'character.world.level'         => 'Conduct level is low enough.',
    'character.world.guild'         => 'Character is not a member of a guild.',
    'character.world.marriage'      => 'Character is not married.',
    'character.world.house'         => 'Character owns no house.',
    'character.world.beginner'      => 'You have left the beginner\'s island.',
    'character.world.name'          => 'Name:',
    'character.world.current'       => 'Current World:',
    'character.world.target'        => 'Possible Target World:',
    'character.world.requirement'   => 'Requirement Status:',
    'character.world.available'     => 'available',

    /*
    |--------------------------------------------------------------------------
    | resources/views/account/email/awaiting.blade.php
    |--------------------------------------------------------------------------
    */
   
    'email.awaiting.title'      => 'Account Management',
    'email.awaiting.heading'    => 'Change of Email Address',
    'email.awaiting.content'    => 'A request has been submitted to change the email address of this account to <strong>:email</strong>.<br>The actual change will take place on <strong>:date</strong>.<br>If you do not want to change your email address, please click on "Cancel".',
    'email.awaiting.cancel'     => 'Cancel',
    'email.awaiting.back'       => 'Back',

    /*
    |--------------------------------------------------------------------------
    | resources/views/account/email/cancelled.blade.php
    |--------------------------------------------------------------------------
    */
   
    'email.cancelled.title'     => 'Account Management',
    'email.cancelled.heading'   => 'Email Address Change Cancelled',
    'email.cancelled.content'   => 'Your request to change the email address of your account has been cancelled. The email address will not be changed.',
    'email.cancelled.back'      => 'Back',

    /*
    |--------------------------------------------------------------------------
    | resources/views/account/email/form.blade.php
    |--------------------------------------------------------------------------
    */
   
    'email.form.title'      => 'Account Management',
    'email.form.heading'    => 'Change Email',
    'email.form.preamble'   => '<p>Please enter your password and the new email address. Make sure that you enter a valid email address which you have access to. <strong>For security reasons, the actual change will be finalised after a waiting period of :days days.</strong></p>',
    'email.form.email'      => 'New Email Address:',
    'email.form.password'   => 'Password:',
    'email.form.submit'     => 'Submit',
    'email.form.back'       => 'Back',

    /*
    |--------------------------------------------------------------------------
    | resources/views/account/email/request.blade.php
    |--------------------------------------------------------------------------
    */
   
    'email.request.title'   => 'Account Management',
    'email.request.heading' => 'New Email Address Requested',
    'email.request.content' => 'You have requested to change your email address to <strong>:email</strong>. The actual change will take place after a waiting period of :days days, during which you can cancel the request at any time.',
    'email.request.back'    => 'Back',

    /*
    |--------------------------------------------------------------------------
    | resources/views/account/email/confirmation.blade.php
    |--------------------------------------------------------------------------
    */
   
    'email.confirmation.title'      => 'Account Management',
    'email.confirmation.heading'    => 'Confirmation Email Sent',
    'email.confirmation.content'    => 'An email containing the confirmation link as well as instructions on how to confirm your account was sent to your email address:',
    'email.confirmation.back'       => 'Back',

    /*
    |--------------------------------------------------------------------------
    | resources/views/account/recovery/index.blade.php
    |--------------------------------------------------------------------------
    */
   
    'recovery.index.title' => 'Lost Account',

    /*
    |--------------------------------------------------------------------------
    | resources/views/account/download.blade.php
    |--------------------------------------------------------------------------
    */
   
    'download.title' => 'Download Client',

    /*
    |--------------------------------------------------------------------------
    | resources/views/account/overview.blade.php
    |--------------------------------------------------------------------------
    */
   
    'overview.title'                   => 'Account Management',
    'overview.welcome'                 => 'Welcome to your account!',
    'overview.welcomename'             => 'Weclome to your account, :name!',
    'overview.heading'                 => 'Account Status',
    'overview.manageaccount'           => 'Manage Account',
    'overview.getpremium'              => 'Get Premium',
    'overview.logout'                  => 'Logout',
    'overview.free'                    => 'Free Account',
    'overview.freedesc'                => 'To benefit from our great premium features, get Premium Time for your account.',
    'overview.email.edit'              => 'Edit',
    'overview.email.heading'           => 'There is an email change request for the account!',
    'overview.email.content'           => 'A request has been submitted to change the email address of this account to <strong>:email</strong>. After a waiting period of <strong>:days days</strong> you can accept the new email address and finish the process. Please cancel the request if you do not want your email address to be changed! Also cancel the request if you have no access to the new email address!',
    'overview.confirm.heading'         => 'Your account is not confirmed!',
    'overview.confirm.content'         => 'Please check your emails to confirm your account.',
    'overview.confirm.alert'           => '<h3>Confirm Account</h3><p>An email has been sent to the address you have entered while you have created your account. Please check your emails to confirm your account.</p><p>In case you have lost your confirmation email or did not receive it, you can request the email containing the confirmation link for your account again.</p><p>If you no longer have access to the email address the confirmation link was sent to, you can change the email address and the email will be sent again automatically.</p>',
    'overview.confirm.request'         => 'Re-request Email',
    'overview.confirm.edit'            => 'Change Email',
    'overview.unregistered.heading'    => 'Your account is not registered!',
    'overview.unregistered.register'   => 'Register Account',
    'overview.unregistered.content'    => 'You can register your account for increased protection. Click on "Register Account" and get your free recovery key today!',
    'overview.characters.heading'      => 'Characters',
    'overview.characters.name'         => 'Name',
    'overview.characters.world'        => 'World',
    'overview.characters.status'       => 'Status',
    'overview.characters.hidden'       => 'hidden',
    'overview.characters.edit'         => 'Edit',
    'overview.characters.delete'       => 'Delete',
    'overview.characters.empty'        => 'No characters yet.',
    'overview.characters.create'       => 'Create Character',

    /*
    |--------------------------------------------------------------------------
    | resources/views/account/manage.blade.php
    |--------------------------------------------------------------------------
    */
   
    'manage.title'                      => 'Account Management',
    'manage.generalinfo'                => 'General Information',
    'manage.availableproducts'          => 'Products Available',
    'manage.readyproducts'              => 'Products Ready To Use',
    'manage.noreadyproducts'            => 'You currently have no products available to use.',
    'manage.history'                    => 'History',
    'manage.registration.heading'       => 'Registration',
    'manage.registration.confirm'       => 'After you <a href=":url">confirmed</a> your account you can register your account.',
    'manage.registration.unregistered'  => '<strong class="error">Your account is not registered yet.</strong>',
    'manage.registration.register'      => 'Register Account',
    'manage.registration.address'       => 'Address:',
    'manage.registration.birthday'      => 'Date of Birth:',
    'manage.registration.gender'        => 'Gender:',
    'manage.registration.male'          => 'Male',
    'manage.registration.female'        => 'Female',
    'manage.registration.edit'          => 'Edit',
    'manage.getpremium'                 => 'Get Premium',
    'manage.overview'                   => 'Overview',
    'manage.account'                    => 'Account Name:',
    'manage.email'                      => 'Email Address:',
    'manage.created'                    => 'Created:',
    'manage.lastlogin'                  => 'Last Login:',
    'manage.status'                     => 'Account Status:',
    'manage.free'                       => 'Free Account',
    'manage.changepassword'             => 'Change Password',
    'manage.changeemail'                => 'Change Email',
    'manage.renameaccount'              => 'Rename Account',
    'manage.terminateaccount'           => 'Terminate Account',
    'manage.getpremiumtime'             => 'Get Premium Time',
    'manage.premiumtime'                => 'Premium Time',
    'manage.premiumtimedesc'            => 'Buy low-priced Premium Time to add it to your own account.',
    'manage.getpremiumscroll'           => 'Get Premium Scroll',
    'manage.premiumscrolls'             => 'Premium Scrolls',
    'manage.premiumscrollsalert'        => '<h3>Premium Scrolls</h3>
                                            <p>Each Premium Scroll represents a 30 days period of Premium Time.</p>
                                            <ul>
                                                <li>You can use this Premium Scrolls to extend the Premium Time of your account.</li>
                                                <li>You can transfer Premium Scrolls to one of your characters into the game. Premium Scrolls can be traded freely with other characters through the market or the safe trade option.</li>
                                            </ul>',
    'manage.premiumscrollsdesc'         => 'Buy Premium Scrolls to transfer Premium Time to the game or to use it for your own account.',
    'manage.getextraservice'            => 'Get Extra Services',
    'manage.extraservices'              => 'Extra Services',
    'manage.extraservicesalert'         => '<h3>Extra Services</h3><p>It is strongly recommend that you set up an extra service before you purchase it.</p><p>This way you can ensure that your desired name is available and reserved for you or that you have selected a game world to which you are allowed to move.</p>',
    'manage.extraservicesdesc'          => 'Buy an extra service to transfer a character to another game world, to change your character\'s name or sex, to change your account name, or to get a new recovery key.',
    'manage.getmount'                   => 'Get Mount',
    'manage.mounts'                     => 'Mounts',
    'manage.mountsdesc'                 => 'Buy your characters one or more of the fabulous mounts offered here.',
    'manage.getoutfit'                  => 'Get Outfit',
    'manage.outfits'                    => 'Outfits',
    'manage.outfitsdesc'                => 'Buy your characters one or more of the fancy outfits offered here.',
    'manage.usegamecode'                => 'Use Game Code',
    'manage.gamecodes'                  => 'Game Codes',
    'manage.gamecodesdesc'              => 'Enter your game code for Premium Time, Premium Scrolls or an Extra Service.',
    'manage.date'                       => 'Date',
    'manage.voucher'                    => 'Voucher',
    'manage.view'                       => 'View',
    'manage.viewhistory'                => 'View History',
    'manage.premiumhistory'             => 'Premium History',
    'manage.premiumhistorydesc'         => 'Contains all historical data about your Premium Scrolls and Premium Times.',
    'manage.paymenthistory'             => 'Payments History',
    'manage.paymenthistorydesc'         => 'Contains all historical data of your payments.',
    'manage.extrahistory'               => 'Extra Services History',
    'manage.extrahistorydesc'           => 'Contains all historical data about your Extra Services.',
    'manage.voucherhistory'             => 'Vouchers History',
    'manage.voucherhistorydesc'         => 'Contains all historical data about your account vouchers.',

    /*
    |--------------------------------------------------------------------------
    | resources/views/account/password.blade.php
    |--------------------------------------------------------------------------
    */
   
    'password.title'        => 'Account Management',
    'password.preamble'     => '<p>Please enter your current password and a new password. Please verify your new password by entering it twice.</p>',
    'password.heading'      => 'Change Password',
    'password.new'          => 'New Password:',
    'password.confirmation' => 'New Password Again:',
    'password.current'      => 'Current Password:',
    'password.submit'       => 'Submit',
    'password.back'         => 'Back',

    /*
    |--------------------------------------------------------------------------
    | resources/views/account/rename.blade.php
    |--------------------------------------------------------------------------
    */
   
    'rename.title'      => 'Account Management',
    'rename.preamble'   => '<p>Please enter your new account name. Please use a secure combination of letters and numbers that cannot be guessed easily.</p>',
    'rename.heading'    => 'Change Account Name',
    'rename.current'    => 'Current Account Name:',
    'rename.new'        => 'New Account Name:',
    'rename.submit'     => 'Submit',
    'rename.back'       => 'Back',

    /*
    |--------------------------------------------------------------------------
    | resources/views/account/terminate.blade.php
    |--------------------------------------------------------------------------
    */
   
    'terminate.title'       => 'Account Management',
    'terminate.preamble'    => '<p>Do you really want to terminate your :server account and delete all of your characters?</p>',
    'terminate.heading'     => 'Terminate Account',
    'terminate.password'    => 'Password:',
    'terminate.submit'      => 'Submit',
    'terminate.back'        => 'Back',

    /*
    |--------------------------------------------------------------------------
    | resources/views/account/registration/form.blade.php
    |--------------------------------------------------------------------------
    */
   
    'register.index.title'        => 'Account Management',
    'register.index.preheading'   => 'Register Account',
    'register.index.date'         => 'Registration Date',
    'register.index.verification' => 'Verification',
    'register.index.recoverykey'  => 'Recovery Key',
    'register.index.preamble'     => '<p>Account registration offers many important advantages:</p>
                                <ul>
                                    <li>Registered users get a recovery key, which can be used to recover their accounts if they have lost access to the assigned email address.</li>
                                    <li>Registered users can request a new recovery key for a small fee.</li>
                                    <li>Extra Services can only be bought for registered accounts.</li>
                                    <li>Finally, only registered users can become tutor.</li>
                                </ul>
                                <p><strong>NOTE:</strong> The data given in the registration will be used exclusively for sending recovery letters and compiling internal statistical surveys. It will be treated in a strictly confidential manner. For details please see the <a href=":privacy">:server Privacy Policy</a>.</p>
                                <p>Please enter correct and complete data to make sure we can provide you with the best possible support. Above all, give your full address to make sure that our postal recovery letters will reach you. Note that all data entered in the registration can be re-edited later on, except for your gender and date of birth.</p>',
    'register.index.heading'      => 'Enter Registration Data',
    'register.index.firstname'    => 'First Name:',
    'register.index.surname'      => 'Last Name:',
    'register.index.country'      => 'Country:',
    'register.index.birthday'     => 'Date of Birth:',
    'register.index.gender'       => 'Gender:',
    'register.index.female'       => 'Female',
    'register.index.male'         => 'Male',
    'register.index.continue'     => 'Continue',
    'register.index.back'         => 'Back',

    /*
    |--------------------------------------------------------------------------
    | resources/views/account/registration/verify.blade.php
    |--------------------------------------------------------------------------
    */
   
    'register.verify.title'        => 'Account Management',
    'register.verify.preheading'   => 'Register Account',
    'register.verify.date'         => 'Registration Date',
    'register.verify.verification' => 'Verification',
    'register.verify.recoverykey'  => 'Recovery Key',
    'register.verify.preamble'     => '<p>Please review the data you have entered. Pay special attention to the address. It should be as accurate as possible to make sure that our postal recovery letters will reach you. If you would like to correct data, click on "Back".</p>',
    'register.verify.heading'      => 'Verify Registration Data',
    'register.verify.firstname'    => 'First Name:',
    'register.verify.surname'      => 'Last Name:',
    'register.verify.country'      => 'Country:',
    'register.verify.birthday'     => 'Date of Birth:',
    'register.verify.gender'       => 'Gender:',
    'register.verify.female'       => 'Female',
    'register.verify.male'         => 'Male',
    'register.verify.confirmation' => 'Please enter your password to confirm your registration data.',
    'register.verify.password'     => 'Password:',
    'register.verify.submit'       => 'Submit',
    'register.verify.back'         => 'Back',

    /*
    |--------------------------------------------------------------------------
    | resources/views/account/registration/success.blade.php
    |--------------------------------------------------------------------------
    */
   
    'register.key.title'        => 'Account Management',
    'register.key.preheading'   => 'Register Account',
    'register.key.date'         => 'Registration Date',
    'register.key.verification' => 'Verification',
    'register.key.recoverykey'  => 'Recovery Key',
    'register.key.heading'      => 'Account Registered',
    'register.key.content'      => '<p>Thank you for registering your account! You can now recover your account if you have lost access to the assigned email 
                                    address by using the following</p>
                                    <h1 class="text-center">Recovery Key: :key</h1>
                                    <p><strong>Important:</strong></p>
                                    <ul>
                                        <li>Write down this recovery key carefully.</li>
                                        <li>Store it at a safe place! Do not save it on your computer!</li>
                                        <li>You will not receive an email containing this recovery key.</li>
                                        <li>If you lose your recovery key, you can request a new one for a small fee at the Lost Account Interface.</li>
                                    </ul>',
    'register.key.back'         => 'Back',

];
