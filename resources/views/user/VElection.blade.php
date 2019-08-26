  @extends('layout.app2')
  @section('title')
  Home
  @endsection
  <link rel="stylesheet" type="text/css" href="{{asset("/css/ViewElectionUser.css")}}">
  @section('content')
  <div class="right_col" role="main">

  <div class="row">
   <div class="container-fluid">
    <div class="col-md-6">
  <b> <div style="color: gray;  font-size: 30px;">ISite</div></b>
      <table class="table-responsive-sm jambo_table table-bordered bulk_action">
        <thead>
          <tr class="dashboardTR">
            <th  class="col-sm-1 th-dashboard" style="text-align: center;">Rank</th>
            <th class="col-md-12 th-dashboard" style="text-align: center;">President</th>
            <!-- <th class="col-md-2 th-dashboard" style="text-align: center;">Votes</th> -->
          </tr>
        </thead>
        <tbody> 
          <tr>
            <!-- Rank 1 -->
            <td class="rank">1</td>
            <td class = "name col-md-1"><img src="images/president.jpg" style="width: 20%;" class="" alt="Cinque Terre">
              <span class="candidate-name"><b>Marquez,</b> Bianca Neris(Elite)</span> 
              <!-- <td class="vote">285</td>  -->
            </tr>
            <tr>
            </td>
          </tr>
            </tr>
             <thead>
              <!--Isite Vice President -->
          <tr class="dashboardTR">
            <th  class="col-sm-1 th-dashboard" style="text-align: center;">Rank</th>
            <th class="col-md-12 th-dashboard" style="text-align: center;">Vice-President</th>
            <!-- <th class="col-md-2 th-dashboard" style="text-align: center;">Votes</th> -->
          </tr>
        </thead>
        <tbody> 
          <tr>
            <!-- Rank 1 -->
            <td class="rank">1</td>
            <td class = "name col-md-1"><img src="images/president.jpg" style="width: 20%;" class="" alt="Cinque Terre">
              <span class="candidate-name"><b>Marquez,</b> Bianca Neris(Elite)</span> 
              <!-- <td class="vote">285</td>  -->
            </tr>
            <tr>
            </td>
          </tr>
            </tr>
          </tbody>
        </table>
      </div>


      <!-- Dashboard for Student Council -->
      <div class="container">
        <div class="col-md-6">
        <b><div style="color: gray;  font-size: 30px;">Student Council</div></b>
          <table class="table-responsive-sm jambo_table table-bordered bulk_action">
            <thead>
              <tr class="dashboardTR">
                <th  class="col-sm-1 th-dashboard" style="text-align: center;">Rank</th>
                <th class="col-md-12 th-dashboard" style="text-align: center;">President</th>
                <!-- <th class="col-md-2 th-dashboard" style="text-align: center;">Votes</th> -->
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="rank">1</td>
                <td class = "name col-md-1"><img src="images/binay.jpg" class="img-db img-reponsive" alt="Cinque Terre">
                  <span class="candidate-name"><b>Binay,</b> Jejomar (partylist) </span>
                </td>
              </tr>  
                </td>
              </tr>
              <!--Vice President -->
              <thead>
              <tr class="dashboardTR">
                <th  class="col-sm-1 th-dashboard" style="text-align: center;">Rank</th>
                <th class="col-md-12 th-dashboard" style="text-align: center;">Vice President</th>
                <!-- <th class="col-md-2 th-dashboard" style="text-align: center;">Votes</th> -->
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="rank">1</td>
                <td class = "name col-md-1"><img src="images/binay.jpg" class="img-db img-reponsive" alt="Cinque Terre">
                  <span class="candidate-name"><b>Binay,</b> Jejomar (partylist) </span>
                </td>
              </tr>  
                </td>
              </tr>




            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  














  
</div>


  @endsection

