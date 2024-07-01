</div>

<div class="my-2">
    <footer class="bg-dark text-center text-white footer">
      <div class="container p-4 pb-0">
        
        <section class="mb-4">
          <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/profile.php?id=100076563281094" role="button"><i class="bi bi-facebook"></i></a>
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="bi bi-google"></i></a>
          <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/sevdakrishna?igsh=aDVsYndoaDBzcGpj" role="button"><i class="bi bi-instagram"></i></a>
          <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/krishna-sevda-5a779422a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" role="button"><i class="bi bi-linkedin"></i></a>
          <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/Sevdakrishna" role="button"><i class="bi bi-github"></i></a>
        </section>
      </div>
      

      
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  <span class="copyright-text">© 2024 Copyright: Krishna Sevada</span><br>
  <a class="text-white copyright-link" href="https://sevdakrishna.github.io/Portfolio/">Krishna-Portfolio.com</a>
</div>
      
    </footer>
  </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="<?=$action->helper->loadjs('main.js')?>"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
  /*const Toasts = Swal.fire({
  position: "center-middle",
  icon: "error",
  title: "Incorrect EMail/Password",
  showConfirmButton: true,
  timer: 1000
});*/

const Toast = Swal.mixin({
  toast: true,
  position: "top-end",
  showConfirmButton: false,
  timer: 1500,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.onmouseenter = Swal.stopTimer;
    toast.onmouseleave = Swal.resumeTimer;
  }
});


<?php
$error = $action->session->get('error');
$success = $action->session->get('success');
if($error){
?>
  

Toast.fire({
  icon: "error",
  title: "<?=$error?>"
});
<?php
$action->session->delete('error');
}

if($success){
?>
  
Toast.fire({
  icon: "success",
  title: "<?=$success?>"
});
<?php
$action->session->delete('success');
}
?>

$("#addskill").click(function() {
  var skill = $('#userskill').val();
  if (!skill) {
    Toast.fire({
      icon: "error",
      title: "Enter Skill."
    });
    return;
  }
  $('#skills').append(`<span class='badge text-bg-info p-2 m-1 '>${skill} <input type='hidden' name='skill[]' value='${skill}' /> <span class='text-black removeskill' onclick='removeskill(this)'><i class='bi bi-x'></i></span> </span>`);
  $('#userskill').val("");
});

$("#addhobby").click(function() {
  var hobby = $('#userhobbies').val();
  if (!hobby) {
    Toast.fire({
      icon: "error",
      title: "Enter Hobbies."
    });
    return;
  }
  $('#hobbies').append(`<span class='badge text-bg-info p-2 m-1 '>${hobby} <input type='hidden' name='hobby[]' value='${hobby}' /> <span class='text-black removeskill' onclick='removeskill(this)'><i class='bi bi-x'></i></span> </span>`);
  $('#userhobbies').val("");
});

$("#addeducation").click(function() {
  var university = $('#university').val();
  var course = $('#course').val();
  var e_duration = $('#e_duration').val();
  if (!university) {
    Toast.fire({
      icon: "error",
      title: "Enter University."
    });
    return;
  }
  if (!course) {
    Toast.fire({
      icon: "error",
      title: "Enter Course Detail."
    });
    return;
  }
  if (!e_duration) {
    Toast.fire({
      icon: "error",
      title: "Enter Course Duration."
    });
    return;
  }
  $('#educations').append(`<div class="d-inline-block border rounded p-2 m-2 edu">
  <input type="hidden" name="university[]" value="${university}">
  <input type="hidden" name="course[]" value="${course}">
  <input type="hidden" name="e_duration[]" value="${e_duration}">
        <h4>${university}</h4>
        <p>${course} - (${e_duration})</p>
        <button class="btn btn-sm btn-danger " type="button" onclick="removeeducation(this)">Remove</button>
      </div>`);
  $('#university').val('');
  $('#course').val('');
  $('#e_duration').val('');
});

$("#addexp").click(function() {
  var company = $('#company').val();
  var jobrole = $('#jobrole').val();
  var w_duration = $('#w_duration').val();
  var about = $('#work_desc').val();
  if (!company) {
    Toast.fire({
      icon: "error",
      title: "Enter Company."
    });
    return;
  }
  if (!jobrole) {
    Toast.fire({
      icon: "error",
      title: "Enter Job Position Detail."
    });
    return;
  }
  if (!w_duration) {
    Toast.fire({
      icon: "error",
      title: "Enter Work Duration."
    });
    return;
  }
  
  $('#exps').append(`<div class="d-inline-block border rounded p-2 m-2 edu">
  <input type="hidden" name="company[]" value="${company}">
  <input type="hidden" name="jobrole[]" value="${jobrole}">
  <input type="hidden" name="w_duration[]" value="${w_duration}">
  <textarea class="d-none" name="work_desc[]">
  ${about}
  </textarea>
        <h4>${company}</h4>
        <p>${jobrole} - (${w_duration})</p>
        <p>${about}</p>
        <button class="btn btn-sm btn-danger " type="button" onclick="removeexp(this)">Remove</button>
      </div>`);
  $('#company').val('');
  $('#jobrole').val('');
  $('#w_duration').val('');
  $('#work_desc').val('');
});

function removeskill(button){
  $(button).parent().remove();
}

function removeeducation(button){
  $(button).parent().remove();
}

function removeexp(button){
  $(button).parent().remove();
}

function copyurl(url){
  navigator.clipboard.writeText(url);
  Toast.fire({
      icon: "success",
      title: "Copyed Successfully!  Share Link ."
    });
}



$(document).ready(function(){
            $('#fileInput').on('change', function(){
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        $('#profileImage').attr('src', event.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });
        });





        function enableForm() {
            document.querySelectorAll('.form-control').forEach(function(element) {
                element.disabled = false;
            });
            document.getElementById('editButton').classList.add('d-none');
            document.getElementById('saveButton').classList.remove('d-none');
            document.getElementById('cancelButton').classList.remove('d-none');
        }

        function disableForm() {
            document.querySelectorAll('.form-control').forEach(function(element) {
                element.disabled = true;
            });
            document.getElementById('editButton').classList.remove('d-none');
            document.getElementById('saveButton').classList.add('d-none');
            document.getElementById('cancelButton').classList.add('d-none');
        }

</script>


  
  

</body>

</html>
