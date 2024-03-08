//for a bunch of posts or page items, will space them so that they fit close together vertically
var posts, count,
  width,
  wWidth, wHeight, columns = [],
  margin = {
    top: 10,
    right: 10,
    bottom: 10,
    left: 10
  };

window.onload = function() {
  posts = document.getElementsByClassName("fittable-inner-wrap");
  define();
  organize();
}
window.onresize = function() {
  define();
  organize();
}

function define() {
  wWidth = window.innerWidth;
  wHeight = window.innerHeight;
  width = posts[0].clientWidth;
  count = Math.floor(document.getElementsByClassName("fittable-wrap")[0].clientWidth / width);
}

function organize() {
  if (false && count <= 1) {
    //return;
  }
  for (i = 0; i < count; i++) {
    columns[i] = 0;
  }
  for (i = 0; i < posts.length; i++) {
    var c = posts[i].style;
    c.position = "absolute";
    c.margin = 0;
    c.left = width * (i % count) + (i % count) * margin.left + Math.round((wWidth - count * width) / 2) - 25 + "px";
    if (i > (count - 1)) {
      columns[i % count] += posts[i - count].offsetHeight;
      c.top = columns[i % count] + Math.floor(i / count) * margin.top + "px";
    }
  }
  document.getElementsByClassName("fittable-wrap")[0].style.height = columns[0] + posts[posts.length - 1].offsetHeight + 50 + "px";
}