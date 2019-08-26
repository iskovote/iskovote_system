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
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#importStudent" style="float: right;">Import CSV</button>

    <!-- Modal (add) -->
    <div id="addStudent" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Student</h4>
          </div>

          <form id="addform_student" class="form-horizontal" action="/manage-students" method="POST" >
            {{csrf_field()}}
            <div class="modal-body">
              <div class="form-group">
                <label class="control-label col-md-3">Student Number<span class="required">*</span>
                </label>
                <div class="ccol-md-9 col-sm-9 col-xs-12">
                  <input type="text"  name="student_no" data-inputmask="'mask': '9999-99999-AA-9'" autocomplete="off" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Last Name <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="lastname" autocomplete="off" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">First Name <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="firstname" autocomplete="off"  required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Middle Name </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="middlename" autocomplete="off" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Course <span class="required">*</span></label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                 <select class="form-control" name="course_id">
                  @foreach ($tbl_courses as $course)
                  <option>{{ $course -> course_id }}</option>
                  @endforeach
                </select>
                </div>
              </div>
            <div class="form-group">
              <label class="control-label col-md-3">Year Level <span class="required">*</span></label>
              <div class="col-md-3">
               <select class="form-control" name="year">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
            <label class="control-label col-md-3">Section</label>
            <div class="col-md-3">
             <select class="form-control" name="section">
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3">Email Address <span class="required">*</span> </label>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <input type="text" name="email_add" autocomplete="off" required="required" class="form-control col-md-7 col-xs-12">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3">Password <span class="required">*</span> </label>
          <div class="col-md-5">
            <input type="text" name="student_pw" autocomplete="off" required="required" class="form-control col-md-7 col-xs-12 student_pw">
          </div>
          <div class="col-md-4">
            <button type="button" id="random_pass" class="btn btn-primary" style="float: right">Generate Random</button>
          </div>
        </div>     
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
      </div>
    </form>
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
              <input type="text" id="edit_studno" required="required" class="form-control col-md-7 col-xs-12" disabled="disabled">
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
            <label class="control-label col-md-3">Course<span class="required">*</span></label>
            <div class="col-md-9 col-sm-9 col-xs-12">
             <select class="form-control" id="edit_courses">
              @foreach ($tbl_courses as $course)
                  <option>{{ $course -> course_id }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3">Year Level<span class="required">*</span></label>
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
  <button type="submit" class="btn btn-primary">Save Changes</button>
  <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
</div>
</div>

</div>
</div>
<!--end of modal for edit student-->

<!-- Modal (import) -->
<div id="importStudent" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Import Students</h4>
      </div>

      <div class="modal-body">
        <p><b><h4>1. Read import instructions</h4></b></p>
        <p>To get started, <a href="/help" class="btn btn-default btn-xs">Click Here</a>to read the instructions on how to import voters.</p>
        <p><b><h4>2. Download the import template</h4></b></p>
        <p><a href="" class="btn btn-default btn-xs">Click Here</a> to download the voter import template and add one voter per row. The columns in your spreadsheet must exactly match the import template or the import will fail.</p>
        <p><b><h4>3. Select the import file from your computer</h4></b></p>
        <p>
          <form class="form-horizontal" action="{{ route('import') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="input-row">
              <input type="file" name="file" id="file" accept=".csv">
              <br />
            </div>
            <div id="labelError"></div>
        </p>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-danger">Import</button>
        <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
      </div>
      </form>
    </div>

  </div>
</div>
<!--end of modal for impoort student-->

<br/><br/>

<!--student data table-->
<div class="x_panel">
  <div class="x_content">
   <table id="studenttable" class="table table-striped jambo_table table-bordered bulk_action datatable-checkbox" cellspacing="0" width="100%">
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
      @foreach($tbl_students as $student)
      <tr>
        <td>
          <input type="checkbox" class="flat" name="table_records">
        </td>
        <td> {{ $student -> student_no }} </td>
        <td> {{ $student -> lastname }} </td>
        <td> {{ $student -> firstname }} </td>
        <td> {{ $student -> middlename }} </td>
        <td> {{ $student -> course_id }} </td>
        <td> {{ $student -> year }} </td>
        <td> {{ $student -> section }} </td>
        <td> {{ $student -> email_add }} </td>
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


