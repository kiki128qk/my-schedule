<header>
    <div class="center headerWrap">
        <a href="/my-schedule/index.php"><i class="fa fa-home"></i></a>
            <!-- hollow = 비어있다 -->
        <h1 id="title">Schedule Dashboard</h1>
        <div class="mIcon">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>

<script>
  const pathname = window.location.pathname;
  const changeTit = document.querySelectorAll('#title');


  if(pathname.includes('input_form')){
    changeTit.innerHTML ="Schedule Input";
  } 
  //console.log(gnbLi);
</script>