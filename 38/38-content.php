<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-38">
    <div class="container" style="padding: 20px 0;">
        <div class="group-tabs">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="nav-item">
                    <a class="nav-link active" href="#home" aria-controls="home" role="tab" data-toggle="tab">Login</a>
                </li>
                <li role="presentation" class="nav-item">
                    <a class="nav-link" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Request new password</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <div class="form-item form-type-textfield form-item-name">
                        <label for="edit-name" class="labelRequired">Username <span style="color: red;" class="form-required" title="This field is required.">*</span></label>
                        <input class="form-control input-lg form-text required" type="text" id="edit-name" name="name" value="" size="60" maxlength="60">
                        <div class="description">Enter your Citilights username.</div>
                    </div>
                    <div class="form-item form-type-textfield form-item-name">
                        <label for="edit-name" class="labelRequired">Password <span style="color: red;" class="form-required" title="This field is required.">*</span></label>
                        <input class="form-control input-lg form-text required" type="text" id="edit-name" name="name" value="" size="60" maxlength="60">
                        <div class="description">Enter the password that accompanies your username.</div>
                    </div>
                    <fieldset class="captcha form-wrapper">
                        <legend><span class="fieldset-legend">CAPTCHA</span></legend>
                        <div class="fieldset-wrapper">
                            <div class="fieldset-description">This question is for testing whether or not you are a human visitor and to prevent automated spam submissions.</div><input type="hidden" name="captcha_sid" value="848">
                            <!-- <input type="hidden" name="captcha_token" value="10f88f8eeb3e7b028117d472438f3d92"> -->
                            <img src="./38/images/image_captcha.png" width="180" height="60" alt="Image CAPTCHA" title="Image CAPTCHA">
                            <div class="form-item form-type-textfield form-item-captcha-response">
                                <label for="edit-captcha-response" class="labelRequired">What code is in the image? <span style="color: red;" class="form-required" title="This field is required.">*</span></label>
                                <input type="text" id="edit-captcha-response" name="captcha_response" value="" size="15" maxlength="128" class="form-text required" autocomplete="off">
                                <div class="description">Enter the characters shown in the image.</div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="login">
                        <div class="btnLogin">Log in</div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="profile">
                    <div class="form-item form-type-textfield form-item-name">
                        <label for="edit-name" class="labelRequired">Username or e-mail address <span style="color: red;" class="form-required" title="This field is required.">*</span></label>
                        <input class="form-control input-lg form-text required" type="text" id="edit-name" name="name" value="" size="60" maxlength="60">
                    </div>
                    <fieldset class="captcha form-wrapper">
                        <legend><span class="fieldset-legend">CAPTCHA</span></legend>
                        <div class="fieldset-wrapper">
                            <div class="fieldset-description">This question is for testing whether or not you are a human visitor and to prevent automated spam submissions.</div><input type="hidden" name="captcha_sid" value="848">
                            <!-- <input type="hidden" name="captcha_token" value="10f88f8eeb3e7b028117d472438f3d92"> -->
                            <img src="./38/images/image_captcha.png" width="180" height="60" alt="Image CAPTCHA" title="Image CAPTCHA">
                            <div class="form-item form-type-textfield form-item-captcha-response">
                                <label for="edit-captcha-response" class="labelRequired">What code is in the image? <span style="color: red;" class="form-required" title="This field is required.">*</span></label>
                                <input type="text" id="edit-captcha-response" name="captcha_response" value="" size="15" maxlength="128" class="form-text required" autocomplete="off">
                                <div class="description">Enter the characters shown in the image.</div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="login">
                        <div class="btnLogin">E-mail new password</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>