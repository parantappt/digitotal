<div class="col py-3 content">
   
  <h2 class="heading" style="letter-spacing: 2px;">PAYMENT HISTORY</h2>

  <div class="row">
  
    <div class="operation4">
    
      <div id="datepicker" class="input-group col-lg-3 date date_manage" data-date-format="dd-mm-yyyy">
              <input class="form-control filter1" type="text" value="Filter by [Date]" />
              <span class="input-group-addon calendar"><i class="glyphicon glyphicon-calendar"></i></span>
          </div>
  
      <div class="filter2 col-lg-3">
          <select name="filter" id="managefilter">
            <option value="">Status</option>
            <option value="approve">Approve</option>
            <option value="Rejected">Rejected</option>
          </select>
      </div>
  
      <div class="input-group search_cust3 col-lg-3">
            <div class="input-group-btn search-panel">
                <button type="button" class="btn btn-default dropdown-toggle searchbtn" data-toggle="dropdown">
                  <span id="search_concept">Search by</span> <i class="fas fa-caret-down caret_style"></i></span>
                </button>
                <ul class="dropdown-menu scrollable-dropdown" role="menu">
                  <li><a href="#">Automotive Accesories</a></li>
                  <li><a href="#">Cell Phone Accesories</a></li>
                  <li><a href="#">Computer Accesories</a></li>
                  <li><a href="#">Health and Personal Care</a></li>
                </ul>
            </div>
            <input type="hidden" name="search_param" value="all"
              id="search_param">
            <input type="text" class="form-control search3" name="x" id="search" placeholder="Search">
            <span class="input-group-btn">
            <button class="btn btn-default search_icon" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
        </div>


      <script>
      $(document).ready(function(e){
            $('.search-panel .dropdown-menu').find('a').click(function(e) {
        e.preventDefault();
        var param = $(this).attr("href").replace("#","");
        var concept = $(this).text();
        $('.search-panel span#search_concept').text(concept);
        $('.input-group #search_param').val(param);
          });
            });
      var a = document.getElementByTagName('a').item(0);
      $(a).on('keyup', function(evt){
      console.log(evt);
      if(evt.keycode === 13){
    
      alert('search?');
      } 
      }); 
      </script>

      <div class=" ship1 col-lg-3">
        <!-- <button class="btn1">SHIP</button>
        <button class="btn1">CANCEL</button> -->
      </div>
   
    </div>

<!-----second main div start ---->

  <div class="second-row col-lg-10">
          <label class="show">Show</label>
          <select name="filter" class="record">
            
            <option value="1">1</option>
            <option value="2">2</option>
          </select>
          <label class="show">Result</label>
          

            <div class=" pagination1 pagination:number active"> 1</div>

          <div class="pagination:number arrow">
            <svg width="18" height="18">
              <use xlink:href="#right" />
            </svg>
          </div>


          <svg class="hide">
            <symbol id="left" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></symbol>
            <symbol id="right" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></symbol>
          </svg>
      </div>


  <!------------------code for table ----------------------- -->
        <table id="t01" class="table2 table-style  manage-table col-lg-10">
          <tr class="row1">
            <th class=" table-style table-heading">ORDER ID</th>
            <th class=" table-style table-heading">TRANSACTION ID</th>
            <th class=" table-style table-heading">SHIPPING CHARGES</th>
            <th class=" table-style table-heading">DATE</th>
            <th class=" table-style table-heading">PAYMENT TYPE</th>
          </tr>
           %HTML%
        </table>
 <div>

<script>
  $(function () {
      $("#datepicker").datepicker({ 
            autoclose: true, 
            todayHighlight: true
      })
  });
</script>
</div>