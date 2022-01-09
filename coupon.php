<?php
/*
Template Name: page-coupon
*/

    get_header();

    //populate variables from url parameters
    $drug = htmlspecialchars($_REQUEST['drug']);
    $needle = $drug;
	$radius = htmlspecialchars($_REQUEST['radius'] ?? '15');
	$zipCode = htmlspecialchars($_REQUEST['zipCode'] ?? '90210');
	$ndc = htmlspecialchars($_REQUEST['ndc'] ?? '65628007005');
	$quantity = htmlspecialchars($_REQUEST['quantity'] ?? '30');

    //make the drug data available for the app to use
	$filepath = '/Users/davidsmith/Local Sites/prescriptiondotcards/app/public/wp-content/themes/cards/coupon/all-drugs.json';
	$json_string = file_get_contents($filepath);
	$json = json_decode($json_string, true);



$pscripts = $json;
$quantities = array();

	foreach ($pscripts as $pscript) {
		$hyphen = $pscript["hyphen"];
		$full = $pscript["full"];
		$bg = $pscript["bg"];
		$lead = $pscript["lead"];
		$name = $pscript["name"];
        //$leadQuantity = $pscript["quantity"];


		if($hyphen == $drug) {
			$quantities = $pscript["quantity"];

		}}
//	echo "<pre>";
//	print_r($quantities);
//	echo "</pre>";


            ?>


<main class="drug">

    <?php


	    $curl = curl_init();

	    curl_setopt_array($curl, array(
		    CURLOPT_URL            => "https://argusprod.dstsystems.com/pharmacy-drug-pricing/1.0/service/PharmacyPricing/?radius=$radius&zipCode=$zipCode&quantity=$quantity&ndc=$ndc",
		    CURLOPT_RETURNTRANSFER => true,
		    CURLOPT_ENCODING       => '',
		    CURLOPT_MAXREDIRS      => 10,
		    CURLOPT_TIMEOUT        => 0,
		    CURLOPT_FOLLOWLOCATION => true,
		    CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
		    CURLOPT_CUSTOMREQUEST  => 'GET',
		    CURLOPT_HTTPHEADER     => array(
			    'Authorization: Basic V1NBWElBUlg6OFBaNzU1ZUVrZVVnQ3ByUHg1V3p1TUFDcGlJPQ==',
		    ),
	    ));

	    $apiresponse = curl_exec($curl);

	    curl_close($curl);
	 //   die();


	    $response = json_decode($apiresponse, true);
	    $data     = $response['DrugPricing'];

	    $pharmacyList = [];
	    $filtered     = array_filter($data, function ($element) use (&$pharmacyList) {
		    foreach ($pharmacyList as $pharmacyIncluded) {
			    if ($pharmacyIncluded['pharmacy'] === $element['pharmacy']) {
				    if ($pharmacyIncluded['price'] === $element['price']) {
					    // This is a duplicate based on pharmacy name and price
					    return false;
				    }
			    }
		    }

		    $pharmacyList[] = $element;

		    return true;
	    });

	    $response['DrugPricing'] = $filtered;

	 //   var_dump($response);
	    die();


    ?>
    <section class="drug__head col-12">
    <div class="drug__head-settings">
        <p class="discounts-for">Discounts for...</p>
        <div class="drug__block">
            <h1 class="drug__name"><?php echo $drug; ?></h1>
        </div>

        <form class="drugForm" action="/" target="_self" method="post">
            <div class="drugForm-div--quantity">
                <label for="quantity">Quantity:</label>
                <input class="quantity" type="text" id="quantity" name="quantity" value=" <?php echo  $quantities; ?>">
            </div>
            <div class="drugForm-input--zip">
                <label for="zip" class="location">Location: <span class="span-location--hide">(enter zip to change)
                    </span> </label>
                <input name=zip type="text" class="zip" value="<?php echo $zipCode ?>">
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

