window.onscroll = () =>{
    if (window.scrollY > 60) {
        document.querySelector('#scroll-top').classList.add('active');
        
    } else {
        document.querySelector('#scroll-top').classList.remove('active');
    }
}
function redirectToOrder(event) {
    event.preventDefault(); // Prevents default form submission

    // Retrieve user input (optional, if you need to process it)
    const name = document.querySelector('input[placeholder="Name"]').value;
    const email = document.querySelector('input[placeholder="E-mail"]').value;
    const phone = document.querySelector('input[placeholder="Phone Number"]').value;
    const food = document.querySelector('input[placeholder="machine Name"]').value;
    const address = document.querySelector('textarea[placeholder="Address"]').value;

    // Optional: Store data in local storage (or send it to a server)
    localStorage.setItem('orderDetails', JSON.stringify({ name, email, phone, food, address }));

    // Redirect to the confirmation page
    window.location.href = 'order-confirmation.html';
}
