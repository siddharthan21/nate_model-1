setInterval(function () {
    load();
    // alert("hai");
},6000);
function load(){
    var src =["../assets/imge/hmgoepprod (1).jpeg","../assets/imge/hmgoepprod.jpeg"]

    setInterval(function(){
        $(".changeimg").animate({
            // opacity: '.7'
          });
    },200)
    if($(".changeimg").attr("src")==src[0]){
    $(".changeimg").attr("src",src[1]);
    }else{
    $(".changeimg").attr("src",src[0]);
    }

}

// setInterval(set(),5000);
// function set(){
//     $(".changeimg").addClass("move");
//     $(".changeimg").removeClass("move");
// }