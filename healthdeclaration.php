<?php include('common/header.php') ?>

  <div class="container-fluid">
    <h1>HEALTH DECLARATION LIST</h1>
    <br>
  </div>

    <button 
        type="button" 
        class="btn btn-primary" 
        data-bs-toggle="modal" 
        data-bs-target="#addModalForm"
        onclick="formClear()">
        Add New Declaration
    </button>

    <!-- Modal for Health Declaration-->
    <div class="modal fade" id="addModalForm" tabindex="-1" aria-labelledby="addModalFormLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalFormLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div>
                            <label for="firstname" class="col-form-label">FirstName</label>
                            <input type="text" class="form-control" id="firstname">
                        </div>
                        <div>
                            <label for="Lastname" class="col-form-label">LastName</label>
                            <input type="text" class="form-control" id="lastname">
                        </div>
                        <div>
                            <label for="address" class="col-form-label">Middle Initial</label>
                            <input type="text" class="form-control" id="mi">
                        </div>
                        <div>
                            <label for="age" class="col-form-label">Age</label>
                            <input type="number" class="form-control" id="age">
                        </div>
                        <div>
                            <label for="gender" class="col-form-label">Address</label>
                            <input type="text" class="form-control" id="address">
                        </div>
                        <div>
                            <label for="gender" class="col-form-label">Gender</label>
                            <input type="text" class="form-control" id="gender">
                        </div>
                        <div>
                            <label for="email" class="col-form-label">Number</label>
                            <input type="mNumber" class="form-control" id="mNumber">
                        </div>
                        <div>
                            <label for="email" class="col-form-label">Temp</label>
                            <input type="text" class="form-control" id="Temp">
                        </div>
                        <div>
                            <label for="myDropdown" class="col-form-label">Diagnosed?</label>
                            <input type="text" class="form-control" id="diagnosed">
                        </div>
                        <div>
                            <label for="encounter" class="col-form-label">Encountered?</label>
                            <input type="text" class="form-control" id="encounter">
                        </div>
                        <div>
                            <label for="vaccinated" class="col-form-label">Vaccinated</label>
                            <input type="text" class="form-control" id="vaccinated">
                        </div>
                        <div>
                            <label for="nationality" class="col-form-label">Nationality</label>
                            <input type="text" class="form-control" id="nationality">
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="btnSave">Save</button>
                </div>
            </div>
        </div>
    </div>

    
    <table class="table table-hover" id="participantsList">
      <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">FirstName</th>
            <th scope="col">LastName</th>
            <th scope="col">M.I</th>
            <th scope="col">Age</th>
            <th scope="col">Address</th>
            <th scope="col">Gender</th>
            <th scope="col">Contact</th>
            <th scope="col">Temperature</th>
            <th scope="col">Diagnosed</th>
            <th scope="col">Encounter</th>
            <th scope="col">Vaccinated</th>
            <th scope="col">Nationality</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>      
    </tbody>

  </table>
  
 

<?php include('common/footer.php') ?> 