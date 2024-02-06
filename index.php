<!DOCTYPE html>
<html>
<head>
<title>Pedal Cakes</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gluten:slnt,wght@-13..13,100..900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="styles/cake.css" />
</head>


<body>
<section role="header" class="heading">
  <header>

      <span class="logo"><img src="https://i.giphy.com/3oEjHFHaBKjH2lojSg.webp" alt="" /></span> 
      <h1> 
        Pedal Cakes
        <span class="tagline">Swap in a snap!</span>
      </h1>  
    
  </header>
  <!-- hidden for now
  <nav>
    <ul>
      <li><a  href="#product">Product</a></li>
      <li><a  href="#kickstarter">Kickstarter</a></li>
      <li><a  href="#about">About</a></li>
    </ul>
  </nav>
  -->
</section>

<section role="main">

<article class="flex" id="product">

  <div class="panel primary">
    <h2>Original Flavor</h2>
    <p>
      These ultra lightweight, durable platform pedals securely snap into clipless SPDs for a quick, wrench-free conversion. 
    </p>
    <p>
      Swapping pedals is a chore. Snapping in pedal cakes is so easy, you're way more likely to
    </p>
    <ul>
      <li>borrow and lend bikes</li>
      <li>customize the look of your bike</li>
      <li>head out the door with whatever shoes you damn well please</li>
    </ul>
    <stripe-buy-button
      buy-button-id="buy_btn_1OgbhhLh9rIuuIJTlpLcnavL"
      publishable-key="pk_live_51OgbEkLh9rIuuIJTit5u1HHd5C2SFDfbzlPFkKZBqgl0mZIeQmWKHQDHByPNv4YhU4foLdPKa0NZVbVs0zT58caO00bdHctHXd"
    >
    </stripe-buy-button>
  </div>
  <div class="panel secondary">
    <figure>
      <img src="img/photo-1.jpg" alt="" />
    </figure>
  </div>

</article>

<!-- later gator

<article id="kickstarter">
  <h2>Kickstarter</h2>

</article>

<article id="about">
  <h2>About</h2>

</article>

-->

</section>



<!-- Javascript zone -->
<script async
  src="https://js.stripe.com/v3/buy-button.js">
</script>



</body>

</html>
