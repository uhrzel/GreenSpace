<?php
include 'db.php';
session_start(); // Start session

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['user_email'])) {
    echo "<script>window.location.href='../index';</script>";
    exit();
}

$myemail = $_SESSION['user_email']; // Assign the value of $_SESSION['user_email'] to $myemail

// Query the database to retrieve the full name of the logged-in team leader
$query = "SELECT user_img, user_name, user_email, status,  user_ID, password FROM user WHERE user_email = '$myemail' or user_name = '$myemail'";
$result = mysqli_query($con, $query);



if ($result) {

    // Fetch the row from the result
    $row = mysqli_fetch_assoc($result);
    $status = $row['status'];
        if ($status == 'Suspended') {
            echo "<script>alert('Your account is suspended temporarily. Please contact us for assistance.');</script>";
            echo "<script>window.location.href = 'logout.php';</script>";
            exit; // Optional: Exit to prevent further execution
        }
    $user_img = $row['user_img'];
    $user_name = $row['user_name'];
    $user_email = $row['user_email'];
    $user_ID = $row['user_ID'];
    $password = $row['password'];
} else {
    echo "Error: " . mysqli_error($con);
}

// Close the database connection
mysqli_close($con);
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GreenSpace</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js"></script>



<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/SplitText3.min.js"></script>
    <!-- CSS here -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.css">
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="../assets/css/gijgo.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/animated-headline.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/style.css">

        <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
             * { font-family: 'Poppins' }

              body { font-family: 'Poppins' }
               html { font-family: 'Poppins' }

               input { font-weight:normal; }

               svg {
  position: fixed;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  display: block;
  height: 100vh;
  width:auto;
}

    </style>
</head>

<body>



<svg id="confetti" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;background:rgba(0, 0, NaN, 0);display:block" width="1240" height="680" viewBox="0 0 1240 680">
  <g transform="translate(620,340) scale(1,1) translate(-620,-340)">
    <style type="text/css">
      @keyframes ld-fall {
        0% {
          transform: translate(0, 0px) rotate3d(1, 1, 1, 0deg);
        }

        16.6% {
          transform: translate(0, 115.33333333333333px) rotate3d(1, 1, 1, 180deg);
        }

        33.3% {
          transform: translate(0, 230.66666666666666px) rotate3d(1, 1, 1, 360deg);
        }

        50.0% {
          transform: translate(0, 346px) rotate3d(1, 1, 1, 540deg);
        }

        66.6% {
          transform: translate(0, 461.3333333333333px) rotate3d(1, 1, 1, 720deg);
        }

        83.3% {
          transform: translate(0, 576.6666666666666px) rotate3d(1, 1, 1, 900deg);
        }

        100% {
          transform: translate(0, 692px) rotate3d(1, 1, 1, 1080deg);
        }
      }

      .ld.ld-fall {
        animation: ld-fall 2.0408163265306123s linear 1;
      }

      .ld.ld-fall2 {
        animation: ld-fall 2.0408163265306123s linear 2;
        animation-fill-mode: forwards;
      }
    </style>
    <g transform="translate(0 291.0632485443072)">
      <g transform="translate(244.0330983490159 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.07621864623490573s;animation-duration:1.0204081632653061s">
          <rect x="-3.235103234952308" y="-5.489964704140676" width="6.470206469904616" height="10.979929408281352" style="transform:scale(2.6354469581462947)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(349.33930835669565 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.21673757831379387s;animation-duration:2.0408163265306123s">
          <rect x="-4.566284261361794" y="-5.280496022446338" width="9.132568522723588" height="10.560992044892677" style="transform:scale(2.002439838141416)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(563.9189464049713 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.33684475218758875s;animation-duration:1.0204081632653061s">
          <rect x="-4.934623340567223" y="-5.460418225113612" width="9.869246681134445" height="10.920836450227224" style="transform:scale(1.213864987218486)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(156.7399315160176 0)">
        <g class="ld ld-fall2" style="animation-delay:-1.4806695477319705s;animation-duration:2.0408163265306123s">
          <rect x="-3.2395670039319664" y="-3.9782607806605412" width="6.479134007863933" height="7.9565215613210825" style="transform:scale(2.5120625666494076)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(1035.5659455259229 0)">
        <g class="ld ld-fall2" style="animation-delay:-1.9675099293991247s;animation-duration:2.0408163265306123s">
          <rect x="-4.532281086829724" y="-3.1406791289958003" width="9.064562173659448" height="6.2813582579916005" style="transform:scale(1.457379656978042)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(308.8563411865235 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.058380563392183074s;animation-duration:1.0204081632653061s">
          <rect x="-4.992913295687752" y="-4.7122289051485025" width="9.985826591375504" height="9.424457810297005" style="transform:scale(1.7580431709837518)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(279.98900981222 0)">
        <g class="ld ld-fall2" style="animation-delay:-1.87509406829119s;animation-duration:2.0408163265306123s">
          <rect x="-4.398067849843251" y="-5.031115254140852" width="8.796135699686502" height="10.062230508281704" style="transform:scale(1.929430138070093)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(1193.4617852828326 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.44633416638763307s;animation-duration:2.0408163265306123s">
          <rect x="-5.483419984819514" y="-4.500366442178271" width="10.966839969639029" height="9.000732884356543" style="transform:scale(1.9040666842996181)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(488.28801783914696 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.9161259290107288s;animation-duration:2.0408163265306123s">
          <rect x="-5.342289234538195" y="-3.3918259408367595" width="10.68457846907639" height="6.783651881673519" style="transform:scale(2.193727786285412)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(735.9830850733605 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.4937795599604022s;animation-duration:1.0204081632653061s">
          <rect x="-5.585187077423291" y="-4.240892220100376" width="11.170374154846582" height="8.481784440200752" style="transform:scale(2.1677236912200586)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(106.3993974368608 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.31648279501568505s;animation-duration:2.0408163265306123s">
          <rect x="-3.413868701784044" y="-5.651147901007809" width="6.827737403568088" height="11.302295802015617" style="transform:scale(1.4753742079399608)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(921.5624516517129 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.515901133799204s;animation-duration:1.0204081632653061s">
          <rect x="-3.4119203985950888" y="-3.513297813008915" width="6.8238407971901776" height="7.02659562601783" style="transform:scale(1.7059622467483044)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(833.1068284941248 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.9577419525049082s;animation-duration:1.0204081632653061s">
          <rect x="-3.6310396120588155" y="-4.581813846990832" width="7.262079224117631" height="9.163627693981663" style="transform:scale(2.6509638510794327)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(499.442524448008 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.4777496396580165s;animation-duration:1.0204081632653061s">
          <rect x="-3.3026586994100167" y="-3.23458185809755" width="6.605317398820033" height="6.4691637161951" style="transform:scale(1.7470293717967997)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(756.5505514674 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.397382166319529s;animation-duration:1.0204081632653061s">
          <rect x="-3.2892941961218467" y="-3.1929397279115443" width="6.578588392243693" height="6.385879455823089" style="transform:scale(2.518666239193346)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(251.84685326907587 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.587438247382814s;animation-duration:2.0408163265306123s">
          <rect x="-3.499597503696279" y="-3.76283646041281" width="6.999195007392558" height="7.52567292082562" style="transform:scale(1.392196742799935)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(441.58860477587723 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.7206008993236632s;animation-duration:1.0204081632653061s">
          <rect x="-3.677152525882395" y="-3.336860952474084" width="7.35430505176479" height="6.673721904948168" style="transform:scale(1.2748375285853792)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(934.5062949019737 0)">
        <g class="ld ld-fall2" style="animation-delay:-1.7201409116594335s;animation-duration:2.0408163265306123s">
          <rect x="-3.0183304516915683" y="-4.143974886570417" width="6.036660903383137" height="8.287949773140834" style="transform:scale(1.2400351819804492)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(765.9706419487661 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.4530490510331799s;animation-duration:1.0204081632653061s">
          <rect x="-3.1281826020016985" y="-5.190299098671251" width="6.256365204003397" height="10.380598197342502" style="transform:scale(2.0571367689988063)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(1006.2400010645134 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.36663298147805856s;animation-duration:1.0204081632653061s">
          <rect x="-3.4929146510235407" y="-3.7885242649104036" width="6.985829302047081" height="7.577048529820807" style="transform:scale(2.371985211045181)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(356.08368201877784 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.01991161682663887s;animation-duration:1.0204081632653061s">
          <rect x="-3.6889826154226237" y="-3.444890620294638" width="7.3779652308452475" height="6.889781240589276" style="transform:scale(1.4575060293507174)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(763.1746367439265 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.22009367389859147s;animation-duration:2.0408163265306123s">
          <rect x="-3.964378240406805" y="-5.392973547752291" width="7.92875648081361" height="10.785947095504582" style="transform:scale(1.7604083596334987)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(8.058994020135062 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.8879778901692731s;animation-duration:1.0204081632653061s">
          <rect x="-5.679398723042591" y="-4.159447263911352" width="11.358797446085182" height="8.318894527822705" style="transform:scale(2.3995012713568253)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(883.626874421197 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.10294456647133111s;animation-duration:2.0408163265306123s">
          <rect x="-4.423815661296897" y="-4.499366530513378" width="8.847631322593793" height="8.998733061026757" style="transform:scale(2.2379004721470572)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(396.44840622633575 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.28111735539666644s;animation-duration:1.0204081632653061s">
          <rect x="-4.32999210856537" y="-3.2219557273254398" width="8.65998421713074" height="6.4439114546508796" style="transform:scale(2.0731258215314314)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(1099.7676621110415 0)">
        <g class="ld ld-fall2" style="animation-delay:-1.0076509622295473s;animation-duration:1.0204081632653061s">
          <rect x="-5.54206137299796" y="-5.4064346422296214" width="11.08412274599592" height="10.812869284459243" style="transform:scale(2.761738571774064)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(474.5099779366291 0)">
        <g class="ld ld-fall2" style="animation-delay:-1.2261077036777737s;animation-duration:2.0408163265306123s">
          <rect x="-5.440147210469376" y="-4.993880191708244" width="10.880294420938752" height="9.987760383416488" style="transform:scale(1.5426090812669802)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(477.58491196170223 0)">
        <g class="ld ld-fall2" style="animation-delay:-1.1341021598229994s;animation-duration:2.0408163265306123s">
          <rect x="-4.001545359453948" y="-3.184259612588506" width="8.003090718907895" height="6.368519225177012" style="transform:scale(2.394192866876793)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(874.8800702957474 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.09287974126489744s;animation-duration:1.0204081632653061s">
          <rect x="-3.854653569809694" y="-3.6138778143654275" width="7.709307139619388" height="7.227755628730855" style="transform:scale(1.6913378134875594)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(376.628234341584 0)">
        <g class="ld ld-fall2" style="animation-delay:-1.5404675332177085s;animation-duration:2.0408163265306123s">
          <rect x="-4.1333724604121365" y="-3.81095817349839" width="8.266744920824273" height="7.62191634699678" style="transform:scale(1.6109587462780492)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(137.46461550024821 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.22122121986003995s;animation-duration:2.0408163265306123s">
          <rect x="-5.006623295209975" y="-5.121873739585823" width="10.01324659041995" height="10.243747479171645" style="transform:scale(1.3955251704054934)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(335.0141415937759 0)">
        <g class="ld ld-fall2" style="animation-delay:-1.6817683846004863s;animation-duration:2.0408163265306123s">
          <rect x="-3.1086941157003385" y="-5.9665470215774" width="6.217388231400677" height="11.9330940431548" style="transform:scale(2.1454699301314593)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(478.18171007959864 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.4859470800042241s;animation-duration:1.0204081632653061s">
          <rect x="-4.59977889198361" y="-5.6912870624700584" width="9.19955778396722" height="11.382574124940117" style="transform:scale(1.8247438541557206)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(181.62248988547682 0)">
        <g class="ld ld-fall2" style="animation-delay:-1.982980830562985s;animation-duration:2.0408163265306123s">
          <rect x="-4.003329451216009" y="-5.122125067702548" width="8.006658902432019" height="10.244250135405096" style="transform:scale(2.191926478028948)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(1097.1781573946464 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.772218481428764s;animation-duration:1.0204081632653061s">
          <rect x="-4.8076169007145975" y="-3.5575097825127684" width="9.615233801429195" height="7.115019565025537" style="transform:scale(2.4642298697828995)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(125.87361105152016 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.13029343096113608s;animation-duration:1.0204081632653061s">
          <rect x="-5.90777919991393" y="-3.1453724844299726" width="11.81555839982786" height="6.290744968859945" style="transform:scale(2.4511084053077683)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(769.2392915172807 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.4228950484281221s;animation-duration:2.0408163265306123s">
          <rect x="-4.170569845870094" y="-5.340712390700982" width="8.341139691740189" height="10.681424781401963" style="transform:scale(2.6013994726580894)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(1223.344861832752 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.45977081817028204s;animation-duration:1.0204081632653061s">
          <rect x="-3.134165833454728" y="-5.235871298070274" width="6.268331666909456" height="10.471742596140547" style="transform:scale(1.254924724577934)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(660.4056993188473 0)">
        <g class="ld ld-fall2" style="animation-delay:-1.0692195564490576s;animation-duration:2.0408163265306123s">
          <rect x="-3.482224182394159" y="-5.370829374402238" width="6.964448364788318" height="10.741658748804475" style="transform:scale(1.2580003575832002)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(855.7821378532428 0)">
        <g class="ld ld-fall2" style="animation-delay:-0.41235360573072727s;animation-duration:1.0204081632653061s">
          <rect x="-3.7528586664747463" y="-4.3125159152431145" width="7.505717332949493" height="8.625031830486229" style="transform:scale(1.3217426562817258)" fill="#6FD66D"></rect>
        </g>
      </g>
    </g>
    <g transform="translate(0 -400.9367514556928)">
      <g transform="translate(244.0330983490159 0)">
        <g class="ld ld-fall" style="animation-delay:-0.07621864623490573s;animation-duration:1.0204081632653061s">
          <rect x="-3.235103234952308" y="-5.489964704140676" width="6.470206469904616" height="10.979929408281352" style="transform:scale(2.6354469581462947)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(349.33930835669565 0)">
        <g class="ld ld-fall" style="animation-delay:-0.21673757831379387s;animation-duration:2.0408163265306123s">
          <rect x="-4.566284261361794" y="-5.280496022446338" width="9.132568522723588" height="10.560992044892677" style="transform:scale(2.002439838141416)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(563.9189464049713 0)">
        <g class="ld ld-fall" style="animation-delay:-0.33684475218758875s;animation-duration:1.0204081632653061s">
          <rect x="-4.934623340567223" y="-5.460418225113612" width="9.869246681134445" height="10.920836450227224" style="transform:scale(1.213864987218486)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(156.7399315160176 0)">
        <g class="ld ld-fall" style="animation-delay:-1.4806695477319705s;animation-duration:2.0408163265306123s">
          <rect x="-3.2395670039319664" y="-3.9782607806605412" width="6.479134007863933" height="7.9565215613210825" style="transform:scale(2.5120625666494076)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(1035.5659455259229 0)">
        <g class="ld ld-fall" style="animation-delay:-1.9675099293991247s;animation-duration:2.0408163265306123s">
          <rect x="-4.532281086829724" y="-3.1406791289958003" width="9.064562173659448" height="6.2813582579916005" style="transform:scale(1.457379656978042)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(308.8563411865235 0)">
        <g class="ld ld-fall" style="animation-delay:-0.058380563392183074s;animation-duration:1.0204081632653061s">
          <rect x="-4.992913295687752" y="-4.7122289051485025" width="9.985826591375504" height="9.424457810297005" style="transform:scale(1.7580431709837518)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(279.98900981222 0)">
        <g class="ld ld-fall" style="animation-delay:-1.87509406829119s;animation-duration:2.0408163265306123s">
          <rect x="-4.398067849843251" y="-5.031115254140852" width="8.796135699686502" height="10.062230508281704" style="transform:scale(1.929430138070093)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(1193.4617852828326 0)">
        <g class="ld ld-fall" style="animation-delay:-0.44633416638763307s;animation-duration:2.0408163265306123s">
          <rect x="-5.483419984819514" y="-4.500366442178271" width="10.966839969639029" height="9.000732884356543" style="transform:scale(1.9040666842996181)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(488.28801783914696 0)">
        <g class="ld ld-fall" style="animation-delay:-0.9161259290107288s;animation-duration:2.0408163265306123s">
          <rect x="-5.342289234538195" y="-3.3918259408367595" width="10.68457846907639" height="6.783651881673519" style="transform:scale(2.193727786285412)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(735.9830850733605 0)">
        <g class="ld ld-fall" style="animation-delay:-0.4937795599604022s;animation-duration:1.0204081632653061s">
          <rect x="-5.585187077423291" y="-4.240892220100376" width="11.170374154846582" height="8.481784440200752" style="transform:scale(2.1677236912200586)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(106.3993974368608 0)">
        <g class="ld ld-fall" style="animation-delay:-0.31648279501568505s;animation-duration:2.0408163265306123s">
          <rect x="-3.413868701784044" y="-5.651147901007809" width="6.827737403568088" height="11.302295802015617" style="transform:scale(1.4753742079399608)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(921.5624516517129 0)">
        <g class="ld ld-fall" style="animation-delay:-0.515901133799204s;animation-duration:1.0204081632653061s">
          <rect x="-3.4119203985950888" y="-3.513297813008915" width="6.8238407971901776" height="7.02659562601783" style="transform:scale(1.7059622467483044)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(833.1068284941248 0)">
        <g class="ld ld-fall" style="animation-delay:-0.9577419525049082s;animation-duration:1.0204081632653061s">
          <rect x="-3.6310396120588155" y="-4.581813846990832" width="7.262079224117631" height="9.163627693981663" style="transform:scale(2.6509638510794327)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(499.442524448008 0)">
        <g class="ld ld-fall" style="animation-delay:-0.4777496396580165s;animation-duration:1.0204081632653061s">
          <rect x="-3.3026586994100167" y="-3.23458185809755" width="6.605317398820033" height="6.4691637161951" style="transform:scale(1.7470293717967997)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(756.5505514674 0)">
        <g class="ld ld-fall" style="animation-delay:-0.397382166319529s;animation-duration:1.0204081632653061s">
          <rect x="-3.2892941961218467" y="-3.1929397279115443" width="6.578588392243693" height="6.385879455823089" style="transform:scale(2.518666239193346)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(251.84685326907587 0)">
        <g class="ld ld-fall" style="animation-delay:-0.587438247382814s;animation-duration:2.0408163265306123s">
          <rect x="-3.499597503696279" y="-3.76283646041281" width="6.999195007392558" height="7.52567292082562" style="transform:scale(1.392196742799935)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(441.58860477587723 0)">
        <g class="ld ld-fall" style="animation-delay:-0.7206008993236632s;animation-duration:1.0204081632653061s">
          <rect x="-3.677152525882395" y="-3.336860952474084" width="7.35430505176479" height="6.673721904948168" style="transform:scale(1.2748375285853792)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(934.5062949019737 0)">
        <g class="ld ld-fall" style="animation-delay:-1.7201409116594335s;animation-duration:2.0408163265306123s">
          <rect x="-3.0183304516915683" y="-4.143974886570417" width="6.036660903383137" height="8.287949773140834" style="transform:scale(1.2400351819804492)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(765.9706419487661 0)">
        <g class="ld ld-fall" style="animation-delay:-0.4530490510331799s;animation-duration:1.0204081632653061s">
          <rect x="-3.1281826020016985" y="-5.190299098671251" width="6.256365204003397" height="10.380598197342502" style="transform:scale(2.0571367689988063)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(1006.2400010645134 0)">
        <g class="ld ld-fall" style="animation-delay:-0.36663298147805856s;animation-duration:1.0204081632653061s">
          <rect x="-3.4929146510235407" y="-3.7885242649104036" width="6.985829302047081" height="7.577048529820807" style="transform:scale(2.371985211045181)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(356.08368201877784 0)">
        <g class="ld ld-fall" style="animation-delay:-0.01991161682663887s;animation-duration:1.0204081632653061s">
          <rect x="-3.6889826154226237" y="-3.444890620294638" width="7.3779652308452475" height="6.889781240589276" style="transform:scale(1.4575060293507174)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(763.1746367439265 0)">
        <g class="ld ld-fall" style="animation-delay:-0.22009367389859147s;animation-duration:2.0408163265306123s">
          <rect x="-3.964378240406805" y="-5.392973547752291" width="7.92875648081361" height="10.785947095504582" style="transform:scale(1.7604083596334987)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(8.058994020135062 0)">
        <g class="ld ld-fall" style="animation-delay:-0.8879778901692731s;animation-duration:1.0204081632653061s">
          <rect x="-5.679398723042591" y="-4.159447263911352" width="11.358797446085182" height="8.318894527822705" style="transform:scale(2.3995012713568253)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(883.626874421197 0)">
        <g class="ld ld-fall" style="animation-delay:-0.10294456647133111s;animation-duration:2.0408163265306123s">
          <rect x="-4.423815661296897" y="-4.499366530513378" width="8.847631322593793" height="8.998733061026757" style="transform:scale(2.2379004721470572)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(396.44840622633575 0)">
        <g class="ld ld-fall" style="animation-delay:-0.28111735539666644s;animation-duration:1.0204081632653061s">
          <rect x="-4.32999210856537" y="-3.2219557273254398" width="8.65998421713074" height="6.4439114546508796" style="transform:scale(2.0731258215314314)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(1099.7676621110415 0)">
        <g class="ld ld-fall" style="animation-delay:-1.0076509622295473s;animation-duration:1.0204081632653061s">
          <rect x="-5.54206137299796" y="-5.4064346422296214" width="11.08412274599592" height="10.812869284459243" style="transform:scale(2.761738571774064)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(474.5099779366291 0)">
        <g class="ld ld-fall" style="animation-delay:-1.2261077036777737s;animation-duration:2.0408163265306123s">
          <rect x="-5.440147210469376" y="-4.993880191708244" width="10.880294420938752" height="9.987760383416488" style="transform:scale(1.5426090812669802)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(477.58491196170223 0)">
        <g class="ld ld-fall" style="animation-delay:-1.1341021598229994s;animation-duration:2.0408163265306123s">
          <rect x="-4.001545359453948" y="-3.184259612588506" width="8.003090718907895" height="6.368519225177012" style="transform:scale(2.394192866876793)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(874.8800702957474 0)">
        <g class="ld ld-fall" style="animation-delay:-0.09287974126489744s;animation-duration:1.0204081632653061s">
          <rect x="-3.854653569809694" y="-3.6138778143654275" width="7.709307139619388" height="7.227755628730855" style="transform:scale(1.6913378134875594)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(376.628234341584 0)">
        <g class="ld ld-fall" style="animation-delay:-1.5404675332177085s;animation-duration:2.0408163265306123s">
          <rect x="-4.1333724604121365" y="-3.81095817349839" width="8.266744920824273" height="7.62191634699678" style="transform:scale(1.6109587462780492)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(137.46461550024821 0)">
        <g class="ld ld-fall" style="animation-delay:-0.22122121986003995s;animation-duration:2.0408163265306123s">
          <rect x="-5.006623295209975" y="-5.121873739585823" width="10.01324659041995" height="10.243747479171645" style="transform:scale(1.3955251704054934)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(335.0141415937759 0)">
        <g class="ld ld-fall" style="animation-delay:-1.6817683846004863s;animation-duration:2.0408163265306123s">
          <rect x="-3.1086941157003385" y="-5.9665470215774" width="6.217388231400677" height="11.9330940431548" style="transform:scale(2.1454699301314593)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(478.18171007959864 0)">
        <g class="ld ld-fall" style="animation-delay:-0.4859470800042241s;animation-duration:1.0204081632653061s">
          <rect x="-4.59977889198361" y="-5.6912870624700584" width="9.19955778396722" height="11.382574124940117" style="transform:scale(1.8247438541557206)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(181.62248988547682 0)">
        <g class="ld ld-fall" style="animation-delay:-1.982980830562985s;animation-duration:2.0408163265306123s">
          <rect x="-4.003329451216009" y="-5.122125067702548" width="8.006658902432019" height="10.244250135405096" style="transform:scale(2.191926478028948)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(1097.1781573946464 0)">
        <g class="ld ld-fall" style="animation-delay:-0.772218481428764s;animation-duration:1.0204081632653061s">
          <rect x="-4.8076169007145975" y="-3.5575097825127684" width="9.615233801429195" height="7.115019565025537" style="transform:scale(2.4642298697828995)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(125.87361105152016 0)">
        <g class="ld ld-fall" style="animation-delay:-0.13029343096113608s;animation-duration:1.0204081632653061s">
          <rect x="-5.90777919991393" y="-3.1453724844299726" width="11.81555839982786" height="6.290744968859945" style="transform:scale(2.4511084053077683)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(769.2392915172807 0)">
        <g class="ld ld-fall" style="animation-delay:-0.4228950484281221s;animation-duration:2.0408163265306123s">
          <rect x="-4.170569845870094" y="-5.340712390700982" width="8.341139691740189" height="10.681424781401963" style="transform:scale(2.6013994726580894)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(1223.344861832752 0)">
        <g class="ld ld-fall" style="animation-delay:-0.45977081817028204s;animation-duration:1.0204081632653061s">
          <rect x="-3.134165833454728" y="-5.235871298070274" width="6.268331666909456" height="10.471742596140547" style="transform:scale(1.254924724577934)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(660.4056993188473 0)">
        <g class="ld ld-fall" style="animation-delay:-1.0692195564490576s;animation-duration:2.0408163265306123s">
          <rect x="-3.482224182394159" y="-5.370829374402238" width="6.964448364788318" height="10.741658748804475" style="transform:scale(1.2580003575832002)" fill="#6FD66D"></rect>
        </g>
      </g>
      <g transform="translate(855.7821378532428 0)">
        <g class="ld ld-fall" style="animation-delay:-0.41235360573072727s;animation-duration:1.0204081632653061s">
          <rect x="-3.7528586664747463" y="-4.3125159152431145" width="7.505717332949493" height="8.625031830486229" style="transform:scale(1.3217426562817258)" fill="#6FD66D"></rect>
        </g>
      </g>
    </g>
  </g>
</svg>



























    <!-- ? Preloader Start -->
   <!--  <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="../assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index"><img src="../assets/img/logo/greenlogo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                                                                                                                    
                                            <ul id="navigation">
                                                <li><a href="index" style="color:#49C2B7">Home</a></li>
                                                <li><a href="about">About Us</a></li>
                                                <li><a href="greenTips">GreenLiving Tips</a></li>
                                                <li><a href="educational">Educational Resources</a></li>
                                                
                                                 <li><a style="cursor: pointer;">Community</a>
                                                    <ul class="submenu">
                                                        
                                                        <li><a href="forums">Forums</a></li>
                                                        <li><a href="eventcalendar">Event Calendar</a></li>
                                                        <li><a href="partnership">Partnership & Collaboration</a></li>
                                                        <li><a href="newsandupdates">News & Updates</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-20">
                                        <a href="logout" class="btn header-btn">Logout</a>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <!-- Your HTML code for the login and registration forms -->

    <style>
        
        .forimg { margin:auto; height:100px; width:100px; }
        .forimg img { margin:0px; height:100%; width:100%; }


        .btns { padding: 5px 10px; 
    background-color: #00FF6E;
    font-size: 15px;
    color: #19181a;
    font-weight: 500;
    border-radius: 5px;
    width: 80px;
    cursor: pointer;
    margin: 10px;
 }

    .welcomecenter { margin:auto; margin-top: 50px; margin-bottom: 50px; 
        text-align: center;
     height:auto; max-width:900px; width:90%; background:transparent; }

     .welcomeimg { margin:auto; height:190px; width:200px; background:transparent; border-radius:100%; overflow:hidden; border:2px solid #5FCE8A;  }
     .welcomeimg img { width:100%; height:100%; }
     .welcometext { margin:auto; text-align:center; font-weight:bold; font-size:2em }
     .welcomebtn { margin: 10px; padding:10px; background:#2FB266; color:#f1f1f1;border-radius:10px; cursor:pointer;  }
    </style>
<main>


    <div class="welcomecenter" id='welcomecenter'>
        <div class="welcomeimg"><img src="<?php echo $user_img; ?>"></div>
        <div class="welcometext"  id="welcometext" style="margin-top: 20px;">Welcome, <span style="color: #51C6A8" ><?php echo $user_name; ?><span style="color:#19181a">!</span></span></div>
        <div style="display: flex; margin: auto; justify-content: center;">
            <div class="welcomebtn" style="background: transparent;color: #19181a;" onclick="window.location.href='logout.php'">Logout</div>
            <div class="welcomebtn" onclick="openUpdate()" id="send">Update</div>
        </div>
    </div>


    <script type="text/javascript">


   var split = new SplitText("#welcometext", {
        type:"chars", 
        
    }), 
    tl = gsap.timeline({repeat:99999999});

gsap.set("#welcometext", {opacity:1}); 
tl.from(split.chars, {
    duration:2, 
    y:50, 
    rotation:90, 
    opacity:0, 
    ease:"elastic", 
    stagger: 0.05
});



function openUpdate(){
   let x = document.getElementById('form-edit')
 
   x.style.height = '640px';
   x.style.overflow = 'visible';
   x.style.paddingTop = '20px';



     document.getElementById('welcomecenter').style.display = 'none';

    
}

function closeedit(){
       let x = document.getElementById('form-edit')
 
   x.style.height = '0px';
   x.style.overflow = 'hidden';
   x.style.paddingTop = '0px';


     document.getElementById('welcomecenter').style.display = 'block';

    
}
       



    </script>




        <div class="form-modal" style="padding-top: 0px; height:0px; overflow:hidden; padding-bottom:0px; margin-bottom:0px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px; transition: .5s; " id="form-edit">
        <div id="login-form">

            <div class="forimg" style="margin-bottom: 10px; border-radius: 100%; overflow: hidden;border:2px solid #5FCE8A; ">
                <img src="<?php echo $user_img; ?>" id='userimg'>
            </div>

            <div >
                <form method="POST"  id="formediitt" action="edituser.php" enctype='multipart/form-data'>

                    <input type="file"  accept="image/*" name="fileimage" id="fileimage" value="<?php echo $user_img; ?>" style="font-weight:normal; "/>
                    <input id="willdisplayvalueofimgselected"  name="thefilename"  value="<?php echo $user_img; ?>" style="position: absolute;left: -500000px; opacity: 0;">

                    <input type="text" name="user_ID" value="<?php echo $user_ID; ?>"   style="font-weight:normal;position: absolute;left: -500000px; opacity: 0;"/>
                    <input type="text" name="user_name"  value="<?php echo $user_name; ?>" placeholder="Choose username"  style="font-weight:normal; "/>
                    <input type="email" name="user_email" value="<?php echo $user_email; ?>" placeholder="Enter your email"  style="font-weight:normal; "/>
                    <input type="password" name="password" value="<?php echo $password; ?>" placeholder="Create password" style="font-weight:normal;" id="passwordInput">
<div style="display:flex;width: 150px;cursor: pointer;" id="checkboxcon" >
    <input type="checkbox" style="padding:0px" id="showPasswordCheckbox">
    <span style="margin-left: 0px;padding-top: 5px;">Show&nbsp;Password</span>
</div>

                    <button type="submit" class="btn signup" id="signup-btn" style="background: #2FB266;">Update</button>
                    <p style="text-align: center;font-weight: normal;cursor: pointer;" onclick="closeedit()" id="send2"><span style="color: #19181a;">Close</span> </p>
                    <hr/>
                </form>
            </div>
                </div>



    </main>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>
document.getElementById('fileimage').addEventListener('change', function() {
    var input = document.getElementById('fileimage');
    var file = input.files[0];

    // Extracting only the file name
    var fileName = file.name;

    // Update the value of the second input field with the file name
    document.getElementById('willdisplayvalueofimgselected').value = 'uploadUserImg/' + fileName;
});

        
  document.getElementById('fileimage').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('userimg').src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    }); 
         const passwordInput = document.getElementById('passwordInput');
    const checkboxcon = document.getElementById('checkboxcon');

    checkboxcon.addEventListener('click', function() {
        const showPasswordCheckbox = document.getElementById('showPasswordCheckbox');
        showPasswordCheckbox.checked = !showPasswordCheckbox.checked;

        if (showPasswordCheckbox.checked) {
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    });

// Function to handle form submission via AJAX
function submitForm(formId, url, successCallback) {
    var xhr = new XMLHttpRequest();
    var formData = new FormData(document.getElementById(formId));

    xhr.open('POST', url, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            successCallback(xhr.responseText);
        }
    };
    xhr.send(formData);
}

// Function to handle signup form submission
document.getElementById("formediitt").addEventListener("submit", function(event) {
    event.preventDefault();
    submitForm("formediitt", "edituser.php", function(response) {
        alert(response);

            if(response == 'Updated Successfully!'){
            window.location.reload();
        }
    
    });
});


// Function to handle login form submission
document.getElementById("formlogin").addEventListener("submit", function(event) {
    event.preventDefault();
    submitForm("formlogin", "login.php", function(response) {
        alert(response);

          if(response == 'Login successful'){
            window.location.reload();
        }
         // Display response in an alert
        // Add your logic for successful login here
    });
});


</script>



    <footer>
        <div class="footer-wrapper">
           <!-- Footer Start-->
           <div class="footer-area footer-padding">
               <div class="container ">
                   <div class="row justify-content-between">
                       <div class="col-xl-4 col-lg-3 col-md-8 col-sm-8">
                           <div class="single-footer-caption mb-50">
                               <div class="single-footer-caption mb-30">
                                   <!-- logo -->
                                   <div class="footer-logo mb-20">
                                        <a href="index"><img src="assets/img/logo/newlogo.jpg" alt="" style="width: 100px; height: 100px; margin-left: 75px;"></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p style="font-family: 'Poppins';">Let's make the world greener together!
                                            </p>
                                        </div>
                                    </div>
                                    <!-- social -->
                                    <div class="footer-social" style="margin-left: 55px;">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
                            <div class="single-footer-caption mt-0px">
                                <div class="footer-tittle">
                                    <h4 style="font-family: 'Poppins';">Our solutions</h4>
                                    <ul>
                                        <li><a href="#">Design & creatives</a></li>
                                        <li><a href="#">Telecommunication</a></li>
                                        <li><a href="#">Restaurant</a></li>
                                        <li><a href="#">Programing</a></li>
                                        <li><a href="#">Architecture</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4 style="font-family: 'Poppins';">Company</h4>
                                    <ul>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Review</a></li>
                                        <li><a href="#">Insights</a></li>
                                        <li><a href="#">Carrier</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4 style="font-family: 'Poppins';">Contact us</h4>
                                    <ul>
                                        <li><a href="#">consulto98@gmail.com</a></li>
                                        <li><a href="#">76/A, Green road, NYC</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li class="number"><a href="#">(80) 783 367-3904</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-bottom: 0px;height: 10px; background: transparent;text-align: center;color: white; margin-top: 80px">
                    <p style="color: white;font-family: 'Poppins', sans-serif;">Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All rights reserved by GreenSpace.
                    </p>
                </div>
            </div>

        </div>
    </footer>
      <!-- Scroll Up -->
      <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script type="text/javascript">
  const svgContainer = document.body;
const originalSVG = document.getElementById("confetti");
const btn = document.getElementById("send");
const btn2 = document.getElementById("send2");

let clonedSVG = null;

send.addEventListener("click", function () {
  if (clonedSVG) {
    svgContainer.removeChild(clonedSVG);
  }
  clonedSVG = originalSVG.cloneNode(true);
  svgContainer.appendChild(clonedSVG);
});

send2.addEventListener("click", function () {
  if (clonedSVG) {
    svgContainer.removeChild(clonedSVG);
  }
  clonedSVG = originalSVG.cloneNode(true);
  svgContainer.appendChild(clonedSVG);
});


</script>

    <script src="./../assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./../assets/js/popper.min.js"></script>
    <script src="./../assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./../assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./../assets/js/owl.carousel.min.js"></script>
    <script src="./../assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./../assets/js/wow.min.js"></script>
    <script src="./../assets/js/animated.headline.js"></script>
    <script src="./../assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./../assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./../assets/js/jquery.nice-select.min.js"></script>
    <script src="./../assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./../assets/js/jquery.barfiller.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="./../assets/js/jquery.counterup.min.js"></script>
    <script src="./../assets/js/waypoints.min.js"></script>
    <script src="./../assets/js/jquery.countdown.min.js"></script>
    <script src="./../assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./../assets/js/contact.js"></script>
    <script src="./../assets/js/jquery.form.js"></script>
    <script src="./../assets/js/jquery.validate.min.js"></script>
    <script src="./../assets/js/mail-script.js"></script>
    <script src="./../assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./../assets/js/plugins.js"></script>
    <script src="./../assets/js/main.js"></script>
    
</body>
</html>