<form class="needs-validation" novalidate>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">First Name</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="First Name" value="Mihail" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustom02">Second Name</label>
            <input type="text" class="form-control" id="validationCustom02" placeholder="Second Name" value="Kuvshinov" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustom03">Last Name</label>
            <input type="text" class="form-control" id="validationCustom03" placeholder="Last Name" value="Petrovich" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="validationCustom04">Email</label>
            <input type="text" class="form-control" id="validationCustom04" placeholder="" value="" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="validationCustom05">Login</label>
            <input type="text" class="form-control" id="validationCustom05" placeholder="" value="" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <form>
                <label for="validationCustom06">Password</label>
                <input type="password" class="form-control" id="password" placeholder=""  required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </form>
        </div>
        <div class="col-md-6 mb-3">
            <form>
                <label for="validationCustom07">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" placeholder=""  required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </form>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="validationCustom08">Import avatar</label>
            <input type="file" class=" input_img form-control" id="validationCustom08" placeholder="" value="" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group">
        <form>
        <input id='email' class="form-control" pattern="[^ @]*@[^ .]*.[a-z]*" placeholder="Enter your email">
        </form>
    </div>
    <button class="btn btn-primary lol" type='submit' id='validate'>Registration</button>
    <p id='result'></p>
</form>