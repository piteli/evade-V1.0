



<form name="myForm">
    <input type="radio" name="myRadios"  value="1" />
    <input type="radio" name="myRadios"  value="2" />
</form>

<script>
    var rad = document.myForm.myRadios;
    var prev = null;
    for(var i = 0; i < rad.length; i++) {
        rad[i].onclick = function() {
            (prev)? console.log(prev.value):null;
            if(this !== prev) {
                prev = this;
            }
            console.log(this.value)
        };
    }
</script>


        
