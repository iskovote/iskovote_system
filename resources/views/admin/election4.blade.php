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
            <h2>Step 4 - Create Ballot</h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form id="election-step3" class="form-horizontal form-label-left" method="" action="">
              {{ csrf_field() }}
              
            <!--ilalagay dito yung accordion type, kung ilan yung sinelect sa positions yun ang bilang ng accordion at kung ilan yung partylist yun ang bilang ng candidates per position-->
            
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                <button type="submit" style="float: right" class="btn btn-success">Create Ballot</button>
              </div>
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