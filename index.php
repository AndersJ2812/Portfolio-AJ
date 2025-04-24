<?php get_header () ?>
<?php if (have_posts()): ?>
  <?php while (have_posts()): the_post(); ?>


        <?php 
        $heroPicture = get_field("hero_picture");
        $hvemErJeg = get_field("hvem-er-jeg");
        $MitNavn = get_field("anders-jorgensen");
        $Uddannelse = get_field("uddannelse");
        $GitHub = get_field("github");
        $LinkedIn = get_field("linkedin");
        $CV = get_field("mit_cv");
        $LinkedInLink = get_field("linkedin_link");
        $GitHubLink = get_field("github_link");
        $CVLink = get_field("cv_link");
        $OmMigTekst = get_field("om_mig_tekst");
        $DesignTitel = get_field("design_titel");
        $UdviklingTitel = get_field("udvikling_titel");
        $VedligeholdTitel = get_field("vedligehold_titel");
        $DesignTekst = get_field("design_tekst");
        $UdviklingTekst = get_field("udvikling_tekst");
        $VedligeholdTekst = get_field("vedligehold_tekst");
        $HtmlTitel = get_field("html_titel");
        $CssTitel = get_field("css_titel");
        $JavascriptTitel = get_field("javascript_titel");
        $FigmaTitel = get_field("figma_titel");
        $GitHubTitel = get_field("github_titel");
        $PhotoshopTitel = get_field("photoshop_titel");
        $InDesignTitel = get_field("indesign_titel");
        $IllustratorTitel = get_field("illustrator_titel");
        $PremiereProTitel = get_field("premiere_pro_titel");
        $HtmlPicture = get_field("html_picture");
        $CssPicture = get_field("css_picture");
        $JavascriptPicture = get_field("javascript_picture");
        $FigmaPicture = get_field("figma_picture");
        $GitHubPicture = get_field("github_picture");
        $PhotoshopPicture = get_field("photoshop_picture");
        $InDesignPicture = get_field("indesign_picture");
        $IllustratorPicture = get_field("illustrator_picture");
        $PremiereProPicture = get_field("premiere_pro_picture");
        $VueTitel = get_field("vue_titel");
        $WordpressTitel = get_field("wordpress_titel");
        $VuePicture = get_field("vue_picture");
        $WordpressPicture = get_field("wordpress_picture");
        $DanskTitel = get_field("dansk_titel");
        $EngelskTitel = get_field("engelsk_titel");
        $DanskPicture = get_field("dansk_picture");
        $EngelskPicture = get_field("engelsk_picture");
        $AjLogo = get_field("aj_logo");
        $AjSignatur = get_field("aj_signatur");
        $MiniMe = get_field("mini_me");
        $BeatMe = get_field("beat_me");
        $CvVideo = get_field("cv_video");
        $PromoVideo = get_field("promo_video");
?>

<section class="hero">
    <div class="hero-content">
      <h1><?php echo $hvemErJeg?></h1>
      <h2><?php echo $MitNavn?></h2>
      <h3> <?php echo $Uddannelse?></h3>
      <div class="social-icons">
        <div>
          <a href="<?php echo $LinkedInLink?>" target="_blank" class="linkedin-knap"><?php echo $LinkedIn?></a>
          <a href="<?php echo $GitHubLink?>" target="_blank" class="github-knap"><?php echo $GitHub?></a>
          <a href="<?php echo $CVLink?>" target="_blank" class="cv-knap"><?php echo $CV?></a>
        </div>
      </div>
    </div>
    <div class="hero-image">
        <img src="<?php echo esc_url($heroPicture['url']); ?>" alt="Hero Image">
    </div>
  </section>

  <section class="om-mig" id="om-mig-sektionen">
    <div class="om-mig-inner">
      <h2>OM MIG</h2>
      <p><?php echo $OmMigTekst?></p>
    </div>

  </section>

  <section class="services">
    <div class="service">
      <h3><?php echo $DesignTitel?></h3>
      <p><?php echo $DesignTekst?></p>
    </div>
    <div class="service">
      <h3><?php echo $UdviklingTitel?></h3>
      <p><?php echo $UdviklingTekst?></p>
    </div>
    <div class="service">
      <h3><?php echo $VedligeholdTitel?></h3>
      <p><?php echo $VedligeholdTekst?></p>
    </div>
  </section>

  <section class="evner">
    <h2 class="overskrift-center">ERFARING</h2>

    <div class="evner-sub">

      <!--copy 9 gange efter-->
      <div class="evner-item">
        <img src="<?php echo esc_url($HtmlPicture['url']); ?>" alt="Hero Image">
        <h5><?php echo $HtmlTitel ?></h5>
      </div>

      <div class="evner-item">
      <img src="<?php echo esc_url($CssPicture['url']); ?>" alt="">
        <h5><?php echo $CssTitel?></h5>
      </div>

      <div class="evner-item">
      <img src="<?php echo esc_url($CssPicture['url']); ?>" alt="">
        <h5><?php echo $JavascriptTitel?></h5>
      </div>

      <div class="evner-item">
      <img src="<?php echo esc_url($FigmaPicture['url']); ?>" alt="">
        <h5><?php echo $FigmaTitel?></h5>
      </div>

      <div class="evner-item">
      <img src="<?php echo esc_url($GitHubPicture['url']); ?>" alt="">
        <h5><?php echo $GitHubTitel?></h5>
      </div>

      <div class="evner-item">
      <img src="<?php echo esc_url($PhotoshopPicture['url']); ?>" alt="">
        <h5><?php echo $PhotoshopTitel?></h5>
      </div>

      <div class="evner-item">
      <img src="<?php echo esc_url($InDesignPicture['url']); ?>" alt="">
        <h5><?php echo $InDesignTitel?></h5>

      </div>
      <div class="evner-item">
      <img src="<?php echo esc_url($IllustratorPicture['url']); ?>" alt="">
        <h5><?php echo $IllustratorTitel?></h5>

      </div>
      <div class="evner-item">
      <img src="<?php echo esc_url($PremiereProPicture['url']); ?>" alt="">
        <h5><?php echo $PremiereProTitel?></h5>
      </div>
      <!--copy slut-->
    </div>
  </section>

  <section class="laering">
    <h2>LÆRING</h2>
    <div class="laering-liste">
    </div>
    <div class="laering-sub">
      <div class="laering-item">
      <img src="<?php echo esc_url($VuePicture['url']); ?>" alt="">
        <h5><?php echo $VueTitel?></h5>
      </div>
      <div class="laering-item">
      <img src="<?php echo esc_url($WordpressPicture['url']); ?>" alt="">
        <h5><?php echo $WordpressTitel?></h5>
      </div>
  </section>

  <section class="sprog">
    <h2>SPROG</h2>
    <div class="sprog-liste">
    </div>
    <div class="sprog-sub">
      <div class="sprog-item">
      <img src="<?php echo esc_url($DanskPicture['url']); ?>" alt="">
        <h5><?php echo $DanskTitel?></h5>
      </div>
      <div class="sprog-item">
      <img src="<?php echo esc_url($EngelskPicture['url']); ?>" alt="">
        <h5><?php echo $EngelskTitel?></h5></h5>
      </div>
  </section>

  <section class="portfolio" id="portfolio-sektionen">
    <h2>PORTFOLIO</h2>
    <div class="portfolio_boxes">
      <div class="category_content_box_one">
      <img src="<?php echo esc_url($AjLogo['url']); ?>" alt="">
      </div>

      <div class="category_content_box_two">
      <img src="<?php echo esc_url($AjSignatur['url']); ?>" alt="">
      </div>

      <div class="category_content_box_three">
      <img src="<?php echo esc_url($MiniMe['url']); ?>" alt="">
      </div>

      <div class="category_content_box_four">
      <img src="<?php echo esc_url($BeatMe['url']); ?>" alt="">
      </div>

      <div class="category_content_box_five">
        
      <iframe width="560" height="315" src="<?php echo esc_url(get_field('cv_video')); ?>" alt=""></iframe>
      </div>

      <div class="category_content_box_six">
      <iframe width="560" height="315" src="<?php echo esc_url(get_field('promo_video')); ?>" alt=""></iframe>

      </div>

    </div>
  </section>


  <section class="kontakt-sektion" id="kontakt-sektionen">
    <div class="kontakt-container">
      <h2>KONTAKT</h2>
      <p class="beskrivelse">Har du spørgsmål? Så udfyld formularen nedenfor og jeg vil se frem til at besvare den.</p>
      <form class="kontakt-formular">
        <div class="form-gruppe">
          <label for="navn">INDTAST NAVN*</label>
          <input type="text" id="navn" name="navn">
        </div>
        <div class="form-gruppe">
          <label for="email">INDTAST DIN EMAIL*</label>
          <input type="email" id="email" name="email">
        </div>
        <div class="form-gruppe">
          <label for="telefon">TLF. NUMMER</label>
          <input type="tel" id="telefon" name="telefon">
        </div>
        <div class="form-gruppe besked-gruppe">
          <label for="besked">DIN BESKED*</label>
          <textarea id="besked" name="besked" rows="5"></textarea>
        </div>
        <button type="submit" class="send-knap">SEND</button>
      </form>
    </div>
  </section>

        <?php endwhile?>
    <?php endif?>
<?php get_footer () ?>