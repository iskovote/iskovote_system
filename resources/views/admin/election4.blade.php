@extends('layout.app')

@section('title')
Create Election
@endsection
<style type="text/css">
  #createballot{
    border: 0;
    padding: 20px;
    width: 100%;
    border-left: 0px;
    border-right: 0px;
  }
</style>

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

              <!-- start accordion -->
              <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel">
                  <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h4 class="panel-title"><label id="ballot.position">Position 1</label></h4>
                  </a>
                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">

                    <div class="container" style="margin: 35px;">
                      <div id="ballot.candidate">
                        <h4>Candidate 1</h4>
                        <div style="overflow-x:auto;">
                        <table id="createballot">
                          <tr>
                            <td rowspan="4" style="text-align: center;">
                              <div class="upload-btn-wrapper">
                                <br/>
                                <img src ="images/userDefault.png" style="height: 250px; width: 250px" id="pres">
                                <br/>
                                <button class="btn" style="display: none;">Upload Photo</button>
                                <input type="file" accept = "image/*" onchange="presImage.call(this)"/>
                              </div>
                            </td>
                            <td>
                               <label id="student-info-label">Student Number*</label>
                            </td>
                            <td>
                              <input id="candidate_sn" class="form-control col-md-3" required="required" style="width: 450px"/>
                            </td>
                          </tr>
                          <tr>
                            <td><label id="student-info-label" >Candidate Name*</label></td>
                            <td><input id="candidate_sn" class="form-control col-md-3" required="required" style="width: 450px"/></td>
                          </tr>
                          <tr>
                            <td><label id="student-info-label">Partylist*</label></td>
                            <td>
                              <select id="partylist" class="form-control col-md-3" required="required" style="width: 450px">
                              <option>ELITE Party</option>
                              <option>KASAR1NLAN</option>
                            </select>
                          </td>
                          </tr>
                          <tr>
                            <td><label id="student-info-label">Biography</label></td>
                            <td>
                              <textarea id="bio" class="form-control col-md-3" required="required" style="width: 450px"></textarea>
                            </td>
                          </tr>
                        </table>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>




              </div>
              <!-- end of accordion -->

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