// const displayeer=document.querySelectorAll('.subnav .child');

document.addEventListener('DOMContentLoaded', function() {
  const links = document.querySelectorAll('.axum10 .ca221');
  const containers = document.querySelectorAll('.axum10');
  
  for (let i = 0; i < links.length; i++) {
    links[i].addEventListener('click', function(e) {
      e.preventDefault(); 
      const title =  containers[i].querySelector('.title').innerHTML;
      const hpricee = containers[i].querySelector('.hprice').innerHTML;
      goToPage1(title ,hpricee); 
      links[i].classList.add('active'); 
    });
  }
});
function goToPage1(title, hpricee) {
  const hprice=hpricee;
  const imageUrl = title;
  const content = document.getElementById("destination").innerHTML;
  const tour_price = document.getElementById("tourprice").innerHTML;
  const url =
    "money transaction.php?imageUrl=" +
    encodeURIComponent(imageUrl) +
    "&content=" +
    encodeURIComponent(content)+ "&hprice=" +
    encodeURIComponent(hprice)+ "&tour_price=" +
    encodeURIComponent(tour_price);
  window.location.href = url;
}
function setContent() {
  const urlParams = new URLSearchParams(window.location.search);
  const imageUrl = urlParams.get('imageUrl');
  const content = urlParams.get('content');
  const hprice=urlParams.get('hprice');
  const tour_price=urlParams.get('tour_price');
  document.getElementById("hotel").value = imageUrl;
  document.getElementById("destination").value = content;
  document.getElementById("hprice").value = hprice;
  document.getElementById("trprice").value = tour_price;
  document.getElementById('totalprice').value=Number(hprice)+Number(tour_price);
}
function displayer(){
 document.getElementsByClassName("hotels").style.display="none";
}