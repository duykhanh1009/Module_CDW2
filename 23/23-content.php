<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-23">
    <div class="container">
        <div class="title">Property Features</div>
        <div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div >
                        <span><i class="fa fa-check-circle"></i></span> Attic
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="unActive">
                        <span><i class="fa fa-times-circle"></i></span> Gas Heat
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div>
                        <span><i class="fa fa-check-circle"></i></span> Wine Cellar
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div>
                        <span><i class="fa fa-check-circle"></i></span> Basketball Court
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="unActive">
                        <span><i class="fa fa-times-circle"></i></span> Trash Compactors
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="unActive">
                        <span><i class="fa fa-times-circle"></i></span> Gym
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div>
                        <span><i class="fa fa-check-circle"></i></span> Fireplace
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="unActive">
                        <span><i class="fa fa-times-circle"></i></span> Pool
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div>
                        <span><i class="fa fa-check-circle"></i></span> Lake View
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="unActive">
                        <span><i class="fa fa-times-circle"></i></span> Solar Heat
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="unActive">
                        <span><i class="fa fa-times-circle"></i></span> Storm Windows
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div>
                        <span><i class="fa fa-check-circle"></i></span> Separate Shower
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="unActive">
                        <span><i class="fa fa-times-circle"></i></span> Wet Bar
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="unActive">
                        <span><i class="fa fa-times-circle"></i></span> Remodeled
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div>
                        <span><i class="fa fa-check-circle"></i></span> Skylights
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="unActive">
                        <span><i class="fa fa-times-circle"></i></span> Skylights
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="unActive">
                        <span><i class="fa fa-times-circle"></i></span> Open Entertaining Kitchen
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div>
                        <span><i class="fa fa-check-circle"></i></span> Golf Course
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="unActive">
                        <span><i class="fa fa-times-circle"></i></span> Health Club
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div>
                        <span><i class="fa fa-check-circle"></i></span> Office/Den
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="unActive">
                        <span><i class="fa fa-times-circle"></i></span> Laundry
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>