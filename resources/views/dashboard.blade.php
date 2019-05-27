@extends('layout.app')
@section('title')
Dashboard
@endsection
@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="row tile_count">
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total Students</span>
      <div class="count green">4</div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total 1st Year Students</span>
      <div class="count green">2</div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total 2nd Year Students</span>
      <div class="count green">0</div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total 3rd Year Students</span>
      <div class="count green">2</div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total 4th Year Students</span>
      <div class="count green">0</div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-check-circle-o"></i> Total Ongoing Elections</span>
      <div class="count green">0</div>
    </div>
  </div>
  <!-- /top tiles -->


  <!-- Election List -->
  <div class="custom-select" style="width:200px;">
    <select>
      <option value="0">Select Election:</option>
      <option value="1">Student Council Election 2019-2020</option>
      <option value="2">ISITE Organization Election 2019-2020</option>
      <option value="3">AFT Organization Election 2019-2020 </option>
    </select>
  </div>


  <!-- Table Dashboard -->
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th class="dashboardTR" class="col-sm-1" style="text-align: center;">Rank</th>
          <th class="col-md-12 " style="text-align: center;">President</th>
          <th class="col-md-2" style="text-align: center;">Votes</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <!-- Rank 1 -->
          <td class="rank">1</td>
          <td class = "name"><img src="images/duterte.jpg" class="img-rounded" alt="Cinque Terre">
            <p id="name"> Rodrigo Duterte</p>
            <!--Progressbar-->
            <div id="myProgress">
              <div id="myBar"></div>
            </div>
            <td class="vote">285</td>
          </tr>
          <tr>
            <!-- Rank 2 -->
            <td class="rank">2</td>
            <td class = "name"><img src="images/roxas.jpeg" class="img-rounded" alt="Cinque Terre">
              <p id="name"> Mar Roxas</p>
              <!--Progressbar-->
              <div id="myProgress">
                <div id="myBar"></div>
              </div>
            </td>
            <td class = "vote">245</td>
          </tr>
          <!-- Rank 3 -->
          <tr>
            <td class="rank">3</td>
            <td class = "name"><img src="images/pnoy.jpg" class="img-rounded" alt="Cinque Terre">
              <p id="name"> Noynoy</p>
              <!--Progressbar-->
              <div id="myProgress">
                <div id="myBar"></div>
              </div>
              <td class = "vote">157</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- Dashboard for Vice President -->
      <div class="container">
        <table class="table">
          <thead>
            <tr>
              <th class="dashboardTR" class="col-sm-1" style="text-align: center;">Rank</th>
              <th class="col-md-12 " style="text-align: center;">Vice-President</th>
              <th class="col-md-2" style="text-align: center;">Votes</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="rank">1</td>
              <td class = "name"><img src="images/binay.jpg" class="img-rounded" alt="Cinque Terre">
                <p id="name"> Jejomar Binay</p>
                <!--Progressbar-->
                <div id="myProgress">
                  <div id="myBar"></div>
                </div>
              </td>
              <td class="vote">285</td>
            </tr>
            <tr>
              <td class="rank">2</td>
              <td class = "name"><img src="images/marcos.jpg" class="img-rounded" alt="Cinque Terre">
                <p id="name"> Bong Marcs</p>
                <!--Progressbar-->
                <div id="myProgress">
                  <div id="myBar"></div>
                </div></td>
                <td class = "vote">245</td>
              </tr>
              
              </tbody>
            </table>
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