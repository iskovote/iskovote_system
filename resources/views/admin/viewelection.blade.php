@extends('layout.app')

@section('title')
Election Archive
@endsection

@section('content')
 <!--page content-->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Election Archive</h3>
              </div>
            </div>

            <br/><br/>

            <form class="form-horizontal form-label-left" style="text-align: right; size: 20px">
            <div>
              <select>
                <option>2018-2019</option>
                <option>2019-2020</option>
              </select>
            </div>
            </form>

            <!--Card-->
            <div class="x_panel">
              <div class="card" style="width: 100%;">
            <div class="card-body">
              <h3 class="card-title x_title">Student Council Election <small>2018-2019</small></h3>
              <p class="card-text">Start: March 20, 2018 12:00:00 | End: March 22, 2018 12:00:00</p>
              <button id="view" class="btn btn-success" style="float: right">View Results</button>
              <button id="res"class="btn btn-info" style="float: right">View Voters' Status</button>
            </div>
              </div>
            </div>

          </div>
        </div>

@endsection