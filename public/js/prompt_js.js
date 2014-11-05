// todo: Ask the user for their name.
//       Keep asking if an empty input is provided.


do{ var response = prompt('What is your Name?')
} while (response == '' || response == null );

console.log(response);

// todo: Show an alert message that welcomes the user based on their input.

alert('Hello ' + response + '!');

// todo: Ask the user if they like pizza.
//       Based on their answer tell show a creative alert message.

var pizza = confirm(response + ', do you like pizza?');

// if(pizza == true) {
// 	alert('yay you like pizza!');
// } else {
// 	alert('why you no like pizza?');}

alert(pizza == true ? 'yay you like pizza' : 'why you no like pizza?');