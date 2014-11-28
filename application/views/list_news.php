<?php $this->load->view("header");?>
<div class="row" >

	<table class="table table-hover">
		<thead>
			<tr >
				<th>#</th>
				<th   style="text-align:center;" >หัวข้อข่าว</th>
				<th>ภาพ</th>
				<th>ว/ด/ป ที่อัพเดท</th>
				<th>รายละเอียด</th>
				<th>ผู้โพส</th>
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
						<img src="<?php echo base_url().'file_upload/pict_news/'.$picture_name_array[0];?>" alt="" style="width:128px;height:90px;"/>	<!-- //โชว์รูปภาพ -->
						<?php 

						?>
					</td>
					<td>
						<?php 	echo $row->news_date; ?>		<!-- //โชว์กลุ่ม -->
					</td>
					<td>
						<?php 
						echo anchor('sci_con/show_news/'.$row->news_id,"<div class='btn btn-info'>ดูข้อมูล</div>");
						?>
					</td>
					<td>
					<?php 
						echo ' <img src="https://graph.facebook.com/'.$row->news_post.'/picture" alt="" class="pic" /><br/>';
						echo $fb_data['me']['name'];
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