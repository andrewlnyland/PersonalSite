var count=30;

var counter=setInterval(timer, 1000); //1000 will  run it every 1 second

function timer()
{
  count=count-1;
  if (count <= 0)
  {
     clearInterval(counter);
     location.reload(); //counter ended, do something here
     return;
  }

  //Do code for showing the number of seconds here
}