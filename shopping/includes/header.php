<style>
    
@import url('http://fonts.googleapis.com/css?family=Monoton');
.header{
    

background-image: url("img/h1.png");
    background-size:cover;
    text-align:center;

    padding:1em 0;
    }
.logo a h1{
font-size: 40px;
    text-transform: capitalize ;
font-family: 'Monoton', cursive;
  background-image: linear-gradient(
    -225deg,
    #ADEFD1FF 67%,
    #44107a 29%,
    #ff1361 0%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 3s linear infinite;
  display: inline-block;
      font-size: 2.2em;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }

}
</style>





<div class="header">
     <div class="container">
         <div class="logo">
             <a href="index.php"><h1 style="font-size:40px">lifEvent</h1></a>
         </div>
         <div class="top-menu">
             <ul>
             <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
             <li><a href="about.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>About</a></li>
             <li><a href="services.php"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Services</a></li>
               <li><a href="portfolio.php"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>Portfolio</a></li>
             <li><a href="venu.php"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Venue</a></li>
             <li><a href="contact.php"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Contact</a></li>
             <li><a href="admin/login.php"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>Admin</a></li>
             </ul>
         </div>
         <div class="clearfix"></div>
     </div>
</div>