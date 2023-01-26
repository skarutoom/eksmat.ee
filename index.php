<html>
<head>
    <meta charset="utf-8">
    <TITLE>Eksmat.ee</TITLE>
    <style>
        body { font-family:"comic sans ms"; color:black; font-size:15px;   border: 1px solid darkcyan; margin-top: 2px; margin-bottom: 2px; margin-right: 5px; margin-left: 5px; background-color: lavenderblush; }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Change picture on button click -->
    <script type="text/javascript">
        var pic = "TalTech.png";
        function togglePicture() {
            if (pic === "TalTech.png") {
                pic = "sickbutt.png";
            } else {
                pic = "TalTech.png";
            }
            document.getElementById('bigpic').src = pic.replace('90x90', '225x225');
        }
    </script>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XRC5NHHM5H"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-XRC5NHHM5H');
</script>
<body BGCOLOR="#C0C0C0" background="flooringbrightwarm.jpg" vlink=darkcyan>
    <div align=center>
        <FONT size=1 color=black> w w w . e k s m a t . e e </FONT> <BR>
        <IMG src="welcome2.gif"><BR>
        <FONT SIZE=6 face="comic sans ms" COLOR=darkcyan><B>E k s m a t i k u l e e r i m i n e</B></FONT><BR>
        <br>
        <br>
        <br>
        <table>
            <tr>
                <h3>Üliõpilane eksmatrikuleeritakse õpingute jooksul järgmistel juhtudel:</h3>
                <p>semestri õpingukava/deklaratsioon on tähtajaks esitamata</p>
                <p>omal soovil (avaldus esitada ÕIS-is)</p>
                <p>esimesel semestril on sooritusi vähem kui 15 EAP-d</p>
                <p>õppeaasta lõpuks on osakoormuse nõue täitmata</p>
                <p>ebaväärika käitumise tõttu</p>
                <p>õppeteenustasu maksmata jätmise tõttu</p>
                <br>
                <button id="button" onclick="togglePicture(), incrementCount()">Eksmatikuleeru</button>
                <br>
                <p>Eksmatikuleerunud on <span id="count"><?php
            require_once '/var/www/vhosts/eksmat.ee/httpdocs/db_credentials.php';

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT count FROM count";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $count = $row["count"];
                    echo $count;
                }
            } else {
                echo "0 results";
            }
            $conn->close();
        ?></span> tudengit</p>
                <br>
                <img id="bigpic" src="TalTech.png" alt="" />
                <br>
                <br>
            </tr>
        </table>
        </div>
    <script>
        let userClicked = false;
        let count = <?php echo $count ?>;
        function incrementCount() {
            if(!userClicked){
                userClicked = true;
                count++;
                document.getElementById("count").innerHTML = count;
                $.ajax({
                    type: "POST",
                    url: "index.php",
                    data: {count: count, update: true},
                    success: function(data) {
                        console.log("Count Updated");
                    }
                });
            }else{
                console.log("You already clicked the button");
            }
        }
    </script>
    <?php
        if (isset($_POST['update'])) {
            require_once '/var/www/vhosts/eksmat.ee/httpdocs/db_credentials.php';
            $count = $_POST['count'];
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "UPDATE count SET count = $count";
            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }
            $conn->close();
        }
    ?>
</body>
</html>