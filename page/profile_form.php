<?php


// Get the logged-in user's ID (you might need to adjust this depending on how you store session data)
$user_id = $_SESSION['Auth']['data']['id'];

// Fetch user data from the database
$user_data = $action->db->read('users', '*', "WHERE id = $user_id");
$user = $user_data[0]; // Assuming the user is found

?>

    <div class="mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="dash">
                    <hr>
                    <div class="card-header text-center">
                        <h3>User Profile</h3>
                    </div>
                    <hr>
                    <div class="card-body">
                        <form id="profileForm" action="http://localhost/CV/action/profile" method="POST" enctype="multipart/form-data">
                            <div class="row justify-content-center">
                                <div class="form-group col-6 mb-3">
                                    <label for="firstName">First Name</label>
                                    <input type="text" class="form-control" id="firstName" name="first_name" value="<?=htmlspecialchars($user['first_name'])?>" placeholder="Enter first name" disabled>
                                </div>
                                <div class="form-group col-6 mb-3">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" name="last_name" value="<?=htmlspecialchars($user['last_name'])?>" placeholder="Enter last name" disabled>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="form-group col-6 mb-3">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?=htmlspecialchars($user['email_id'])?>" placeholder="Enter email" disabled>
                                </div>
                                <div class="form-group col-6 mb-3">
                                    <label for="mobile">Phone Number</label>
                                    <input type="text" class="form-control" id="mobile" name="mobile" value="<?=htmlspecialchars($user['mobile'])?>" placeholder="Enter phone number" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" value="<?=htmlspecialchars($user['address'])?>" placeholder="Enter address" disabled>
                            </div><br>
                            <div id="buttons">
                                <button type="button" id="editButton" class="btn btn-primary" onclick="enableForm()">Edit Profile</button>
                                <button type="submit" id="saveButton" class="btn btn-primary d-none">Save Changes</button>
                                <button type="button" id="cancelButton" class="btn btn-secondary d-none" onclick="disableForm()">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

