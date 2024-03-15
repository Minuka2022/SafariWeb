// //contact form js
// (function($) {
//     'use strict';
//         // validations start here
//         $('#contact_form').validate({

//             rules: {

//                 fname: {
//                     required: true
//                 },
//                 lname: {
//                     required: true
//                 },
//                 con_phone: {
//                     required: true
//                 },
//                 con_country: {
//                     required: true
//                 },
//                 con_message: {
//                     required: true
//                 },
//                 con_email: {
//                     required: true,
//                     email: true
//                 }
//             },

//             messages: {

//                 fname: {
//                     required: 'First name must be filled out.'
//                 },
//                 lname: {
//                     required: 'Last name must be filled out.'
//                 },
//                 con_phone: {
//                     required: 'Phone must be filled out.'
//                 },
//                 con_country: {
//                     required: 'Country must be filled out.'
//                 },
//                 con_message: {
//                     required: 'Message must be filled out.'
//                 },

//                 con_email: {
//                     required: 'Email must be filled out.',
//                     email: 'Your email must be valid.'
//                 }
//             },

//             submitHandler: function() {

//                 var fname = $('#fname').val();
//                 var lname = $('#lname').val();
//                 var con_phone = $('#con_phone').val();
//                 var con_country = $('#con_country').val();
//                 var con_message = $('#con_message').val();
//                 var con_email = $('#con_email').val();
                 

//                 // var frmdata = {
//                 //     fname : fname,
//                 //     lname : lname,
//                 //     con_phone : con_phone,
//                 //     con_country : con_country,
//                 //     con_message : con_message,
//                 //     con_email : con_email
//                 // }
 
//                 // console.log(frmdata);
                
//             }
//         });
// }(jQuery));
(function () {
  emailjs.init({
    publicKey: "ByGtGdrFH3hTUSRXj",
  });
})();

src =
  "https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js" >
  (function () {
    emailjs.init("ByGtGdrFH3hTUSRXj");
  })();
// Initialize Email.js with your user ID
emailjs.init("ByGtGdrFH3hTUSRXj");
  
 // Attach the submit event to the form
$("#contact_form").on("submit", function (e) {
  e.preventDefault();

  // Get values from the form
  var fname = $('#fname').val();
  
  var phone = $('#con_phone').val();
  var country = $('#con_country').val();
  var message = $('#con_message').val();
  var email = $('#con_email').val();

  // Your Email.js template ID and parameters
  var templateParams = {
    fname: fname,
    phone: phone,
    country: country,
    message: message,
    email: email
  };

  console.log("Data received", templateParams);

  // Send email using Email.js
  return new Promise(function(resolve, reject) {
     emailjs.send("service_qrywujt", "template_vf64ojf", templateParams).then(
       function (response) {
         // Email sent successfully, trigger success popup
         $(".popup").removeClass("opened");
         $("#contact-us-success").addClass("opened");
         alert("Email sent successfully!");
         resolve();
       },
       function (error) {
         // Handle error if email sending fails
         console.error("Failed to send email", error);
         alert("Failed to send email. Please try again.");
         reject(error);
       }
     );
  });
});
