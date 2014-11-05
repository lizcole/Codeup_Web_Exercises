for (var i = 100; i >=5; i -= 5) {
    console.log(i);
}

console.log('-----------------');
console.log("FizzBuzz");

for (var numbers = 1; numbers <= 100; numbers++){

	if((numbers % 3 == 0) && (numbers % 5 == 0)) {
		console.log("FizzBuzz");
	}
	else if(numbers % 3 == 0){
		console.log("Fizz");
	}
	else if(numbers % 5 == 0){
		console.log("Buzz");
	}
	else{
		console.log(numbers);
	}
}
