@extends('layout.app')
@section('title')
Dashboard
@endsection
@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <!-- top tiles -->
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-user"></i></div>
                  <div class="count green">179</div>
                  <h3>Registered Students</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check-square-o"></i></div>
                  <div class="count green">9</div>
                  <h3>Ongoing Elections</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                  <div class="count green">7</div>
                  <h3>Organizations</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check-square-o"></i></div>
                  <div class="count green">18</div>
                  <h3>Total Elections</h3>
                </div>
              </div>
            </div>
  <!-- /top tiles -->


 <!-- Election List/Available Election -->
  <div class="row">
    <div class="col-md-3">
      <button type="button" class="btn btn-success btn-circle btn-xl" data-toggle="modal" data-target="#jpia"> 456 <br>total of votes</button> <span class="org-name"> JPIA </span>
      <!-- Modal JPIA -->
      <div class="modal" id="jpia">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 align="center">Junior Philippine Institute of Accountants</h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
              <table class="table-responsive-sm jambo_table table-bordered bulk_action">
                <thead>
                  <tr class="dashboardTR">
                    <th class="col-sm-1 th-dashboard" style="text-align: center;">Rank</th>
                    <th class="col-md-12 th-dashboard" style="text-align: center;">President</th>
                    <!-- <th class="col-md-2 th-dashboard" style="text-align: center;">Votes</th> -->
                  </tr>
                </thead>
                <tbody> 
                  <tr>
                    <!-- Rank 1 -->
                    <td class="rank">1</td>
                    <td class = "name col-md-1"><img src="images/duterte.jpg" class="img-db" alt="Cinque Terre">
                      <span class="candidate-name"><b>Olarte,</b> Particia (partylist)</span>

                      <!--Progressbar-->
                      <div class="progress">
                        <div class="progress-bar" style="width:70%"> 800 votes</div>
                      </div>
                      <!-- <td class="vote">285</td>  -->
                    </tr>
                    <tr>
                      <!-- Rank 2 -->
                      <td class="rank">2</td>
                      <td class = "name col-md-1"><img src="images/roxas.jpeg" class="img-db" alt="Cinque Terre">
                       <span class="candidate-name"><b>Tolentino,</b> Giselle (partylist)</span>
                       <!--Progressbar-->
                       <div class="progress">
                        <div class="progress-bar" style="width:50%">500 votes</div>
                      </div>
                    </td>
                    <!-- <td class = "vote">245</td> -->
                  </tr>
                </table>
              </div>
              <!-- Modal Footer -->  
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>          
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
       <button type="button" class="btn btn-danger btn-circle btn-xl" data-toggle="modal" data-target="#cem"> 456 <br>total of votes</button> <span class="org-name">CEM </span>
       <!-- Modal CEM -->
       <div class="modal" id="cem">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 align="center">Chambers of Entrepreneurship Management</h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
              <table class="table-responsive-sm jambo_table table-bordered bulk_action">
                <thead>
                  <tr class="dashboardTR">
                    <th class="col-sm-1 th-dashboard" style="text-align: center;">Rank</th>
                    <th class="col-md-12 th-dashboard" style="text-align: center;">President</th>
                    <!-- <th class="col-md-2 th-dashboard" style="text-align: center;">Votes</th> -->
                  </tr>
                </thead>
                <tbody> 
                  <tr>
                    <!-- Rank 1 -->
                    <td class="rank">1</td>
                    <td class = "name col-md-1"><img src="images/duterte.jpg" class="img-db" alt="Cinque Terre">
                      <span class="candidate-name"><b>Duterte,</b> Rodrigo (partylist)</span>

                      <!--Progressbar-->
                      <div class="progress">
                        <div class="progress-bar" style="width:70%"> 800 votes</div>
                      </div>
                      <!-- <td class="vote">285</td>  -->
                    </tr>
                    <tr>
                      <!-- Rank 2 -->
                      <td class="rank">2</td>
                      <td class = "name col-md-1"><img src="images/roxas.jpeg" class="img-db" alt="Cinque Terre">
                       <span class="candidate-name"><b>Roxas,</b> Mar (partylist)</span>
                       <!--Progressbar-->
                       <div class="progress">
                        <div class="progress-bar" style="width:50%">500 votes</div>
                      </div>
                    </td>
                    <!-- <td class = "vote">245</td> -->
                  </tr>
                </table>
              </div>
              <!-- Modal Footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
       <button type="button" class="btn btn-primary btn-circle btn-xl" data-toggle="modal" data-target="#aft"> 456 <br>total of votes</button> <span class="org-name">AFT</span>
       <!-- Modal CEM -->
       <div class="modal" id="aft">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 align="center">Association of Future Teachers</h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
              <table class="table-responsive-sm jambo_table table-bordered bulk_action">
                <thead>
                  <tr class="dashboardTR">
                    <th class="col-sm-1 th-dashboard" style="text-align: center;">Rank</th>
                    <th class="col-md-12 th-dashboard" style="text-align: center;">President</th>
                    <!-- <th class="col-md-2 th-dashboard" style="text-align: center;">Votes</th> -->
                  </tr>
                </thead>
                <tbody> 
                  <tr>
                    <!-- Rank 1 -->
                    <td class="rank">1</td>
                    <td class = "name col-md-1"><img src="images/duterte.jpg" class="img-db" alt="Cinque Terre">
                      <span class="candidate-name"><b>Duterte,</b> Rodrigo (partylist)</span>

                      <!--Progressbar-->
                      <div class="progress">
                        <div class="progress-bar" style="width:70%"> 800 votes</div>
                      </div>
                      <!-- <td class="vote">285</td>  -->
                    </tr>
                    <tr>
                      <!-- Rank 2 -->
                      <td class="rank">2</td>
                      <td class = "name col-md-1"><img src="images/roxas.jpeg" class="img-db" alt="Cinque Terre">
                       <span class="candidate-name"><b>Roxas,</b> Mar (partylist)</span>
                       <!--Progressbar-->
                       <div class="progress">
                        <div class="progress-bar" style="width:50%">500 votes</div>
                      </div>
                    </td>
                    <!-- <td class = "vote">245</td> -->
                  </tr>
                </table>
              </div>
              <!-- Modal Footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <button type="button" class="btn btn-warning btn-circle btn-xl" data-toggle="modal" data-target="#hmsoc"> 456 <br>total of votes</button> <span class="org-name">HM Society</span>
        <!-- Modal CEM -->
        <div class="modal" id="hmsoc">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 align="center">Hospitality Management Society</h4>
              </div>
              <!-- Modal Body -->
              <div class="modal-body">
                <table class="table-responsive-sm jambo_table table-bordered bulk_action">
                  <thead>
                    <tr class="dashboardTR">
                      <th class="col-sm-1 th-dashboard" style="text-align: center;">Rank</th>
                      <th class="col-md-12 th-dashboard" style="text-align: center;">President</th>
                      <!-- <th class="col-md-2 th-dashboard" style="text-align: center;">Votes</th> -->
                    </tr>
                  </thead>
                  <tbody> 
                    <tr>
                      <!-- Rank 1 -->
                      <td class="rank">1</td>
                      <td class = "name col-md-1"><img src="images/duterte.jpg" class="img-db" alt="Cinque Terre">
                        <span class="candidate-name"><b>Duterte,</b> Rodrigo (partylist)</span>

                        <!--Progressbar-->
                        <div class="progress">
                          <div class="progress-bar" style="width:70%"> 800 votes</div>
                        </div>
                        <!-- <td class="vote">285</td>  -->
                      </tr>
                      <tr>
                        <!-- Rank 2 -->
                        <td class="rank">2</td>
                        <td class = "name col-md-1"><img src="images/roxas.jpeg" class="img-db" alt="Cinque Terre">
                         <span class="candidate-name"><b>Roxas,</b> Mar (partylist)</span>
                         <!--Progressbar-->
                         <div class="progress">
                          <div class="progress-bar" style="width:50%">500 votes</div>
                        </div>
                      </td>
                      <!-- <td class = "vote">245</td> -->
                    </tr>
                  </table>
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
         <button type="button" class="btn btn-circle btn-xl" style="background-color: black" data-toggle="modal" data-target="#aces"> 456 <br>total of votes</button> <span class="org-name">ACES</span>
         <!-- Modal CEM -->
         <div class="modal" id="aces">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 align="center">Alliance of Computer Engineering Students</h4>
              </div>
              <!-- Modal Body -->
              <div class="modal-body">
                <table class="table-responsive-sm jambo_table table-bordered bulk_action">
                  <thead>
                    <tr class="dashboardTR">
                      <th class="col-sm-1 th-dashboard" style="text-align: center;">Rank</th>
                      <th class="col-md-12 th-dashboard" style="text-align: center;">President</th>
                      <!-- <th class="col-md-2 th-dashboard" style="text-align: center;">Votes</th> -->
                    </tr>
                  </thead>
                  <tbody> 
                    <tr>
                      <!-- Rank 1 -->
                      <td class="rank">1</td>
                      <td class = "name col-md-1"><img src="images/duterte.jpg" class="img-db" alt="Cinque Terre">
                        <span class="candidate-name"><b>Duterte,</b> Rodrigo (partylist)</span>

                        <!--Progressbar-->
                        <div class="progress">
                          <div class="progress-bar" style="width:70%"> 800 votes</div>
                        </div>
                        <!-- <td class="vote">285</td>  -->
                      </tr>
                      <tr>
                        <!-- Rank 2 -->
                        <td class="rank">2</td>
                        <td class = "name col-md-1"><img src="images/roxas.jpeg" class="img-db" alt="Cinque Terre">
                         <span class="candidate-name"><b>Roxas,</b> Mar (partylist)</span>
                         <!--Progressbar-->
                         <div class="progress">
                          <div class="progress-bar" style="width:50%">500 votes</div>
                        </div>
                      </td>
                      <!-- <td class = "vote">245</td> -->
                    </tr>
                  </table>
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
         <button type="button" class="btn btn-circle btn-xl" style="background-color: pink" data-toggle="modal" data-target="#domt"> 456 <br>total of votes</button> <span class="org-name">DOMT</span>
         <!-- Modal CEM -->
         <div class="modal" id="domt">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 align="center">Diploma in Office Management Technology</h4>
              </div>
              <!-- Modal Body -->
              <div class="modal-body">
                <table class="table-responsive-sm jambo_table table-bordered bulk_action">
                  <thead>
                    <tr class="dashboardTR">
                      <th class="col-sm-1 th-dashboard" style="text-align: center;">Rank</th>
                      <th class="col-md-12 th-dashboard" style="text-align: center;">President</th>
                      <!-- <th class="col-md-2 th-dashboard" style="text-align: center;">Votes</th> -->
                    </tr>
                  </thead>
                  <tbody> 
                    <tr>
                      <!-- Rank 1 -->
                      <td class="rank">1</td>
                      <td class = "name col-md-1"><img src="images/duterte.jpg" class="img-db" alt="Cinque Terre">
                        <span class="candidate-name"><b>Duterte,</b> Rodrigo (partylist)</span>

                        <!--Progressbar-->
                        <div class="progress">
                          <div class="progress-bar" style="width:70%"> 800 votes</div>
                        </div>
                        <!-- <td class="vote">285</td>  -->
                      </tr>
                      <tr>
                        <!-- Rank 2 -->
                        <td class="rank">2</td>
                        <td class = "name col-md-1"><img src="images/roxas.jpeg" class="img-db" alt="Cinque Terre">
                         <span class="candidate-name"><b>Roxas,</b> Mar (partylist)</span>
                         <!--Progressbar-->
                         <div class="progress">
                          <div class="progress-bar" style="width:50%">500 votes</div>
                        </div>
                      </td>
                      <!-- <td class = "vote">245</td> -->
                    </tr>
                  </table>
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
         <button type="button" class="btn btn-circle btn-xl" style="background-color: #800080" data-toggle="modal" data-target="#isite"> 456 <br>total of votes</button> <span class="org-name">iSITE</span>
         <!-- Modal CEM -->
         <div class="modal" id="isite">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 align="center">Integrated Students in Information Technology</h4>
              </div>
              <!-- Modal Body -->
              <div class="modal-body">
                <table class="table-responsive-sm jambo_table table-bordered bulk_action">
                  <thead>
                    <tr class="dashboardTR">
                      <th class="col-sm-1 th-dashboard" style="text-align: center;">Rank</th>
                      <th class="col-md-12 th-dashboard" style="text-align: center;">President</th>
                      <!-- <th class="col-md-2 th-dashboard" style="text-align: center;">Votes</th> -->
                    </tr>
                  </thead>
                  <tbody> 
                    <tr>
                      <!-- Rank 1 -->
                      <td class="rank">1</td>
                      <td class = "name col-md-1"><img src="images/duterte.jpg" class="img-db" alt="Cinque Terre">
                        <span class="candidate-name"><b>Duterte,</b> Rodrigo (partylist)</span>

                        <!--Progressbar-->
                        <div class="progress">
                          <div class="progress-bar" style="width:70%"> 800 votes</div>
                        </div>
                        <!-- <td class="vote">285</td>  -->
                      </tr>
                      <tr>
                        <!-- Rank 2 -->
                        <td class="rank">2</td>
                        <td class = "name col-md-1"><img src="images/roxas.jpeg" class="img-db" alt="Cinque Terre">
                         <span class="candidate-name"><b>Roxas,</b> Mar (partylist)</span>
                         <!--Progressbar-->
                         <div class="progress">
                          <div class="progress-bar" style="width:50%">500 votes</div>
                        </div>
                      </td>
                      <!-- <td class = "vote">245</td> -->
                    </tr>
                  </table>
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>

 <!-- Table Dashboard -->
 <div class="container">
  <div class="row">
   <div class="container-fluid">
    <div class="col-md-6">
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
            <td class = "name col-md-1"><img src="images/duterte.jpg" class="img-db" alt="Cinque Terre">
              <span class="candidate-name"><b>Duterte,</b> Rodrigo (partylist)</span>

              <!--Progressbar-->
              <div class="progress">
                <div class="progress-bar" style="width:70%"> 800 votes</div>
              </div>
              <!-- <td class="vote">285</td>  -->
            </tr>
            <tr>
              <!-- Rank 2 -->
              <td class="rank">2</td>
              <td class = "name col-md-1"><img src="images/roxas.jpeg" class="img-db" alt="Cinque Terre">
               <span class="candidate-name"><b>Roxas,</b> Mar (partylist)</span>
               <!--Progressbar-->
               <div class="progress">
                <div class="progress-bar" style="width:50%">500 votes</div>
              </div>
            </td>
            <!-- <td class = "vote">245</td> -->
          </tr>
          <!-- Rank 3 -->
          <tr>
            <td class="rank">3</td>
            <td class = "name col-md-1"><img src="images/pnoy.jpg" class="img-db" alt="Cinque Terre">
              <span class="candidate-name"><b>Aquino,</b> Noynoy (partylist) </span>
              <!--Progressbar-->
              <div class="progress">
                <div class="progress-bar" style="width:20%">110 votes</div>
              </div>
              <!-- <td class = "vote">157</td> -->
            </tr>
          </tbody>
        </table>
      </div>


      <!-- Dashboard for Vice President -->
      <div class="container">
        <div class="col-md-6">
          <table class="table-responsive-sm jambo_table table-bordered bulk_action">
            <thead>
              <tr class="dashboardTR">
                <th  class="col-sm-1 th-dashboard" style="text-align: center;">Rank</th>
                <th class="col-md-12 th-dashboard" style="text-align: center;">Vice-President</th>
                <!-- <th class="col-md-2 th-dashboard" style="text-align: center;">Votes</th> -->
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="rank">1</td>
                <td class = "name col-md-1"><img src="images/binay.jpg" class="img-db img-reponsive" alt="Cinque Terre">
                  <span class="candidate-name"><b>Binay,</b> Jejomar (partylist) </span>

                  <!--Progressbar-->
                  <div class="progress"">
                    <div class="progress-bar" style="width:30%">250 votes</div>
                  </div>
                </td>
                <!-- <td class="vote">285</td> -->
              </tr>
              <tr>
                <td class="rank">2</td>
                <td class = "name col-md-1"><img src="images/marcos.jpg" class="img-db" alt="Cinque Terre">
                  <span class="candidate-name"><b>Marcos,</b> Bong (partylist) </span>

                  <!--Progressbar-->
                  <div class="progress" >
                    <div class="progress-bar" style="width:90% ">1520 votes</div>
                  </div>
                </td>
                <!-- <td class = "vote">245</td> -->
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
          <script>


          /*Progressbar */
          function move() {
          var elem = document.getElementById("myBar");
          var width = 5;
          var id = setInterval(frame, 10);
          function frame() {
          if (width >= 100) {
          clearInterval(id);
          } else {
          width++;
          elem.style.width = width + '%';
          }
          }
          }

          //Election List  
          var x, i, j, selElmnt, a, b, c;
          /*look for any elements with the class "custom-select":*/
          x = document.getElementsByClassName("custom-select");
          for (i = 0; i < x.length; i++) {
          selElmnt = x[i].getElementsByTagName("select")[0];
          /*for each element, create a new DIV that will act as the selected item:*/
          a = document.createElement("DIV");
          a.setAttribute("class", "select-selected");
          a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
          x[i].appendChild(a);
          /*for each element, create a new DIV that will contain the option list:*/
          b = document.createElement("DIV");
          b.setAttribute("class", "select-items select-hide");
          for (j = 1; j < selElmnt.length; j++) {
          /*for each option in the original select element,
          create a new DIV that will act as an option item:*/
          c = document.createElement("DIV");
          c.innerHTML = selElmnt.options[j].innerHTML;
          c.addEventListener("click", function(e) {
          /*when an item is clicked, update the original select box,
          and the selected item:*/
          var y, i, k, s, h;
          s = this.parentNode.parentNode.getElementsByTagName("select")[0];
          h = this.parentNode.previousSibling;
          for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
          s.selectedIndex = i;
          h.innerHTML = this.innerHTML;
          y = this.parentNode.getElementsByClassName("same-as-selected");
          for (k = 0; k < y.length; k++) {
          y[k].removeAttribute("class");
          }
          this.setAttribute("class", "same-as-selected");
          break;
          }
          }
          h.click();
          });
          b.appendChild(c);
          }
          x[i].appendChild(b);
          a.addEventListener("click", function(e) {
          /*when the select box is clicked, close any other select boxes,
          and open/close the current select box:*/
          e.stopPropagation();
          closeAllSelect(this);
          this.nextSibling.classList.toggle("select-hide");
          this.classList.toggle("select-arrow-active");
          });
          }
          function closeAllSelect(elmnt) {
          /*a function that will close all select boxes in the document,
          except the current select box:*/
          var x, y, i, arrNo = [];
          x = document.getElementsByClassName("select-items");
          y = document.getElementsByClassName("select-selected");
          for (i = 0; i < y.length; i++) {
          if (elmnt == y[i]) {
          arrNo.push(i)
          } else {
          y[i].classList.remove("select-arrow-active");
          }
          }
          for (i = 0; i < x.length; i++) {
          if (arrNo.indexOf(i)) {
          x[i].classList.add("select-hide");
          }
          }
          }
          /*if the user clicks anywhere outside the select box,
          then close all select boxes:*/
          document.addEventListener("click", closeAllSelect);
          </script>
          @endsection