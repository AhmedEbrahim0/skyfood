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
    #HomePageIMG2{
position: absolute;
z-index: -1;
border-radius: 0 0px 50% 50%;
}
@media (min-width:1250px) {
#HomePageIMG2{
position: absolute;
z-index: -1;
width: 100%;
border-radius: 0 0px 50% 50%;
}
}


#HomePageIMG2{
width:100%;
}

</style>


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






      <!-- main content -->
      <div class="campany_second" style="padding: 10px;">
        <div class="container hidddenleft">
          {{$fisrt_section->text2 }}
        </div>
      </div>


        @for($i=0;$i<count($sections);$i++)
          @if($i%2 ==0)


          <div class="container row m-auto mt-5 pt-4 mb-5 pb-5">
              <div class="col-lg-6 col-md-6 col-12 m-auto hidddenright">
                <img
                  style="width: 100%"
                  src="/{{$sections[$i]->image}}  "
                  alt=""
                />
              </div>
              <div
                style="
                  color: var(--main-green, #0b6532);
                  text-align: center;
                  font-family: Roboto;
                  font-size: 19px;
                  font-style: normal;
                  font-weight: 600;
                  line-height: 150%; 
                "
                id="fsgsdt435645"
                class=" col-lg-6 col-md-6 col-12 m-auto hidddenleft"
                            >

                <p class="main_text_shown_dsc">
                {{$sections[$i]->text1}}  
              </p>
                <p class="add-read-more show-less-content">
                  {{$sections[$i]->text1}}  
                </p>
              </div>
            </div>



          @else


          <div class="container row m-auto mt-5 pt-4 mb-5 pb-5">

              <div
                style="
                  color: var(--main-green, #0b6532);
                  text-align: center;
                  font-family: Roboto;
                  font-size: 19px;
                  font-style: normal;
                  font-weight: 600;
                  line-height: 150%; 
                "
                id="fsgsdt435645"
                class=" col-lg-6 col-md-6 col-12 m-auto hidddenleft"
                            >

                <p class="main_text_shown_dsc">
                  {{$sections[$i]->text1}}  
                </p>
                <p class="add-read-more show-less-content">
                  {{$sections[$i]->text1}}  
                </p>
              </div>
              <div class="col-lg-6 col-md-6 col-12 m-auto hidddenright">
                <img
                  style="width: 100%"
                  src="/{{$sections[$i]->image}}  "
                  alt=""
                />
              </div>
            </div>


          @endif
        @endfor

<br><br>
<br><br><br>

      <div
          id="btn_com"
  
         >

        <div
            id="controlling"

            class="container d-flex justify-content-between align-items-center"
              >
        <div><h1></h1></div>
        <div
            style="
            transform: translateY(40%);
            z-index: 2222;
            "
            class="buttons">
          <button
            type="button"
            data-bs-target="#carouselExampleFade2"
            data-bs-slide="prev"
            id="prev"
          >
            <img style="height:70px;" src="/images/group-3left.svg" alt="" />
          </button>
          <button
            type="button"
            data-bs-target="#carouselExampleFade2"
            data-bs-slide="next"
            id="next"
          >
            <img style="height:70px;" src="/images/group-3right.svg" alt="" />
          </button>
        </div>
      </div>


      <div id="carouselExampleFade2" class="carousel slide carousel">


          @for($i=0;$i<count($sliders);$i++)
          @if($i==0)
          <div class="carousel-inner">
            
            
            <div
              style="
              background-color: var(--white-shade, #f4f4f4);
              border-radius: 20px;
              "
              class="carousel-item active ">

                <div class="container row m-auto hidddenleft">
                  <div class="col-lg-6 col-md-6 col-12 m-auto">
                    <img
                      style="width: 100%"
                      src="/{{$sliders[$i]->image}}"
                      alt=""
                    />
                  </div>
                <div
                    style="
                      color: var(--main-green, #0b6532);
                      text-align: center;
                      font-family: Roboto;
                      font-size: 24px;
                      font-style: normal;
                      font-weight: 600;
                      line-height: 150%; /* 36px */
                    "
                    class="col-lg-6 col-md-6 col-12 m-auto"
                    >
                    {{$sliders[$i]->text1}}                </div>
            </div>
            
          </div>
          @else
          <div
                style="background: #0b6532;border-radius: 20px;"
                class="carousel-item">
                
                <div class="container row m-auto  hidddenleft">
                  <div class="col-lg-6 col-md-6 col-12 m-auto">
                    <img
                      style="width: 100%"
                      src="/{{$sliders[$i]->image}}"
                      alt=""
                    />
                  </div>
                <div
              style="
                color: var(--main-green, #f4f4f4);
                text-align: center;
                font-family: Roboto;
                font-size: 24px;
                font-style: normal;
                font-weight: 600;
                line-height: 150%; /* 36px */
              "
              class="col-lg-6 col-md-6 col-12 m-auto"
            >
             {{$sliders[$i]->text1}}
             </div>
          </div>

          
          
        </div>
        
        @endif
        @endfor
      </div>


     


        </div>
       
      </div>

      </div>





     
      <br /><br /><br /><br />
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
    <script>
    // search icon
    let searchicon = document.getElementById("searchicon");
    let search_input = document.getElementById("search_input");

    search_input.style.display = "none"
    searchicon.onclick= () => {
        search_input.style.display = "inline"
    }
    search_input.onblur= () => {
        search_input.style.display = "none"
    }


    // write Effect
    var TxtType = function(el, toRotate, period) {
      this.toRotate = toRotate;
      this.el = el;
      this.loopNum = 0;
      this.period = parseInt(period, 10) || 2000;
      this.txt = '';
      this.tick();
      this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
      var i = this.loopNum % this.toRotate.length;
      var fullTxt = this.toRotate[i];

      if (this.isDeleting) {
      this.txt = fullTxt.substring(0, this.txt.length - 1);
      } else {
      this.txt = fullTxt.substring(0, this.txt.length + 1);
      }

      this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

      var that = this;
      var delta = 200 - Math.random() * 100;

      if (this.isDeleting) { delta /= 2; }

      if (!this.isDeleting && this.txt === fullTxt) {
      delta = this.period;
      this.isDeleting = true;
      } else if (this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      this.loopNum++;
      delta = 500;
      }

      setTimeout(function() {
      that.tick();
      }, delta);
    };

    window.onload = function() {
      var elements = document.getElementsByClassName('typewrite');
      for (var i=0; i<elements.length; i++) {
          var toRotate = elements[i].getAttribute('data-type');
          var period = elements[i].getAttribute('data-period');
          if (toRotate) {
            new TxtType(elements[i], JSON.parse(toRotate), period);
          }
      }
      var css = document.createElement("style");
      css.type = "text/css";
      css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
      document.body.appendChild(css);
    };

    // navbar

    let Home_rout = document.querySelector("#Home_rout a p");
    let Company_rout = document.querySelector("#Company_rout a p");
    let Food_rout = document.querySelector("#Food_rout a p");
    let Innvation_rout = document.querySelector("#Innvation_rout a p");
    let Brands_rout = document.querySelector("#Brands_rout a p");
    let News_rout = document.querySelector("#News_rout a p");
    let Contact_rout = document.querySelector("#Contact_rout a p");


    let coloring = () => {
      if (window.location.pathname == "/" || window.location.pathname == "/index.html" || window.location.pathname == "/index" ) {
        document.querySelector("#Home_rout a").style.color = "#0B6532";
        Home_rout.style.transform = "scale(1.02)!important";
        Home_rout.style.borderBottom = "#0B6532 solid 1px";
      }
      if (window.location.pathname == "/ourcampany.html" || window.location.pathname == "/ourcampany") {
        document.querySelector("#Company_rout a").style.color = "#0B6532";
        document.querySelector("#Company_rout2 a").style.color = "#0B6532";
        Company_rout.style.transform = "scale(1.02)!important";
        Company_rout.style.borderBottom = "#0B6532 solid 1px";
      }

      if (window.location.pathname == "/food.html"|| window.location.pathname == "/food") {
        document.querySelector("#Food_rout a").style.color = "#0B6532";
        Food_rout.style.transform = "scale(1.02)!important";
        Food_rout.style.borderBottom = "#0B6532 solid 1px";
        document.querySelector("#Company_rout a").style.color = "#0B6532";
        Company_rout.style.transform = "scale(1.02)!important";
        Company_rout.style.borderBottom = "#0B6532 solid 1px";

      }
      if (window.location.pathname == "/innvation.html"||window.location.pathname == "/innvation" ) {
        document.querySelector("#Innvation_rout a").style.color = "#0B6532";
        Innvation_rout.style.transform = "scale(1.02)!important";
        Innvation_rout.style.borderBottom = "#0B6532 solid 1px";
        document.querySelector("#Company_rout a").style.color = "#0B6532";
        Company_rout.style.transform = "scale(1.02)!important";
        Company_rout.style.borderBottom = "#0B6532 solid 1px";

      }
      if (window.location.pathname == "/brands.html"||window.location.pathname == "/brands") {
        document.querySelector("#Brands_rout a").style.color = "#0B6532";
        Brands_rout.style.transform ="scale(1.02)!important";
        Brands_rout.style.borderBottom = "#0B6532 solid 1px";

      }
      if (window.location.pathname == "/news.html"|| window.location.pathname == "/news") {
        document.querySelector("#News_rout a").style.color = "#0B6532";
        News_rout.style.transform = "scale(1.02)!important";
        News_rout.style.borderBottom = "#0B6532 solid 1px";

      }
      if (window.location.pathname == "/contact.html"||window.location.pathname == "/contact") {
        document.querySelector("#Contact_rout a").style.color = "#0B6532";
        Contact_rout.style.transform = "scale(1.02)!important";
        Contact_rout.style.borderBottom = "#0B6532 solid 1px";

      }
    };
    coloring(); 


    // GSAP
    // hidden right
    let observer = new IntersectionObserver((entries)=>{
      entries.forEach((entry)=>{
        if(entry.isIntersecting){
          entry.target.classList.add('showw')
        }else{
          entry.target.classList.remove('showw')
        }
      })
    })
    let hidddenElement = document.querySelectorAll('.hidddenright');
    hidddenElement.forEach((el) => observer.observe(el))

    // hidden left
    let observer2 = new IntersectionObserver((entries)=>{
      entries.forEach((entry)=>{
        if(entry.isIntersecting){
          entry.target.classList.add('showw')
        }else{
          entry.target.classList.remove('showw')
        }
      })
    })
    let hidddenElement2 = document.querySelectorAll('.hidddenleft');
    hidddenElement2.forEach((el) => observer2.observe(el))

    // hidddenbutton
    let observer3 = new IntersectionObserver((entries)=>{
      entries.forEach((entry)=>{
        if(entry.isIntersecting){
          entry.target.classList.add('showw')
        }else{
          entry.target.classList.remove('showw')
        }
      })
    })
    let hidddenElement3 = document.querySelectorAll('.hidddenbutton');
    hidddenElement3.forEach((el) => observer3.observe(el))

    // hidddentop
    let observer4 = new IntersectionObserver((entries)=>{
      entries.forEach((entry)=>{
        if(entry.isIntersecting){
          entry.target.classList.add('showw')
        }else{
          entry.target.classList.remove('showw')
        }
      })
    })
    let hidddenElement4 = document.querySelectorAll('.hidddentop');
    hidddenElement4.forEach((el) => observer4.observe(el))





    // Read more function

    $(document).ready(function(){
        function AddReadMore() {
          var carLmt = 100;
          var readMoreTxt = " Read more";
          var readLessTxt = " Read less";


          $(".add-read-more").each(function () {
            if ($(this).find(".first-section").length)
                return;

            var allstr = $(this).text();
            if (allstr.length > carLmt) {
                var firstSet = allstr.substring(0, carLmt);
                var secdHalf = allstr.substring(carLmt, allstr.length);
                var strtoadd = firstSet + "<span class='second-section'>" + secdHalf + "</span><span class='read-more'  title='Click to Show More'> <br>" + readMoreTxt + "</span><span class='read-less' title='Click to Show Less'>" + readLessTxt + "</span>";
                $(this).html(strtoadd);
            }
          });

          $(document).on("click", ".read-more,.read-less", function () {
            $(this).closest(".add-read-more").toggleClass("show-less-content show-more-content");
          });
      }

      AddReadMore();
    });





</script>
    <!-- Font Awesome JS -->
    <script src="/Static/fontawesome-free-6.4.2-web/js/all.min.js"></script>
    <!-- JS File -->
    <script src="/Static/JS/app1.js"></script>
    <!-- Bootstrap file-->
    <script src="/Static/Bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
