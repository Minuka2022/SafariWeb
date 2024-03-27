$(document).ready(function() {
    // Initialize EmailJS with your account ID
    emailjs.init("4Ka-C28fB9Wo7uUUS");

    // Add event listener to the button for sending emails
    $("#emailjs").on("click", function (e) {
        e.preventDefault();
        
        // Check if required fields are filled out
        if (isValidForm()) {
            // If validation passes, proceed to send emails
            sendEmails();
        } else {
            // Show alert if required fields are empty
            alert('Please fill out all required fields.');
        }
    });

    // Function to check if required fields are filled out
    function isValidForm() {
        // Add conditions to check if the required fields are not empty or equal to 0
        if ($("#parkSelect option:selected").val() === "" || $("#parkSelect option:selected").val() === "0" ||
            $("#tourSelect option:selected").val() === "" || $("#tourSelect option:selected").val() === "0" ||
            $("#adultsInput").val() === "" || $("#adultsInput").val() === "0" ||
            // $("#childrenInput").val() === "" || $("#childrenInput").val() === "0" ||
            $("#vehicale option:selected").val() === "" ||
            $("#dateInput").val() === "") {
            return false;
        }
        return true;
    }

    // Function to send emails
    function sendEmails() {
        const formData = {
            totalPrice: $("#totalPrice").text(),
            park: $("#parkSelect option:selected").text(),
            tour: $("#tourSelect option:selected").text(),
            activities: $("#Activities option:selected").text(),
            vehicle: $("#vehicale option:selected").text(),
            date: $("#dateInput").val(),
            adults: $("#adultsInput").val(),
            children: $("#childrenInput").val(),
            notes: $("#notesInput").val(),
            email: $("#EmailInput").val(),
            contact: $("#ContactInput").val(),
            name: $("#NameInput").val()
        };

        // Send email to yourself
        emailjs.send('service_66vfecl', 'template_9wwe9hr', formData)
            .then(function(response) {
                console.log('Email sent to yourself:', response);

                // Send email to the customer
                emailjs.send('service_66vfecl', 'template_l3sruvd', formData)
                    .then(function(response) {
                        console.log('Email sent to customer:', response);
                        // Redirect to thank-you.html after successful email sending
                        window.location.href = 'thank-you.html';
                    }, function(error) {
                        console.error('Error sending email to customer:', error);
                        // Show error message in a popup
                        alert('Error sending email to customer: ' + error);
                    });
            }, function(error) {
                console.error('Error sending email to yourself:', error);
                // Show error message in a popup
                alert('Error sending email to yourself: ' + error);
            });
    }
});
