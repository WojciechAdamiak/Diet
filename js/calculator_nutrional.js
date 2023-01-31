console.log('Formularz Wartości odżywczych');

const submitForm = (event) => {
  event.preventDefault();

  let quantity = document.querySelector('[name="quantity"]');

  let products = document.querySelector('[name="products"]');

  console.log(`${products.value} o ilości ${quantity.value}gram.`);
}

let form = document.getElementById('form');

form.addEventListener('submit', submitForm);

console.log(form);
