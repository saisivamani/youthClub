<?php
// Include the connection file to establish a database connection
include "connect.php";

// Now you can execute the SQL query
$run = mysqli_query($conn, "SELECT * FROM members ORDER BY id");
?>


<!doctype html>
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

    <!-- Send Message Button Styles -->
    <style>
        .send-message-btn {
            background-color: #3498db;
            color: #fff;
            border-radius: 5px;
            padding: 5px 10px;
            font-size: 14px;
            cursor: pointer;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
        }

        .modal-content {
            background-color: #f2f5f8;
            margin: 15% auto;
            padding: 20px;
            border-radius: 10px;
            max-width: 300px;
            box-shadow: 0 0 10px rgba(0, 0, 255, 0.2); /* Light blue shadow */
        }

        .close {
            float: right;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
            color: #aaa;
        }

        .close:hover {
            color: #555;
        }

        /* Style for the buttons in the pop-up */
        .modal-content button {
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            font-size: 14px;
            cursor: pointer;
            margin: 5px;
            transition: background-color 0.3s;
        }

        .modal-content button:hover {
            background-color: #008cba;
        }
    </style>

</head>

<body>
<section class="body">

    <!-- start: header -->
    <?php
    include "navbar.php";
    ?>
    <!-- end: header -->

    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Youth Cultural Association</h2>
        </header>
        <!-- start: page -->
        <br><br><br><br><br>
        <div class="row">
            <div class="col">
                <section class="card">
                    <header class="card-header"
                            style="display:flex;flex-direction:row;gap:100px;justify-content:space-between;">
                        <table>
                            <tr>
                                <td>
                                    <h2 class="card-title mt-2" style="text-transform:uppercase;">Youth Club Members
                                    </h2>
                                </td>
                                <div class="col-lg-6">
                                    <div id="datatable-default_filter" class="dataTables_filter">
                                        <label><input type="search" id="myInput" onkeyup="searchFun()"
                                                      class="form-control pull-right" placeholder="Search by reg id or name..."
                                                      aria-controls="datatable-default"></label>
                                    </div>
                                </div>
                            </tr>
                        </table>
                    </header>
                    <div class="input-group">
                        <div class="card-body">
                            <table id="myTable" class="table table-no-more table-bordered table-striped mb-0">
                                <thead>
                                <tr>
                                    <th class="text-Start ">Reg Id</th>
                                    <th class="text-Start">Name</th>
                                    <th class="text-Start">Parent</th>
                                    <th class="text-Start">Membership Type</th>
                                    <th class="text-Start">Address</th>
                                    <th class="text-Start">Mobile Number</th>
                                    <th class="text-Start">Send Message</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if (mysqli_num_rows($run) > 0) {
                                    while ($row = mysqli_fetch_assoc($run)) {
                                        echo '<tr>
                                            <td data-title="Reg Id" class="text-Start">' . $row['id'] . '</td>
                                            <td data-title="Name" class="text-Start" >' . $row['name'] . '</td>
                                            <td data-title="Son OFF" class="text-Start">' . $row['sonoff'] . '</td>
                                            <td data-title="Membership Type" class="text-Start">' . $row['mship'] . '</td>
                                            <td data-title="Address" class="text-Start ">' . $row['addr1'] . '<br>' . $row['addr2'] . '<br>' . $row['addr3'] . '</td>
                                            <td data-title="Mobile Number" class="text-Start" id = "m">' . $row['mobile'] . '</td>
                                            <td data-title="Send Message" class="text-Start">
                                                <button class="send-message-btn"
                                                        data-member-name="' . $row['name'] . '"
                                                        data-whatsapp-number="' . $row['mobile'] . '">Send Message
                                                </button>
                                            </td>
                                          </tr>';
                                    }
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- Modal -->
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h3>Send Message</h3>
                <p>Choose an option:</p>
                <button id="messageOption">Message</button>
                <button id="templateOption">Template</button>
            </div>
        </div>

        <!-- Template Modal -->
        <div id="templateModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h3>Send Message Template</h3>
                <p>Choose a template:</p>
                <ul style="list-style: none; padding: 0; display: flex; flex-direction: column; align-items: center;">
                    <li><button class="template-btn" data-template="{memberName} గారికి జన్మదిన శుభాకాంక్షలు! ఈ విశేష దినంలో మీ జీవితం అనేక సంతోషాల, ఆనందాల, అభివృద్ధికల్పితంగా ఉంటుంది. మీకు చాలా మంచి ఆరోగ్యం, సంపద మరియు సమృద్ధి కావాలని కోరుకుంటుంటున్నాము. జన్మదిన శుభాకాంక్షలు! 🎉🎂🎈">Happy Birthday <span class="member-name-placeholder"></span></button></li>
                    <li><button class="template-btn" data-template="అభినందనలు {memberName} గారికి! మీ ప్రయత్నాలు మరియు యశస్సు మనం గుర్తించుకోవడానికి ప్రముఖం. మీ సాధనలు మీకు ఇంకా మిక్కిలో ఉంటాయి. మీరు చాలా అధికారం మరియు సమృద్ధి గల కోసం ప్రయత్నించాలనుకుంటున్నారు. మీ యశస్సు మేరుపులోని నెమలి పనులు మీ వారు సత్యపంచాలని ఆశిస్తున్నారు. అభినందనలు! 🎉🎊🎈">Congratulations <span class="member-name-placeholder"></span></button></li>
                    <!-- Add more templates as needed -->
                </ul>
            </div>
        </div>

    </section>
</section>

<script>
    const sendButtons = document.getElementsByClassName('send-message-btn');
    const modal = document.getElementById('myModal');
    const templateModal = document.getElementById('templateModal');
    const messageOption = document.getElementById('messageOption');
    const templateOption = document.getElementById('templateOption');
    const closeBtn = document.getElementsByClassName('close');
    const templateButtons = document.getElementsByClassName('template-btn');

    for (const sendButton of sendButtons) {
        sendButton.addEventListener('click', () => {
            const memberName = sendButton.parentElement.getAttribute('data-member-name');
            const whatsappNumber = sendButton.getAttribute('data-whatsapp-number');
            const m_name =sendButton.getAttribute('data-member-name')
            openModal(memberName, whatsappNumber,m_name);
        });
    }

    function openModal(memberName, whatsappNumber,m_name) {
        modal.style.display = "block";

        messageOption.onclick = () => {
            closeModal();
            openWhatsApp(memberName, whatsappNumber, "Type your custom message here.");
        };

        templateOption.onclick = () => {
            closeModal();
            openTemplateModal(memberName, whatsappNumber,m_name);
        };

        for (let i = 0; i < closeBtn.length; i++) {
            closeBtn[i].onclick = () => {
                closeModal();
            };
        }

        window.onclick = (event) => {
            if (event.target === modal || event.target === templateModal) {
                closeModal();
            }
        };
    }

    function closeModal() {
        modal.style.display = "none";
        templateModal.style.display = "none";
    }

    function openWhatsApp(memberName, whatsappNumber, message) {
        const whatsappUrl = `https://api.whatsapp.com/send?phone=${whatsappNumber}&text=${encodeURIComponent(message)}`;
        window.location.href = whatsappUrl;
    }

    function openTemplateModal(memberName, whatsappNumber,m_name) {
        templateModal.style.display = "block";
        const memberNamePlaceholders = document.getElementsByClassName('member-name-placeholder');
        for (const placeholder of memberNamePlaceholders) {
            placeholder.textContent = memberName;
        }

        for (const templateButton of templateButtons) {
            templateButton.onclick = () => {    
                const templateMessage = templateButton.getAttribute('data-template').replace("{memberName}", m_name);
                openWhatsApp(memberName, whatsappNumber, templateMessage);
                closeModal();
            };
        }
    }

    //Search Function

    const searchFun = () => {
	let filter = document.getElementById('myInput').value.toUpperCase();
          
  	let myTable = document.getElementById('myTable');
  
  	let tr = myTable.getElementsByTagName('tr');

  	for(var i=0;i<tr.length;i++){
      let td = tr[i].getElementsByTagName('td')[1];
      let t1 = tr[i].getElementsByTagName('td')[0];
    //   let t2 = tr[i].getElementsByTagName('td')[2];
    //   let t3 = tr[i].getElementsByTagName('td')[3];
       
    if(td || t1){
    let textvlaue = td.textContent || td.innerHTML;
    let pid = t1.textContent || t1.innerHTML;
    // let mob = t3.textContent || t3.innerHTML;
    // let mid = t2.textContent || t2.innerHTML;
    if(textvlaue.toUpperCase().indexOf(filter)>-1 || pid.toUpperCase().indexOf(filter)>-1){
        tr[i].style.display = "";
    }
    else{
        tr[i].style.display = "none";
    }
        }
    }

        }
</script>

<!-- Vendor -->
<script src="vendor/jquery/jquery.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Theme Base, Components and Settings -->
<script src="js/theme.js"></script>

<script src="js/theme.init.js"></script>
<!-- Send message JS -->
<script src="send_message.js"></script>

</body>
</html>
