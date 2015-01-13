<div class="container-page-tracking">
	<div  id="form-tracking">
		<div class="form-track">
			<form name="form-track" method="post" target="_blank" action="http://222.66.158.204/cargo_track/cargo_track_rst.jsp">
				
				<div class="container-radio">
					<div class="bg-radio radio-1"><input type="radio" name="tr_num" value="bl_no" checked="" class="radio_track bl_no"></div>
					<font class="lb_bl"><?php echo t('B/L No.');?></font>
					<div class="bg-radio radio-2"><input type="radio" name="tr_num" value="unit_no" class="radio_track unit_no"></div>
					<font class="lb_container"><?php echo t('Container No.');?></font>
				</div>
				
				<div class="bg-input">
					<input type="text" name="tf_bl_no"  onchange="this.value=this.value.toUpperCase()" value="" class="input_track">
					<input type="submit" name="submit_track" value="Track" class="submit_track">
				</div>
				
			</form>
		</div>
	</div>
	<br/>
</div>