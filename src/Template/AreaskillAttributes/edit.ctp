<div class="panel panel-primary">
<div class="panel-heading"><h4><i class="fa fa-calculator"></i> Student Evaluation Marks </h4>   </div>


<div class="panel-body">
<?= $this->Form->create($areaskillAttribute) ?>
<?php echo $this->Form->hidden('nursing_id')?>

<p align="justify">
<div class="form-group input-group"><span class="input-group-addon">Student Name:</span>
<?php echo $this->Form->input('Attribute_Name', array('readonly'=>'readonly' , 'class'=>'form-control', 'label'=>false)); ?></div> 
<div class="form-group input-group"><span class="input-group-addon">Student Id No:</span>
<?php echo $this->Form->input('Attribute_No', array('readonly'=>'readonly' , 'class'=>'form-control', 'label'=>false)); ?></div>
</p>

  

<table class="table table-bordered table-hover ">
<tr>
<th>1. Appearance and Discipline (Marks: 0,1)</th>
<th>Marks Achieved</th>
</tr>
<tr>
<td>1.1 Maintains cleanliness and neatness</td>
<td>
  <select id="a1" onchange="changeFunc(); gTotal1(); ">
   <option value="0">0</option>
   <option value="1">1</option>
   
  </select>
</td>
</tr>
<tr>
<td>1.2 Wear complete uniform / appropriate clothing</td>
<td>
  <select id='b1' onchange="changeFunc(); gTotal1();">
  <option value="0">0</option>
  <option value="1">1</option>
</td>
</tr>
<tr>
<td>1.3 Punctuality</td>
<td>
  <select id='c1' onchange="changeFunc(); gTotal1();">
  <option value="0">0</option>
  <option value="1">1</option>
</td>
</tr>
<tr>
<td>1.4 Follow organizational procedures</td>
<td>
  <select id='d1' onchange="changeFunc(); gTotal1();">
  <option value="0">0</option>
  <option value="1">1</option>
</td>
</tr>
<tr>
<td>1.5 Demonstrate the ability to use time effectively</td>
<td>
  <select id='e1' onchange="changeFunc(); gTotal1();">
  <option value="0">0</option>
  <option value="1">1</option>
</td>
</tr>
<tr>
<td>Total</td>
<td align=left>
  <script type="text/javascript"> 
  

   function changeFunc() 
  {
    var aSelect = document.getElementById('a1');
        var bSelect = document.getElementById('b1');
        var cSelect = document.getElementById('c1');
        var dSelect = document.getElementById('d1');
        var eSelect = document.getElementById('e1');
        var aValue = aSelect.options[aSelect.selectedIndex].value;
        var bValue = bSelect.options[bSelect.selectedIndex].value;
        var cValue = cSelect.options[cSelect.selectedIndex].value;
        var dValue = dSelect.options[dSelect.selectedIndex].value;
        var eValue = eSelect.options[eSelect.selectedIndex].value;
        var total1 = parseInt(aValue) + parseInt(bValue) + parseInt(cValue) + parseInt(dValue) + parseInt(eValue);
        var weightage1 = ((parseInt(aValue) + parseInt(bValue) + parseInt(cValue) + parseInt(dValue) + parseInt(eValue))*2.4);
    
    document.getElementById("t1").value=total1;
    document.getElementById("w1").value=weightage1;
   }
   </script>
<input type="text" id="t1" value="0" size="2" readonly/>
</td>
</tr>
<tr>
<td><strong>Weightage(%)</strong></td>
<td align=left>
<?php echo $this->Form->input('Attribute_Score1', array('id' => 'w1','readonly'=>'readonly','label'=>false))?>
</td>
</tr>
</table>
<?= $this->Form->button(__('Submit')) ?>
<br/>
<br/>




<table class="table table-bordered table-hover">
<tr>
<th>2. Communication Skills (marks : 0,1,2)</th>
<th>Marks Achieved</th>
</tr>
<tr>
<td>2.1 Clear and concise</td>
<td align=left>
<select id='a2' onchange="changeFunc2(); gTotal2();">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
</td>
</tr>
<tr>
<td>2.2 Able to express opinion</td>
<td align=left>
<select id='b2' onchange="changeFunc2(); gTotal2();">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
</td>
</tr>
<tr>
<td>2.3 Able to communicate with fluency</td>
<td align=left>
<select id='c2' onchange="changeFunc2(); gTotal2();">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
</td>
</tr>
<tr>
<th>2.4 Non-verbal communication</th>
</tr>
<tr>
<td>2.4.1 Facial expression</td>
<td align=left>
<select id='d2' onchange="changeFunc2(); gTotal2();">
  <option value="0">0</option>
  <option value="1">1</option>
</td>
</tr>
<tr>
<td>2.4.2 Body language</td>
<td align=left>
<select id='e2' onchange="changeFunc2(); gTotal2();">
  <option value="0">0</option>
  <option value="1">1</option>
</td>
</tr>
<tr>
<td>Total</td>
<td align=left>
<script type="text/javascript"> 
   function changeFunc2() {
        var aSelect2 = document.getElementById('a2');
        var bSelect2 = document.getElementById('b2');
        var cSelect2 = document.getElementById('c2');
        var dSelect2 = document.getElementById('d2');
        var eSelect2 = document.getElementById('e2');
        var aValue2 = aSelect2.options[aSelect2.selectedIndex].value;
        var bValue2 = bSelect2.options[bSelect2.selectedIndex].value;
        var cValue2 = cSelect2.options[cSelect2.selectedIndex].value;
        var dValue2 = dSelect2.options[dSelect2.selectedIndex].value;
        var eValue2 = eSelect2.options[eSelect2.selectedIndex].value;
        var total2 = parseInt(aValue2) + parseInt(bValue2) + parseInt(cValue2) + parseInt(dValue2) + parseInt(eValue2);
        var weightage2 = ((parseInt(aValue2) + parseInt(bValue2) + parseInt(cValue2) + parseInt(dValue2) + parseInt(eValue2))*2.375);

        document.getElementById("t2").value=total2;
        document.getElementById("w2").value=weightage2;
    }
    </script>
    <input type="text" id="t2" value="0" size="2" readonly/>
</td>
</tr>
<tr>
<td><strong>Weightage(%)</strong></td>
<td align=left>
   <?php echo $this->Form->input('Attribute_Score2', array('id' => 'w2','readonly'=>'readonly','label'=>false))?>
</td>
</tr>
</table>
<?= $this->Form->button(__('Submit')) ?>
<br/>
<br/>





<table class="table table-bordered table-hover">
<tr>
<th>3. Attitude (Marks : 0,1,2)</th>
<th>Marks Achieved</th>
</tr>
<tr>
<th>3.1 Responsibility</th>
</tr>
<tr>
<td>3.1.1 Follow standard of practice in the clinical setting</td>
<td align=left>
<select id='a3' onchange="changeFunc3(); gTotal3();">
  <option value="0">0</option>
  <option value="1">1</option>
</td>
</tr>
<tr>
<td>3.1.2 Undestand the importance of clients confidentiality</td>
<td align=left>
<select id='b3' onchange="changeFunc3(); gTotal3();">
  <option value="0">0</option>
  <option value="1">1</option>
</td>
</tr>
<tr>
<th>Assertiveness</th>
</tr>
<tr>
<td>3.1.2 Leadership qualities</td>
<td align=left>
<select id='c3' onchange="changeFunc3(); gTotal3();">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
</td>
</tr>
<tr>
<td>3.2.3 Able to accept constructive critism</td>
<td align=left>
<select id='d3' onchange="changeFunc3(); gTotal3();">
  <option value="0">0</option>
  <option value="1">1</option>
</td>
</tr>
<tr>
<th>3.3 Group dynamics</th>
</tr>
<tr>
<td>3.3.1 Demostrate ability to function with other members of the health team</td>
<td align=left>
<select id='e3' onchange="changeFunc3(); gTotal3();">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
</td>
</tr>
<tr>
<th>3.4 Initiatives</th>
</tr>
<tr>
<td>3.4.1 Able to create own learning environment as an when the need arise</td>
<td align=left>
<select id='f3' onchange="changeFunc3(); gTotal3();">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
</td>
</tr>
<tr>
<td>3.4.2 Able to sarch for information when needed.</td>
<td align=left>
<select id='g3' onchange="changeFunc3(); gTotal3();">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
</td>
</tr>
<tr>
<td>Total</td>
<td align=left>
<script type="text/javascript">   
   function changeFunc3() {
        var aSelect3 = document.getElementById('a3');
        var bSelect3 = document.getElementById('b3');
        var cSelect3 = document.getElementById('c3');
        var dSelect3 = document.getElementById('d3');
        var eSelect3 = document.getElementById('e3');
        var fSelect3 = document.getElementById('f3');
        var gSelect3 = document.getElementById('g3');
        var aValue3 = aSelect3.options[aSelect3.selectedIndex].value;
        var bValue3 = bSelect3.options[bSelect3.selectedIndex].value;
        var cValue3 = cSelect3.options[cSelect3.selectedIndex].value;
        var dValue3 = dSelect3.options[dSelect3.selectedIndex].value;
        var eValue3 = eSelect3.options[eSelect3.selectedIndex].value;
        var fValue3 = fSelect3.options[fSelect3.selectedIndex].value;
        var gValue3 = gSelect3.options[gSelect3.selectedIndex].value;
        var total3 = parseInt(aValue3) + parseInt(bValue3) + parseInt(cValue3) + parseInt(dValue3) + parseInt(eValue3) + parseInt(fValue3) + parseInt(gValue3);
        weightage3 = ((parseInt(aValue3) + parseInt(bValue3) + parseInt(cValue3) + parseInt(dValue3) + parseInt(eValue3) + parseInt(fValue3) + parseInt(gValue3))*2.45);

        document.getElementById("t3").value=total3;
        document.getElementById("w3").value=weightage3;
    }
    </script>
    <input type="text" id="t3" value="0" size="2" readonly/>
</td>
</tr>
<tr>
<td><strong>Weightage(%)</strong></td>
<td align=left>
    <?php echo $this->Form->input('Attribute_Score3', array('id' => 'w3','readonly'=>'readonly','label'=>false))?>
</td>
</tr>
</table>
<?= $this->Form->button(__('Submit')) ?>
<br/>
<br/>





<table class="table table-bordered table-hover">
<tr>
<th>4. knowledge & skills (Marks : 0,1,2,3)</th>
<th>Marks Achieved</th>
</tr>
<tr>
<td>4.1 Able to apply appropiately theoretical knowledge to clinical setting</td>
<td align=left>
<select id='a4' onchange="changeFunc4(); gTotal4();">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
</td>
</tr>
<tr>
<td>4.2 Identify clinical problems of clients</td>
<td align=left>
<select id='b4' onchange="changeFunc4(); gTotal4();">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
</td>
</tr>
<tr>
<th>4.2 Demonstrate ability to problem solving</th>
</tr>
<tr>
<td>4.3.1 Demonstrate ability to recognize clinical situations, plan, organize work in a holistic way</td>
<td align=left>
<select id='c4' onchange="changeFunc4(); gTotal4();">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
</td>
</tr>
<tr>
<td>4.3.2 Manage clinical situations, that may be detrimental to the health and well being of the clients</td>
<td align=left>
<select id='d4' onchange="changeFunc4(); gTotal4();">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
</td>
</tr>
<tr>
<td>4.3.3 Evaluate the outcome of the clinical situations</td>
<td align=left>
<select id='e4' onchange="changeFunc4(); gTotal4();">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
</td>
</tr>
<tr>
<td>Total</td>
<td align=left>
<script type="text/javascript"> 
   function changeFunc4() {
        var aSelect4 = document.getElementById('a4');
        var bSelect4 = document.getElementById('b4');
        var cSelect4 = document.getElementById('c4');
        var dSelect4 = document.getElementById('d4');
        var eSelect4 = document.getElementById('e4');
        var aValue4 = aSelect4.options[aSelect4.selectedIndex].value;
        var bValue4 = bSelect4.options[bSelect4.selectedIndex].value;
        var cValue4 = cSelect4.options[cSelect4.selectedIndex].value;
        var dValue4 = dSelect4.options[dSelect4.selectedIndex].value;
        var eValue4 = eSelect4.options[eSelect4.selectedIndex].value;
        var total4 = parseInt(aValue4) + parseInt(bValue4) + parseInt(cValue4) + parseInt(dValue4) + parseInt(eValue4);
        weightage4 = ((parseInt(aValue4) + parseInt(bValue4) + parseInt(cValue4) + parseInt(dValue4) + parseInt(eValue4))*2.45);

        document.getElementById("t4").value=total4;
        document.getElementById("w4").value=weightage4;
    }
    </script>
    <input type="text" id="t4" value="0" size="2" readonly/>
</td>
</tr>
<tr>
<td><strong>Weightage(%)</strong></td>
<td align=left>
    <?php echo $this->Form->input('Attribute_Score4', array('id' => 'w4','readonly'=>'readonly','label'=>false))?>
</th>
</tr>
</table>
<?= $this->Form->button(__('Submit')) ?>
<br/>
<br/>






<table class="table  table-bordered table-hover">
<tr>
<th>5. Documentation (Marks: 0,1,2)</th>
<th>Marks Achieved</th>
</tr>
<tr>
<th>5.1 Demonstrate ability to document evidence of observation and examination of clients</th>
</tr>
<tr>
<td>5.1.1 Assessment</td>
<td align=left>
<select id='a5' onchange="changeFunc5(); gTotal5();">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
</td>
</tr>
<tr>
<td>5.1.2 Management</td>
<td align=left>
<select id='b5' onchange="changeFunc5(); gTotal5();">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
</td>
</tr>
<tr>
<td>5.1.3 Evaluation</td>
<td align=left>
<select id='c5' onchange="changeFunc5(); gTotal5();">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
</td>
</tr>
<tr>
<td>Total</td>
<td align=left>
<script type="text/javascript"> 
   function changeFunc5() {
        var aSelect5 = document.getElementById('a5');
        var bSelect5 = document.getElementById('b5');
        var cSelect5 = document.getElementById('c5');
        var aValue5 = aSelect5.options[aSelect5.selectedIndex].value;
        var bValue5 = bSelect5.options[bSelect5.selectedIndex].value;
        var cValue5 = cSelect5.options[cSelect5.selectedIndex].value;
        var total5 = parseInt(aValue5) + parseInt(bValue5) + parseInt(cValue5);
        weightage5 = ((parseInt(aValue5) + parseInt(bValue5) + parseInt(cValue5))*2.5);

        document.getElementById("t5").value=total5;
        document.getElementById("w5").value=weightage5;
    }
    </script>
    <input type="text" id="t5" value="0" size="2" readonly/>
</td>
</tr>
<tr>
<td><strong>Weightage(%)</strong></td>
<td align=left>
    <?php echo $this->Form->input('Attribute_Score5', array('id' => 'w5','readonly'=>'readonly','label'=>false))?>
</td>
</tr>
</table>
<?= $this->Form->button(__('Submit')) ?>

<?= $this->Form->end() ?>


<script type="text/javascript"> 
  

   function gTotal1() 
  {
    var aSelect = document.getElementById('a1');
        var bSelect = document.getElementById('b1');
        var cSelect = document.getElementById('c1');
        var dSelect = document.getElementById('d1');
        var eSelect = document.getElementById('e1');
        var aValue = aSelect.options[aSelect.selectedIndex].value;
        var bValue = bSelect.options[bSelect.selectedIndex].value;
        var cValue = cSelect.options[cSelect.selectedIndex].value;
        var dValue = dSelect.options[dSelect.selectedIndex].value;
        var eValue = eSelect.options[eSelect.selectedIndex].value;
        var weightage1 = ((parseInt(aValue) + parseInt(bValue) + parseInt(cValue) + parseInt(dValue) + parseInt(eValue))*2.4);
        return weightage1; }

        function gTotal2() 
  {
        var aSelect2 = document.getElementById('a2');
        var bSelect2 = document.getElementById('b2');
        var cSelect2 = document.getElementById('c2');
        var dSelect2 = document.getElementById('d2');
        var eSelect2 = document.getElementById('e2');
        var aValue2 = aSelect2.options[aSelect2.selectedIndex].value;
        var bValue2 = bSelect2.options[bSelect2.selectedIndex].value;
        var cValue2 = cSelect2.options[cSelect2.selectedIndex].value;
        var dValue2 = dSelect2.options[dSelect2.selectedIndex].value;
        var eValue2 = eSelect2.options[eSelect2.selectedIndex].value;
        var weightage2 = ((parseInt(aValue2) + parseInt(bValue2) + parseInt(cValue2) + parseInt(dValue2) + parseInt(eValue2))*2.375);
        return weightage2; }

        function gTotal3() 
  {
        var aSelect3 = document.getElementById('a3');
        var bSelect3 = document.getElementById('b3');
        var cSelect3 = document.getElementById('c3');
        var dSelect3 = document.getElementById('d3');
        var eSelect3 = document.getElementById('e3');
        var fSelect3 = document.getElementById('f3');
        var gSelect3 = document.getElementById('g3');
        var aValue3 = aSelect3.options[aSelect3.selectedIndex].value;
        var bValue3 = bSelect3.options[bSelect3.selectedIndex].value;
        var cValue3 = cSelect3.options[cSelect3.selectedIndex].value;
        var dValue3 = dSelect3.options[dSelect3.selectedIndex].value;
        var eValue3 = eSelect3.options[eSelect3.selectedIndex].value;
        var fValue3 = fSelect3.options[fSelect3.selectedIndex].value;
        var gValue3 = gSelect3.options[gSelect3.selectedIndex].value;
        weightage3 = ((parseInt(aValue3) + parseInt(bValue3) + parseInt(cValue3) + parseInt(dValue3) + parseInt(eValue3) + parseInt(fValue3) + parseInt(gValue3))*2.45);
        return weightage3; }

        function gTotal4() 
  {
        var aSelect4 = document.getElementById('a4');
        var bSelect4 = document.getElementById('b4');
        var cSelect4 = document.getElementById('c4');
        var dSelect4 = document.getElementById('d4');
        var eSelect4 = document.getElementById('e4');
        var aValue4 = aSelect4.options[aSelect4.selectedIndex].value;
        var bValue4 = bSelect4.options[bSelect4.selectedIndex].value;
        var cValue4 = cSelect4.options[cSelect4.selectedIndex].value;
        var dValue4 = dSelect4.options[dSelect4.selectedIndex].value;
        var eValue4 = eSelect4.options[eSelect4.selectedIndex].value;
        weightage4 = ((parseInt(aValue4) + parseInt(bValue4) + parseInt(cValue4) + parseInt(dValue4) + parseInt(eValue4))*2.45);
        return weightage4;
         }

function gTotal5() 
  {
        var aSelect5 = document.getElementById('a5');
        var bSelect5 = document.getElementById('b5');
        var cSelect5 = document.getElementById('c5');
        var aValue5 = aSelect5.options[aSelect5.selectedIndex].value;
        var bValue5 = bSelect5.options[bSelect5.selectedIndex].value;
        var cValue5 = cSelect5.options[cSelect5.selectedIndex].value;
        weightage5 = ((parseInt(aValue5) + parseInt(bValue5) + parseInt(cValue5))*2.5);
        return weightage5;
    }
  
  
    var GrandTotal = gTotal1() + gTotal2() + gTotal3() + gTotal4() + gTotal5();     
    document.getElementById("GT").value=GrandTotal;
  
   </script>
   </div>

<div class="panel-footer">

<p align="right">
<strong>Grand Total </strong><input type="text" id="GT" value="0" size="3" readonly/></p>
</div>
</div>


