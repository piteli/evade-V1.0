Enter first number:
    <input type="number" id="w1" name="text1" onchange="myFunction()">
    Enter second number:
    <input type="number" id="w2" name="text2" onchange="myFunction()">


<?php

echo $this->Form->create();
echo $this->Form->input('eva_nskill',['id'=>'point','readonly'=>'readonly','label'=>'this is your balance credit']);
echo $this->Form->hidden('Attribute_Score1', array('id' => 'a1','label'=>'please enter number one'));
echo $this->Form->hidden('Attribute_Score1', array('id' => 'a2','label'=>'please enter number two'));


foreach($oi as $we){
	foreach($beb as $bab){
	 echo '<table>';
	 echo '<tr>';
	 echo '<td>'.$we.'</td>';
	 echo '<td>'.$bab.'</td>';
	}
}



?>

<script>
var php = <?php echo json_encode($waa->role); ?>;
myFunction(php);


function myFunction(){
        var y = document.getElementById("w1").value;
        
        var z = document.getElementById("w2").value;
        var x = +y + +z;
        var total = php - x;
        document.getElementById('point').value = total;
      }
</script>


    


        