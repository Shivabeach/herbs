<?php $this->load->view("head/head");?>
<body>
<div class="container">
	<article>
		<section>
			<h2>Family Relations Insert</h2>
			<?php echo validation_errors(); ?>
			<?php $attr1 = array(
				'id' => "form1"
			);?>
			<?php echo form_open("form1", $attr1) ;?>
			<p><label for="family">Family</label>

			<?php
				$attr2 = array(
					'' => 'Pick one',
					'VanHorn' => 'VanHorn',
					'Bostick' => 'Bostick'
				);
				echo form_dropdown("family", $attr2);?>
			</p>
			<p>
				<label for="male">Male</label>
				<?php
				$attr4 = array(
					'name' => 'male',
					'maxlength' => '100',
					'style' => 'width:50%'
				);?>
				<?php echo form_input($attr4);?>
			</p>
			<p>
				<label for="female">FeMale</label>
				<?php
				$attr5 = array (
					'name' => 'female',
					'maxlength' => '100',
					'style' => 'width:50%'
				);?>
				<?php echo form_input($attr5);?>
			</p>
			<p>
				<label for="relation-ship">Relationship</label> 
				<?php
				$attr6 = array(
					'name' => 'relation-ship',
					'maxlength' => '100',
					'style' => 'width:50%'
				);?>
				<?php echo form_input($attr6);?> <span>8th Great Grandfather</span>
			</p>
			<p>
				<label for="relative">Relative From Ancestry</label>
				<?php
				$attr7 = array (
					'name' => 'relative',
					'maxlength' => '100',
					'placeholder' => "Ancestry Relative",
					'style' => 'width:50%'
				);?>
				<?php echo form_input($attr7);?>
			</p>
			<p>
				<label for="level">Cousin Level</label>
				<?php
				$attr8 = array (
					'name' => 'level',
					'maxlength' => '2'
				);?>
				<?php echo form_input($attr8);?> <span><u>3</u>rd cousin</span>
			</p>
			<p>
				<label for="Year">Year Born</label>
				<?php
				$attr9 = [
					'name' => 'year',
					'maxlength' => '4'
				];?>
				<?php echo form_input($attr9);?>
			</p>
			<hr>
			<p>The connected ancestors oldest first</p>

			<p>
				<label for="r1">R1</label>
				<?php
				$att1 = [
					'name' => 'r1',
					'maxlength' => '100',
					'style' => 'width:50%'
				];?>
				<?php echo form_input($att1);?>
			</p>
			<p>
				<label for="r2">R2</label>
				<?php
				$att2 = [
					'name' => 'r2',
					'maxlength' => '100',
					'style' => 'width:50%'
				];?>
				<?php echo form_input($att2);?>
			</p>
			<p>
				<label for="r3">R3</label>
				<?php
				$att3 = [
					'name' => 'r3',
					'maxlength' => '100',
					'style' => 'width:50%'
				];?>
				<?php echo form_input($att3);?>
			</p>
			<p>
				<label for="r4">R4</label>
				<?php
				$att4 = [
					'name' => 'r4',
					'maxlength' => '100',
					'style' => 'width:50%'
				];?>
				<?php echo form_input($att4);?>
			</p>
			<p>
				<label for="r5">R5</label>
				<?php
				$att5 = [
					'name' => 'r5',
					'maxlength' => '100',
					'style' => 'width:50%'
				];?>
				<?php echo form_input($att5);?>
			</p>
			<p>
				<label for="r6">R6</label>
				<?php
				$att6 = [
					'name' => 'r6',
					'maxlength' => '100',
					'style' => 'width:50%'
				];?>
				<?php echo form_input($att6);?>
			</p>
			<p>
				<label for="r7">R7</label>
				<?php
				$att7 = [
					'name' => 'r7',
					'maxlength' => '100',
					'style' => 'width:50%'
				];?>
				<?php echo form_input($att7);?>
			</p>
			<p>
				<label for="r8">R8</label>
				<?php
				$att8 = [
					'name' => 'r8',
					'maxlength' => '100',
					'style' => 'width:50%'
				];?>
				<?php echo form_input($att8);?>
			</p>
			<p>
				<label for="r9">R9</label>
				<?php
				$att9 = [
					'name' => 'r9',
					'maxlength' => '100',
					'style' => 'width:50%'
				];?>
				<?php echo form_input($att9);?>
			</p>
			<?php echo form_submit('submit', 'Submit');
			echo form_close();?>



		</section>
	</article>


</div>
</body>
</html>