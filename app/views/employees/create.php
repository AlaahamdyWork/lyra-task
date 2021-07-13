<div class="row">
    <div class="col-md-12">
        <h3>Create Employee</h3>
        <div class="col-md-12">
            <form id="createEmployeeForm" method="post" action="<?= URL ?>public/employees/createEmployeeSave" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputEmpName">Name</label>
                    <input type="text" name="name" class="form-control" id="inputEmpName" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="inputEmpAddress">Address</label>
                    <input type="text" name="address" class="form-control" id="inputEmpAddress"
                           placeholder="Address">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
