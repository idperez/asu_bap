<?php Configure::write('Stripe.TestSecret', 'sk_test_rcI0BYPN7E1Kn4UkXuunCay3'); ?>
<div class="fh5co-hero">
    <div class="fh5co-overlay"></div>
    <div class="fh5co-cover text-center" style="background-image: url(/bap/Website/app/webroot/img/brothers.jpg); ">
        <div class="desc animate-box" style="position:relative; top:280px; ">
            <h2>Get Informed</h2>

            <h3 style="font-style: italic; color: white;">“By failing to prepare, you are preparing to fail.”</h3>

            <h4 style="color: white; position: relative; top: -15px;">- Benjamin Franklin.</h4>	

        </div>
    </div>
</div>
<div id="fh5co-services-section" class="border-bottom">
    <div class="container">
        <div class="row">
            <form action="./charge" method="POST">
            <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="pk_test_rRGhSVrmWxvjz1JHwcTpsxFL"
                data-amount="2000"
                data-name="Beta Alpha Psi"
                data-description="Sponsor Us"
                data-zip-code="true"
                data-image="/bap/Website/app/webroot/img/logo.png"
                data-locale="auto">
            </script>
          </form>
        </div>
    </div>
</div>
