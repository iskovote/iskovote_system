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
            <h2>Step 1 - Set Election</h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form id="election-step1" class="form-horizontal form-label-left" method="post" action="/create-election">
              {{ csrf_field() }}
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="election_type">Election Type <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select id="election_type" name="election_type" class="form-control col-md-3" required="required">
                   <option value="Student Council Election">Student Council Election</option>
                   <option value="Organization Election">Organization Election</option>
                 </select>                            
               </div>
             </div>
             <div class="form-group" id="sel_org">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="election_type">Organization <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select id="select_org" name="org" class="form-control col-md-3" required="required">
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
                <input type="text"  data-inputmask="'mask': '9999-9999'" name="term" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Start Date <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input name="start_date" class="date-picker form-control col-md-7 col-xs-12" required="required" type="date">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">End Date <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input name="end_date" class="date-picker form-control col-md-7 col-xs-12" required="required" type="date">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Start Time <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input name="start_time" class="date-picker form-control col-md-7 col-xs-12" required="required" type="time" step="1">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">End Time <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input name="end_time" class="date-picker form-control col-md-7 col-xs-12" required="required" type="time" step="1">
              </div>
            </div>
            
            <div class="ln_solid"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-success" style="float: right;">Set Election</button>
              
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<!--/form-->




</div>
</div>
@endsection