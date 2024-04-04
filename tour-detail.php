<!DOCTYPE html>
<html>
  <!-- Mirrored from html.waituk.com/entrada/tour-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Sep 2023 16:24:24 GMT -->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Safaribookingsrilanka | Book your safari</title>
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
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>


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
                        <script>
                document.addEventListener('DOMContentLoaded', function() {
                // Array of image URLs
                var imageUrls = [
                  "img/Tour-detail-imgs/1.jpg",
                  "img/Tour-detail-imgs/2.jpg",
                  "img/Tour-detail-imgs/3.webp",
                  "img/Tour-detail-imgs/4.webp",
                  "img/Tour-detail-imgs/5.webp",
                  "img/Tour-detail-imgs/6.webp",
                  "img/Tour-detail-imgs/7.webp",
                  "img/Tour-detail-imgs/8.webp",
                  "img/Tour-detail-imgs/9.webp",
                  "img/Tour-detail-imgs/10.webp",
                  "img/Tour-detail-imgs/11.webp",
                ];

                // Shuffle the image URLs
                function shuffle(array) {
                  for (var i = array.length - 1; i > 0; i--) {
                    var j = Math.floor(Math.random() * (i + 1));
                    [array[i], array[j]] = [array[j], array[i]];
                  }
                  return array;
                }

                shuffle(imageUrls);

                // Update the image sources
                document.getElementById("image1").src = imageUrls[0];
                document.getElementById("image2").src = imageUrls[1];
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
                      id="image1"
                      
                        alt="image descriprion"
                        height="1104"
                        width="966"
                      />
                    </div>
                  </div>
                  <div class="slide">
                    <div class="bg-stretch">
                      <img
                      id="image2"
                        alt="image descriprion"
                        height="1104"
                        width="966"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <script>
        window.addEventListener('DOMContentLoaded', function() {
            // Function to scroll to the target element
            function scrollToElement(elementId) {
                const element = document.getElementById(elementId);
                if (element) {
                    element.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }

            // Check if there's an anchor in the URL
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('scrollTo') && urlParams.get('scrollTo') === 'nametag') {
                // Scroll to the element with id 'nametag' after a short delay
                setTimeout(function() {
                    scrollToElement('nametag');
                }, 500); // Adjust the delay as needed
            }
        });
    </script>
              <div class="height col-md-6 text-col">
                <div class="holder" style="padding-bottom: 50px">
                  <h1 style="text-align: center; font-size: xx-large" id="nametag">
                   
                  </h1>
                  <div
                    class="price"
                    style="text-align: center; font-size: xx-large"
                    id="totalPrice"
                    name="totalPrice"
                  >
                    from Total Price: <strong>US $0</strong>
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
                        <label for="adventure">Select Your National Park </label>
                        <p style="font-size:14px;" >(First select your  national park to unlock tour time)</p>
                        <div class="select-holder" >
                          <select
                            class="trip"
                            id="parkSelect"
                            name="parkSelect"
                            style="height: 40px; width: 100%"
                          >
                          <option value="">--select--</option>
                          </select>
                        </div>
                      </div>


                      <script>

                document.addEventListener('DOMContentLoaded', function () {
                    // Get the stored values from localStorage
                    var storedFullName = localStorage.getItem('fullName');
                    var storedEmail = localStorage.getItem('email');
                    var storedContactNumber = localStorage.getItem('contactNumber');
                   
                    var storedVehiclePrice = localStorage.getItem('vehiclePrice');

                    // Fill the inputs with the stored values
                    document.getElementById('NameInput').value = storedFullName;
                    document.getElementById('EmailInput').value = storedEmail;
                    document.getElementById('ContactInput').value = storedContactNumber;

          

                    // Clear the stored values from localStorage
                    localStorage.removeItem('fullName');
                    localStorage.removeItem('email');
                    localStorage.removeItem('contactNumber');
                   
                    localStorage.removeItem('vehiclePrice');
                });

    </script>

                    <script>
                      




                                        document.addEventListener('DOMContentLoaded', function() {
                                          const childrenInputElement = document.getElementById('childrenInput');
                                        const adultsInputElement = document.getElementById('adultsInput');

                                          
                                         

                                          const params = new URLSearchParams(window.location.search);
                                          const parkid = params.get('parkId');
                                          const tourId = params.get('tourId');
                                          childrenInputElement.disabled = !tourId;
                                          adultsInputElement.disabled = !tourId;
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
                                                     // Auto-select the option with the same value as parkId
                                                      if (parkid) {
                                                          parkSelect.value = parkid;
                                                          parkSelect.dispatchEvent(new Event('change'));
                                                      }
                                                                                            

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

                                                // const vehicaleSelect = document.getElementById('vehicale');
                                                // vehicaleSelect.innerHTML = '<option value="">--select--</option>';
                                                
                                               
                                                //   if (selectedPark) {
                                                //     if (selectedPark.v1 && selectedPark.vp1) {
                                                //         vehicaleSelect.innerHTML += `<option value="${selectedPark.vp1}">${selectedPark.v1} - ${"$"+selectedPark.vp1}</option>`;
                                                //     }
                                                //     if (selectedPark.v2 && selectedPark.vp2) {
                                                //         vehicaleSelect.innerHTML += `<option value="${selectedPark.vp2}">${selectedPark.v2} - ${"$"+selectedPark.vp2}</option>`;
                                                //     }
                                                //     if (selectedPark.v3 && selectedPark.vp3) {
                                                //         vehicaleSelect.innerHTML += `<option value="${selectedPark.vp3}">${selectedPark.v3} - ${"$"+selectedPark.vp3}</option>`;
                                                //     }
                                                //     // Repeat for other vehicles and their prices if available
                                                // }


                                                const selectElement = document.getElementById('tabSelect');
                                        selectElement.dispatchEvent(new Event('change'));
                                        const vehicaleSelect = document.getElementById('vehicale');
                                        vehicaleSelect.innerHTML = '<option value="">--select--</option>';
                                        vehicaleSelect.dispatchEvent(new Event('change'));
                                        
                                        
                                            });







                                        });




                                          // Event listener for Activities disabled and enable 
                                          function toggleActivitiesSelect(parkId) {
                                            const activitiesSelect = document.getElementById('Activities');
                                            if (parkId === '2' || parkId === '3' || parkId === '4') {
                                                activitiesSelect.disabled = false; // Enable the select element
                                            } else {
                                                activitiesSelect.selectedIndex = 0;
                                                activitiesSelect.disabled = true; // Disable the select element
                                            }
                                        }

                                        // Add event listener for change event on parkSelect
                                        document.getElementById('parkSelect').addEventListener('change', function() {
                                            const activitiesSelect = document.getElementById('Activities');
                                            activitiesSelect.innerHTML =  '<option value="0">--select--</option>' +
                                            '<option value="0">--select--</option>' +
                                                                          '<option value="100">Sigiriya hot air balloon</option>' +
                                                                          '<option value="150">Whale and dolphin watching</option>' +
                                                                          '<option value="200">Sigiriya village tour</option>';
                                            const parkId = this.value;
                                            if (parkId) {
                                                toggleActivitiesSelect(parkId);
                                            }activitiesSelect.dispatchEvent(new Event('change'));
                                        });



                              // Event listener for park select change
                              document.getElementById('parkSelect').addEventListener('change', function() {
                                  const parkId = this.value;
                                  const params = new URLSearchParams(window.location.search);
                                         
                                          const tourid = params.get('tourId');
                                         
                                  if (parkId) {


                                   
                                      // Fetch tours for the selected park
                                      fetch('fetch_tours.php?park_id=' + parkId)
                                      .then(response => response.json())
                                      .then(data => {
                                        

                                          const tourSelect = document.getElementById('tourSelect');

                                        
                                          // Clear existing options
                                          tourSelect.innerHTML = '<option value="0">--Select The Park--</option>';
                                          // Populate tour select dropdown with fetched data
                                          data.forEach(tour => {
                                              const option = document.createElement('option');
                                              option.value = tour.id;
                                              option.textContent =  tour.tour_name;

                                              tourSelect.appendChild(option);
                                          });
                                           // Auto-select the option with the same value as parkId
                                                if (tourid) {
                                                  tourSelect.value = tourid;

                                                    // Manually trigger the change event to update the UI
                                                    tourSelect.dispatchEvent(new Event('change'));
                                                }
                                               
                                               
                                                const childrenInputElement = document.getElementById('childrenInput');
                                        const adultsInputElement = document.getElementById('adultsInput');


                                          childrenInputElement.disabled = !tourid;
                                          adultsInputElement.disabled = !tourid;
                                          tourSelect.dispatchEvent(new Event('change'));
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
                                <select class="trip" id="tourSelect" name="tourSelect" style="height: 40px; width: 100%">
                                    <!-- Options will be dynamically added here -->
                                    <option value="">--select--</option>
                                </select>
                            </div>
                        </div>

                      


                         <div class="form-group" style="font-size: larger">
                          <label for="tourSelect">Choose the jeep</label>
                          <div class="select-holder">
                          <select class="trip" style="height: 40px; width: 100%" id="vehicale" name="vehicale" >
                                  <!-- Options will be dynamically added here -->
                                  <option value="">--select--</option>


                                
                              </select>
                          </div>
                       </div>

                       <div class="form-group" style="font-size: larger">
    <label for="notesInput">Full name</label>
    <input class="form-control" id="NameInput" name="NameInput">
</div>


 <div class="form-group" style="font-size: larger">
    <label for="notesInput">Contact</label>
    <input class="form-control" id="ContactInput" name="ContactInput">
</div>


 <div class="form-group" style="font-size: larger">
    <label for="notesInput">Email</label>
    <input class="form-control" id="EmailInput" name="EmailInput">
</div>

                       <script>
                        window.addEventListener('DOMContentLoaded', function() {
                            // Get today's date
                            var today = new Date();
                            var dd = String(today.getDate()).padStart(2, '0');
                            var mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0!
                            var yyyy = today.getFullYear();

                            today = yyyy + '-' + mm + '-' + dd;

                            // Set the min attribute of the date input to today's date
                            document.getElementById('dateInput').min = today;
                        });
                    </script>



                      <div class="form-group" style="font-size: larger">
                        <label for="dateInput">Choose Date:</label>
                        <input
                          type="date"
                          class="form-control"
                          id="dateInput"
                          name="dateInput"
                        />
                      </div>
                          
                      <div class="form-group" style="font-size: larger">
                      <label for="adultsInput">Enter Adults Count:</label>
                                  <input
                                    type="number"
                                    class="form-control"
                                    id="adultsInput"
                                    name="adultsInput"
                                    min="0" max="7"
                                    maxlength="1"
                                    oninput="limitTotal(this)"
                                    onload="limitTotal(this)"
                                  />
                                </div>

                                <div class="form-group" style="font-size: larger">
                                  <label for="childrenInput">Enter Children Count:</label>
                                  <input
                                    type="number"
                                    name="childrenInput"
                                    class="form-control"
                                    id="childrenInput"
                                    min="0" max="7"
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
                                    var adultsMax = 7 - childrenCount;
                                    document.getElementById('adultsInput').max = adultsMax;
                                    
                                    // Dynamically adjust maximum limit for children input
                                    var childrenMax = 7 - adultsCount;
                                    document.getElementById('childrenInput').max = childrenMax;
                                  }
                                  </script>





          <div class="form-group" style="font-size: larger">
    <label for="notesInput">Notes</label>
    <textarea class="form-control" id="notesInput" name="notesInput" style="height: 200px; resize: none;"></textarea>
</div>



                      <!-- Removed Total Price section -->

                      <div style="text-align: center ;  margin-top:90px;">
                        <button type="submit" id="emailjs" name="emailjs" class="btn btn-lg btn-info">
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
                  
                    <div class="text-box">
                      <div class="holder">
                        <strong class="title" style="font-weight:bold; font-size:20px;"
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
                    
                  </div>

                  <div class="col-md-6">
                    
                    <div class="detail " id="tour_details">
                     
                     
                    </div>
                  </div>
                </div>
              </div>
              <!-- itinerary tab content -->
              
              <!-- accomodation tab content -->
              
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


                  <ul class="detail-accordion accordion-v2">
                    <li class="active">
                      <a href="#">
                        <strong class="title">PAX 7</strong>
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
                               <td style="padding: 5px" class="tourPrice6"></td>
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

       


        let tourPrices = {};
    // Event listener for tour select change
    document.getElementById('tourSelect').addEventListener('change', function() {
    const tourId = this.value;
    const childrenInputElement = document.getElementById('childrenInput');
    const adultsInputElement = document.getElementById('adultsInput');
    childrenInputElement.disabled = !tourId;
    adultsInputElement.disabled = !tourId;
    
    if (tourId) {
        // Fetch tour details based on the selected tour ID
        fetch('fetch_tour_details.php?tour_id=' + tourId)
        .then(response => response.json())
        .then(data => {
            tourPricesProxy.tour_price = data.tour_price;
            tourPricesProxy.tour_price1 = data.tour_price1;
            tourPricesProxy.tour_price2 = data.tour_price2;
            tourPricesProxy.tour_price3 = data.tour_price3;
            tourPricesProxy.tour_price4 = data.tour_price4;
            tourPricesProxy.tour_price6 = data.tour_price6;
            // Update the table with tour details
            const tourNameCells = document.querySelectorAll('.tourName');
            const tourPriceCells = document.querySelectorAll('.tourPrice');
            const tourPriceCell1 = document.querySelectorAll('.tourPrice1')[0]; // Access the first element from the NodeList
            const tourPriceCell2 = document.querySelectorAll('.tourPrice2')[0]; // Access the first element from the NodeList
            const tourPriceCell3 = document.querySelectorAll('.tourPrice3')[0]; // Access the first element from the NodeList
            const tourPriceCell4 = document.querySelectorAll('.tourPrice4')[0]; // Access the first element from the NodeList
            const tourPriceCell5 = document.querySelectorAll('.tourPrice5')[0];
            const tourPriceCell6 = document.querySelectorAll('.tourPrice6')[0]; // Access the first element from the NodeList
            const tour_details = document.getElementById('tour_details');
            const tinclude = document.getElementById('tinclude');

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
            tourPriceCell6.textContent = data.tour_price6;
            tour_details.innerHTML = decodedHtml;
            tinclude.innerHTML = decodedHtml1;
            tourNameCells.forEach(cell => {
                cell.textContent = data.tour_name;
            });
            tourPriceCells.forEach(cell => {
                cell.textContent = data.tour_price;
            });

            const vehicaleSelect = document.getElementById('vehicale');
            vehicaleSelect.innerHTML = '<option value="0">--select--</option>';

            if (data) {
                if (data.v1 && data.vp1) {
                    vehicaleSelect.innerHTML += `<option value="${data.vp1}">${data.v1} - ${"$"+data.vp1}</option>`;
                }
                if (data.v2 && data.vp2) {
                    vehicaleSelect.innerHTML += `<option value="${data.vp2}">${data.v2} - ${"$"+data.vp2}</option>`;
                }
                if (data.v3 && data.vp3) {
                    vehicaleSelect.innerHTML += `<option value="${data.vp3}">${data.v3} - ${"$"+data.vp3}</option>`;
                }
                // Repeat for other vehicles and their prices if available
            }
            
            // Auto-select option based on vehiclePrice parameter from URL
            const urlParams = new URLSearchParams(window.location.search);
            const vehiclePrice = urlParams.get('vehiclePrice');
            if (vehiclePrice) {
                for (let i = 0; i < vehicaleSelect.options.length; i++) {
                    if (vehicaleSelect.options[i].value === vehiclePrice) {
                        vehicaleSelect.selectedIndex = i;
                        console.log("Option selected:", vehicaleSelect.options[i].textContent);
                        // Trigger change event manually
            vehicaleSelect.dispatchEvent(new Event('change'));
                        break;
                    }
                }
            } else {
                console.log("Vehicle price not found in URL");
            }
        })
        .catch(error => console.error('Error fetching tour details:', error));
    }
});



let tourPricesProxy = new Proxy({}, {
    set: function(target, property, value) {
        // Set the property value
        target[property] = value;
        // Trigger the event listener when tourPrices changes
        console.log("Tour Prices have been updated:");
        console.log(`${property}: ${value}`);
        return true;
    }
});
// Create a Proxy for the tourPrices object

// Function to calculate the total price
document.getElementById('parkSelect').addEventListener('change', function() {
  const childrenInputElement = document.getElementById('childrenInput');
    const adultsInputElement = document.getElementById('adultsInput');
    
    childrenInputElement.value = '0';
    adultsInputElement.value = '0';
});
function calculateTotalPrice() {
    const adultsCount = parseInt(document.getElementById('adultsInput').value);
    const childrenCount = parseInt(document.getElementById('childrenInput').value);
    const parkId = document.getElementById('parkSelect').value;
    let activityPrice = 0; // Initialize activity price to 0
    let vehicalePrice = 0; // Initialize vehicle price to 0

    // Get the prices of selected activity and vehicle if they are not '--select--'
   
    if (document.getElementById('vehicale').value !== '') {
        vehicalePrice = parseInt(document.getElementById('vehicale').value);
    }
    
    const adultPrice = adultsCount === 1 ? parseInt(tourPricesProxy.tour_price.replace(/\D/g, ''), 10) :
        adultsCount === 2 ? parseInt(tourPricesProxy.tour_price1.replace(/\D/g, ''), 10) :
        adultsCount === 3 ? parseInt(tourPricesProxy.tour_price2.replace(/\D/g, ''), 10) :
        adultsCount === 4 ? parseInt(tourPricesProxy.tour_price3.replace(/\D/g, ''), 10) :
        adultsCount === 5 ? parseInt(tourPricesProxy.tour_price4.replace(/\D/g, ''), 10) :
        adultsCount === 6 ? parseInt(tourPricesProxy.tour_price5.replace(/\D/g, ''), 10) :
        adultsCount === 7 ? parseInt(tourPricesProxy.tour_price6.replace(/\D/g, ''), 10) :
        
        0;

    let childrenPrice;
    if (parkId === '4') {
        childrenPrice = 3.27 * childrenCount; // Update children price calculation for parkId = 4
    } else {
        childrenPrice = (parseInt(tourPricesProxy.tour_price.replace(/\D/g, ''), 10) / 2) * childrenCount; // Calculate children price
    }

    const totalPrice = adultPrice + childrenPrice + vehicalePrice;
    console.log('Total Price:', totalPrice);

    document.getElementById('totalPrice').innerHTML = 'Total Price: <strong>US $' + totalPrice.toFixed(2) + '</strong>';
}

// Event listener for input changes
document.getElementById('adultsInput').addEventListener('input', calculateTotalPrice);
document.getElementById('childrenInput').addEventListener('input', calculateTotalPrice);
document.getElementById('tourSelect').addEventListener('change', calculateTotalPrice);

document.getElementById('vehicale').addEventListener('change', calculateTotalPrice);

window.addEventListener('DOMContentLoaded', (event) => {
    var selectElement = document.getElementById('vehicale');
    if (selectElement) {
        var urlParams = new URLSearchParams(window.location.search);
        var vehiclePrice = urlParams.get('vehiclePrice');
        console.log("vehiclePrice:", vehiclePrice);

        for (var i = 0; i < selectElement.options.length; i++) {
            console.log("option value:", selectElement.options[i].value);
            if (selectElement.options[i].value == vehiclePrice) {
                selectElement.selectedIndex = i;
                console.log("Option selected:", selectElement.options[i].textContent);
                break;
            }
        }
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
    <script src="email.js"></script>
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
