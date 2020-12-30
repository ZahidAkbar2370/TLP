@extends('layout')
@section('contents')
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
        <br>
        <marquee  direction="left">
            <span style="margin-right:80px">Khtmy Nabuwat</span>
            <span style="margin-right:80px">Sunnatpak</span>
            <span style="margin-right:80px">Videos</span>
            <span style="margin-right:80px">Gallary</span>
            <span style="margin-right:80px">Tarana</span>
            <span style="margin-right:80px">Contact us</span>
        </marquee>



<div class="container" style="margin-top:15px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="slider1.jpg" alt="Los Angeles" style="width:100%;height:400px">
      </div>

      <div class="item">
        <img src="slider2.jpg" alt="Chicago" style="width:100%;height:400px">
      </div>
    
      <div class="item">
        <img src="slider3.jpg" alt="New york" style="width:100%;height:400px">
      </div>
    </div>

    <!--  -->
  

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<center><h1 style="margin-top: 50px;">Welcome To Tehreek-e-Labbaik Pakistan</h1></center>    
<br>
<p style="margin-left:110px;margin-right:110px;text-align: justify;">Tehreek-e-Labbaik Pakistan (abbreviated TLP; Urdu: تحریک لبیک پاکستان‎, lit. '"(I am) Present" Movement Pakistan', referring to a phrase used in submitting will to Muhammad, "I am Present, Oh Prophet of Allah"), is a far-right Islamist political party in Pakistan.[4][3] The party was founded by preacher Khadim Hussain Rizvi.[5]

The TLP is known for its countrywide street power and massive protests in opposition to any change to Pakistan's blasphemy law. The party came into existence, and subsequently rose to fame, after the hanging of Mumtaz Qadri, which the political party states was unjustifiable. It demands that Sharia law be established as the fundamental law in Pakistan, through a gradual legal and political process.[6] Most of the party's members belong to the Barelvi school of Islamic thought, the majority in Pakistan.</p>

<h1 class="text-center" style="margin-top:50px;">Khtmy Nabuwat Bayans</h1>

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
             <?php echo('<iframe width="350" height="300" src="https://www.youtube.com/embed/mi2o6WfUcD8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'); ?>
          </div>
          <div class="col-md-4">
              <?php echo('<iframe width="350" height="300" src="https://www.youtube.com/embed/fFwyIEOE1JE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'); ?>
          </div>
          <div class="col-md-4">
              <?php echo('<iframe width="350" height="300" src="https://www.youtube.com/embed/-_JV4JE6BA0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'); ?>
          </div>

        </div>

        <div class="row">
          <div class="col-md-4">
             <?php echo('<iframe width="350" height="300" src="https://www.youtube.com/embed/O3vxj_0oMFI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'); ?>
          </div>
          <div class="col-md-4">
              <?php echo('<iframe width="350" height="300" src="https://www.youtube.com/embed/Npg2pvQG_QA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'); ?>
          </div>
          <div class="col-md-4">
              <?php echo('<iframe width="350" height="300" src="https://www.youtube.com/embed/HnnghUgUgg4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'); ?>
          </div>

        </div>

        <div class="row">
          <div class="col-md-4">
             <?php echo('<iframe width="350" height="300" src="https://www.youtube.com/embed/O3vxj_0oMFI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'); ?>
          </div>
          <div class="col-md-4">
              <?php echo('<iframe width="350" height="300" src="https://www.youtube.com/embed/Npg2pvQG_QA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'); ?>
          </div>
          <div class="col-md-4">
              <?php echo('<iframe width="350" height="300" src="https://www.youtube.com/embed/HnnghUgUgg4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'); ?>
          </div>

        </div>


      </div>


</body>
<br><br>

@endsection


