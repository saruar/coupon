<!DOCTYPE html>
<html lang="en">
         <head>
         <title>Test Cart</title>
         <link rel='stylesheet' type='text/css' id='simplecart.css' href='css/simplecart.css' />
         
         <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
         <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
         <script type="text/javascript" src="js/simpleCart.js"></script>
         <script type="text/javascript" src="js/js.js"></script>
         
		 <script type="text/javascript">
            simpleCart.email = "geminigroupusa@gmail.com";
			//simpleCart.email = "seller@sanower.com";
            simpleCart.checkoutTo = PayPal;
            simpleCart.currency = USD;
            simpleCart.discountRate  = -0.1177; // $2.00 discount for 2 or more
//            simpleCart.discountRate  = 0.00;
            simpleCart.taxRate  = 0.00;
            simpleCart.shippingQuantityRate = 0.00;
			simpleCart.return_url = "paypal_thanks.html";
            
//            simpleCart.cartHeaders = [ "Name" , "os0_noHeader" , "Price" , "Quantity", "Total", "remove_noHeader" ];
            simpleCart.cartHeaders = [ "os0_hd0" , "Price" , "Quantity", "Total", "remove_noHeader" ];
         </script>
         </head>
         <body>
         <div class="container_24">
           <div class="wrapper">
             <div class="grid_12">
               <div id="product_info">
                <h3>BellabeTM Facial Hair Remover (Money Order or Personal Check)</h3>
                 <div class="simpleCart_shelfItem">
                   <div class="itemcontainer">
                     <input type="hidden" class="item_name" value="Bellabe Facial Hair Remover" />
                     <input type="hidden" class="item_price" value="$16.99" />
                     <div class="top_item">
                       <div class="itemrow_desc"><strong>Quantity:</strong></div>
                       <div>
                         <input type="text" class="item_quantity" value="1" style="height:14px; width:45px;" />
                       </div>
                     </div>
                     <div class="B_item">
                       <div class="itemrow_desc"><strong>Color:</strong></div>
                       <div>
                         <input type="hidden" class="item_on0" value="Colors" />
                       </div>
                       <div>
                         <select class="item_os0">
                           <option value="Calypso Blue">Calypso Blue</option>
                           <option value="Rose Red">Rose Red</option>
                           <option value="Lime Green">Lime Green</option>
                           <option value="Tropical Blue">Tropical Blue</option>
                           <option value="Sweet Pink">Sweet Pink</option>
                           <option value="Tranquil Lavender">Tranquil Lavender</option>
                           <option value="Elegant Black">Elegant Black</option>
                           <option value="Royal Purple">Royal Purple</option>
                         </select>
                       </div>
                     </div>
                   </div>
                   <div>&nbsp;</div>
                   <div class="add2cart"> 
                     <!-- input type="image" class="item_add" src="images/green_buttons/add_to_cart.jpg" / -->
                     <input value="" class="button item_add" type="button" alt="Add to Cart" />
                   </div>
                 </div>
               </div>
             </div>
           </div>
           
           <div class="wrapper" id="checkoutrow">
             <div class="simpleCart_items" > 
             
             </div>
             <div id="subtotalrow">
               <div class="subtotalrow">
                 <div class="subtot_col1">&nbsp;</div>
                 <div class="subtot_col2">
                   <hr />
                 </div>
                 <div class="subtot_col3">
                   <hr />
                 </div>
                 <div class="cl"></div>
               </div>
               
               <div id="discountrow" class="subtotalrow">
                 <div class="subtot_col1">&nbsp;</div>
                 <div class="subtot_col2">Total:</div>
                 <div class="subtot_col3"><span id="total">xyz</span></div>
                 <div class="cl"></div>
               </div>
               <div id="discountrow" class="subtotalrow">
                 <div class="subtot_col1">&nbsp;</div>
                 <div class="subtot_col2">Discount:</div>
                 <div class="subtot_col3"><span class="simpleCart_discount"></span></div>
                 <div class="cl"></div>
               </div>
               <div class="subtotalrow">
                 <div class="subtot_col1">&nbsp;</div>
                 <div class="subtot_col2">Sub Total:</div>
                 <div class="subtot_col3"><span class="simpleCart_total"></span></div>
                 <div class="cl"></div>
               </div>
               <div class="shippingRow">
                 <div class="subtot_col1"><input type="button" name="btn_shipping" id="btn_shipping" value="" /></div>
                 <div class="subtot_col2">Shipping:</div>
                 <div class="subtot_col3"><span id="shipping_val">$0.00</span></div>
                 <div class="cl"></div>
               </div>
               <div id="subtotalrow">
               <div class="subtotalrow">
                 <div class="subtot_col1">&nbsp;</div>
                 <div class="subtot_col2">
                   <hr />
                 </div>
                 <div class="subtot_col3">
                   <hr />
                 </div>
                 <div class="cl"></div>
               </div>
               <div id="discountrow">
                 <div class="subtot_col1">&nbsp;</div>
                 <div class="subtot_col2b">Grand Total:</div>
                 <div class="subtot_col3b"><span id="grand_total">xyz</span></div>
                 <div class="cl"></div>
               </div>
             </div>

             
             <div id="shippingAddress">
               <h3>Shipping Address</h3>
               <div class="addressRow">
                 <label class="ship_label">First Name:</label>
                 <input name="first_name" type="text" class="first_name inputText" value="">
               </div>
               <div class="addressRow">
                 <label class="ship_label">Last Name:</label>
                 <input name="last_name" type="text" class="last_name inputText" value="">
               </div>
               <div class="addressRow">
                 <label class="ship_label">Address:</label>
                 <input name="address1" type="text" class="address1 inputText" value="">
               </div>
               <div class="addressRow">
                 <label class="ship_label">Address 2:</label>
                 <input name="address2" type="text" class="address2 inputText" value="">
               </div>
               <div class="addressRow">
                 <label class="ship_label">City:</label>
                 <input name="city" type="text" class="city inputText" value="">
               </div>
               <div class="addressRow">
                 <label class="ship_label">State/Province :</label>
                 <input name="state" type="text" class="state inputText" value="">
               </div>
               <div class="addressRow">
                 <label class="ship_label">Zip/Postal code:</label>
                 <input name="zip" type="text" class="zip inputText" value="">
               </div>
               <div class="addressRow">
                 <label class="ship_label">Country:</label>
                 <?php include("lib/country.php"); ?>
               </div>
               <div class="addressRow">
                 <label class="ship_label">Tel:</label>
                 <input name="night_phone_a" type="text" class=" night_phone_a inputText" value="">
               </div>
               <div class="addressRow">
                 <label class="ship_label">Email:</label>
                 <input name="night_phone_a" type="text" class="night_phone_a inputText" value="" id="email">
               </div>
               <div class="addressRow">
                 <label class="ship_label">Message</label>
                 <textarea name="message" id="message" cols="20" rows="5"></textarea>
               </div>
             </div>
             <div> 
              
             </div>
              <div class="cl"></div>
           </div>
         	<input type="button" name="print" id="print" value="Print" /> 
            <div class="info">
              <h3>Please mail your form and payment (personal check or money order in Dollars paycble to GEMINI GROUP USA Inc) to:</h3>
                <p>
                Gemini Group USA Inc.<br/>
                PO Box 3495<br/>
                Ann Arbor, MI 48106-3495</p>
            </div> 
         </div>
         
         
</body>
</html>