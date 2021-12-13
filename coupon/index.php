<?php
/*
Template Name: page-drug
*/
get_header();

?>

<main class="drug">

<?php
$radius = htmlspecialchars($_REQUEST['radius'] ?? '15');
$zipCode = htmlspecialchars($_REQUEST['zipCode'] ?? '34208');
$ndc = htmlspecialchars($_REQUEST['ndc'] ?? '65628007005');
$quantity = htmlspecialchars($_REQUEST['quantity'] ?? '30');
//NOTE! If NDC=manaul, reroute to cutom quote page

echo "The radius is " . $radius . "and zip code is " . ". meanwhile, the ndc is " . $ndc . " and the quantity is " .
     $quantity;
//
//
//
//	$curl = curl_init();
//
//	curl_setopt_array($curl, array(
//		CURLOPT_URL => "https://argusprod.dstsystems.com/pharmacy-drug-pricing/1.0/service/PharmacyPricing/?radius=$radius&zipCode=$zipCode&quantity=$quantity&ndc=$ndc",
//		CURLOPT_RETURNTRANSFER => true,
//		CURLOPT_ENCODING => '',
//		CURLOPT_MAXREDIRS => 10,
//		CURLOPT_TIMEOUT => 0,
//		CURLOPT_FOLLOWLOCATION => true,
//		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//		CURLOPT_CUSTOMREQUEST => 'GET',
//		CURLOPT_HTTPHEADER => array(
//			'Authorization: Basic V1NBWElBUlg6OFBaNzU1ZUVrZVVnQ3ByUHg1V3p1TUFDcGlJPQ==',
//		),
//	));
//
//	$response = curl_exec($curl);
//
//	curl_close($curl);
//	echo $response;
//	die()





//grab zip code value if there is one or default to 90210
//$zip = htmlspecialchars($_POST['zip']);

//$zip = (!isset($_POST['zip'])) ? '90210' : $_POST['zip'];
//
//    //https://zipapi.us/
//    $url = 'https://service.zipapi.us/zipcode/ echo $zip ?X-API-KEY=e04e1085b14f5ac391fdf4e7691e539a';
//
//    $curl = curl_init();
//
//    // OPTIONS:
//    curl_setopt($curl, CURLOPT_URL, $url);
//    curl_setopt($curl, CURLOPT_USERPWD, 'LISTS@JARVIS725.COM' . ":" . 'gru*ZGP0xdc9epa!zwy');
//    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
//
//
//    // EXECUTE:
//    $result = curl_exec($curl);
//    if(!$result){
//        die("Connection Failure");
//    }
//    curl_close($curl);
//    echo 'The result is: ' . $result;




?>
<section class="drug__head col-12">
    <div class="drug__head-settings">
        <p class="discounts-for">Discounts for...</p>
        <div class="drug__block">
            <h1 class="drug__name">Phentermine 37.5<span> Mg Tablet</span></h1>
        </div>
<?php echo "The radius is " . $radius . "and zip code is " . ". meanwhile, the ndc is " . $ndc . " and the quantity is " .
     $quantity; ?>
        <form class="drugForm" action="/" target="_self" method="post">
            <div class="drugForm-div--quantity">
                <label for="quantity">Quantity:</label>
                <select name="quantity" id="quantity">
                    <option value="30">30</option>
                    <option value="60">60</option>
                    <option value="90">90</option>
                </select>
            </div>
            <div class="drugForm-input--zip">
                <label for="zip" class="location">Location: <span class="span-location--hide">(enter zip to change)
                    </span> </label>
                <input name=zip type="text" class="zip" value="<?php echo $zip ?>">
        <!--quantities - there are instatnces of ties, like Ability 10, so logic should account for that-->
            </div>
        </form>


</section>

<div class="drug__price-list-container">
<section class="drug__popular col-8">
  <div class="drug__popular-head body-container">
    <h3>Most Popular</h3>
  </div>
<div class="body-container">
  <div class="drug__popular-card flex">
  <h4 class="drug__popular-pharmacy">Walgreens</h4>
  <h4 class="drug__popular-pharmacy-price">$16.73</h4>
  <a href="#" class="drug__popular-discount-btn btn">Claim Discount</a>
  </div>
  <div class="drug__popular-card flex">
  <h4 class="drug__popular-pharmacy">Walgreens</h4>
  <h4 class="drug__popular-pharmacy-price">$16.73</h4>
  <a href="#" class="drug__popular-discount-btn btn">Claim Discount</a>
  </div>
  <div class="drug__popular-card flex">
  <h4 class="drug__popular-pharmacy">Walgreens</h4>
  <h4 class="drug__popular-pharmacy-price">$16.73</h4>
  <a href="#" class="drug__popular-discount-btn btn">Claim Discount</a>
  </div>
</div>
</section>

  <section class="drug__price-list col-8">
  <h3>Pharmacy Prices</h3>
<form class="drug__price-sort" action="/">
  <label class="sorted-by" for="sort">Sorted by:</label>
  <select name="sort" id="sort">
    <option value="Lowest Price">Lowest Price</option>
    <option value="Pharmacy Name">Pharmacy Name</option>
  </select>
</form>
<!-- javascript needed for sort plus event listener so i can remove the button-->

<div class="body-container">
  <div class="drug__popular-card flex">
  <h4 class="drug__popular-pharmacy">Walgreens</h4>
  <h4 class="drug__popular-pharmacy-price">$16.73</h4>
  <a href="#" class="drug__popular-discount-btn btn">Claim Discount</a>
  </div>
  <div class="drug__popular-card custom-quote flex">
  <h4>Create a FREE Customer Quote Now</h4>
  <a href="#">Free Custom Quote</a>
      <!-- for custom quote, need to add javascript to inject this in the #2 slot -->
  </div>
  <div class="drug__popular-card flex">
  <h4 class="drug__popular-pharmacy">Walgreens</h4>
  <h4 class="drug__popular-pharmacy-price">$16.73</h4>
  <a href="#" class="drug__popular-discount-btn btn">Claim Discount</a>
  </div>
  <div class="drug__popular-card flex">
  <h4 class="drug__popular-pharmacy">Walgreens</h4>
  <h4 class="drug__popular-pharmacy-price">$16.73</h4>
  <a href="#" class="drug__popular-discount-btn btn">Claim Discount</a>
  </div>
    <div class="drug__prices-footer flex">
        <a href="#" class="show-more btn">Show More</a>
        <!-- for need js to show an addition X# of prices when clicked -->
        <a href="#" class="pharmacy-search btn">Search by Pharmacy</a>
    </div>
  </div>
</section>
</div>
<section class="drug__glance col-12">
    <div class="drug__glance-container">
      <div class="drug__glance-info">
        <h5>Phentermine<span>...at a glance</span></h5>
        <ul>
        <li>Generic Drug</li>
        <li>Drug Class: <span>Anorexigenic Agents</span> </li>
        <li>Brand/Generic Version: Adipex</li>
        <li>Helpful Articles (if any with this class)</li>
        <li>Phentermine Options (equivalent drug link, if any</li>
        </ul>
      </div>
      <form action="/" class="drug__glance-form">
      <fieldset>
        <legend>Email me this card now!</legend>
        <div class="form-element">
          <label for="fname">First:</label>
          <input id="fname" type="text" name="fname">
        </div>
        <div class="form-element">
        <label for="lname">Last:</label>
        <input id="lname" type="text" name="lname">
          </div>
        <div class="form-element">
        <label for="email">Email:</label>
        <input id="email" type="text" name="email">
        </div>
        <input class="send-btn" type="submit" value="Send!">
      </fieldset>
      </form>
    </div>
</section>

<aside class="drug__testimonial col-12">
<blockquote>I didn't think it would go through. The price was a whopping $269! (But) with the card it was only $50! I don't know what I would have done. It saved our lives this month! I'm so grateful! </blockquote>
<span>--Mike Foster </span>
</aside>
</main>
<?php
get_footer();

