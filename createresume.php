<?php
$title ="Create Resumes | Resume Builder";
require './assets/includes/header.php';
require './assets/includes/navbar.php';
// $fn->authPage();


?>

    <div class="container">

        <div class="bg-white rounded shadow p-2 mt-4" style="min-height:80vh">
            <div class="d-flex justify-content-between border-bottom">
                <h5>Create Resume</h5>
                <div>
                <a class="text-decoration-none" onclick='history.back()'><i class="bi bi-arrow-left-circle"></i> Back</a>
                </div>
            </div>

            <div>

                <form action="actions/createresume.action.php" method="post" class="row g-3 p-3">
                <div class="col-md-6">`
                        <label class="form-label">Resume Title</label>
                        <input type="text" name="resume_title" placeholder="Web developer Consultant" class="form-control" required>
                    </div>
                    <h5 class="mt-3 text-secondary"><i class="bi bi-person-badge"></i> Personal Information</h5>
                    <div class="col-md-6">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="full_name"placeholder="Nischal Lama" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" name="email_id"placeholder="nischal@gmail.com" class="form-control"required>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label"> Objectives</label>
                        <textarea class="form-control" name="objectives"></textarea>


                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Mobile No</label>
                        <input type="number" name="mobile_no" min="1111111111" placeholder="9569569569" max="9999999999"
                            class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Date Of Birth</label>
                         <input type="date" id="dob" name="dob" class="form-control" required>
                           <div id="dobError" style="color: red;"></div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Gender</label>
                        <select class="form-select" name="gender">
                            <option>Male</option>
                            <option>Female</option>
                            <option>Transgender</option>




                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Religion</label>
                        <select class="form-select" name="religion">
                            <option>Hindu</option>
                            <option>Muslim</option>
                            <option>Buddhist</option>
                            <option>Christian</option>



                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Nationality</label>
                        <select class="form-select" name="nationality">
                            <option>Nepali</option>
                            <option>Non Nepali</option>


                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Marital Status</label>
                        <select class="form-select" name="marital_status">
                            <option>Married</option>
                            <option>Single</option>
                            <option>Divorced</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Hobbies</label>
                        <input type="text" name="hobbies"placeholder="Reading Books, Watching Movies" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Languages Known</label>
                        <input type="text" name="languages"placeholder="Nepali,English" class="form-control" required>
                    </div>

                    <div class="col-12">
                        <label for="inputAddress" class="form-label"> Address</label>
                        <input type="text" name="address"class="form-control" id="inputAddress" placeholder="1234 Main St" required>
                    </div>
                    <!-- <label>Choose a photo:</label>
                        <input type="file" id="photo" name="photo" required> -->
                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i> Add
                            Resume</button>
                    </div>
                </form>
            </div>





        </div>

    </div>
    <script>
    // Function to validate Date of Birth
    function validateDOB() {
        var dobInput = document.getElementById("dob").value;
        var dob = new Date(dobInput);
        var today = new Date();
        var minDate = new Date();
        minDate.setFullYear(minDate.getFullYear() - 13); // Set minimum age to 13 years

        if (dob > today) {
            document.getElementById("dobError").innerHTML = "Invalid date";
            return false;
        } else if (dob > minDate) {
            document.getElementById("dobError").innerHTML = "You must be at least 13 years old.";
            return false;
        } else {
            document.getElementById("dobError").innerHTML = "";
            return true;
        }
    }

    // Add event listener to the Date of Birth input for validation
    document.getElementById("dob").addEventListener("change", validateDOB);
</script>
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <?php
require './assets/includes/footer.php';
?>
