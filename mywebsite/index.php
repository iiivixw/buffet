<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- sweet alert -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">


    <title></title>
    <script>
        document.onkeydown = function(e) {
            if (event.keyCode == 123) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
                return false;
            }
        }

        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });
    </script>
</head>

<body oncontextmenu="return false">
    <nav class="navbar navbar-expand-lg  fixed-top navbar-light" style="background-color: #f03a55;">
        <div class="container">
            <a class="navbar-brand text-white" href="index.php">หน้าหลัก</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="login.php" class="nav-link text-white">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron jumbotron" style="height: 180px;">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="alert alert-info" role="alert">
                    รายการอาหารแนะนำ
                </div>
            </div>
            <div class="col-12 col-sm-12">
                <div class="alert alert-Danger" role="alert">
                    เนื้อวัว(Beef)
                </div>
            </div>
            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode1" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> เนื้อริบอาย (Ribeye) </b><br></p>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                var qrcode1 = new QRCode(document.getElementById("qrcode1"), {
                    text: "https://mywebsite/order.phpริบอาย",
                    width: 128,
                    height: 128
                });
            </script>

            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode2" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> เนื้อสันใน (Tenderloin) </b><br></p>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                var qrcode2 = new QRCode(document.getElementById("qrcode2"), {
                    text: "https://mywebsite/order.phpเนื้อสันใน",
                    width: 128,
                    height: 128
                });
            </script>

            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode3" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> เนื้อสันนอก (Sirloin) </b><br></p>
                    </div>
                </div>

                <script type="text/javascript">
                    var qrcode = new QRCode(document.getElementById("qrcode3"), {
                        text: "https://mywebsite/order.phpเนื้อสันนอก ",
                        width: 128,
                        height: 128
                    });
                </script>
            </div>
            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode4" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> เนื้อสันคอ (Neck Chuck) </b><br></p>
                    </div>
                </div>

                <script type="text/javascript">
                    var qrcode = new QRCode(document.getElementById("qrcode4"), {
                        text: "https://mywebsite/order.phpเนื้อสันคอ",
                        width: 128,
                        height: 128
                    });
                </script>
            </div>
            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode5" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> เสือร้องไห้ (Brisket) </b><br></p>
                    </div>
                </div>

                <script type="text/javascript">
                    var qrcode = new QRCode(document.getElementById("qrcode5"), {
                        text: "https://mywebsite/order.phpเสือร้องไห้",
                        width: 128,
                        height: 128
                    });
                </script>
            </div>
            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode6" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> ลิ้นวัว (Beef Tongue) </b><br></p>
                    </div>
                </div>

                <script type="text/javascript">
                    var qrcode = new QRCode(document.getElementById("qrcode6"), {
                        text: "https://mywebsite/order.phpลิ้นวัว",
                        width: 128,
                        height: 128
                    });
                </script>
            </div>
            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode7" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> ใบพาย (Paleron) </b><br></p>
                    </div>
                </div>

                <script type="text/javascript">
                    var qrcode = new QRCode(document.getElementById("qrcode7"), {
                        text: "https://mywebsite/order.phpใบพาย",
                        width: 128,
                        height: 128
                    });
                </script>
            </div>
            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode8" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> เนื้อส่วนสะโพก (Rump Steak) </b><br></p>
                    </div>
                </div>

                <script type="text/javascript">
                    var qrcode = new QRCode(document.getElementById("qrcode8"), {
                        text: "https://mywebsite/order.phpเนื้อส่วนสะโพก",
                        width: 128,
                        height: 128
                    });
                </script>
            </div>
            <div class="col-12 col-sm-12">
                <div class="alert alert-Danger" role="alert">
                    เนื้อหมู(Pork)
                </div>
            </div>
            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode9" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> สันคอหมู (Pork Collar) </b><br></p>
                    </div>
                </div>

                <script type="text/javascript">
                    var qrcode = new QRCode(document.getElementById("qrcode9"), {
                        text: "https://mywebsite/order.phpสันคอหมู",
                        width: 128,
                        height: 128
                    });
                </script>
            </div>
            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode10" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> สามชั้นหมู (Pork Belly) </b><br></p>
                    </div>
                </div>

                <script type="text/javascript">
                    var qrcode = new QRCode(document.getElementById("qrcode10"), {
                        text: "https://mywebsite/order.phpสามชั้นหมู",
                        width: 128,
                        height: 128
                    });
                </script>
            </div>
            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode11" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> สันนอกหมู (Pork Loin) </b><br></p>
                    </div>
                </div>

                <script type="text/javascript">
                    var qrcode = new QRCode(document.getElementById("qrcode11"), {
                        text: "https://mywebsite/order.phpสันนอกหมู",
                        width: 128,
                        height: 128
                    });
                </script>
            </div>
            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode12" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> สะโพกหมู (Pork Leg) </b><br></p>
                    </div>
                </div>

                <script type="text/javascript">
                    var qrcode = new QRCode(document.getElementById("qrcode12"), {
                        text: "https://mywebsite/order.phpสะโพกหมู",
                        width: 128,
                        height: 128
                    });
                </script>
            </div>
            <div class="col-12 col-sm-12">
                <div class="alert alert-Danger" role="alert">
                    อาหารทะเล(Seafood)
                </div>
            </div>
            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode13" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> กุ้ง (Shrimp) </b><br></p>
                    </div>
                </div>

                <script type="text/javascript">
                    var qrcode = new QRCode(document.getElementById("qrcode13"), {
                        text: "https://mywebsite/order.phpกุ้ง",
                        width: 128,
                        height: 128
                    });
                </script>
            </div>
            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode14" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> หอย (Shellfish) </b><br></p>
                    </div>
                </div>

                <script type="text/javascript">
                    var qrcode = new QRCode(document.getElementById("qrcode14"), {
                        text: "https://mywebsite/order.phpหอย",
                        width: 128,
                        height: 128
                    });
                </script>
            </div>
            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode15" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> ปู (Crab) </b><br></p>
                    </div>
                </div>

                <script type="text/javascript">
                    var qrcode = new QRCode(document.getElementById("qrcode15"), {
                        text: "https://mywebsite/order.phpปู",
                        width: 128,
                        height: 128
                    });
                </script>
            </div>
            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode16" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> ปลา (Fish)</b><br></p>
                    </div>
                </div>

                <script type="text/javascript">
                    var qrcode = new QRCode(document.getElementById("qrcode16"), {
                        text: "https://mywebsite/order.phpปลา",
                        width: 128,
                        height: 128
                    });
                </script>
            </div>
            <div class="col-12 col-sm-12">
                <div class="alert alert-Danger" role="alert">
                    ผักต่างๆ(Various vegetables)
                </div>
            </div>
            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode17" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> ผักบุ้ง (Water spinach) </b><br></p>
                    </div>
                </div>

                <script type="text/javascript">
                    var qrcode = new QRCode(document.getElementById("qrcode17"), {
                        text: "https://mywebsite/order.phpผักบุ้ง",
                        width: 128,
                        height: 128
                    });
                </script>
            </div>
            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode18" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> ผักกาดขาว (Chinese cabbage) </b><br></p>
                    </div>
                </div>

                <script type="text/javascript">
                    var qrcode = new QRCode(document.getElementById("qrcode18"), {
                        text: "https://mywebsite/order.phpผักกาดขาว",
                        width: 128,
                        height: 128
                    });
                </script>
            </div>
            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode19" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> ข้าวโพดอ่อน (Baby corn)</b><br></p>
                    </div>
                </div>

                <script type="text/javascript">
                    var qrcode = new QRCode(document.getElementById("qrcode19"), {
                        text: "https://mywebsite/order.phpข้าวโพดอ่อน",
                        width: 128,
                        height: 128
                    });
                </script>
            </div>
            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode20" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> เห็ดเข็มทอง (Golden Needle Mushroom) </b><br></p>
                    </div>
                </div>

                <script type="text/javascript">
                    var qrcode = new QRCode(document.getElementById("qrcode20"), {
                        text: "https://mywebsite/order.phpเห็ดเข็มทอง",
                        width: 128,
                        height: 128
                    });
                </script>
            </div>
            <div class="col-12 col-sm-12">
                <div class="alert alert-Danger" role="alert">
                    ขนมหวาน(Dessert)
                </div>
            </div>
            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode21" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> ไอศกรีม (Ice cream)</b><br></p>
                    </div>
                </div>

                <script type="text/javascript">
                    var qrcode = new QRCode(document.getElementById("qrcode21"), {
                        text: "https://mywebsite/order.phpไอศกรีม",
                        width: 128,
                        height: 128
                    });
                </script>
            </div>
            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode22" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> เค้ก (Cake) </b><br></p>
                    </div>
                </div>

                <script type="text/javascript">
                    var qrcode = new QRCode(document.getElementById("qrcode22"), {
                        text: "https://mywebsite/order.phpเค้ก",
                        width: 128,
                        height: 128
                    });
                </script>
            </div>
            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode23" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> บราวนี่ (Brownies) </b><br></p>
                    </div>
                </div>

                <script type="text/javascript">
                    var qrcode = new QRCode(document.getElementById("qrcode23"), {
                        text: "https://mywebsite/order.phpบราวนี่",
                        width: 128,
                        height: 128
                    });
                </script>
            </div>
            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode24" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> ขนมชั้น (Khanom Lay)</b><br></p>
                    </div>
                </div>

                <script type="text/javascript">
                    var qrcode = new QRCode(document.getElementById("qrcode24"), {
                        text: "https://mywebsite/order.hpp ขนมชั้น",
                        width: 128,
                        height: 128
                    });
                </script>
            </div>
            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode25" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> วุ้นมะพร้าว (Coconut jelly) </b><br></p>
                    </div>
                </div>

                <script type="text/javascript">
                    var qrcode = new QRCode(document.getElementById("qrcode25"), {
                        text: "https://mywebsite/order.phpวุ้นมะพร้าว",
                        width: 128,
                        height: 128
                    });
                </script>
            </div>
            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode26" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> สังขหยาฟักทอง (Pumpkin Custard) </b><br></p>
                    </div>
                </div>

                <script type="text/javascript">
                    var qrcode = new QRCode(document.getElementById("qrcode26"), {
                        text: "https://mywebsite/order.phpสังขหยาฟักทอง",
                        width: 128,
                        height: 128
                    });
                </script>
            </div>
            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode27" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> ขนมเปียกปูน (Rhombic) </b><br></p>
                    </div>
                </div>

                <script type="text/javascript">
                    var qrcode = new QRCode(document.getElementById("qrcode27"), {
                        text: "https://mywebsite/order.phpขนมเปียกปูน",
                        width: 128,
                        height: 128
                    });
                </script>
            </div>
            <div class="col-12 col-sm-3" style="margin-bottom: 10px;">
                <div class="card" style="width: 100%;">
                    <div id="qrcode28" class="card-img-top"></div>
                    <div class="card-body">
                        <p class="card-text"> <b> ลอดช่อง (Lod Chong ) </b><br></p>
                    </div>
                </div>

                <script type="text/javascript">
                    var qrcode = new QRCode(document.getElementById("qrcode28"), {
                        text: "https://mywebsite/order.phpลอดช่อง",
                        width: 128,
                        height: 128
                    });
                </script>
            </div>

        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/d)ist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->


</body>

</html>