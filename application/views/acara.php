<?php
    include 'header.php';
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

<style>


hr {
    margin: auto;
    width: 40%;
}

section{
    
    height: 100vh;
    width : 100%;
    box-sizing: border-box;
}

section.sec1{
    
    background: url('assets/coming1.png');
    background-size : cover;
    background-attachment : fixed;
   
}

section.sec1 h1{

    text-align: center;
    font-family: helvetica;
    font-size: 33px;
    background: mediumseagreen;
    margin-left: 361px;
    padding : 10px;
    color:wheat;
    width: 40%;

    
}

section.sec1 p{
    text-align: center;
    font-family: fantasy;
    background: black;
    color: white;
    width: 30%;
    margin-left: 410px;

}

section.sec2 h1{
    
}

section.sec2 p{

}

section.sec3{
    
    background: url('assets/coming2.png');
    background-size : cover;
    background-attachment : fixed;
   
}

section.sec4 h1{
    
}

section.sec4 p{

}

section.sec5{
    
    background: url('assets/coming3.png');
    background-size : cover;
    background-attachment : fixed;
   
}

section.sec6 h1{
    
}

section.sec6 p{

}

</style>


<section class="sec1">

    
  
    <br></br>
    <br></br>
    <br></br>
    <h1>COMING SOON</h1>
    <hr>
    <p id="demo" style="font-size:30px"></p>
 
  
</section>

<section class="sec2">

    <h2>KEGIATAN MENANAM 2017</h2>
    <div class="fakeimg"><img src="assets/images/kegiatan.jpg"></div>

  <p>Sebagai Implementasi bentuk dukungan terhadap  program pemerintah “Indonesia Bebas Sampah 2020” sekaligus memperingati Hari Menanam Pohon Nasional 2017, Giant mengenalkan gerakan “Karena Aku Cinta Lingkungan” (KANCIL).
Gerakan ini merupakan upaya yang dilakukan Giant dalam menumbuhkan kepedulian lingkungan melalui kegiatan menanam pohon bersama murid-murid TK Mursan Harun Nur Rasyid, di Rumah Kelola Sampah (RKS) Giant, Ciputat pada hari ini Selasa, 28 November 2017.
Gerakan KANCIL ini mengajak 36 anak dan menyerahkan 60 bibit tanaman untuk ditanam. Tampak wajah-wajah penuh antusias menyimak cara menanam yang baik dan benar, dengan pemanfaatan wadah dari sampah selain menggunakan polybag. Serta, media tanam yang digunakan juga ada dari komposter hasil pengelolaan sampah warga.
“Seperti pohon besar yang tumbuh dari bibit, kepedulian terhadap lingkungan perlu ditanam sejak dini. 
</p>
</section>

<section class="sec3">
  
    <br></br>
    <br></br>
    <br></br>
    <h1>COMING SOON</h1>
    <hr>
    <p id="demo" style="font-size:30px"></p>
  
</section>

<section class="sec4">
  
  
    <h1>Acara Coming Soon</h1>
    <p></p>
  
  
</section>

<section class="sec5">
  
  <br></br>
  <br></br>
  <br></br>
  <h1>COMING SOON</h1>
  <hr>
  <p id="demo" style="font-size:30px"></p>

</section>

<section class="sec6">
  
  
  <h3>Acara Coming Soon</h3>

  


</section>


<script>
// Set the date we're counting down to
var countDownDate = new Date("Nov 5, 2018 15:37:25").getTime();

// Update the count down every 1 second
var countdownfunction = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(countdownfunction);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

</body>



<?php
    include 'footer.php';
?>