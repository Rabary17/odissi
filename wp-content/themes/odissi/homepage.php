<?php

/*
 * Template Name: Homepage
 *
 * 
 */

get_header(); ?> 



<main>

   <section class="px-4  text-center homepage" style="background-image:url('<?php echo get_field('background')['url']; ?>')">
      <h1 class="display-5 fw-bold"><?php echo get_field('titre'); ?></h1>
      <div class="col-lg-6 mx-auto">
         <p class="lead mb-4"><?php echo get_field('description'); ?></p>
         <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button type="button" class="btn btn-primary btn-lg px-4 gap-3" href="<?php echo get_field('lien'); ?>"><?php echo get_field('bouton_texte'); ?></button>
         </div>
      </div>
   </section>
   <div class="border-diagonal">
       <div class="first">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                <polygon points="100 0 100 10 0 10" />
            </svg>
        </div>
        <div class="last">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                <polygon points="100 0 100 10 0 10" />
            </svg>
        </div>
</div>
   <!-- little title -->
   <section class="py-5 text-center container">
      <div class="row py-lg-5">
         <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Album example</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
         </div>
      </div>
   </section>
   <section class="container px-4 py-5" id="hanging-icons">
      <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
         <div class="col d-flex align-items-start">
            <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
            </div>
            <div>
                <i class="bi bi-archive-fill"></i>
               <h2>OpenType features
                Variable fonts
                </h2>
               <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            </div>
         </div>
         <div class="col d-flex align-items-start">
            <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
            </div>
            <div>
                <i class="bi bi-pencil-fill"></i>
               <h2>Design with real data</h2>
               <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            </div>
         </div>
         <div class="col d-flex align-items-start">
            <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
            </div>
            <div>
                <i class="bi bi-brush-fill"></i>
               <h2>Fastest way to take action</h2>
               <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            </div>
         </div>
      </div>
   </section>


   <!-- video -->
<section class="container col-xxl-8 px-4 py-5">
<iframe width="900" height="506" src="https://www.youtube.com/embed/f7V5D2zxfjI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</section>

   <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="http://odissi.test/wp-content/uploads/2022/03/a-beautiful-young-asian-woman-holding-and-using-di-2022-03-05-19-19-04-utc-1-min.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Lightning fast prototyping</h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
        </div>
      </div>
    </div>
  </div>

  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Fastest way to organize</h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <div class="d-flex w-100 gap-2">
          <label for="newsletter1" class="visually-hidden">Email address</label>
          <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
          <button class="btn btn-primary" type="button">Subscribe</button>
        <div id="pwm-inline-icon-46656" class="pwm-field-icon" style="position: absolute !important; width: 18px !important; height: 18px !important; min-height: 0px !important; min-width: 0px !important; z-index: 2147483645 !important; box-shadow: none !important; box-sizing: content-box !important; background: none !important; border: none !important; padding: 0px !important; cursor: pointer !important; outline: none !important; margin-top: 10px; margin-left: 291.637px;"><svg style="display: inline-block !important; width: 16px !important; height: 16px !important; fill: rgb(230, 0, 23) !important; margin-top: 0.5px !important; position: absolute !important; top: 0px !important; left: 0px !important;" viewBox="0 0 40 64"><g><path d="m20,28.12a33.78,33.78 0 0 1 13.36,2.74a22.18,22.18 0 0 1 0.64,5.32c0,9.43 -5.66,17.81 -14,20.94c-8.34,-3.13 -14,-11.51 -14,-20.94a22.2,22.2 0 0 1 0.64,-5.32a33.78,33.78 0 0 1 13.36,-2.74m0,-28.12c-8.82,0 -14,7.36 -14,16.41l0,5.16c2,-1.2 2,-1.49 5,-2.08l0,-3.08c0,-6.21 2.9,-11.41 8.81,-11.41l0.19,0c6.6,0 9,4.77 9,11.41l0,3.08c3,0.58 3,0.88 5,2.08l0,-5.16c0,-9 -5.18,-16.41 -14,-16.41l0,0zm0,22c-6.39,0 -12.77,0.67 -18.47,4a31.6,31.6 0 0 0 -1.53,9.74c0,13.64 8.52,25 20,28.26c11.48,-3.27 20,-14.63 20,-28.26a31.66,31.66 0 0 0 -1.54,-9.77c-5.69,-3.3 -12.08,-4 -18.47,-4l0,0l0.01,0.03z"></path><path d="m21.23,39.5a2.81,2.81 0 0 0 1.77,-2.59a2.94,2.94 0 0 0 -3,-2.93a3,3 0 0 0 -3,3a2.66,2.66 0 0 0 1.77,2.48l-1.77,4.54l6,0l-1.77,-4.5z"></path></g></svg></div></div>
        </div>
      </div>
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="http://odissi.test/wp-content/uploads/2022/03/laptop-on-a-desk-2021-09-02-05-59-42-utc_1-min-removebg-preview-1.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      
    </div>
  </div>

  <section class="py-5 text-center container">
      <div class="row py-lg-5">
         <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Partner</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
         </div>
      </div>
   </section>

</main>











<?php get_footer(); ?> 

