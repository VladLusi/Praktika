var r = document.querySelectorAll(".photo");
var image = document.getElementById("photo");
var l = r.length;

var t=document.getElementById("phito");
t.addEventListener('click', function(){

for(i = 0; i < l; i++){
    r[i].classList.remove("active");
}
    var pp=document.getElementById("ff").value;
    if (pp==(l-1)){
        pp=0;
      }else{
        pp++;
      };

r[pp].classList.add("active");
    document.getElementById("ff").value= pp;
});

var y=document.getElementById("phooto");
y.addEventListener('click',function(){

        for(i = 0; i < l; i++){
            r[i].classList.remove("active");
        }
            var pp=document.getElementById("ff").value;
  if (pp == 0){
    pp = l - 1;
  }else{
        pp--;
  };
        r[pp].classList.add("active");
        document.getElementById("ff").value= pp;

});
//Корзина






