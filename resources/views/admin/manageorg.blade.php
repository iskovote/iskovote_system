@extends('layout.app')
@section('title')
Manage Organizations
@endsection
@section('content')

<!--page content-->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Manage Organizations</h3>
      </div>
    </div>
    <br/><br/>

    <!--Buttons(add, edit, delete)-->
    <div style="text-align: right;">
      <button id="add_org" data-toggle="modal" data-target="#addOrg" class="btn btn-success" >Add Org</button>
      <button id="edit_org" data-toggle="modal" data-target="#editOrg" class="btn btn-primary">Edit Org</button>
      <form style="display: inline" method="post" action="">
        {{csrf_field()}}
        <button id="delete_org" class="btn btn-danger" >Delete Org</button>
      </form>  
    </div>

    <!-- Modal (add) -->
    <div id="addOrg" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Org</h4>
          </div>
          <form class="form-horizontal" autocomplete="off" action="/manage-org" method="POST">
            {{ csrf_field() }}
            <div class="modal-body">
              <div class="form-group">
                <label class="control-label col-md-3">ID<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="org_id" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Org Name<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="org_name" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Course <span class="required">*</span></label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                 <select class="form-control" name="course_id">
                  @foreach($tbl_courses as $course)
                  <option>{{ $course -> course_id }}</option>
                  @endforeach
                </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Org Logo</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="file" name="org_logo" accept="image/*" >
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Add</button>
              <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--end of modal for add course-->

    <!-- Modal (edit) -->
    <div id="editOrg" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edit Org</h4>
          </div>
          <form class="form-horizontal" autocomplete="off" action="/manage-org" method="POST">
            {{ csrf_field() }}
          <div class="modal-body">
              <div class="form-group">
                <label class="control-label col-md-3">ID<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input disabled="disabled" type="text" name="course_id" disabled="disabled" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Org Name<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="course_name" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Save Changes</button>
              <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--end of modal for edit course-->

    <!--org data table-->
    <div class="x_panel">
      <div class="x_content">
        <table id="tbl_courses" class="table table-striped jambo_table table-bordered bulk_action datatable-checkbox" cellspacing="0" width="100%">
          <thead>
            <tr class="headings">
              <th class="dark">
                <input type="checkbox" id="check-all" class="flat">
              </th>
              <th class="column-title">ID</th>
              <th class="column-title">Org Name </th>
              <th class="column-title">Course </th>
              <th class="column-title">Org Logo </th>
              <th class="bulk-actions" colspan="5">
                <a class="antoo" style="color:white; font-weight:500;">Organizations ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
              </th>
            </tr>
          </thead>
          <tbody>
            <!--Retrieve Data-->
            @foreach($tbl_orgs as $org)
            <tr>
              <td>
                <input type="checkbox" class="flat" name="table_records">
              </td>
              <td> {{ $org -> org_id }} </td>
              <td> {{ $org -> org_name }} </td>
              <td> {{ $org -> course_id }} </td>
              <td> <img src= "{{asset('/images/logo/' . $org->org_logo)}}" width="50px" height="50px" alt="Image"> </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <!--/datatable-->
    
  </div>
</div>
<!--/page content-->

@endsection