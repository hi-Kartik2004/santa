<div class=" mt-5 py-5 card d-flex" style=" text-align :center; width:450px; padding:20px; background-color:whitesmoke;
border-color:white ">
    <h2><u>Login To your Secret Santa Account</u>
    </h2>
    <br>
    <form method="post" action="process/formData.php?loginRequest">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Last 5 digit of KCET Number</label>
            <input type="text" class="form-control" id="uucms" name="uucms" aria-describedby="emailHelp" required>
            <div id="emailHelp" class="form-text">We'll never share your Number with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">DOB (Follow DD/MM/YYYY)</label>
            <input type="text" class="form-control" id="dob" name="dob" required>
        </div>
        <div class="d-flex;">
            <div class="mb-3 form-check" style="display:flex; align-items:center; justify-content:center; gap:15px;">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1">I'm from UVCE</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" style="width:100%;">Submit</button>
    </form>
</div>