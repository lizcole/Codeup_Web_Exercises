var myNameIs = 'Liz';

function sayHello(name) {
	alert(name + " says Hello!");
}

sayHello(myNameIs);

var random = Math.floor((Math.random()*100)+1);
console.log(random);

function isOdd(number) {
	return (number % 2 != 0) ? true : false;
	}

console.log(isOdd(random));