<x-app-layout>
    <!-- nimmu content area -->
    <div class="nimmu-content-area">
        <div class="container-fluid">

            <!-- Start nimmu analytic area -->
            <div class="nimmu-analytic-area">
                <div class="row">
                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                        <div class="nimmu-default-card nimmu-analytic-color-1">
                            <div class="nimmu-analytic">
                                <p>Worked Issue</p>
                                <h3>1,146</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                        <div class="nimmu-default-card nimmu-analytic-color-2">
                            <div class="nimmu-analytic">
                                <p>Worked Today</p>
                                <h3>5:32 Hr</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-lg-4 mb-4">
                        <div class="nimmu-default-card nimmu-analytic-color-3">
                            <div class="nimmu-analytic">
                                <p>Worked This Week</p>
                                <h3>38:27 Hr</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="nimmu-default-card nimmu-analytic-color-4">
                            <div class="nimmu-analytic">
                                <p>Income</p>
                                <h3>$4,6139</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End nimmu analytic area -->


            <!-- Start nimmu trafic area -->
            <div class="nimmu-trafic-area">
                <div class="row">
                    <div class="col-xl-4 col-12 mb-xl-0 mb-4">
                        <div class="nimmu-default-card">
                            <div class="nimmu-card-header">
                                <h3>Summary</h3>
                            </div>
                            <div class="nimmu-card-body">
                                <div id="nimmu-summary"></div>
                                <ul class="summary-list">
                                    <li style="margin-bottom: 20px;">
                                        <h3><span style="background: rgb(14, 183, 254);"></span> 47%</h3>
                                        <span>Open</span>
                                    </li>
                                    <li style="margin-bottom: 20px;">
                                        <h3><span style="background: rgb(59, 83, 219);"></span> 11%</h3>
                                        <span>To Do</span>
                                    </li>
                                    <li>
                                        <h3><span style="background: rgb(241, 104, 44);"></span> 24%</h3>
                                        <span>In Progress</span>
                                    </li>
                                    <li>
                                        <h3><span style="background: rgb(189, 32, 211);"></span> 18%</h3>
                                        <span>Close</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-12 ">
                        <div class="nimmu-default-card">
                            <div class="nimmu-card-header">
                                <h3>Progress</h3>
                            </div>
                            <div class="nimmu-card-body">
                                <div id="nimmu-progress" style="padding-top: 20px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End nimmu trafic area -->

            <!-- Start Activity -->
            <div class="nimmu-activity nimmu-mt-30">
                <div class="row">
                    <div class="col-12">
                        <div class="nimmu-default-card">
                            <div class="nimmu-card-header">
                                <h3>Report</h3>
                            </div>
                            <div class="nimmu-card-body">
                                <div class="nimmu-activity-table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style="width: 210px;">Members</th>
                                                <th>Progress</th>
                                                <th>Shift</th>
                                                <th>time spent</th>
                                                <th>Weekly Limite</th>
                                                <th>Remaining</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>
                                                    <div class="nimmu-team-activity">
                                                        <img src="images/team/task_member.png">
                                                        <div class="name">Florence Carter</div>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 85%"
                                                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Nov 5 - Nov 7</td>
                                                <td>00:00:00</td>
                                                <td>40:00:00</td>
                                                <td>40:00:00</td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <div class="nimmu-team-activity">
                                                        <img src="images/team/task_member1.png">
                                                        <div class="name">Emerson Zulauf</div>
                                                    </div>
                                                    </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Nov 8 - Nov 10</td>
                                                <td>00:00:00</td>
                                                <td>40:00:00</td>
                                                <td>40:00:00</td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <div class="nimmu-team-activity">
                                                        <img src="images/team/task_member2.png">
                                                        <div class="name">Benjamin Jones</div>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 95%"
                                                            aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Nov 11 - Nov 13</td>
                                                <td>00:00:00</td>
                                                <td>40:00:00</td>
                                                <td>40:00:00</td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <div class="nimmu-team-activity">
                                                        <img src="images/team/task_member3.png">
                                                        <div class="name">Ned Runolfsson</div>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 20%"
                                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Nov 14 - Nov 19</td>
                                                <td>00:00:00</td>
                                                <td>40:00:00</td>
                                                <td>40:00:00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Activity -->

            <!-- Start Revenue area -->
            <div class="nimmu-reviews nimmu-mt-30">
                <div class="row">
                    <div class="col-xl-4 col-12 mb-xl-0 mb-4">
                        <div class="nimmu-default-card">
                            <div class="nimmu-card-header nimmu-mb-30">
                                <h3>Reviews</h3>
                            </div>
                            <div class="nimmu-card-body">
                                <div class="reviews-progress">
                                    <p class="d-flex justify-content-between align-items-center">
                                        <span>5 Star</span>
                                        <span>47%</span>
                                    </p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 47%"
                                            aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="reviews-progress">
                                    <p class="d-flex justify-content-between align-items-center">
                                        <span>4 Star</span>
                                        <span>67%</span>
                                    </p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 67%"
                                            aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="reviews-progress">
                                    <p class="d-flex justify-content-between align-items-center">
                                        <span>3 Star</span>
                                        <span>29%</span>
                                    </p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 29%"
                                            aria-valuenow="29" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="reviews-progress">
                                    <p class="d-flex justify-content-between align-items-center">
                                        <span>2 Star</span>
                                        <span>12%</span>
                                    </p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 12%"
                                            aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="reviews-progress">
                                    <p class="d-flex justify-content-between align-items-center">
                                        <span>1 Star</span>
                                        <span>3%</span>
                                    </p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 3%"
                                            aria-valuenow="3" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-12">
                        <div class="nimmu-default-card">
                            <div class="nimmu-card-header nimmu-mb-30">
                                <div class="d-felx justify-content-between align-items-center">
                                    <div class="nimmu-header-left">
                                        <h3>Review Over Time</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="nimmu-card-body">
                                <div id="nimmu-overtime"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Revenue area -->


        </div>
    </div>
    <!-- nimmu content area -->
</x-app-layout>
