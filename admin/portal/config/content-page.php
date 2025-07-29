<?php if ($page=='dashboard') {?>
    <div class="booking">
        <div class="con">
            <div class="text-div-in">
                <div class="txt-icon">
                    <div class="txt">
                        <h3>827</h3>
                        <span>Staff</span>
                    </div>
                    <i class="bi bi-people-fill"></i>
                </div>
            </div>
        </div>

        <div class="con shedule">
            <div class="text-div-in">
                <div class="txt-icon">
                    <div class="txt">
                        <h3>827</h3>
                        <span>Hostel</pspan>
                    </div>
                    <i class="bi bi-bank2"></i>
                </div>
            </div>
        </div>

        <div class="con check-in">
            <div class="text-div-in">
                <div class="txt-icon">
                    <div class="txt">
                        <h3>827</h3>
                        <span>FAQ</span>
                    </div>
                    <i class="bi bi-record-circle"></i>
                </div>
            </div>
        </div>

        <div class="con check-out">
            <div class="text-div-in">
                <div class="txt-icon">
                    <div class="txt">
                        <h3>827</h3>
                        <span>Blog</span>
                    </div>
                    <i class="bi bi-book"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="chart-back-div">
            <div class="chart-div-notifications">
                <div class="text"><i class="bi-graph-up-arrow"></i> Showing Matrix for</div> 
                
                    <div class="text">
                        <div class="custom-srch-div">
                            <input id="datepicker-from" type="text" class="srchtxt" placeholder="From" title="Select Date From" />
                            <input id="datepicker-to" type="text" class="srchtxt" placeholder="To" title="Select Date To"/>
                            <button type="button" class="btn" onclick=" _fetch_custom_dashboard_report('dashboard_report','custom_search')">Apply</button>
                        </div>
                    </div>

                    <div class="text text-right" onclick="select_search()">
                        <span id="srch-text">Last 30 Days</span>&nbsp;<i class="fa fa-sort-down (alias)"></i>
                        <div class="srch-select">
                        <div id="srch-today" onclick="get_dashboard_report('srch-today', 'view_today_search');">Today</div>
                        <div id="srch-week" onclick="get_dashboard_report('srch-week', 'view_thisweek_search');">This Week</div>
                        <div id="srch-7" onclick="get_dashboard_report('srch-7', 'view_7days_search');">Last 7 Days</div>
                        <div id="srch-month" onclick="get_dashboard_report('srch-month', 'view_thismonth_search');">This Month</div>
                        <div id="srch-30" onclick="get_dashboard_report('srch-30', 'view_30days_search');">Last 30 Days</div>
                        <div id="srch-90" onclick="get_dashboard_report('srch-90', 'view_90days_search');">Last 90 Days</div>
                        <div id="srch-year" onclick="get_dashboard_report('srch-year', 'view_thisyear_search');">This Year</div>
                        <div id="srch-1year" onclick="get_dashboard_report('srch-1year', 'view_1year_search');">Last 1 Year</div>
                        <div onclick="srch_custom('Custom Search')">Custom Search</div>
                    </div>
                    <div class="icon-div"><i class="bi-caret-down"></i></div>
                </div>
            
                <br clear="all" />
            </div>

            <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                <script>
                $(document).ready(function() {

                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    theme: "light1",
                    title:{
                        text: ""
                    },
                    axisX:{
                        valueFormatString: "DD MMM",
                        crosshair: {
                            enabled: true,
                            snapToDataPoint: true
                        }
                    },
                    axisY: {
                        title: "",
                        includeZero: true,
                        crosshair: {
                            enabled: true
                        }
                    },
                    toolTip:{
                        shared:true
                    },  
                    legend:{
                        cursor:"pointer",
                        verticalAlign: "bottom",
                        horizontalAlign: "left",
                        dockInsidePlotArea: true,
                        itemclick: toogleDataSeries
                    },
                    data: [{
                        type: "line",
                        showInLegend: true,
                        name: "Sales",
                        markerType: "square",
                        xValueFormatString: "DD MMM, YYYY",
                        color: "#29BA00",
                        dataPoints: [
                            
                            { x: new Date(2024, 1, 10), y: 1000 },
                            { x: new Date(2024, 1, 8), y: 650 },
                            { x: new Date(2024, 1, 7), y: 970 },
                            { x: new Date(2024, 1, 6), y: 420 },
                            { x: new Date(2024, 1, 4), y: 720 },
                            { x: new Date(2024, 1, 2), y: 200 },
                            { x: new Date(2024, 1, 1), y: 820 },
                            { x: new Date(2024, 0, 29), y: 960 },
                            { x: new Date(2024, 0, 27), y: 150 },
                            { x: new Date(2024, 0, 25), y: 700 },
                            { x: new Date(2024, 0, 23), y: 555 },
                            { x: new Date(2024, 0, 19), y: 362 },
                            { x: new Date(2024, 0, 17), y: 446 },
                            { x: new Date(2024, 0, 16), y: 825 },
                            { x: new Date(2024, 0, 15), y: 270 },
                            
                        ]
                    },
                    {
                        type: "line",
                        showInLegend: true,
                        name: "Wallet",
                        lineDashType: "dash",
                        dataPoints: [
                            
                            { x: new Date(2024, 1, 10), y: 1000 },
                            { x: new Date(2024, 1, 8), y: 900 },
                            { x: new Date(2024, 1, 7), y: 800 },
                            { x: new Date(2024, 1, 6), y: 700 },
                            { x: new Date(2024, 1, 4), y: 600 },
                            { x: new Date(2024, 1, 2), y: 500 },
                            { x: new Date(2024, 1, 1), y: 900 },
                            { x: new Date(2024, 0, 29), y: 1000 },
                            { x: new Date(2024, 0, 27), y: 800 },
                            { x: new Date(2024, 0, 25), y: 500 },
                            { x: new Date(2024, 0, 23), y: 875 },
                            { x: new Date(2024, 0, 19), y: 675 },
                            { x: new Date(2024, 0, 17), y: 995 },
                            { x: new Date(2024, 0, 16), y: 400 },
                            { x: new Date(2024, 0, 15), y: 600 },
                        ]
                    }]
                });
                chart.render();

                function toogleDataSeries(e){
                    if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                        e.dataSeries.visible = false;
                    } else{
                        e.dataSeries.visible = true;
                    }
                    chart.render();
                }
                })

                _arps_matrix('<?php echo $db_day30;?>','<?php echo $db_today;?>');
                _payment_matrix('<?php echo $db_day30;?>','<?php echo $db_today;?>');
                _get_all_count();
            
            </script>
        </div>
<?php }?>

<?php if ($page=='all_staff') {?>

    <div class="search-div-back">
        <select class="text_field select-div">
            <option value="">Select Status<option> 
            <option value="">ACTIVE<option>
            <option value="">SUSPEND<option>
        </select>
        <input class="text_field" type="text" name="email" placeholder="Type Here To Search....">
    </div>

    <div class="create-admin">
        <div class="alert alert-success"><span><i class="bi-people"></i> ADMINISTERATOR'S LIST</span>
            <button class="btn"><i class="bi-plus-square"></i> CREATE A NEW ADMIN</button>
        </div>

        <div class="admin-detail">
            <div class="account">
                <div class="imageBox">
                    <img src="all-images/images/me.jpg" alt="Admin profile picture">
                </div>
                
                <div class="contentBox">
                    <h3>Seton Emmanuel</h3>
                    <hr/>
 
                    <div class="detail">
                        <span>ID: STT00002</span>
                        <span>ADMIN</span>
                        <span>ACTIVE</span>
                    </div>
                </div>
            </div>

            <div class="account">
                <div class="imageBox">
                    <img src="all-images/images/me.jpg" alt="Admin profile picture">
                </div>
                
                <div class="contentBox">
                    <h3>Barry Job</h3>
                    <hr/>
 
                    <div class="detail">
                        <span>ID: STT00002</span>
                        <span>ADMIN</span>
                        <span>ACTIVE</span>
                    </div>
                </div>
            </div>

            <div class="account">
                <div class="imageBox">
                    <img src="all-images/images/me.jpg" alt="Admin profile picture">
                </div>
                
                <div class="contentBox">
                    <h3>Seton Emmanuel</h3>
                    <hr/>
 
                    <div class="detail">
                        <span>ID: STT00002</span>
                        <span>ADMIN</span>
                        <span>ACTIVE</span>
                    </div>
                </div>
            </div>

            <div class="account">
                <div class="imageBox">
                    <img src="all-images/images/me.jpg" alt="Admin profile picture">
                </div>
                
                <div class="contentBox">
                    <h3>Barry Job</h3>
                    <hr/>
 
                    <div class="detail">
                        <span>ID: STT00002</span>
                        <span>ADMIN</span>
                        <span>ACTIVE</span>
                    </div>
                </div>
            </div>

            <div class="account">
                <div class="imageBox">
                    <img src="all-images/images/me.jpg" alt="Admin profile picture">
                </div>
                
                <div class="contentBox">
                    <h3>Barry Job</h3>
                    <hr/>
 
                    <div class="detail">
                        <span>ID: STT00002</span>
                        <span>ADMIN</span>
                        <span>ACTIVE</span>
                    </div>
                </div>
            </div>

            <div class="account">
                <div class="imageBox">
                    <img src="all-images/images/me.jpg" alt="Admin profile picture">
                </div>
                
                <div class="contentBox">
                    <h3>Barry Job</h3>
                    <hr/>
 
                    <div class="detail">
                        <span>ID: STT00002</span>
                        <span>ADMIN</span>
                        <span>ACTIVE</span>
                    </div>
                </div>
            </div>

            <div class="account">
                <div class="imageBox">
                    <img src="all-images/images/me.jpg" alt="Admin profile picture">
                </div>
                
                <div class="contentBox">
                    <h3>Barry Job</h3>
                    <hr/>
 
                    <div class="detail">
                        <span>ID: STT00002</span>
                        <span>ADMIN</span>
                        <span>ACTIVE</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

      
<?php }?>

<?php if ($page=='all_hostel') {?>
    <div class="con check-out">
            <div class="text-div-in">
                <div class="txt-icon">
                    <div class="txt">
                        <h3>827</h3>
                        <span>HOSTEL</span>
                    </div>
                    <i class="bi bi-book"></i>
                </div>
            </div>
        </div>
<?php }?>