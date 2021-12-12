<?php
/*
Template Name: page-search-results
*/

get_header();

while ( have_posts() ) {
	the_post(); ?>


<main class="search-results">
    <section class="search-results__header">
    <div class="search-results__breadcrumbs flex-js-state">
        <div class="links col-4">
        <a href="#">Home</a>
        <a href="#">Drug List</a>
        <a href="#">Phentermine</a>
        </div>
    </div>
    <div class="searched-drug flex-js-state">
        <div class="searched-drug__links">
        <p>Search results for...</p>
        <h1>Phentermine</h1>
        <a href="#">get card</a>
        <a href="#">| by pharmacy |</a>
        <a href="#">by email</a>
    </div>
    </div>
    </section>
    <section id="results">
    <div class="results-container__heading">
            <h3>Make your selection</h3>
        </div>
    <div class="results-container ml">

        <div class="results-container__card">
            <a href="/">
                <div class="results-container__head">
                <div class="dose popular row flex-jc-sb flex-ai-c">
                   <h3>37.5 Mg Tablet</h3>
                   <p class="results-badge">Popular</p>
                </div>
                <div class="price">As low as <span>$22.89</span></div>
                </div>
            </a>
            <div class="results-container__footer row flex-jc-se flex-ai-c">
            <div class="results-pharm-btn walgreens" tabindex="20" role="button" aria-pressed="false"><a href="">Walgreens</a></div>
            <div class="results-pharm-btn walmart" tabindex="20" role="button" aria-pressed="false"><a href="">Walmart</a></div>
            <div class="results-pharm-btn more-options" tabindex="20" role="button" aria-pressed="false"><a href="">More Options</a></div>
            </div>
        </div>

        <div class="results-container__card">
            <a href="/">
                <div class="results-container__head">
                <div class="dose popular row flex-jc-sb flex-ai-c">
                   <h3>37.5 Mg Tablet</h3>
                   <p class="results-badge">Popular</p>
                </div>
                <div class="price">As low as <span>$22.89</span></div>
                </div>
            </a>
            <div class="results-container__footer row flex-jc-se flex-ai-c">
            <div class="results-pharm-btn walgreens" tabindex="20" role="button" aria-pressed="false"><a href="">Walgreens</a></div>
            <div class="results-pharm-btn walmart" tabindex="20" role="button" aria-pressed="false"><a href="">Walmart</a></div>
            <div class="results-pharm-btn more-options" tabindex="20" role="button" aria-pressed="false"><a href="">More Options</a></div>
            </div>
        </div>
        <div class="results-container__card">
            <a href="/">
                <div class="results-container__head">
                <div class="dose popular row flex-jc-sb flex-ai-c">
                   <h3>37.5 Mg Tablet</h3>
                   <p class="results-badge">Popular</p>
                </div>
                <div class="price">As low as <span>$22.89</span></div>
                </div>
            </a>
            <div class="results-container__footer row flex-jc-se flex-ai-c">
            <div class="results-pharm-btn walgreens" tabindex="20" role="button" aria-pressed="false"><a href="">Walgreens</a></div>
            <div class="results-pharm-btn walmart" tabindex="20" role="button" aria-pressed="false"><a href="">Walmart</a></div>
            <div class="results-pharm-btn more-options" tabindex="20" role="button" aria-pressed="false"><a href="">More Options</a></div>
            </div>
        </div>
        <div class="results-container__card">
            <a href="/">
                <div class="results-container__head">
                <div class="dose popular row flex-jc-sb flex-ai-c">
                   <h3>37.5 Mg Tablet</h3>
                   <p class="results-badge">Popular</p>
                </div>
                <div class="price">As low as <span>$22.89</span></div>
                </div>
            </a>
            <div class="results-container__footer row flex-jc-se flex-ai-c">
            <div class="results-pharm-btn walgreens" tabindex="20" role="button" aria-pressed="false"><a href="">Walgreens</a></div>
            <div class="results-pharm-btn walmart" tabindex="20" role="button" aria-pressed="false"><a href="">Walmart</a></div>
            <div class="results-pharm-btn more-options" tabindex="20" role="button" aria-pressed="false"><a href="">More Options</a></div>
            </div>
        </div>

    </div>
    </section>
    <section class="details row">
    <div class="details-container col-5">
    <h2 class="details-container__medication">Medication Details</h2>
    <div class="details-container__description">
    <h3>Description</h3>
    <p>Phentermine is a stimulant that acts as an appetite suppressant. When used in conjunction with a doctor-approved diet and exercise plan, it is designed to aid in weight loss. Treating obesity helps reduce a person's risk for diabetes, heart disease, stroke, high cholesterol, high blood pressure, and other medical conditions. It is the generic form of brands such as Adipex, Qsymia, and Suprenza, and is typically available in tablet or capsule form</p>
    </div>
    <div class="details-container__prescribers">
    <h3>Prescriber Specialties</h3>
    <p>The following is a list of the most likely providers (such as doctors, physician assistants, nurse practitioners or others) that most commonly write a legal prescription for this medication:

    <ul>
        <li>Family Practice</li>
        <li>Internal Medicine</li>
        <li>Family Medicine</li>
        <li>Emergency Medicine</li>
    </ul>
    </p>
    </div>
    <a href="#" class="get-card-btn">Review Discount Card</a>
    </section>
</main>
<?php
}

get_footer();
?>