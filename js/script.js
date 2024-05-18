var countDownDate = new Date("April 30, 2025 00:00:00").getTime();
var x = setInterval(updateCountdown, 1000);

function updateCountdown() {
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  document.getElementById("days").innerHTML = formatTime(days);
  document.getElementById("hours").innerHTML = formatTime(hours);
  document.getElementById("minutes").innerHTML = formatTime(minutes);
  document.getElementById("seconds").innerHTML = formatTime(seconds);
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "EXPIRED";
  }
}
function formatTime(time) {
  return time < 10 ? "0" + time : time;
}
function updateCountdownDate(newDate) {
  countDownDate = new Date(newDate).getTime();
}
updateCountdownDate("May 15, 2025 00:00:00");






