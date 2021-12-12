<?php    /*
    Template Name: page-Home
    */
    get_header()
    ;?>

<section class="home__search">
  <div class="home__search-box">
    <div class="home__search-copy">
      <h1>Find the Best <span>Prescription Drug Deals</span></h1>
      <h5>Search our extensive database for the best deals on pharmacies near you.</h5>
    </div>

<?php //.search-form--container via https://codepen.io/kevinpowell/pen/jONomrd andhttps://www.youtube
    //.com/watch?v=DonxmmWW7Tk&t=104s ?>

      <form action="/coupon/"
            method="get"
            class="search">
        <div class="form-container">
          <div class="search-bar">
            <input autofocus type="text" id="search" class="search-bar__input" placeholder="Search for your drug..."
                   aria-label="search"/>
            <button class=" search-bar__submit"><i class="fas fa-search" aria-label="submit search"></i></button>
          </div>
        </div>
      </form>
      <div id="match-list"></div>

      <h6 class="descriptive-text">E.g. Phentermine 37.5</h6>
  </div>
</section>
<section class="home__cards">
  <div class="cards__container">
    <div class="cards__header">
      <h2 class="">Top 25 Drugs of 2021</h2>
      <a href="#" class="view-all"><i class="fas fa-eye fa-sm text-white-50"></i> View More</a> </div>
    <div class="grid">
      <article class="card__container">
        <div class="card">
          <div class="card__img">
            <div class="card__head"> <i class="fas fa-pills"></i>
              <h4 class="drug-name">Phentermine</h4>
            </div>
            <div class="button-card"> <a href="#"><span>Details</span></a> </div>
          </div>
          <div class="pt-4 p-3">
            <div class="card__body mb-3">
              <h5>Prices as low as $9.11</h5>
              <p class="text-grey"> <i class="fas fa-user-friends"></i> 1,000,000 Downloads </p>
            </div>
            <div class="card__footer"> <span class="text-danger">Savings up to 90% off</span> <a href="#" class="btn btn-sm btn-white ml-auto">Get Offer</a> </div>
          </div>
        </div>
      </article>
      <article class="card__container">
        <div class="card">
          <div class="card__img">
            <div class="card__head"> <i class="fas fa-pills"></i>
              <h4 class="drug-name">Simvastatin</h4>
            </div>
            <div class="button-card"> <a href="#"><span>Details</span></a> </div>
          </div>
          <div class="pt-4 p-3">
            <div class="card__body mb-3">
              <h5>Prices as low as $9.11</h5>
              <p class="text-grey"> <i class="fas fa-user-friends"></i> 1,000,000 Downloads </p>
            </div>
            <div class="card__footer"> <span class="text-danger">Savings up to 90% off</span> <a href="#" class="btn btn-sm btn-white ml-auto">Get Offer</a> </div>
          </div>
        </div>
      </article>
      <article class="card__container">
        <div class="card">
          <div class="card__img">
            <div class="card__head"> <i class="fas fa-pills"></i>
              <h4 class="drug-name">Tramadol</h4>
            </div>
            <div class="button-card"> <a href="#"><span>Details</span></a> </div>
          </div>
          <div class="pt-4 p-3">
            <div class="card__body mb-3">
              <h5>Prices as low as $9.11</h5>
              <p class="text-grey"> <i class="fas fa-user-friends"></i> 1,000,000 Downloads </p>
            </div>
            <div class="card__footer"> <span class="text-danger">Savings up to 90% off</span> <a href="#" class="btn btn-sm btn-white ml-auto">Get Offer</a> </div>
          </div>
        </div>
      </article>
      <article class="card__container">
        <div class="card">
          <div class="card__img">
            <div class="card__head"> <i class="fas fa-pills"></i>
              <h4 class="drug-name">Cyclobenzaprine</h4>
            </div>
            <div class="button-card"> <a href="#"><span>Details</span></a> </div>
          </div>
          <div class="pt-4 p-3">
            <div class="card__body mb-3">
              <h5>Prices as low as $9.11</h5>
              <p class="text-grey"> <i class="fas fa-user-friends"></i> 1,000,000 Downloads </p>
            </div>
            <div class="card__footer"> <span class="text-danger">Savings up to 90% off</span> <a href="#" class="btn btn-sm btn-white ml-auto">Get Offer</a> </div>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>

<?php get_footer();?>