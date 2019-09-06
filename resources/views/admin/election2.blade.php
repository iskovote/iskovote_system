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
            <h2>Step 2 - Select Positions</h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <p>Please select the positions that will be included in your election</p>
            <form id="election-step2" class="form-horizontal form-label-left" method="" action="{{ route('election.positions')}}">
              {{ csrf_field() }}
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
                        <a class="antoo" style="color:white; font-weight:500;">Positions</a>
                      </th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($tbl_positions as $position)
                    <tr>
                      <td>
                        <input type="checkbox" class="flat" name="create-positions">
                      </td>
                      <td>{{ $position -> position}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!--/datatable-->
            
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                <button type="submit" style="float: right" class="btn btn-success">Set Positions</button>
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