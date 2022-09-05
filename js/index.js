// $(function() {
//   var Accordion = function(el, multiple) {
//     this.el = el || {};
//     // more then one submenu open?
//     this.multiple = multiple || false;
    
//     var dropdownlink = this.el.find('.dropdownlink');
//     dropdownlink.on('click',
//                     { el: this.el, multiple: this.multiple },
//                     this.dropdown);
//   };
  
//   Accordion.prototype.dropdown = function(e) {
//     var $el = e.data.el,
//         $this = $(this),
//         //this is the ul.submenuItems
//         $next = $this.next();
    
//     $next.slideToggle();
//     $this.parent().toggleClass('open');
    
//     if(!e.data.multiple) {
//       //show only one menu at the same time
//       $el.find('.submenuItems').not($next).slideUp().parent().removeClass('open');
//     }
//   }
  
//   var accordion = new Accordion($('.accordion-menu'), false);
// })
// h_자퇴신청,휴학신청 등 프린트
// print.js
var initBody
function beforePrint()
{
initBody = document.body.innerHTML;
document.body.innerHTML = idPrint.innerHTML;
}

function afterPrint()
{
document.body.innerHTML = initBody;
}

function printArea()
{
window.print();
}

window.onbeforeprint = beforePrint;
window.onafterprint = afterPrint;

//자퇴신청 선택.js
function dropout(ele){
  var $ele = $(ele);
  var $dropout_res = $('input[name=dropout_res]');

  // '1,2,3'인 경우 직접입력
  if($ele.val() == "1" || $ele.val() == "2" || $ele.val() == "3"){
      $dropout_res.attr('readonly', false);
      $dropout_res.val('');

  } else {
      $dropout_res.attr('readonly', true);
      $dropout_res.val($ele.val());
  }
// 1, 2인경우 대학교작성 문구
  if($ele.val() == "1" || $ele.val() == "2"){
          document.getElementById('check').innerHTML='*대학교를 작성해주세요'
          document.getElementById('check').style.color='gray';
          document.getElementById('check').style.fontSize='10pt';
      }else{
          document.getElementById('check').innerHTML=''
      }
  if($ele.val() == "3"){ //3인경우 기타 사유 작성문구
          document.getElementById('check').innerHTML='*기타사유를작성해주세요'
          document.getElementById('check').style.color='gray';
          document.getElementById('check').style.fontSize='10pt';
      }
}

//010.011 입력방식 선택
function selectphone(ele){
  var $ele = $(ele);
  var $f = $('option[name=f]');
  var $s = $('option[name=s]');

  $f.attr('readonly', true);
  $f.val($ele.val());
}
 
//휴학날짜 계산
function yydate(){
  let year = document.getElementById('yy')+1;
  document.getElementById('ee_date').innerHTML = year + "년도 &nbsp";
}

var currentYear = document.getElementById('year').value;
var res = currentYear + 1;
document.getElementById('ee_date').innerText = res + "년도";