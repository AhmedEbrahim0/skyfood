<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sky Food</title>
    <!-- Website Icon -->
    <link rel="icon" href="/images/skyfood-1-white-1.png" />
    <!-- Font Awesome CSS-->
    <link
      rel="stylesheet"
      href="/Static/fontawesome-free-6.4.2-web/css/all.min.css"
    />
    <!-- CSS File -->
    @include('front.layouts.style')
    <!-- Bootstrap file -->
    <link rel="stylesheet" href="/Static/Bootstrap/css/bootstrap.min.css" />

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />

    <style>
        @media (max-width: 930px){
            #HomePageIMG {
                display: block !important;}
            }

    </style>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  </head>
  <body>
    <div>
      <!-- frist Sec -->
      <div class="home_page">


       
      <div id="HomePageIMG">
                      <img id="HomePageIMG" 
                      src="/{{$background->image}}" alt="" />
                      <video  id="HomePageIMG2" src="/{{$background->image}}" muted loop autoplay ></video>
                      <div class="overlay">
                      </div>
            </div>


        <br /><br />
        <!-- navbar -->
        @include('front.layouts.navbar')

        <div class="center_text">
          <h1>
            <a
              href=""
              class="typewrite"
              data-period="2000"
              data-type='[ "{{$background->text1}}",
                "{{$background->text1}}",
                 "{{$background->text1}}",
                 "{{$background->text1}}" ]'
            >
              <span class="wrap"></span>
            </a>
          </h1>

          <p class="hidddentop">
            {{$background->text2}}
          </p>
        </div>
        <div class="skycirclelogo">
          <img
          class="hidddenbutton"
            id="HomePageLogoIMG"
            src="/images/SKY FOOD 1mainLogo.png"
            alt=""
          />
        </div>
      </div>

      <br /><br />
      <br /><br />



      <br /><br /><br />
      <br /><br /><br />

      <div class="m-auto ">
        <div id="fdfioewr24327">
          <img
          style="
          width: 80%;
          height: 100%;
          "
          src="/{{$new->image}}" alt="" />
        </div>
        <div
          class="hidddenleft"
          id="cont_tex3423"
        >
          <p
          id="tex_lasss4323"
          >
            {{$new->text1}}
          </p>
        </div>
      </div>

      <br /><br /><br />
      <!-- footer -->
      <div id="footer">
        <br /><br /><br />

        <div id="space_e22" style="display: flex; justify-content: center">
          <img
            style="width: 152px; height: 89px; flex-shrink: 0"
            src="/images/SKY FOOD 1mainLogo.png"
            alt=""
          />
        </div>
        <br />
        <div class="container m-auto row">
          <ul
            class="col-lg-3 col-md-3 col-sm-6 col-12"
            style="
              color: var(--main-green, #0b6532);
              font-family: Poppins;
              font-size: 10px;
              font-style: normal;
              line-height: normal;
            "
          >
            At SkyFood, we are passionate about creating food experiences that
            delight and inspire. As a food manufacturing company, we take
            immense pride in our diverse portfolio of brands that offer a world
            of flavor and commitment to our customers.
          </ul>
          <ul class="col-lg-3 col-md-3 col-sm-6 col-12">
            <li><h6>Company Profile</h6></li>
            <li><a href="">Home</a></li>
            <li><a href="">News</a></li>
            <li><a href="">Our Company</a></li>
            <li><a href="">Our Brands</a></li>
          </ul>
          <ul class="col-lg-3 col-md-3 col-sm-6 col-12">
            <li><h6>Our Company</h6></li>
            <li><a href="">Food Safety</a></li>
            <li><a href="">Innovation</a></li>
          </ul>
          <ul class="col-lg-3 col-md-3 col-sm-6 col-12">
            <li><h6>Contact Us</h6></li>
            <li><a href="">Airport Road, 4th Bridge,Damascus,Syria</a></li>
            <li>
              <a href="">
                <img src="/images/group-1.svg" alt="" />
                info@skyfood.com</a
              >
            </li>
            <li>
              <a href="">
                <img src="/images/solar-phone-outline.svg" alt="" />+963
                989 223 333</a
              >
            </li>
            <li>
              <br />
              <a href="">
                <img src="/images/vector.svg" alt="" />
                <img
                  style="margin-left: 15px"
                  src="/images/entypo-social-linkedin-with-circle.svg"
                  alt=""
              /></a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Font Awesome JS -->
    <script src="/Static/fontawesome-free-6.4.2-web/js/all.min.js"></script>
    <!-- JS File -->
    <script src="/Static/JS/app1.js"></script>
    <!-- Bootstrap file-->
    <script src="/Static/Bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
