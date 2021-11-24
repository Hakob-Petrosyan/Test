
var costs = document.getElementsByClassName("cost")
for (let i = 0; i < costs.length; i++) {
   costs[i].addEventListener('click', f1)
}

var price = 0

function f1() {
   var cost1 = this.innerHTML * 1
   price += cost1
   var dost1 = price * 0.08  //доставка 8% от покупки
   dostavka.innerHTML = dost1
   fullprice.innerHTML = price;
   full.innerHTML = dost1 + price;
}

function f2() {
   if (price > 5000) {
      bonus.innerHTML = price * 0.05
   }
   else {
      bonus.innerHTML = "получайте бонуси от 5000р"
   }
}