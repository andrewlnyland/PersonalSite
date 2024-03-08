/* Author: Aaron Weeden, Shodor, 2015 */

/* This code runs when the user clicks the "Run" button */
run = function() {

  /* Generate a random number */
  var randNum = Math.random();
  var outputs = ["It is certain","It is decidedly so","Without a doubt","You may rely on it","As I see it, yes","Most likely","Outlook good","Yes","Signs point to yes","Reply hazy, try again","Ask again later","Better not tell you now","Cannot predict now","Concentrate and ask again","Don't count on it","My reply is no","My sources say no","Outlook not so good","Very Doubtful","Yes, definitely"];
  var output;
  
  //calculate
  output = outputs[Math.floor(randNum*outputs.length)];
  
 /* if (randNum < 1/20) {
  	output = "It is certain";
  }
  else if (randNum < 2/20) {
  	output = "It is decidedly so";
  }
  else if (randNum < 3/20) {
  	output = "Without a doubt";
  }
  else if (randNum < 4/20) {
  	output = "You may rely on it";
  }
  else if (randNum < 5/20) {
  	output = "As I see it, yes";
  }
  else if (randNum < 6/20) {
  	output = "Most likely";
  }
  else if (randNum < 7/20) {
  	output = "Outlook good";
  }
  else if (randNum < 8/20) {
  	output = "Yes";
  }
  else if (randNum < 9/20) {
  	output = "Signs point to yes";
  }
  else if (randNum < 10/20) {
  	output = "Reply hazy, try again";
  }
  else if (randNum < 11/20) {
  	output = "Ask again later";
  }
  else if (randNum < 12/20) {
  	output = "Better not tell you now";
  }
  else if (randNum < 13/20) {
  	output = "Cannot predict now";
  }
  else if (randNum < 14/20) {
  	output = "Concentrate and ask again";
  }
  else if (randNum < 15/20) {
  	output = "Don't count on it";
  }
  else if (randNum < 16/20) {
  	output = "My reply is no";
  }
  else if (randNum < 17/20) {
  	output = "My sources say no";
  }
  else if (randNum < 18/20) {
  	output = "Outlook not so good";
  }
  else if (randNum < 19/20) {
  	output = "Very Doubtful";
  }
  else {
  	output = "Yes, definitely";
  }*/
  
  //output = randNum;

  /* Print the computed output in HTML */
  document.getElementById("output-box").innerHTML = output;
}