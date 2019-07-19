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
    <button id="delete_course" data-toggle="modal" data-target="#deleteCourse" class="btn btn-danger" style="float: right;">Delete </button>
    <button id="edit_course" data-toggle="modal" data-target="#editCourse" class="btn btn-primary" style="float: right;">Edit </button>
    <button id="add_course" data-toggle="modal" data-target="#addCourse" class="btn btn-success" style="float: right;">Add </button>

    <!-- Modal (add) -->
    <div id="addCourse" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Course</h4>
          </div>
          <form class="form-horizontal" autocomplete="off" action="/manage-courses" method="POST">
            {{ csrf_field() }}
            <div class="modal-body">
              <div class="form-group">
                <label class="control-label col-md-3">ID<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="course_id" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Course Name<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="course_name" required="required" class="form-control col-md-7 col-xs-12">
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
    <div id="editCourse" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edit Course</h4>
          </div>
          <form class="form-horizontal">
          <div class="modal-body">
              <div class="form-group">
                <label class="control-label col-md-3">ID<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="course_id" disabled="disabled" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Course Name<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="course_name" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Save Changes</button>
              <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--end of modal for edit course-->

    <!-- Modal (delete) -->
    <div id="deleteCourse" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Delete Course?</h4>
          </div>
          <div class="modal-body">
            <p> Are you sure you want to delete this Record? </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
            <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
    <!--end of modal for delete course-->

    <!--student data table-->
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
              <th class="column-title">Org Logo </th>
              <th class="column-title">Course </th>
              <th class="bulk-actions" colspan="5">
                <a class="antoo" style="color:white; font-weight:500;">Organizations ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
              </th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>
      </div>
    </div>
    <!--/datatable-->
    
  </div>
</div>
<!--/page content-->

@endsection