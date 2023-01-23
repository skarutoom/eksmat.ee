<HTML>
<HEAD>
    <meta charset="utf-8">
    <TITLE>Eksmat.ee</TITLE>
    <style>
        body { font-family:"comic sans ms"; color:black; font-size:15px;   border: 1px solid darkcyan; margin-top: 2px; margin-bottom: 2px; margin-right: 5px; margin-left: 5px; background-color: lavenderblush; }
    </style>
    <script type="text/javascript">
        var clicks = 0;
        var pic = "TalTech.png";
        function togglePicture() {
            if (pic === "TalTech.png") {
                pic = "sickbutt.png";
            } else {
                pic = "TalTech.png";
            }
            document.getElementById('bigpic').src = pic.replace('90x90', '225x225');
        }

        function onClick() {
            clicks += 1;
            document.getElementById("clicks").innerHTML = clicks;
        };

    </script>

</HEAD>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XRC5NHHM5H"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-XRC5NHHM5H');
</script>
<BODY BGCOLOR="#C0C0C0" background="flooringbrightwarm.jpg" vlink=darkcyan>

<P align=center>

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
        <br>
        <br>
        <button onclick="togglePicture(), onClick()">Eksmatikuleeru</button>
        <br>
        <p>Sa oled eksmatikuleerunud <a id="clicks"><script>document.getElementById("clicks").innerHTML = clicks</script></a> korda</p>
        <br>
        <img id="bigpic" src="TalTech.png" alt="" />
        <br>
        <br>
    </tr>
</table>
</BODY>
</HTML>