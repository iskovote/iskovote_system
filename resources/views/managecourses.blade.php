@extends('layout.app')

@section('title')
Manage Courses
@endsection

@section('content')
<!--page content-->
  	<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Manage Courses</h3>
              </div>
            </div>

              <br/><br/>
              <button id="delete_course" data-toggle="modal" data-target="#deleteCourse" class="btn btn-danger" style="float: right;">Delete Course</button>
              <button id="edit_course" data-toggle="modal" data-target="#editCourse" class="btn btn-primary" style="float: right;">Edit Course</button>
              <button id="add_course" data-toggle="modal" data-target="#addCourse" class="btn btn-success" style="float: right;">Add Course</button>

      <!-- Modal (add) -->
      <div id="addCourse" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Course</h4>
              </div>

              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="form-group">
                          <label class="control-label col-md-3">ID<span class="required">*</span>
                          </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="courseID" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                  <div class="form-group">
                          <label class="control-label col-md-3">Course Initial <span class="required">*</span>
                          </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="course_initial" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                  <div class="form-group">
                          <label class="control-label col-md-3">Course Name<span class="required">*</span>
                          </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="course_name" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                  <div class="form-group">
                          <label class="control-label col-md-3">Org Initial<span class="required">*</span> </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="org_initial" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                  <div class="form-group">
                          <label class="control-label col-md-3">Org Name<span class="required">*</span></label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="org_name" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                </form>
              </div>

              <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Add</button>
              <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
              </div>
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

              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="form-group">
                          <label class="control-label col-md-3">ID<span class="required">*</span>
                          </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="courseID" disabled="disabled" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                  <div class="form-group">
                          <label class="control-label col-md-3">Course Initial <span class="required">*</span>
                          </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="course_initial" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                  <div class="form-group">
                          <label class="control-label col-md-3">Course Name<span class="required">*</span>
                          </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="course_name" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                  <div class="form-group">
                          <label class="control-label col-md-3">Org Initial <span class="required">*</span></label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="org_initial" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                  <div class="form-group">
                          <label class="control-label col-md-3">Org Name<span class="required">*</span></label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="org_name" required="required" class="form-control col-md-7 col-xs-12">
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
                            <th class="column-title">Course Name </th>
                            <th class="column-title">Organization Initial </th>
                            <th class="column-title">Organization Name </th>
                            <th class="column-title">Logo </th>
                            <th class="bulk-actions" colspan="8">
                              <a class="antoo" style="color:white; font-weight:500;">Courses ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td>
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td>BSA</td>
                            <td>Bachelor of Science in Accountancy</td>
                            <td>JPIA</td>
                            <td>Junior Philippine Institute of Accountants</td>
                            <td></td>
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
          </div>
          <!--/datatable-->
                </div>
              </div>
          <!--end of page content-->
        </div>
      </div>
      
           </div>
    </div>
@endsection