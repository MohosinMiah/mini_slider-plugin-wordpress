<?php
/*
Plugin Name: mini_sliderlider
Plugin URI:
Description:
Version: 1.0
Author: LWHH
Author URI: https://hasin.me
License: GPLv2 or later
Text Domain: mini_slider
Domain Path: /languages/
*/
function mini_slider_load_textdomain() {
	load_plugin_textdomain( 'mini_slider', false, dirname( __FILE__ ) . "/languages" );
}

add_action( 'plugins_loaded', 'mini_slider_load_textdomain' );



function mini_slider_assets(){
	wp_enqueue_style('bootstrap-css',"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css",null,'1.0');
	wp_enqueue_style('mini_sliderlider-css',plugin_dir_url(__FILE__)."/assets/css/rangeslider.css",null,'1.0');
	

	wp_enqueue_script('mini_sliderlider-index-js',plugin_dir_url(__FILE__)."/assets/js/index.js",array('jquery'),'1.0',true);
	wp_enqueue_script('mini_sliderlider-rangeslider-js',plugin_dir_url(__FILE__)."/assets/js/slider/rangeslider.min.js",array('jquery'),'1.0',true);
}
add_action('wp_enqueue_scripts','mini_slider_assets');

function mini_slider_shortcode_tslider( $arguments ) {
	
	$shortcode_output = <<<EOD
<section class="fdb-block pt-5" data-block-type="pricings" data-id="4">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-sm-12">
                <h2 class="">
                    <workerOutput></workerOutput>
                    Mitarbeiter
                </h2>
            </div>
            <div class="col-sm-6">
                <input type="range" min="11" max="199" step="1" value="55"
                       style="width:100%; height: auto">
                <br>
            </div>
        </div>

        <div class="row mt-5 align-items-top">
            <div class="col-12 col-sm-10 col-md-6 col-lg-5 m-auto col-xl-3 text-left">
                <div class="bg-gray p-3 text-center br sl-1">
                    <img src="../imgs/icons/agree.svg" class="mt-3 icon-size" alt="free">
                    <p class="text-h2">€ 0</p>
                    <p class="text-h5">pro Monat/ je Mitarbeiter</p>
                    <hr class="my-4">
                    <h2 class="">Kostenlos</h2>
                    <h3 class="font-weight-light pt-0 pb-4 ">max. 10 Nutzer</h3>
                    <p class="pb-4">Web, iOS & Android App
                        Lohnsoftwareintegration</p>
                    <p>Kostenlos Testen <span class="text-contrast">JA</span></p>
                    <p>E-Mail Support <span class="text-contrast">JA</span></p>
                    <p class="text-muted">Telefon Support <span class="">NEIN</span></p>
                    <p class="text-muted">10% Mitarbeiterabweichung <span class="">NEIN</span></p>
                    <p class="text-center pt-4"><a href="https://app.molteo.de/signup" class="btn">Kostenlos
                        nutzen</a></p>
                </div>
            </div>

            <div class="col-12 col-sm-10 col-md-6 col-lg-5 m-auto col-xl-3 text-left pt-5 pt-md-0">
                <div class="bg-gray p-3 text-center br sl-1">
                    <img src="../imgs/icons/month.svg" class="mt-3 icon-size" alt="free">
                    <p class="text-h2">€
                        <priceOutput></priceOutput>
                    </p>
                    <p class="text-h5">pro Monat/ je Mitarbeiter</p>
                    <hr class="my-4">
                    <h2 class="">Monatlich</h2>
                    <h3 class="font-weight-light pt-0 pb-4">max. 200 Nutzer</h3>
                    <p class="pb-4">Web, iOS & Android App
                        Lohnsoftwareintegration</p>
                    <p>Kostenlos Testen <span class="text-contrast">JA</span></p>
                    <p>E-Mail Support <span class="text-contrast">JA</span></p>
                    <p>Telefon Support <span class="text-contrast">JA</span></p>
                    <p class="text-muted">10% Mitarbeiterabweichung <span class="">NEIN</span></p>
                    <p class="text-center pt-4"><a href="https://app.molteo.de/signup" class="btn">Jetzt
                        anmelden</a></p>
                </div>
            </div>

            <div class="col-12 col-sm-10 col-md-6 col-lg-5 m-auto col-xl-3 text-left pt-5 pt-xl-0">
                <div class="bg-cyan p-3 text-center br sl-2">
                    <img src="../imgs/icons/year.svg" class="mt-3 icon-size" alt="free">
                    <p class="text-h2">€
                        <priceDiscounted></priceDiscounted>
                    </p>
                    <p class="text-h5">pro Monat/ je Mitarbeiter</p>
                    <hr class="my-4">
                    <h2 class="">Jährlich</h2>
                    <h3 class="font-weight-light pt-0 pb-4">max. 200 Nutzer</h3>
                    <p class="pb-4">Web, iOS & Android App
                        Lohnsoftwareintegration</p>
                    <p>Kostenlos Testen <span class="text-contrast">JA</span></p>
                    <p>E-Mail Support <span class="text-contrast">JA</span></p>
                    <p>Telefon Support <span class="text-contrast">JA</span></p>
                    <p>10% Mitarbeiterabweichung<br> <span class="text-contrast">JA</span></p>
                    <p class="text-center pt-4"><a href="https://app.molteo.de/signup"
                                                   class="btn btn-accent">Jetzt anmelden</a></p>
                </div>
            </div>

            <div class="col-12 col-sm-10 col-md-6 col-lg-5 m-auto col-xl-3 text-left pt-5 pt-xl-0">
                <div class="bg-gray p-3 text-center br sl-1">
                    <img src="../imgs/icons/employees.svg" class="mt-3 icon-size" alt="free">
                    <p class="text-h2">Kontaktieren Sie uns</p>
                    <hr class="my-4">
                    <h2 class="">Mehr Mitarbeiter?</h2>
                    <h3 class="font-weight-light pt-0 pb-4">min. 200 Nutzer</h3>
                    <p class="pb-4">Web, iOS & Android App
                        Lohnsoftwareintegration</p>
                    <p>Kostenlos Testen <span class="text-contrast">JA</span></p>
                    <p>E-Mail Support <span class="text-contrast">JA</span></p>
                    <p>Telefon Support <span class="text-contrast">JA</span></p>
                    <p>10% Mitarbeiterabweichung<br> <span class="text-contrast">JA</span></p>
                    <p class="text-center pt-4"><a href="./kontakt.html" class="btn">Kontaktieren
                        Sie uns</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
EOD;

	return $shortcode_output;

}

add_shortcode( 'mini_slider', 'mini_slider_shortcode_tslider' );








