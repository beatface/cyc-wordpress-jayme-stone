<?php
/*
* Template name: Workshop
*/
get_header();
?>
    <header id="header-dev">
      <div class="header-content">
        <div class="header-content-inner wow fadeInUp" data-wow-delay=".05s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
          <div class="intro-text">
              <h2 class="intro-heading">How to Book Yourself Without an Agent</h2>
              <div class="btn bg-md-purple post-button anchor-btn">
                <a href="#workshop-anchor">SIGN UP FOR THE WORKSHOP</a>
              </div>
          </div>
        </div>
      </div>
    </header>

    <section id="about" class="row">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 wow fadeInUp" data-wow-delay=".05s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h2 class="text-purple-primary">How to Book Yourself Without an Agent</h2>
            <div class="row">
              <div class="col-sm-12 no-left-pad">
                <p class="text-purple-primary">
                  Want to book better gigs, get super organized, and compose a sustainable
                  career? Then this two-hour workshop is designed for you—the independent
                  musician who wants to make the music they love, and a living at it too.
                </p>
                <p class="text-purple-primary">
                  Perhaps the fantasy of playing all day while someone else takes
                  care of your career has worn off. Maybe you're disillusioned with
                  your agent. Or you've tried being a do-it-yourselfer and wondered
                  if you were missing something huge. You probably were.
                </p>
                <p class="text-purple-primary">
                  This workshop will take a disarmingly honest look at what it takes
                  to propel your career forward and give you the tools and strategies
                  to start right now.
                </p>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div id="workshop-bullets" class="row text-white">
        <div class="col-md-7 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
          <div class="wow fadeInUp" data-wow-delay=".05s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h3 class="no-top-margin">Here’s an overview of the program:</h3>
            <ul>
              <li>Finding your niche (or inventing one)</li>
              <li>Presenters: five types, six phases</li>
              <li>Booking seasons, timelines</li>
              <li>Building a badass database</li>
              <li>Supercharging your workflow with powerful online tools</li>
              <li>Smart tour strategy</li>
              <li>Writing an effective pitch</li>
              <li>Follow-up secrets</li>
              <li>Negotiating fees</li>
              <li id="workshop-anchor">Writing contracts</li>
            </ul>
          </div>
        </div>
      </div>
    </section>




    <section id="workshop-details" class="row">
      <div class="container text-purple-primary text-center">
        <?php the_field('workshop_details'); ?>
      </div>
    </section>




    <section id="workshop-buttons-section" class="row">
      <div id="bg-stripes" class="text-white text-center col-xs-12">
        <h2>Can't make these workshops?</h2>
        <div class="btn bg-purple-primary post-button anchor-btn">
            <a href="#subscribeModal" data-toggle="modal" class="text-purple-primary">SIGN ME UP FOR THE NEWSLETTER</a>
        </div>
        <h2>Have you heard about the online course?</h2>
        <div class="row">
          <a href="/" class="btn bg-purple-primary post-button">TAKE ME THERE</a>
        </div>
      </div>
    </section>

    <section id="side-photo" class="row">
      <div class="container">
        <div class="col-md-6 text-purple-primary">
          <p>
            Banjoist, composer, and instigator Jayme Stone makes music inspired
            by sounds from around the world. His six albums defy and honor the banjo’s
            long role in the world's music—bridging folk, jazz, and chamber music. Stone
            has won two Juno and three Canadian Folk Music Awards and has performed at
            Lincoln Center, Kennedy Center, Purdue University, Tufts University,
            Berklee College of Music, Bumbershoot, Montréal Jazz Festival, Lotus World Music Festival,
            Chicago World Music Festival, Vancouver Folk Festival, Celtic Connections, and more.
            Stone is a passionate educator, producer, and collaborator.
          </p>
        </div>
        <div class="col-md-6" id="side-image-workshop-div">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/public/img/large/Jayme_08.png" alt="Jayme Stone">
        </div>
      </div>
    </section>

    <section id="what-people-said" class="row">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center text-purple-primary">
            <h3>
              What People Say About Jayme Stone
              <br>
              & The Workshop That Started It All
            </h3>
          </div>
        </div>
      </div>
    </section>

    <section id="testimonials" class="row text-center">
      <div class="row">
        <div class="col-sm-4 bg-teal-primary text-purple-primary">
          <div class="quote-container">
            <p class="wow fadeInUp quote" data-wow-delay=".05s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              “Jayme Stone is not a human being, he’s a laser beam. A pure, focused
              stream of creativity, positivity, and productivity. Do not let the fact
              that he plays banjo dissuade you, he’s the real deal.”
            </p>
            <div class="quote-bottom">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/public/img/testimonials/Kyle_James_Hauser.jpeg" class="quote-img">
              <p class="name">KYLE JAMES HAUSER</p>
              <p>Musician</p>
            </div>
          </div>
        </div>
        <div class="col-sm-8 bg-md-purple text-white">
          <div class="quote-container">
            <p class="wow fadeInUp quote" data-wow-delay=".05s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              “Jayme Stone’s workshop is the real deal. No platitudes or clichés about
              the music business; just shrewd insight into building a touring career. If
              you aren’t afraid of the truth or hard work, this workshop will move you
              forward. Most importantly, Jayme’s workshop gave me permission to embrace
              the truth about who I am musically; and the means to frame a career around that truth.”
            </p>
            <div class="quote-bottom">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/public/img/testimonials/John_Bullard.jpg" class="quote-img">
              <p class="name">JOHN BULLARD</p>
              <p>Musician</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row bg-orange">
        <div class="col-sm-8 col-sm-offset-2 text-purple-primary tall-div">
          <div class="quote-container">
            <p class="wow fadeInUp quote" data-wow-delay=".05s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              “Jayme Stone’s ‘How to Book Yourself Without an Agent’ is a must-do for
              any artist who wants to get their act on stages and into festivals across
              North America. So much info is geared toward the ‘Sonicbids beginner
              artists’ out there, it’s hard for mid-level artists to find mentoring—but
              Jayme’s workshop is perfect for the pro artist who’s ready for the next level.
              Jayme is full of useful, creative, non-cliché info. Bring a thick pad of paper,
              you’ll want to take lots of notes!”
            </p>
            <div class="quote-bottom">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/public/img/testimonials/Wendy_Lands.jpg" class="quote-img">
              <p class="name">WENDY LANDS</p>
              <p>Music Presenter</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 bg-md-purple text-white">
          <div class="quote-container">
            <p class="wow fadeInUp quote" data-wow-delay=".05s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              “Jayme was very organized and
              clear, and covered pretty much everything that an independent musician
              needs to know in order to successfully book tours. I had a lot of doubts
              cleared up, and am ready to hit the emails again with renewed energy!”
            </p>
            <div class="quote-bottom">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/public/img/testimonials/Jessica_Deutsch.jpg" class="quote-img">
              <p class="name">JESSICA DEUTSCH</p>
              <p>Musician</p>
            </div>
          </div>
        </div>
        <div class="col-sm-8 text-purple-primary">
          <div class="quote-container">
            <p class="wow fadeInUp quote" data-wow-delay=".05s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              “Jayme is the type of musician and businessman that sets an example
              for the rest of us. You know he’s onto something when you walk into a
              workshop and the bulk of the attendees are professional musicians.
              Everybody in the room walked away with useful information, from the
              hobbyists to the nationally touring professionals.”
            </p>
            <div class="quote-bottom">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/public/img/testimonials/Justin_Hoffenberg.jpg" class="quote-img">
              <p class="name">JUSTIN HOFFENBERG</p>
              <p>Musician</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8 bg-teal-primary text-purple-primary short-div">
          <div class="quote-container">
            <p class="wow fadeInUp quote" data-wow-delay=".05s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              “I take back what I said about Jayme Stone.”
            </p>
            <div class="quote-bottom">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/public/img/testimonials/Steve_Martin.jpg" class="quote-img">
              <p class="name">STEVE MARTIN</p>
              <p>Steve Martin</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4 bg-orange text-purple-primary short-div">
          <div class="quote-container">
            <p class="wow fadeInUp quote" data-wow-delay=".05s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              “An artist-revolutionary for our time.”
            </p>
            <div class="quote-bottom">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/public/img/testimonials/Mark_Rabideau.jpg" class="quote-img">
              <p class="name">MARK RABIDEAU</p>
              <p>Director of 21CM at Depauw University</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 text-purple-primary short-div">
          <div class="quote-container">
            <p class="wow fadeInUp quote" data-wow-delay=".05s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              “The most organized musician on the planet.”
            </p>
            <div class="quote-bottom">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/public/img/testimonials/Lance_Walker.jpg" class="quote-img">
              <p class="name">LANCE WALKER</p>
              <p>Music Presenter</p>
            </div>
          </div>
        </div>
        <div class="col-sm-8 bg-blue text-white">
          <div class="quote-container">
            <p class="wow fadeInUp quote" data-wow-delay=".05s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              “Attending Jayme Stone’s recent seminar on booking yourself was well
              worth it. I found Jayme to be an honest, genuine and professional
              presenter. He has walked the road we are venturing down and shared
              his story and success openly. If a banjo player with eclectic tastes
              can carve out a career in this business, there is hope for all of us.”
            </p>
            <div class="quote-bottom">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/public/img/testimonials/Lee_Palmer.jpg" class="quote-img">
              <p class="name">LEE PALMER</p>
              <p>Musician</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8 bg-md-purple text-white">
          <div class="quote-container">
            <p class="wow fadeInUp quote" data-wow-delay=".05s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              “Jayme is professional, energetic, and interesting to listen to. With
              his real life experiences, he helped shed light on parts of the industry
              that once seemed inaccessible. He breaks down the invisible walls we put
              up for ourselves and logically puts things into perspective to make you
              realize a career in music is possible. His insights took my game to the next level.”
            </p>
            <div class="quote-bottom">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/public/img/testimonials/Angele_Menard.jpg" class="quote-img">
              <p class="name">ANGELE MENARD</p>
              <p>Musician</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4 bg-teal-primary text-purple-primary">
          <div class="quote-container">
            <p class="wow fadeInUp quote" data-wow-delay=".05s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              “For performing artists at any level: this is masterful and powerful
              stuff from someone who has boldly traversed the field of music out there.
              I’m looking forward to his extended online program.”
            </p>
            <div class="quote-bottom">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/public/img/testimonials/George_Koller.jpg" class="quote-img">
              <p class="name">GEORGE KOLLER</p>
              <p>Musician</p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <div id="subscribeModal" tabindex="-1" role="dialog" aria-hidden="true" class="portfolio-modal modal fade">
      <div class="modal-content">
        <div data-dismiss="modal" class="close-modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="modal-body">
              <?php the_field('sign_up_email_form'); ?>
              <br><br>
            </div>
          </div>
        </div>
      </div>
    </div>


<?php get_footer(); ?>
