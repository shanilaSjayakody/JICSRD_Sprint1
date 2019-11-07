<?php $this->load->library('jics'); ?>

<html>

<head>
    <title>CW | Report</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- <link rel="stylesheet" href="css/print-report.css"> -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style-report.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/print-report.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/print-report.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/report-bootstrap.min.css')?>">



    <script src="<?= base_url('assets/report/jquery-3.4.1.min.js')?>"></script>

    <script src="<?= base_url('assets/report/highcharts.js')?>"></script>
    <script src="<?= base_url('assets/report/modules_data.js')?>"></script>
    <script src="<?= base_url('assets/report/modules_exporting.js')?>"></script>
    <script src="<?= base_url('assets/report/modules_export-data.js')?>"></script>



    <!-- <script src="https://code.highcharts.com/highcharts.src.js"></script> -->
        <!--   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
            <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        </head>

        <div class="footer">
            <hr>
            <p class="float-right">Report Ref: <b>0000202092019</b></p>
            <p class="float-left">Report Date: <b>30-08-2019 11:14:12</b>
                <br>ASIC Extract Date: <b>30-08-2019
                    <!-- API --> 11:14:12
                    <!-- API --></b></p>
                </div> 

                <div class="report-body">
                    <page size="A4">
                        <div class="header"></div>
                        <div class="content">
                            <div class="report-head cover-page" >
                                <img src="<?= base_url('assets/img/logo-report.png')?>" alt="" class="main-logo">
                                <p>Phone 1300 50 13 12 | Email admin@creditorwatch.com.au</p>
                                <h1>Financial Analysis Enriched Credit Report</h1>
                                <div class="d-flex flex-wrap justify-content-center pt-2 ">
                                    <button class="btn btn-primary mt-5 printbtn" onclick="window.print();" style="font-size:30px">Print this page</button></div>
                                </div>
                            </div>

                        </page>

                        <page size="A4">

                            <div class="header"></div>
                            <div class="content">
                                <h2>Organisation Summary</h2>
                                <div class="cardview">
                                    <h4 class="text-center">ABR Summary</h4>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Main Name</th>
                                                <!-- API -->
                                                <td>GREYHOUND AUSTRALIA PTY LTD</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Main Trading Name</th>
                                                <!-- API -->
                                                <td>GREYHOUND AUSTRALIA</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">ABN</th>
                                                <!-- API -->
                                                <td>59 104 326 383</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Entity Status</th>
                                                <!-- API -->
                                                <td>Active</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Entity Status Effective from</th>
                                                <!-- API -->
                                                <td>04-04-2003</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">ABN is Current</th>
                                                <!-- API -->
                                                <td>Yes</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Entity Type</th>
                                                <!-- API -->
                                                <td>Australian Private Company</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">GST</th>
                                                <!-- API -->
                                                <td>Registered for GST effective from 04-04-2003</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Locality</th>
                                                <!-- API -->
                                                <td>4008 QLD</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Record Last Updated</th>
                                                <!-- API -->
                                                <td>03-07-2018</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <div class="cardview">
                                    <h4 class="text-center">ASIC Summary</h4>

                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Name</th>
                                                <!-- API -->
                                                <td>GREYHOUND AUSTRALIA PTY LTD</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">ACN</th>
                                                <!-- API -->
                                                <td>104 326 383</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Type</th>
                                                <!-- API -->
                                                <td>Australian Proprietary Company</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Status</th>
                                                <!-- API -->
                                                <td>Registered</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Controlling Jurisdiction</th>
                                                <!-- API -->
                                                <td>ASIC</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Registration Date</th>
                                                <!-- API -->
                                                <td>04-04-2003</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Review Date</th>
                                                <!-- API -->
                                                <td>04-04-2020</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Class</th>
                                                <!-- API -->
                                                <td>Limited By Shares</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Subclass</th>
                                                <!-- API -->
                                                <td>Proprietary Company</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Locality</th>
                                                <!-- API -->
                                                <td>PINKENBA QLD 4008</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Next Review Date</th>
                                                <!-- API -->
                                                <td>04-04-2019</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </page>


                        <page size="A4">
                            <div class="header"></div>
                            <div class="content">
                                <h2 >Non – Financial Based Credit Score</h2>
                                <p class="mt-5">The score is a statistically based score indicating an entity's credit worthiness. The score
                                    ultimately ranks entities based on their riskiness and is designed to assist you in making more
                                informed and consistent credit decisions.</p>
                                <p>The score is based between 0 and 850 index points with a higher score considered lower risk while
                                    lower scores are deemed to be riskier entities. It should be used in partnership with your
                                    internal credit procedures and policies.
                                </p>
                                <p>Entity has acceptable creditworthiness. Extend terms within consideration. Entity has a 0.89%
                                chance of failure within the next 12 months.</p>
                            </div>

                            <h2 class="mt-5">Historical Credit Scores</h2>

                            <!-- API -->
                            <div class="chart">
                                <svg version="1.1" class="highcharts-root"
                                style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                                xmlns="http://www.w3.org/2000/svg" width="800" height="400" viewBox="0 0 800 400">
                                <desc>Created with Highcharts 7.2.0</desc>
                                <defs>
                                    <clipPath id="highcharts-x08nd36-1-">
                                        <rect x="0" y="0" width="534" height="291" fill="none"></rect>
                                    </clipPath>
                                </defs>
                                <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="800" height="400"
                                rx="0" ry="0"></rect>
                                <rect fill="none" class="highcharts-plot-background" x="81" y="72" width="534" height="291">
                                </rect>
                                <g class="highcharts-grid highcharts-xaxis-grid" data-z-index="1">
                                    <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 85.5 72 L 85.5 363"
                                    opacity="1"></path>
                                    <path fill="none" data-z-index="1" class="highcharts-grid-line"
                                    d="M 235.5 72 L 235.5 363" opacity="1"></path>
                                    <path fill="none" data-z-index="1" class="highcharts-grid-line"
                                    d="M 384.5 72 L 384.5 363" opacity="1"></path>
                                    <path fill="none" data-z-index="1" class="highcharts-grid-line"
                                    d="M 534.5 72 L 534.5 363" opacity="1"></path>
                                    <path fill="none" data-z-index="1" class="highcharts-grid-line"
                                    d="M 160.5 72 L 160.5 363" opacity="1"></path>
                                    <path fill="none" data-z-index="1" class="highcharts-grid-line"
                                    d="M 310.5 72 L 310.5 363" opacity="1"></path>
                                    <path fill="none" data-z-index="1" class="highcharts-grid-line"
                                    d="M 459.5 72 L 459.5 363" opacity="1"></path>
                                    <path fill="none" data-z-index="1" class="highcharts-grid-line"
                                    d="M 609.5 72 L 609.5 363" opacity="1"></path>
                                </g>
                                <g class="highcharts-grid highcharts-yaxis-grid" data-z-index="1">
                                    <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                    class="highcharts-grid-line" d="M 81 363.5 L 615 363.5" opacity="1"></path>
                                    <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                    class="highcharts-grid-line" d="M 81 290.5 L 615 290.5" opacity="1"></path>
                                    <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                    class="highcharts-grid-line" d="M 81 218.5 L 615 218.5" opacity="1"></path>
                                    <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                    class="highcharts-grid-line" d="M 81 145.5 L 615 145.5" opacity="1"></path>
                                    <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                    class="highcharts-grid-line" d="M 81 71.5 L 615 71.5" opacity="1"></path>
                                </g>
                                <rect fill="none" class="highcharts-plot-border" data-z-index="1" x="81" y="72" width="534"
                                height="291"></rect>
                                <g class="highcharts-axis highcharts-xaxis" data-z-index="2">
                                    <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                    d="M 85.5 363 L 85.5 373" opacity="1"></path>
                                    <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                    d="M 235.5 363 L 235.5 373" opacity="1"></path>
                                    <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                    d="M 384.5 363 L 384.5 373" opacity="1"></path>
                                    <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                    d="M 534.5 363 L 534.5 373" opacity="1"></path>
                                    <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                    d="M 160.5 363 L 160.5 373" opacity="1"></path>
                                    <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                    d="M 310.5 363 L 310.5 373" opacity="1"></path>
                                    <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                    d="M 459.5 363 L 459.5 373" opacity="1"></path>
                                    <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                    d="M 609.5 363 L 609.5 373" opacity="1"></path>
                                    <path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1"
                                    data-z-index="7" d="M 81 363.5 L 615 363.5"></path>
                                </g>
                                <g class="highcharts-axis highcharts-yaxis" data-z-index="2">
                                    <text x="26.390625" data-z-index="7" text-anchor="middle"
                                    transform="translate(0,0) rotate(270 26.390625 217.5)" class="highcharts-axis-title"
                                    style="color:#666666;fill:#666666;" y="217.5">
                                    <tspan>Number of Employees</tspan>
                                </text>
                                <path fill="none" class="highcharts-axis-line" data-z-index="7" d="M 81 72 L 81 363">
                                </path>
                            </g>
                            <g class="highcharts-series-group" data-z-index="3">
                                <g data-z-index="0.1"
                                class="highcharts-series highcharts-series-0 highcharts-line-series highcharts-color-0        "
                                transform="translate(81,72) scale(1 1)"
                                clip-path="url(https://www.highcharts.com/demo/line-basic#highcharts-x08nd36-1-)"
                                opacity="1">
                                <path fill="none"
                                d="M 5.2352941176424 227.07603 L 80.02521008403 214.608135 L 154.81512605042 207.807465 L 229.60504201681 189.64761 L 304.39495798319 149.819895 L 379.18487394958 116.500395 L 453.97478991597 91.471485 L 528.76470588236 66.675375"
                                class="highcharts-graph" data-z-index="1" stroke="#7cb5ec" stroke-width="2"
                                stroke-linejoin="round" stroke-linecap="round"></path>
                                <path fill="none"
                                d="M -4.7647058823576 227.07603 L 5.2352941176424 227.07603 L 80.02521008403 214.608135 L 154.81512605042 207.807465 L 229.60504201681 189.64761 L 304.39495798319 149.819895 L 379.18487394958 116.500395 L 453.97478991597 91.471485 L 528.76470588236 66.675375 L 538.76470588236 66.675375"
                                visibility="visible" data-z-index="2" class="highcharts-tracker-line"
                                stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22">
                            </path>
                        </g>
                        <g data-z-index="0.1"
                        class="highcharts-markers highcharts-series-0 highcharts-line-series highcharts-color-0  highcharts-tracker       "
                        transform="translate(81,72) scale(1 1)" opacity="1">
                        <path fill="#7cb5ec" d="M 229 189.64761 A 0 0 0 1 1 229 189.64761 Z"
                        class="highcharts-halo highcharts-color-0" data-z-index="-1" fill-opacity="0.25"
                        visibility="hidden"></path>
                        <path fill="#7cb5ec"
                        d="M 5 231.07603 A 4 4 0 1 1 5.0039999993333355 231.07602800000018 Z"
                        opacity="1" class="highcharts-point highcharts-color-0"></path>
                        <path fill="#7cb5ec"
                        d="M 80 218.608135 A 4 4 0 1 1 80.00399999933333 218.60813300000018 Z"
                        opacity="1" class="highcharts-point highcharts-color-0"></path>
                        <path fill="#7cb5ec"
                        d="M 154 211.807465 A 4 4 0 1 1 154.00399999933333 211.80746300000018 Z"
                        opacity="1" class="highcharts-point highcharts-color-0"></path>
                        <path fill="#7cb5ec"
                        d="M 229 193.64761 A 4 4 0 1 1 229.00399999933333 193.64760800000016 Z"
                        opacity="1" class="highcharts-point highcharts-color-0 "
                        stroke-width="0.00015790535835003006"></path>
                        <path fill="#7cb5ec"
                        d="M 304 153.819895 A 4 4 0 1 1 304.00399999933336 153.81989300000018 Z"
                        opacity="1" class="highcharts-point highcharts-color-0 "
                        stroke-width="0.001119917565748918"></path>
                        <path fill="#7cb5ec"
                        d="M 379 120.500395 A 4 4 0 1 1 379.00399999933336 120.50039300000016 Z"
                        opacity="1" class="highcharts-point highcharts-color-0 "
                        stroke-width="0.0002467198171342"></path>
                        <path fill="#7cb5ec"
                        d="M 453 95.471485 A 4 4 0 1 1 453.00399999933336 95.47148300000016 Z"
                        opacity="1" class="highcharts-point highcharts-color-0 "
                        stroke-width="0.0014205498696930885"></path>
                        <path fill="#7cb5ec"
                        d="M 528 70.675375 A 4 4 0 1 1 528.0039999993334 70.67537300000016 Z"
                        opacity="1" class="highcharts-point highcharts-color-0 "
                        stroke-width="0.000004010099284301738"></path>
                    </g>
                    <g data-z-index="0.1"
                    class="highcharts-series highcharts-series-1 highcharts-line-series highcharts-color-1        "
                    transform="translate(81,72) scale(1 1)"
                    clip-path="url(https://www.highcharts.com/demo/line-basic#highcharts-x08nd36-1-)"
                    opacity="1">
                    <path fill="none"
                    d="M 5.2352941176424 254.74722 L 80.02521008403 255.98687999999999 L 154.81512605042 247.72539 L 229.60504201681 247.566795 L 304.39495798319 243.72705000000002 L 379.18487394958 246.93969 L 453.97478991597 235.53394500000002 L 528.76470588236 232.16853"
                    class="highcharts-graph" data-z-index="1" stroke="#434348" stroke-width="2"
                    stroke-linejoin="round" stroke-linecap="round"></path>
                    <path fill="none"
                    d="M -4.7647058823576 254.74722 L 5.2352941176424 254.74722 L 80.02521008403 255.98687999999999 L 154.81512605042 247.72539 L 229.60504201681 247.566795 L 304.39495798319 243.72705000000002 L 379.18487394958 246.93969 L 453.97478991597 235.53394500000002 L 528.76470588236 232.16853 L 538.76470588236 232.16853"
                    visibility="visible" data-z-index="2" class="highcharts-tracker-line"
                    stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22">
                </path>
            </g>
            <g data-z-index="0.1"
            class="highcharts-markers highcharts-series-1 highcharts-line-series highcharts-color-1  highcharts-tracker       "
            transform="translate(81,72) scale(1 1)" opacity="1">
            <path fill="#434348" d="M 229 247.566795 A 0 0 0 1 1 229 247.566795 Z"
            class="highcharts-halo highcharts-color-1" data-z-index="-1" fill-opacity="0.25"
            visibility="hidden"></path>
            <path fill="#434348"
            d="M 5 250.74722 L 9 254.74722 5 258.74721999999997 1 254.74722 Z" opacity="1"
            class="highcharts-point highcharts-color-1"></path>
            <path fill="#434348"
            d="M 80 251.98687999999999 L 84 255.98687999999999 80 259.98688 76 255.98687999999999 Z"
            opacity="1" class="highcharts-point highcharts-color-1"></path>
            <path fill="#434348"
            d="M 154 243.72539 L 158 247.72539 154 251.72539 150 247.72539 Z" opacity="1"
            class="highcharts-point highcharts-color-1"></path>
            <path fill="#434348"
            d="M 229 243.566795 L 233 247.566795 229 251.566795 225 247.566795 Z"
            opacity="1" class="highcharts-point highcharts-color-1  "
            stroke-width="0.0017791363490250456"></path>
            <path fill="#434348"
            d="M 304 239.72705000000002 L 308 243.72705000000002 304 247.72705000000002 300 243.72705000000002 Z"
            opacity="1" class="highcharts-point highcharts-color-1"></path>
            <path fill="#434348"
            d="M 379 242.93969 L 383 246.93969 379 250.93969 375 246.93969 Z" opacity="1"
            class="highcharts-point highcharts-color-1"></path>
            <path fill="#434348"
            d="M 453 231.53394500000002 L 457 235.53394500000002 453 239.53394500000002 449 235.53394500000002 Z"
            opacity="1" class="highcharts-point highcharts-color-1"></path>
            <path fill="#434348"
            d="M 528 228.16853 L 532 232.16853 528 236.16853 524 232.16853 Z" opacity="1"
            class="highcharts-point highcharts-color-1"></path>
        </g>
        <g data-z-index="0.1"
        class="highcharts-series highcharts-series-2 highcharts-line-series highcharts-color-2         "
        transform="translate(81,72) scale(1 1)"
        clip-path="url(https://www.highcharts.com/demo/line-basic#highcharts-x08nd36-1-)"
        opacity="1">
        <path fill="none"
        d="M 5.2352941176424 273.91248 L 80.02521008403 265.21449 L 154.81512605042 267.712725 L 229.60504201681 262.233195 L 304.39495798319 261.630825 L 379.18487394958 255.531465 L 453.97478991597 244.226115 L 528.76470588236 233.691915"
        class="highcharts-graph" data-z-index="1" stroke="#90ed7d" stroke-width="2"
        stroke-linejoin="round" stroke-linecap="round"></path>
        <path fill="none"
        d="M -4.7647058823576 273.91248 L 5.2352941176424 273.91248 L 80.02521008403 265.21449 L 154.81512605042 267.712725 L 229.60504201681 262.233195 L 304.39495798319 261.630825 L 379.18487394958 255.531465 L 453.97478991597 244.226115 L 528.76470588236 233.691915 L 538.76470588236 233.691915"
        visibility="visible" data-z-index="2" class="highcharts-tracker-line"
        stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22">
    </path>
</g>
<g data-z-index="0.1"
class="highcharts-markers highcharts-series-2 highcharts-line-series highcharts-color-2  highcharts-tracker        "
transform="translate(81,72) scale(1 1)" opacity="1">
<path fill="#90ed7d" d="M 229 262.233195 A 0 0 0 1 1 229 262.233195 Z"
class="highcharts-halo highcharts-color-2" data-z-index="-1" fill-opacity="0.25"
visibility="hidden"></path>
<path fill="#90ed7d" d="M 1 269.91248 L 9 269.91248 9 277.91248 1 277.91248 Z"
opacity="1" class="highcharts-point highcharts-color-2"></path>
<path fill="#90ed7d" d="M 76 261.21449 L 84 261.21449 84 269.21449 76 269.21449 Z"
opacity="1" class="highcharts-point highcharts-color-2"></path>
<path fill="#90ed7d"
d="M 150 263.712725 L 158 263.712725 158 271.712725 150 271.712725 Z"
opacity="1" class="highcharts-point highcharts-color-2"></path>
<path fill="#90ed7d"
d="M 225 258.233195 L 233 258.233195 233 266.233195 225 266.233195 Z"
opacity="1" class="highcharts-point highcharts-color-2  "
stroke-width="0.00030194214670076214"></path>
<path fill="#90ed7d"
d="M 300 257.630825 L 308 257.630825 308 265.630825 300 265.630825 Z"
opacity="1" class="highcharts-point highcharts-color-2"></path>
<path fill="#90ed7d"
d="M 375 251.531465 L 383 251.531465 383 259.531465 375 259.531465 Z"
opacity="1" class="highcharts-point highcharts-color-2"></path>
<path fill="#90ed7d"
d="M 449 240.226115 L 457 240.226115 457 248.226115 449 248.226115 Z"
opacity="1" class="highcharts-point highcharts-color-2"></path>
<path fill="#90ed7d"
d="M 524 229.691915 L 532 229.691915 532 237.691915 524 237.691915 Z"
opacity="1" class="highcharts-point highcharts-color-2"></path>
</g>
<g data-z-index="0.1"
class="highcharts-series highcharts-series-3 highcharts-line-series highcharts-color-3         "
transform="translate(81,72) scale(1 1)"
clip-path="url(https://www.highcharts.com/demo/line-basic#highcharts-x08nd36-1-)"
opacity="1">
<path fill="none"
d="M 154.81512605042 279.37746 L 229.60504201681 273.294105 L 304.39495798319 269.01204 L 379.18487394958 258.33234 L 453.97478991597 240.948 L 528.76470588236 241.199715"
class="highcharts-graph" data-z-index="1" stroke="#f7a35c" stroke-width="2"
stroke-linejoin="round" stroke-linecap="round"></path>
<path fill="none"
d="M 144.81512605042 279.37746 L 154.81512605042 279.37746 L 229.60504201681 273.294105 L 304.39495798319 269.01204 L 379.18487394958 258.33234 L 453.97478991597 240.948 L 528.76470588236 241.199715 L 538.76470588236 241.199715"
visibility="visible" data-z-index="2" class="highcharts-tracker-line"
stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22">
</path>
</g>
<g data-z-index="0.1"
class="highcharts-markers highcharts-series-3 highcharts-line-series highcharts-color-3  highcharts-tracker        "
transform="translate(81,72) scale(1 1)" opacity="1">
<path fill="#f7a35c" d="M 304 269.01204 A 0 0 0 1 1 304 269.01204 Z"
class="highcharts-halo highcharts-color-3" data-z-index="-1" fill-opacity="0.25"
visibility="hidden"></path>
<path fill="#f7a35c" d="M 154 275.37746 L 158 283.37746 150 283.37746 Z" opacity="1"
class="highcharts-point highcharts-color-3"></path>
<path fill="#f7a35c" d="M 229 269.294105 L 233 277.294105 225 277.294105 Z"
opacity="1" class="highcharts-point highcharts-color-3 "></path>
<path fill="#f7a35c" d="M 304 265.01204 L 308 273.01204 300 273.01204 Z" opacity="1"
class="highcharts-point highcharts-color-3 "></path>
<path fill="#f7a35c" d="M 379 254.33234 L 383 262.33234 375 262.33234 Z" opacity="1"
class="highcharts-point highcharts-color-3"></path>
<path fill="#f7a35c" d="M 453 236.948 L 457 244.948 449 244.948 Z" opacity="1"
class="highcharts-point highcharts-color-3"></path>
<path fill="#f7a35c" d="M 528 237.199715 L 532 245.199715 524 245.199715 Z"
opacity="1" class="highcharts-point highcharts-color-3"></path>
</g>
<g data-z-index="0.1"
class="highcharts-series highcharts-series-4 highcharts-line-series highcharts-color-4         "
transform="translate(81,72) scale(1 1)"
clip-path="url(https://www.highcharts.com/demo/line-basic#highcharts-x08nd36-1-)"
opacity="1">
<path fill="none"
d="M 5.2352941176424 272.21886 L 80.02521008403 282.34566 L 154.81512605042 279.207225 L 229.60504201681 274.63416 L 304.39495798319 277.921005 L 379.18487394958 273.80772 L 453.97478991597 264.41133 L 528.76470588236 264.648495"
class="highcharts-graph" data-z-index="1" stroke="#8085e9" stroke-width="2"
stroke-linejoin="round" stroke-linecap="round"></path>
<path fill="none"
d="M -4.7647058823576 272.21886 L 5.2352941176424 272.21886 L 80.02521008403 282.34566 L 154.81512605042 279.207225 L 229.60504201681 274.63416 L 304.39495798319 277.921005 L 379.18487394958 273.80772 L 453.97478991597 264.41133 L 528.76470588236 264.648495 L 538.76470588236 264.648495"
visibility="visible" data-z-index="2" class="highcharts-tracker-line"
stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22">
</path>
</g>
<g data-z-index="0.1"
class="highcharts-markers highcharts-series-4 highcharts-line-series highcharts-color-4  highcharts-tracker        "
transform="translate(81,72) scale(1 1)" opacity="1">
<path fill="#8085e9" d="M 304 277.921005 A 0 0 0 1 1 304 277.921005 Z"
class="highcharts-halo highcharts-color-4" data-z-index="-1" fill-opacity="0.25"
visibility="hidden"></path>
<path fill="#8085e9" d="M 1 268.21886 L 9 268.21886 5 276.21886 Z" opacity="1"
class="highcharts-point highcharts-color-4"></path>
<path fill="#8085e9" d="M 76 278.34566 L 84 278.34566 80 286.34566 Z" opacity="1"
class="highcharts-point highcharts-color-4"></path>
<path fill="#8085e9" d="M 150 275.207225 L 158 275.207225 154 283.207225 Z"
opacity="1" class="highcharts-point highcharts-color-4"></path>
<path fill="#8085e9" d="M 225 270.63416 L 233 270.63416 229 278.63416 Z" opacity="1"
class="highcharts-point highcharts-color-4"></path>
<path fill="#8085e9" d="M 300 273.921005 L 308 273.921005 304 281.921005 Z"
opacity="1" class="highcharts-point highcharts-color-4 "
stroke-width="0.00040087933764582084"></path>
<path fill="#8085e9" d="M 375 269.80772 L 383 269.80772 379 277.80772 Z" opacity="1"
class="highcharts-point highcharts-color-4"></path>
<path fill="#8085e9" d="M 449 260.41133 L 457 260.41133 453 268.41133 Z" opacity="1"
class="highcharts-point highcharts-color-4"></path>
<path fill="#8085e9" d="M 524 260.648495 L 532 260.648495 528 268.648495 Z"
opacity="1" class="highcharts-point highcharts-color-4"></path>
</g>
</g>
<g class="highcharts-exporting-group" data-z-index="3">
    <g class="highcharts-button highcharts-contextbutton" stroke-linecap="round"
    transform="translate(766,10)">
    <title>Chart context menu</title>
    <rect fill="#ffffff" class="highcharts-button-box" x="0.5" y="0.5" width="24"
    height="22" rx="2" ry="2" stroke="none" stroke-width="1"></rect>
    <path fill="#666666" d="M 6 6.5 L 20 6.5 M 6 11.5 L 20 11.5 M 6 16.5 L 20 16.5"
    class="highcharts-button-symbol" data-z-index="1" stroke="#666666"
    stroke-width="3"></path>
    <text x="0" data-z-index="1"
    style="font-weight:normal;color:#333333;cursor:pointer;fill:#333333;"
    y="12"></text>
</g>
</g>
<g class="highcharts-label highcharts-series-label highcharts-series-label-0 highcharts-color-0"
opacity="1" data-z-index="3" transform="translate(540,117)">
<path fill="none" class="highcharts-label-box" d="M 0 0" stroke="#7cb5ec"
stroke-width="1"></path>
<text x="0" data-z-index="1" style="font-weight:bold;color:#7cb5ec;fill:#7cb5ec;"
y="12">Installation</text>
</g>
<g class="highcharts-label highcharts-series-label highcharts-series-label-1 highcharts-color-1"
opacity="1" data-z-index="3" transform="translate(191,298)">
<path fill="none" class="highcharts-label-box" d="M 0 0" stroke="#434348"
stroke-width="1"></path>
<text x="0" data-z-index="1" style="font-weight:bold;color:#434348;fill:#434348;"
y="12">Manufacturing</text>
</g>
<g class="highcharts-label highcharts-series-label highcharts-series-label-2 highcharts-color-2"
opacity="1" data-z-index="3" transform="translate(488,284)">
<path fill="none" class="highcharts-label-box" d="M 0 0" stroke="#90ed7d"
stroke-width="1"></path>
<text x="0" data-z-index="1" style="font-weight:bold;color:#90ed7d;fill:#90ed7d;"
y="12">
<tspan>Sales &amp; Distribution</tspan>
</text>
</g>
<g class="highcharts-label highcharts-series-label highcharts-series-label-4 highcharts-color-4"
opacity="1" data-z-index="3" transform="translate(572,340)">
<path fill="none" class="highcharts-label-box" d="M 0 0" stroke="#8085e9"
stroke-width="1"></path>
<text x="0" data-z-index="1" style="font-weight:bold;color:#8085e9;fill:#8085e9;"
y="12">Other</text>
</g>
<text x="400" text-anchor="middle" class="highcharts-title" data-z-index="4"
style="color:#333333;font-size:18px;fill:#333333;" y="24">
<tspan>Solar Employment Growth by Sector, 2010-2016</tspan>
</text>
<text x="400" text-anchor="middle" class="highcharts-subtitle" data-z-index="4"
style="color:#666666;fill:#666666;" y="52">
<tspan>Source: thesolarfoundation.com</tspan>
</text>
<text x="10" text-anchor="start" class="highcharts-caption" data-z-index="4"
style="color:#666666;fill:#666666;" y="397"></text>
<g class="highcharts-legend" data-z-index="7" transform="translate(627,147)">
    <rect fill="none" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0" width="162"
    height="101" visibility="visible"></rect>
    <g data-z-index="1">
        <g>
            <g class="highcharts-legend-item highcharts-line-series highcharts-color-0 highcharts-series-0"
            data-z-index="1" transform="translate(8,3)">
            <path fill="none" d="M 0 11 L 16 11" class="highcharts-graph"
            stroke="#7cb5ec" stroke-width="2"></path>
            <path fill="#7cb5ec"
            d="M 8 15 A 4 4 0 1 1 8.003999999333336 14.999998000000167 Z"
            class="highcharts-point" opacity="1"></path>
            <text x="21"
            style="color:#333333;cursor:pointer;font-size:12px;font-weight:bold;fill:#333333;"
            text-anchor="start" data-z-index="2" y="15">
            <tspan>Installation</tspan>
        </text>
    </g>
    <g class="highcharts-legend-item highcharts-line-series highcharts-color-1 highcharts-series-1"
    data-z-index="1" transform="translate(8,21)">
    <path fill="none" d="M 0 11 L 16 11" class="highcharts-graph"
    stroke="#434348" stroke-width="2"></path>
    <path fill="#434348" d="M 8 7 L 12 11 8 15 4 11 Z" class="highcharts-point"
    opacity="1"></path>
    <text x="21" y="15"
    style="color:#333333;cursor:pointer;font-size:12px;font-weight:bold;fill:#333333;"
    text-anchor="start" data-z-index="2">
    <tspan>Manufacturing</tspan>
</text>
</g>
<g class="highcharts-legend-item highcharts-line-series highcharts-color-2 highcharts-series-2"
data-z-index="1" transform="translate(8,39)">
<path fill="none" d="M 0 11 L 16 11" class="highcharts-graph"
stroke="#90ed7d" stroke-width="2"></path>
<path fill="#90ed7d" d="M 4 7 L 12 7 12 15 4 15 Z" class="highcharts-point"
opacity="1"></path>
<text x="21" y="15"
style="color:#333333;cursor:pointer;font-size:12px;font-weight:bold;fill:#333333;"
text-anchor="start" data-z-index="2">
<tspan>Sales &amp; Distribution</tspan>
</text>
</g>
<g class="highcharts-legend-item highcharts-line-series highcharts-color-3 highcharts-series-3"
data-z-index="1" transform="translate(8,57)">
<path fill="none" d="M 0 11 L 16 11" class="highcharts-graph"
stroke="#f7a35c" stroke-width="2"></path>
<path fill="#f7a35c" d="M 8 7 L 12 15 4 15 Z" class="highcharts-point"
opacity="1"></path>
<text x="21" y="15"
style="color:#333333;cursor:pointer;font-size:12px;font-weight:bold;fill:#333333;"
text-anchor="start" data-z-index="2">
<tspan>Project Development</tspan>
</text>
</g>
<g class="highcharts-legend-item highcharts-line-series highcharts-color-4 highcharts-series-4"
data-z-index="1" transform="translate(8,75)">
<path fill="none" d="M 0 11 L 16 11" class="highcharts-graph"
stroke="#8085e9" stroke-width="2"></path>
<path fill="#8085e9" d="M 4 7 L 12 7 8 15 Z" class="highcharts-point"
opacity="1"></path>
<text x="21" y="15"
style="color:#333333;cursor:pointer;font-size:12px;font-weight:bold;fill:#333333;"
text-anchor="start" data-z-index="2">
<tspan>Other</tspan>
</text>
</g>
</g>
</g>
</g>
<g class="highcharts-axis-labels highcharts-xaxis-labels" data-z-index="7">
    <text x="86.235294117642"
    style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
    text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">2010</text>
    <text x="235.81512605042"
    style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
    text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">2012</text>
    <text x="385.39495798319"
    style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
    text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">2014</text>
    <text x="534.97478991597"
    style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
    text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">2016</text>
    <text x="161.02521008403"
    style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
    text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">2011</text>
    <text x="310.60504201681"
    style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
    text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">2013</text>
    <text x="460.18487394958"
    style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
    text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">2015</text>
    <text x="609.76470588236"
    style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
    text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">2017</text>
</g>
<g class="highcharts-axis-labels highcharts-yaxis-labels" data-z-index="7">
    <text x="66" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
    text-anchor="end" transform="translate(0,0)" y="367" opacity="1">0</text>
    <text x="66" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
    text-anchor="end" transform="translate(0,0)" y="294" opacity="1">50k</text>
    <text x="66" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
    text-anchor="end" transform="translate(0,0)" y="222" opacity="1">100k</text>
    <text x="66" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
    text-anchor="end" transform="translate(0,0)" y="149" opacity="1">150k</text>
    <text x="66" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
    text-anchor="end" transform="translate(0,0)" y="76" opacity="1">200k</text>
</g>

<g class="highcharts-label highcharts-tooltip            highcharts-color-4"
style="pointer-events:none;white-space:nowrap;" data-z-index="8"
transform="translate(332,-9999)" opacity="0" visibility="visible">
<path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
d="M 3.5 0.5 L 103.5 0.5 C 106.5 0.5 106.5 0.5 106.5 3.5 L 106.5 44.5 C 106.5 47.5 106.5 47.5 103.5 47.5 L 58.5 47.5 52.5 53.5 46.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5"
transform="translate(1, 1)"></path>
<path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
d="M 3.5 0.5 L 103.5 0.5 C 106.5 0.5 106.5 0.5 106.5 3.5 L 106.5 44.5 C 106.5 47.5 106.5 47.5 103.5 47.5 L 58.5 47.5 52.5 53.5 46.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3"
transform="translate(1, 1)"></path>
<path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow"
d="M 3.5 0.5 L 103.5 0.5 C 106.5 0.5 106.5 0.5 106.5 3.5 L 106.5 44.5 C 106.5 47.5 106.5 47.5 103.5 47.5 L 58.5 47.5 52.5 53.5 46.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
stroke="#000000" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)">
</path>
<path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box"
d="M 3.5 0.5 L 103.5 0.5 C 106.5 0.5 106.5 0.5 106.5 3.5 L 106.5 44.5 C 106.5 47.5 106.5 47.5 103.5 47.5 L 58.5 47.5 52.5 53.5 46.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
stroke="#8085e9" stroke-width="1"></path>
<text x="8" data-z-index="1"
style="font-size:12px;color:#333333;cursor:default;fill:#333333;" y="20">
<tspan style="font-size: 10px">2014</tspan>
<tspan style="fill:#8085e9" x="8" dy="15">●</tspan>
<tspan dx="0"> Other: </tspan>
<tspan style="font-weight:bold" dx="0">8 989</tspan>
</text>
</g>
</svg>

<h2 class="mt-5">Recommendations</h2>
<table class="table cardview">
    <thead class="thead-light">
        <tr>
            <th width="20%">Range Risk</th>
            <th width="20%">level</th>
            <th width="60%">Recommendation</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>0</td>
            <td>Critical</td>
            <td>ACN deregistered or ABN cancelled.</td>
        </tr>
        <tr>
            <td>1-125</td>
            <td>Critical</td>
            <td>Entity has a critical status and significant adverse information present.
            Trading eligibility must be considered.</td>
        </tr>
        <tr>
            <td>126-250</td>
            <td>Very High</td>
            <td>Entity has multiple pieces of adverse information present. COD trading highly
            recommended.</td>
        </tr>
        <tr>
            <td>251-450</td>
            <td>High</td>
            <td>Entity has a below average creditworthiness score and some adverse information
                may be present. Trade with caution, monitor closely and consider your payment
            terms.</td>
        </tr>
        <tr>
            <td>451-550</td>
            <td>Moderate</td>
            <td>Entity has moderate creditworthiness with or without adverse information.
            Monitor ongoing payment behaviour.</td>
        </tr>
        <tr>
            <td>551-850</td>
            <td>Low</td>
            <td>Entity has acceptable creditworthiness. Extend terms within consideration.</td>
        </tr>
    </tbody>
</table>

<p>Please note that the score and recommendation should be used in partnership with your
    company's internal credit procedures and policies. The score should not be used as the sole
reason in making a decision about the entity.</p>
</div>
</page>
<div class="clearfix "></div>  

<page size="A4">
    <div class="header"></div>
    <div class="content">
        <!-- Financial Summary  -->
        <h2 class="mt-5">Financial Summary </h2>
        <table class="table cardview summary-table">
            <tbody>
                <tr>
                    <th width='30px' style="text-align:left">Rounding</th>
                    <td width="14%" style="text-align:right"><?= ucfirst((isset($qun_3->rounding))? $qun_3->rounding : 'N/A')?></td>
                    <td width="14%" style="text-align:right"><?= ucfirst((isset($qun_2->rounding))? $qun_2->rounding : 'N/A')?></td>
                    <td width="14%" style="text-align:right"></td>
                    <td width="14%" style="text-align:right"><?= ucfirst((isset($qun_1->rounding))? $qun_1->rounding : 'N/A')?></td>
                    <td width="14%" style="text-align:right"></td>
                </tr>
                <tr>
                    <th style="width:40%">Base Currency</th>
                    <td style="text-align:right"><?= strtoupper((isset($qun_3->base_currency))? $qun_3->base_currency : 'N/A' ) ?></td>
                    <td style="text-align:right"><?= strtoupper((isset($qun_2->base_currency))? $qun_2->base_currency : 'N/A' ) ?></td>
                    <td style="text-align:right"></td>
                    <td style="text-align:right"><?= strtoupper((isset($qun_1->base_currency))? $qun_1->base_currency : 'N/A' ) ?></td>
                    <td style="text-align:right"></td>

                </tr>
                <tr>
                    <th style="width:40%">Quality</th>
                    <td style="text-align:right"><?= ucfirst((isset($qun_3->quality))? $qun_3->quality : 'N/A') ?></td>
                    <td style="text-align:right"><?= ucfirst((isset($qun_2->quality))? $qun_2->quality : 'N/A') ?></td>
                    <td style="text-align:right"></td>
                    <td style="text-align:right"><?= ucfirst((isset($qun_1->quality))? $qun_1->quality : 'N/A') ?></td>
                    <td style="text-align:right"></td>
                </tr>
                <tr>
                    <th style="width:40%">Reporting Period - Months</th>
                    <td style="text-align:right"><?= (isset($qun_3->reporting_period_months))? $qun_3->reporting_period_months : 'N/A'?></td>
                    <td style="text-align:right"><?= (isset($qun_2->reporting_period_months))? $qun_2->reporting_period_months : 'N/A'?></td>
                    <td style="text-align:right"></td>
                    <td style="text-align:right"><?= (isset($qun_1->reporting_period_months))? $qun_1->reporting_period_months : 'N/A'?></td>
                    <td style="text-align:right"></td>
                </tr>
                <tr>
                    <th style="width:40%">Financial Year</th>
                    <td style="text-align:right">FY <?= (isset($qun_3->financial_year))? $qun_3->financial_year : 'N/A'?></td>
                    <td style="text-align:right">FY <?= (isset($qun_2->financial_year))? $qun_2->financial_year : 'N/A'?></td>
                    <td style="text-align:right"></td>
                    <td style="text-align:right">FY <?= (isset($qun_1->financial_year))? $qun_1->financial_year : 'N/A'?></td>
                    <td style="text-align:right"></td>
                </tr>
                <tr>
                    <th style="width:40%">Month</th>
                    <td style="text-align:right"><?= $this->jics->month_format((isset($qun_3->month))? $qun_3->month : 'N/A')?></td>
                    <td style="text-align:right"><?= $this->jics->month_format((isset($qun_2->month))? $qun_2->month : 'N/A')?></td>
                    <td style="text-align:right"></td>
                    <td style="text-align:right"><?= $this->jics->month_format((isset($qun_1->month))? $qun_1->month : 'N/A')?></td>
                    <td style="text-align:right"></td>
                </tr>
            </tbody>
        </table>
        <div class="clearfix"></div>
        <!-- Income Statement -->
        <h4 class="mt-3">Income Statement</h4>
        <table class="table">
            <tbody>
                <tr>
                    <td width='30px' style="text-align:left">Sales</td>
                    <td width="14%" style="text-align:right"><?= number_format((isset($qun_3->sales))? $qun_3->sales : 0 )?></td>
                    <td width="14%" style="text-align:right"><?= number_format((isset($qun_2->sales))? $qun_2->sales : 0 )?></td>
                    <td width="14%" style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_3->sales))? $qun_3->sales : 0 ) - intval((isset($qun_2->sales))? $qun_2->sales : 0 ))?></td>
                    <td width="14%" style="text-align:right"><?= number_format((isset($qun_1->sales))? $qun_1->sales : 0 )?></td>
                    <td width="14%" style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_2->sales))? $qun_2->sales : 0 ) - intval((isset($qun_1->sales))? $qun_1->sales : 0 ))?></td>
                </tr>
                <tr>
                    <td>Gross Profit</td>
                    <td style="text-align:right"><?= number_format((isset($qun_3->gross_profit))? $qun_3->gross_profit : 0 )?></td>
                    <td style="text-align:right"><?= number_format((isset($qun_2->gross_profit))? $qun_2->gross_profit : 0 )?></td>
                    <td style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_3->gross_profit))? $qun_3->gross_profit : 0 ) - intval((isset($qun_2->gross_profit))? $qun_2->gross_profit : 0 ))?></td>
                    <td style="text-align:right"><?= number_format((isset($qun_1->gross_profit))? $qun_1->gross_profit : 0 )?></td>
                    <td style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_2->gross_profit))? $qun_2->gross_profit : 0 ) - intval((isset($qun_1->gross_profit))? $qun_1->gross_profit : 0 ))?></td>
                </tr>
                <tr>
                    <td>Other Income</td>
                    <td style="text-align:right"><?= number_format((isset($qun_3->other_income))? $qun_3->other_income : 0 )?></td>
                    <td style="text-align:right"><?= number_format((isset($qun_2->other_income))? $qun_2->other_income : 0 )?></td>
                    <td style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_3->other_income))? $qun_3->other_income : 0 ) - intval((isset($qun_2->other_income))? $qun_2->other_income : 0 ))?></td>
                    <td style="text-align:right"><?= number_format((isset($qun_1->other_income))? $qun_1->other_income : 0 )?></td>
                    <td style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_2->other_income))? $qun_2->other_income : 0 ) - intval((isset($qun_1->other_income))? $qun_1->other_income : 0 ))?></td>
                </tr>
                <tr>
                    <td>EBIT</td>
                    <td style="text-align:right"><?= number_format((isset($qun_3->ebit))? $qun_3->ebit : 0 )?></td>
                    <td style="text-align:right"><?= number_format((isset($qun_2->ebit))? $qun_2->ebit : 0 )?></td>
                    <td style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_3->ebit))? $qun_3->ebit : 0 ) - intval((isset($qun_2->ebit))? $qun_2->ebit : 0 ))?></td>
                    <td style="text-align:right"><?= number_format((isset($qun_1->ebit))? $qun_1->ebit : 0 )?></td>
                    <td style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_2->ebit))? $qun_2->ebit : 0 ) - intval((isset($qun_1->ebit))? $qun_1->ebit : 0 ))?></td>
                </tr>
                <tr>
                    <td>EBITDA</td>
                    <td style="text-align:right"><?= number_format((isset($qun_3->ebitda))? $qun_3->ebitda : 0 )?></td>
                    <td style="text-align:right"><?= number_format((isset($qun_2->ebitda))? $qun_2->ebitda : 0 )?></td>
                    <td style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_3->ebitda))? $qun_3->ebitda : 0) - intval((isset($qun_2->ebitda))? $qun_2->ebitda : 0))?></td>
                    <td style="text-align:right"><?= number_format((isset($qun_1->ebitda))? $qun_1->ebitda : 0 )?></td>
                    <td style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_2->ebitda))? $qun_2->ebitda : 0) - intval((isset($qun_1->ebitda))? $qun_1->ebitda : 0))?></td>
                </tr>
                <tr>
                    <td>Profit Before Tax</td>
                    <td style="text-align:right"><?= number_format((isset($qun_3->profit_before_tax))? $qun_3->profit_before_tax : 0)?></td>
                    <td style="text-align:right"><?= number_format((isset($qun_2->profit_before_tax))? $qun_2->profit_before_tax : 0)?></td>
                    <td style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_3->profit_before_tax))? $qun_3->profit_before_tax : 0) - intval((isset($qun_2->profit_before_tax))? $qun_2->profit_before_tax : 0))?></td>
                    <td style="text-align:right"><?= number_format((isset($qun_1->profit_before_tax))? $qun_1->profit_before_tax : 0)?></td>
                    <td style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_2->profit_before_tax))? $qun_2->profit_before_tax : 0) - intval((isset($qun_1->profit_before_tax))? $qun_1->profit_before_tax : 0))?></td>
                </tr>
                <tr>
                    <td>Profit After Tax</td>
                    <td style="text-align:right"><?= number_format((isset($qun_3->profit_after_tax))? $qun_3->profit_after_tax : 0)?></td>
                    <td style="text-align:right"><?= number_format((isset($qun_2->profit_after_tax))? $qun_2->profit_after_tax : 0)?></td>
                    <td style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_3->profit_after_tax))? $qun_3->profit_after_tax : 0) - intval((isset($qun_2->profit_after_tax))? $qun_2->profit_after_tax : 0))?></td>
                    <td style="text-align:right"><?= number_format((isset($qun_1->profit_after_tax))? $qun_1->profit_after_tax : 0)?></td>
                    <td style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_2->profit_after_tax))? $qun_2->profit_after_tax : 0) - intval((isset($qun_1->profit_after_tax))? $qun_1->profit_after_tax : 0))?></td>
                </tr>
            </tbody>
        </table>
        <!-- Income Statement -->
        <div class="clearfix"></div>
        <!-- Balance Sheet -->
        <h4 class="mt-3">Balance Sheet</h4>
        <table class="table">
            <tbody>
                <tr>
                    <td width='30px' style="text-align:left">Total Current Assets </td>
                    <td width="14%" style="text-align:right"><?= number_format((isset($qun_3->total_current_assets))? $qun_3->total_current_assets : 0)?></td>
                    <td width="14%" style="text-align:right"><?= number_format((isset($qun_2->total_current_assets))? $qun_2->total_current_assets : 0)?></td>
                    <td width="14%" style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_3->total_current_assets))? $qun_3->total_current_assets : 0) - intval((isset($qun_2->total_current_assets))? $qun_2->total_current_assets : 0))?></td>
                    <td width="14%" style="text-align:right"><?= number_format((isset($qun_1->total_current_assets))? $qun_1->total_current_assets : 0)?></td>
                    <td width="14%" style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_2->total_current_assets))? $qun_2->total_current_assets : 0) - intval((isset($qun_1->total_current_assets))? $qun_1->total_current_assets : 0))?></td>
                </tr>
                <tr>
                    <td>Total Non-Current Assets</td>
                    <td style="text-align:right"><?= number_format((isset($qun_3->total_non_curent_assets))? $qun_3->total_non_curent_assets : 0)?></td>
                    <td style="text-align:right"><?= number_format((isset($qun_2->total_non_curent_assets))? $qun_2->total_non_curent_assets : 0)?></td>
                    <td style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_3->total_non_curent_assets))? $qun_3->total_non_curent_assets : 0) - intval((isset($qun_2->total_non_curent_assets))? $qun_2->total_non_curent_assets : 0))?></td>
                    <td style="text-align:right"><?= number_format((isset($qun_1->total_non_curent_assets))? $qun_1->total_non_curent_assets : 0)?></td>
                    <td style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_2->total_non_curent_assets))? $qun_2->total_non_curent_assets : 0) - intval((isset($qun_1->total_non_curent_assets))? $qun_1->total_non_curent_assets : 0))?></td>
                </tr>
                <tr>
                    <td>Total Assets</td>
                    <td style="text-align:right"><?= number_format((isset($qun_3->total_assets))? $qun_3->total_assets : 0)?></td>
                    <td style="text-align:right"><?= number_format((isset($qun_2->total_assets))? $qun_2->total_assets : 0)?></td>
                    <td style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_3->total_assets))? $qun_3->total_assets : 0) - intval((isset($qun_2->total_assets))? $qun_2->total_assets : 0))?></td>
                    <td style="text-align:right"><?= number_format((isset($qun_1->total_assets))? $qun_1->total_assets : 0)?></td>
                    <td style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_2->total_assets))? $qun_2->total_assets : 0) - intval((isset($qun_1->total_assets))? $qun_1->total_assets : 0))?></td>
                </tr>
                <tr>
                    <td>Total Current Liabilities</td>
                    <td style="text-align:right"><?= number_format((isset($qun_3->other_current_liabilities))? $qun_3->other_current_liabilities : 0)?></td>
                    <td style="text-align:right"><?= number_format((isset($qun_2->other_current_liabilities))? $qun_2->other_current_liabilities : 0)?></td>
                    <td style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_3->other_current_liabilities))? $qun_3->other_current_liabilities : 0) - intval((isset($qun_2->other_current_liabilities))? $qun_2->other_current_liabilities : 0))?></td>
                    <td style="text-align:right"><?= number_format((isset($qun_1->other_current_liabilities))? $qun_1->other_current_liabilities : 0)?></td>
                    <td style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_2->other_current_liabilities))? $qun_2->other_current_liabilities : 0) - intval((isset($qun_1->other_current_liabilities))? $qun_1->other_current_liabilities : 0))?></td>
                </tr>
                <tr>
                    <td>Total Non-Current Liabilities</td>
                    <td style="text-align:right"><?= number_format((isset($qun_3->total_non_current_liabilities))? $qun_3->total_non_current_liabilities : 0)?></td>
                    <td style="text-align:right"><?= number_format((isset($qun_2->total_non_current_liabilities))? $qun_2->total_non_current_liabilities : 0)?></td>
                    <td style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_3->total_non_current_liabilities))? $qun_3->total_non_current_liabilities : 0) - intval((isset($qun_2->total_non_current_liabilities))? $qun_2->total_non_current_liabilities : 0))?></td>
                    <td style="text-align:right"><?= number_format((isset($qun_1->total_non_current_liabilities))? $qun_1->total_non_current_liabilities : 0)?></td>
                    <td style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_2->total_non_current_liabilities))? $qun_2->total_non_current_liabilities : 0) - intval((isset($qun_1->total_non_current_liabilities))? $qun_1->total_non_current_liabilities : 0))?></td>
                </tr>
                <tr>

                    <td>Total Liabilities </td>
                    <td style="text-align:right"><?= number_format((isset($qun_3->total_liabilities))? $qun_3->total_liabilities : 0)?></td>
                    <td style="text-align:right"><?= number_format((isset($qun_2->total_liabilities))? $qun_2->total_liabilities : 0)?></td>
                    <td style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_3->total_liabilities))? $qun_3->total_liabilities : 0) - intval((isset($qun_2->total_liabilities))? $qun_2->total_liabilities : 0))?></td>
                    <td style="text-align:right"><?= number_format((isset($qun_1->total_liabilities))? $qun_1->total_liabilities : 0)?></td>
                    <td style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_2->total_liabilities))? $qun_2->total_liabilities : 0) - intval((isset($qun_1->total_liabilities))? $qun_1->total_liabilities : 0))?></td>
                </tr>
                <tr>
                    <td>Share Capital </td>
                    <td style="text-align:right"><?= number_format((isset($qun_3->profit_after_tax))? $qun_3->profit_after_tax : 0)?></td>
                    <td style="text-align:right"><?= number_format((isset($qun_2->profit_after_tax))? $qun_2->profit_after_tax : 0)?></td>
                    <td style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_3->profit_after_tax))? $qun_3->profit_after_tax : 0) - intval((isset($qun_2->profit_after_tax))? $qun_2->profit_after_tax : 0))?></td>
                    <td style="text-align:right"><?= number_format((isset($qun_1->profit_after_tax))? $qun_1->profit_after_tax : 0)?></td>
                    <td style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_2->profit_after_tax))? $qun_2->profit_after_tax : 0) - intval((isset($qun_1->profit_after_tax))? $qun_1->profit_after_tax : 0))?></td>
                </tr>
                <tr>
                    <td>Total Equity</td>
                    <td style="text-align:right"><?= number_format((isset($qun_3->profit_after_tax))? $qun_3->profit_after_tax : 0)?></td>
                    <td style="text-align:right"><?= number_format((isset($qun_2->profit_after_tax))? $qun_2->profit_after_tax : 0)?></td>
                    <td style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_3->profit_after_tax))? $qun_3->profit_after_tax : 0) - intval((isset($qun_2->profit_after_tax))? $qun_2->profit_after_tax : 0))?></td>
                    <td style="text-align:right"><?= number_format((isset($qun_1->profit_after_tax))? $qun_1->profit_after_tax : 0)?></td>
                    <td style="text-align:right"><?= $this->jics->indicators(intval((isset($qun_2->profit_after_tax))? $qun_2->profit_after_tax : 0) - intval((isset($qun_1->profit_after_tax))? $qun_1->profit_after_tax : 0))?></td>
                </tr>
            </tbody>
        </table>
        <!-- Balance Sheet -->
    </div>
    <div class="clearfix"></div>
    <!-- Financial Summary  -->
</page>
<div class="clearfix "></div>  

<page size="A4">
    <div class="header"></div>
    <div class="content">
        <h2>Key Performance Indicator Analysis</h2>
        <table class="table cardview table-striped ">
            <thead class="thead-light">
                <tr>
                    <th width='20%'><b> Ratio</b></th>
                    <th width='80%'>Entity Performance Explanation </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><b> Gross Profit Margin</b></td>
                    <td><?= $this->jics->gross_profit_margin((isset($cal_1[0]->gross_profit_margin))? $cal_1[0]->gross_profit_margin : 0) ?></td>
                </tr>
                <tr>
                    <td><b> Net Profit Margin </b></td>
                    <td><?= $this->jics->net_profit_margin((isset($cal_1[0]->net_profit_margin))? $cal_1[0]->net_profit_margin : 0) ?></td>
                </tr>

                <tr>
                    <td><b> Return on Assets</b></td>
                    <td><?= $this->jics->return_on_assets((isset($cal_1[0]->return_on_assets))? $cal_1[0]->return_on_assets : 0) ?></td>
                </tr>
                <tr>
                    <td><b> Current Ratio</b> </td>
                    <td><?= $this->jics->current_ratio((isset($cal_1[0]->current_ratio))? $cal_1[0]->current_ratio : 0) ?></td>
                </tr>
                <tr>
                    <td><b> Quick Ratio</b> </td>
                    <td><?= $this->jics->quick_ratio((isset($cal_1[0]->quick_ratio))? $cal_1[0]->quick_ratio : 0) ?></td>
                </tr>

                <tr>
                    <td><b> Gearing</b></td>
                    <td><?= $this->jics->gearing((isset($cal_1[0]->gearing))? $cal_1[0]->gearing : 0) ?></td>
                </tr>
                <tr>
                    <td><b> Interest Coverage </b></td>
                    <td><?= $this->jics->interest_coverage((isset($cal_1[0]->interest_coverage))? $cal_1[0]->interest_coverage : 0) ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</page>



<page size="A4">
    <div class="header"></div>
    <div class="content">
        <h2 class="mt-5">Financial Trend Graphs</h2>
        <div class="col-md-12 row chart">

            <div class="col-md-6" id="revenue_chart"></div>
            <table id="revenue_tbl" style="display: none;">
                <thead>
                    <tr>
                        <th></th>
                        <th><?= (isset($qun_3->financial_year))? $qun_3->financial_year : "N/A"?></th>
                        <th><?= (isset($qun_2->financial_year))? $qun_2->financial_year : "N/A"?></th>
                        <th><?= (isset($qun_1->financial_year))? $qun_1->financial_year : "N/A"?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td><?= (isset($qun_3->sales))? $qun_3->sales : 0 ?></td>
                        <td><?= (isset($qun_2->sales))? $qun_2->sales : 0 ?></td>
                        <td><?= (isset($qun_1->sales))? $qun_1->sales : 0 ?></td>
                    </tr>
                </tbody>
            </table>
            <script type="text/javascript">
                Highcharts.chart('revenue_chart', {
                    data: {
                        table: 'revenue_tbl'
                    },
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Revenue'
                    },
                    yAxis: {
                        allowDecimals: false,
                        title: {
                            text: ''
                        }
                    },
                    plotOptions: {
                      column: {
                        dataLabels: {
                          enabled: true
                      }
                  }
              },
          });
      </script>
      <div class="col-md-6" id="gp_np_margin"></div>
      <table id="gp_np_table" style="display: none;">
        <thead>
            <tr>
                <th></th>
                <th>GP Margin</th>
                <th>NP Margin</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><?= (isset($qun_3->financial_year))? $qun_3->financial_year : 'N/A' ?></th>
                <td><?= (isset($qun_3->gross_profit))? $qun_3->gross_profit : 0 ; ?></td>
                <td><?= (isset($cal_3[0]->net_profit_margin))? $cal_3[0]->net_profit_margin : 0 ?></td>
            </tr>
            <tr>
              <th><?= (isset($qun_2->financial_year))? $qun_2->financial_year : 'N/A' ?></th>
              <td><?= (isset($qun_2->gross_profit))? $qun_2->gross_profit : 0 ; ?></td>
              <td><?= (isset($cal_2[0]->net_profit_margin))? $cal_2[0]->net_profit_margin : 0 ?></td>
          </tr>
          <tr>
             <th><?= (isset($qun_1->financial_year))? $qun_1->financial_year : 'N/A' ?></th>
             <td><?= (isset($qun_1->gross_profit))? $qun_1->gross_profit : 0 ; ?></td>
             <td><?= (isset($cal_1[0]->net_profit_margin))? $cal_1[0]->net_profit_margin : 0 ?></td>
         </tr>
     </tbody>
 </table>
 <script type="text/javascript">
   Highcharts.chart('gp_np_margin', {
    data: {
        table: 'gp_np_table'
    },
    chart: {
        type: 'line'
    },
    title: {
        text: 'GP & NP Margin'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: ''
        }
    },
    plotOptions: {
      column: {
        dataLabels: {
          enabled: true
      }
  }
},
});
</script>

<div class="col-md-6" id="gp_np_margin_bar_chart" style="height: 500px"></div>
<table id="gp_np_margin_bar_tbl" style="display: none;">
    <thead>
        <tr>
            <th></th>
            <th>Gross Profit</th>
            <th>Profit Before Tax </tr>
            </thead>
            <tbody>
                <tr>
                    <th><?= (isset($qun_3->financial_year))? $qun_3->financial_year : "N/A"?></th>
                    <td><?= (isset($qun_3->gross_profit))? $qun_3->gross_profit : 0 ?></td>
                    <td><?= (isset($qun_3->profit_before_tax))? $qun_3->profit_before_tax : 0 ?></td>
                </tr>
                <tr>
                    <th><?= (isset($qun_2->financial_year))? $qun_2->financial_year : "N/A"?></th>
                    <td><?= (isset($qun_2->gross_profit))? $qun_2->gross_profit : 0 ?></td>
                    <td><?= (isset($qun_2->profit_before_tax))? $qun_2->profit_before_tax : 0 ?></td>
                </tr>
                <tr>
                    <th><?= (isset($qun_1->financial_year))? $qun_1->financial_year : "N/A"?></th>
                    <td><?= (isset($qun_1->gross_profit))? $qun_1->gross_profit : 0 ?></td>
                    <td><?= (isset($qun_1->profit_before_tax))? $qun_1->profit_before_tax : 0 ?></td>
                </tr>
            </tbody>
        </table>
        <script type="text/javascript">
          Highcharts.chart('gp_np_margin_bar_chart', {
            data: {
                table: 'gp_np_margin_bar_tbl'
            },
            chart: {
                type: 'column'
            },
            title: {
                text: 'Revenue'
            },
            yAxis: {
                allowDecimals: false,
                title: {
                    text: 'valus'
                }
            },
            plotOptions: {
              column: {
                dataLabels: {
                  enabled: true
              }
          }
      },
  });
</script>

<div class="col-md-6" id="ebitda_ebit_chart" style="height: 500px"></div>
<table id="ebitda_ebit_tbl" style="display: none;">
    <thead>
        <tr>
            <th></th>
            <th>Normalised EBITDA</th>
            <th>EBIT</tr>
            </thead>
            <tbody>
                <tr>
                    <th><?= (isset($qun_3->financial_year))? $qun_3->financial_year : "N/A"?></th>
                    <td><?= (isset($qun_3->ebitda))? $qun_3->ebitda : 0 ?></td>
                    <td><?= (isset($qun_3->ebit))? $qun_3->ebit : 0 ?></td>
                </tr>
                <tr>
                    <th><?= (isset($qun_2->financial_year))? $qun_2->financial_year : "N/A"?></th>
                    <td><?= (isset($qun_2->ebitda))? $qun_2->ebitda : 0 ?></td>
                    <td><?= (isset($qun_2->ebit))? $qun_2->ebit : 0 ?></td>
                </tr>
                <tr>
                    <th><?= (isset($qun_1->financial_year))? $qun_1->financial_year : "N/A"?></th>
                    <td><?= (isset($qun_1->ebitda))? $qun_1->ebitda : 0 ?></td>
                    <td><?= (isset($qun_1->ebit))? $qun_1->ebit : 0 ?></td>
                </tr>
            </tbody>
        </table>
        <script type="text/javascript">
            Highcharts.chart('ebitda_ebit_chart', {
                data: {
                    table: 'ebitda_ebit_tbl'
                },
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Normalised EBITDA & EBIT'
                },
                yAxis: {
                    allowDecimals: false,
                    title: {
                        text: ''
                    }
                },
                plotOptions: {
                  column: {
                    dataLabels: {
                      enabled: true
                  }
              }
          },
      });
  </script>

  <div class="col-md-6" id="liq_ratio_chart" style="height: 500px"></div>
  <table id="liq_ratio_tbl" style="display: none;">
    <thead>
        <tr>
            <th></th>
            <th>current ratio</th>
            <th>quick ratio </th>
            <th>cash ratio</th>
        </thead>
        <tbody>
            <tr>
                <th><?= (isset($qun_3->financial_year))? $qun_3->financial_year : "N/A"?></th>
                <td><?= (isset($cal_3[0]->current_ratio))? $cal_3[0]->current_ratio  : 0 ;?></td>
                <td><?= (isset($cal_3[0]->quick_ratio))? $cal_3[0]->quick_ratio  : 0 ;?></td>
                <td><?= (isset($cal_3[0]->cash_ratio))? $cal_3[0]->cash_ratio  : 0 ;?></td>
            </tr>
            <tr>
                <th><?= (isset($qun_2->financial_year))? $qun_2->financial_year : "N/A"?></th>
                <td><?= (isset($cal_2[0]->current_ratio))? $cal_2[0]->current_ratio : 0 ?></td>
                <td><?= (isset($cal_2[0]->quick_ratio))? $cal_2[0]->quick_ratio : 0 ?></td>
                <td><?= (isset($cal_2[0]->cash_ratio))? $cal_2[0]->cash_ratio : 0 ?></td>
            </tr>
            <tr>
                <th><?= (isset($qun_1->financial_year))? $qun_1->financial_year : "N/A"?></th>
                <td><?= (isset($cal_1[0]->current_ratio))? $cal_1[0]->current_ratio : 0 ?></td>
                <td><?= (isset($cal_1[0]->quick_ratio))? $cal_1[0]->quick_ratio : 0 ?></td>
                <td><?= (isset($cal_1[0]->cash_ratio))? $cal_1[0]->cash_ratio : 0 ?></td>
            </tr>
        </tbody>
    </table>
    <script type="text/javascript">
        Highcharts.chart('liq_ratio_chart', {
            data: {
                table: 'liq_ratio_tbl'
            },
            chart: {
                type: 'column'
            },
            title: {
                text: 'Liquidity Ratio'
            },
            yAxis: {
                allowDecimals: false,
                title: {
                    text: ''
                }
            },
            plotOptions: {
              column: {
                dataLabels: {
                  enabled: true
              }
          }
      },
  });
</script>
<div class="col-md-6" id="un_kwn_chart"></div>
<table id="un_kwn_tbl" style="display: none;">
    <thead>
        <tr>
            <th></th>
            <th>Current Assets</th>
            <th>Current Liabilities</th>
            <th>Working Capital</th>
        </thead>
        <tbody>
            <tr>
                <th><?= (isset($qun_3->financial_year))? $qun_3->financial_year : "N/A"?></th>
                <td><?= (isset($qun_3->total_current_assets))? $qun_3->total_current_assets : 0 ?></td>
                <td><?= (isset($qun_3->total_current_liabilities))? $qun_3->total_current_liabilities : 0 ?></td>
                <td><?= (isset($cal_3[0]->working_capital))? $cal_3[0]->working_capital : 0 ?></td>
            </tr>
            <tr>
                <th><?= (isset($qun_2->financial_year))? $qun_2->financial_year : "N/A"?></th>
                <td><?= (isset($qun_2->total_current_assets))? $qun_2->total_current_assets : 0 ?></td>
                <td><?= (isset($qun_2->total_current_liabilities))? $qun_2->total_current_liabilities : 0 ?></td>
                <td><?= (isset($cal_2[0]->working_capital))? $cal_2[0]->working_capital : 0 ?></td>
            </tr>
            <tr>
                <th><?= (isset($qun_1->financial_year))? $qun_1->financial_year : "N/A"?></th>
                <td><?= (isset($qun_1->total_current_assets))? $qun_1->total_current_assets : 0 ?></td>
                <td><?= (isset($qun_1->total_current_liabilities))? $qun_1->total_current_liabilities : 0 ?></td>
                <td><?= (isset($cal_1[0]->working_capital))? $cal_1[0]->working_capital : 0 ?></td>
            </tr>
        </tbody>
    </table>
    <script type="text/javascript">

        Highcharts.chart('un_kwn_chart', {
            data: {
                table: 'un_kwn_tbl'
            },
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            yAxis: {
                allowDecimals: false,
                title: {
                    text: ''
                }
            },
            plotOptions: {
              column: {
                dataLabels: {
                  enabled: true
              }
          }
      },

  });
</script>

<div id="chart_equity" style="height: 500px"></div>
<script type="text/javascript">
    Highcharts.chart('chart_equity', {
        chart: {
            zoomType: 'xy'
        },
        title: {
            text: 'Equity'
        },
        xAxis: [{
            categories: ['<?= (isset($qun_3->financial_year))? $qun_3->financial_year: "N/A"?>','<?= (isset($qun_2->financial_year))? $qun_2->financial_year: "N/A"?>','<?= (isset($qun_1->financial_year))? $qun_1->financial_year: "N/A"?>'],
            crosshair: true
        }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }
    }, { // Secondary yAxis
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        x: 120,
        verticalAlign: 'top',
        y: 100,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || // theme
            'rgba(255,255,255,0.25)'
        },
        series: [{
            name: 'Total Assets',
            type: 'column',
            yAxis: 1,
            data: [<?= (isset($qun_3->total_current_assets))?$qun_3->total_current_assets : 0?>,<?= (isset($qun_2->total_current_assets))?$qun_2->total_current_assets : 0?>,<?= (isset($qun_1->total_current_assets))?$qun_1->total_current_assets : 0?>],
            tooltip: {
                valueSuffix: ''
            }

        }, {
            name: 'Total Debt',
            type: 'column',
            <?php 
            $x1 = (isset($qun_1->total_current_assets))? : 0;
            $x2 = (isset($qun_1->loan_from_related_parites))? : 0;
            $x3 = (isset($qun_1->interest_bearing_debt_1))? : 0;
            $x4 = (isset($qun_1->loans_from_related_parites))? : 0;
            $x5 = (isset($qun_2->total_current_assets))? : 0;
            $x6 = (isset($qun_2->loan_from_related_parites))? : 0;
            $x7 = (isset($qun_2->interest_bearing_debt_1))? : 0;
            $x8 = (isset($qun_2->loans_from_related_parites))? : 0;
            $x9 = (isset($qun_3->total_current_assets))? : 0;
            $x10 = (isset($qun_3->loan_from_related_parites))? : 0;
            $x11 = (isset($qun_3->interest_bearing_debt_1))? : 0;
            $x12 = (isset($qun_3->loans_from_related_parites))? : 0;
            $eq_qun_1 = $x1 + $x2 + $x3 +$x4;
            $eq_qun_2 = $x5 + $x6 + $x7 +$x8;
            $eq_qun_3 = $x9 + $x10 + $x11 +$x12;
            ?>
            data: [<?= $eq_qun_3?>,<?= $eq_qun_2?>,<?= $eq_qun_1?>],
            tooltip: {
                valueSuffix: ''
            }
        },{
            name: 'Equity',
            type: 'spline',
            data: [<?= (isset($qun_3->total_equity))? $qun_3->total_equity: 0 ?>,<?= (isset($qun_2->total_equity))? $qun_2->total_equity: 0 ?>,<?= (isset($qun_1->total_equity))? $qun_1->total_equity: 0 ?>],
            tooltip: {
                valueSuffix: ''
            }
        }]
    });

</script>

<div id="container" style="height: 500px;"></div>
<script type="text/javascript">
    Highcharts.chart('container', {
        chart: {
            zoomType: 'xy'
        },
        title: {
            text: 'Debet to Equity and Interest Cover'
        },

        xAxis: [{
            categories: ['<?= (isset($qun_3->financial_year))? $qun_3->financial_year: "N/A"?>','<?= (isset($qun_2->financial_year))? $qun_2->financial_year: "N/A"?>','<?= (isset($qun_1->financial_year))? $qun_1->financial_year: "N/A"?>'],
            crosshair: true
        }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }
    }, { // Secondary yAxis
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        x: 120,
        verticalAlign: 'top',
        y: 100,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || // theme
            'rgba(255,255,255,0.25)'
        },
        series: [{
            name: 'Debet to Equity',
            type: 'column',
            yAxis: 1,
            data: [<?= (isset($cal_1->debt_to_equity))? $cal_1->debt_to_equity : 0 ;?>,<?= (isset($cal_2->debt_to_equity))? $cal_2->debt_to_equity : 0 ;?>,<?= (isset($cal_3->debt_to_equity))? $cal_3->debt_to_equity : 0 ;?>],
            tooltip: {
                valueSuffix: ''
            }

        },{
            name: 'Interest Coverage',
            type: 'spline',
            data: [<?= (isset($cal_1->interest_coverage))? $cal_1->interest_coverage : 0?>, <?= (isset($cal_2->interest_coverage))? $cal_2->interest_coverage : 0?>, <?= (isset($cal_3->interest_coverage))? $cal_3->interest_coverage : 0?>],
            tooltip: {
                valueSuffix: ''
            }
        }]
    });
</script>



</div>
<!-- Financial Performance  -->

</div>
</div>
</div>
</page>

<page size="A4">
    <div class="header"></div>
    <div class="content">
     <!-- Financial Performance  -->

     <div class="row">
        <h2>Financial Performance </h2>
        <table class="table cardview summary-table">
            <tbody>
                <tr>
                    <th style="width:40%">Rounding</th>
                </tr>
                <td style="text-align:right"><?= (isset($qun_3->rounding))? $qun_3->rounding : " N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_2->rounding))? $qun_2->rounding : " N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_1->rounding))? $qun_1->rounding : " N/A" ?></td>
                <tr>
                    <th style="width:40%">Base Currency</th>
                </tr>
                <td style="text-align:right"><?= (isset($qun_3->base_currency))? $qun_3->base_currency : " N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_2->base_currency))? $qun_2->base_currency : " N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_1->base_currency))? $qun_1->base_currency : " N/A" ?></td>
                <tr>
                    <th style="width:40%">Quality</th>
                </tr>
                <td style="text-align:right"><?= (isset($qun_3->quality))? $qun_3->quality : " N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_2->quality))? $qun_2->quality : " N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_1->quality))? $qun_1->quality : " N/A" ?></td>

                <tr>
                    <th style="width:40%">Reporting Period - Months</th>
                </tr>
                <td style="text-align:right"><?= (isset($qun_3->reporting_period_months))? $qun_3->reporting_period_months : " N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_2->reporting_period_months))? $qun_2->reporting_period_months : " N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_1->reporting_period_months))? $qun_1->reporting_period_months : " N/A" ?></td>
                <tr>
                    <th style="width:40%">Scope</th>
                </tr>
                <td style="text-align:right"><?= (isset($qun_3->scope))? $qun_3->scope : " N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_2->scope))? $qun_2->scope : " N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_1->scope))? $qun_1->scope : " N/A" ?></td>
                <tr>
                    <th style="width:40%">Confidentiality Record </th>
                </tr>
                <td style="text-align:right"><?= (isset($qun_3->confidentiality_record))? $qun_3->confidentiality_record : " N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_2->confidentiality_record))? $qun_2->confidentiality_record : " N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_1->confidentiality_record))? $qun_1->confidentiality_record : " N/A" ?></td>
                <tr>
                    <th style="width:40%">Financial Year</th>
                </tr>
                <td style="text-align:right"><?= (isset($qun_3->financial_year))? "FY".$qun_3->financial_year : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_2->financial_year))? "FY".$qun_2->financial_year : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_1->financial_year))? "FY".$qun_1->financial_year : "N/A" ?></td>
                <tr>
                    <th style="width:40%">Month</th>
                </tr>
                <td style="text-align:right"><?= (isset($qun_3->month))? $qun_3->month : " N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_2->month))? $qun_2->month : " N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_1->month))? $qun_1->month : " N/A" ?></td>
            </tbody>
        </table>

        <!-- Income Statement -->
        <h4>Income Statement</h4>
        <table class="table">
            <tbody>
                <tr>
                    <th style="width:40%">Sales </th>
                    <td style="text-align:right"><?= (isset($qun_3->sales))? $qun_3->sales : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->sales))? $qun_2->sales : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->sales))? $qun_1->sales : "N/A" ?></td>
                </tr>
                <tr>
                    <th style="width:40%">Cost of Sales</th>
                    <td style="text-align:right"><?= (isset($qun_3->cost_of_sales))? $qun_3->cost_of_sales : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->cost_of_sales))? $qun_2->cost_of_sales : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->cost_of_sales))? $qun_1->cost_of_sales : "N/A" ?></td>
                </tr>

                <tr>
                    <th style="width:40%">Gross Profit </th>
                    <td style="text-align:right"><?= (isset($qun_3->gross_profit))? $qun_3->gross_profit : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->gross_profit))? $qun_2->gross_profit : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->gross_profit))? $qun_1->gross_profit : "N/A" ?></td>
                </tr>
                <tr>
                    <th style="width:40%">Depreciation </th>
                    <td style="text-align:right"><?= (isset($qun_3->depreciation))? $qun_3->depreciation : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->depreciation))? $qun_2->depreciation : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->depreciation))? $qun_1->depreciation : "N/A" ?></td>
                </tr>

                <tr>
                    <th style="width:40%">Amortisation </th>
                    <td style="text-align:right"><?= (isset($qun_3->amortisation))? $qun_3->amortisation : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->amortisation))? $qun_2->amortisation : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->amortisation))? $qun_1->amortisation : "N/A" ?></td>
                </tr>
                <tr>
                    <th style="width:40%">Impairment</th>
                    <td style="text-align:right"><?= (isset($qun_3->impairment))? $qun_3->impairment : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->impairment))? $qun_2->impairment : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->impairment))? $qun_1->impairment : "N/A" ?></td>
                </tr>

                <tr>
                    <th style="width:40%">Interest Expense (Gross) </th>
                    <td style="text-align:right"><?= (isset($qun_3->interest_expense_gross))? $qun_3->interest_expense_gross : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->interest_expense_gross))? $qun_2->interest_expense_gross : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->interest_expense_gross))? $qun_1->interest_expense_gross : "N/A" ?></td>
                </tr>
                <tr>
                    <th style="width:40%">Operating Lease Expense</th>
                    <td style="text-align:right"><?= (isset($qun_3->operating_lease_expense))? $qun_3->operating_lease_expense : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->operating_lease_expense))? $qun_2->operating_lease_expense : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->operating_lease_expense))? $qun_1->operating_lease_expense : "N/A" ?></td>
                </tr>

                <tr>
                    <th style="width:40%">Finance Lease and hire purchase charges </th>
                    <td style="text-align:right"><?= (isset($qun_3->finance_lease_hire_purchase_charges))? $qun_3->finance_lease_hire_purchase_charges : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->finance_lease_hire_purchase_charges))? $qun_2->finance_lease_hire_purchase_charges : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->finance_lease_hire_purchase_charges))? $qun_1->finance_lease_hire_purchase_charges : "N/A" ?></td>
                </tr>
                <tr>
                    <th style="width:40%">Non- Recurring Gains/ (Losses)</th>
                    <td style="text-align:right"><?= (isset($qun_3->non_recurring_gains_losses))? $qun_3->non_recurring_gains_losses : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->non_recurring_gains_losses))? $qun_2->non_recurring_gains_losses : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->non_recurring_gains_losses))? $qun_1->non_recurring_gains_losses : "N/A" ?></td>
                </tr>

                <tr>
                    <th style="width:40%">Other Gains / (Losses) </th>
                    <td style="text-align:right"><?= (isset($qun_3->other_gains_losses))? $qun_3->other_gains_losses : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->other_gains_losses))? $qun_2->other_gains_losses : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->other_gains_losses))? $qun_1->other_gains_losses : "N/A" ?></td>
                </tr>
                <tr>
                    <th style="width:40%">Other Expenses</th>
                    <td style="text-align:right"><?= (isset($qun_3->other_expenses))? $qun_3->other_expenses : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->other_expenses))? $qun_2->other_expenses : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->other_expenses))? $qun_1->other_expenses : "N/A" ?></td>
                </tr>

                <tr>
                    <th style="width:40%">EBIT </th>
                    <td style="text-align:right"><?= (isset($qun_3->ebit))? $qun_3->ebit : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->ebit))? $qun_2->ebit : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->ebit))? $qun_1->ebit : "N/A" ?></td>
                </tr>
                <tr>
                    <th style="width:40%">EBITDA</th>
                    <td style="text-align:right"><?= (isset($qun_3->ebitda))? $qun_3->ebitda : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->ebitda))? $qun_2->ebitda : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->ebitda))? $qun_1->ebitda : "N/A" ?></td>
                </tr>

                <tr>
                    <th style="width:40%">Normalised EBITDA </th>
                    <td style="text-align:right"><?= (isset($qun_3->normalised_ebitda))? $qun_3->normalised_ebitda : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->normalised_ebitda))? $qun_2->normalised_ebitda : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->normalised_ebitda))? $qun_1->normalised_ebitda : "N/A" ?></td>
                </tr>
                <tr>
                    <th style="width:40%">Profit Before Tax </th>
                    <td style="text-align:right"><?= (isset($qun_3->profit_before_tax))? $qun_3->profit_before_tax : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->profit_before_tax))? $qun_2->profit_before_tax : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->profit_before_tax))? $qun_1->profit_before_tax : "N/A" ?></td>
                </tr>

                <tr>
                    <th style="width:40%">Profit Before Tax (After Abnormals) </th>
                    <td style="text-align:right"><?= (isset($qun_3->profit_before_tax_after_abnormals))? $qun_3->profit_before_tax_after_abnormals : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->profit_before_tax_after_abnormals))? $qun_2->profit_before_tax_after_abnormals : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->profit_before_tax_after_abnormals))? $qun_1->profit_before_tax_after_abnormals : "N/A" ?></td>
                </tr>
                <tr>
                    <th style="width:40%">Tax benefit/ (expense)</th>
                    <td style="text-align:right"><?= (isset($qun_3->tax_benefit_expense))? $qun_3->tax_benefit_expense : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->tax_benefit_expense))? $qun_2->tax_benefit_expense : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->tax_benefit_expense))? $qun_1->tax_benefit_expense : "N/A" ?></td>
                </tr>
                <tr>
                    <th style="width:40%">Profit After Tax</th>
                    <td style="text-align:right"><?= (isset($qun_3->profit_after_tax))? $qun_3->profit_after_tax : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->profit_after_tax))? $qun_2->profit_after_tax : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->profit_after_tax))? $qun_1->profit_after_tax : "N/A" ?></td>
                </tr>
            </tr>
            <tr>
                <th style="width:40%">Distribution or Dividends </th>
                <td style="text-align:right"><?= (isset($qun_3->distribution_ordividends))? $qun_3->distribution_ordividends : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_2->distribution_ordividends))? $qun_2->distribution_ordividends : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_1->distribution_ordividends))? $qun_1->distribution_ordividends : "N/A" ?></td>
            </tr>
        </tr>
        <tr>
            <th style="width:40%">Other Post Tax Items - Gains/ (Losses)</th>
            <td style="text-align:right"><?= (isset($qun_3->other_post_tax_items_gains_losses))? $qun_3->other_post_tax_items_gains_losses : "N/A" ?></td>
            <td style="text-align:right"><?= (isset($qun_2->other_post_tax_items_gains_losses))? $qun_2->other_post_tax_items_gains_losses : "N/A" ?></td>
            <td style="text-align:right"><?= (isset($qun_1->other_post_tax_items_gains_losses))? $qun_1->other_post_tax_items_gains_losses : "N/A" ?></td>
        </tr>
        <tr>
            <th style="width:40%">Profit After Tax & Distribution </th>
            <td style="text-align:right"><?= (isset($qun_3->profit_after_tax_distribution))? $qun_3->profit_after_tax_distribution : "N/A" ?></td>
            <td style="text-align:right"><?= (isset($qun_2->profit_after_tax_distribution))? $qun_2->profit_after_tax_distribution : "N/A" ?></td>
            <td style="text-align:right"><?= (isset($qun_1->profit_after_tax_distribution))? $qun_1->profit_after_tax_distribution : "N/A" ?></td>
        </tr>

    </tbody>
</table>
<!-- Income Statement -->


</div>
<!-- Financial Performance  -->


</div>
</div>
</div>
</page>

<page size="A4">
    <div class="header"></div>
    <div class="content">

        <!-- Balance Sheet  -->
        <h4 class="mt-5">Balance Sheet </h4>
        <table class="table">
            <thead>
                <tr>
                    <th colspan="4" class="theading">Assets</th>
                </tr>
            </thead>
            <tr>
                <td style="width:40%"><b>Cash</b></td>
                <td style="text-align:right"><?= (isset($qun_3->cash))? : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_2->cash))? : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_1->cash))? : "N/A" ?></td>
            </tr>
            <tr>
                <td style="width:40%"><b>Trade Debtors</b></td>
                <td style="text-align:right"><?= (isset($qun_3->trade_debtors))? : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_2->trade_debtors))? : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_1->trade_debtors))? : "N/A" ?></td>
            </tr>
            <tr>
                <td style="width:40%"><b>Total Inventories</b></td>
                <td style="text-align:right"><?= (isset($qun_3->total_inventories))? : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_2->total_inventories))? : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_1->total_inventories))? : "N/A" ?></td>
            </tr>
            <tr>
                <td style="width:40%"><b>Loans to Related Parties</b></td>
                <td style="text-align:right"><?= (isset($qun_3->loans_to_related_parties_1))? : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_2->loans_to_related_parties_1))? : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_1->loans_to_related_parties_1))? : "N/A" ?></td>
            </tr>
            <tr>
                <td style="width:40%"><b>Other Current Assets </b></td>
                <td style="text-align:right"><?= (isset($qun_3->other_current_assets))? : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_2->other_current_assets))? : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_1->other_current_assets))? : "N/A" ?></td>
            </tr>
            <tr>
                <td style="width:40%"><b>Total Current Assets</b></td>
                <td style="text-align:right"><?= (isset($qun_3->total_current_assets))? : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_2->total_current_assets))? : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_1->total_current_assets))? : "N/A" ?></td>
            </tr>
            <tr>
                <td style="width:40%"><b>Fixed Assets</b></td>
                <td style="text-align:right"><?= (isset($qun_3->total_inventories))? : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_2->total_inventories))? : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_1->total_inventories))? : "N/A" ?></td>
            </tr>
            <tr>
                <td style="width:40%"><b>Net Intangibles</b></td>
                <td style="text-align:right"><?= (isset($qun_3->net_intangibles))? : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_2->net_intangibles))? : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_1->net_intangibles))? : "N/A" ?></td>
            </tr>
            <tr>
                <td style="width:40%"><b>Loans to Related Parties</b></td>
                <td style="text-align:right"><?= (isset($qun_3->loan_to_related_parties_2))? : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_2->loan_to_related_parties_2))? : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_1->loan_to_related_parties_2))? : "N/A" ?></td>
            </tr>
            <tr>
                <td style="width:40%"><b>Other Non-Current Assets </b></td>
                <td style="text-align:right"><?= (isset($qun_3->other_non_current_assets))? : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_2->other_non_current_assets))? : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_1->other_non_current_assets))? : "N/A" ?></td>
            </tr>
            <tr>
                <td style="width:40%"><b>Total Non-Current Assets </b></td>
                <td style="text-align:right"><?= (isset($qun_3->total_non_curent_assets))? : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_2->total_non_curent_assets))? : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_1->total_non_curent_assets))? : "N/A" ?></td>
            </tr>
            <tr>
                <td style="width:40%"><b>Total Assets </b></td>
                <td style="text-align:right"><?= (isset($qun_3->total_assets))? : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_2->total_assets))? : "N/A" ?></td>
                <td style="text-align:right"><?= (isset($qun_1->total_assets))? : "N/A" ?></td>
            </tr>
            <thead>
                <tr>
                    <th colspan="4" class="theading">Liabilities</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td  style="width:40%"><b>Trade Creditors</b></td>
                    <td style="text-align:right"><?= (isset($qun_3->trade_creditors))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->trade_creditors))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->trade_creditors))? : "N/A" ?></td>
                </tr>
                <tr>
                    <td  style="width:40%"><b>Interest Bearing Debt</b></td>
                    <td style="text-align:right"><?= (isset($qun_3->interest_bearing_debt_1))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->interest_bearing_debt_1))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->interest_bearing_debt_1))? : "N/A" ?></td>
                </tr>
                <tr>
                    <td  style="width:40%"><b>Loan from Related Parties</b></td>
                    <td style="text-align:right"><?= (isset($qun_3->lone_from_related_parties))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->lone_from_related_parties))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->lone_from_related_parties))? : "N/A" ?></td>
                </tr>
                <tr>
                    <td  style="width:40%"><b>Other Current Liabilities</b></td>
                    <td style="text-align:right"><?= (isset($qun_3->other_current_liabilities))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->other_current_liabilities))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->other_current_liabilities))? : "N/A" ?></td>
                </tr>
                <tr>
                    <td  style="width:40%"><b>Total Current Liabilities</b></td>
                    <td style="text-align:right"><?= (isset($qun_3->total_current_liabilities))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->total_current_liabilities))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->total_current_liabilities))? : "N/A" ?></td>
                </tr>
                <tr>
                    <td  style="width:40%"><b>Interest Bearing Debt </b></td>
                    <td style="text-align:right"><?= (isset($qun_3->total_current_liabilities_2))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->total_current_liabilities_2))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->total_current_liabilities_2))? : "N/A" ?></td>
                </tr>
                <tr>
                    <td  style="width:40%"><b>Loan from Related Parties </b></td>
                    <td style="text-align:right"><?= (isset($qun_3->loans_from_related_parites))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->loans_from_related_parites))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->loans_from_related_parites))? : "N/A" ?></td>
                </tr>
                <tr>
                    <td  style="width:40%"><b>Other Non-Current Liabilities</b></td>
                    <td style="text-align:right"><?= (isset($qun_3->other_non_current_liabilities))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->other_non_current_liabilities))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->other_non_current_liabilities))? : "N/A" ?></td>
                </tr>
                <tr>
                    <td  style="width:40%"><b>Total Non-Current Liabilities</b></td>
                    <td style="text-align:right"><?= (isset($qun_3->total_non_current_liabilities))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->total_non_current_liabilities))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->total_non_current_liabilities))? : "N/A" ?></td>
                </tr>
                <tr>
                    <td  style="width:40%"><b>Total Liabilities </b></td>
                    <td style="text-align:right"><?= (isset($qun_3->total_liabilities))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->total_liabilities))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->total_liabilities))? : "N/A" ?></td>
                </tr>
            </tbody>

        </table>


    </div>
</div>
</page>

<page size="A4">
    <div class="header"></div>
    <div class="content">
        <table class="table">
            <thead>
                <tr>
                    <th class="theading">Equity</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td  style="width:40%"><b>Share Capital </b></td>
                    <td style="text-align:right"><?= (isset($qun_3->share_capital))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->share_capital))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->share_capital))? : "N/A" ?></td>
                </tr>
                <tr>
                    <td  style="width:40%"><b>Preference Shares </b></td>
                    <td style="text-align:right"><?= (isset($qun_3->prefence_shares))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->prefence_shares))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->prefence_shares))? : "N/A" ?></td>
                </tr>
                <tr>
                    <td  style="width:40%"><b>Treasury Shares</b></td>
                    <td style="text-align:right"><?= (isset($qun_3->treasury_shares))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->treasury_shares))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->treasury_shares))? : "N/A" ?></td>
                </tr>
                <tr>
                    <td  style="width:40%"><b>Equity Ownerships</b></td>
                    <td style="text-align:right"><?= (isset($qun_3->equity_owner_ships))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->equity_owner_ships))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->equity_owner_ships))? : "N/A" ?></td>
                </tr>
                <tr>
                    <td  style="width:40%"><b>Total Reserves</b></td>
                    <td style="text-align:right"><?= (isset($qun_3->total_reserves))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->total_reserves))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->total_reserves))? : "N/A" ?></td>
                </tr>
                <tr>
                    <td  style="width:40%"><b>Retained Earnings</b></td>
                    <td style="text-align:right"><?= (isset($qun_3->ratained_earning))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->ratained_earning))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->ratained_earning))? : "N/A" ?></td>
                </tr>
                <tr>
                    <td  style="width:40%"><b>Minority Interest </b></td>
                    <td style="text-align:right"><?= (isset($qun_3->minorty_interest))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->minorty_interest))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->minorty_interest))? : "N/A" ?></td>
                </tr>
                <tr>
                    <td  style="width:40%"><b>Total Equity </b></td>
                    <td style="text-align:right"><?= (isset($qun_3->total_equity))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->total_equity))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->total_equity))? : "N/A" ?></td>
                </tr>
            </tbody>
        </table>
        <!-- Balance Sheet  -->
        <table class="table  mt-5">


            <tbody class="mt-3">
                <tr>
                    <td style="width:40%"><b>Net Operating Cash Flow</b></td>
                    <td style="text-align:right"><?= (isset($qun_3->operating_cash_flow))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->operating_cash_flow))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->operating_cash_flow))? : "N/A" ?></td>
                </tr>
                <tr>
                    <td style="width:40%"><b>Other Commitments</b></td>
                    <td style="text-align:right"><?= (isset($qun_3->other_commitmentes))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->other_commitmentes))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->other_commitmentes))? : "N/A" ?></td>
                </tr>
                <tr>
                    <td style="width:40%"><b>Total Operating Lease Outstanding</b></td>
                    <td style="text-align:right"><?= (isset($qun_3->operating_lease_outstanding))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_2->operating_lease_outstanding))? : "N/A" ?></td>
                    <td style="text-align:right"><?= (isset($qun_1->operating_lease_outstanding))? : "N/A" ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</page>


<page size="A4">
    <div class="header"></div>
    <div class="content">
        <h2>Key Ratios</h2>
        <!-- table -->
        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>Denomination</th>
                    <th class="text-right">FY<?= (isset($qun_3->financial_year))? : "N/A" ?></th>
                    <th class="text-right">FY<?= (isset($qun_2->financial_year))? : "N/A" ?></th>
                    <th class="text-right">FY<?= (isset($qun_1->financial_year))? : "N/A" ?></th>
                    <th class="text-right">FY<?= (isset($qun_1->financial_year))? : "N/A" ?> Vs FY <?= (isset($qun_2->financial_year))? : "N/A" ?></th>
                </tr>
                <tr>
                    <th colspan="6" class="theading">Profitability</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Gross Profit Margin</td>
                    <td>%</td>
                    <td><?= (isset($cal_3[0]->gross_profit_margin))? $cal_3[0]->gross_profit_margin : 0 ; ?></td>
                    <td><?= (isset($cal_2[0]->gross_profit_margin))? $cal_2[0]->gross_profit_margin : 0 ; ?></td>
                    <td><?= (isset($cal_1[0]->gross_profit_margin))? $cal_1[0]->gross_profit_margin : 0 ; ?></td>
                    <td><?= ((isset($cal_1[0]->gross_profit_margin))? $cal_1[0]->gross_profit_margin : 0) - ((isset($cal_2[0]->gross_profit_margin))? $cal_2[0]->gross_profit_margin : 0) ?></td>
                </tr>
                <tr>
                    <td>EBIDTA</td>
                    <td>Thousands</td>
                    <td><?= (isset( $cal_3[0]->ebitda))?  $cal_3[0]->ebitda : 0 ?></td>
                    <td><?= (isset( $cal_2[0]->ebitda))?  $cal_2[0]->ebitda : 0 ?></td>
                    <td><?= (isset( $cal_1[0]->ebitda))?  $cal_1[0]->ebitda : 0 ?></td>
                    <td><?php $x1 = (isset($cal_1[0]->ebitda))? $cal_1[0]->ebitda : 0 ; $x2 = (isset($cal_2[0]->ebitda))? $cal_2[0]->ebitda : 0 ;  echo $x1 - $x2 ; ?></td>
                </tr>
                <tr>
                    <td>Net Profit Margin</td>
                    <td>%</td>
                    <td><?= (isset( $cal_3[0]->ebitda))?  $cal_3[0]->ebitda : 0 ?></td>
                    <td><?= (isset( $cal_2[0]->ebitda))?  $cal_2[0]->ebitda : 0 ?></td>
                    <td><?= (isset( $cal_1[0]->ebitda))?  $cal_1[0]->ebitda : 0 ?></td>
                    <td><?php $x1 = (isset($cal_1[0]->ebitda))? $cal_1[0]->ebitda : 0 ; $x2 = (isset($cal_2[0]->ebitda))? $cal_2[0]->ebitda : 0 ;  echo $x1 - $x2 ; ?></td>
                </tr>
                <tr>
                    <td>Profitability</td>
                    <td>%</td>
                    <td><?= (isset( $cal_3[0]->profitability))?  $cal_3[0]->profitability : 0 ?></td>
                    <td><?= (isset( $cal_2[0]->profitability))?  $cal_2[0]->profitability : 0 ?></td>
                    <td><?= (isset( $cal_1[0]->profitability))?  $cal_1[0]->profitability : 0 ?></td>
                    <td><?php $x1 = (isset($cal_1[0]->ebitda))? $cal_1[0]->ebitda : 0 ; $x2 = (isset($cal_2[0]->profitability))? $cal_2[0]->profitability : 0 ;  echo $x1 - $x2 ; ?></td>
                </tr>
                <tr>
                    <td>Reinvestment </td>
                    <td>%</td>
                    <td><?= (isset( $cal_3[0]->reinvestment))?  $cal_3[0]->reinvestment : 0 ?></td>
                    <td><?= (isset( $cal_2[0]->reinvestment))?  $cal_2[0]->reinvestment : 0 ?></td>
                    <td><?= (isset( $cal_1[0]->reinvestment))?  $cal_1[0]->reinvestment : 0 ?></td>
                    <td><?php $x1 = (isset($cal_1[0]->ebitda))? $cal_1[0]->ebitda : 0 ; $x2 = (isset($cal_2[0]->reinvestment))? $cal_2[0]->reinvestment : 0 ;  echo $x1 - $x2 ; ?></td>
                </tr>
                <tr>
                    <td>Return on Assets</td>
                    <td>%</td>
                    <td><?= (isset( $cal_3[0]->ebitda))?  $cal_3[0]->ebitda : 0 ?></td>
                    <td><?= (isset( $cal_2[0]->ebitda))?  $cal_2[0]->ebitda : 0 ?></td>
                    <td><?= (isset( $cal_1[0]->ebitda))?  $cal_1[0]->ebitda : 0 ?></td>
                    <td><?php $x1 = (isset($cal_1[0]->ebitda))? $cal_1[0]->ebitda : 0 ; $x2 = (isset($cal_2[0]->ebitda))? $cal_2[0]->ebitda : 0 ;  echo $x1 - $x2 ; ?></td>
                </tr>
                <tr>
                    <td>Return on Equity </td>
                    <td>%</td>
                    <td><?= (isset( $cal_3[0]->return_on_equity))?  $cal_3[0]->return_on_equity : 0 ?></td>
                    <td><?= (isset( $cal_2[0]->return_on_equity))?  $cal_2[0]->return_on_equity : 0 ?></td>
                    <td><?= (isset( $cal_1[0]->return_on_equity))?  $cal_1[0]->return_on_equity : 0 ?></td>
                    <td><?php $x1 = (isset($cal_1[0]->ebitda))? $cal_1[0]->ebitda : 0 ; $x2 = (isset($cal_2[0]->return_on_equity))? $cal_2[0]->return_on_equity : 0 ;  echo $x1 - $x2 ; ?></td>
                </tr>
            </tr>
        </tbody>
        <thead>
            <tr>
                <th colspan="6" class="theading">Liquidity</th>
            </tr>

        </thead>
        <tbody>
            <tr>
                <td>Working Capital</td>
                <td>Thousands</td>
                <td><?= (isset( $cal_3[0]->working_capital))?  $cal_3[0]->working_capital : 0 ?></td>
                <td><?= (isset( $cal_2[0]->working_capital))?  $cal_2[0]->working_capital : 0 ?></td>
                <td><?= (isset( $cal_1[0]->working_capital))?  $cal_1[0]->working_capital : 0 ?></td>
                <td><?php $x1 = (isset($cal_1[0]->working_capital))? $cal_1[0]->working_capital : 0 ; $x2 = (isset($cal_2[0]->working_capital))? $cal_2[0]->working_capital : 0 ;?><?= ($x1) - ($x2) ?></td>
            </tr>
            <tr>
                <td>Working Capital to Sales</td>
                <td>%</td>
                <td><?= (isset( $cal_3[0]->working_capital_to_sales))?  $cal_3[0]->working_capital_to_sales : 0 ?></td>
                <td><?= (isset( $cal_2[0]->working_capital_to_sales))?  $cal_2[0]->working_capital_to_sales : 0 ?></td>
                <td><?= (isset( $cal_1[0]->working_capital_to_sales))?  $cal_1[0]->working_capital_to_sales : 0 ?></td>
                <td><?php $x1 = (isset($cal_1[0]->working_capital_to_sales))? $cal_1[0]->working_capital_to_sales : 0 ; $x2 = (isset($cal_2[0]->working_capital_to_sales))? $cal_2[0]->working_capital_to_sales : 0 ;?><?= ($x1) - ($x2) ?></td>
            </tr>
            <tr>
                <td>Cash Flow Coverage</td>
                <td>%</td>
                <td><?= (isset( $cal_3[0]->cash_flow_coverage))?  $cal_3[0]->cash_flow_coverage : 0 ?></td>
                <td><?= (isset( $cal_2[0]->cash_flow_coverage))?  $cal_2[0]->cash_flow_coverage : 0 ?></td>
                <td><?= (isset( $cal_1[0]->cash_flow_coverage))?  $cal_1[0]->cash_flow_coverage : 0 ?></td>
                <td><?php $x1 = (isset($cal_1[0]->cash_flow_coverage))? $cal_1[0]->cash_flow_coverage : 0 ; $x2 = (isset($cal_2[0]->cash_flow_coverage))? $cal_2[0]->cash_flow_coverage : 0 ;?><?= ($x1) - ($x2) ?></td>
            </tr>
            <tr>
                <td>Cash Ratio</td>
                <td>X</td>
                <td><?= (isset( $cal_3[0]->cash_ratio))?  $cal_3[0]->cash_ratio : 0 ?></td>
                <td><?= (isset( $cal_2[0]->cash_ratio))?  $cal_2[0]->cash_ratio : 0 ?></td>
                <td><?= (isset( $cal_1[0]->cash_ratio))?  $cal_1[0]->cash_ratio : 0 ?></td>
                <td><?php $x1 = (isset($cal_1[0]->cash_ratio))? $cal_1[0]->cash_ratio : 0 ; $x2 = (isset($cal_2[0]->cash_ratio))? $cal_2[0]->cash_ratio : 0 ;?><?= ($x1) - ($x2) ?></td>
            </tr>
            <tr>
                <td>Current Ratio</td>
                <td>x</td>
                <td><?= (isset( $cal_3[0]->return_on_equity))?  $cal_3[0]->return_on_equity : 0 ?></td>
                <td><?= (isset( $cal_2[0]->return_on_equity))?  $cal_2[0]->return_on_equity : 0 ?></td>
                <td><?= (isset( $cal_1[0]->return_on_equity))?  $cal_1[0]->return_on_equity : 0 ?></td>
                <td><?php $x1 = (isset($cal_1[0]->return_on_equity))? $cal_1[0]->return_on_equity : 0 ; $x2 = (isset($cal_2[0]->return_on_equity))? $cal_2[0]->return_on_equity : 0 ;?><?= ($x1) - ($x2) ?></td>
            </tr>
            <tr>
                <td>Quick Ratio</td>
                <td>x</td>
                <td><?= (isset( $cal_3[0]->quick_ratio))?  $cal_3[0]->quick_ratio : 0 ?></td>
                <td><?= (isset( $cal_2[0]->quick_ratio))?  $cal_2[0]->quick_ratio : 0 ?></td>
                <td><?= (isset( $cal_1[0]->quick_ratio))?  $cal_1[0]->quick_ratio : 0 ?></td>
                <td><?php $x1 = (isset($cal_1[0]->quick_ratio))? $cal_1[0]->quick_ratio : 0 ; $x2 = (isset($cal_2[0]->quick_ratio))? $cal_2[0]->quick_ratio : 0 ;?><?= ($x1) - ($x2) ?></td>
            </tr>
            <tr>
                <td>Capital Adequacy</td>
                <td>%</td>
                <td><?= (isset( $cal_3[0]->capital_adequacy))?  $cal_3[0]->capital_adequacy : 0 ?></td>
                <td><?= (isset( $cal_2[0]->capital_adequacy))?  $cal_2[0]->capital_adequacy : 0 ?></td>
                <td><?= (isset( $cal_1[0]->capital_adequacy))?  $cal_1[0]->capital_adequacy : 0 ?></td>
                <td><?php $x1 = (isset($cal_1[0]->capital_adequacy))? $cal_1[0]->capital_adequacy : 0 ; $x2 = (isset($cal_2[0]->capital_adequacy))? $cal_2[0]->capital_adequacy : 0 ;?><?= ($x1) - ($x2) ?></td>
            </tr>
        </tbody>

        <thead>
            <tr>
                <th colspan="6" class="theading">Gearing</th>
            </tr>

        </thead>
        <tbody>
            <tr>
                <td>Net Tangible Worth</td>
                <td>Thousands</td>
                <td><?= (isset( $cal_3[0]->net_tangible_worth))?  $cal_3[0]->net_tangible_worth : 0 ?></td>
                <td><?= (isset( $cal_2[0]->net_tangible_worth))?  $cal_2[0]->net_tangible_worth : 0 ?></td>
                <td><?= (isset( $cal_1[0]->net_tangible_worth))?  $cal_1[0]->net_tangible_worth : 0 ?></td>
                <td><?php $x1 = (isset($cal_1[0]->net_tangible_worth))? $cal_1[0]->net_tangible_worth : 0 ; $x2 = (isset($cal_2[0]->net_tangible_worth))? $cal_2[0]->net_tangible_worth : 0 ; ?><?= ($x1) - ($x2) ?></td>
            </tr>
            <tr>
                <td>Net Asset Backing</td>
                <td>%</td>
                <td><?= (isset( $cal_3[0]->net_asset_backing))?  $cal_3[0]->net_asset_backing : 0 ?></td>
                <td><?= (isset( $cal_2[0]->net_asset_backing))?  $cal_2[0]->net_asset_backing : 0 ?></td>
                <td><?= (isset( $cal_1[0]->net_asset_backing))?  $cal_1[0]->net_asset_backing : 0 ?></td>
                <td><?php $x1 = (isset($cal_1[0]->net_asset_backing))? $cal_1[0]->net_asset_backing : 0 ; $x2 = (isset($cal_2[0]->net_asset_backing))? $cal_2[0]->net_asset_backing : 0 ; ?><?= ($x1) - ($x2) ?></td>
            </tr>
            <tr>
                <td>Gearing</td>
                <td>%</td>
                <td><?= (isset( $cal_3[0]->gearing))?  $cal_3[0]->gearing : 0 ?></td>
                <td><?= (isset( $cal_2[0]->gearing))?  $cal_2[0]->gearing : 0 ?></td>
                <td><?= (isset( $cal_1[0]->gearing))?  $cal_1[0]->gearing : 0 ?></td>
                <td><?php $x1 = (isset($cal_1[0]->gearing))? $cal_1[0]->gearing : 0 ; $x2 = (isset($cal_2[0]->gearing))? $cal_2[0]->gearing : 0 ; ?><?= ($x1) - ($x2) ?></td>
            </tr>
            <tr>
                <td>Debt to Equity</td>
                <td>X</td>
                <td><?= (isset( $cal_3[0]->debt_to_equity))?  $cal_3[0]->debt_to_equity : 0 ?></td>
                <td><?= (isset( $cal_2[0]->debt_to_equity))?  $cal_2[0]->debt_to_equity : 0 ?></td>
                <td><?= (isset( $cal_1[0]->debt_to_equity))?  $cal_1[0]->debt_to_equity : 0 ?></td>
                <td><?php $x1 = (isset($cal_1[0]->debt_to_equity))? $cal_1[0]->debt_to_equity : 0 ; $x2 = (isset($cal_2[0]->debt_to_equity))? $cal_2[0]->debt_to_equity : 0 ; ?><?= ($x1) - ($x2) ?></td>
            </tr>
            <tr>
                <td>Interest Coverage</td>
                <td>x</td>
                <td><?= (isset( $cal_3[0]->interest_coverage))?  $cal_3[0]->interest_coverage : 0 ?></td>
                <td><?= (isset( $cal_2[0]->interest_coverage))?  $cal_2[0]->interest_coverage : 0 ?></td>
                <td><?= (isset( $cal_1[0]->interest_coverage))?  $cal_1[0]->interest_coverage : 0 ?></td>
                <td><?php $x1 = (isset($cal_1[0]->interest_coverage))? $cal_1[0]->interest_coverage : 0 ; $x2 = (isset($cal_2[0]->interest_coverage))? $cal_2[0]->interest_coverage : 0 ; ?><?= ($x1) - ($x2) ?></td>
            </tr>
            <tr>
                <td>Repayment Capability</td>
                <td>x</td>
                <td><?= (isset( $cal_3[0]->repayment_capability))?  $cal_3[0]->repayment_capability : 0 ?></td>
                <td><?= (isset( $cal_2[0]->repayment_capability))?  $cal_2[0]->repayment_capability : 0 ?></td>
                <td><?= (isset( $cal_1[0]->repayment_capability))?  $cal_1[0]->repayment_capability : 0 ?></td>
                <td><?php $x1 = (isset($cal_1[0]->repayment_capability))? $cal_1[0]->repayment_capability : 0 ; $x2 = (isset($cal_2[0]->repayment_capability))? $cal_2[0]->repayment_capability : 0 ; ?><?= ($x1) - ($x2) ?></td>
            </tr>
            <tr>
                <td>Financial Leverage</td>
                <td>%</td>
                <td><?= (isset( $cal_3[0]->financial_leverage))?  $cal_3[0]->financial_leverage : 0 ?></td>
                <td><?= (isset( $cal_2[0]->financial_leverage))?  $cal_2[0]->financial_leverage : 0 ?></td>
                <td><?= (isset( $cal_1[0]->financial_leverage))?  $cal_1[0]->financial_leverage : 0 ?></td>
                <td><?php $x1 = (isset($cal_1[0]->financial_leverage))? $cal_1[0]->financial_leverage : 0 ; $x2 = (isset($cal_2[0]->financial_leverage))? $cal_2[0]->financial_leverage : 0 ; ?><?= ($x1) - ($x2) ?></td>
            </tr>
            <tr>
                <td>Short Ratio</td>
                <td>x</td>
                <td><?= (isset( $cal_3[0]->short_ratio))?  $cal_3[0]->short_ratio : 0 ?></td>
                <td><?= (isset( $cal_2[0]->short_ratio))?  $cal_2[0]->short_ratio : 0 ?></td>
                <td><?= (isset( $cal_1[0]->short_ratio))?  $cal_1[0]->short_ratio : 0 ?></td>
                <td><?php $x1 = (isset($cal_1[0]->short_ratio))? $cal_1[0]->short_ratio : 0 ; $x2 = (isset($cal_2[0]->short_ratio))? $cal_2[0]->short_ratio : 0 ; ?><?= ($x1) - ($x2) ?></td>
            </tr>
        </tbody>

    </table>
    <!-- table -->
</div>
</div>
</page>
<page size="A4">
    <div class="header"></div>
    <div class="content">
        <table class="table">

            <thead>
                <tr>
                    <th colspan="6" class="theading">Operating</th>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td>Operating Leverage</td>
                    <td>x</td>
                    <td><?= (isset($cal_3[0]->operating_leverage))? $cal_3[0]->operating_leverage : 0 ?></td>
                    <td><?= (isset($cal_2[0]->operating_leverage))? $cal_2[0]->operating_leverage : 0 ?></td>
                    <td><?= (isset($cal_1[0]->operating_leverage))? $cal_1[0]->operating_leverage : 0 ?></td>
                    <td><?php $x1 = (isset($cal_1[0]->operating_leverage))? $cal_1[0]->operating_leverage : 0 ; $x2 = (isset($cal_2[0]->operating_leverage))? $cal_2[0]->operating_leverage : 0 ; ?><?= ($x1) - ($x2) ?></td>
                </tr>
                <tr>
                    <td>Creditor Exposure</td>
                    <td>%</td>
                    <td><?= (isset($cal_3[0]->creditor_exposure))? $cal_3[0]->creditor_exposure : 0 ?></td>
                    <td><?= (isset($cal_2[0]->creditor_exposure))? $cal_2[0]->creditor_exposure : 0 ?></td>
                    <td><?= (isset($cal_1[0]->creditor_exposure))? $cal_1[0]->creditor_exposure : 0 ?></td>
                    <td><?php $x1 = (isset($cal_1[0]->creditor_exposure))? $cal_1[0]->creditor_exposure : 0 ; $x2 = (isset($cal_2[0]->creditor_exposure))? $cal_2[0]->creditor_exposure : 0 ; ?><?= ($x1) - ($x2) ?></td>
                </tr>
                <tr>
                    <td>Creditor Days</td>
                    <td>Days</td>
                    <td><?= (isset($cal_3[0]->creditor_days))? $cal_3[0]->creditor_days : 0 ?></td>
                    <td><?= (isset($cal_2[0]->creditor_days))? $cal_2[0]->creditor_days : 0 ?></td>
                    <td><?= (isset($cal_1[0]->creditor_days))? $cal_1[0]->creditor_days : 0 ?></td>
                    <td><?php $x1 = (isset($cal_1[0]->creditor_days))? $cal_1[0]->creditor_days : 0 ; $x2 = (isset($cal_2[0]->creditor_days))? $cal_2[0]->creditor_days : 0 ; ?><?= ($x1) - ($x2) ?></td>
                </tr>
                <tr>
                    <td>Inventory Days</td>
                    <td>Days</td>
                    <td><?= (isset($cal_3[0]->inventory_days))? $cal_3[0]->inventory_days : 0 ?></td>
                    <td><?= (isset($cal_2[0]->inventory_days))? $cal_2[0]->inventory_days : 0 ?></td>
                    <td><?= (isset($cal_1[0]->inventory_days))? $cal_1[0]->inventory_days : 0 ?></td>
                    <td><?php $x1 = (isset($cal_1[0]->inventory_days))? $cal_1[0]->inventory_days : 0 ; $x2 = (isset($cal_2[0]->inventory_days))? $cal_2[0]->inventory_days : 0 ; ?><?= ($x1) - ($x2) ?></td>
                </tr>
                <tr>
                    <td>Debtor Days</td>
                    <td>Days</td>
                    <td><?= (isset($cal_3[0]->debtor_days))? $cal_3[0]->debtor_days : 0 ?></td>
                    <td><?= (isset($cal_2[0]->debtor_days))? $cal_2[0]->debtor_days : 0 ?></td>
                    <td><?= (isset($cal_1[0]->debtor_days))? $cal_1[0]->debtor_days : 0 ?></td>
                    <td><?php $x1 = (isset($cal_1[0]->debtor_days))? $cal_1[0]->debtor_days : 0 ; $x2 = (isset($cal_2[0]->debtor_days))? $cal_2[0]->debtor_days : 0 ; ?><?= ($x1) - ($x2) ?></td>
                </tr>
                <tr>
                    <td>Cash Conversion Cycle</td>
                    <td>Days</td>
                    <td><?= (isset($cal_3[0]->cash_conversion_cycle))? $cal_3[0]->cash_conversion_cycle : 0 ?></td>
                    <td><?= (isset($cal_2[0]->cash_conversion_cycle))? $cal_2[0]->cash_conversion_cycle : 0 ?></td>
                    <td><?= (isset($cal_1[0]->cash_conversion_cycle))? $cal_1[0]->cash_conversion_cycle : 0 ?></td>
                    <td><?php $x1 = (isset($cal_1[0]->cash_conversion_cycle))? $cal_1[0]->cash_conversion_cycle : 0 ; $x2 = (isset($cal_2[0]->cash_conversion_cycle))? $cal_2[0]->cash_conversion_cycle : 0 ; ?><?= ($x1) - ($x2) ?></td>
                </tr>
            </tbody>

            <thead>
                <tr>
                    <th colspan="6" class="theading">Other Indicators</th>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td>Sales (Annualised) </td>
                    <td>%</td>
                    <td><?= (isset($cal_3[0]->sales_annualised))? $cal_3[0]->sales_annualised : 0 ?></td>
                    <td><?= (isset($cal_2[0]->sales_annualised))? $cal_2[0]->sales_annualised : 0 ?></td>
                    <td><?= (isset($cal_1[0]->sales_annualised))? $cal_1[0]->sales_annualised : 0 ?></td>
                    <td><?php $x1 = (isset($cal_1[0]->sales_annualised))? $cal_1[0]->sales_annualised : 0 ; $x2 = (isset($cal_2[0]->sales_annualised))? $cal_2[0]->sales_annualised : 0 ; ?><?= ($x1) - ($x2) ?></td>
                </tr>
                <tr>
                    <td>Activity</td>
                    <td>%</td>
                    <td><?= (isset($cal_3[0]->activity))? $cal_3[0]->activity : 0 ?></td>
                    <td><?= (isset($cal_2[0]->activity))? $cal_2[0]->activity : 0 ?></td>
                    <td><?= (isset($cal_1[0]->activity))? $cal_1[0]->activity : 0 ?></td>
                    <td><?php $x1 = (isset($cal_1[0]->activity))? $cal_1[0]->activity : 0 ; $x2 = (isset($cal_2[0]->activity))? $cal_2[0]->activity : 0 ; ?><?= ($x1) - ($x2) ?></td>
                </tr>
                <tr>
                    <td>Sales Growth</td>
                    <td>%</td>
                    <td><?= (isset($cal_3[0]->sales_growth))? $cal_3[0]->sales_growth : 0 ?></td>
                    <td><?= (isset($cal_2[0]->sales_growth))? $cal_2[0]->sales_growth : 0 ?></td>
                    <td><?= (isset($cal_1[0]->sales_growth))? $cal_1[0]->sales_growth : 0 ?></td>
                    <td><?php $x1 = (isset($cal_1[0]->sales_growth))? $cal_1[0]->sales_growth : 0 ; $x2 = (isset($cal_2[0]->sales_growth))? $cal_2[0]->sales_growth : 0 ; ?><?= ($x1) - ($x2) ?></td>
                </tr>
                <tr>
                    <td>Related Party Loans Receivable</td>
                    <td>%</td>
                    <td><?= (isset($cal_3[0]->related_party_loans_receivable))? $cal_3[0]->related_party_loans_receivable : 0 ?></td>
                    <td><?= (isset($cal_2[0]->related_party_loans_receivable))? $cal_2[0]->related_party_loans_receivable : 0 ?></td>
                    <td><?= (isset($cal_1[0]->related_party_loans_receivable))? $cal_1[0]->related_party_loans_receivable : 0 ?></td>
                    <td><?php $x1 = (isset($cal_1[0]->related_party_loans_receivable))? $cal_1[0]->related_party_loans_receivable : 0 ; $x2 = (isset($cal_2[0]->related_party_loans_receivable))? $cal_2[0]->related_party_loans_receivable : 0 ; ?><?= ($x1) - ($x2) ?></td>
                </tr>
                <tr>
                    <td>Related Party Loans Payable </td>
                    <td>%</td>
                    <td><?= (isset($cal_3[0]->related_party_loans_payable))? $cal_3[0]->related_party_loans_payable : 0 ?></td>
                    <td><?= (isset($cal_2[0]->related_party_loans_payable))? $cal_2[0]->related_party_loans_payable : 0 ?></td>
                    <td><?= (isset($cal_1[0]->related_party_loans_payable))? $cal_1[0]->related_party_loans_payable : 0 ?></td>
                    <td><?php $x1 = (isset($cal_1[0]->related_party_loans_payable))? $cal_1[0]->related_party_loans_payable : 0 ; $x2 = (isset($cal_2[0]->related_party_loans_payable))? $cal_2[0]->related_party_loans_payable : 0 ; ?><?= ($x1) - ($x2) ?></td>
                </tr>
                <tr>
                    <td>Related Party Loans Dependency</td>
                    <td>%</td>
                    <td><?= (isset($cal_3[0]->related_party_loans_dependency))? $cal_3[0]->related_party_loans_dependency : 0 ?></td>
                    <td><?= (isset($cal_2[0]->related_party_loans_dependency))? $cal_2[0]->related_party_loans_dependency : 0 ?></td>
                    <td><?= (isset($cal_1[0]->related_party_loans_dependency))? $cal_1[0]->related_party_loans_dependency : 0 ?></td>
                    <td><?php $x1 = (isset($cal_1[0]->related_party_loans_dependency))? $cal_1[0]->related_party_loans_dependency : 0 ; $x2 = (isset($cal_2[0]->related_party_loans_dependency))? $cal_2[0]->related_party_loans_dependency : 0 ; ?><?= ($x1) - ($x2) ?></td>
                </tr>
                <tr>
                    <td>Quick Asset Composition</td>
                    <td>%</td>
                    <td><?= (isset($cal_3[0]->quick_asset_composition))? $cal_3[0]->quick_asset_composition : 0 ?></td>
                    <td><?= (isset($cal_2[0]->quick_asset_composition))? $cal_2[0]->quick_asset_composition : 0 ?></td>
                    <td><?= (isset($cal_1[0]->quick_asset_composition))? $cal_1[0]->quick_asset_composition : 0 ?></td>
                    <td><?php $x1 = (isset($cal_1[0]->quick_asset_composition))? $cal_1[0]->quick_asset_composition : 0 ; $x2 = (isset($cal_2[0]->quick_asset_composition))? $cal_2[0]->quick_asset_composition : 0 ; ?><?= ($x1) - ($x2) ?></td>
                </tr>
                <tr>
                    <td>Current Asset Composition</td>
                    <td>%</td>
                    <td><?= (isset($cal_3[0]->current_asset_composition))? $cal_3[0]->current_asset_composition : 0 ?></td>
                    <td><?= (isset($cal_2[0]->current_asset_composition))? $cal_2[0]->current_asset_composition : 0 ?></td>
                    <td><?= (isset($cal_1[0]->current_asset_composition))? $cal_1[0]->current_asset_composition : 0 ?></td>
                    <td><?php $x1 = (isset($cal_1[0]->current_asset_composition))? $cal_1[0]->current_asset_composition : 0 ; $x2 = (isset($cal_2[0]->current_asset_composition))? $cal_2[0]->current_asset_composition : 0 ; ?><?= ($x1) - ($x2) ?></td>
                </tr>
                <tr>
                    <td>Current Liability Composition</td>
                    <td>%</td>
                    <td><?= (isset($cal_3[0]->current_liability_composition))? $cal_3[0]->current_liability_composition : 0 ?></td>
                    <td><?= (isset($cal_2[0]->current_liability_composition))? $cal_2[0]->current_liability_composition : 0 ?></td>
                    <td><?= (isset($cal_1[0]->current_liability_composition))? $cal_1[0]->current_liability_composition : 0 ?></td>
                    <td><?php $x1 = (isset($cal_1[0]->current_liability_composition))? $cal_1[0]->current_liability_composition : 0 ; $x2 = (isset($cal_2[0]->current_liability_composition))? $cal_2[0]->current_liability_composition : 0 ; ?><?= ($x1) - ($x2) ?></td>
                </tr>
                <tr>
                    <td>Z-Score Risk Measure</td>
                    <td></td>
                    <td><?= (isset($cal_3[0]->zscore_risk_measure))? $cal_3[0]->zscore_risk_measure : 0 ?></td>
                    <td><?= (isset($cal_2[0]->zscore_risk_measure))? $cal_2[0]->zscore_risk_measure : 0 ?></td>
                    <td><?= (isset($cal_1[0]->zscore_risk_measure))? $cal_1[0]->zscore_risk_measure : 0 ?></td>
                    <td><?php $x1 = (isset($cal_1[0]->zscore_risk_measure))? $cal_1[0]->zscore_risk_measure : 0 ; $x2 = (isset($cal_2[0]->zscore_risk_measure))? $cal_2[0]->zscore_risk_measure : 0 ; ?><?= ($x1) - ($x2) ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</page>


</div>
<!--CSS -->
<style type="text/css">
    page {
        background: white;
        display: block;
        margin: 0 auto;
        margin-bottom: 0.5cm;

    }

    page[size="A4"] {
        width: 65vw !important;
        min-height: 100vh;
        padding: 20px 20px;
    }
    .table td, .table th {
        padding: .60rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }

    @media print {
        body,
        page {
            margin: 0;
            box-shadow: 0;
        }
        .content {
            width: 100%;
        }
        page {
          border: none;

      }
      .printbtn{
        display:none
    }
}

.report-ref {
    page-break-after: always;
}

.footer {
    position: fixed;
    bottom: 0px;
}
page[size="A4"] {
    width: 100vw !important;
    min-height: 100vh;
}
.report-body {
    background: none;
}

</style>

</html>