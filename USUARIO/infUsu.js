const form = document.getElementById('personal-info-form');

form.addEventListener('submit', (event) => {
  event.preventDefault();

  const firstName = document.getElementById('first-name').value;
  const lastName = document.getElementById('last-name').value;
  const nationality = document.getElementById('nationality').value;
  const email = document.getElementById('email').value;
  const phoneNumber = document.getElementById('phone-number').value;
  const bio = document.getElementById('bio').value;

  // Send the data to the server
  console.log(`First Name: ${firstName}`);
  console.log(`Last Name: ${lastName}`);
  console.log(`Nationality: ${nationality}`);
  console.log(`Email: ${email}`);
  console.log(`Phone Number: ${phoneNumber}`);
  console.log(`Bio: ${bio}`);
});