<?php $this->load->view("header");?>
<div class="row" >

	<table class="table table-hover">
		<thead>
			<tr >
				<th>#</th>
				<th   style="text-align:center;" >หัวข้อข่าว</th>
				<th>ภาพ</th>
				<th>ว/ด/ป</th>
				<th>edit delete</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($show_news as $detail => $row) 	{	
				?>
				<tr >
					<td>
						#
					</td>
					<td width=400px>
					<?php echo $row->news_title;	?>	<!-- //โชว์ รายละเอียด  -->
				</td>
				<td>
					<?php 
					$picture_name_array = explode(',', $row->news_file_upload);
							 //show picture 
								?>
								<img src="<?php echo base_url().'file_upload/pict_news/'.$picture_name_array[0];?>" alt="" style="width:128px;"/>	<!-- //โชว์รูปภาพ -->
								<?php 
							
							?>
						</td>
						<td>
							<?php 	echo $row->news_date; ?>		<!-- //โชว์กลุ่ม -->
						</td>
						<td>
							<?php 
							echo anchor('sci_con/','แก้ไข  ','&nbsp;&nbsp;');
							echo anchor('sci_con/','ลบ	');
							?>
						</td>
					</tr>
					<?php
				}
				?>
			</tbody>
		</table>	
	</div>
	<?php $this->load->view('footer');?>