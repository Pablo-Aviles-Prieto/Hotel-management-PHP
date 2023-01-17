@extends('layout')


  @section('head')
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Miranda by Pablo Avilés</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles/rooms-details.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <script src="scripts/mobile-menu.js" defer></script>
    <script src="scripts/slider-rooms-details.js" type="module" defer></script>
  @endsection

  @section('header')
    @parent
  @endsection

  @section('content_page')
    <section id="description-section">
      <div class="description-container">
        <p class="description-container--legend">The Ultimate Luxury</p>
        <h3 class="description-container--title">Ultimate Room</h3>
        <div class="description-container--info-card">
          <p>Home | <span>Room Details</span></p>
        </div>
      </div>
    </section>
    <section id="details-section">
      <div class="details-container">
        <div class="details-container-title">
          <div class="details-container-title-room">
            <p>Double Bed</p>
            <h3>Luxury Double Bed</h3>
          </div>
          <div class="details-container-title-price">
            $354<span>/Night</span>
          </div>
        </div>
        <div class="details-container-img">
          <img src="./assets/hotel-rooms/room3.jpg" alt="Hotel room" />
        </div>
        <div class="details-container-availability">
          <p>Check Availability</p>
          <form class="details-container-availability-form">
            <div class="details-container-availability-form-block">
              <label for="check-in-input">Check In</label>
              <input id="check-in-input" type="date" />
            </div>
            <div class="details-container-availability-form-block">
              <label for="check-out-input">Check Out</label>
              <input id="check-out-input" type="date" />
            </div>
            <button type="submit">Check Availability</button>
          </form>
        </div>
        <div class="details-container-info">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum. Sed ut
            perspiciatis unde omnis iste natus error sit voluptatem accusantium
            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
            inventore veritatis et quasi architecto beatae vitae dicta sunt
            explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur
            aut odit aut fugit, sed quia consequuntur magni dolores eos qui
            ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
            dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
            quia non numquam eius modi tempora incidunt ut labore et dolore
            magnam aliquam quaerat voluptatem.
          </p>
        </div>
      </div>
    </section>
    <section id="amenities-section">
      <div class="amenities-section--width">
        <p>Amenities</p>
        <div class="amenities-section-grid">
          <div class="amenities-section-grid-card">
            <object
              data="assets/commodities/air-conditioner.svg"
              width="20"
            ></object>
            <p>Air conditioner</p>
          </div>
          <div class="amenities-section-grid-card">
            <object data="assets/commodities/wifi.svg" width="20"></object>
            <p>High speed Wifi</p>
          </div>
          <div class="amenities-section-grid-card">
            <object data="assets/commodities/breakfast.svg" width="20"></object>
            <p>Breakfast</p>
          </div>
          <div class="amenities-section-grid-card">
            <object data="assets/commodities/kitchen.svg" width="20"></object>
            <p>Kitchen</p>
          </div>
          <div class="amenities-section-grid-card">
            <object data="assets/commodities/cleaning.svg" width="20"></object>
            <p>Cleaning</p>
          </div>
          <div class="amenities-section-grid-card">
            <object data="assets/commodities/shower.svg" width="20"></object>
            <p>Shower</p>
          </div>
          <div class="amenities-section-grid-card">
            <object data="assets/commodities/grocery.svg" width="20"></object>
            <p>Grocery</p>
          </div>
          <div class="amenities-section-grid-card">
            <object data="assets/commodities/bed.svg" width="20"></object>
            <p>Single bed</p>
          </div>
          <div class="amenities-section-grid-card">
            <object data="assets/commodities/shop.svg" width="20"></object>
            <p>Shop near</p>
          </div>
          <div class="amenities-section-grid-card">
            <object data="assets/commodities/towel.svg" width="20"></object>
            <p>Towels</p>
          </div>
          <div class="amenities-section-grid-card">
            <object data="assets/commodities/support.svg" width="20"></object>
            <p>24/7 Online Support</p>
          </div>
          <div class="amenities-section-grid-card">
            <object
              data="assets/commodities/key-locker.svg"
              width="20"
            ></object>
            <p>Strong Locker</p>
          </div>
          <div class="amenities-section-grid-card">
            <object
              data="assets/commodities/smart-security.svg"
              width="20"
            ></object>
            <p>Smart Security</p>
          </div>
          <div class="amenities-section-grid-card">
            <object
              data="assets/commodities/engineer-expert.svg"
              width="20"
            ></object>
            <p>Expert Team</p>
          </div>
        </div>
      </div>
    </section>
    <section id="founder-section">
      <div class="founder-container">
        <div class="founder-container-avatar--transform">
          <div class="founder-container-avatar">
            <img
              src="./assets/generic-imgs/generic-cartoon-woman.jpg"
              alt="Generic cartoon woman image"
            />
            <div class="founder-container-avatar-check">
              <object data="assets/icons/check.svg" width="20"></object>
            </div>
          </div>
        </div>
        <div class="founder-container-title">
          <h3>Rosalina D. William</h3>
          <p>Founder, Qux Co.</p>
        </div>
        <div class="founder-container-description">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore.
        </div>
      </div>
    </section>
    <section id="cancellation-section">
      <div class="cancellation-container">
        <h3>Cancellation</h3>
        <p>
          Phasellus volutpat neque a tellus venenatis, a euismod augue
          facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus.
          Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to
          get a full refund.
        </p>
      </div>
    </section>
    <section id="related-section">
      <div class="related-container">
        <h3 class="related-container-title">Related Rooms</h3>
        <div class="swiper mySwiperDetails">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="rooms-card">
                <img src="./assets/hotel-rooms/room1.jpg" />
                <div class="rooms-card-top">
                  <object data="assets/icons/bed.svg" width="18"></object>
                  <object data="assets/icons/wifi.svg" width="18"></object>
                  <object data="assets/icons/car.svg" width="18"></object>
                  <object
                    data="assets/icons/air-conditioner.svg"
                    width="18"
                  ></object>
                  <object data="assets/icons/gym.svg" width="18"></object>
                  <object
                    data="assets/icons/smoke-free.svg"
                    width="18"
                  ></object>
                  <object data="assets/icons/cocktail.svg" width="18"></object>
                </div>
                <div class="rooms-card-bottom">
                  <div class="rooms-card-bottom--flex">
                    <div class="rooms-card-bottom-title">
                      Minimal Duplex Room
                    </div>
                    <div class="rooms-card-bottom-content">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Eos, amet alias velit quia.
                    </div>
                  </div>
                  <div class="rooms-card-bottom-price">
                    $345/Night<span>Booking Now</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="rooms-card">
                <img src="./assets/hotel-rooms/room2.jpg" />
                <div class="rooms-card-top">
                  <object data="assets/icons/bed.svg" width="18"></object>
                  <object data="assets/icons/wifi.svg" width="18"></object>
                  <object data="assets/icons/car.svg" width="18"></object>
                  <object
                    data="assets/icons/air-conditioner.svg"
                    width="18"
                  ></object>
                  <object data="assets/icons/gym.svg" width="18"></object>
                  <object
                    data="assets/icons/smoke-free.svg"
                    width="18"
                  ></object>
                  <object data="assets/icons/cocktail.svg" width="18"></object>
                </div>
                <div class="rooms-card-bottom">
                  <div class="rooms-card-bottom--flex">
                    <div class="rooms-card-bottom-title">
                      Minimal Duplex Room
                    </div>
                    <div class="rooms-card-bottom-content">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Eos, amet alias velit quia.
                    </div>
                  </div>
                  <div class="rooms-card-bottom-price">
                    $345/Night<span>Booking Now</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </section>
  @endsection

  @section('footer')
    @parent
  @endsection