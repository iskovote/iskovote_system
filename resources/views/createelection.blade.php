@extends('layout.app')

@section('title')
Create Election
@endsection

@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Create Election</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <br/>

                    <!-- Smart Wizard -->
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Step 1<br />
                                              <small>Set Election</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Step 2<br />
                                              <small>Select Positions</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Step 3<br />
                                              <small>Select Partylists</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                                              Step 4<br />
                                              <small>Create Ballot</small>
                                          </span>
                          </a>
                        </li>
                         
                      </ul>

                      <!--STEP 1 Set Election-->
                      <div id="step-1">
                        <form class="form-horizontal form-label-left">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="election_type">Election Type <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select id="election_type" class="form-control col-md-3" required="required">
                              	<option>Student Council Election</option>
                              	<option>Organization Election</option>
                              </select>                            
                          	</div>
                          </div>
                          <div class="form-group" id="sel_org">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="election_type">Organization <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select id="select_org" class="form-control col-md-3" required="required">
                                <option id="option_org"></option>
                              </select>                            
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="election_term">Election Term <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" placeholder="YYYY-YYYY" id="election_term" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Start Date <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="start_date" class="date-picker form-control col-md-7 col-xs-12" required="required" type="date">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">End Date <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="end_date" class="date-picker form-control col-md-7 col-xs-12" required="required" type="date">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Start Time <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="start_time" class="date-picker form-control col-md-7 col-xs-12" required="required" type="time" step="1">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">End Time <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="end_time" class="date-picker form-control col-md-7 col-xs-12" required="required" type="time" step="1">
                            </div>
                          </div>

                        </form>
                      </div>

                      <!--STEP 2 Select Positions-->                     
                      <div id="step-2">

                        <h3 class="StepTitle">Select Positions</h3>

                        <p>
                          Please select the positions that will be included in your election.
                        </p>

                        <!--position data table-->
                 <div class="x_panel">
                  <div class="x_content">
                       <table id="tbl_positions" class="table table-striped jambo_table table-bordered bulk_action datatable-checkbox" cellspacing="0" width="100%">
                        <thead>
                          <tr class="headings">
                            <th class="dark">
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Position </th>
                            <th class="bulk-actions" colspan="2">
                              <a class="antoo" style="color:white; font-weight:500;">Positions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td>
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td>President</td>
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
          </div>
          <!--/datatable-->

                      </div>

                      <!--STEP 3 Select Partylists-->
                      <div id="step-3">
                        <h3 class="StepTitle">Select Partylists</h3>
                        
                        <p>
                           Please select the partylists that will be included in your election.
                        </p>

                      </div>

                      <!--STEP 4 Create Ballot-->
                      <div id="step-4">
                        <h3 class="StepTitle">Create Ballot</h3>
                        <br/><br/>

                        </div>    

                    </div>


                    <!-- End SmartWizard Content -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection