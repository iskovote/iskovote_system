@extends('layout.app')
@section('title')
Help
@endsection
@section('content')
<!--page content-->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Help</h3>
              </div>
            </div>

            <br/><br/>

            <!--importing-->
            <h2>How to Import Students</h2>
            <p>IskoVote provides election administrators with the option to import a list of students from a spreadsheet (CSV file).</p>

            <h3>Import Template</h3>
            <p>The quickest and easiest way to get started with the voter import process is to download the voter import template by clicking here: https://electionrunner.com/voters/import/template. This template file is in the CSV (Comma Separated Values) format which can be opened by all popular spreadsheet applications (Excel, Numbers, Google Spreadsheets, etc.). Starting from or using the template file is not required, but IskoVote will only accept valid CSV files with the first row containing the following columns:</p>
            <p>
              <ul>
                <li>student_no</li>
                <li>student_pw</li>
                <li>lastname</li>
                <li>firstname</li>
                <li>middlename</li>
                <li>course_id</li>
                <li>year</li>
                <li>section</li>
                <li>email_add</li>
              </ul>
            </p>
            <p>If the first row does not have the above listed columns in the exact order and spelling, then the import will fail.</p>

          </div>
        </div>
@endsection