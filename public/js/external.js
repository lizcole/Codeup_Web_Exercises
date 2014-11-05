var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];

var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'blue'; 

if (color == 'red') {
	console.log(color + ' is the color of a cardinal')
}
else if (color == 'orange') {
	console.log(color + ' is the color of traffic cones')
}
else if (color == 'yellow') {
	console.log(color + ' is the color the sun')
}
else if (color == 'green') {
	console.log(color + ' is the color of zucchini')
}
else if (color == 'blue') {
	console.log(color + ' is the color of water reflecting the sky')
}
else {
	console.log('I don\'t know anything about this ')
}

var message = (color == favorite) ? "This is my fav color" : "This is not my fav color";

console.log(message);