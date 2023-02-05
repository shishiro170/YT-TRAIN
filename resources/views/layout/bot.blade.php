<div class="container-nav" id="myGenre">
    <div class="column-bot card">
                    <a href="#">
                        all
                    </a>
    </div>
    <div class="column-bot card">
                    <a href="#">
                        all
                   </a>              
    </div>
    <div class="column-bot card">
        <a href="#">
            all
        </a>
    </div>
    <div class="column-bot card">
        <a href="#">
            all
        </a>
    </div>
    <div class="column-bot card">
        <a href="#">
            all
        </a>
    </div>
    <div class="column-bot card">
        <a href="#">
            all
        </a>
    </div>
    <div class="column-bot card">
        <a href="#">
            all
        </a>
    </div>
    <div class="column-bot card">
        <a href="#">
            all
        </a>
    </div>
    <div class="column-bot card">
        <a href="#">
            all
        </a>
    </div>
    <div class="column-bot card">
        <a href="#">
            all
        </a>
    </div> 
    <div class="column-bot card">
        <a href="#">
            all
        </a>
    </div> 
    <div class="column-bot card">
        <a href="#">
            all
        </a>
    </div>     <div class="column-bot card">
        <a href="#">
            all
        </a>
    </div> 
    <div class="column-bot card">
        <a href="#">
            all
        </a>
    </div>     
</div>
<div class="container-nav" id="Down" >
    <span>
        <a href="#" onclick="openGenre()">
            <i id="button" class="fa-solid fa-angle-down"></i>
            <a  onclick="closeGenre()" >
                <i style="display:none" id="close" class="fa-solid fa-angle-up"></i>
            </a>
        </a>
        
    </span>
</div>

<script>
function openGenre() {
    document.getElementById("myGenre").style.height= "80px";
    document.getElementById("button").style.display="none";
    document.getElementById("close").style.display="block";
  }
function closeGenre() {
    document.getElementById("myGenre").style.height = "34px";
    document.getElementById("button").style.display="block"
    document.getElementById("close").style.display="none";
    
  }
   
</script>