@extends('layout.app')

@section('title')
Manage Students
@endsection

@section('content')
	<!--page content-->
  	<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Manage Students</h3>
              </div>
            </div>

              <br/><br/>

              <button class="btn btn-danger" data-toggle="modal" data-target="#deleteStudent" style="float: right;">Delete Student</button>
            <button class="btn btn-primary" data-toggle="modal" data-target="#editStudent"  style="float: right;">Edit Student Info</button>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addStudent" style="float: right;">Add New Student</button>

    <!-- Modal (add) -->
      <div id="addStudent" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Student</h4>
              </div>

              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="form-group">
                          <label class="control-label col-md-3">Student Number<span class="required">*</span>
                          </label>
                          <div class="ccol-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="student_number" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                  <div class="form-group">
                          <label class="control-label col-md-3">Last Name <span class="required">*</span>
                          </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="last_name" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                  <div class="form-group">
                          <label class="control-label col-md-3">First Name <span class="required">*</span>
                          </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="first_name" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                  <div class="form-group">
                          <label class="control-label col-md-3">Middle Name </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="middle_name" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Course</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                             <select class="form-control" id="select_courses">
                                <option></option>
                                <option>BSA</option>
                                <option>BSCpE</option>
                                <option>BSED-MT</option>
                                <option>BSIT</option>
                              </select>
                              </div>
                            </div>
              <div class="form-group">
                            <label class="control-label col-md-3">Year Level</label>
                            <div class="col-md-3">
                             <select class="form-control" id="select_year">
                                <option></option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                              </select>
                              </div>
                              <label class="control-label col-md-3">Section</label>
                            <div class="col-md-3">
                             <select class="form-control" id="select_sec">
                                <option></option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                              </select>
                              </div>
                            </div>
                            <div class="form-group">
                          <label class="control-label col-md-3">Email Address <span class="required">*</span> </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="emailadd" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Password <span class="required">*</span> </label>
                          <div class="col-md-5">
                            <input type="text" id="input_password" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                            <div class="col-md-4">
                              <button type="button" id="random_pass" class="btn btn-primary" style="float: right">Generate Random</button>
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
      <!--end of modal for add student-->

      <!-- Modal (edit) -->
      <div id="editStudent" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Student</h4>
              </div>

              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="form-group">
                          <label class="control-label col-md-3">Student Number<span class="required">*</span>
                          </label>
                          <div class="ccol-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="student_number" required="required" class="form-control col-md-7 col-xs-12" disabled="disabled">
                          </div>
                        </div>
                  <div class="form-group">
                          <label class="control-label col-md-3">Last Name <span class="required">*</span>
                          </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="edit_lname" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                  <div class="form-group">
                          <label class="control-label col-md-3">First Name <span class="required">*</span>
                          </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="edit_fname" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                  <div class="form-group">
                          <label class="control-label col-md-3">Middle Name </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="edit_mname" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Course</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                             <select class="form-control" id="edit_courses">
                                <option></option>
                                <option>BSA</option>
                                <option>BSCpE</option>
                                <option>BSED-MT</option>
                                <option>BSIT</option>
                              </select>
                              </div>
                            </div>
              <div class="form-group">
                            <label class="control-label col-md-3">Year Level</label>
                            <div class="col-md-3">
                             <select class="form-control" id="edit_year">
                                <option></option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                              </select>
                              </div>
                              <label class="control-label col-md-3">Section</label>
                            <div class="col-md-3">
                             <select class="form-control" id="edit_sec">
                                <option></option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                              </select>
                              </div>
                            </div>
                            <div class="form-group">
                          <label class="control-label col-md-3">Email Address <span class="required">*</span> </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="edit_emailadd" required="required" class="form-control col-md-7 col-xs-12">
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

      <!-- Modal (delete) -->
      <div id="deleteStudent" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Delete Student?</h4>
              </div>

              <div class="modal-body">
                <p> Are you sure you want to delete this Student Record? </p>
              </div>

              <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
              <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
              </div>
          </div>

        </div>
      </div>
      <!--end of modal for delete student-->

              <br/><br/>

              <!--student data table-->
                 <div class="x_panel">
                  <div class="x_content">
                       <table id="" class="table table-striped jambo_table table-bordered bulk_action datatable-checkbox" cellspacing="0" width="100%">
                        <thead>
                          <tr class="headings">
                            <th class="dark">
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Student Number</th>
                            <th class="column-title">Last Name </th>
                            <th class="column-title">First Name </th>
                            <th class="column-title">Middle Name </th>
                            <th class="column-title">Course </th>
                            <th class="column-title">Year </th>
                            <th class="column-title">Section</th>
                            <th class="column-title">Email Address</th>
                            <th class="bulk-actions" colspan="8">
                              <a class="antoo" style="color:white; font-weight:500;">Students ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td>
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td>2014-00084-SM-0</td>
                            <td>Mapili </td>
                            <td>Angel Grace</td>
                            <td>Gapasen</td>
                            <td>BSIT</td>
                            <td>3</td>
                            <td>1</td>
                            <td>agmapili@gmail.com</td>
                          </tr>
                             <tr>
                            <td>
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td>2018-00123-SM-0</td>
                            <td>Dela Cruz </td>
                            <td>Juan</td>
                            <td>Santos</td>
                            <td>BSA</td>
                            <td>1</td>
                            <td>1</td>
                            <td>juandelacruz@gmail.com</td>
                          </tr>

                          <tr>
                            <td>
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td>2016-00157-SM-1</td>
                            <td>Manuel </td>
                            <td>Anna Kathleen</td>
                            <td>Guillermo</td>
                            <td>BSIT</td>
                            <td>3</td>
                            <td>1</td>
                            <td>kathleenmanuel05@gmail.com</td>
                          </tr>
                         
                         <tr>
                            <td>
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td>2018-0001-SM-0</td>
                            <td>Delos Reyes</td>
                            <td>Maria</td>
                            <td>Cruz</td>
                            <td>BSED-MT</td>
                            <td>1</td>
                            <td>1</td>
                            <td>juandelacruz@gmail.com</td>
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
          </div>
          <!--/datatable-->
        </div>
      </div>
        <!--/page content-->


@endsection