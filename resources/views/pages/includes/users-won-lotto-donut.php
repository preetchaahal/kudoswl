<!--//tile-->
<section class="tile">

  <!--//tile body-->
  <div class="tile-body">
                    
    <div class="row">
 
      <div class="col-xs-12 col-sm-4">
        
        <h3 class="text-left text-center">Lotto winners from the site</h3>
        <div id="donut-example" style="height: 250px;"></div>
 
      </div>
 
    </div>
 
  </div>
<!--  // /tile body -->
 
</section>
<!--// /tile -->
<script src="admin/js/plugins/rickshaw/raphael-min.js"></script>
<script src="js/morris.min.js"></script>
<script type="text/javascript">
Morris.Donut({
  element: 'donut-example',
  data: [
    {label: "Mega Sena", value: 12},
    {label: "Euro-millions", value: 30},
    {label: "Power-ball", value: 20}
  ],
  colors: ['#00a3d8', '#2fbbe8', '#72cae7']
});
</script>