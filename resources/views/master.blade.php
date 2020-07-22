<html lang="en-US">
<head>
    <title>করোনা পরীক্ষা কেন্দ্র</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="language" content="english">
    <meta name="og:title" content="করোনা পরীক্ষা কেন্দ্র">
    <link rel="icon" href="covid.ico" type="image/x-icon">
    <meta name="keywords" content="করোনা,corona, test, virus, ভাইরাস, COVID-19, কোভিড-১৯, pandemic, death, recovery, বাংলাদেশ, Bangladesh, health, পরীক্ষা, center, কেন্দ্র, epidemic, মহামারী, আইইডিসিআর, iedcr">
    <link rel="stylesheet" href="{{ asset('') }}css/Style.css">
    <link rel="stylesheet" href="{{ asset('') }}css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script src="{{ asset('') }}js/jquery.min.js"></script>
    <script src="{{ asset('') }}js/bootstrap.min.js"></script>
  </head>
  <body>
  <section id="newsEvents" class="fixed-top">
    <marquee direction="scroll">
      <ul>
          <li> ৩৩৩ -জাতীয় কল সেন্টার </li>
          <li> ১৬২৬৩ -স্বাস্থ্য বাতায়ন  </li>
          <li>  ১০৬৫৫ -আইইডিসিআর  </li>
          <li> ০৯৬১১৬৭৭৭৭৭ -বিশেষজ্ঞ হেলথ লাইন   </li>
          <li>  ১০৯ -জাতীয় হেল্পলাইন  </li>
      </ul>
    </marquee>
  </section>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-md bg-info navbar-dark fixed-top">
  <!-- Brand -->
  <!-- <a class="navbar-brand" href="#"><img src="img/logo.png" width="49px"  alt="Talukder"></a> -->
  <div class="col-sm-"></div>
  <div class="nav_img">
    <!-- <a class="" href="#home"> 
      <img src="img/corona.png" width="49px"  alt="Talukder">
    </a> -->
    <h3><a href="{{ route('smokey') }}" style="text-decoration-line: none;color: #5c0931"><img src="{{ asset('img/corona.png') }}" width="28" alt="Corona"> <strong>করোনা পরীক্ষা কেন্দ্র </strong></a></h3>
    </div>
  <!-- Toggler/collapsibe Button -->
</nav>
<!-- End Navigation Bar -->
  <div class="row">
    <div class="col-md-2 mt">
      <div class="card" id="location">
        <div class="card-header">
          <strong>আপনার বিভাগ</strong>
        </div> 
        <ul class="list-group list-group-flush">
          @foreach($locations as $index => $location)
          <li class="list-group-item"><a href="{{ route('location', $location->id) }}">{{$location->name}}</a></li>
           @endforeach
        </ul>
      </div>
    </div>
    <div class="col-md-9 mt">
        @yield('main_content')
    </div>
  </div> 
<footer style="padding-left: 50px" aria-label="Page navigation example">
  <ul class="pagination">
    
  </ul>
  <div class="f">
          <br><h6>covid19virus.cloudns.asia&copy;2020</h6><br>
        </div>
</footer>
</body>
</html>

