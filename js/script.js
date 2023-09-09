
var countDownDate = new Date("sep 10, 2023 11:57:40").getTime();

var x = setInterval(function() {

  var counter = document.querySelector("#countdown");
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
   
  counter.innerHTML = days + " يوم " + hours + " ساعة "
  + minutes + " دقيقة " + seconds + " ثانية ";
  if (distance < 0) {
    clearInterval(x);
    counter.innerHTML = "انتهى التسجيل";
  }
}, 1000);

// Pick winner
const win = document.querySelector("#winner");
const loader = document.querySelector(".loader-con");

//  var myModal = new bootstrap.Modal(document.getElementById('modal'), {
//   Keyboard : false
// });
// win.addEventListener('click', function(){
//   // loader.style.display = 'block';
//    setTimeout(function() { 
//      myModal.show();
//    }, 2000);
//    });

   ///////////////

    // function delayedFunction() {
    //   document.getElementById("model").style.display = "block";
    // }
    win.addEventListener("click", function() {
      loader.style.display = 'block';
      // setTimeout(delayedFunction,5000);

      setTimeout(function() {
        loader.style.display = 'none';
        document.getElementById("model").style.display = "block";
         myFunction();
         return;
      }, 5000);
    });


    document.addEventListener('DOMContentLoaded', function() {
      const close = document.getElementById("close");
      const model = document.getElementById("model");
    
     
      close.addEventListener('click', function() {
        model.style.display = 'none';
        loader.style.display = 'none';
        myFunction().return
    
        // if (model.style.display = 'none') {
        
        // }
      });
   
    
    });
