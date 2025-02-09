<x-dashboard-layout>

    <section class="container">
        <!-- row -->
        <div class="grid grid-cols-12 mb-8">
            <div class="col-span-12">
                <!-- card -->
                <div class="bg-gray-100 border-0 card rounded-2xl">
                    <div class="card-body lg:p-12">
                        <h1>Welcome back! KenTech</h1>
                        <p class="mb-6">KenTech is simple &amp; clean design for developer and designer.
                        </p>
                        <a href="{{ route('admin.product.create') }}"
                            class="inline-flex items-center text-white bg-green-600 border-green-600 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-100">
                            Create Product
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- table -->

        <div class="grid grid-cols-12 mb-8 gap-y-8 lg:gap-x-8">
            <div class="col-span-12 lg:col-span-4">
                <!-- card -->
                <div class="h-full card card-lg">
                    <!-- card body -->
                    <div class="p-6 card-body">
                        <!-- heading -->
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <h4 class="mb-0 text-md">Earnings</h4>
                            </div>
                            <div
                                class="flex items-center justify-center w-10 h-10 text-red-800 bg-red-100 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-currency-dollar">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2">
                                    </path>
                                    <path d="M12 3v3m0 12v3"></path>
                                </svg>
                            </div>
                        </div>
                        <!-- project number -->
                        <div class="leading-snug">
                            <h1 class="mb-2 text-lg font-bold">$93,438.78</h1>
                            <span>Monthly revenue</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-4">
                <!-- card -->
                <div class="h-full card card-lg">
                    <!-- card body -->
                    <div class="p-6 card-body">
                        <!-- heading -->
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <h4 class="mb-0 text-md">Orders</h4>
                            </div>
                            <div
                                class="flex items-center justify-center w-10 h-10 text-yellow-800 bg-yellow-100 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                    <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                    <path d="M17 17h-11v-14h-2"></path>
                                    <path d="M6 5l14 1l-1 7h-13"></path>
                                </svg>
                            </div>
                        </div>
                        <!-- project number -->
                        <div class="leading-snug">
                            <h1 class="mb-2 text-lg font-bold">42,339</h1>
                            <span>
                                <span class="text-gray-800 me-1">35+</span>
                                New Sales
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-4">
                <!-- card -->
                <div class="h-full card card-lg">
                    <!-- card body -->
                    <div class="p-6 card-body">
                        <!-- heading -->
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <h4 class="mb-0 text-md">Customer</h4>
                            </div>
                            <div
                                class="flex items-center justify-center w-10 h-10 rounded-full bg-cyan-100 text-cyan-800">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                                </svg>
                            </div>
                        </div>
                        <!-- project number -->
                        <div class="leading-snug">
                            <h1 class="mb-2 text-lg font-bold">39,354</h1>
                            <span>
                                <span class="text-gray-800 me-1">30+</span>
                                new in 2 days
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- row -->
        <div class="grid grid-cols-12 mb-8 gap-y-8 lg:gap-x-8">
            <div class="col-span-12 xl:col-span-8 lg:col-span-6 md:col-span-12">
                <!-- card -->
                <div class="h-full card card-lg">
                    <div class="p-6 card-body">
                        <!-- heading -->
                        <div class="flex justify-between">
                            <div>
                                <h3 class="mb-1 text-md">Revenue</h3>
                                <small>(+63%) than last year)</small>
                            </div>
                            <div>
                                <!-- select option -->
                                <select
                                    class="block w-full py-2 text-base border-gray-300 rounded-lg focus:border-green-600 focus:ring-green-600 disabled:opacity-50 disabled:pointer-events-none">
                                    <option selected="">2019</option>
                                    <option value="2023">2020</option>
                                    <option value="2024">2021</option>
                                    <option value="2025">2022</option>
                                    <option value="2025">2023</option>
                                </select>
                            </div>
                        </div>
                        <!-- chart -->
                        <div id="revenueChart" class="mt-6" style="min-height: 365px;">
                            <div id="apexcharts0yvisnrw" class="apexcharts-canvas apexcharts0yvisnrw apexcharts-theme-"
                                style="width: 626px; height: 350px;"><svg id="SvgjsSvg1001" width="626" height="350"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                    transform="translate(0, 0)">
                                    <foreignObject x="0" y="0" width="626" height="350">
                                        <div class="apexcharts-legend apexcharts-align-center apx-legend-position-top"
                                            xmlns="http://www.w3.org/1999/xhtml"
                                            style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 175px;">
                                            <div class="apexcharts-legend-series" rel="1" seriesname="TotalxIncome"
                                                data:collapsed="false" style="margin: 4px 5px;"><span
                                                    class="apexcharts-legend-marker" rel="1" data:collapsed="false"
                                                    style="height: 14px; width: 14px; left: 0px; top: 0px;"><svg
                                                        id="SvgjsSvg1004" width="100%" height="100%"
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev">
                                                        <defs id="SvgjsDefs1005">
                                                            <clipPath id="gridRectMask0yvisnrw">
                                                                <rect id="SvgjsRect1019" width="567.52734375"
                                                                    height="266.348" x="-3" y="-3" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMask0yvisnrw"></clipPath>
                                                            <clipPath id="nonForecastMask0yvisnrw">
                                                            </clipPath>
                                                            <clipPath id="gridRectMarkerMask0yvisnrw">
                                                                <rect id="SvgjsRect1020" width="601.52734375"
                                                                    height="300.348" x="-20" y="-20" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <path id="SvgjsPath1011" d="M 0, 0
m -7, 0
a 7,7 0 1,0 14,0
a 7,7 0 1,0 -14,0" fill="#0aad0a" fill-opacity="1" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" cx="0" cy="0" shape="circle"
                                                            class="apexcharts-legend-marker apexcharts-marker apexcharts-marker-circle"
                                                            style="transform: translate(50%, 50%);"></path>
                                                    </svg></span><span class="apexcharts-legend-text" rel="1" i="0"
                                                    data:default-text="Total%20Income" data:collapsed="false"
                                                    style="color: rgb(92, 108, 117); font-size: 12px; font-weight: 600; font-family: Helvetica, Arial, sans-serif;">Total
                                                    Income</span></div>
                                            <div class="apexcharts-legend-series" rel="2" seriesname="TotalxExpense"
                                                data:collapsed="false" style="margin: 4px 5px;"><span
                                                    class="apexcharts-legend-marker" rel="2" data:collapsed="false"
                                                    style="height: 14px; width: 14px; left: 0px; top: 0px;"><svg
                                                        id="SvgjsSvg1012" width="100%" height="100%"
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev">
                                                        <defs id="SvgjsDefs1013"></defs>
                                                        <path id="SvgjsPath1014" d="M 0, 0
m -7, 0
a 7,7 0 1,0 14,0
a 7,7 0 1,0 -14,0" fill="#ffc107" fill-opacity="1" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" cx="0" cy="0" shape="circle"
                                                            class="apexcharts-legend-marker apexcharts-marker apexcharts-marker-circle"
                                                            style="transform: translate(50%, 50%);"></path>
                                                    </svg></span><span class="apexcharts-legend-text" rel="2" i="1"
                                                    data:default-text="Total%20Expense" data:collapsed="false"
                                                    style="color: rgb(92, 108, 117); font-size: 12px; font-weight: 600; font-family: Helvetica, Arial, sans-serif;">Total
                                                    Expense</span></div>
                                        </div>
                                        <style type="text/css">
                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom,
                                            .apexcharts-legend.apx-legend-position-top {
                                                flex-wrap: wrap
                                            }

                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                justify-content: flex-start;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                justify-content: center;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *,
                                            .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: flex;
                                                align-items: center;
                                                justify-content: center;
                                                cursor: pointer;
                                                margin-right: 1px;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }
                                        </style>
                                    </foreignObject>
                                    <rect id="SvgjsRect1017" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g id="SvgjsG1021" class="apexcharts-datalabels-group"
                                        transform="translate(0, 0) scale(1)"></g>
                                    <g id="SvgjsG1022" class="apexcharts-datalabels-group"
                                        transform="translate(0, 0) scale(1)"></g>
                                    <g id="SvgjsG1116" class="apexcharts-yaxis" rel="0"
                                        transform="translate(24.47265625, 0)">
                                        <g id="SvgjsG1117" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1119"
                                                font-family="&quot;Inter&quot;, &quot;sans-serif&quot;" x="20" y="56"
                                                text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#5c6c75"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Inter, &quot;sans-serif&quot;;">
                                                <tspan id="SvgjsTspan1120">100k</tspan>
                                                <title>100k</title>
                                            </text><text id="SvgjsText1122"
                                                font-family="&quot;Inter&quot;, &quot;sans-serif&quot;" x="20"
                                                y="88.5435" text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#5c6c75"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Inter, &quot;sans-serif&quot;;">
                                                <tspan id="SvgjsTspan1123">90k</tspan>
                                                <title>90k</title>
                                            </text><text id="SvgjsText1125"
                                                font-family="&quot;Inter&quot;, &quot;sans-serif&quot;" x="20"
                                                y="121.08699999999999" text-anchor="end" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#5c6c75"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Inter, &quot;sans-serif&quot;;">
                                                <tspan id="SvgjsTspan1126">80k</tspan>
                                                <title>80k</title>
                                            </text><text id="SvgjsText1128"
                                                font-family="&quot;Inter&quot;, &quot;sans-serif&quot;" x="20"
                                                y="153.63049999999998" text-anchor="end" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#5c6c75"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Inter, &quot;sans-serif&quot;;">
                                                <tspan id="SvgjsTspan1129">70k</tspan>
                                                <title>70k</title>
                                            </text><text id="SvgjsText1131"
                                                font-family="&quot;Inter&quot;, &quot;sans-serif&quot;" x="20"
                                                y="186.17399999999998" text-anchor="end" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#5c6c75"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Inter, &quot;sans-serif&quot;;">
                                                <tspan id="SvgjsTspan1132">60k</tspan>
                                                <title>60k</title>
                                            </text><text id="SvgjsText1134"
                                                font-family="&quot;Inter&quot;, &quot;sans-serif&quot;" x="20"
                                                y="218.71749999999997" text-anchor="end" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#5c6c75"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Inter, &quot;sans-serif&quot;;">
                                                <tspan id="SvgjsTspan1135">50k</tspan>
                                                <title>50k</title>
                                            </text><text id="SvgjsText1137"
                                                font-family="&quot;Inter&quot;, &quot;sans-serif&quot;" x="20"
                                                y="251.26099999999997" text-anchor="end" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#5c6c75"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Inter, &quot;sans-serif&quot;;">
                                                <tspan id="SvgjsTspan1138">40k</tspan>
                                                <title>40k</title>
                                            </text><text id="SvgjsText1140"
                                                font-family="&quot;Inter&quot;, &quot;sans-serif&quot;" x="20"
                                                y="283.80449999999996" text-anchor="end" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#5c6c75"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Inter, &quot;sans-serif&quot;;">
                                                <tspan id="SvgjsTspan1141">30k</tspan>
                                                <title>30k</title>
                                            </text><text id="SvgjsText1143"
                                                font-family="&quot;Inter&quot;, &quot;sans-serif&quot;" x="20"
                                                y="316.34799999999996" text-anchor="end" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#5c6c75"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Inter, &quot;sans-serif&quot;;">
                                                <tspan id="SvgjsTspan1144">20k</tspan>
                                                <title>20k</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1003" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(54.47265625, 52)">
                                        <defs id="SvgjsDefs1002">
                                            <linearGradient id="SvgjsLinearGradient1040" x1="0" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop1041" stop-opacity="0.65"
                                                    stop-color="rgba(10,173,10,0.65)" offset="0"></stop>
                                                <stop id="SvgjsStop1042" stop-opacity="0.5"
                                                    stop-color="rgba(133,214,133,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop1043" stop-opacity="0.5"
                                                    stop-color="rgba(133,214,133,0.5)" offset="1"></stop>
                                            </linearGradient>
                                            <linearGradient id="SvgjsLinearGradient1062" x1="0" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop1063" stop-opacity="0.65"
                                                    stop-color="rgba(255,193,7,0.65)" offset="0"></stop>
                                                <stop id="SvgjsStop1064" stop-opacity="0.5"
                                                    stop-color="rgba(255,224,131,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop1065" stop-opacity="0.5"
                                                    stop-color="rgba(255,224,131,0.5)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line id="SvgjsLine1018" x1="0" y1="0" x2="0" y2="260.348" stroke="#b6b6b6"
                                            stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs"
                                            x="0" y="0" width="1" height="260.348" fill="#b1b9c4" filter="none"
                                            fill-opacity="0.9" stroke-width="1"></line>
                                        <line id="SvgjsLine1072" x1="0" y1="260.348" x2="0" y2="266.348"
                                            stroke="#dfe2e1" stroke-dasharray="0" stroke-linecap="butt"
                                            class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1073" x1="93.587890625" y1="260.348" x2="93.587890625"
                                            y2="266.348" stroke="#dfe2e1" stroke-dasharray="0" stroke-linecap="butt"
                                            class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1074" x1="187.17578125" y1="260.348" x2="187.17578125"
                                            y2="266.348" stroke="#dfe2e1" stroke-dasharray="0" stroke-linecap="butt"
                                            class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1075" x1="280.763671875" y1="260.348" x2="280.763671875"
                                            y2="266.348" stroke="#dfe2e1" stroke-dasharray="0" stroke-linecap="butt"
                                            class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1076" x1="374.3515625" y1="260.348" x2="374.3515625"
                                            y2="266.348" stroke="#dfe2e1" stroke-dasharray="0" stroke-linecap="butt"
                                            class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1077" x1="467.939453125" y1="260.348" x2="467.939453125"
                                            y2="266.348" stroke="#dfe2e1" stroke-dasharray="0" stroke-linecap="butt"
                                            class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1078" x1="561.52734375" y1="260.348" x2="561.52734375"
                                            y2="266.348" stroke="#dfe2e1" stroke-dasharray="0" stroke-linecap="butt"
                                            class="apexcharts-xaxis-tick"></line>
                                        <g id="SvgjsG1068" class="apexcharts-grid">
                                            <g id="SvgjsG1069" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine1080" x1="0" y1="32.5435" x2="561.52734375"
                                                    y2="32.5435" stroke="#dfe2e1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1081" x1="0" y1="65.087" x2="561.52734375"
                                                    y2="65.087" stroke="#dfe2e1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1082" x1="0" y1="97.63050000000001" x2="561.52734375"
                                                    y2="97.63050000000001" stroke="#dfe2e1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine1083" x1="0" y1="130.174" x2="561.52734375"
                                                    y2="130.174" stroke="#dfe2e1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1084" x1="0" y1="162.7175" x2="561.52734375"
                                                    y2="162.7175" stroke="#dfe2e1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1085" x1="0" y1="195.261" x2="561.52734375"
                                                    y2="195.261" stroke="#dfe2e1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1086" x1="0" y1="227.8045" x2="561.52734375"
                                                    y2="227.8045" stroke="#dfe2e1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1070" class="apexcharts-gridlines-vertical"></g>
                                            <line id="SvgjsLine1089" x1="0" y1="260.348" x2="561.52734375" y2="260.348"
                                                stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                            <line id="SvgjsLine1088" x1="0" y1="1" x2="0" y2="260.348"
                                                stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG1071" class="apexcharts-grid-borders">
                                            <line id="SvgjsLine1079" x1="0" y1="0" x2="561.52734375" y2="0"
                                                stroke="#dfe2e1" stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1087" x1="0" y1="260.348" x2="561.52734375" y2="260.348"
                                                stroke="#dfe2e1" stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1115" x1="0" y1="260.348" x2="561.52734375" y2="260.348"
                                                stroke="#dfe2e1" stroke-dasharray="0" stroke-width="1"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG1023" class="apexcharts-area-series apexcharts-plot-series">
                                            <g id="SvgjsG1024" class="apexcharts-series" zIndex="0"
                                                seriesName="TotalxIncome" data:longestSeries="true" rel="1"
                                                data:realIndex="0">
                                                <path id="SvgjsPath1044"
                                                    d="M0 224.55015C32.75576171875 224.55015 60.83212890625001 195.261 93.58789062500001 195.261C126.34365234375002 195.261 154.42001953125003 234.3132 187.17578125000003 234.3132C219.93154296875002 234.3132 248.00791015625 159.46314999999998 280.763671875 159.46314999999998C313.51943359375 159.46314999999998 341.59580078125003 188.7523 374.35156250000006 188.7523C407.1073242187501 188.7523 435.18369140625003 107.39354999999998 467.93945312500006 107.39354999999998C500.69521484375 107.39354999999998 528.77158203125 0 561.52734375 0C561.52734375 0 561.52734375 0 561.52734375 260.348L0 260.348C0 260.348 0 224.55015 0 224.55015 "
                                                    fill="url(#SvgjsLinearGradient1040)" fill-opacity="1"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMask0yvisnrw)"
                                                    pathTo="M 0 224.55015C 32.75576171875 224.55015 60.83212890625001 195.261 93.58789062500001 195.261C 126.34365234375002 195.261 154.42001953125003 234.3132 187.17578125000003 234.3132C 219.93154296875002 234.3132 248.00791015625 159.46314999999998 280.763671875 159.46314999999998C 313.51943359375 159.46314999999998 341.59580078125003 188.7523 374.35156250000006 188.7523C 407.1073242187501 188.7523 435.18369140625003 107.39354999999998 467.93945312500006 107.39354999999998C 500.69521484375 107.39354999999998 528.77158203125 0 561.52734375 0C 561.52734375 0 561.52734375 0 561.52734375 260.348 L 0 260.348z"
                                                    pathFrom="M 0 325.435 L 0 325.435 L 93.58789062500001 325.435 L 187.17578125000003 325.435 L 280.763671875 325.435 L 374.35156250000006 325.435 L 467.93945312500006 325.435 L 561.52734375 325.435z">
                                                </path>
                                                <path id="SvgjsPath1045"
                                                    d="M0 224.55015C32.75576171875 224.55015 60.83212890625001 195.261 93.58789062500001 195.261C126.34365234375002 195.261 154.42001953125003 234.3132 187.17578125000003 234.3132C219.93154296875002 234.3132 248.00791015625 159.46314999999998 280.763671875 159.46314999999998C313.51943359375 159.46314999999998 341.59580078125003 188.7523 374.35156250000006 188.7523C407.1073242187501 188.7523 435.18369140625003 107.39354999999998 467.93945312500006 107.39354999999998C500.69521484375 107.39354999999998 528.77158203125 0 561.52734375 0C561.52734375 0 561.52734375 0 561.52734375 0 "
                                                    fill="none" fill-opacity="1" stroke="#0aad0a" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                    class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMask0yvisnrw)"
                                                    pathTo="M 0 224.55015C 32.75576171875 224.55015 60.83212890625001 195.261 93.58789062500001 195.261C 126.34365234375002 195.261 154.42001953125003 234.3132 187.17578125000003 234.3132C 219.93154296875002 234.3132 248.00791015625 159.46314999999998 280.763671875 159.46314999999998C 313.51943359375 159.46314999999998 341.59580078125003 188.7523 374.35156250000006 188.7523C 407.1073242187501 188.7523 435.18369140625003 107.39354999999998 467.93945312500006 107.39354999999998C 500.69521484375 107.39354999999998 528.77158203125 0 561.52734375 0"
                                                    pathFrom="M 0 325.435 L 0 325.435 L 93.58789062500001 325.435 L 187.17578125000003 325.435 L 280.763671875 325.435 L 374.35156250000006 325.435 L 467.93945312500006 325.435 L 561.52734375 325.435"
                                                    fill-rule="evenodd"></path>
                                                <g id="SvgjsG1025"
                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                    data:realIndex="0">
                                                    <g id="SvgjsG1027" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMask0yvisnrw)">
                                                        <path id="SvgjsPath1028" d="M 0, 224.55015
m -5, 0
a 5,5 0 1,0 10,0
a 5,5 0 1,0 -10,0" fill="#0aad0a" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt"
                                                            stroke-width="2" stroke-dasharray="0" cx="0" cy="224.55015"
                                                            shape="circle"
                                                            class="apexcharts-marker no-pointer-events wkstku5h6"
                                                            rel="0" j="0" index="0" default-marker-size="5">
                                                        </path>
                                                        <path id="SvgjsPath1029" d="M 93.58789062500001, 195.261
m -5, 0
a 5,5 0 1,0 10,0
a 5,5 0 1,0 -10,0" fill="#0aad0a" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt"
                                                            stroke-width="2" stroke-dasharray="0" cx="93.58789062500001"
                                                            cy="195.261" shape="circle"
                                                            class="apexcharts-marker no-pointer-events wrs0iluao"
                                                            rel="1" j="1" index="0" default-marker-size="5">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG1030" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMask0yvisnrw)">
                                                        <path id="SvgjsPath1031" d="M 187.17578125000003, 234.3132
m -5, 0
a 5,5 0 1,0 10,0
a 5,5 0 1,0 -10,0" fill="#0aad0a" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            cx="187.17578125000003" cy="234.3132" shape="circle"
                                                            class="apexcharts-marker no-pointer-events wwk9v7ayd"
                                                            rel="2" j="2" index="0" default-marker-size="5">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG1032" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMask0yvisnrw)">
                                                        <path id="SvgjsPath1033" d="M 280.763671875, 159.46314999999998
m -5, 0
a 5,5 0 1,0 10,0
a 5,5 0 1,0 -10,0" fill="#0aad0a" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt"
                                                            stroke-width="2" stroke-dasharray="0" cx="280.763671875"
                                                            cy="159.46314999999998" shape="circle"
                                                            class="apexcharts-marker no-pointer-events w6t468u21"
                                                            rel="3" j="3" index="0" default-marker-size="5">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG1034" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMask0yvisnrw)">
                                                        <path id="SvgjsPath1035" d="M 374.35156250000006, 188.7523
m -5, 0
a 5,5 0 1,0 10,0
a 5,5 0 1,0 -10,0" fill="#0aad0a" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            cx="374.35156250000006" cy="188.7523" shape="circle"
                                                            class="apexcharts-marker no-pointer-events wpnn0tkiw"
                                                            rel="4" j="4" index="0" default-marker-size="5">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG1036" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMask0yvisnrw)">
                                                        <path id="SvgjsPath1037" d="M 467.93945312500006, 107.39354999999998
m -5, 0
a 5,5 0 1,0 10,0
a 5,5 0 1,0 -10,0" fill="#0aad0a" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            cx="467.93945312500006" cy="107.39354999999998"
                                                            shape="circle"
                                                            class="apexcharts-marker no-pointer-events wvnc0as98i"
                                                            rel="5" j="5" index="0" default-marker-size="5">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG1038" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMask0yvisnrw)">
                                                        <path id="SvgjsPath1039" d="M 561.52734375, 0
m -5, 0
a 5,5 0 1,0 10,0
a 5,5 0 1,0 -10,0" fill="#0aad0a" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt"
                                                            stroke-width="2" stroke-dasharray="0" cx="561.52734375"
                                                            cy="0" shape="circle"
                                                            class="apexcharts-marker no-pointer-events wwb334muck"
                                                            rel="6" j="6" index="0" default-marker-size="5">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1046" class="apexcharts-series" zIndex="1"
                                                seriesName="TotalxExpense" data:longestSeries="true" rel="2"
                                                data:realIndex="1">
                                                <path id="SvgjsPath1066"
                                                    d="M0 71.5957C32.75576171875 71.5957 60.83212890625001 221.29579999999999 93.58789062500001 221.29579999999999C126.34365234375002 221.29579999999999 154.42001953125003 178.98925 187.17578125000003 178.98925C219.93154296875002 178.98925 248.00791015625 68.34134999999998 280.763671875 68.34134999999998C313.51943359375 68.34134999999998 341.59580078125003 214.7871 374.35156250000006 214.7871C407.1073242187501 214.7871 435.18369140625003 182.2436 467.93945312500006 182.2436C500.69521484375 182.2436 528.77158203125 201.7697 561.52734375 201.7697C561.52734375 201.7697 561.52734375 201.7697 561.52734375 260.348L0 260.348C0 260.348 0 71.5957 0 71.5957 "
                                                    fill="url(#SvgjsLinearGradient1062)" fill-opacity="1"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-area" index="1"
                                                    clip-path="url(#gridRectMask0yvisnrw)"
                                                    pathTo="M 0 71.5957C 32.75576171875 71.5957 60.83212890625001 221.29579999999999 93.58789062500001 221.29579999999999C 126.34365234375002 221.29579999999999 154.42001953125003 178.98925 187.17578125000003 178.98925C 219.93154296875002 178.98925 248.00791015625 68.34134999999998 280.763671875 68.34134999999998C 313.51943359375 68.34134999999998 341.59580078125003 214.7871 374.35156250000006 214.7871C 407.1073242187501 214.7871 435.18369140625003 182.2436 467.93945312500006 182.2436C 500.69521484375 182.2436 528.77158203125 201.7697 561.52734375 201.7697C 561.52734375 201.7697 561.52734375 201.7697 561.52734375 260.348 L 0 260.348z"
                                                    pathFrom="M 0 325.435 L 0 325.435 L 93.58789062500001 325.435 L 187.17578125000003 325.435 L 280.763671875 325.435 L 374.35156250000006 325.435 L 467.93945312500006 325.435 L 561.52734375 325.435z">
                                                </path>
                                                <path id="SvgjsPath1067"
                                                    d="M0 71.5957C32.75576171875 71.5957 60.83212890625001 221.29579999999999 93.58789062500001 221.29579999999999C126.34365234375002 221.29579999999999 154.42001953125003 178.98925 187.17578125000003 178.98925C219.93154296875002 178.98925 248.00791015625 68.34134999999998 280.763671875 68.34134999999998C313.51943359375 68.34134999999998 341.59580078125003 214.7871 374.35156250000006 214.7871C407.1073242187501 214.7871 435.18369140625003 182.2436 467.93945312500006 182.2436C500.69521484375 182.2436 528.77158203125 201.7697 561.52734375 201.7697C561.52734375 201.7697 561.52734375 201.7697 561.52734375 201.7697 "
                                                    fill="none" fill-opacity="1" stroke="#ffc107" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                    class="apexcharts-area" index="1"
                                                    clip-path="url(#gridRectMask0yvisnrw)"
                                                    pathTo="M 0 71.5957C 32.75576171875 71.5957 60.83212890625001 221.29579999999999 93.58789062500001 221.29579999999999C 126.34365234375002 221.29579999999999 154.42001953125003 178.98925 187.17578125000003 178.98925C 219.93154296875002 178.98925 248.00791015625 68.34134999999998 280.763671875 68.34134999999998C 313.51943359375 68.34134999999998 341.59580078125003 214.7871 374.35156250000006 214.7871C 407.1073242187501 214.7871 435.18369140625003 182.2436 467.93945312500006 182.2436C 500.69521484375 182.2436 528.77158203125 201.7697 561.52734375 201.7697"
                                                    pathFrom="M 0 325.435 L 0 325.435 L 93.58789062500001 325.435 L 187.17578125000003 325.435 L 280.763671875 325.435 L 374.35156250000006 325.435 L 467.93945312500006 325.435 L 561.52734375 325.435"
                                                    fill-rule="evenodd"></path>
                                                <g id="SvgjsG1047"
                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                    data:realIndex="1">
                                                    <g id="SvgjsG1049" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMask0yvisnrw)">
                                                        <path id="SvgjsPath1050" d="M 0, 71.5957
m -5, 0
a 5,5 0 1,0 10,0
a 5,5 0 1,0 -10,0" fill="#ffc107" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt"
                                                            stroke-width="2" stroke-dasharray="0" cx="0" cy="71.5957"
                                                            shape="circle"
                                                            class="apexcharts-marker no-pointer-events w4jq07jge"
                                                            rel="0" j="0" index="1" default-marker-size="5">
                                                        </path>
                                                        <path id="SvgjsPath1051" d="M 93.58789062500001, 221.29579999999999
m -5, 0
a 5,5 0 1,0 10,0
a 5,5 0 1,0 -10,0" fill="#ffc107" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt"
                                                            stroke-width="2" stroke-dasharray="0" cx="93.58789062500001"
                                                            cy="221.29579999999999" shape="circle"
                                                            class="apexcharts-marker no-pointer-events wnr54h14vk"
                                                            rel="1" j="1" index="1" default-marker-size="5">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG1052" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMask0yvisnrw)">
                                                        <path id="SvgjsPath1053" d="M 187.17578125000003, 178.98925
m -5, 0
a 5,5 0 1,0 10,0
a 5,5 0 1,0 -10,0" fill="#ffc107" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            cx="187.17578125000003" cy="178.98925" shape="circle"
                                                            class="apexcharts-marker no-pointer-events wvyajw1ur"
                                                            rel="2" j="2" index="1" default-marker-size="5">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG1054" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMask0yvisnrw)">
                                                        <path id="SvgjsPath1055" d="M 280.763671875, 68.34134999999998
m -5, 0
a 5,5 0 1,0 10,0
a 5,5 0 1,0 -10,0" fill="#ffc107" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt"
                                                            stroke-width="2" stroke-dasharray="0" cx="280.763671875"
                                                            cy="68.34134999999998" shape="circle"
                                                            class="apexcharts-marker no-pointer-events wwuo3saylh"
                                                            rel="3" j="3" index="1" default-marker-size="5">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG1056" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMask0yvisnrw)">
                                                        <path id="SvgjsPath1057" d="M 374.35156250000006, 214.7871
m -5, 0
a 5,5 0 1,0 10,0
a 5,5 0 1,0 -10,0" fill="#ffc107" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            cx="374.35156250000006" cy="214.7871" shape="circle"
                                                            class="apexcharts-marker no-pointer-events w98ztmf43"
                                                            rel="4" j="4" index="1" default-marker-size="5">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG1058" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMask0yvisnrw)">
                                                        <path id="SvgjsPath1059" d="M 467.93945312500006, 182.2436
m -5, 0
a 5,5 0 1,0 10,0
a 5,5 0 1,0 -10,0" fill="#ffc107" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            cx="467.93945312500006" cy="182.2436" shape="circle"
                                                            class="apexcharts-marker no-pointer-events w3e3y5zmw"
                                                            rel="5" j="5" index="1" default-marker-size="5">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG1060" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMask0yvisnrw)">
                                                        <path id="SvgjsPath1061" d="M 561.52734375, 201.7697
m -5, 0
a 5,5 0 1,0 10,0
a 5,5 0 1,0 -10,0" fill="#ffc107" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt"
                                                            stroke-width="2" stroke-dasharray="0" cx="561.52734375"
                                                            cy="201.7697" shape="circle"
                                                            class="apexcharts-marker no-pointer-events wd0erhenr"
                                                            rel="6" j="6" index="1" default-marker-size="5">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1026" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            <g id="SvgjsG1048" class="apexcharts-datalabels" data:realIndex="1"></g>
                                        </g>
                                        <line id="SvgjsLine1090" x1="0" y1="0" x2="561.52734375" y2="0" stroke="#b6b6b6"
                                            stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1091" x1="0" y1="0" x2="561.52734375" y2="0"
                                            stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1092" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1093" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"><text id="SvgjsText1095"
                                                    font-family="&quot;Inter&quot;, &quot;sans-serif&quot;" x="0"
                                                    y="288.348" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#5c6c75"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Inter, &quot;sans-serif&quot;;">
                                                    <tspan id="SvgjsTspan1096">Jan</tspan>
                                                    <title>Jan</title>
                                                </text><text id="SvgjsText1098"
                                                    font-family="&quot;Inter&quot;, &quot;sans-serif&quot;"
                                                    x="93.587890625" y="288.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Inter, &quot;sans-serif&quot;;">
                                                    <tspan id="SvgjsTspan1099">Feb</tspan>
                                                    <title>Feb</title>
                                                </text><text id="SvgjsText1101"
                                                    font-family="&quot;Inter&quot;, &quot;sans-serif&quot;"
                                                    x="187.17578125" y="288.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Inter, &quot;sans-serif&quot;;">
                                                    <tspan id="SvgjsTspan1102">March</tspan>
                                                    <title>March</title>
                                                </text><text id="SvgjsText1104"
                                                    font-family="&quot;Inter&quot;, &quot;sans-serif&quot;"
                                                    x="280.763671875" y="288.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Inter, &quot;sans-serif&quot;;">
                                                    <tspan id="SvgjsTspan1105">April</tspan>
                                                    <title>April</title>
                                                </text><text id="SvgjsText1107"
                                                    font-family="&quot;Inter&quot;, &quot;sans-serif&quot;"
                                                    x="374.3515625" y="288.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Inter, &quot;sans-serif&quot;;">
                                                    <tspan id="SvgjsTspan1108">May</tspan>
                                                    <title>May</title>
                                                </text><text id="SvgjsText1110"
                                                    font-family="&quot;Inter&quot;, &quot;sans-serif&quot;"
                                                    x="467.939453125" y="288.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Inter, &quot;sans-serif&quot;;">
                                                    <tspan id="SvgjsTspan1111">Jun</tspan>
                                                    <title>Jun</title>
                                                </text><text id="SvgjsText1113"
                                                    font-family="&quot;Inter&quot;, &quot;sans-serif&quot;"
                                                    x="561.52734375" y="288.348" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Inter, &quot;sans-serif&quot;;">
                                                    <tspan id="SvgjsTspan1114">Jul</tspan>
                                                    <title>Jul</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1145"
                                            class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                        </g>
                                        <g id="SvgjsG1146"
                                            class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                        </g>
                                        <g id="SvgjsG1147"
                                            class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                        </g>
                                        <rect id="SvgjsRect1148" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                            opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                            fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                        <rect id="SvgjsRect1149" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                            opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                            fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                    </g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(10, 173, 10);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                            </div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(255, 193, 7);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                            </div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                    <div class="apexcharts-xaxistooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 xl:col-span-4 lg:col-span-6">
                <!-- card -->
                <div class="h-full card card-lg">
                    <!-- card body -->
                    <div class="p-6 card-body">
                        <!-- heading -->
                        <h3 class="mb-0 text-md">Total Sales</h3>
                        <div id="totalSale" class="flex justify-center mt-6" style="min-height: 252.8px;">
                            <div id="apexchartsm7hw6i3l" class="apexcharts-canvas apexchartsm7hw6i3l apexcharts-theme-"
                                style="width: 290px; height: 252.8px;"><svg id="SvgjsSvg1150" width="290" height="252.8"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)">
                                    <foreignObject x="0" y="0" width="290" height="252.8">
                                        <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml">
                                        </div>
                                    </foreignObject>
                                    <g id="SvgjsG1152" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(23, 0)">
                                        <defs id="SvgjsDefs1151">
                                            <clipPath id="gridRectMaskm7hw6i3l">
                                                <rect id="SvgjsRect1153" width="250" height="334" x="-2" y="-2" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskm7hw6i3l"></clipPath>
                                            <clipPath id="nonForecastMaskm7hw6i3l"></clipPath>
                                            <clipPath id="gridRectMarkerMaskm7hw6i3l">
                                                <rect id="SvgjsRect1154" width="250" height="334" x="-2" y="-2" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <g id="SvgjsG1157" class="apexcharts-pie">
                                            <g id="SvgjsG1158" transform="translate(0, 0) scale(1)">
                                                <circle id="SvgjsCircle1159" r="98.60000000000002" cx="123" cy="123"
                                                    fill="transparent"></circle>
                                                <g id="SvgjsG1160" class="apexcharts-slices">
                                                    <g id="SvgjsG1161" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Shippings" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1162"
                                                            d="M 123 6.999999999999986 A 116.00000000000001 116.00000000000001 0 1 1 40.97561338236048 205.02438661763952 L 53.2792713750064 192.72072862499363 A 98.60000000000002 98.60000000000002 0 1 0 123 24.399999999999977 L 123 6.999999999999986 z "
                                                            fill="rgba(10,173,10,1)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                            index="0" j="0" data:angle="225" data:startAngle="0"
                                                            data:strokeWidth="0" data:value="6000"
                                                            data:pathOrig="M 123 6.999999999999986 A 116.00000000000001 116.00000000000001 0 1 1 40.97561338236048 205.02438661763952 L 53.2792713750064 192.72072862499363 A 98.60000000000002 98.60000000000002 0 1 0 123 24.399999999999977 L 123 6.999999999999986 z ">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG1163" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Refunds" rel="2" data:realIndex="1">
                                                        <path id="SvgjsPath1164"
                                                            d="M 40.97561338236048 205.02438661763952 A 116.00000000000001 116.00000000000001 0 0 1 22.54105316100511 64.99999999999997 L 37.60989518685433 73.69999999999997 A 98.60000000000002 98.60000000000002 0 0 0 53.2792713750064 192.72072862499363 L 40.97561338236048 205.02438661763952 z "
                                                            fill="rgba(255,193,7,1)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                            index="0" j="1" data:angle="75" data:startAngle="225"
                                                            data:strokeWidth="0" data:value="2000"
                                                            data:pathOrig="M 40.97561338236048 205.02438661763952 A 116.00000000000001 116.00000000000001 0 0 1 22.54105316100511 64.99999999999997 L 37.60989518685433 73.69999999999997 A 98.60000000000002 98.60000000000002 0 0 0 53.2792713750064 192.72072862499363 L 40.97561338236048 205.02438661763952 z ">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG1165" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Order" rel="3" data:realIndex="2">
                                                        <path id="SvgjsPath1166"
                                                            d="M 22.54105316100511 64.99999999999997 A 116.00000000000001 116.00000000000001 0 0 1 78.60872184564961 15.829974228690716 L 85.26741356880217 31.905478094387092 A 98.60000000000002 98.60000000000002 0 0 0 37.60989518685433 73.69999999999997 L 22.54105316100511 64.99999999999997 z "
                                                            fill="rgba(219,48,48,1)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                            index="0" j="2" data:angle="37.5" data:startAngle="300"
                                                            data:strokeWidth="0" data:value="1000"
                                                            data:pathOrig="M 22.54105316100511 64.99999999999997 A 116.00000000000001 116.00000000000001 0 0 1 78.60872184564961 15.829974228690716 L 85.26741356880217 31.905478094387092 A 98.60000000000002 98.60000000000002 0 0 0 37.60989518685433 73.69999999999997 L 22.54105316100511 64.99999999999997 z ">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG1167" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Income" rel="4" data:realIndex="3">
                                                        <path id="SvgjsPath1168"
                                                            d="M 78.60872184564961 15.829974228690716 A 116.00000000000001 116.00000000000001 0 0 1 122.97975418077964 7.000001766781011 L 122.9827910536627 24.400001501763853 A 98.60000000000002 98.60000000000002 0 0 0 85.26741356880217 31.905478094387092 L 78.60872184564961 15.829974228690716 z "
                                                            fill="rgba(1,107,248,1)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-3"
                                                            index="0" j="3" data:angle="22.5" data:startAngle="337.5"
                                                            data:strokeWidth="0" data:value="600"
                                                            data:pathOrig="M 78.60872184564961 15.829974228690716 A 116.00000000000001 116.00000000000001 0 0 1 122.97975418077964 7.000001766781011 L 122.9827910536627 24.400001501763853 A 98.60000000000002 98.60000000000002 0 0 0 85.26741356880217 31.905478094387092 L 78.60872184564961 15.829974228690716 z ">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1155" class="apexcharts-datalabels-group"
                                                transform="translate(0, 0) scale(1)"><text id="SvgjsText1169"
                                                    font-family="&quot;Inter&quot;, &quot;sans-serif&quot;" x="123"
                                                    y="113" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="16px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-datalabel-label"
                                                    style="font-family: Inter, &quot;sans-serif&quot;;">Total
                                                    Sales</text><text id="SvgjsText1170"
                                                    font-family="&quot;Inter&quot;, &quot;sans-serif&quot;" x="123"
                                                    y="147" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="24px" font-weight="800" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-datalabel-value"
                                                    style="font-family: Inter, &quot;sans-serif&quot;;">9600</text>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1171" x1="0" y1="0" x2="246" y2="0" stroke="#b6b6b6"
                                            stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1172" x1="0" y1="0" x2="246" y2="0" stroke-dasharray="0"
                                            stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                    </g>
                                    <g id="SvgjsG1156" class="apexcharts-datalabels-group"
                                        transform="translate(0, 0) scale(1)"></g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-dark">
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(10, 173, 10);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                            </div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(255, 193, 7);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                            </div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(219, 48, 48);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                            </div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 4;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(1, 107, 248);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                            </div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <!-- list -->
                            <ul class="mb-0">
                                <li class="flex items-center gap-2 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"
                                        fill="currentColor"
                                        class="text-green-600 icon icon-tabler icons-tabler-filled icon-tabler-circle">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z">
                                        </path>
                                    </svg>
                                    <span class="">
                                        <span class="text-gray-800">Shippings $32.98</span>
                                        (2%)
                                    </span>
                                </li>
                                <li class="flex items-center gap-2 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"
                                        fill="currentColor"
                                        class="text-yellow-600 icon icon-tabler icons-tabler-filled icon-tabler-circle">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z">
                                        </path>
                                    </svg>
                                    <span class="">
                                        <span class="text-gray-800">Refunds $11</span>
                                        (11%)
                                    </span>
                                </li>
                                <li class="flex items-center gap-2 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"
                                        fill="currentColor"
                                        class="text-red-600 icon icon-tabler icons-tabler-filled icon-tabler-circle">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z">
                                        </path>
                                    </svg>
                                    <span class="">
                                        <span class="text-gray-800">Order $14.87</span>
                                        (1%)
                                    </span>
                                </li>
                                <li class="flex items-center gap-2 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"
                                        fill="currentColor"
                                        class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-cyan-600">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z">
                                        </path>
                                    </svg>
                                    <span class="">
                                        <span class="text-gray-800">Income 3,271</span>
                                        (86%)
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="grid gap-8 mb-8 lg:grid-cols-2">
            <div class="">
                <!-- card -->
                <div class="h-full card card-lg">
                    <!-- card body -->
                    <div class="p-6 card-body">
                        <h3 class="mb-0 text-md">Sales Overview</h3>
                        <div class="mt-6">
                            <!-- text -->
                            <div class="mb-5">
                                <div class="flex items-center justify-between mb-2">
                                    <h5 class="text-base">Total Profit</h5>
                                    <span>
                                        <span class="text-gray-800 me-1">$1,619</span>
                                        (8.6%)
                                    </span>
                                </div>
                                <!-- main wrapper -->
                                <div>
                                    <!-- progressbar -->
                                    <div class="w-full bg-green-50 rounded-full h-1.5">
                                        <div class="bg-green-600 h-1.5 rounded-full" style="width: 53%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5">
                                <!-- text -->
                                <div class="flex items-center justify-between mb-2">
                                    <h5 class="text-base">Total Income</h5>
                                    <span>
                                        <span class="text-gray-800 me-1">$3,571</span>
                                        (86.4%)
                                    </span>
                                </div>
                                <div>
                                    <!-- progressbar -->
                                    <div class="w-full bg-cyan-50 rounded-full h-1.5">
                                        <div class="bg-cyan-600 h-1.5 rounded-full" style="width: 85%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <!-- text -->
                                <div class="flex items-center justify-between mb-2">
                                    <h5 class="text-base">Total Expenses</h5>
                                    <span>
                                        <span class="text-gray-800 me-1">$3,430</span>
                                        (74.5%)
                                    </span>
                                </div>
                                <div>
                                    <!-- progressbar -->
                                    <div class="w-full bg-red-50 rounded-full h-1.5">
                                        <div class="bg-red-600 h-1.5 rounded-full" style="width: 65%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="h-full position-relative">
                    <!-- card -->
                    <div class="mb-6 card card-lg">
                        <!-- card body -->
                        <div class="px-6 py-8 card-body">
                            <div class="flex items-center">
                                <div>
                                    <!-- svg -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="text-yellow-500 icon icon-tabler icons-tabler-outline icon-tabler-bell">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6">
                                        </path>
                                        <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                                    </svg>
                                </div>
                                <!-- text -->
                                <div class="ms-4">
                                    <h5 class="mb-1">Start your day with New Notification.</h5>
                                    <p class="mb-0">
                                        You have
                                        <a class="text-cyan-600" href="#!">2 new notification</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card -->
                    <div class="card card-lg">
                        <!-- card body -->
                        <div class="px-6 py-8 card-body">
                            <div class="flex items-center">
                                <!-- svg -->
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="text-green-600 icon icon-tabler icons-tabler-outline icon-tabler-bulb">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M3 12h1m8 -9v1m8 8h1m-15.4 -6.4l.7 .7m12.1 -.7l-.7 .7">
                                        </path>
                                        <path
                                            d="M9 16a5 5 0 1 1 6 0a3.5 3.5 0 0 0 -1 3a2 2 0 0 1 -4 0a3.5 3.5 0 0 0 -1 -3">
                                        </path>
                                        <path d="M9.7 17l4.6 0"></path>
                                    </svg>
                                </div>
                                <!-- text -->
                                <div class="ms-4">
                                    <h5 class="mb-1">Monitor your Sales and Profitability</h5>
                                    <p class="mb-0"><a class="text-cyan-600" href="#!">View Performance</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="grid grid-cols-1">
            <div class="h-full card card-lg">
                <!-- heading -->
                <div class="p-6">
                    <h3 class="mb-0 text-md">Recent Order</h3>
                </div>
                <div class="p-0 card-body">
                    <!-- table -->
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-left whitespace-nowrap">
                            <thead class="text-gray-700 bg-gray-200">
                                <tr class="border-b border-gray-300">
                                    <th scope="col" class="px-6 py-3">Order Number</th>
                                    <th scope="col" class="px-6 py-3">Product Name</th>
                                    <th scope="col" class="px-6 py-3">Order Date</th>
                                    <th scope="col" class="px-6 py-3">Price</th>
                                    <th scope="col" class="px-6 py-3">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y">
                                <tr>
                                    <td class="px-6 py-3 text-left">#FC0005</td>
                                    <td class="px-6 py-3 text-left">Haldiram's Sev Bhujia</td>
                                    <td class="px-6 py-3 text-left">28 March 2023</td>
                                    <td class="px-6 py-3 text-left">$18.00</td>
                                    <td class="px-6 py-3 text-left">
                                        <span
                                            class="inline-block p-1 text-sm font-semibold leading-none text-green-800 align-baseline bg-green-100 border border-green-200 rounded">Shipped</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-3 text-left">#FC0004</td>
                                    <td class="px-6 py-3 text-left">NutriChoice Digestive</td>
                                    <td class="px-6 py-3 text-left">24 March 2023</td>
                                    <td class="px-6 py-3 text-left">$24.00</td>
                                    <td class="px-6 py-3 text-left">
                                        <span
                                            class="inline-block p-1 text-sm font-semibold leading-none align-baseline border rounded bg-cyan-100 text-cyan-800 border-cyan-200">Pending</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-3 text-left">#FC0003</td>
                                    <td class="px-6 py-3 text-left">Onion Flavour Potato</td>
                                    <td class="px-6 py-3 text-left">8 Feb 2023</td>
                                    <td class="px-6 py-3 text-left">$9.00</td>
                                    <td class="px-6 py-3 text-left">
                                        <span
                                            class="inline-block p-1 text-sm font-semibold leading-none text-red-800 align-baseline bg-red-100 border border-red-200 rounded">Cancel</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-3 text-left">#FC0002</td>
                                    <td class="px-6 py-3 text-left">Blueberry Greek Yogurt</td>
                                    <td class="px-6 py-3 text-left">20 Jan 2023</td>
                                    <td class="px-6 py-3 text-left">$12.00</td>
                                    <td class="px-6 py-3 text-left">
                                        <span
                                            class="inline-block p-1 text-sm font-semibold leading-none text-yellow-800 align-baseline bg-yellow-100 border border-yellow-200 rounded">Pending</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-3 text-left">#FC0001</td>
                                    <td class="px-6 py-3 text-left">Slurrp Millet Chocolate</td>
                                    <td class="px-6 py-3 text-left">14 Jan 2023</td>
                                    <td class="px-6 py-3 text-left">$8.00</td>
                                    <td class="px-6 py-3 text-left">
                                        <span
                                            class="inline-block p-1 text-sm font-semibold leading-none text-pink-800 align-baseline bg-pink-100 border border-pink-200 rounded">Processing</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-dashboard-layout>
