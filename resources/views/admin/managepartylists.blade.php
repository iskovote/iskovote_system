@extends('layout.app')
@section('title')
Manage Partylists
@endsection
@section('content')

<!--page content-->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Manage Partylists</h3>
      </div>
    </div>
    <br/><br/>

    <!--Buttons(add, edit,delete)-->
    <button id="delete_position" data-toggle="modal" data-target="#deleteParty" class="btn btn-danger" style="float: right;">Delete Partylist</button>
    <button id="edit_position" data-toggle="modal" data-target="#editParty" class="btn btn-primary" style="float: right;">Edit Partylist</button>
    <button id="add_position" data-toggle="modal" data-target="#addPartyModal" class="btn btn-success" style="float: right;">Add Partylist</button>

    <!-- Modal (add) -->
    <div id="addPartyModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Partylist</h4>
          </div>

          <form id="frmAddParty" class="form-horizontal" autocomplete="off" action="/manage-partylists" method="POST">
            {{ csrf_field() }}
            <div class="modal-body">
              <div class="form-group">
                <label class="control-label col-md-3">Partylist Initial<span class="required">*</span>
                </label>
                <div class="ccol-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="party_initial" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Partylist Name<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="party_name" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
              <button type="submit" name="btnSaveParty" id="btnSavePos" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--end of modal for add position-->

    <!-- Modal (edit) -->
    <div id="editPosition" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edit Partylist</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
              <div class="form-group">
                <label class="control-label col-md-3">ID<span class="required">*</span>
                </label>
                <div class="ccol-md-9 col-sm-9 col-xs-12">
                  <input type="text" id="positionID" disabled="disabled" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Partylist <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" id="position" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Save Changes</button>
            <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
    <!--end of modal for edit student-->

    <!--party data table-->
    <div class="x_panel">
      <div class="x_content">
       <table id="tbl_partylists" class="table table-striped jambo_table table-bordered bulk_action datatable-checkbox" cellspacing="0" width="100%">
        <thead>
          <tr class="headings">
            <th class="dark">
              <input type="checkbox" id="check-all" class="flat">
            </th>
            <th class="column-title">ID</th>
            <th class="column-title">Party Initial </th>
            <th class="column-title">Party Name </th>
            <th class="bulk-actions" colspan="3">
              <a class="antoo" style="color:white; font-weight:500;">Partylist ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
            </th>
          </tr>
        </thead>

        <tbody>
          @foreach($tbl_partylists as $party)
          <tr>
            <td>
              <input type="checkbox" class="flat" name="table_records">
            </td>
            <td> {{ $party -> party_id }} </td>
            <td> {{ $party -> party_initial }} </td>
            <td> {{ $party -> party_name }} </td>
          </tr>   
          @endforeach
          
        </tbody>
      </table>
    </div>
  </div>
  <!--/datatable-->
</div>
</div>
<!--/end of page content-->
</div>
@endsection


