
<div class="container">
    <h2 class="text-center my-3" style="color: antiquewhite; text-shadow: 2px 2px 4px black;">Enter Your Details</h2>
    <form method="post" action="<?=$action->helper->url('action/createresume/2')?>" class="form-resume w-auto m-auto my-3">
        <!-- Personal Details -->
        <p class="fs-4"><i class="bi bi-person-square"></i> Personal Details</p>
        <!-- <div class="form-center col-6 mb-3 text-center">
            <label for="photo"><i class="bi bi-image"></i> Photo</label>
            <input type="file" id="photo" name="photo" class="form-control">
        </div> -->
        <div class="row justify-content-between">
            <div class="col-6 mb-3">
                <label for="name" class="col-form-label"><i class="bi bi-person"></i> Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Your Full Name" id="name" required>
            </div>
            <div class="col-6 mb-3">
                <label for="role" class="col-form-label"><i class="bi bi-briefcase"></i> Role</label>
                <input type="text" class="form-control" name="headline" placeholder="Ex: PHP Developer" id="headline" required>
            </div>
        </div>
        <div class="form-group">
            <label for="about" class="fs-4"><i class="bi bi-info-circle"></i> Objective</label>
            <textarea id="about" name="objective" class="form-control" placeholder="Enter objective" required></textarea>
        </div>

        <hr>
        <p class="fs-4"><i class="bi bi-person-lines-fill"></i> Contact Details</p>
        <div class="row justify-content-between ">
        <div class="col-6 mb-3">
            <label for="email" class="col-form-label"><i class="bi bi-envelope"></i> Email</label>
            <input type="email" class="form-control" name="email" placeholder="Example@company.com" id="email" required>
        </div>
        <div class="col-6 mb-3">
            <label for="phone" class="col-form-label"><i class="bi bi-telephone"></i> Phone</label>
            <input type="text" class="form-control" name="mobile" placeholder="Enter Your 10 digit Number" id="phone" required>
        </div>
        </div>
        <div class="mb-3">
            <label for="address" class="col-form-label"><i class="bi bi-house-door"></i> Address</label>
            <input type="text" class="form-control" name="address" placeholder="Enter Address" id="address" required>
        </div>
<hr>
        <!-- <div class="form-group">
            <label for="website" class="col-form-label"><i class="bi bi-globe"></i> Website</label>
            <input type="text" class="form-control" name="website" placeholder="Enter Website URL" id="website">
        </div> -->

        <!-- Skills -->
        <div class="col-6 mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label fs-4"><i class="bi bi-pen"></i> Skills</label>
    <div id="skills">
    </div>
    <div class="input-group mb-3">
  <input type="text" class="form-control" id="userskill" placeholder="Add Your Skills" aria-label="Recipient's username" aria-describedby="button-addon2">
  <button class="btn btn-primary" type="button" id="addskill">Add Skills</button>
</div>
  </div>

  <hr>

        <!-- Social Links -->
        <!-- <div class="form-group">
            <label class="fs-4"><i class="bi bi-share"></i> Social Links</label>
            <div id="social-links">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="social[]" placeholder="Facebook" required>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="social[]" placeholder="Twitter" required>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="social[]" placeholder="Youtube" required>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="social[]" placeholder="LinkedIn" required>
                </div>
            </div>
        </div>
<hr> -->
      
<div class=" mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label fs-4"><i class="bi bi-journal-text"></i> Education</label>
    <div id="educations" class="">
      
    </div>
    <div class="d-flex gap-2">
      <input type="text" class="form-control" id="university" placeholder="University:  Savitribai Phule Pune University, Pune" >
      <input type="text" class="form-control" id="course" placeholder="Degree : Ex - BE Computer Engineering" >
      <input type="text" class="form-control" id="e_duration" placeholder="2021-2025">
      <button class="btn btn-primary" type="button" id="addeducation" >Add</button>
    </div>
  </div>
  <hr>

        <div class="mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label fs-4"><i class="bi bi-briefcase"></i> Experience</label>
    <div id="exps" class="">
      
    </div>
    <div class="d-flex gap-2">
    <input type="text" class="form-control" id="company" placeholder=" company Name ">
      <input type="text" class="form-control" id="jobrole" placeholder="Job Posistion" >
      <input type="text" class="form-control" id="w_duration" placeholder="2021-2025" >
    </div>
    <span class="d-block mt-2 "><i class="bi bi-file-earmark-person"></i> About Work</span>
    <textarea id="work_desc" class="form-control  mb-2"></textarea>
    <button class="btn btn-primary" type="button" id="addexp">Add</button>
  </div>

  <hr>


        <!-- Education -->
       
<!--div class="row justify-content-between">
        
        <div class="col-6 mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label fs-4"><i class="bi bi-music"></i> Hobbies</label>
    <div id="hobbies">
    </div>
    <div class="input-group mb-3">
  <input type="text" class="form-control" id="userhobbies" placeholder="Add Your Skills" aria-label="Recipient's username" aria-describedby="button-addon2">
  <button class="btn btn-primary" type="button" id="addhobby">Add Hobbies</button>
</div>
  </div>
  <div class="col-6 mb-3">
            <label for="photo" class="col-sm-2 col-form-label fs-4"><i class="bi bi-image"></i> Photo</label>
            <input type="file" id="photo" name="photo" class="form-control">
        </div>
        </div-->

        <button type="submit" class="btn btn-warning"><i class="bi bi-box-seam"></i> Create Resume</button>
    </form>
</div>