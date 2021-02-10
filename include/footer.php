<footer>
    <p>Disigned by MyDesign : mydesign@nosub.com</p>
</footer>

<script>

  const pathname = window.location.pathname;
  const changeTit = document.querySelector('#title');
  const rateNum = document.querySelectorAll('.rateNum');

  if(pathname.includes('input_form')){
    changeTit.innerHTML ="Schedule Input";
    for(let i=0; i < rateNum.length; i++){
        rateNum[i].readOnly=true;
    }
  } 
  //console.log(gnbLi);
</script>