do {
	var random = Math.floor((Math.random()*50)+1);
} while (random % 2 == 0);

console.log('Here is a random odd number: ' + random);

for(i = 1; i <= 50; i++) {

if(i == random){
	console.log('You skipped the random number: ' + random);
}	
else if(i % 2 != 0) {
	console.log('Here is an odd number: ' + i);
	continue;
}
}
