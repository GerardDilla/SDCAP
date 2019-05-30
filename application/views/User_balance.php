<?php
$msg = "";
$msg2 = "";
$hide = "";
?>
<!--content--!-->

<div id="page-content-wrapper" style="width:100%; height:100%; cursor:default; min-height:600px;">
<div class="container-fluid">
<div class="row" style="margin-top:auto; margin-bottom:auto;">


<div class="col-md-12">

<!--HEADER--!-->
  <div class="row content-title"><span style="margin-left:50px; margin-top:20px; margin-bottom:20px;" class="glyphicon glyphicon-piggy-bank"></span> Balance</div>
</div>
<!--HEADER--!-->

<div class="col-md-12" id="ContentContainer">
  <!--BODY--!-->
  <div class="container row" id="alignment" style="margin-top:50px; margin-bottom:20px; min-height:auto; overflow-y:auto;">
    
    <h4><strong>BALANCE AS OF: <u><?php echo $Bal_Semester.', '.$Bal_Schoolyear; ?></u></strong></h4>

    <table class="table table-striped" style="color:#666">
        <thead>
            <tr>
            <th></th>
            <th>Amount</th>
            </tr>
        </thead>
        <tbody>
        <tr>
          <td style="background-color:#16A085; color:#FFF;">Total Assesment</td>
          <td style="font-weight: 700; color: #800;"><?php echo $Semestral_Balance; ?></td>
        </tr>
        <tr>
            <td style="background-color:#16A085; color:#FFF;">Payments</td>
            <td style="font-weight: 700; color: #800;"><?php echo $Sem_total_Paid; ?></td>
        </tr>
        <tr>
          <td style="background-color:#666; color:#FFF; text-align: center;">Semestral Balance :</td>
          <td style="background-color:#666; color:#FFF; text-align:center; font-weight: 700;">
                <?php 
                  if($Total_Paid <= 0.00){
                    echo '0.00';
                  }
                  else
                  {
                    echo round($Total_Paid,2);
                  }
                ?>
          </td>
        </tr>
        <tr>
          <td style="background-color:#666; color:#FFF; text-align: center;">OUTSTANDING BALANCE :</td>
          <td style="background-color:#666; color:#FFF; text-align:center; font-weight: 700;">
                <?php 
                    if($Outstanding_Balance <= 0.00){
                      echo '0.00';
                    }
                    else
                    {
                      echo round($Outstanding_Balance,2);
                    }
                ?>
          </td>
        </tr>
        </tbody>
    </table>
      
      
  </div>
</div>
<!--BODY--!-->
