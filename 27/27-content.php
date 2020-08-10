<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-27">
    <div class="container myContainer">
        <div class="searchArea">
            <div class="selectArea">
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <div class="label-select">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>All Locations</option>
                                            <option>California</option>
                                            <option>New York</option>
                                            <option>Utah</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="label-select">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>All Sub-locations</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="label-select">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>All Status</option>
                                            <option>For rent</option>
                                            <option>Open house</option>
                                            <option>Pending</option>
                                            <option>Sale</option>
                                            <option>Sold</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="label-select">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>All Types</option>
                                            <option>Apartment</option>
                                            <option>Co-op</option>
                                            <option>Condo</option>
                                            <option>Single family home</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="label-select">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>No.of Bedrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="label-select">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>No.of Bathrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="range">
                                    <form style="width: 100%;">
                                        <div class="form-group range">
                                            <label for="formControlRange1">Price</label>
                                            <input type="range" class="form-control-range" id="formControlRange1">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="range">
                                    <form style="width: 100%;">
                                        <div class="form-group range">
                                            <label for="formControlRange2">Area</label>
                                            <input type="range" class="form-control-range" id="formControlRange2">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="searchProperty">
                            Search Property
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>