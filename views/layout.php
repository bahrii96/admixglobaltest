<?php /* Template name: Layout Page */
get_header();
$image_path = get_template_directory_uri() . '/assets/images/';
?>



<div class="container">
	<div class="table-box">
		<table class="main-table">
			<thead class="main-table__thead">
				<tr>
					<th>Team</th>
					<th>M</th>
					<th>W</th>
					<th>L</th>
					<th>D</th>
					<th>NR</th>
					<th>PTS</th>
					<th>Series Form</th>
				</tr>
			</thead>
			<tbody>
				<tr class=" expandable-row blue main-table__expandable-row">
					<td class="expandable-row__logo">
						<div class="logo-box"> <img src="<?php echo $image_path; ?>kaia.png" alt="logo Kaia">
							<a href="#">Innocent Kaia</a>
							<i class="rotate-180 fas fa-angle-down"></i>
						</div>
					</td>
					<td class="expandable-row__numb">25</td>
					<td class="expandable-row__numb">13</td>
					<td class="expandable-row__numb">7</td>
					<td class="expandable-row__numb"> 1</td>
					<td class="expandable-row__numb">3</td>
					<td class="expandable-row__numb">4</td>
					<td class="expandable-row__runs">
						<span class='circle red'>L</span>
						<span class='circle green'>W</span>
						<span class='circle red'>L</span>
						<span class='circle green'>W</span>
						<span class='circle grey'>N</span>
					</td>
				</tr>
				<tr class=" nested-table ">
					<td class="inner-table" colspan="8">
						<table>
							<thead class="inner-table__thead">
								<tr>
									<th>Opponent</th>
									<th>Date</th>
									<th>Result</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="logo-box"> <img src="<?php echo $image_path; ?>dehli.png" alt="logo dehli">
											<a href="#"> Dehli Capitals</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle red'>L</span><a href="#"> New Zealand won by 35 runs</a></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>lanka.png" alt="logo lanka"><a href="#">Shree Lanka</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle green'>W</span><a href="#"> New Zealand won by 35 runs</a></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>dehli.png" alt="logo dehli">
											<a href="#"> Dehli Capitals</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle red'>L</span><a href="#"> New Zealand won by 35 runs</a></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>lanka.png" alt="logo lanka"><a href="#">Shree Lanka</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle green'>W</span><a href="#"> New Zealand won by 35 runs</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>lanka.png" alt="logo lanka"><a href="#">Shree Lanka</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle">
											<span class='circle grey white'>N</span><a href="#"> New Zealand won by 35 runs</a>
										</div>
									</td>

								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr class=" expandable-row blue main-table__expandable-row">
					<td class="expandable-row__logo">
						<div class="logo-box"> <img src="<?php echo $image_path; ?>kaia.png" alt="logo Kaia">
							<a href="#">Innocent Kaia</a>
							<i class="fas fa-angle-down"></i>
						</div>
					</td>
					<td class="expandable-row__numb">25</td>
					<td class="expandable-row__numb">13</td>
					<td class="expandable-row__numb">7</td>
					<td class="expandable-row__numb"> 1</td>
					<td class="expandable-row__numb">3</td>
					<td class="expandable-row__numb">4</td>
					<td class="expandable-row__runs">
						<span class='circle red'>L</span>
						<span class='circle green'>W</span>
						<span class='circle red'>L</span>
						<span class='circle green'>W</span>
						<span class='circle grey'>N</span>
					</td>
				</tr>
				<tr class="hidden nested-table ">
					<td class="inner-table" colspan="8">
						<table>
							<thead class="inner-table__thead">
								<tr>
									<th>Opponent</th>
									<th>Date</th>
									<th>Result</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="logo-box"> <img src="<?php echo $image_path; ?>dehli.png" alt="logo dehli">
											<a href="#"> Dehli Capitals</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle red'>L</span><a href="#"> New Zealand won by 35 runs</a></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>lanka.png" alt="logo lanka"><a href="#">Shree Lanka</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle green'>W</span><a href="#"> New Zealand won by 35 runs</a></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>dehli.png" alt="logo dehli">
											<a href="#"> Dehli Capitals</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle red'>L</span><a href="#"> New Zealand won by 35 runs</a></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>lanka.png" alt="logo lanka"><a href="#">Shree Lanka</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle green'>W</span><a href="#"> New Zealand won by 35 runs</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>lanka.png" alt="logo lanka"><a href="#">Shree Lanka</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle">
											<span class='circle grey white'>N</span><a href="#"> New Zealand won by 35 runs</a>
										</div>
									</td>

								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr class=" expandable-row blue main-table__expandable-row">
					<td class="expandable-row__logo">
						<div class="logo-box"> <img src="<?php echo $image_path; ?>kaia.png" alt="logo Kaia">
							<a href="#">Innocent Kaia</a>
							<i class="fas fa-angle-down"></i>
						</div>
					</td>
					<td class="expandable-row__numb">25</td>
					<td class="expandable-row__numb">13</td>
					<td class="expandable-row__numb">7</td>
					<td class="expandable-row__numb"> 1</td>
					<td class="expandable-row__numb">3</td>
					<td class="expandable-row__numb">4</td>
					<td class="expandable-row__runs">
						<span class='circle red'>L</span>
						<span class='circle green'>W</span>
						<span class='circle red'>L</span>
						<span class='circle green'>W</span>
						<span class='circle grey'>N</span>
					</td>
				</tr>
				<tr class="hidden nested-table ">
					<td class="inner-table" colspan="8">
						<table>
							<thead class="inner-table__thead">
								<tr>
									<th>Opponent</th>
									<th>Date</th>
									<th>Result</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="logo-box"> <img src="<?php echo $image_path; ?>dehli.png" alt="logo dehli">
											<a href="#"> Dehli Capitals</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle red'>L</span><a href="#"> New Zealand won by 35 runs</a></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>lanka.png" alt="logo lanka"><a href="#">Shree Lanka</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle green'>W</span><a href="#"> New Zealand won by 35 runs</a></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>dehli.png" alt="logo dehli">
											<a href="#"> Dehli Capitals</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle red'>L</span><a href="#"> New Zealand won by 35 runs</a></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>lanka.png" alt="logo lanka"><a href="#">Shree Lanka</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle green'>W</span><a href="#"> New Zealand won by 35 runs</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>lanka.png" alt="logo lanka"><a href="#">Shree Lanka</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle">
											<span class='circle grey white'>N</span><a href="#"> New Zealand won by 35 runs</a>
										</div>
									</td>

								</tr>
							</tbody>
						</table>
					</td>
				</tr>

				<tr class=" expandable-row white main-table__expandable-row">
					<td class="expandable-row__logo">
						<div class="logo-box"> <img src="<?php echo $image_path; ?>kaia.png" alt="logo Kaia">
							<a href="#">Innocent Kaia</a>
							<i class="fas fa-angle-down"></i>
						</div>
					</td>
					<td class="expandable-row__numb">25</td>
					<td class="expandable-row__numb">13</td>
					<td class="expandable-row__numb">7</td>
					<td class="expandable-row__numb"> 1</td>
					<td class="expandable-row__numb">3</td>
					<td class="expandable-row__numb">4</td>
					<td class="expandable-row__runs">
						<span class='circle red'>L</span>
						<span class='circle green'>W</span>
						<span class='circle red'>L</span>
						<span class='circle green'>W</span>
						<span class='circle grey'>N</span>
					</td>
				</tr>
				<tr class="hidden nested-table ">
					<td class="inner-table" colspan="8">
						<table>
							<thead class="inner-table__thead">
								<tr>
									<th>Opponent</th>
									<th>Date</th>
									<th>Result</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="logo-box"> <img src="<?php echo $image_path; ?>dehli.png" alt="logo dehli">
											<a href="#"> Dehli Capitals</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle red'>L</span><a href="#"> New Zealand won by 35 runs</a></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>lanka.png" alt="logo lanka"><a href="#">Shree Lanka</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle green'>W</span><a href="#"> New Zealand won by 35 runs</a></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>dehli.png" alt="logo dehli">
											<a href="#"> Dehli Capitals</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle red'>L</span><a href="#"> New Zealand won by 35 runs</a></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>lanka.png" alt="logo lanka"><a href="#">Shree Lanka</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle green'>W</span><a href="#"> New Zealand won by 35 runs</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>lanka.png" alt="logo lanka"><a href="#">Shree Lanka</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle">
											<span class='circle grey white'>N</span><a href="#"> New Zealand won by 35 runs</a>
										</div>
									</td>

								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr class=" expandable-row white main-table__expandable-row">
					<td class="expandable-row__logo">
						<div class="logo-box"> <img src="<?php echo $image_path; ?>kaia.png" alt="logo Kaia">
							<a href="#">Innocent Kaia</a>
							<i class="fas fa-angle-down"></i>
						</div>
					</td>
					<td class="expandable-row__numb">25</td>
					<td class="expandable-row__numb">13</td>
					<td class="expandable-row__numb">7</td>
					<td class="expandable-row__numb"> 1</td>
					<td class="expandable-row__numb">3</td>
					<td class="expandable-row__numb">4</td>
					<td class="expandable-row__runs">
						<span class='circle red'>L</span>
						<span class='circle green'>W</span>
						<span class='circle red'>L</span>
						<span class='circle green'>W</span>
						<span class='circle grey'>N</span>
					</td>
				</tr>
				<tr class="hidden nested-table ">
					<td class="inner-table" colspan="8">
						<table>
							<thead class="inner-table__thead">
								<tr>
									<th>Opponent</th>
									<th>Date</th>
									<th>Result</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="logo-box"> <img src="<?php echo $image_path; ?>dehli.png" alt="logo dehli">
											<a href="#"> Dehli Capitals</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle red'>L</span><a href="#"> New Zealand won by 35 runs</a></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>lanka.png" alt="logo lanka"><a href="#">Shree Lanka</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle green'>W</span><a href="#"> New Zealand won by 35 runs</a></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>dehli.png" alt="logo dehli">
											<a href="#"> Dehli Capitals</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle red'>L</span><a href="#"> New Zealand won by 35 runs</a></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>lanka.png" alt="logo lanka"><a href="#">Shree Lanka</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle green'>W</span><a href="#"> New Zealand won by 35 runs</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>lanka.png" alt="logo lanka"><a href="#">Shree Lanka</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle">
											<span class='circle grey white'>N</span><a href="#"> New Zealand won by 35 runs</a>
										</div>
									</td>

								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr class=" expandable-row white main-table__expandable-row">
					<td class="expandable-row__logo">
						<div class="logo-box"> <img src="<?php echo $image_path; ?>kaia.png" alt="logo Kaia">
							<a href="#">Innocent Kaia</a>
							<i class="rotate-180 fas fa-angle-down"></i>
						</div>
					</td>
					<td class="expandable-row__numb">25</td>
					<td class="expandable-row__numb">13</td>
					<td class="expandable-row__numb">7</td>
					<td class="expandable-row__numb"> 1</td>
					<td class="expandable-row__numb">3</td>
					<td class="expandable-row__numb">4</td>
					<td class="expandable-row__runs">
						<span class='circle red'>L</span>
						<span class='circle green'>W</span>
						<span class='circle red'>L</span>
						<span class='circle green'>W</span>
						<span class='circle grey'>N</span>
					</td>
				</tr>
				<tr class=" nested-table ">
					<td class="inner-table" colspan="8">
						<table>
							<thead class="inner-table__thead">
								<tr>
									<th>Opponent</th>
									<th>Date</th>
									<th>Result</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="logo-box"> <img src="<?php echo $image_path; ?>dehli.png" alt="logo dehli">
											<a href="#"> Dehli Capitals</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle red'>L</span><a href="#"> New Zealand won by 35 runs</a></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>lanka.png" alt="logo lanka"><a href="#">Shree Lanka</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle green'>W</span><a href="#"> New Zealand won by 35 runs</a></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>dehli.png" alt="logo dehli">
											<a href="#"> Dehli Capitals</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle red'>L</span><a href="#"> New Zealand won by 35 runs</a></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>lanka.png" alt="logo lanka"><a href="#">Shree Lanka</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle green'>W</span><a href="#"> New Zealand won by 35 runs</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>lanka.png" alt="logo lanka"><a href="#">Shree Lanka</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle">
											<span class='circle grey white'>N</span><a href="#"> New Zealand won by 35 runs</a>
										</div>
									</td>

								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr class=" expandable-row white main-table__expandable-row">
					<td class="expandable-row__logo">
						<div class="logo-box"> <img src="<?php echo $image_path; ?>kaia.png" alt="logo Kaia">
							<a href="#">Innocent Kaia</a>
							<i class="fas fa-angle-down"></i>
						</div>
					</td>
					<td class="expandable-row__numb">25</td>
					<td class="expandable-row__numb">13</td>
					<td class="expandable-row__numb">7</td>
					<td class="expandable-row__numb"> 1</td>
					<td class="expandable-row__numb">3</td>
					<td class="expandable-row__numb">4</td>
					<td class="expandable-row__runs">
						<span class='circle red'>L</span>
						<span class='circle green'>W</span>
						<span class='circle red'>L</span>
						<span class='circle green'>W</span>
						<span class='circle grey'>N</span>
					</td>
				</tr>
				<tr class="hidden nested-table ">
					<td class="inner-table" colspan="8">
						<table>
							<thead class="inner-table__thead">
								<tr>
									<th>Opponent</th>
									<th>Date</th>
									<th>Result</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="logo-box"> <img src="<?php echo $image_path; ?>dehli.png" alt="logo dehli">
											<a href="#"> Dehli Capitals</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle red'>L</span><a href="#"> New Zealand won by 35 runs</a></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>lanka.png" alt="logo lanka"><a href="#">Shree Lanka</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle green'>W</span><a href="#"> New Zealand won by 35 runs</a></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>dehli.png" alt="logo dehli">
											<a href="#"> Dehli Capitals</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle red'>L</span><a href="#"> New Zealand won by 35 runs</a></div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>lanka.png" alt="logo lanka"><a href="#">Shree Lanka</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle"><span class='circle green'>W</span><a href="#"> New Zealand won by 35 runs</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="logo-box"><img src="<?php echo $image_path; ?>lanka.png" alt="logo lanka"><a href="#">Shree Lanka</a>
										</div>
									</td>
									<td>04 Nov</td>
									<td>
										<div class="main-table__circle">
											<span class='circle grey white'>N</span><a href="#"> New Zealand won by 35 runs</a>
										</div>
									</td>

								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
