<div class="card my-5">
    <center>
        <div class="card-body" style="width:400px;  text-center ;">
            <!-- <p>
                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Your Details
                </a>
            </p> -->
            <div class="" id="collapseExample">
                <div class="card card-body">
                    <?php
                    session_start();
                    ?>
                    <div>
                        Name: <b><?= $_SESSION['name'] ?></b>
                    </div>
                    <div>
                        DOB: <b><?= $_SESSION['dob'] ?></b>
                    </div>
                    <div>
                        Admission Number: <b><?= $_SESSION['number'] ?></b>
                    </div>
                </div>
            </div>
            <br>
            <a class="btn btn-success " href="process/generateUser.php?gererate">Generate Pair</a>
        </div>

    </center>
</div>