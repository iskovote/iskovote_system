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
                <form class="form-horizontal form-label-left" method="POST" action="/create-election">
                  {{ csrf_field() }}
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
                      @foreach($tbl_orgs as $org)
                      <option id="option_org">{{ $org -> org_id }}</option>
                      @endforeach
                    </select>                            
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="election_term">Election Term <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text"  data-inputmask="'mask': '9999-9999'" id="election_term" required="required" class="form-control col-md-7 col-xs-12">
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
                      </th>
                      <th class="column-title">Position</th>
                      <th class="bulk-actions" colspan="2">
                        <a class="antoo" style="color:white; font-weight:500;">Positions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                      </th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($tbl_positions as $position)
                    <tr>
                      <td>
                        <input type="checkbox" class="flat" name="table_records">
                      </td>
                      <td>{{ $position -> position}}</td>
                    </tr>
                    @endforeach
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

           <!--partylists data table-->
           <div class="x_panel">
            <div class="x_content">
             <table id="tbl_positions" class="table table-striped jambo_table table-bordered bulk_action datatable-checkbox" cellspacing="0" width="100%">
              <thead>
                <tr class="headings">
                  <th class="dark">
                  </th>
                  <th class="column-title">Partylist Name </th>
                  <th class="bulk-actions" colspan="2">
                    <a class="antoo" style="color:white; font-weight:500;">Partylists ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                  </th>
                </tr>
              </thead>

              <tbody>
                @foreach($tbl_partylists as $party)
                <tr>
                  <td>
                    <input type="checkbox" class="flat" name="table_records">
                  </td>
                  <td>{{$party -> party_name}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <!--/datatable-->
      </div>

<!--STEP 4 Create Ballot-->
      <div id="step-4">
        <h2 class="StepTitle">Create Ballot</h2>
        <br/><br/><br/>
        <div class="container" style="height: 400px;">
          <div class="container">
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">President</a>
                  </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                  <div class="panel-body">  <div class="column4one">
                   <label style="font-size: 15px; padding-left: 40px;"> Candidate #1 </label>
                   <div style="padding-right: 350px; padding-left: 50px;  position: absolute;">
                     <div class = "Position1" style=" padding-right: 200px;">
                      <form style="border-bottom: 0px ">
                       <div class="container">
                        <div class="row">
                          <div class="column">
                            <div class="upload-btn-wrapper">
                              <br/>
                              <img src = "images/userDefault.png" style="display:initial; background-size: cover;" height="220" width="220" id = "pres" border="10">
                              <br/>
                              <button class="btn" style="display: none;">Upload Photo</button>
                              <input type="file" onchange="presImage.call(this)"/>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div style="padding-left: 450px">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label>Student Number*</label>
                      <input id="candidate_sn" class="form-control col-md-3" required="required" style="width: 450px"/>
                    </div>

                    <div class="form-group">
                      <label>Candidate Name*</label>
                      <input id="candidate_sn" class="form-control col-md-3" required="required" style="width: 450px"/>
                    </div>

                    <div class="form-group">
                      <label>Partylist*</label>
                      <select id="partylist" class="form-control col-md-3" required="required" style="width: 500px">
                        <option>ELITE Party</option>
                        <option>KASAR1NLAN</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Biography</label>
                      <textarea id="bio" class="form-control col-md-3" required="required" style="width: 500px"></textarea>
                    </div>
                  </form> 
                </div>
              </div>
            </div>
          </div>
        </div>
        <br/>
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