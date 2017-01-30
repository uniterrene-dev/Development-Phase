
<?php
/**
 * Template Name: membersdashboards Page
 */
 
get_header('model');
?>
 <link rel="stylesheet" type="text/css"  href="<?php echo esc_url( get_template_directory_uri() )?>/css/vertical-tab.css">

<section id="members-dashboard" class="members-dashboard-div">
   <div class="members-dashboard-heading-tag">
     <div class="container">
       <ul>
        <li>Book a new model</li>
        <li>My VIP plan</li>
        <li>My upcoming events</li>
       </ul>
     </div>  
   </div>
   <div class="container">
     <div class="members-dashboard-box">
       
     <div class="vertical-tab">
   <div class="vertical-panel active">My Info <span> <img src="<?php echo esc_url( get_template_directory_uri() )?>/images/dashboard-icon-1.png" alt=""> </span></div>
   <ul class="vertical-content">
      <div class="payment-method-box">
       <h3> Payment  Methods </h3>
       <a href="#"> Add  payment method </a>
      </div>
      <div class="billing-payment-box">
       <h3> Billing & Payment Processing </h3>
      </div>
      <div class="payment-info-box">
         <ol class="payment-info-top">
          <li> Payment method </li>
          <li> Actions </li>
          <li> Autopay status </li>
         </ol>
        
      </div>
   </ul>
   <div class="vertical-panel">Previous History <span> <img src="<?php echo esc_url( get_template_directory_uri() )?>/images/dashboard-icon-2.png" alt=""> </span></div>
   <ul>
    <li>Potius inflammat, ut coercendi magis quam dedocendi esse videantur.</li>
    <li>Atqui reperies, inquit, in hoc quidem pertinacem;</li>
    <li>Verba tu fingas et ea dicas, quae non sentias?</li>
  </ul>
   <div class="vertical-panel">Payment Methods<span> <img src="<?php echo esc_url( get_template_directory_uri() )?>/images/dashboard-icon-3.png" alt=""> </span></div>
   <ul>
    <li>Omnes enim iucundum motum, quo sensus hilaretur.</li>
    <li>Oratio me istius philosophi non offendit;</li>
    <li>Ut pulsi recurrant?</li>
    <li>Cur fortior sit, si illud, quod tute concedis, asperum et vix ferendum putabit?</li>
  </ul>
   <div class="vertical-panel">Password & Security<span> <img src="<?php echo esc_url( get_template_directory_uri() )?>/images/dashboard-icon-4.png" alt=""> </span></div>
   <ul>
    <li>Et ille ridens: Video, inquit, quid agas;</li>
    <li>Sed tu istuc dixti bene Latine, parum plane.</li>
    <li>Eorum enim omnium multa praetermittentium, dum eligant aliquid, quod sequantur, quasi curta sententia;</li>
  </ul>
   <div class="vertical-panel">Notification Settings<span> <img src="<?php echo esc_url( get_template_directory_uri() )?>/images/dashboard-icon-5.png" alt=""> </span></div>
   <ul>
    <li>Et ille ridens: Video, inquit, quid agas;</li>
    <li>Sed tu istuc dixti bene Latine, parum plane.</li>
    <li>Eorum enim omnium multa praetermittentium, dum eligant aliquid, quod sequantur, quasi curta sententia;</li>
  </ul>
</div>
       
       <?php //echo(the_content()); ?>
     </div>  
  </div>
</section>				


<?php
get_footer();
?>
