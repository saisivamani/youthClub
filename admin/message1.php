<!DOCTYPE html>
<html class="fixed sidebar-light">
<head>
    <!-- Basic -->
    <meta charset="UTF-8">
    <title>Youth Club Admin</title>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendor/boxicons/css/boxicons.min.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="css/skins/default.css" />

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.js"></script>
</head> 

<body>
    <section class="body">
        <!-- start: header -->
        <?php include "navbar.php"; ?>
        <!-- end: header -->

        <section role="main" class="content-body">
            <header class="page-header">
                <h2>Youth Cultural Association</h2>
            </header>
        </section>

        <!-- Message Section start -->
        <section role="main" class="content-body card-margin">
            <!-- start: page -->
            <div class="row">
                <div class="col-lg-14">
                    <form method="POST" action="">
                        <section class="card">
                            <header class="card-header">
                                <h2 class="card-title">Message</h2>
                                <p class="card-subtitle">Send Regular Updates To The Youth Cultural Association Members.</p>
                            </header>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <textarea class="form-control" name="message" rows="8" placeholder="Type your message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <footer class="card-footer" style="display: flex; justify-content: space-between;">
                               <label>
                                  <input type="checkbox" name="team-checkbox" value="team">
                                     Team
                                </label>
                                <label>
                                  <input type="checkbox" name="body-checkbox" value="body">
                                    Body
                                </label>
                                <label>
                                 <input type="checkbox" name="members-checkbox" value="members">
                                    Members
                                </label>
                            </footer>

                            <footer class="card-footer" style="display: flex; justify-content: space-between;">
                                <div class="file-upload-container">
                                    <label for="file-upload" class="file-upload-label">
                                        <span class="upload-icon"><i class="fas fa-cloud-upload-alt"></i></span>
                                        <span class="upload-text">Upload File</span>
                                    </label>
                                    <input type="file" id="file-upload" class="file-upload" multiple style="display: none;">
                                </div>
                                <button type="button" class="btn btn-primary" style="margin-left: auto; background-color: green;" id="sendButton">Send</button>
                            </footer>
                        </section>
                    </form>
                </div>
            </div>
            <!-- end: page -->

            <div class="contact-form-success alert alert-success d-none mt-4" id="successAlert">
                <strong>Success!</strong> Your message has been sent.
            </div>

            <div class="contact-form-error alert alert-danger d-none mt-4" id="errorAlert">
                <strong>Error!</strong> There was an error sending your message.
                <span class="mail-error-message text-1 d-block"></span>
            </div>
        </section> 
        <!-- Message Section end -->
    </section>

    <!-- Vendor -->
    <script src="vendor/jquery/jquery.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script> 
    <script src="js/theme.init.js"></script>

    <script>
    $(document).ready(function() {
        $('#sendButton').click(function() {
            var selectedSections = [];
            var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
            for (var i = 0; i < checkboxes.length; i++) {
                selectedSections.push(checkboxes[i].value);
            }

            var filteredNumbers = [];

            if (selectedSections.includes('team')) {
                filteredNumbers.push('9640336946', '9052727402');
            }

            if (selectedSections.includes('body')) {
                filteredNumbers.push('6300278963', '9666525443', '9346998660', '9966396596');
            }

            if (selectedSections.includes('members')) {
                // Retrieve member numbers from the database or any other source
                // Replace the placeholders with the actual logic to fetch member numbers
                var memberNumbers = ['9052727402', '9640336946'];
                filteredNumbers.push(memberNumbers);
            }

            // Now you have the filtered mobile numbers in the filteredNumbers array.
            // You can use them to send messages or perform any other desired action.
            sendMessages(filteredNumbers);
        });

        function sendMessages(numbers) {
            // Implement your logic to send messages to the provided numbers
            // You can use a third-party SMS API or any other method you prefer

            // Simulating success and error scenarios for demonstration purposes
            var success = true; // Set to true for success, false for error

            if (success) {
                $('#successAlert').removeClass('d-none');
                $('#errorAlert').addClass('d-none');
            } else {
                $('#successAlert').addClass('d-none');
                $('#errorAlert').removeClass('d-none');
                $('.mail-error-message').text('An error occurred while sending the message.');
            }
        }
    });
    </script>
</body>
</html>
