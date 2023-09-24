<?php include('common/header.php') ?>
<br>
    <div class="container-fluid">
        <h3 class="h3">ADMIN DASHBOARD</h3><br/>
    </div>
<div class="row mb-4 container-fluid">
          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-success">
              <div class="card-block bg-success">
                <div class="rotate">
                  <i class="fa fa-user fa-4x"></i>
                </div>
                <h6 class="text-uppercase">Covid-19 Encounter</h6>
                <span class="counter-value" id="totalFemale"></span>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-danger">
              <div class="card-block bg-info">
                <div class="rotate">
                  <i class="fa fa-list fa-4x"></i>
                </div>
                <h6 class="text-uppercase">Vaccinated</h6>
                <span class="counter-value" id="totalMale"></span>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4x">
            <div class="card card-inverse card-info">
              <div class="card-block bg-danger">
                <div class="rotate">
                  <i class="fa fa-list fa-4x"></i>
                </div>
                <h6 class="text-uppercase">Fever</h6>
                <span class="counter-value" id="finishedRemarks"></span>
              </div>
            </div>
          </div>
     </div>
<div class="row mb-3 container-fluid">
          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-success">
              <div class="card-block bg-success">
                <div class="rotate">
                  <i class="fa fa-user fa-4x"></i>
                </div>
                <h6 class="text-uppercase">Minor</h6>
                <span class="counter-value" id="minor"></span>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-danger">
              <div class="card-block bg-info">
                <div class="rotate">
                  <i class="fa fa-list fa-4x"></i>
                </div>
                <h6 class="text-uppercase">Adult</h6>
                <span class="counter-value" id="adult"></span>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4x">
            <div class="card card-inverse card-info">
              <div class="card-block bg-warning">
                <div class="rotate">
                  <i class="fa fa-list fa-4x"></i>
                </div>
                <h6 class="text-uppercase">Foriegner</h6>
                <span class="counter-value" id="foriegner"></span>
              </div>
            </div>
          </div>
 
</div>
  


<div class="b-example-divider"></div>


<?php include('common/footer.php') ?>



