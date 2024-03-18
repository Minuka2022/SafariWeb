<!DOCTYPE html>
<html>
  <!-- Mirrored from html.waituk.com/entrada/tour-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Sep 2023 16:24:24 GMT -->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Entrada</title>
    <!-- favion -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="img/favicon-16x16.png"
    />
    <!-- link to font awesome -->
    <link
      media="all"
      rel="stylesheet"
      href="vendors/font-awesome/css/font-awesome.css"
    />
    <!-- link to custom icomoon fonts -->
    <link
      rel="stylesheet"
      type="text/css"
      href="css/fonts/icomoon/icomoon.css"
    />
    <!-- link to wow js animation -->
    <link media="all" rel="stylesheet" href="vendors/animate/animate.css" />
    <!-- include bootstrap css -->
    <link media="all" rel="stylesheet" href="css/bootstrap.css" />
    <!-- include owl css -->
    <link
      media="all"
      rel="stylesheet"
      href="vendors/owl-carousel/owl.carousel.css"
    />
    <link
      media="all"
      rel="stylesheet"
      href="vendors/owl-carousel/owl.theme.css"
    />
    <!-- include fancybox css -->
    <link
      media="all"
      rel="stylesheet"
      href="vendors/fancybox/jquery.fancybox.css"
    />
    <!-- include main css -->
    <link media="all" rel="stylesheet" href="css/main.css" />
  </head>
  <body class="default-page">
    <div class="preloader" id="pageLoad">
      <div class="holder">
        <div class="coffee_cup"></div>
      </div>
    </div>
    <!-- main wrapper -->
    <div id="wrapper">
      <div class="page-wrapper">
        <header id="header"></header>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
          $(document).ready(function () {
            $("#header").load("navbar.html");
            $("#footer").load("footer.html");
          });
        </script>
        <!-- main container -->
        <main id="main">
          <!-- main tour information -->
          <section class="container-fluid trip-info">
            <div class="same-height two-columns row">
              <div class="height col-md-6">
                <!-- top image slideshow -->
                <div id="tour-slide">
                  <div class="slide">
                    <div class="bg-stretch">
                      <img
                        src="img/generic/img-17.jpg"
                        alt="image descriprion"
                        height="1104"
                        width="966"
                      />
                    </div>
                  </div>
                  <div class="slide">
                    <div class="bg-stretch">
                      <img
                        src="img/generic/img-07.jpg"
                        alt="image descriprion"
                        height="1104"
                        width="966"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="height col-md-6 text-col">
                <div class="holder" style="padding-bottom: 50px">
                  <h1 style="text-align: center; font-size: xx-large" id="nametag">
                   
                  </h1>
                  <div
                    class="price"
                    style="text-align: center; font-size: xx-large"
                  >
                    from <strong>US $979</strong>
                  </div>

                  <ul
                    class="reviews-info"
                    style="text-align: left; font-size: larger"
                  >
                    <!-- ... existing content ... -->
                  </ul>

                  <div class="btn-holder" style="text-align: left">
                    <!-- Start of the form -->
                    <form>
                      <div class="form-group" style="font-size: larger">
                        <label for="adventure">Select Your National Park</label>
                        <div class="select-holder" >
                          <select
                            class="trip"
                            id="parkSelect"
                            style="height: 40px; width: 100%"
                          >
                          <option value="">--select--</option>
                          </select>
                        </div>
                      </div>
                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            // Fetch parks data when the page loads
                                            fetch('fetch_parks.php')
                                                .then(response => response.json())
                                                .then(data => {
                                                    parksData = data; // Assign fetched data to parksData variable
                                                    console.log(parksData);
                                                    const nametag = document.getElementById('nametag');
                                                    const parkSelect = document.getElementById('parkSelect');

                                                    // Populate park select dropdown with fetched data
                                                    data.forEach(park => {
                                                        const option = document.createElement('option');
                                                        option.value = park.id;
                                                        option.textContent = park.park_name;
                                                        parkSelect.appendChild(option);
                                                    });

                                                    // Get the default selected park
                                                  

                                                    // Set q1 content immediately after populating parkSelect
                                                    const q1Option = document.getElementById('q1');
                                                    q1Option.textContent = defaultPark.q1;
                                                })
                                                .catch(error => console.error('Error fetching parks:', error));

                                            // Add event listener for change event on parkSelect
                                            document.getElementById('parkSelect').addEventListener('change', function() {
                                                if (!parksData) {
                                                    console.error('Parks data is not available.');
                                                    return;
                                                }
                                                
                                                const defaultParkId = parkSelect.value;
                                                    const defaultPark = parksData.find(park => park.id === defaultParkId);
                                                // Get the selected park name and display it in the nametag element
                                                const selectedParkName = this.options[this.selectedIndex].textContent;
                                                const nametag = document.getElementById('nametag');
                                                nametag.textContent = selectedParkName;

                                                // Get the selected park data
                                                const parkId = this.value;
                                                const selectedPark = parksData.find(park => park.id === parkId);
                                                

                                                // Update the options with the selected park data
                                                const q1Option = document.getElementById('q1');
                                                const q2Option = document.getElementById('q2');
                                                const q3Option = document.getElementById('q3');
                                                const a1 = document.getElementById('a1');
                                                const a2 = document.getElementById('a2');
                                                const a3 = document.getElementById('a3');

                                                q1Option.innerHTML = selectedPark.q1;
                                                q2Option.innerHTML = selectedPark.q2;
                                                q3Option.innerHTML = selectedPark.q3;
                                                a1.innerHTML = selectedPark.a1;
                                                a2.innerHTML = selectedPark.a2;
                                                a3.innerHTML = selectedPark.a3;

                                                const vehicaleSelect = document.getElementById('vehicale');
                                                vehicaleSelect.innerHTML = '<option value="">--select--</option>';
                                                
                                               
                                                  if (selectedPark) {
                                                    if (selectedPark.v1 && selectedPark.vp1) {
                                                        vehicaleSelect.innerHTML += `<option value="${selectedPark.vp1}">${selectedPark.v1} - ${"$"+selectedPark.vp1}</option>`;
                                                    }
                                                    if (selectedPark.v2 && selectedPark.vp2) {
                                                        vehicaleSelect.innerHTML += `<option value="${selectedPark.vp2}">${selectedPark.v2} - ${"$"+selectedPark.vp2}</option>`;
                                                    }
                                                    if (selectedPark.v3 && selectedPark.vp3) {
                                                        vehicaleSelect.innerHTML += `<option value="${selectedPark.vp3}">${selectedPark.v3} - ${"$"+selectedPark.vp3}</option>`;
                                                    }
                                                    // Repeat for other vehicles and their prices if available
                                                }


                                                const selectElement = document.getElementById('tabSelect');
                                        selectElement.dispatchEvent(new Event('change'));
                                        vehicaleSelect.dispatchEvent(new Event('change'));
                                            });
                                        });




                                          // Event listener for Activities disabled and enable 

                                        function toggleActivitiesSelect(parkId) {
                                            const activitiesSelect = document.getElementById('Activities');
                                            if (parkId === '2' || parkId === '3' || parkId === '4') {
                                                activitiesSelect.disabled = false; // Enable the select element
                                            } else {
                                                activitiesSelect.disabled = true; // Disable the select element
                                            }
                                        }

                                        // Add event listener for change event on parkSelect
                                        document.getElementById('parkSelect').addEventListener('change', function() {
                                            const parkId = this.value;
                                            if (parkId) {
                                                toggleActivitiesSelect(parkId);
                                            }
                                        });



                              // Event listener for park select change
                              document.getElementById('parkSelect').addEventListener('change', function() {
                                  const parkId = this.value;
                                  if (parkId) {


                                   
                                      // Fetch tours for the selected park
                                      fetch('fetch_tours.php?park_id=' + parkId)
                                      .then(response => response.json())
                                      .then(data => {
                                          const tourSelect = document.getElementById('tourSelect');

                                        
                                          // Clear existing options
                                          tourSelect.innerHTML = '<option value="">--Select The Park--</option>';
                                          // Populate tour select dropdown with fetched data
                                          data.forEach(tour => {
                                              const option = document.createElement('option');
                                              option.value = tour.id;
                                              option.textContent =  tour.tour_name;

                                              tourSelect.appendChild(option);
                                          });
                                      })
                                      .catch(error => console.error('Error fetching tours:', error));
                                  }
                              });
                          

                          document.addEventListener('DOMContentLoaded', function() {
    // Event listener for park select change
                              document.getElementById('parkSelect').addEventListener('change', function() {
                                  const parkId = this.value;
                                  if (parkId) {
                                    
                                      // Fetch images for the selected park
                                      fetch('fetch_images.php?park_id=' + parkId)
                                      .then(response => response.json())
                                      .then(data => {
                                          const gallery = document.getElementById('tab05').querySelector('.gallery-list');
                                          // Clear existing images
                                          gallery.innerHTML = '';
                                          // Populate gallery with fetched images
                                          data.forEach(image => {
                                              const listItem = document.createElement('li');
                                              listItem.classList.add('col-sm-6');

                                              const link = document.createElement('a');
                                              link.classList.add('fancybox');
                                              link.setAttribute('data-fancybox-group', 'group');
                                              link.href = 'img/gallery/' + image;
                                              link.title = 'Caption Goes Here';

                                              const imgHolder = document.createElement('span');
                                              imgHolder.classList.add('img-holder');

                                              const img = document.createElement('img');
                                              img.src = 'img/gallery/' + image;
                                              img.height = '750';
                                              img.width = '450';
                                              img.alt = 'image description';

                                              imgHolder.appendChild(img);
                                              link.appendChild(imgHolder);
                                              listItem.appendChild(link);
                                              gallery.appendChild(listItem);
                                          });
                                      })
                                      .catch(error => console.error('Error fetching images:', error));
                                  }
                              });
                          });



                          </script>
                        <div class="form-group" style="font-size: larger">
                            <label for="tourSelect">Select Tour time :</label>
                            <div class="select-holder">
                                <select class="trip" id="tourSelect" style="height: 40px; width: 100%">
                                    <!-- Options will be dynamically added here -->
                                    <option value="">--select--</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group" style="font-size: larger">
                          <label for="tourSelect">Activities</label>
                          <div class="select-holder">
                              <select class="trip" style="height: 40px; width: 100%" id="Activities" disabled>
                                  <!-- Options will be dynamically added here -->
                                  <option value="">--select--</option>

                                  <option value="Sigiriya hot air balloon">Sigiriya hot air balloon</option>

                                  <option value="Whale and dolphin watching">Whale and dolphin watching</option>
                                  <option value="Sigiriya village tour">Sigiriya village tour</option>
                              </select>
                          </div>
                       </div>


                         <div class="form-group" style="font-size: larger">
                          <label for="tourSelect">Choose the jeep</label>
                          <div class="select-holder">
                              <select class="trip" style="height: 40px; width: 100%" id="vehicale"  >
                                  <!-- Options will be dynamically added here -->
                                  <option value="">--select--</option>

                                
                              </select>
                          </div>
                       </div>




                      <div class="form-group" style="font-size: larger">
                        <label for="dateInput">Choose Date:</label>
                        <input
                          type="date"
                          class="form-control"
                          id="dateInput"
                        />
                      </div>
                          
                      <div class="form-group" style="font-size: larger">
                      <label for="adultsInput">Enter Adults Count:</label>
                                  <input
                                    type="number"
                                    class="form-control"
                                    id="adultsInput"
                                    min="0" max="6"
                                    maxlength="1"
                                    oninput="limitTotal(this)"
                                    onload="limitTotal(this)"
                                  />
                                </div>

                                <div class="form-group" style="font-size: larger">
                                  <label for="childrenInput">Enter Children Count:</label>
                                  <input
                                    type="number"
                                    class="form-control"
                                    id="childrenInput"
                                    min="0" max="6"
                                    oninput="limitTotal(this)"
                                    onload="limitTotal(this)"
                                  />
                                </div>
                                <script>
                                  window.onload = function() {
                                    resetValues();
                                  };

                                  function resetValues() {
                                    document.getElementById('adultsInput').value = 0;
                                    document.getElementById('childrenInput').value = 0;
                                  }

                                  function limitTotal(input) {
                                    var value = parseInt(input.value);
                                    if (value < parseInt(input.min)) {
                                      input.value = input.min;
                                    } else if (value > parseInt(input.max)) {
                                      input.value = input.max;
                                    }
                                    
                                    var adultsCount = parseInt(document.getElementById('adultsInput').value);
                                    var childrenCount = parseInt(document.getElementById('childrenInput').value);
                                    
                                    // Dynamically adjust maximum limit for adults input
                                    var adultsMax = 6 - childrenCount;
                                    document.getElementById('adultsInput').max = adultsMax;
                                    
                                    // Dynamically adjust maximum limit for children input
                                    var childrenMax = 6 - adultsCount;
                                    document.getElementById('childrenInput').max = childrenMax;
                                  }
                                  </script>


          <div class="form-group" style="font-size: larger">
    <label for="notesInput">Notes</label>
    <textarea class="form-control" id="notesInput" style="height: 200px; resize: none;"></textarea>
</div>



                      <!-- Removed Total Price section -->

                      <div style="text-align: center ;  margin-top:90px;">
                        <button type="submit" class="btn btn-lg btn-info">
                          BOOK NOW
                        </button>
                      </div>
                    </form>
                    <!-- End of the form -->
                  </div>
                </div>
              </div>
            </div>
          </section>
          <div class="tab-container">
            <nav class="nav-wrap" id="sticky-tab">
              <div class="container">
                <!-- nav tabs -->
                <ul class="nav nav-tabs text-center" role="tablist">
                  <li role="presentation" class="active">
                    <a
                      href="#tab01"
                      aria-controls="tab01"
                      role="tab"
                      data-toggle="tab"
                      >Overview</a
                    >
                  </li>

                  <li role="presentation">
                    <a
                      href="#tab04"
                      aria-controls="tab04"
                      role="tab"
                      data-toggle="tab"
                      >Faq &amp; Review</a
                    >
                  </li>
                  <li role="presentation">
                    <a
                      href="#tab05"
                      aria-controls="tab05"
                      role="tab"
                      data-toggle="tab"
                      >Gallery</a
                    >
                  </li>
                  <li role="presentation">
                    <a
                      href="#tab06"
                      aria-controls="tab06"
                      role="tab"
                      data-toggle="tab"
                      >Price list</a
                    >
                  </li>
                </ul>
              </div>
            </nav>
            
            <!-- tab panes -->
            <div class="container tab-content trip-detail">
              <!-- overview tab content -->
              <div role="tabpanel" class="tab-pane active" id="tab01">
                <div class="row">
                  <div class="col-md-6">
                    <strong class="header-box"
                      >All about the classic Annapurna Circuit Trekking</strong
                    >
                    <div class="detail " id="tour_details">
                     
                     
                    </div>
                  </div>
                  <div class="col-md-6">
                    <strong class="header-box"
                      >The tour package inclusions and exclusions at a
                      glance</strong
                    >
                    <div class="text-box">
                      <div class="holder">
                        <strong class="title"
                          >Whats included in this tour</strong
                        >
                        <span class="sub-title"
                          >Items that are covered in the cost of tour
                          price.</span
                        >
                       <div class="tinclude" id="tinclude">
                         
                        </div>
                      </div>
                    </div>
                    <div class="text-box not-included">
                      <div class="holder">
                        <strong class="title"
                          >Whats not included in this tour</strong
                        >
                        <span class="sub-title"
                          >Items that are covered in the cost of tour
                          price.</span
                        >
                        <p>
                          This is Photoshop's version of Lorem Ipsum. Proin
                          gravida nibh vel velit auctor aliquet. Aenean
                          sollicitudin, lorem quis bibendum auctor, nisi elit
                          consequat ipsum, nec sagittis sem nibh id elit.
                        </p>
                        <ul class="content-list cross-list">
                          <li>Travel insurance and other emergencies</li>
                          <li>Visa fees and entry clearing fees</li>
                          <li>Single room accommodations</li>
                          <li>Liquors, beeers and bootled beverages</li>
                          <li>Photography ccessories like cameras etc.</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- itinerary tab content -->
              <div role="tabpanel" class="tab-pane" id="tab02">
                <div class="row">
                  <div class="col-md-6">
                    <ol class="detail-accordion">
                      <li>
                        <a href="#">
                          <strong class="title">Day 1</strong>
                          <span>Depart London</span>
                        </a>
                        <div class="slide">
                          <div class="slide-holder">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna aliqua. Ut enim ad minim
                              veniam, quis nostrud exercitation ullamco laboris
                              nisi ctetur, adipisci velit, sed quia non numquam
                              eius modi.
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <a href="#">
                          <strong class="title">Day 2</strong>
                          <span>Arrive in Kathmandu</span>
                        </a>
                        <div class="slide">
                          <div class="slide-holder">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna aliqua. Ut enim ad minim
                              veniam, quis nostrud exercitation ullamco laboris
                              nisi ctetur, adipisci velit, sed quia non numquam
                              eius modi.
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <a href="#">
                          <strong class="title">Day 3</strong>
                          <span>Leave for Pokhara</span>
                        </a>
                        <div class="slide">
                          <div class="slide-holder">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna aliqua. Ut enim ad minim
                              veniam, quis nostrud exercitation ullamco laboris
                              nisi ctetur, adipisci velit, sed quia non numquam
                              eius modi.
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <a href="#">
                          <strong class="title">Day 4</strong>
                          <span>Start Trekking at Besi</span>
                        </a>
                        <div class="slide">
                          <div class="slide-holder">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna aliqua. Ut enim ad minim
                              veniam, quis nostrud exercitation ullamco laboris
                              nisi ctetur, adipisci velit, sed quia non numquam
                              eius modi.
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <a href="#">
                          <strong class="title">Day 5</strong>
                          <span>Day subtitle message</span>
                        </a>
                        <div class="slide">
                          <div class="slide-holder">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna aliqua. Ut enim ad minim
                              veniam, quis nostrud exercitation ullamco laboris
                              nisi ctetur, adipisci velit, sed quia non numquam
                              eius modi.
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <a href="#">
                          <strong class="title">Day 6</strong>
                          <span>Day subtitle message</span>
                        </a>
                        <div class="slide">
                          <div class="slide-holder">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna aliqua. Ut enim ad minim
                              veniam, quis nostrud exercitation ullamco laboris
                              nisi ctetur, adipisci velit, sed quia non numquam
                              eius modi.
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <a href="#">
                          <strong class="title">Day 7</strong>
                          <span>Depart London</span>
                        </a>
                        <div class="slide">
                          <div class="slide-holder">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna aliqua. Ut enim ad minim
                              veniam, quis nostrud exercitation ullamco laboris
                              nisi ctetur, adipisci velit, sed quia non numquam
                              eius modi.
                            </p>
                          </div>
                        </div>
                      </li>
                      <li class="active">
                        <a href="#">
                          <strong class="title">Day 8</strong>
                          <span>Return to London</span>
                        </a>
                        <div class="slide">
                          <div class="slide-holder">
                            <p>
                              This is Photoshop's version of Lorem Ipsum. Proin
                              gravida nibh vel velit auctor aliquet. Aenean
                              sollicitudin, lorem quis bibendum auctor, nisi
                              elit consequat ipsum, nec sagittis sem nibh id
                              elit.
                            </p>
                            <p>
                              Duis sed odio sit amet nibh vulputate cursus a sit
                              amet mauris. Morbi accumsan ipsum velit. Nam nec
                              tellus a odio tincidunt auctor a ornare odio.
                            </p>
                          </div>
                        </div>
                      </li>
                    </ol>
                  </div>
                  <div class="col-md-6">
                    <article class="img-article article-light">
                      <div class="img-wrap">
                        <img
                          src="img/generic/img-08.jpg"
                          height="319"
                          width="570"
                          alt="image description"
                        />
                      </div>
                      <div class="text-block">
                        <h3><a href="#">Member taking a short break</a></h3>
                        <p>
                          Consider packing your bag with folloing daily
                          essentials.
                        </p>
                      </div>
                    </article>
                    <article class="img-article article-light">
                      <div class="img-wrap">
                        <img
                          src="img/generic/img-09.jpg"
                          height="319"
                          width="570"
                          alt="image description"
                        />
                      </div>
                      <div class="text-block">
                        <h3>
                          <a href="#">Couple enjoying the spectacular view</a>
                        </h3>
                        <p>
                          Consider packing your bag with folloing daily
                          essentials.
                        </p>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
              <!-- accomodation tab content -->
              <div role="tabpanel" class="tab-pane" id="tab03">
                <div class="row">
                  <div class="col-md-6">
                    <strong class="header-box"
                      >Hotels, Tea Houses and Lodges</strong
                    >
                    <div class="detail">
                      <p>
                        This is Photoshop's version of Lorem Ipsum. Proin
                        gravida nibh vel velit auctor aliquet. Aenean
                        sollicitudin, lorem quis bibendum auctor, nisi elit
                        consequat ipsum, nec sagittis sem nibh id elit.
                      </p>
                      <p>
                        Duis sed odio sit amet nibh vulputate cursus a sit amet
                        mauris. Morbi accumsan ipsum velit. Nam nec tellus a
                        odio tincidunt auctor a ornare odio.
                      </p>
                      <p>
                        Sed non mauris vitae erat consequat auctor eu in elit.
                        Class aptent taciti sociosqu ad litora torquent per
                        conubia nostra, per inceptos himenaeos. Mauris in erat
                        justo.
                      </p>
                      <p>
                        Nullam ac urna eu felis dapibus condimentum sit amet a
                        augue. Sed non neque elit. Sed ut imperdiet nisi.
                      </p>
                      <p>
                        Proin condimentum fermentum nunc. Etiam pharetra, erat
                        sed fermentum feugiat, velit mauris egestas quam.
                      </p>
                      <p>
                        Ulins aliquam massa nisl quis neque. Proin condimentum
                        fermentum nunc. Etiam pharetra, erat sed fermentum
                        feugiat, velit mauris egestas quam, ut aliquam massa
                        nisl quis neque.
                      </p>
                      <p>
                        Proin condimentum fermentum nunc. Etiam pharetra, erat
                        sed fermentum feugiat, velit mauris egestas quam.
                      </p>
                      <p>
                        Ulins aliquam massa nisl quis neque. Proin condimentum
                        fermentum nunc. Etiam pharetra, erat sed fermentum
                        feugiat, velit mauris egestas quam, ut aliquam massa
                        nisl quis neque.
                      </p>
                      <p>
                        Ulins aliquam massa nisl quis neque. Proin condimentum
                        fermentum nunc. Etiam pharetra, erat sed fermentum
                        feugiat, velit mauris egestas quam, ut aliquam massa
                        nisl quis neque.
                      </p>
                      <p>Suspendisse gin orci enim.</p>
                    </div>
                  </div>
                  <div class="col-md-6 accomodation-block">
                    <strong class="header-box"
                      >The tour package inclusions and exclusions at a
                      glance</strong
                    >
                    <div class="text-box">
                      <div class="holder">
                        <strong class="title"
                          >Shared Rooms included in teh Price</strong
                        >
                        <span class="sub-title"
                          >Items that are covered in the cost of tour
                          price.</span
                        >
                        <div class="img-holder">
                          <img
                            src="img/generic/img-10.jpg"
                            height="467"
                            width="700"
                            alt="image description"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="text-box not-included">
                      <div class="holder">
                        <strong class="title"
                          >Individual Rooms not included in the Price</strong
                        >
                        <span class="sub-title"
                          >Items that are covered in the cost of tour
                          price.</span
                        >
                        <div class="img-holder">
                          <img
                            src="img/generic/img-11.jpg"
                            height="467"
                            width="700"
                            alt="image description"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- faq and review tab content -->
              <div role="tabpanel" class="tab-pane" id="tab04">
                <div class="row">
                  <div class="col-md-12">
                    <div class="question-select">
                      <select id="tabSelect" class="question"> 
                        <option value="#innerTab1" id="q1" >
                         
                        </option>
                        <option value="#innerTab2" id="q2">
                         
                        </option>
                        <option value="#innerTab3" id="q3">
                         
                        </option>
                      </select>
                      <ul class="nav nav-tabs" id="questionTab">
                        <li class="active">
                          <a href="#innerTab1" data-toggle="tab"
                            >What kind of footwear wearing is suitable?</a
                          >
                        </li>
                        <li>
                          <a href="#innerTab2" data-toggle="tab"
                            >What kind of bag is suitable?</a
                          >
                        </li>
                        <li>
                          <a href="#innerTab3" data-toggle="tab"
                            >What kind of clothes wearing is suitable?</a
                          >
                        </li>
                      </ul>
                    </div>
                    <div class="tab-wrapper">
                      <div
                        role="tabpanel"
                        class="tab-pane active"
                        id="innerTab1"
                      >
                        <div class="detail" id="a1">
                         
                        </div>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="innerTab2">
                        <div class="detail" id="a2">
                          
                        </div>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="innerTab3">
                        <div class="detail" id="a3">
                        
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="col-md-6">
                    <div class="header-box">
                      <a href="#" class="link-right">Writing A Review</a>
                      <span class="rate-left">
                        <strong class="title">Overall Rating</strong>
                        <span class="star-rating">
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span class="disable"
                            ><span class="icon-star"></span
                          ></span>
                        </span>
                        <span class="value">4.7/5</span>
                      </span>
                    </div>
                    <div class="comments reviews-body">
                      <div class="comment-holder">
                        
                        <div class="comment-slot">
                          <div class="thumb">
                            <a href="#"
                              ><img
                                src="img/thumbs/img-06.jpg"
                                height="50"
                                width="50"
                                alt="image description"
                            /></a>
                          </div>
                          <div class="text">
                            <header class="comment-head">
                              <div class="left">
                                <strong class="name">
                                  <a href="#">Cleona Torez - Spain</a>
                                </strong>
                                <div class="meta">Reviewed on 14/1/2016</div>
                              </div>
                              <div class="right">
                                <div class="star-rating">
                                  <span><span class="icon-star"></span></span>
                                  <span><span class="icon-star"></span></span>
                                  <span><span class="icon-star"></span></span>
                                  <span><span class="icon-star"></span></span>
                                  <span class="disable"
                                    ><span class="icon-star"></span
                                  ></span>
                                </div>
                                <span class="value">4.7/5</span>
                              </div>
                            </header>
                            <div class="des">
                              <p>
                                This is Photoshop's version of Lorem Ipsum.
                                Proin gravida nibh vel velit auctor aliquet.
                                Aenean sollicitudin, lorem quis bibendum auctor,
                                nisi elit consequat ipsum, nec sagittis sem nibh
                                id elit. Duis sed odio sit amet nibh vulputate
                                cursus a sit amet mauris.
                              </p>
                              <div class="link-holder">
                                <a href="#">Read Full Review</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="comment-slot">
                          <div class="thumb">
                            <a href="#"
                              ><img
                                src="img/thumbs/img-07.jpg"
                                height="50"
                                width="50"
                                alt="image description"
                            /></a>
                          </div>
                          <div class="text">
                            <header class="comment-head">
                              <div class="left">
                                <strong class="name">
                                  <a href="#">Cleona Torez - Spain</a>
                                </strong>
                                <div class="meta">Reviewed on 14/1/2016</div>
                              </div>
                              <div class="right">
                                <div class="star-rating">
                                  <span><span class="icon-star"></span></span>
                                  <span><span class="icon-star"></span></span>
                                  <span><span class="icon-star"></span></span>
                                  <span><span class="icon-star"></span></span>
                                  <span class="disable"
                                    ><span class="icon-star"></span
                                  ></span>
                                </div>
                                <span class="value">4.7/5</span>
                              </div>
                            </header>
                            <div class="des">
                              <p>
                                This is Photoshop's version of Lorem Ipsum.
                                Proin gravida nibh vel velit auctor aliquet.
                                Aenean sollicitudin, lorem quis bibendum auctor,
                                nisi elit consequat ipsum, nec sagittis sem nibh
                                id elit. Duis sed odio sit amet nibh vulputate
                                cursus a sit amet mauris.
                              </p>
                              <div class="link-holder">
                                <a href="#">Read Full Review</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="link-more text-center">
                        <a href="#">Show More Reviews - 75 Reviews</a>
                      </div>
                    </div>
                  </div> -->
                </div>
              </div>
              <!-- gallery tab content -->
              <div role="tabpanel" class="tab-pane" id="tab05">
                <ul class="row gallery-list has-center">
                  <li class="col-sm-6">
                    <a
                      class="fancybox"
                      data-fancybox-group="group"
                      href="img/gallery/img-10-2.jpg"
                      title="Caption Goes Here"
                    >
                      <span class="img-holder">
                        <img
                          src="img/gallery/img-10-2.jpg"
                          height="750"
                          width="450"
                          alt="image description"
                        />
                      </span>
                      
                    </a>
                  </li>
                  <li class="col-sm-6">
                    <a
                      class="fancybox"
                      data-fancybox-group="group"
                      href="img/gallery/img-11-2.jpg"
                      title="Caption Goes Here"
                    >
                      <span class="img-holder">
                        <img
                          src="img/gallery/img-11.jpg"
                          height="240"
                          width="370"
                          alt="image description"
                        />
                      </span>
                      
                    </a>
                  </li>
                  <li class="col-sm-6">
                    <a
                      class="fancybox"
                      data-fancybox-group="group"
                      href="img/gallery/img-12-2.jpg"
                      title="Caption Goes Here"
                    >
                      <span class="img-holder">
                        <img
                          src="img/gallery/img-12.jpg"
                          height="240"
                          width="370"
                          alt="image description"
                        />
                      </span>
                      
                    </a>
                  </li>
                  <li class="col-sm-6">
                    <a
                      class="fancybox"
                      data-fancybox-group="group"
                      href="img/gallery/img-13-2.jpg"
                      title="Caption Goes Here"
                    >
                      <span class="img-holder">
                        <img
                          src="img/gallery/img-13.jpg"
                          height="240"
                          width="370"
                          alt="image description"
                        />
                      </span>
                      
                    </a>
                  </li>
                  <li class="col-sm-6">
                    <a
                      class="fancybox"
                      data-fancybox-group="group"
                      href="img/gallery/img-14-2.jpg"
                      title="Caption Goes Here"
                    >
                      <span class="img-holder">
                        <img
                          src="img/gallery/img-14.jpg"
                          height="240"
                          width="370"
                          alt="image description"
                        />
                      </span>
                     
                    </a>
                  </li>
                  <li class="col-sm-6">
                    <a
                      class="fancybox"
                      data-fancybox-group="group"
                      href="img/gallery/img-15-2.jpg"
                      title="Caption Goes Here"
                    >
                      <span class="img-holder">
                        <img
                          src="img/gallery/img-15.jpg"
                          height="240"
                          width="370"
                          alt="image description"
                        />
                      </span>
                      
                    </a>
                  </li>
                  <li class="col-sm-6">
                    <a
                      class="fancybox"
                      data-fancybox-group="group"
                      href="img/gallery/img-16-2.jpg"
                      title="Caption Goes Here"
                    >
                      <span class="img-holder">
                        <img
                          src="img/gallery/img-16.jpg"
                          height="240"
                          width="370"
                          alt="image description"
                        />
                      </span>
                      
                    </a>
                  </li>
                  <li class="col-sm-6">
                    <a
                      class="fancybox"
                      data-fancybox-group="group"
                      href="img/gallery/img-17-2.jpg"
                      title="Caption Goes Here"
                    >
                      <span class="img-holder">
                        <img
                          src="img/gallery/img-17.jpg"
                          height="240"
                          width="370"
                          alt="image description"
                        />
                      </span>
                     
                    </a>
                  </li>
                  <li class="col-sm-6">
                    <a
                      class="fancybox"
                      data-fancybox-group="group"
                      href="img/gallery/img-18-2.jpg"
                      title="Caption Goes Here"
                    >
                      <span class="img-holder">
                        <img
                          src="img/gallery/img-18.jpg"
                          height="240"
                          width="370"
                          alt="image description"
                        />
                      </span>
                     
                    </a>
                  </li>
                </ul>
              </div>
              <!-- dates and prices tab content -->
             <div role="tabpanel" class="tab-pane" id="tab06">
                <div class="col-sm-12 demo-wrapper" style="padding: 10px">
                  <h1 class="text-center" style="margin-bottom: 78px">
                    National park price list - 2024
                  </h1>
                  <ul class="detail-accordion accordion-v2">
                    <li class="active">
                      <a href="#">
                        <strong class="title">PAX 1</strong>
                      </a>
                      <div class="slide">
                        <div class="slide-holder">
                          <!-- Start of the table -->
                          <table style="width: 100%; font-size: 1.2em">
                            <thead>
                              <tr>
                                <th style="padding: 5px">Tour Type</th>
                                <th style="padding: 5px">Price</th>
                              </tr>
                            </thead>
                            <tbody>
                              <!-- Add a row for each tour type and its price -->
                             <tr>
                                <td style="padding: 5px" class="tourName"></td>
                                <td style="padding: 5px" class="tourPrice"></td>
                              </tr>
                              <!-- Add more rows as necessary -->
                            </tbody>
                          </table>
                          <!-- End of the table -->
                        </div>
                      </div>
                    </li>
                    <!-- Add more list items for other PAX values -->
                    
                  </ul>


                  <ul class="detail-accordion accordion-v2">
                    <li class="active">
                      <a href="#">
                        <strong class="title">PAX 2</strong>
                      </a>
                      <div class="slide">
                        <div class="slide-holder">
                          <!-- Start of the table -->
                          <table style="width: 100%; font-size: 1.2em">
                            <thead>
                              <tr>
                                <th style="padding: 5px">Tour Type</th>
                                <th style="padding: 5px">Price</th>
                              </tr>
                            </thead>
                            <tbody>
                              <!-- Add a row for each tour type and its price -->
                              <tr>
                                <td style="padding: 5px" class="tourName"></td>
                                <td style="padding: 5px" class="tourPrice1"></td>
                              </tr>
                              <!-- Add more rows as necessary -->
                            </tbody>
                          </table>
                          <!-- End of the table -->
                        </div>
                      </div>
                    </li>
                    <!-- Add more list items for other PAX values -->
                  </ul>





                  <ul class="detail-accordion accordion-v2">
                    <li class="active">
                      <a href="#">
                        <strong class="title">PAX 3</strong>
                      </a>
                      <div class="slide">
                        <div class="slide-holder">
                          <!-- Start of the table -->
                          <table style="width: 100%; font-size: 1.2em">
                            <thead>
                              <tr>
                                <th style="padding: 5px">Tour Type</th>
                                <th style="padding: 5px">Price</th>
                              </tr>
                            </thead>
                            <tbody>
                              <!-- Add a row for each tour type and its price -->
                              <tr>
                               <td style="padding: 5px" class="tourName"></td>
                               <td style="padding: 5px" class="tourPrice2"></td>
                             </tr>
                              <!-- Add more rows as necessary -->
                            </tbody>
                          </table>
                          <!-- End of the table -->
                        </div>
                      </div>
                    </li>
                    <!-- Add more list items for other PAX values -->
                  </ul>



                  <ul class="detail-accordion accordion-v2">
                    <li class="active">
                      <a href="#">
                        <strong class="title">PAX 4</strong>
                      </a>
                      <div class="slide">
                        <div class="slide-holder">
                          <!-- Start of the table -->
                          <table style="width: 100%; font-size: 1.2em">
                            <thead>
                              <tr>
                                <th style="padding: 5px">Tour Type</th>
                                <th style="padding: 5px">Price</th>
                              </tr>
                            </thead>
                            <tbody>
                              <!-- Add a row for each tour type and its price -->
                                <tr>
                               <td style="padding: 5px" class="tourName"></td>
                               <td style="padding: 5px" class="tourPrice3"></td>
                             </tr>
                              <!-- Add more rows as necessary -->
                            </tbody>
                          </table>
                          <!-- End of the table -->
                        </div>
                      </div>
                    </li>
                    <!-- Add more list items for other PAX values -->
                  </ul>


                  <ul class="detail-accordion accordion-v2">
                    <li class="active">
                      <a href="#">
                        <strong class="title">PAX 5</strong>
                      </a>
                      <div class="slide">
                        <div class="slide-holder">
                          <!-- Start of the table -->
                          <table style="width: 100%; font-size: 1.2em">
                            <thead>
                              <tr>
                                <th style="padding: 5px">Tour Type</th>
                                <th style="padding: 5px">Price</th>
                              </tr>
                            </thead>
                            <tbody>
                              <!-- Add a row for each tour type and its price -->
                               <tr>
                               <td style="padding: 5px" class="tourName"></td>
                               <td style="padding: 5px" class="tourPrice4"></td>
                             </tr>
                              <!-- Add more rows as necessary -->
                            </tbody>
                          </table>
                          <!-- End of the table -->
                        </div>
                      </div>
                    </li>
                    <!-- Add more list items for other PAX values -->
                  </ul>



                  <ul class="detail-accordion accordion-v2">
                    <li class="active">
                      <a href="#">
                        <strong class="title">PAX 6</strong>
                      </a>
                      <div class="slide">
                        <div class="slide-holder">
                          <!-- Start of the table -->
                          <table style="width: 100%; font-size: 1.2em">
                            <thead>
                              <tr>
                                <th style="padding: 5px">Tour Type</th>
                                <th style="padding: 5px">Price</th>
                              </tr>
                            </thead>
                            <tbody>
                              <!-- Add a row for each tour type and its price -->
                                <tr>
                               <td style="padding: 5px" class="tourName"></td>
                               <td style="padding: 5px" class="tourPrice5"></td>
                             </tr>
                              <!-- Add more rows as necessary -->
                            </tbody>
                          </table>
                          <!-- End of the table -->
                        </div>
                      </div>
                    </li>
                    <!-- Add more list items for other PAX values -->
                  </ul>




                </div>

                
              </div>
          <!-- recent block -->
        </main>
      </div>
      
      <script>



    // Event listener for tour select change
    document.getElementById('tourSelect').addEventListener('change', function() {
    const tourId = this.value;
    if (tourId) {
        // Fetch tour details based on the selected tour ID
        fetch('fetch_tour_details.php?tour_id=' + tourId)
        .then(response => response.json())
        .then(data => {
            console.log(data); // Log received data to the console
            // Update the table with tour details
            const tourNameCells = document.querySelectorAll('.tourName');
            const tourPriceCells = document.querySelectorAll('.tourPrice');
            const tourPriceCell1 = document.querySelectorAll('.tourPrice1')[0]; // Access the first element from the NodeList
            const tourPriceCell2 = document.querySelectorAll('.tourPrice2')[0]; // Access the first element from the NodeList
            const tourPriceCell3 = document.querySelectorAll('.tourPrice3')[0]; // Access the first element from the NodeList
            const tourPriceCell4 = document.querySelectorAll('.tourPrice4')[0]; // Access the first element from the NodeList
            const tourPriceCell5 = document.querySelectorAll('.tourPrice5')[0]; // Access the first element from the NodeList
            const tour_details = document.getElementById('tour_details');
            const tinclude = document.getElementById('tinclude');

            console.log(tinclude.length,tour_details.length); // Log cell count to check if cells are correctly selected

            function decodeHtml(html) {
                  var txt = document.createElement("textarea");
                  txt.innerHTML = html;
                  return txt.value;
              }
              function decodeHtml1(html) {
                  var txt = document.createElement("textarea");
                  txt.innerHTML = html;
                  return txt.value;
              }
              const decodedHtml = decodeHtml(data.tour_details);
              const decodedHtml1 = decodeHtml1(data.include);
            tourPriceCell1.textContent = data.tour_price1;
            tourPriceCell2.textContent = data.tour_price2;
            tourPriceCell3.textContent = data.tour_price3;
            tourPriceCell4.textContent = data.tour_price4;
            tourPriceCell5.textContent = data.tour_price5;
            tour_details.innerHTML = decodedHtml;
            tinclude.innerHTML = decodedHtml1;

            tourNameCells.forEach(cell => {
                cell.textContent = data.tour_name;
            });
            tourPriceCells.forEach(cell => {
                cell.textContent = data.tour_price;
            });
        })
        .catch(error => console.error('Error fetching tour details:', error));
    }
});






      </script>
      <!-- main footer -->
      <footer id="footer"></footer>
    </div>
    <!-- scroll to top -->
    <div class="scroll-holder text-center">
      <a href="javascript:" id="scroll-to-top"
        ><i class="icon-arrow-down"></i
      ></a>
    </div>
    <!-- jquery library -->
    <script src="vendors/jquery/jquery-2.1.4.min.js"></script>
    <!-- external scripts -->
    <script src="vendors/bootstrap/javascripts/bootstrap.min.js"></script>
    <script src="vendors/jquery-placeholder/jquery.placeholder.min.js"></script>
    <script src="vendors/match-height/jquery.matchHeight.js"></script>
    <script src="vendors/wow/wow.min.js"></script>
    <script src="vendors/stellar/jquery.stellar.min.js"></script>
    <script src="vendors/validate/jquery.validate.js"></script>
    <script src="vendors/waypoint/waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.min.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="vendors/jQuery-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <script src="vendors/fancybox/jquery.fancybox.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/jcf/js/jcf.js"></script>
    <script src="vendors/jcf/js/jcf.select.js"></script>
    <script src="vendors/retina/retina.min.js"></script>
    <script src="vendors/bootstrap-datetimepicker-master/dist/js/bootstrap-datepicker.js"></script>
    <script src="vendors/sticky-kit/sticky-kit.js"></script>
    <!-- mailchimp newsletter subscriber -->
    <script src="js/mailchimp.js"></script>
    <!-- custom script -->
    <script src="js/sticky-kit-init.js"></script>
    <script src="js/jquery.main.js"></script>
  </body>

  <!-- Mirrored from html.waituk.com/entrada/tour-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Sep 2023 16:24:33 GMT -->
</html>
