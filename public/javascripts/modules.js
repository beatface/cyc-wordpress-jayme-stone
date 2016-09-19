$(document).ready(function() {

  var moduleSection = $("#modules");
  var moduleDetails = $("#module-details-target");
  var template_url = $("#template_url").html();

  $(moduleSection).mouseover(function (e) {
    if ( $(e.target).hasClass("row-1") ) {
      $(".module-row").removeClass("bg-orange");
      $(".module-details-div-1").addClass("bg-orange");
      $(moduleDetails).html(
        `<div class="row">
          <h3 class='text-white'>VISIONING & RECKONING</h3>
        </div>
        <div class="row">
          <img src="${template_url}/public/img/logos/1-Vision.png" class="module-logo">
        </div>
        <div class="row">
          <ul>
            <li>brazenly assessing your current situation</li>
            <li>honing your artistic vision</li>
            <li>balancing music and business<br>(the high-wire act)</li>
            <li>planning for the long-term</li>
            <li>how to be a cultural entrepreneur</li>
            <br>
          </ul>
        </div>`

      )
    } else if ( $(e.target).hasClass("row-2") ) {
      $(".module-row").removeClass("bg-orange");
      $(".module-details-div-2").addClass("bg-orange");
      $(moduleDetails).html(
        `<div class="row">
          <h3 class='text-white'>BRANDING & STORY</h3>
        </div>
        <div class="row">
            <img src="${template_url}/public/img/logos/2-Story.png" class="module-logo">
        </div>
        <div class="row">
          <ul>
            <li>finding your niche (or inventing one)</li>
            <li>communicating visually</li>
            <li>how to ditch your bio</li>
            <li>positioning yourself for success</li>
            <br>
          </ul>
        </div>`
      )
    } else if ( $(e.target).hasClass("row-3") ) {
      $(".module-row").removeClass("bg-orange");
      $(".module-details-div-3").addClass("bg-orange");
      $(moduleDetails).html(
        `<div class="row">
          <h3 class='text-white'>RESEARCH & ORGANIZATION</h3>
        </div>
        <div class="row">
            <img src="${template_url}/public/img/logos/3-Research.png" class="module-logo">
        </div>
        <div class="row">
          <ul>
            <li>improving your digital hygiene</li>
            <li>supercharging your workflow</li>
            <li>building a badass database</li>
            <li>leveraging new online tools, platforms, and apps</li>
            <li>the art of prospecting</li>
            <br>
          </ul>
        </div>`
      )
    } else if ( $(e.target).hasClass("row-4") ) {
      $(".module-row").removeClass("bg-orange");
      $(".module-details-div-4").addClass("bg-orange");
      $(moduleDetails).html(
        `<div class="row">
          <h3 class='text-white'>HOW TO BOOK YOURSELF<br>WITHOUT AN AGENT</h3>
        </div>
        <div class="row">
            <img src="${template_url}/public/img/logos/4-Booking.png" class="module-logo">
        </div>
        <div class="row">
          <ul>
            <li>crafting a pitch</li>
            <li>follow-up secrets</li>
            <li>understanding timelines and booking seasons</li>
            <li>negotiating fees—the math and the attitude</li>
            <li>writing airtight contracts</li>
            <br>
          </ul>
        </div>`
      )
    } else if ( $(e.target).hasClass("row-5") ) {
      $(".module-row").removeClass("bg-orange");
      $(".module-details-div-5").addClass("bg-orange");
      $(moduleDetails).html(
        `<div class="row">
          <h3 class='text-white'>PUBLICITY & MARKETING</h3>
        </div>
        <div class="row">
            <img src="${template_url}/public/img/logos/5-Marketing.png" class="module-logo">
        </div>
        <div class="row">
          <ul>
            <li>writing a press release that sings</li>
            <li>getting social media savvy</li>
            <li>understanding the power of the grassroots</li>
            <li>growing your audience (and your email list)</li>
            <li>email marketing 2.0—opt-ins, segmentation, open rates</li>
            <br>
          </ul>
        </div>`
      )
    } else if ( $(e.target).hasClass("row-6") ) {
      $(".module-row").removeClass("bg-orange");
      $(".module-details-div-6").addClass("bg-orange");
      $(moduleDetails).html(
        `<div class="row">
          <h3 class='text-white'>PERFORMING & TOURING</h3>
        </div>
        <div class="row">
            <img src="${template_url}/public/img/logos/6-Performing.png" class="module-logo">
        </div>
        <div class="row">
          <ul>
            <li>smart strategies for terrific tours</li>
            <li>the inside scoop on tour logistics</li>
            <li>when to spend big and when to save </li>
            <li>intelligent show advancing</li>
            <li>astute accounting</li>
            <br>
          </ul>
        </div>`
      )
    } else if ( $(e.target).hasClass("row-7") ) {
      $(".module-row").removeClass("bg-orange");
      $(".module-details-div-7").addClass("bg-orange");
      $(moduleDetails).html(
        `<div class="row">
          <h3 class='text-white'>CASE STUDIES & INTERVIEWS</h3>
        </div>
        <div class="row">
            <img src="${template_url}/public/img/logos/7-Interview.png" class="module-logo">
        </div>
        <div class="row">
          <ul>
            <li>show talk with successful publicists</li>
            <li>singular stories from standout DIY musicians</li>
            <li>innovative ideas at the forefront of technology and entrepreneurship</li>
            <li>a reality check from music presenters and promoters</li>
            <br>
          </ul>
        </div>`
      )
    }
  })

});
