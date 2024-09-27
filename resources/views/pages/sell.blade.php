    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="Invoice & Quotation Template">

  <style>
    #container { font: normal 13px/1.4em 'Open Sans', Sans-serif;
                 margin: 0 auto;
                 min-height: 1078px; }

    #container .header img { width: 100%;
                             height: auto; }

    #container .footer img { width: 100%;
                             height: auto;
                             margin-top:1%; }

    #invoice-info { float: right;
                    margin-top: 50px;
                    width:35%; }

    #invoice-info > div { float: right; }

    #client-info { float: left;
                   margin-top: 50px;
                   width:65%; }

    #client-info > div { float: left; }

    .title-l { margin-top:5px;
               font-weight: bold;
               font-size:large;
               color: #434343; }

    .title-m { margin-top:5px;
               font-size:120%;
               font-weight: bold;
               color: #434343; }

    .data { margin-top:5px;
            font-size:120%;
            color:#666666; }

    table { width:100%; }

    th { color: #2a3990;
        font-size:150%;
        font-weight:bold; }

    td { color:#666666;
         font-size:120%; }

    #product-details { clear: both;
                       border-top:1px solid #b7b7b7; }

    .tab-sl { width:2%;
              text-align:right; }

    .tab-item { padding-left:1%;
                width:46%;
                text-align:left; }

    .tab-model { padding-left:1%;
                 width:20%;
                 text-align:left; }


    .tab-qty { padding-left:2%;
               width:12%;
               text-align:left; }

    .tab-unitprice { padding-left:1%;
                     width:10%;
                     text-align:right; }

    .tab-totalprice { padding-left:1%;
                      width:10%;
                      text-align:right; }

    #note-amount-tc-details { border-top:1px solid #b7b7b7;
                              width:100%; }

    .note-label { width:5%;
                  font-weight:bold;
                  text-align:left;
                  color:#666666;
                  vertical-align: top; }

    .note-data { padding-left:2%;
                 padding-right:2%;
                 width:70%;
                 text-align:left;
                 color:#434343;
                 vertical-align: top; }

    .adjustment-label { color:#2a3990;
                        padding-left:1%;
                        width:15%;
                        text-align:right;
                        vertical-align: top;
                        font-size:120%; }

    .subtotal-label { color:#2a3990;
                      padding-left:1%;
                      width:15%;
                      text-align:right;
                      vertical-align: top;
                      font-size:120%; }

    .adjustment-amount { padding-left:1%;
                         width:10%;
                         text-align:right;
                         vertical-align: top;
                         font-size:120%; }

    .subtotal-amount { font-weight:bold;
                       padding-left:1%;
                       width:10%;
                       text-align:right;
                       vertical-align: top;
                       font-size:120%; }

    .tpa-label { font-weight:bold;
                 color:#000000;
                 vertical-align: middle;
                 border:1px solid #b7b7b7;
                 padding:2%; }

    .tpa-amount { color:#e01b84;
                  font-size:250%;
                  font-weight: bold;
                  text-align:right;
                  vertical-align: middle;
                  border:1px solid #b7b7b7;
                  padding:2%; }

    .tc-label { font-weight:bold;
                color:#000000;
                font-size:120%;
                border-top:1px solid #b7b7b7;
                border-left:1px solid #b7b7b7;
                border-right:1px solid #b7b7b7;}

    .tc-details { font-size:90%;
                  color:#666666;
                  vertical-align: top;
                  border-bottom:1px solid #b7b7b7;
                  border-left:1px solid #b7b7b7;
                  border-right:1px solid #b7b7b7;
                  padding:2px;
                  line-height: 100%; }

                                        #container1 {
             font: normal 13px/1.4em 'Open Sans', Sans-serif;
             margin: 0 auto;
             padding-left: 5%; 
             padding-right: 5%;
             min-height: 1030px;
            }

    .report-header1 {color:#0000ff;
                    position:relative;
                    width:100%;
                    text-align:left;
                    font-weight: bold;
                    font-size:large;}

    #invoice-info1 {
            float: right;
            margin-top: 50px;
            width:45%;
            }

    #invoice-info1 > div {
             float: right;
            }

    #client-info1 {
            float: left;
            margin-top: 50px;
            width:45%;
            }

    #client-info1 > div {
             float: left;
            }
    .title-l1 { margin-top:5px;
            font-weight: bold;
            font-size:large;
            color: #2a3990;
            }

    .title-m1 { margin-top:5px;
            font-weight: bold;
            color: #2a3990;
            }

    .data1 {
            margin-top:5px;
            color:#666666; 
            }

    .tab-label1 {color:#434343;
                font-weight: bold;
                font-size:large;
                text-align:center;
                padding-top:1%;
                }

    .tab-data1 {color:#666666;
                text-align:center;
                width:33%;
                padding-top:1%;
                padding-bottom:2%;
                font-size:140%;
                }

    .facts1 {clear:both;
            width:100%;
            border-top:1px solid #b7b7b7; 
            padding:2%;}

    .profit-label1{color:#2a3990;
                font-weight: bold;
                font-size:large;
                text-align:center;
            border-top:1px solid #b7b7b7;
            padding-top:20px;}

    .profit-amount1 {color:#000000;
                font-weight: bold;
                font-size:large;
                text-align:center;
                border: 1px solid #b7b7b7;
                padding:5px;}
    #invoice-info1 {margin-bottom:15%;}


  </style>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script type="text/javascript">
$(document).ready(function(){
    window.print();
    window.history.back();
})
</script>
  </head>
  <body>

   


   <div id="container">
      <section id="headerpane">
        <div class="header">
             <?php 
        foreach($npp as $nps){
          ?>
               <img src="<?php echo $nps->hmg; ?>" />
             <?php } ?>
        </div>
      </section>

      <section id="client-info">
        <?php 
        foreach($npp as $nps){
          ?>
        <div class="clientdetails">
          <div>
            <span class="title-l">Customer Details</span>
          </div>
          <div>
            <img src="https://lh3.googleusercontent.com/-edlvjns1720/XHZvUBhUeTI/AAAAAAAACU4/aKzI8rws91ghAMN22yYI-uAfT1Nw6lDOgCL0BGAYYCw/h25/2019-02-27.png" width="auto" height="12px">
            <span class="data"><?php echo $nps->cname; ?></span>
          </div>
          <div>
            <img src="https://lh3.googleusercontent.com/-wNd42_eINk8/XHZvVhuuvpI/AAAAAAAACU8/PoitgD5sYYAIJCf3ct-_f6zyC2f0fscNQCL0BGAYYCw/h25/2019-02-27.png" width="auto" height="12px">
            <span class="data"><?php echo $nps->cmob; ?></span>
          </div>
          <div>
            <span><img src="https://lh3.googleusercontent.com/-qup5yStqkkM/XHZvWrFIqoI/AAAAAAAACVA/HzwGQkKy0hABc1vQWwV2iZxcl7LNbmgagCL0BGAYYCw/h25/2019-02-27.png" width="auto" height="12px">&nbsp;</span>
            <span class="data"><?php echo $nps->cmail; ?></span>
          </div>
          <div>
            <img src="https://lh3.googleusercontent.com/-1XLaBlmhQG4/XHZvXTtHiXI/AAAAAAAACVE/gWmTnHgGhUsYDOwewZ283fhwS3mTIkWVwCL0BGAYYCw/h25/2019-02-27.png" width="auto" height="12px">
            <span class="data"><?php echo $nps->cadd; ?></span>
          </div>
          <?php if($nps->cgst!=''){ ?>
          <div>
            <span class="title-m">GSTIN :&nbsp;</span>
            <span class="data"><?php echo $nps->cgst; ?></span>
          </div>
           <?php } ?>
 
        </div>
      </section>

      <section id="invoice-info">
        <div class="invoicedetails">
          <div>
            <span class="title-l">&nbsp;&nbsp;&nbsp;</span>
          </div>
          <div>
            <span class="title-m"><?php echo $nps->qtype; ?> # :&nbsp;&nbsp;</span>
            <span class="data"><?php echo $nps->quot; ?></span>
          </div>
          <div>
            <span class="title-m">Date :&nbsp;&nbsp;</span>
            <span class="data"><?php echo $nps->indt; ?></span>
          </div>
          <div>
            <span class="title-m">Warranty :&nbsp;&nbsp;</span>
            <span class="data">1 year Product Warranty</span>
          </div>
           <?php if($nps->cord!=''){ ?>
          <div>
            <span class="title-m">Client Order # :&nbsp;&nbsp;</span>
            <span class="data"><?php echo $nps->cord; ?></span>
          </div>
        <?php } ?>
        <?php if($nps->oord!=''){ ?>
          <div>
            <span class="title-m">VelaCCTV Order # :&nbsp;&nbsp;</span>
            <span class="data"><?php echo $nps->oord; ?></span>
          </div>
          <?php } ?>
 
        </div>
      </section>

<?php } ?>

      <section id="product-info">
        <table id="product-details">
            <tr>
                <th class="pr tab-sl">Sl.</th>
                <th class="pr tab-item">Products / Services</th>
                <th class="pr tab-model">&nbsp;&nbsp;&nbsp;</th>

                <th class="pr tab-qty">Qty</th>
                <th class="pr tab-unitprice">Unit Price</th>
                <th class="pr tab-totalprice">Total Price</th>
            </tr>
            <?php 
            $p=1;
              foreach($njnp as $nj){
                
                ?>
            <tr>
              
                <td class="tab-sl"><?php echo $p; ?></td>
                <td class="tab-item"><?php echo $nj->prod_name; ?></td>
                <td class="tab-model"><?php echo $nj->model; ?></td>
                <td class="tab-qty"><?php echo $nj->qty." "; ?><?php echo $nj->unit; ?></td>
                <td class="tab-unitprice"><?php echo $nj->sp; ?></td>
                <td class="tab-totalprice"><?php echo $nj->totpro; ?></td>
              
            </tr>
            <?php
               $p++;
               } ?>
            <?php 
            
              foreach($njn as $nj){
                
                ?>
            <tr>
              
                <td class="tab-sl"><?php echo $p; ?></td>
                <td class="tab-item"><?php echo $nj->prod_name; ?></td>
                <td class="tab-model"><?php echo $nj->model; ?></td>
                <td class="tab-qty"><?php echo $nj->qty." "; ?><?php echo $nj->unit; ?></td>
                <td class="tab-unitprice"><?php echo $nj->sp; ?></td>
                <td class="tab-totalprice"><?php echo $nj->totpro; ?></td>
              
            </tr>
            <?php
               $p++;
               } ?>

        </table>
      </section>

      <section id="note-amount-t&c">
        <table id="note-amount-tc-details">
            <tr>
                <td rowspan="2" class="note-label">Notes:</td>
                <?php 
        foreach($npp as $nps){
          ?>
                <td rowspan="2" class="note-data"><?php echo $nps->note; ?></td>
              
                <td class="subtotal-label">Subtotal :</td>
                <td class="subtotal-amount"><?php echo $nps->tsp; ?></td>
            </tr>
            <tr>
                <td class="adjustment-label">Adjustment :</td>
                <td class="adjustment-amount"><?php echo $nps->adjust; ?></td>
            </tr>
            <tr>
                <td rowspan="2" colspan="2" class="tpa-label">Total Payable Amount (Including All Taxes) :</td>
                <td rowspan="2" colspan="2" class="tpa-amount"><?php 
                 if($nps->ads=='plus'){
                  echo number_format($nps->tsp+$nps->adjust);
                 }
                 if($nps->ads=='minus'){
                  echo number_format($nps->tsp-$nps->adjust);
                 }

                 ?>
                </td>
            </tr>
          </table>
          <table>
           <?php } ?>
            <tr>
                <td class="tc-label">Terms & Conditions :</td>
            </tr>
            <tr>
              <?php 
              foreach($ncc as $ncp){ ?>
                <td class="tc-details"><?php echo $ncp->tmd; ?></td>
              <?php } ?>
            </tr>
        </table>
        </section>

                <section id="signature">
            <div style="float:left;margin-top:5%;border-top:2px solid gray;">
                <span>Customer Signature</span>
            </div>
            <div style="float:right;margin-top:5%;border-top:2px solid gray;">
                <span style="text-align:right;">Signature of VelaCCTV Supply & Services</span>
            </div>
        </section>

        <section id="footerpane">
            <div class="footer">
                <?php 
        foreach($npp as $nps){
          ?>
               <img src="<?php echo $nps->fmg; ?>" />
             <?php } ?>
             </div>
        </section>

    
     <div id="container1">
        <div class="report-header1">
            <img width="100%"height="30px"src="https://lh3.googleusercontent.com/-X0NZJPAcpLM/XHU0QBTmCZI/AAAAAAAACUg/hs6ugC_wI34EjO9c1O-EvMgt6p6th_tOwCK8BGAs/s100/2019-02-26.png">
            <span style="position:absolute;top: 15%; left:1%;">Estimation Report</span>  
        </div>
<?php 
        foreach($npp as $nps){
          ?>
      <section id="client-info1">
        <div class="clientdetails1">
          <div>
            <span class="title-l1">Customer Details</span>
          </div>
          <div>
            <span class="data1"><?php echo $nps->cname; ?></span>
          </div>
          <div>
            <span class="data1"><?php echo $nps->cmob; ?></span>
          </div>
          <div>
            <span class="data1"><?php echo $nps->cmail; ?></span>
          </div>
          <div>
            <span class="data1"><?php echo $nps->cadd; ?></span>
          </div>
          <?php if($nps->cgst!=''){ ?>
          <div>

            <span class="title-m1">GSTIN :&nbsp;</span>
            <span class="data1"><?php echo $nps->cgst; ?></span>
          </div>
        <?php } ?>
 
        </div>
      </section>

      <section id="invoice-info1">
        <div class="invoicedetails1">
          <div>
            <span class="title-l1">Invoice Details</span>
          </div>
          <div>
            <span class="title-m1"><?php echo $nps->qtype; ?> # :&nbsp;&nbsp;</span>
            <span class="data1"><?php echo $nps->quot; ?></span>
          </div>
          <?php if($nps->cord!=''){ ?>
          <div>
            <span class="title-m1">Client Order # :&nbsp;&nbsp;</span>
            <span class="data1"><?php echo $nps->cord; ?></span>
          </div>
        <?php } ?>
        <?php if($nps->oord!=''){ ?>
          <div>
            <span class="title-m1">VelaCCTV Order # :&nbsp;&nbsp;</span>
            <span class="data1"><?php echo $nps->oord; ?></span>
          </div>
        <?php } ?>
          <div>
            <span class="title-m1">Date :&nbsp;&nbsp;</span>
            <span class="data1"><?php echo $nps->indt; ?></span>
          </div>
 
        </div>
      </section>

      <section>
        <table class="facts1">
            <tr>
                <th class="tab-label1">Selling Price</th>
                <th class="tab-label1">Purchase Price</th>
                <th class="tab-label1">Purchase % Selling</th>
            </tr>
            <tr>
                <td class="tab-data1"><?php echo $nps->tsp; ?></td>
                <td class="tab-data1"><?php echo $nps->tcp; ?></td>
                <td class="tab-data1"><?php echo (round(($nps->tcp/$nps->tsp)*100,2)); ?></td>
            </tr>
            <tr>
                <th class="tab-label1">TECHNICIAN COST<br>(Approx.)</th>
                <th class="tab-label1">Travelling<br>Allowances</th>
                <th class="tab-label1">Additional<br>COST</th>
            </tr>
            <tr>
                <td class="tab-data1"><?php echo $nps->tc; ?></td>
                <td class="tab-data1"><?php echo $nps->ta; ?></td>
                <td class="tab-data1"><?php echo $nps->ac; ?></td>
            </tr>
            <tr>
            <th class="profit-label1">&nbsp;</th>
            <th class="profit-label1">Net Profit</th>
            <th class="profit-label1">&nbsp;</th>
            </tr>
            <tr>
            <td class="tab-data1">&nbsp;</td>
            <td class="profit-amount1"><?php echo number_format($nps->tsp-$nps->tcp, 2); ?></td>
            </tr>

        </table>
      </section>
<?php } ?>
    </div>
  </div>
  </body>
  </html>


   