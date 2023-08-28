/*$(".w").animate({"width":"100%"},200);
$(".w").animate({"height":"100vh"},2000,function(){
    $(".w h1").slideDown(1500);
});
*/

$(".sub-img").click(function(){
    let s=$(this).attr('src');
    $(".main-img").attr('src',s);
})


let colors=["red","yellow","blue","green","orange"];
for(let i=0;i<colors.length;i++){
    $(".color-options li").eq(i).css("backgroundColor",colors[i]);//لوضع الالوان في المربعات
    //eq:كل تاغ اله اندكس  
    //  الاولىli : الاندكس الها 0
//eq(0):li الاولى
//eq(1):li الثانية
}


$(".color-options li").click(function(){
    let bg=$(this).css("backgroundColor");//get:بتجيب لون الخلفية ل li الي كبست عليها
    $(".change").css("color",bg);//set : بتحط اللون الي كبست عليها لاي كلاس اسمه change
    //this ل li : يعني li الي كبست عليها
})


$(".colors-box i").click(function(){
    let optionwidth=$(".color-options").outerWidth();//لحساب عرض البكس كامل  عشان نقدر نخفيه بشكل كامل
    if($(".colors-box").css("left")=='0px'){
        $(".colors-box").animate({"left":-optionwidth},2000);//لادخال البكس 
    }
   else{
    $(".colors-box").animate({"left":0},2000);//لاخراج البكس :لارجاع البكس لوضعه الاصلي :left:0
   }
})
window.onscroll = function() {myFunction()};
function myFunction() {
    if (document.documentElement.scrollTop > 20) {
        $(".im").animate({left: '50px'},1000);
        $(".d").animate({right: '50px'},2000);
        $("h2").animate({fontSize: '3em'}, 2000);
        $("h2").animate({ opacity: '1'}, 1000);
    } 
  }

     
     
