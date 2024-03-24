$(document).ready(function() {
    // Initialize EmailJS with your account ID
    emailjs.init("4Ka-C28fB9Wo7uUUS");

    // Add event listener to the button for sending emails
    $("#emailjs").on("click", function (e) {
        e.preventDefault();
        
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
    });
});
